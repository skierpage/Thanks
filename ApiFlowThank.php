<?php
/**
 * API module to send Flow thanks notifications
 *
 * @ingroup API
 * @ingroup Extensions
 */
class ApiFlowThank extends ApiBase {
	public function execute() {
		$this->dieIfEchoNotInstalled();

		$user = $this->getUser();
		$this->dieOnBadUser( $user );

		$params = $this->extractRequestParams();

		$post = $params['post-id'];
		if ( $this->userAlreadySentThanksForPost( $user, $post ) ) {
			$this->markResultSuccess();
		} else {
			$recipient = $this->getRecipientFromParams( $params );
			$this->dieOnBadRecipient( $user, $recipient );
			$this->sendThanks(
				$user,
				$recipient,
				$post,
				$params['workflow'],
				$params['topic-title'],
				$params['title']
			);
		}
	}

	private function dieIfEchoNotInstalled() {
		if ( !class_exists( 'EchoNotifier' ) ) {
			$this->dieUsage( 'Echo is not installed on this wiki', 'echonotinstalled' );
		}
	}

	private function userAlreadySentThanksForPost( User $user, $post ) {
		return $user->getRequest()->getSessionData( "thanks-thanked-{$post}" );
	}

	private function markResultSuccess() {
		$this->getResult()->addValue( null, 'result', array(
			'success' => 1,
		) );
	}

	private function getRecipientFromParams( $params ) {
		$recipient = User::newFromId( $params['recipient'] );
		if (!$recipient->loadFromId()) {
			$this->dieUsage( 'Recipient is invalid', 'invalidrecipient' );
		}
		return $recipient;
	}


	private function dieOnBadUser( User $user ) {
		if ( $user->isAnon() ) {
			$this->dieUsage( 'Anonymous users cannot send thanks', 'notloggedin' );
		} elseif ( $user->pingLimiter( 'thanks-notification' ) ) {
			$this->dieUsageMsg( array( 'actionthrottledtext' ) );
		} elseif ( $user->isBlocked() ) {
			$this->dieUsageMsg( array( 'blockedtext' ) );
		}
	}

	private function dieOnBadRecipient( User $agent, User $recipient ) {
		global $wgThanksSendToBots;

		if ( $agent->getId() === $recipient->getId() ) {
			$this->dieUsage( 'You cannot thank yourself', 'invalidrecipient' );
		} elseif ( !$wgThanksSendToBots && in_array( 'bot', $recipient->getGroups() ) ) {
			$this->dieUsage( 'Bots cannot be thanked', 'invalidrecipient' );
		}
	}

	private function sendThanks( User $user, User $recipient, $post, $workflow, $topicTitle, $title ) {
		global $wgThanksLogging;
		// Create the notification via Echo extension
		EchoEvent::create( array(
			'type' => 'flow-thank',
			'title' => Title::newFromText( $title ),
			'extra' => array(
				'post-id' => $post,
				'workflow' => $workflow,
				'thanked-user-id' => $recipient->getId(),
				'topic-title' => $topicTitle,
			),
			'agent' => $user,
		) );

		// Mark the thank in session to prevent duplicates (Bug 46690)
		$user->getRequest()->setSessionData( "thanks-thanked-{$post}", true );
		// Set success message
		$this->markResultSuccess();
		// Log it if we're supposed to log it
		if ( $wgThanksLogging ) {
			$logEntry = new ManualLogEntry( 'thanks', 'thank' );
			$logEntry->setPerformer( $user );
			$target = $recipient->getUserPage();
			$logEntry->setTarget( $target );
			$logId = $logEntry->insert();
			$logEntry->publish( $logId, 'udp' );
		}
	}

	public function getDescription() {
		return array(
			'This API is for sending thank you notifications for Flow comments.',
		);
	}

	public function getParamDescription() {
		return array(
			'recipient' => 'The author of the post to thank for',
			'post-id' => 'The UUID of the post',
			'workflow' => 'The workflow the post belongs to',
			'topic-title' => 'The topic of the workflow',
			'title' => 'The title of the page the post is on',
			'token' => 'An edit token (to prevent CSRF abuse)',
		);
	}

	public function getAllowedParams() {
		return array(
			'recipient' => array(
				ApiBase::PARAM_TYPE => 'integer',
				ApiBase::PARAM_MIN => 1,
				ApiBase::PARAM_REQUIRED => true,
			),
			'post-id' => array(
				ApiBase::PARAM_TYPE => 'string',
				ApiBase::PARAM_REQUIRED => true,
			),
			'workflow' => array(
				ApiBase::PARAM_TYPE => 'string',
				ApiBase::PARAM_REQUIRED => true,
			),
			'topic-title' => array(
				ApiBase::PARAM_TYPE => 'string',
				ApiBase::PARAM_REQUIRED => true,
			),
			'title' => array(
				ApiBase::PARAM_TYPE => 'string',
				ApiBase::PARAM_REQUIRED => true,
			),
			'token' => array(
				ApiBase::PARAM_TYPE => 'string',
				ApiBase::PARAM_REQUIRED => true,
			),
		);
	}

	public function needsToken() {
		return true;
	}

	// Writes to the Echo database and sometimes log tables.
	public function isWriteMode() {
		return true;
	}

	public function getTokenSalt() {
		return '';
	}

	public function getHelpUrls() {
		return array(
			'https://www.mediawiki.org/wiki/Extension:Thanks#API_Documentation',
		);
	}

	public function getVersion() {
		return __CLASS__ . '-1.0';
	}

}
