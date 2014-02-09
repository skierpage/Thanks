<?php
/**
 * Hooks for Thanks extension
 *
 * @file
 * @ingroup Extensions
 */

class ThanksFlowHooks {

	/**
	 * Handler for FlowRegisterModules
	 * @param  [type] $context [description]
	 * @return bool
	 */
	public static function onFlowRegisterModules( $context ) {
		$context->addModules( array( 'ext.thanks' ) );
		return true;
	}

	/**
	 * Handler for FlowAddInteractionLinks
	 * Inserts 'thank' link into flow post interface
	 * @param $rev Revision object to add the thank link for
	 * @param &$links array Links to add to the Flow post interface
	 * @return bool
	 */
	public static function onFlowAddPostInteractionLinks( $rev, $topic, $title, &$links, $classes ) {
		global $wgUser, $wgThanksSendToBots;
		// Make sure Echo is turned on.
		// Exclude anonymous users.
		// Don't let users thank themselves.
		// Exclude users who are blocked.
		if ( class_exists( 'EchoNotifier' )
			&& !$wgUser->isAnon()
			&& $rev->getCreatorId() !== $wgUser->getId()
			&& !$wgUser->isBlocked()
			// TODO: suppression level
			//&& !$rev->isDeleted( Revision::DELETED_TEXT
			//&& ( !$oldRev || $rev->getParentId() == $oldRev->getId() ) )
		) {
			$recipient = User::newFromId( $rev->getCreatorId() );
			$recipientAllowed = true;
			// If bots are not allowed, exclude them as recipients
			if ( !$wgThanksSendToBots ) {
				$recipientAllowed = !in_array( 'bot', $recipient->getGroups() );
			}
			if ( $recipientAllowed && !$recipient->isAnon() ) {
				$links[] = self::generateThankElement( $rev, $topic, $title, $recipient, $classes );
			}
		}
		return true;
	}

	/**
	 * Helper for self::insertThankLink
	 * Creates either a thank link or thanked span based on users session
	 * @param $rev Revision object to generate the thank element for
	 * @param $recipient User the user who receives thanks notification
	 * @return string
	 */
	protected static function generateThankElement( $rev, $topic, $title, $recipient, $classes ) {
		global $wgUser;
		// User has already thanked for revision
		if ( $wgUser->getRequest()->getSessionData( "thanks-thanked-{$rev->getPostId()}" ) ) {
			return Html::element(
				'span',
				array( 'class' => 'mw-thanks-flow-thanked ' . $classes),  //TODO fix the style
				wfMessage( 'thanks-button-thanked', $wgUser )->parse()
			);
		}

		// Add 'thank' link
		$tooltip = wfMessage( 'thanks-thank-tooltip' )
				->params( $wgUser->getName(), $recipient->getName() )
				->text();

		return Html::element(
			'a',
			array(
				'class' => 'mw-thanks-flow-thank-link ' . $classes, //TODO fix the style
				'href' => SpecialPage::getTitleFor( 'Thanks', 'flow/'.$rev->getPostId() )->getFullURL(),
				'title' => $tooltip,
				'data-post-id' => $rev->getPostId(),
				'data-workflow-id' => $topic->getPostId(),
				'data-creator-id' => $rev->getCreatorId(),
				'data-topic-title' => $topic->getContent( 'wikitext '),
				'data-title' => $title
			),
			wfMessage( 'thanks-button-thank', $wgUser )->parse()
		);
	}
}
