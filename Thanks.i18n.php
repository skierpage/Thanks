<?php
/**
 * Internationalization file for the Thanks extension.
 *
 * @file
 * @ingroup Extensions
 */

$messages = array();

/** English (English)
 * @author Shirayuki
 */
$messages['en'] = array(
	'thanks-desc' => 'Adds thank links to history and diff views',
	'thanks-thank' => 'thank',
	'thanks-thanked' => '{{GENDER:$1|thanked}}',
	'thanks-button-thank' => '{{GENDER:$1|Thank}}',
	'thanks-button-thanked' => '{{GENDER:$1|Thanked}}',
	'thanks-error-undefined' => 'Thank action failed. Please try again.',
	'thanks-error-invalidrevision' => 'Revision ID is not valid.',
	'thanks-error-ratelimited' => "{{GENDER:$1|You}}'ve exceeded your rate limit. Please wait some time and try again.",
	'thanks-thank-tooltip' => '{{GENDER:$1|Send}} a thank you notification to this {{GENDER:$2|user}}',
	'thanks-confirmation' => 'Do you want to {{GENDER:$1|thank}} $2 for this edit?',
	'thanks-thanked-notice' => '$1 was notified that you liked {{GENDER:$2|his|her|their}} edit.',
	'thanks' => 'Send thanks',
	'thanks-form-revid' => 'Revision ID for edit',
	'thanks-already-thanked' => '{{GENDER:$1|You}} have already sent thanks for this edit.',
	'echo-pref-subscription-edit-thank' => 'Thanks me for my edit',
	'echo-pref-tooltip-edit-thank' => 'Notify me when someone thanks me for an edit I made.',
	'echo-category-title-edit-thank' => 'Thanks',
	'notification-thanks-diff-link' => 'your edit',
	'notification-thanks' => '[[User:$1|$1]] {{GENDER:$1|thanked}} you for $2 on [[:$3]].',
	'notification-thanks-flyout2' => '[[User:$1|$1]] {{GENDER:$1|thanked}} you for your edit on $2.',
	'notification-thanks-email-subject' => '$1 {{GENDER:$1|thanked}} you for your edit on {{SITENAME}}',
	'notification-thanks-email-batch-body' => '$1 {{GENDER:$1|thanked}} you for your edit on $2.',
	'notification-link-text-respond-to-user' => 'Respond to user',
	'log-name-thanks' => 'Thanks log',
	'log-description-thanks' => 'Below is a list of users thanked by other users.',
	'logentry-thanks-thank' => '$1 {{GENDER:$2|thanked}} {{GENDER:$4|$3}}',
	'log-show-hide-thanks' => '$1 thanks log',
);

/** Message documentation (Message documentation)
 * @author Amire80
 * @author Pxos
 * @author Raymond
 * @author Shirayuki
 * @author Siebrand
 */
$messages['qqq'] = array(
	'thanks-desc' => '{{desc|name=Thanks|url=http://www.mediawiki.org/wiki/Extension:Thanks}}',
	'thanks-thank' => '{{Doc-actionlink}}
A link to thank another user. This appears next to messages such as {{msg-mw|editundo}} and {{msg-mw|rollbacklink}} and should be translated in a similar fashion.
{{Identical|Thank}}',
	'thanks-thanked' => "This message immediately replaces the message {{msg-mw|Thanks-thank}} after it's pressed. It means that the thanking operation has been completed.

It can be translated as \"''thanked''\" in \"You thanked the user\" or \"The user has just been ''thanked''\" - whatever is appropriate to your language.

Parameters:
* \$1 - the current user, for GENDER support",
	'thanks-button-thank' => 'Text of a button to thank another user. Same as {{msg-mw|Thanks-thank}}, but the context is in a button.

Parameters:
* $1 - user object for GENDER support
{{Identical|Thank}}',
	'thanks-button-thanked' => "This message immediately replaces the message {{msg-mw|Thanks-button-thank}} after it's pressed. It means that the thanking operation has been completed.

Same as {{msg-mw|Thanks-thanked}}, but the context is in a button.

Parameters:
* $1 - the current user, for GENDER support",
	'thanks-error-undefined' => 'Error message that is displayed when the thank action fails.
{{Identical|Please try again}}',
	'thanks-error-invalidrevision' => 'Error message that is displayed when the revision ID is not valid',
	'thanks-error-ratelimited' => 'Error message that is displayed when user exceeds rate limit. Parameters:
* $1 - gender',
	'thanks-thank-tooltip' => 'Tooltip that appears when a user hovers over the "thank" link.  Parameters
* $1 - The user sending the thanks.  Can be used for GENDER support.
* $2 - The user receiving the thanks.  Can be used for GENDER support',
	'thanks-confirmation' => 'A confirmation message to make sure the user actually wants to send thanks to another user.

Parameters:
* $1 - the user sending the thanks. Can be used for GENDER.
* $2 - the username of the recipient. Can NOT be used for GENDER.',
	'thanks-thanked-notice' => '{{doc-singularthey}}
Pop-up message that is displayed after a user has thanked another user for their edit.

Parameters:
* $1 - the username of the user that was thanked
* $2 - the gender of the user that was thanked',
	'thanks' => '{{doc-special|Thanks|unlisted=1}}
The special page contains the form to thank for the edit.',
	'thanks-form-revid' => 'Label for form field where the user inputs the revision ID.',
	'thanks-already-thanked' => "Message shown to user if they have already sent thanks for this edit. Parameters:
* $1 - the user's username",
	'echo-pref-subscription-edit-thank' => 'Option for getting notifications when someone thanks the user for their edit.

This is the conclusion of the sentence begun by the header: {{msg-mw|Prefs-echosubscriptions}}.',
	'echo-pref-tooltip-edit-thank' => 'This is a short description of the edit-thank notification category.
{{Related|Echo-pref-tooltip}}',
	'echo-category-title-edit-thank' => 'This is a short title for the notification category.

Used as <code>$1</code> in {{msg-mw|Echo-dismiss-message}} and as <code>$2</code> in {{msg-mw|Echo-email-batch-category-header}}
{{Related|Echo-category-title}}
{{Identical|Thank}}',
	'notification-thanks-diff-link' => "The text of a link to the user's edit.

Used for <code>$2</code> in {{msg-mw|Notification-thanks}}. Should have capitalization appropriate for the middle of a sentence.

This is an object in a sentence so it should be in object case in languages where there is a special object form for words.",
	'notification-thanks' => "Format for displaying notifications when a user is thanked for their edit. Parameters:
* $1 is the username of the person sending the thanks, as plain text. Can be used for GENDER.
* $2 is a link to the user's edit. The text of the link is {{msg-mw|Notification-thanks-diff-link}}.
* $3 is the title of the page the user edited.",
	'notification-thanks-flyout2' => 'Format for displaying notifications in the flyout when a user is thanked for their edit. Parameters:
* $1 is the username of the person sending the thanks, as plain text. Can be used for GENDER.
* $2 is the title of the page the user edited.',
	'notification-thanks-email-subject' => 'E-mail subject. Parameters:
* $1 is the username of the person sending the thanks, as plain text. Can be used for GENDER.',
	'notification-thanks-email-batch-body' => 'E-mail notification. Parameters:
* $1 is the username of the person sending the thanks, as plain text. Can be used for GENDER.
* $2 the title of the page the user edited.',
	'notification-link-text-respond-to-user' => 'Label for button that links to a user page.',
	'log-name-thanks' => 'Name of log that appears on [[Special:Log]].',
	'log-description-thanks' => 'Description of thanks log',
	'logentry-thanks-thank' => 'Log entry that is created when a user thanks another user for an edit. Parameters:
* $1 is a user link, for example "Jane Doe (Talk | contribs)"
* $2 is a username. Can be used for GENDER.
* $3 is a user link, for example "John Doe (Talk | contribs)
* $4 is the username of the recipient. Can be used for GENDER.',
	'log-show-hide-thanks' => 'Shown on [[Special:Log]] as a link to show/hide thanks log entries. (Hidden by default)
* $1 - one of {{msg-mw|Show}} or {{msg-mw|Hide}}
{{Related|Log-show-hide}}',
);

/** Afrikaans (Afrikaans)
 * @author Naudefj
 */
$messages['af'] = array(
	'thanks-desc' => 'Voeg \'n "Bedank"-skakel by geskiedenis en weergawe-verskille',
	'thanks-thank' => 'bedank',
	'thanks-thanked' => '{{GENDER:$1|is bedank}}',
	'thanks-button-thank' => '{{GENDER:$1|Bedank}}',
	'thanks-button-thanked' => '{{GENDER:$1|Is bedank}}',
	'thanks-error-undefined' => 'Bedanking het gefaal. Probeer asseblief weer.',
	'thanks-error-invalidrevision' => 'Die weergawenommer is nie geldig nie.',
	'thanks-error-ratelimited' => '{{GENDER:$1|U}} het u limiet vir bedankings oorskry. Wag eers en probeer dan weer.',
	'thanks-thank-tooltip' => "{{GENDER:$1|Stuur}} die {{GENDER:$2|gebruiker}} 'n dankiesê-kennisgewing",
	'thanks-confirmation' => 'Wil u $2 vir hierdie wysiging {{GENDER:$1|bedank}}?',
	'thanks-thanked-notice' => '$1 is in kennis gestel dat u van {{GENDER:$2|sy|haar|sy/haar}} wysiging hou.',
	'thanks' => 'Stuur bedanking',
	'thanks-form-revid' => 'Weergawe-ID vir wysiging',
	'thanks-already-thanked' => "{{GENDER:$1|U}} het al 'n bedanking vir hierdie wysiging gestuur.",
	'echo-pref-subscription-edit-thank' => "as iemand u vir 'n wysiging bedank",
	'echo-pref-tooltip-edit-thank' => "Laat my weet as iemand my vir 'n wysiging bedank.",
	'echo-category-title-edit-thank' => 'Dankiesê-kennisgewings',
	'notification-thanks-diff-link' => 'u wysiging',
	'notification-thanks' => '[[User:$1|$1]] {{GENDER:$1|het}} u op [[:$3]] vir $2 bedank.',
	'notification-thanks-flyout2' => '[[User:$1|$1]] {{GENDER:$1|het}} u vir u wysiging aan $2 bedank.',
	'notification-thanks-email-subject' => '$1 {{GENDER:$1|het}} u vir u wysiging bewerking op {{SITENAME}} bedank',
	'notification-thanks-email-batch-body' => '$1 {{GENDER:$1|het}} u vir u wysiging aan $2 bedank.',
	'notification-link-text-respond-to-user' => 'Reageer op bedanking',
	'log-name-thanks' => 'Bedankingslogboek',
	'log-description-thanks' => "Hieronder is 'n lys van gebruikers wat deur ander gebruikers bedank is.",
	'logentry-thanks-thank' => '$1 {{GENDER:$2|het}} {{GENDER:$4|$3}} bedank',
	'log-show-hide-thanks' => 'bedankingslogboek $1',
);

/** Arabic (العربية)
 * @author Asaifm
 * @author ترجمان05
 * @author زكريا
 * @author مشعل الحربي
 */
$messages['ar'] = array(
	'thanks-desc' => 'تضيف روابط للشكر على صفحات التاريخ والفرق',
	'thanks-thank' => 'شكر',
	'thanks-thanked' => '{{GENDER:$1|تم إرسال الشكر}}',
	'thanks-button-thank' => '{{GENDER:$1|شكر}}',
	'thanks-button-thanked' => '{{GENDER:$1|تم إرسال الشكر}}',
	'thanks-error-undefined' => 'فشل إرسال الشكر، الرجاء المحاولة مجددًا.',
	'thanks-error-invalidrevision' => 'معرّف المراجعة غير صحيح.',
	'thanks-error-ratelimited' => 'لقد {{GENDER:$1|تجاوزت}} حد التقييم، الرجاء الانتظار لبعض الوقت ثم المحاولة مجددًا.',
	'thanks-thank-tooltip' => '{{GENDER:$1|أرسل|أرسلي}} إشعار شكر ل{{GENDER:$2|هذا المستخدم|هذه المستخدمة}}',
	'thanks-confirmation' => 'هل {{GENDER:$1|تريد|تريدين}} شكر $2 على هذا التعديل?',
	'thanks-thanked-notice' => 'تم إشعار $1 بأن {{GENDER:$2|تعديله|تعديلها|تعديلهم}} أعجبك.',
	'echo-pref-subscription-edit-thank' => 'شكري على تعديلي',
	'echo-pref-tooltip-edit-thank' => 'أشعرني عندما يشكرني أحد ما على تعديل قمت به.',
	'echo-category-title-edit-thank' => 'شكر',
	'notification-thanks-diff-link' => 'تعديلك',
	'notification-thanks' => '{{GENDER:$1|شكرك|شكرتك}} [[User:$1|$1]] على $2 في [[:$3]].',
	'notification-thanks-flyout2' => '{{GENDER:$1|شكرك|شكرتك}} [[User:$1|$1]] على تعديلك في $2.',
	'notification-thanks-email-subject' => '$1 {{GENDER:$1|شكرك|شكرتك}} على تعديلك في {{SITENAME}}',
	'notification-thanks-email-batch-body' => '$1 {{GENDER:$1|شكرك|شكرتك}} على تعديلك في $2.',
	'notification-link-text-respond-to-user' => 'الرد على المستخدم',
	'log-name-thanks' => 'سجل الشكر',
	'log-description-thanks' => 'بالأسفل قائمة مستخدمين تلقوا شكرًا من مستخدمين آخرين.',
	'logentry-thanks-thank' => '$1 {{GENDER:$2|شكر|شكرت}} {{GENDER:$4|$3}}',
	'log-show-hide-thanks' => '$1 سجل الشكر',
);

/** Asturian (asturianu)
 * @author Xuacu
 */
$messages['ast'] = array(
	'thanks-desc' => "Amiesta enllaces d'agradecimientu a les vistes d'historial y diferencies",
	'thanks-thank' => 'agradecer',
	'thanks-thanked' => '{{GENDER:$1|agradecíu|agradecida}}',
	'thanks-button-thank' => '{{GENDER:$1|Agradecer}}',
	'thanks-button-thanked' => '{{GENDER:$1|Agradecíu|Agradecida}}',
	'thanks-error-undefined' => "Falló l'aición d'agradecimientu. Por favor, vuelva a probar.",
	'thanks-error-invalidrevision' => 'La ID de la revisión nun ye válida.',
	'thanks-error-ratelimited' => "{{GENDER:$1|Pasó}} la llende d'agradecimientos. Espere un tiempu y vuelva a intentalo.",
	'thanks-thank-tooltip' => "{{GENDER:$1|Unviar}} una nota d'agradecimientu a {{GENDER:$2|esti usuariu|esta usuaria}}",
	'thanks-confirmation' => '¿Quier {{GENDER:$1|agradecer}} a $2 esta edición?',
	'thanks-thanked-notice' => "$1 recibió l'avisu de que-y gustó {{GENDER:$2|la so}} edición.",
	'thanks' => 'Agradecer',
	'thanks-form-revid' => 'ID de revisión pa la edición',
	'thanks-already-thanked' => '{{GENDER:$1|Yá}} agradeció esta edición.',
	'echo-pref-subscription-edit-thank' => 'Agradecimientos pola mio edición',
	'echo-pref-tooltip-edit-thank' => 'Avisame cuando alguién me de les gracies por una edición de mio.',
	'echo-category-title-edit-thank' => 'Gracies',
	'notification-thanks-diff-link' => 'la so edición',
	'notification-thanks' => '[[User:$1|$1]] ta {{GENDER:$1|agradecíu|agradecida}} por $2 en [[:$3]].',
	'notification-thanks-flyout2' => '[[User:$1|$1]] {{GENDER:$1|agradeció}} la so edición de $2.',
	'notification-thanks-email-subject' => '$1 {{GENDER:$1|agradeció}} la so edición en {{SITENAME}}',
	'notification-thanks-email-batch-body' => '$1 {{GENDER:$1|agradeció}} la so edición en $2.',
	'notification-link-text-respond-to-user' => 'Contestar al usuariu',
	'log-name-thanks' => "Rexistru d'agradecimientos",
	'log-description-thanks' => "Mas abaxo ta la llista d'usuarios a los qu'otros usuarios dieron les gracies.",
	'logentry-thanks-thank' => '$1 {{GENDER:$2|dio les gracies a}} {{GENDER:$4|$3}}',
	'log-show-hide-thanks' => "$1 rexistru d'agradecimientos",
);

/** Azerbaijani (azərbaycanca)
 * @author Interfase
 * @author Khan27
 */
$messages['az'] = array(
	'thanks-desc' => 'Tarixə minətdarlıq keçidləri əlavə edir və versiyaların müqayisəsi',
	'thanks-thank' => 'təşəkkür',
	'thanks-button-thank' => '{{GENDER:$1|Təşəkkür}}',
);

/** Belarusian (беларуская)
 * @author Дзяніс Тутэйшы
 * @author Чаховіч Уладзіслаў
 */
$messages['be'] = array(
	'thanks-desc' => 'Дадае падзячныя спасылкі на гісторыю і параўнанне версій',
	'thanks-thank' => 'дзякуй',
	'thanks-thanked' => '{{GENDER:$1|падзякаваў|падзякавала}}',
	'thanks-button-thank' => '{{GENDER:$1|Дзякуй}}',
	'thanks-error-undefined' => 'На атрымалася падзякаваць. Паспрабуйце зноў.',
	'thanks-error-invalidrevision' => 'Некарэктны нумар версіі.',
	'thanks-error-ratelimited' => 'Вы перавысілі абмежаванне хуткасці выканання такіх дзеянняў. Калі ласка, пачакайце некаторы час і паспрабуйце зноў.', # Fuzzy
	'thanks-thank-tooltip' => '{{GENDER:$1|Адправіць}} {{GENDER:$2|гэтаму ўдзельніку|гэтай удзельніцы}} паведамленне з падзякай',
	'thanks-confirmation' => 'Жадаеце {{GENDER:$1|падзякаваць}} $2 за гэту праўку?',
	'thanks-thanked-notice' => '$1 {{GENDER:$2|быў абвешчаны|была абвешчана|былі абвешчаны}}, што вам спадабалася {{GENDER:$2|яго|яе|іх}} праўка.',
	'echo-pref-subscription-edit-thank' => 'Дзякуй мне за маю праўку',
	'echo-pref-tooltip-edit-thank' => 'Паведамляць мне, калі хтосьці дзякуе мяне за зробленую мной праўку.',
	'echo-category-title-edit-thank' => 'Дзякуй',
	'notification-thanks-diff-link' => 'вашу праўку',
	'notification-thanks' => '[[User:$1|$1]] {{GENDER:$1|падзякаваў|падзякавала}} вам за $2 на старонцы «[[:$3]]».',
	'notification-thanks-flyout2' => '[[User:$1|$1]] {{GENDER:$1|падзякаваў|падзякавала}} вам за вашу праўку на старонцы «$2».',
	'notification-thanks-email-subject' => '$1 {{GENDER:$1|падзякаваў|падзякавала}} вам за вашу праўку на сайце «{{SITENAME}}».',
	'notification-thanks-email-batch-body' => '$1 {{GENDER:$1|падзякаваў|падзякавала}} вам за вашу праўку на старонцы «$2».',
	'notification-link-text-respond-to-user' => 'Адказаць удзельніку',
	'log-name-thanks' => 'Часопіс падазяк',
	'log-description-thanks' => 'Ніжэй прыведзены спіс удзельнікаў, якія атрымалі падзякі ад іншых удзельнікаў.',
	'logentry-thanks-thank' => '$1 {{GENDER:$2|падзякаваў|падзякавала}} {{GENDER:$4|удзельніку|ўдзельніцы}} $3',
	'log-show-hide-thanks' => '$1 журнал падзяк',
);

/** Belarusian (Taraškievica orthography) (беларуская (тарашкевіца)‎)
 * @author Renessaince
 * @author Zedlik
 */
$messages['be-tarask'] = array(
	'thanks-desc' => 'Дадае спасылкі з падзякамі у гісторыю і параўнаньне вэрсыяў',
	'thanks-thank' => 'дзякуй',
	'thanks-thanked' => '{{GENDER:$1|падзякаваў|падзякавала}}',
	'thanks-button-thank' => 'Дзякуй', # Fuzzy
	'thanks-button-thanked' => '{{GENDER:$1|Падзякаваў|Падзякавала}}',
	'thanks-error-undefined' => 'Не атрымалася падзякаваць. Паспрабуйце яшчэ раз.',
	'thanks-error-invalidrevision' => 'Няслушны ідэнтыфікатар вэрсіі',
	'thanks-error-ratelimited' => 'Вы перавысілі абмежаваньне хуткасьці выкананьня. Пачакайце крыху і паўтарыце спробу.', # Fuzzy
	'thanks-thank-tooltip' => '{{GENDER:$1|Адаслаць}} {{GENDER:$2|гэтаму карыстальніку|гэтай карыстальніцы}} падзяку',
	'thanks-confirmation' => 'Вы насамрэч хочаце {{GENDER:$1|падзякаваць}} $2 за гэтую праўку?', # Fuzzy
	'thanks-thanked-notice' => '$1 {{GENDER:$2|атрымаў|атрымала|атрымалі}} паведамленьне пра вашае ўпадабаньне {{GENDER:$2|ягонай|ейнай|іхняй}} праўкі.',
	'echo-pref-subscription-edit-thank' => 'Дзякуе мне за маю праўку',
	'echo-pref-tooltip-edit-thank' => 'Паведаміць мне, калі нехта дзякуе за мае праўкі.',
	'echo-category-title-edit-thank' => 'Дзякуй',
	'notification-thanks-diff-link' => 'вашае рэдагаваньне',
	'notification-thanks' => '[[User:$1|$1]] {{GENDER:$1|падзякаваў|падзякавала}} Вам за $2 на [[:$3]].',
	'notification-thanks-flyout2' => '[[User:$1|$1]] {{GENDER:$1|падзякаваў|падзякавала}} Вам за Вашую праўку на $2.',
	'notification-thanks-email-subject' => '$1 {{GENDER:$1|падзякаваў|падзякавала}} Вам за Вашую праўку на {{SITENAME}}.',
	'notification-thanks-email-batch-body' => '$1 {{GENDER:$1|падзякаваў|падзякавала}} Вам за Вашую праўку на $2.',
	'notification-link-text-respond-to-user' => 'Адказаць удзельніку',
	'log-name-thanks' => 'Журнал падзякаў',
	'log-description-thanks' => 'Ніжэй знаходзіцца сьпіс удзельнікаў, якія атрымалі падзякі.',
	'logentry-thanks-thank' => '$1 {{GENDER:$2|падзякаваў|падзякавала}} {{GENDER:$4|удзельніку|удзельніцы}} $3',
	'log-show-hide-thanks' => 'Журнал падзякаў $1',
);

/** Bulgarian (български)
 * @author DCLXVI
 * @author Termininja
 */
$messages['bg'] = array(
	'echo-pref-tooltip-edit-thank' => 'Уведомяване, когато някой изкаже благодарност за редакция, която съм направил.',
	'echo-category-title-edit-thank' => 'Благодарност',
	'notification-thanks-email-subject' => '$1 {{GENDER:$1|изразява благодарност}} за редакциите ви в {{SITENAME}}',
	'notification-thanks-email-batch-body' => '$1 {{GENDER:$1|изказа благодарност}} за редакцията, която сте направили в $2.',
);

/** Bengali (বাংলা)
 * @author Aftab1995
 * @author Bellayet
 * @author Nasir8891
 */
$messages['bn'] = array(
	'thanks-desc' => 'ইতিহাস পাতায় ধন্যবাদ লিংক সংযোজন',
	'thanks-thank' => 'ধন্যবাদ',
	'thanks-thanked' => '{{GENDER:$1|ধন্যবাদ জানিয়েছেন}}',
	'thanks-button-thank' => '{{GENDER:$1|ধন্যবাদ}}',
	'thanks-button-thanked' => '{{GENDER:$1|ধন্যবাদ জানিয়েছেন}}',
	'thanks-error-undefined' => 'ধন্যবাদ পদক্ষেপ ব্যর্থ। অনুগ্রহ করে আবার চেষ্টা করুন।',
	'thanks-error-invalidrevision' => 'সংশোধনের আইডি বৈধ নয়।',
	'thanks-error-ratelimited' => '{{GENDER:$1|আপনি}} রেট করার সর্বোচ্চ সীমা অতিক্রম করেছেন। অনুগ্রহ করে অপেক্ষা করুন এবং পুনরায় চেষ্টা করুন।',
	'thanks-thank-tooltip' => 'এই {{GENDER:$2|ব্যবহারকারীকে}} ধন্যবাদ বিজ্ঞপ্তি {{GENDER:$1|পাঠান}}',
	'thanks-confirmation' => 'আপনি কি এই সম্পাদনার জন্য $2কে {{GENDER:$1|ধন্যবাদ}} জানাতে চান?',
	'thanks-thanked-notice' => '$1-কে জাননো হয়েছে যে আপনি {{GENDER:$2|তার|তার|তাদের}} সম্পাদনা পছন্দ করেছেন।',
	'echo-pref-subscription-edit-thank' => 'আমার সম্পাদনার জন্য আমার ধন্যবাদসমূহ',
	'echo-pref-tooltip-edit-thank' => 'আমার কোনো সম্পাদনার জন্য কেউ আমাকে ধন্যবাদ দিলে তা আমাকে জানাও',
	'echo-category-title-edit-thank' => 'ধন্যবাদসমূহ',
	'notification-thanks-diff-link' => 'আপনার সম্পাদনা',
	'notification-thanks' => '[[User:$1|$1]] আপনাকে [[:$3]] পাতায় $2 এর জন্য {{GENDER:$1|ধন্যবাদ}} জানিয়েছেন।',
	'notification-thanks-flyout2' => '$2 পাতায় সম্পাদনার জন্য [[User:$1|$1]]  আপনাকে {{GENDER:$1|ধন্যবাদ}} জানিয়েছেন।',
	'notification-thanks-email-subject' => '{{SITENAME}} সম্পাদনার জন্য $1 আপনাকে {{GENDER:$1|ধন্যবাদ}} জানিয়েছেন।',
	'notification-thanks-email-batch-body' => '$2-এ সম্পাদনার জন্য $1 আপনাকে {{GENDER:$1|ধন্যবাদ}} জানিয়েছেন।',
	'notification-link-text-respond-to-user' => 'ব্যবহারকারীর প্রতিক্রিয়া',
	'log-name-thanks' => 'ধন্যবাদ লগ',
	'log-description-thanks' => 'নিচে ব্যবহারকারীদের একটি তালিকা রয়েছে যারা অন্য ব্যবহারকারী হতে ধন্যবাদ পেয়েছেন।',
	'logentry-thanks-thank' => '$1 {{GENDER:$4|$3}}কে {{GENDER:$2|ধন্যবাদ জানিয়েছেন}}',
	'log-show-hide-thanks' => 'ধন্যবাদ লগ $1',
);

/** Breton (brezhoneg)
 * @author VIGNERON
 * @author Y-M D
 */
$messages['br'] = array(
	'thanks-desc' => 'Ouzhpenn trugarez liammoù en istor ha dif.',
	'thanks-thank' => 'trugarez',
	'thanks-thanked' => '{{GENDER:$1|trugarekaet}}',
	'thanks-button-thank' => '{{GENDER:$1|Trugarez}}',
	'thanks-button-thanked' => '{{GENDER:$1|Trugarekaet}}',
	'echo-category-title-edit-thank' => 'Trugarez',
	'notification-thanks-diff-link' => 'ho kemm',
	'notification-link-text-respond-to-user' => "Respont d'an implijer",
	'logentry-thanks-thank' => '$1 {{GENDER:$2|en deus|he deus}} trugarekaet {{GENDER:$4|$3}}',
);

/** Bosnian (bosanski)
 * @author DzWiki
 * @author Edinwiki
 */
$messages['bs'] = array(
	'thanks-desc' => 'Dodaje mogućnost zahvaljivanja u pregledu historije i pregledu razlike između izmjena',
	'thanks-thank' => 'zahvali se',
	'thanks-thanked' => '{{GENDER:$1|zahvalio se|zahvalila se}}',
	'thanks-error-undefined' => 'Nije bilo moguće zahvaliti se. Pokušajte ponovo.',
	'thanks-error-invalidrevision' => 'Revizioni ID nije validan.',
	'thanks-error-ratelimited' => '{{GENDER:$1|Prekoračili ste}} vaše ograničenje za ocijenjivanje. Sačekajte jedno vrijeme i zatim pokušajte ponovo.',
	'thanks-thank-tooltip' => '{{GENDER:$1|Pošalji}} zahvalnicu {{GENDER:$2|ovom korisniku|оvoj korisnici}}',
	'thanks-confirmation' => 'Da li ste sigurni da se hoćete {{GENDER:$1|zahvaliti}} korisniku $2 za ovu izmjenu?', # Fuzzy
	'echo-pref-subscription-edit-thank' => 'Neko mi se zahvali za moju izmjenu',
	'echo-pref-tooltip-edit-thank' => 'Obavijesti me ako mi se neko zahvali za moju izmjenu.',
	'echo-category-title-edit-thank' => 'Zahvale',
	'notification-thanks-diff-link' => 'vašoj izmjeni',
	'notification-thanks' => '[[User:$1|$1]] vam se {{GENDER:$1|zahvaljuje}} na $2 stranice [[:$3]].',
	'notification-thanks-flyout2' => '[[User:$1|$1]] vam se {{GENDER:$1|zahvaljuje}} na vašoj izmjeni na stranici $2.',
	'notification-thanks-email-subject' => '$1 vam se {{GENDER:$1|zahvaljuje}} na vašoj izmjeni na {{SITENAME}}',
	'notification-thanks-email-batch-body' => '$1 vam se {{GENDER:$1|zahvaljuje}} na vašoj izmjeni na stranici $2.',
	'notification-link-text-respond-to-user' => 'Odgovori korisniku',
	'log-name-thanks' => 'Zapis zahvalnica',
	'log-description-thanks' => 'Ispod se nalazi spisak korisnika kojima su se drugi korisnici zahvalili.',
	'logentry-thanks-thank' => '$1 se {{GENDER:$2|zahvaljuje}} korisniku {{GENDER:$4|$3}}',
);

/** Catalan (català)
 * @author QuimGil
 * @author Vriullop
 */
$messages['ca'] = array(
	'thanks-desc' => "Afegeix enllaços d'agraïment a les pàgines d'historial i diferències de revisions.",
	'thanks-thank' => 'agraeix',
	'thanks-thanked' => '{{GENDER:$1|agraït}}',
	'thanks-button-thank' => '{{GENDER:$1|Agraeix}}',
	'thanks-button-thanked' => '{{GENDER:$1|Agraït|Agraïda}}',
	'thanks-error-undefined' => "L'agraïment ha fallat. Si us plau torneu a intentar-ho.",
	'thanks-error-invalidrevision' => "L'identificador de revisió no és vàlid.",
	'thanks-error-ratelimited' => "{{GENDER:$1|Heu}} excedit el límit d'agraïments. Si us plau espereu una mica abans de tornar-hi.",
	'thanks-thank-tooltip' => "{{GENDER:$1|Envia}} una notificació d'agraïment a {{GENDER:$2|aquest usuari|aquesta usuària}}.",
	'thanks-confirmation' => 'Voleu {{GENDER:$1|agrair}} $2 per aquesta edició?',
	'thanks-thanked-notice' => '$1 ha rebut el vostre agraïment per {{GENDER:$2|el seu|la seva}} edició.',
	'echo-pref-subscription-edit-thank' => 'Agraeix la meva edició',
	'echo-pref-tooltip-edit-thank' => "Notifica'm quan algú agraeix una edició que he fet.",
	'echo-category-title-edit-thank' => 'Agraïments',
	'notification-thanks-diff-link' => "l'edició",
	'notification-thanks' => '[[User:$1|$1]] us {{GENDER:$1|ha agraït}} $2 a [[:$3]].',
	'notification-thanks-flyout2' => '[[User:$1|$1]] {{GENDER:$1|agraeix}} la vostra edició a $2.',
	'notification-thanks-email-subject' => '$1 {{GENDER:$1|agraeix}} la vostra edició a {{SITENAME}}',
	'notification-thanks-email-batch-body' => '$1 {{GENDER:$1|agraeix}} la teva edició a $2.',
	'notification-link-text-respond-to-user' => "Respondre a l'usuari",
	'log-name-thanks' => "Registre d'agraïments",
	'log-description-thanks' => "A continuació teniu una llista d'usuaris agraïts per part d'altres usuaris.",
	'logentry-thanks-thank' => '$1 {{GENDER:$2|ha agraït}} {{GENDER:$4|$3}}',
	'log-show-hide-thanks' => "$1 el registre d'agraïments",
);

/** Min Dong Chinese (Mìng-dĕ̤ng-ngṳ̄)
 * @author Yejianfei
 */
$messages['cdo'] = array(
	'thanks-desc' => '添加感謝鏈接遘歷史再區分觀點',
	'thanks-thank' => '感謝',
	'thanks-thanked' => '{{GENDER:$1|感謝}}',
	'thanks-button-thank' => '{{GENDER:$1|感謝}}',
	'thanks-button-thanked' => '{{GENDER:$1|感謝}}',
	'thanks-error-undefined' => '感謝行動失敗了。起動再試蜀回。',
	'thanks-error-invalidrevision' => '校訂編號𣍐合法。',
	'thanks-error-ratelimited' => '{{GENDER:$1|汝}}已經超出汝其比率限制。起動等仂固再試蜀試。',
	'thanks-thank-tooltip' => '{{GENDER:$1|發出}}蜀萆感謝通知遘茲蜀萆{{GENDER:$2|用戶}}',
	'thanks-confirmation' => '汝有想{{GENDER:$1|感謝}}$2其茲蜀萆編輯無？',
	'thanks-thanked-notice' => '$1已經接著汝喜歡{{GENDER:$2|伊其}}編辑其通知。',
	'echo-pref-subscription-edit-thank' => '感謝我其修改',
	'echo-pref-tooltip-edit-thank' => '有儂因為我其編輯感謝我辰候通知我。',
	'echo-category-title-edit-thank' => '謝謝',
	'notification-thanks-diff-link' => '汝其編輯',
	'notification-thanks' => '[[User:$1|$1]]{{GENDER:$1|感謝}}汝敆[[:$3]]其$2。',
	'notification-thanks-flyout2' => '[[User:$1|$1]]因為汝敆$2上其編輯{{GENDER:$1|感謝}}汝。',
	'notification-thanks-email-subject' => '$1因為汝敆{{SITENAME}}上其編輯{{GENDER:$1|感謝}}汝',
	'notification-thanks-email-batch-body' => '$1因為汝敆$2上其編輯{{GENDER:$1|感謝}}汝。',
	'notification-link-text-respond-to-user' => '回覆遘用戶',
	'log-name-thanks' => '感謝日誌',
	'log-description-thanks' => '下底是乞其他用戶感謝過其用戶其蜀萆單單。',
	'logentry-thanks-thank' => '$1{{GENDER:$2|感謝}}{{GENDER:$4|$3}}',
	'log-show-hide-thanks' => '$1感謝日誌',
);

/** Chechen (нохчийн)
 * @author Умар
 */
$messages['ce'] = array(
	'thanks-desc' => 'Истори чу а версин башхала хьожечухь а баркалла олу хьажорагаш тӀетуху',
	'thanks-thank' => 'баркалла',
	'thanks-thanked' => '{{GENDER:$1|Баркалла аьлла}}',
	'thanks-thank-tooltip' => '{{GENDER:$1|Бахьийта}} {{GENDER:$2|хӀокху декъашхочунга}} баркаллин хаам',
	'thanks-confirmation' => 'Лаьий хьуна {{GENDER:$1|баркалла ала}} хӀара нисдарна?', # Fuzzy
	'echo-pref-tooltip-edit-thank' => 'Хаийта соьга, цхьам баркалла аьлча.',
	'echo-category-title-edit-thank' => 'Баркалла',
	'notification-thanks-diff-link' => 'нисдар',
	'notification-thanks' => 'Ахьа «[[:$3]]» агӀонехь $2 дарна [[User:$1|$1]] {{GENDER:$1|баркалла аьла}}.',
	'notification-thanks-flyout2' => 'Ахьа хӀара «$2» агӀо таярна [[User:$1|$1]] хьуна {{GENDER:$1|баркалла аьла}}.',
	'notification-thanks-email-subject' => '$1 {{GENDER:$1|баркалла аьла}} «{{SITENAME}}» сайтехь тадар дарна.',
	'notification-thanks-email-batch-body' => '$1 {{GENDER:$1|баркалла аьла}} ахьа хӀара «$2» агӀо таярна.',
	'log-name-thanks' => 'Баркаллин тептар',
	'log-description-thanks' => 'Кхечу декъашхоша баркалла аьлла болу декъашхой чохь болу тептар.',
	'logentry-thanks-thank' => '{{GENDER:$4|декъашхочуна}} $3 $1 {{GENDER:$2|баркалла аьла}}',
	'log-show-hide-thanks' => '$1 баркаллин тептар',
);

/** Sorani Kurdish (کوردی)
 * @author Calak
 */
$messages['ckb'] = array(
	'thanks-desc' => 'بەستەرەکانی سپاس بە مێژوو و نیشاندانی جیاوزاییەکان زیاد دەکا',
	'thanks-thank' => 'سپاس',
	'thanks-thanked' => '{{GENDER:$1|سپاس کرا}}',
	'thanks-error-undefined' => 'سپاسکردن سەرکەوتوو نەبوو. تکایە دیسان ھەوڵ بدەوە.',
	'thanks-error-invalidrevision' => 'پێداچوونەوەی پێناسە نادروستە.',
	'thanks-error-ratelimited' => 'تۆ زیاتر لە سنووری خێرایی چووی. تکایە ھەندێک ڕاوەستە و دیسان ھەوڵ بدەوە.', # Fuzzy
	'thanks-thank-tooltip' => 'ئاگادارییەکی سپاس بۆ ئەم {{GENDER:$2|بەکارھێنەرە}} {{GENDER:$1|بنێرە}}',
	'thanks-confirmation' => 'دڵنیای دەتەوەێ سپاسی $2 {{GENDER:$1|بکەی}} بۆ ئەم دەستکارییە؟', # Fuzzy
	'echo-pref-subscription-edit-thank' => 'بۆ دەستکارییەکم سپاسم بکە',
	'echo-pref-tooltip-edit-thank' => 'کاتێک یەکێک بۆ دەستکارییەکی من کردوومە سپاسم دەکا، ئاگادارم بکە.',
	'echo-category-title-edit-thank' => 'سپاس',
	'notification-thanks-diff-link' => 'دەستکارییەکەت',
	'notification-thanks' => '[[User:$1|$1]] سپاسی {{GENDER:$1|کردی}} بۆ $2 لە [[:$3]]دا.',
	'notification-thanks-flyout2' => '[[User:$1|$1]] سپاسی {{GENDER:$1|کردی}} بۆ دەستکارییەکەت لە $2دا.',
	'notification-thanks-email-subject' => '$1 سپاسی {{GENDER:$1|کردی}} بۆ دەستکارییەکەت لە {{SITENAME}}دا.',
	'notification-thanks-email-batch-body' => '$1 سپاسی {{GENDER:$1|کردی}} بۆ دەستکارییەکەت لە $2دا.',
	'notification-link-text-respond-to-user' => 'وەڵام بۆ بەکارھێنەر',
	'log-name-thanks' => 'لۆگی سپاس',
	'log-description-thanks' => 'ژێرەوە پێرستێکی لەو بەکارھێنەرانەن کە لە لایەن بەکارھێنەرانی ترەوە سپاسیان لێ کراوە.',
	'logentry-thanks-thank' => '$1 {{GENDER:$2|سپاس کرد}} لە {{GENDER:$4|$3}}',
	'log-show-hide-thanks' => 'لۆگی سپاس $1',
);

/** Czech (čeština)
 * @author Littledogboy
 * @author Mormegil
 */
$messages['cs'] = array(
	'thanks-desc' => 'Přidává do historie a zobrazení rozdílů odkazy pro poděkování',
	'thanks-thank' => 'poděkovat',
	'thanks-thanked' => '{{GENDER:$1|poděkováno}}',
	'thanks-button-thank' => '{{GENDER:$1|Poděkovat}}',
	'thanks-button-thanked' => '{{GENDER:$1|Poděkováno}}',
	'thanks-error-undefined' => 'Poděkování se nezdařilo. Zkuste to prosím znovu.',
	'thanks-error-invalidrevision' => 'ID revize je neplatné.',
	'thanks-error-ratelimited' => '{{GENDER:$1|Překročil|Překročila|Překročili}} jste rychlostní limit. Počkejte prosím chvíli a zkuste to znovu.',
	'thanks-thank-tooltip' => '{{GENDER:$1|Poslat}} {{GENDER:$2|tomuto uživateli|této uživatelce}} poděkování',
	'thanks-confirmation' => 'Chcete za tuto editaci uživateli $2 {{GENDER:$1|poděkovat}}?',
	'thanks-thanked-notice' => '{{GENDER:$2|Uživatel|Uživatelka}} $1 {{GENDER:$2|byl informován|byla informována}} o tom, že se vám {{GENDER:$2|jeho|její}} editace líbila.',
	'thanks' => 'Poslat poděkování',
	'thanks-form-revid' => 'ID revize',
	'thanks-already-thanked' => 'Za tuto editaci jste již {{GENDER:$1|poděkoval|poděkovala|poděkovali}}.',
	'echo-pref-subscription-edit-thank' => '…mi někdo poděkuje za editaci',
	'echo-pref-tooltip-edit-thank' => 'Upozorněte mě, když mi někdo poděkuje za editaci.',
	'echo-category-title-edit-thank' => 'poděkování',
	'notification-thanks-diff-link' => 'vaši úpravu',
	'notification-thanks' => '[[User:$1|$1]] vám {{GENDER:$1|poděkoval|poděkovala}} za $2 stránky [[:$3]].',
	'notification-thanks-flyout2' => '[[User:$1|$1]] vám {{GENDER:$1|poděkoval|poděkovala}} za editaci stránky $2.',
	'notification-thanks-email-subject' => '$1 vám {{GENDER:$1|poděkoval|poděkovala}} za vaši editaci na {{grammar:6sg|{{SITENAME}}}}',
	'notification-thanks-email-batch-body' => '$1 vám {{GENDER:$1|poděkoval|poděkovala}} za vaši úpravu stránky $2.',
	'notification-link-text-respond-to-user' => 'Odpovědět uživateli',
	'log-name-thanks' => 'Kniha poděkování',
	'log-description-thanks' => 'Níže je seznam uživatelů, kterým ostatní uživatelé poděkovali.',
	'logentry-thanks-thank' => '$1 {{GENDER:$2|poděkoval|poděkovala}} {{GENDER:$4|uživateli|uživatelce}} $3',
	'log-show-hide-thanks' => '$1 knihu poděkování',
);

/** Welsh (Cymraeg)
 * @author Lloffiwr
 */
$messages['cy'] = array(
	'thanks-desc' => "Yn ychwanegu cysylltau diolch i'r golygon hanes a diff",
	'thanks-thank' => 'diolch',
	'thanks-thanked' => '{{GENDER:$1|diolchwyd}}',
	'thanks-button-thank' => '{{GENDER:$1|Diolcher}}',
	'thanks-button-thanked' => '{{GENDER:$1|Diolchwyd}}',
	'thanks-error-undefined' => 'Methodd y weithred o ddiolch. Ceisiwch eto.',
	'thanks-error-invalidrevision' => 'Nid yw ID y diwygiad yn ddilys.',
	'thanks-error-ratelimited' => "{{GENDER:$1|Rydych}} wedi gwneud mwy o weithredoedd y funud na'r nifer a ganiateir. Arhoswch ennyd ac yna ceisiwch eto.",
	'thanks-thank-tooltip' => "{{GENDER:$1|Anfon}} gair o ddiolch i'r {{GENDER:$2|defnyddiwr}} hwn",
	'thanks-confirmation' => 'Ydych chi am {{GENDER:$1|ddiolch}} i $2 am y golygiad hwn?',
	'thanks-thanked-notice' => "Hysbyswyd $1 eich bod yn hoff o'i {{GENDER:$2|adolygiad|hadolygiad|adolygiad}}.",
	'thanks' => 'Anfon diolchiadau',
	'thanks-form-revid' => 'ID y golygiad',
	'thanks-already-thanked' => '{{GENDER:$1|Rydych}} eisoes wedi anfon gair o ddiolch am y golygiad hwn.',
	'echo-pref-subscription-edit-thank' => 'Fy niolch am fy ngolygiad',
	'echo-pref-tooltip-edit-thank' => "Hysbyser fi pan fo rhywun yn fy niolch am un o'm golygiadau.",
	'echo-category-title-edit-thank' => 'Diolch',
	'notification-thanks-diff-link' => 'eich golygiad',
	'notification-thanks' => '{{GENDER:$1|Anfonodd}} [[User:$1|$1]] air o ddiolch i chi am $2 ar [[:$3]].',
	'notification-thanks-flyout2' => '{{GENDER:$1|Anfonodd}} [[User:$1|$1]] air o ddiolch i chi am $2.',
	'notification-thanks-email-subject' => '{{GENDER:$1|Anfonodd}} $1 air o ddiolch i chi am eich golygiad ar {{SITENAME}}',
	'notification-thanks-email-batch-body' => '{{GENDER:$1|Anfonodd}} $1 air o ddiolch i chi am eich golygiad ar $2.',
	'notification-link-text-respond-to-user' => 'Ateb y defnyddiwr',
	'log-name-thanks' => 'Lòg diolchiadau',
	'log-description-thanks' => 'Dyma restr o ddefnyddwyr yr anfonwyd gair o ddiolch atynt gan ddefnyddwyr eraill.',
	'logentry-thanks-thank' => '{{GENDER:$2|Anfonodd}} $1 air o ddiolch i {{GENDER:$4|$3}}',
	'log-show-hide-thanks' => '$1 y lòg diolchiadau',
);

/** Danish (dansk)
 * @author Christian List
 * @author Palnatoke
 */
$messages['da'] = array(
	'thanks-desc' => 'Tilføjer takkelinks til historik og forskelsvisninger',
	'thanks-thank' => 'tak',
	'thanks-thanked' => '{{GENDER:$1|takkede}}',
	'thanks-button-thank' => '{{GENDER:$1|Tak}}',
	'thanks-button-thanked' => '{{GENDER:$1|Takkede}}',
	'thanks-error-undefined' => 'Takkehandlingen mislykkedes. Prøv venligst igen.',
	'thanks-error-invalidrevision' => 'Versions-ID er ikke gyldigt.',
	'thanks-error-ratelimited' => '{{GENDER:$1|Du}} har overskredet din frekvensgrænse. Vent et stykke tid og prøv igen.',
	'thanks-thank-tooltip' => '{{GENDER:$1|Send}} en takkemeddelelse til denne  {{GENDER:$2| bruger}}',
	'thanks-confirmation' => 'Vil du {{GENDER:$1|takke}} $2 for denne redigering?',
	'thanks-thanked-notice' => '$1 fik at vide, at du kan lide {{GENDER:$2|hans|hendes|deres}} redigering.',
	'thanks' => 'Send tak',
	'thanks-form-revid' => 'Versions-ID for redigering',
	'thanks-already-thanked' => '{{GENDER:$1|Du}} har allerede sendt tak for denne redigering.',
	'echo-pref-subscription-edit-thank' => 'Takker mig for min redigering',
	'echo-pref-tooltip-edit-thank' => 'Giv mig besked, når nogen takker mig for en redigering jeg har lavet.',
	'echo-category-title-edit-thank' => 'Tak!',
	'notification-thanks-diff-link' => 'din redigering',
	'notification-thanks' => '[[User:$1|$1]]  {{GENDER:$1| takkede}} dig for $2 på [[:$3]].',
	'notification-thanks-flyout2' => '[[User:$1|$1]] {{GENDER:$1|takkede}} dig for din redigering på $2.',
	'notification-thanks-email-subject' => '$1 {{GENDER:$1|takkede}} dig for din redigering på {{SITENAME}}',
	'notification-thanks-email-batch-body' => '$1 {{GENDER:$1|takkede}} dig for din redigering på $2.',
	'notification-link-text-respond-to-user' => 'Svar til bruger',
	'log-name-thanks' => 'Takkelog',
	'log-description-thanks' => 'Nedenfor er en liste over brugere, som er blevet takket af andre brugere.',
	'logentry-thanks-thank' => '$1 {{GENDER:$2|takkede}} {{GENDER:$4|$3}}',
	'log-show-hide-thanks' => '$1 takkelog',
);

/** German (Deutsch)
 * @author Kghbln
 * @author MF-Warburg
 * @author Metalhead64
 * @author TMg
 * @author Wnme
 */
$messages['de'] = array(
	'thanks-desc' => 'Ergänzt Versionsgeschichte und Versionsunterschiede um die Möglichkeit, sich für die entsprechende Bearbeitung zu bedanken',
	'thanks-thank' => 'danken',
	'thanks-thanked' => '{{GENDER:$1|bereits bedankt}}',
	'thanks-button-thank' => '{{GENDER:$1|Danken}}',
	'thanks-button-thanked' => '{{GENDER:$1|Bedankt}}',
	'thanks-error-undefined' => 'Dankeschön fehlgeschlagen. Bitte erneut versuchen.',
	'thanks-error-invalidrevision' => 'Die Versionskennung ist ungültig.',
	'thanks-error-ratelimited' => '{{GENDER:$1|Du}} hast dein Aktionslimit überschritten. Bitte warte einige Zeit und versuche es erneut.',
	'thanks-thank-tooltip' => '{{GENDER:$2|Diesem Benutzer|Dieser Benutzerin}} ein Dankeschön {{GENDER:$1|senden}}',
	'thanks-confirmation' => 'Möchtest du $2 für diese Bearbeitung {{GENDER:$1|danken}}?',
	'thanks-thanked-notice' => '$1 wurde benachrichtigt, dass du {{GENDER:$2|seine|ihre|ihre}} Bearbeitung magst.',
	'thanks' => 'Dankeschöns senden',
	'thanks-form-revid' => 'Versionskennung für die Bearbeitung',
	'thanks-already-thanked' => '{{GENDER:$1|Du}} hast bereits ein Dankeschön für diese Bearbeitung gesendet.',
	'echo-pref-subscription-edit-thank' => 'Dankeschöns für meine Bearbeitung',
	'echo-pref-tooltip-edit-thank' => 'Benachrichtige mich, wenn mir jemand für eine Bearbeitung dankt, die ich gemacht habe.',
	'echo-category-title-edit-thank' => 'Dankeschön',
	'notification-thanks-diff-link' => 'deine Bearbeitung',
	'notification-thanks' => '[[User:$1|$1]] {{GENDER:$1|dankt}} dir für $2 auf [[:$3]].',
	'notification-thanks-flyout2' => '[[User:$1|$1]] {{GENDER:$1|dankt}} dir für deine Bearbeitung auf „$2“.',
	'notification-thanks-email-subject' => '$1 {{GENDER:$1|dankt}} dir für deine Bearbeitung auf {{SITENAME}}',
	'notification-thanks-email-batch-body' => '$1 {{GENDER:$1|dankt}} dir für deine Bearbeitung auf $2.',
	'notification-link-text-respond-to-user' => 'Antwort an Benutzer',
	'log-name-thanks' => 'Dankeschön-Logbuch',
	'log-description-thanks' => 'Es folgt eine Liste von Benutzern, die anderen Benutzern dankten.',
	'logentry-thanks-thank' => '$1 {{GENDER:$2|dankte}} {{GENDER:$4|$3}}',
	'log-show-hide-thanks' => 'Dankeschön-Logbuch $1',
);

/** Zazaki (Zazaki)
 * @author Gorizon
 * @author Marmase
 * @author Mirzali
 */
$messages['diq'] = array(
	'thanks-thank' => 'teşekur kena',
	'thanks-thanked' => '{{GENDER:$1|teşekur ke}}',
	'thanks-button-thank' => '{{GENDER:$1|Teşekur kena}}',
	'thanks-button-thanked' => '{{GENDER:$1|teşekur ke}}',
	'thanks' => 'Teşekur bırışe',
	'echo-category-title-edit-thank' => 'Teşekuri',
	'notification-thanks-diff-link' => 'vırnayışa to',
	'log-name-thanks' => 'Qeydé tşekuran',
	'logentry-thanks-thank' => "$1'i  {{GENDER:$4|$3}}'ré {{GENDER:$2|teşekur ke}}",
	'log-show-hide-thanks' => 'Qeydé teşekuré $1',
);

/** Lower Sorbian (dolnoserbski)
 * @author Derbeth
 * @author Michawiki
 */
$messages['dsb'] = array(
	'thanks-desc' => 'Pśidawa źěkowe wótkaze historiji a wersijowym rozdźělam',
	'thanks-thank' => 'źěkowaś se',
	'thanks-thanked' => '{{GENDER:$1|jo se źěkował|jo se źěkowała}}',
	'thanks-button-thank' => '{{GENDER:$1|Źěkowaś se}}',
	'thanks-button-thanked' => '{{GENDER:$1|Jo se źěkował|Jo se źěkowała}}',
	'thanks-error-undefined' => 'Źěkowanje njejo se raźiło. Pšosym wopytaj hyšći raz.',
	'thanks-error-invalidrevision' => 'Wersijowy ID njejo płaśiwy.',
	'thanks-error-ratelimited' => '{{GENDER:$1|Ty}} sy swój akciski limit {{GENDER:$1|pśekšocył|pśekšocyła}}. Pšosym cakaj chylku a wopytaj hyšći raz.',
	'thanks-thank-tooltip' => 'Źěkowu powěźeńku toś {{GENDER:$2|wužywarjeju|wužywarce}} {{GENDER:$1|pósłaś}}',
	'thanks-confirmation' => 'Coš se $2 za toś tu změnu {{GENDER:$1|źěkowaś}}?',
	'thanks-thanked-notice' => '$1 jo se {{GENDER:$1|informěrował|informěrowała}}, až {{GENDER:$2|jogo|jeje}} změna jo śi spódobała.',
	'thanks' => 'Źěk pósłaś',
	'thanks-form-revid' => 'Wersijowy ID za změnu',
	'thanks-already-thanked' => 'Sy južo źěk za toś tu změnu {{GENDER:$1|pósłał|pósłała}}.',
	'echo-pref-subscription-edit-thank' => 'Źěkujo se mě za móju změnu.',
	'echo-pref-tooltip-edit-thank' => 'Informěruj mě, gaž něchten źěkujo se mě za změnu, kótaruž som cynił.',
	'echo-category-title-edit-thank' => 'Wjeliki źěk',
	'notification-thanks-diff-link' => 'twója změna',
	'notification-thanks' => '[[User:$1|$1]] jo se śi za $2 na [[:$3]] {{GENDER:$1|źěkował|źěkowała}}.',
	'notification-thanks-flyout2' => '[[User:$1|$1]] jo se śi za změnu na $2 {{GENDER:$1|źěkował|źěkowała}}.',
	'notification-thanks-email-subject' => '$1 jo se śi za twóju změnu na {{GRAMMAR:lokatiw|{{SITENAME}}}} {{GENDER:$1|źěkował|źěkowała}}',
	'notification-thanks-email-batch-body' => '$1 jo se śi za twóju změnu na $2 {{GENDER:$1|źěkował|źěkowała}}.',
	'notification-link-text-respond-to-user' => 'Wótegrono wužywarjeju',
	'log-name-thanks' => 'Źěkowy protokol',
	'log-description-thanks' => 'Dołojce jo lisćina wužywarjow, kótarymž druge wužywarje su se źěkowali.',
	'logentry-thanks-thank' => '$1 jo {{GENDER:$4|$3}} {{GENDER:$2|źěkował|źěkowała}}',
	'log-show-hide-thanks' => 'Źěkowy protokol $1',
);

/** Greek (Ελληνικά)
 * @author Geraki
 */
$messages['el'] = array(
	'thanks-desc' => 'Προσθήκη συνδέσμων για ευχαριστήρια στις εμφανίσεις ιστορικού και διαφορών',
	'thanks-thank' => 'ευχαριστία',
	'thanks-thanked' => '{{GENDER:$1|δέχθηκε ευχαριστίες}}',
	'thanks-button-thank' => 'Ευχαριστώ', # Fuzzy
	'thanks-button-thanked' => '{{GENDER:$1|δέχθηκε ευχαριστίες}}',
	'thanks-error-undefined' => 'Η ενέργεια ευχαριστίας απέτυχε. Παρακαλούμε δοκιμάστε ξανά.',
	'thanks-error-invalidrevision' => 'Το ID αναθεώρησης δεν είναι έγκυρο.',
	'thanks-error-ratelimited' => 'Έχετε υπερβεί το όριό σας. Παρακαλούμε περιμένετε κάποιο χρονικό διάστημα και προσπαθήστε ξανά.', # Fuzzy
	'thanks-thank-tooltip' => '{{GENDER:$1|Έστειλε}} μια ειδοποίηση ευχαριστίας σε {{GENDER:$2|αυτόν τον χρήστη|αυτή την χρήστη}}',
	'thanks-confirmation' => '{{GENDER:$1|Θέλεις}} να ευχαριστήσεις τον/την $2 για αυτή την επεξεργασία;',
	'thanks-thanked-notice' => '{{GENDER:$2|Ο|Η}} $1 ενημερώθηκε ότι σου άρεσε η επεξεργασία {{GENDER:$2|του|της}}.', # Fuzzy
	'echo-pref-subscription-edit-thank' => 'Με ευχαριστεί για την επεξεργασία μου',
	'echo-pref-tooltip-edit-thank' => 'Να ειδοποιούμαι όταν κάποιος με ευχαριστεί για μια επεξεργασία που έκανα.',
	'echo-category-title-edit-thank' => 'Ευχαριστίες',
	'notification-thanks-diff-link' => 'την επεξεργασία σου',
	'notification-thanks' => '{{GENDER:$1|Ο|Η}} [[User:$1|$1]] σε ευχαρίστησε για $2 στο [[:$3]].',
	'notification-thanks-flyout2' => '{{GENDER:$1|Ο|Η}} [[User:$1|$1]] σε ευχαρίστησε για την επεξεργασία σου στη $2.',
	'notification-thanks-email-subject' => '{{GENDER:$1|Ο|Η}} $1 σε ευχαρίστησε για την επεξεργασία σου στο {{SITENAME}}.',
	'notification-thanks-email-batch-body' => '{{GENDER:$1|Ο|Η}} $1 σε ευχαρίστησε για την επεξεργασία σου στο $2.',
	'notification-link-text-respond-to-user' => 'Απάντηση στο χρήστη',
	'log-name-thanks' => 'Καταγραφή ευχαριστηρίων',
	'log-description-thanks' => 'Παρακάτω είναι μια λίστα των χρηστών που ευχαριστήθηκαν από άλλους χρήστες.',
	'logentry-thanks-thank' => '{{GENDER:$2|Ο|Η}} $1 ευχαρίστησε {{GENDER:$4|τον|την}} $3',
	'log-show-hide-thanks' => '$1 καταγραφής ευχαριστηρίων',
);

/** Esperanto (Esperanto)
 * @author KuboF
 */
$messages['eo'] = array(
	'thanks-desc' => 'Aldoni danko-ligilon al historio kaj diferenco-montro.',
	'thanks-thank' => 'danki',
	'thanks-thanked' => '{{GENDER:$1|dankita}}',
	'thanks-button-thank' => '{{GENDER:$1|Danki}}',
	'thanks-error-invalidrevision' => 'Identigilo de revizio estas nevalida.',
	'thanks-confirmation' => 'Ĉu vi volas {{GENDER:$1|danki}} al $2 pro tiu ĉi redakto?',
	'echo-pref-subscription-edit-thank' => 'Danki al mi pro miaj redaktoj',
	'echo-pref-tooltip-edit-thank' => 'Sciigu min kiam iu dankas al mi pro mia redakto.',
	'echo-category-title-edit-thank' => 'Dankoj',
	'notification-thanks-diff-link' => 'via redakto',
	'notification-thanks' => '[[User:$1|$1]] {{GENDER:$1|dankis}} al vi pro $2 en [[:$3]].',
	'notification-link-text-respond-to-user' => 'Respondi al uzanto',
	'log-name-thanks' => 'Protokolo de dankoj',
	'log-description-thanks' => 'Sube estas listo de uzantoj al kiuj aliaj uzantoj dankis.',
	'log-show-hide-thanks' => '$1 protokolon de dankoj',
);

/** Spanish (español)
 * @author Alan
 * @author Fitoschido
 * @author Hahc21
 * @author Julian leonardo paez
 * @author PoLuX124
 * @author Sethladan
 */
$messages['es'] = array(
	'thanks-desc' => 'Añade enlaces para agradecer desde el historial y las diferencias entre ediciones',
	'thanks-thank' => 'agradecer',
	'thanks-thanked' => '{{GENDER:$1|agradeció}}',
	'thanks-button-thank' => '{{GENDER:$1|Gracias}}',
	'thanks-button-thanked' => 'agradecid{{GENDER:$1|o|a}}',
	'thanks-error-undefined' => 'La acción de agradecimiento falló. Inténtalo de nuevo.',
	'thanks-error-invalidrevision' => 'El id. de revisión no es válido.',
	'thanks-error-ratelimited' => 'Has excedido tu límite. Por favor, espera un tiempo e intenta de nuevo.', # Fuzzy
	'thanks-thank-tooltip' => '{{GENDER:$1|Enviar}} una notificación de agradecimiento a {{GENDER:$2|este|esta|este}} {{GENDER:$2|usuario|usuaria|usuario}}',
	'thanks-confirmation' => '¿Quieres agradecer a $2 por esta edición?', # Fuzzy
	'thanks-thanked-notice' => '$1 fue notificad{{GENDER:$2|o|a|o}} de que te ha gustado su edición.',
	'thanks' => 'Enviar agradecimiento',
	'thanks-form-revid' => 'Id. de revisión',
	'thanks-already-thanked' => 'Ya has {{GENDER:$1|enviado}} un agradecimiento por esta edición.',
	'echo-pref-subscription-edit-thank' => 'Agradecerme por mi edición',
	'echo-pref-tooltip-edit-thank' => 'Notificarme cuando alguien me agradezca por una edición que haya realizado.',
	'echo-category-title-edit-thank' => 'Gracias',
	'notification-thanks-diff-link' => 'tu edición',
	'notification-thanks' => '[[User:$1|$1]] te ha agradecido por $2 en [[:$3]].',
	'notification-thanks-flyout2' => '[[User:$1|$1]] te ha agradecido por tu edición en $2.',
	'notification-thanks-email-subject' => '$1 {{GENDER:$1|agradeció}} tu edición en {{SITENAME}}',
	'notification-thanks-email-batch-body' => '$1 te ha agradecido por tu edición en $2.',
	'notification-link-text-respond-to-user' => 'Responder al usuario',
	'log-name-thanks' => 'Registro de agradecimientos',
	'log-description-thanks' => 'A continuación, una lista de usuarios que han sido agradecidos por otros usuarios.',
	'logentry-thanks-thank' => '$1 {{GENDER:$2|agradeció}} a {{GENDER:$4|$3}}',
	'log-show-hide-thanks' => '$1 registro de agradecimientos',
);

/** Estonian (eesti)
 * @author Kyng
 * @author Pikne
 */
$messages['et'] = array(
	'thanks-desc' => 'Lisab ajalugudesse ja erinevuse vaadete juurde tänulingid.',
	'thanks-thank' => 'täna',
	'thanks-thanked' => '{{GENDER:$1|tänatud}}',
	'thanks-button-thank' => '{{GENDER:$1|Täna}}',
	'thanks-button-thanked' => '{{GENDER:$1|Tänatud}}',
	'thanks-error-undefined' => 'Tänamine ebaõnnestus. Palun proovi uuesti.',
	'thanks-error-invalidrevision' => 'Redaktsiooni identifikaator ei sobi.',
	'thanks-error-ratelimited' => '{{GENDER:$1|Oled}} ületanud piirangumäära. Palun oota natuke ja proovi uuesti.',
	'thanks-thank-tooltip' => '{{GENDER:$1|Saada}} sellele {{GENDER:$2|kasutajale}} tänuteavitus',
	'thanks-confirmation' => 'Kas tahad kasutajat $2 selle muudatuse eest {{GENDER:$1|tänada}}?',
	'thanks-thanked-notice' => 'Kasutajale $1 on edasi öeldud, et sulle meeldis {{GENDER:$2|tema}} muudatus.',
	'thanks' => 'Tänu avaldamine',
	'thanks-form-revid' => 'Muudatuse redaktsiooni identifikaator',
	'thanks-already-thanked' => '{{GENDER:$1|Oled}} selle muudatuse eest juba tänu avaldanud.',
	'echo-pref-subscription-edit-thank' => 'Mind tänatakse minu muudatuse eest',
	'echo-pref-tooltip-edit-thank' => 'Teavita mind, kui keegi tänab mind tehtud muudatuse eest.',
	'echo-category-title-edit-thank' => 'Tänamine',
	'notification-thanks-diff-link' => 'sinu muudatuse',
	'notification-thanks' => '[[User:$1|$1]] {{GENDER:$1|tänas}} sind $2 eest leheküljel [[:$3]].',
	'notification-thanks-flyout2' => '[[User:$1|$1]] tänas sind sinu muudatuse eest leheküljel $2.',
	'notification-thanks-email-subject' => '$1 tänas sind {{GRAMMAR:inessive|{{SITENAME}}}} muudatuse eest',
	'notification-thanks-email-batch-body' => '$1 tänas sind sinu muudatuse eest leheküljel $2.',
	'notification-link-text-respond-to-user' => 'Vasta kasutajale',
	'log-name-thanks' => 'Tänulogi',
	'log-description-thanks' => 'Allpool on nimekiri kasutajatest, keda teised kasutajad on tänanud.',
	'logentry-thanks-thank' => '$1 {{GENDER:$2|tänas}} kasutajat {{GENDER:$4|$3}}',
	'log-show-hide-thanks' => '$1 tänulogi',
);

/** Basque (euskara)
 * @author Xabier Armendaritz
 */
$messages['eu'] = array(
	'thanks-thank' => 'eskertu',
	'thanks-thanked' => '{{GENDER:$1|eskertuta}}',
	'thanks-button-thank' => '{{GENDER:$1|Eskertu}}',
	'thanks-button-thanked' => '{{GENDER:$1|Eskertuta}}',
	'thanks-confirmation' => '$2 wikilariari edizio hau {{GENDER:$1|eskertu}} nahi diozu?',
	'notification-thanks-diff-link' => 'edizioa',
	'notification-thanks' => '[[User:$1|$1]] {{GENDER:$1|wikilariak}} «[[:$3]]» orrian egin duzun $2 eskertu dizu.',
	'notification-thanks-flyout2' => '[[User:$1|$1]] wikilariak «$2» orrian egin duzun edizioa eskertu dizu.',
	'notification-thanks-email-subject' => '{{SITENAME}} gunean egin duzun edizioa eskertu dizu $1 {{GENDER:$1|wikilariak}}',
	'notification-thanks-email-batch-body' => '«$2» orrian egin duzun edizioa eskertu dizu $1 {{GENDER:$1|wikilariak}}.',
	'logentry-thanks-thank' => '$1 {{GENDER:$2|wikilariak}} eskerrak eman dizkio {{GENDER:$4|$3}} wikilariari',
);

/** Persian (فارسی)
 * @author A.R.Rostamzade
 * @author Dalba
 * @author Ebraminio
 * @author Ladsgroup
 * @author Omidh
 * @author Reza1615
 * @author ZxxZxxZ
 * @author درفش کاویانی
 */
$messages['fa'] = array(
	'thanks-desc' => 'گزینهٔ «تشکر» را به تاریخچه و نمایش تفاوت‌ها می‌افزاید.',
	'thanks-thank' => 'تشکر',
	'thanks-thanked' => '{{GENDER:$1|تشکر شد}}',
	'thanks-button-thank' => '{{GENDER:$1|تشکر}}',
	'thanks-button-thanked' => '{{GENDER:$1|تشکر شد}}',
	'thanks-error-undefined' => 'عمل تشکر ناموفق بود. لطفاً دوباره امتحان کنید.',
	'thanks-error-invalidrevision' => 'شناسهٔ نسخه معتبر نیست.',
	'thanks-error-ratelimited' => '{{GENDER:$1|شما}} از محدودهٔ سرعت مجاز فراتر رفته‌اید. لطفاً کمی صبر کنید و دوباره امتحان کنید.',
	'thanks-thank-tooltip' => '{{GENDER:$1|فرستادن}} پیام تشکر به این {{GENDER:$2|کاربر}}',
	'thanks-confirmation' => 'آیا می‌خواهید برای این ویرایش از $2 {{GENDER:$1|تشکر کنید}}؟',
	'thanks-thanked-notice' => 'به $1 اطلاع داده شد که شما از ویرایش {{GENDER:$2|او}} تشکر کرده‌اید.',
	'thanks' => 'ارسال تشکر',
	'thanks-form-revid' => 'شناسهٔ نسخه برای ویرایش',
	'thanks-already-thanked' => '{{GENDER:$1|شما}} تشکر را برای این ویرایش فرستادید.',
	'echo-pref-subscription-edit-thank' => 'برای ویرایش‌هایم از من سپاسگزاری کن',
	'echo-pref-tooltip-edit-thank' => 'وقتی کسی از ویرایش‌های من تشکر می‌کند مرا آگاه کن.',
	'echo-category-title-edit-thank' => 'تشکرها',
	'notification-thanks-diff-link' => 'ویرایشتان',
	'notification-thanks' => '[[User:$1|$1]] از شما بابت $2 در [[:$3]] {{GENDER:$1|تشکر کرد}}.',
	'notification-thanks-flyout2' => '[[User:$1|$1]] از ویرایش شما در $2 {{GENDER:$1|تشکر کرد}}.',
	'notification-thanks-email-subject' => '$1 از شما بابت ویرایشتان در {{SITENAME}} {{GENDER:$1|تشکر کرد}}',
	'notification-thanks-email-batch-body' => '$1 از شما بابت ویرایشتان در $2 {{GENDER:$1|تشکر کرد}}.',
	'notification-link-text-respond-to-user' => 'پاسخ به کاربر',
	'log-name-thanks' => 'سیاههٔ تشکرها',
	'log-description-thanks' => 'این فهرستی است از کاربرانی که کاربران دیگر از آن‌ها تشکر کرده‌اند.',
	'logentry-thanks-thank' => '$1 از {{GENDER:$4|$3}} {{GENDER:$2|تشکر کرد}}',
	'log-show-hide-thanks' => '$1 سیاههٔ تشکرها',
);

/** Finnish (suomi)
 * @author Crt
 * @author Pxos
 * @author Samoasambia
 * @author Silvonen
 */
$messages['fi'] = array(
	'thanks-desc' => 'Lisää kiitä-linkit muokkaushistoriaan ja versioiden erot näyttävälle sivulle',
	'thanks-thank' => 'kiitä',
	'thanks-thanked' => '{{GENDER:$1|kiitetty}}',
	'thanks-button-thank' => '{{GENDER:$1|Kiitä}}',
	'thanks-button-thanked' => '{{GENDER:$1|Kiitetty}}',
	'thanks-error-undefined' => 'Kiittäminen epäonnistui. Yritä uudelleen.',
	'thanks-error-invalidrevision' => 'Version tunniste ei kelpaa.',
	'thanks-error-ratelimited' => '{{GENDER:$1|Olet}} ylittänyt toimintorajasi. Odota hetki ja yritä uudelleen.',
	'thanks-thank-tooltip' => '{{GENDER:$1|Lähetä}} kiitoksesi tälle {{GENDER:$2|käyttäjälle}}',
	'thanks-confirmation' => 'Haluatko {{GENDER:$1|kiittää}} käyttäjää $2 tästä muokkauksesta?',
	'thanks-thanked-notice' => 'Käyttäjälle $1 ilmoitettiin, että tykkäsit {{GENDER:$2|hänen}} muokkauksestaan.',
	'echo-pref-subscription-edit-thank' => 'Minulle annetut kiitokset tekemistäni muokkauksista',
	'echo-pref-tooltip-edit-thank' => 'Ilmoita minulle, kun joku kiittää minua tekemästäni muokkauksesta.',
	'echo-category-title-edit-thank' => 'Kiitokset',
	'notification-thanks-diff-link' => 'muokkauksestasi',
	'notification-thanks' => '[[User:$1|$1]] {{GENDER:$1|kiitti}} sinua $2 sivulla [[:$3]].',
	'notification-thanks-flyout2' => '[[User:$1|$1]] {{GENDER:$1|kiitti}} sinua muokkauksestasi sivulla $2.',
	'notification-thanks-email-subject' => '$1 {{GENDER:$1|kiitti}} sinua muokkauksestasi sivustolla {{SITENAME}}',
	'notification-thanks-email-batch-body' => '$1 {{GENDER:$1|kiitti}} sinua muokkauksestasi sivulla $2.',
	'notification-link-text-respond-to-user' => 'Vastaa käyttäjälle',
	'log-name-thanks' => 'Kiitosloki',
	'log-description-thanks' => 'Alla on luettelo niistä käyttäjistä, jotka ovat saaneet kiitoksia toisilta käyttäjiltä.',
	'logentry-thanks-thank' => '$1 {{GENDER:$2|kiitti}} käyttäjää {{GENDER:$4|$3}}',
	'log-show-hide-thanks' => '$1 kiitosloki',
);

/** French (français)
 * @author Arkanosis
 * @author Automatik
 * @author Boniface
 * @author Gomoko
 * @author Jean-Frédéric
 * @author Ltrlg
 * @author Metroitendo
 * @author Wyz
 */
$messages['fr'] = array(
	'thanks-desc' => 'Ajoute des liens de remerciement aux vues historique et de différence',
	'thanks-thank' => 'remercier',
	'thanks-thanked' => '{{GENDER:$1|remercié|remerciée}}',
	'thanks-button-thank' => '{{GENDER:$1|Merci}}',
	'thanks-button-thanked' => '{{GENDER:$1|Remercié}}',
	'thanks-error-undefined' => 'Échec de l’action de remerciement. Veuillez réessayer.',
	'thanks-error-invalidrevision' => 'L’ID de révision n’est pas valide.',
	'thanks-error-ratelimited' => '{{GENDER:$1|Vous}} avez dépassé votre limite de débit. Veuillez attendre un peu et réessayer.',
	'thanks-thank-tooltip' => '{{GENDER:$1|Envoyer}} une notification de remerciement à {{GENDER:$2|cet utilisateur|cette utilisatrice}}',
	'thanks-confirmation' => 'Voulez-vous {{GENDER:$1|remercier}} $2 pour cette modification ?',
	'thanks-thanked-notice' => '$1 a été notifié que vous avez aimé {{GENDER:$2|sa}} modification.',
	'thanks' => 'Envoyer des remerciements',
	'thanks-form-revid' => 'ID de révision de la modification',
	'thanks-already-thanked' => '{{GENDER:$1|Vous}} avez déjà envoyé des remerciements pour cette modification.',
	'echo-pref-subscription-edit-thank' => 'Me remercier pour ma modification',
	'echo-pref-tooltip-edit-thank' => 'Me prévenir quand quelqu’un me remercie pour une modification que j’ai faite.',
	'echo-category-title-edit-thank' => 'Merci',
	'notification-thanks-diff-link' => 'votre modification',
	'notification-thanks' => '[[User:$1|$1]] vous {{GENDER:$1|a remercié}} pour $2 sur [[:$3]].',
	'notification-thanks-flyout2' => '[[User:$1|$1]] vous {{GENDER:$1|a remercié}} pour votre modification sur $2.',
	'notification-thanks-email-subject' => '$1 vous {{GENDER:$1|a remercié}} pour votre modification sur {{SITENAME}}',
	'notification-thanks-email-batch-body' => '$1 vous {{GENDER:$1|a remercié}} pour votre modification sur $2.',
	'notification-link-text-respond-to-user' => 'Répondre à l’utilisateur',
	'log-name-thanks' => 'Journal des remerciements',
	'log-description-thanks' => "Ci-dessous se trouve une liste d'utilisateurs qui ont été remerciés par d'autres.",
	'logentry-thanks-thank' => '$1 {{GENDER:$2|a remercié}} {{GENDER:$4|$3}}',
	'log-show-hide-thanks' => '$1 le journal des remerciements',
);

/** Northern Frisian (Nordfriisk)
 * @author Murma174
 */
$messages['frr'] = array(
	'thanks-desc' => 'Saat en "soonk" tu a werjuunsferluup',
	'thanks-thank' => 'soonke',
	'thanks-thanked' => '{{GENDER:$1|besoonket}}',
	'thanks-button-thank' => '{{GENDER:$1|Besoonke}}',
	'thanks-button-thanked' => '{{GENDER:$1|Besoonket}}',
	'thanks-error-undefined' => '"Soonk" hää ei loket. Ferschük det man noch ans.',
	'thanks-error-invalidrevision' => 'Det werjuun jaft at ei.',
	'thanks-error-ratelimited' => '{{GENDER:$1|Dü}} heest tuföl aktjuunen onernimen. Teew en uugenblak an ferschük det noch ans weder.',
	'thanks-thank-tooltip' => '{{Gender:$1|Schüür}} {{Gender:$2|didiar brüker}} en "soonk".',
	'thanks-confirmation' => 'Wel dü $2 {{GENDER:$1|en soonk schüür}} för didiar bidrach?',
	'thanks-thanked-notice' => '$1 hää bööd füngen, dat dü {{GENDER:$2|sin|hör|hör}} feranrang gud fanjst.',
	'thanks' => 'Soonk schüür',
	'thanks-form-revid' => "Werjuunskäänang för't bewerkin",
	'thanks-already-thanked' => '{{GENDER:$1|Dü}} heest di al för det feranrang besoonket.',
	'echo-pref-subscription-edit-thank' => '"Soonk" saien för man bidrach',
	'echo-pref-tooltip-edit-thank' => 'Du mi bööd, wan mi hoker en "soonk" schüürt för man bidrach.',
	'echo-category-title-edit-thank' => 'Föl soonk',
	'notification-thanks-diff-link' => 'dan bidrach',
	'notification-thanks' => '[[User:$1|$1]] {{GENDER:$1|soonket}} di för $2 üüb [[:$3]].',
	'notification-thanks-flyout2' => '[[User:$1|$1]] {{GENDER:$1|soonket}} di för dan bidrach üüb $2.',
	'notification-thanks-email-subject' => '$1 {{GENDER:$1|soonket}} di för dan bidrach üüb {{SITENAME}}',
	'notification-thanks-email-batch-body' => '$1 {{GENDER:$1|soonket}} di för dan bidrach üüb $2.',
	'notification-link-text-respond-to-user' => 'Di brüker swaare',
	'log-name-thanks' => 'Soonk-logbuk',
	'log-description-thanks' => 'Oner stäänt en list faan brükern, diar faan ööder brükern soonk saad wurden as.',
	'logentry-thanks-thank' => '$1 {{GENDER:$2|besoonket}} ham bi {{Gender:$4|$3}}',
	'log-show-hide-thanks' => 'Föl-soonk-logbuk $1',
);

/** Galician (galego)
 * @author Toliño
 */
$messages['gl'] = array(
	'thanks-desc' => 'Engade ligazóns de agradecemento no historial e na vista de diferenzas',
	'thanks-thank' => 'agradecer',
	'thanks-thanked' => '{{GENDER:$1|agradecido|agradecida}}',
	'thanks-button-thank' => '{{GENDER:$1|Agradecer}}',
	'thanks-button-thanked' => '{{GENDER:$1|Agradecido|Agradecida}}',
	'thanks-error-undefined' => 'Houbo un erro ao realizar o agradecemento. Inténteo de novo.',
	'thanks-error-invalidrevision' => 'O ID da revisión non é válido.',
	'thanks-error-ratelimited' => '{{GENDER:$1|Superou}} o seu límite de velocidade. Agarde uns minutos e inténteo de novo.',
	'thanks-thank-tooltip' => '{{GENDER:$1|Envía}} unha notificación de agradecemento a {{GENDER:$2|este usuario|esta usuaria}}',
	'thanks-confirmation' => 'Quere {{GENDER:$1|agradecer}} a $2 a súa edición?',
	'thanks-thanked-notice' => '$1 recibiu un aviso de que a vostede lle gustou {{GENDER:$2|a súa}} edición.',
	'thanks' => 'Enviar un agradecemento',
	'thanks-form-revid' => 'ID de revisión da edición',
	'thanks-already-thanked' => 'Xa {{GENDER:$1|enviou}} un agradecemento por esta edición.',
	'echo-pref-subscription-edit-thank' => 'Me agradeza unha edición feita por min',
	'echo-pref-tooltip-edit-thank' => 'Notificádeme cando alguén me agradeza unha edición feita por min.',
	'echo-category-title-edit-thank' => 'Agradecemento',
	'notification-thanks-diff-link' => 'a súa edición',
	'notification-thanks' => '[[User:$1|$1]] {{GENDER:$1|agradeceu}} $2 en "[[:$3]]".',
	'notification-thanks-flyout2' => '[[User:$1|$1]] {{GENDER:$1|agradeceu}} a súa edición en "$2".',
	'notification-thanks-email-subject' => '$1 {{GENDER:$1|agradeceu}} a súa edición en {{SITENAME}}',
	'notification-thanks-email-batch-body' => '$1 {{GENDER:$1|agradeceu}} a súa edición en "$2".',
	'notification-link-text-respond-to-user' => 'Responder ao usuario',
	'log-name-thanks' => 'Rexistro de agradecementos',
	'log-description-thanks' => 'A continuación hai unha lista dos usuarios que recibiron agradecementos doutros usuarios.',
	'logentry-thanks-thank' => '$1 {{GENDER:$2|deu as grazas a}} {{GENDER:$4|$3}}',
	'log-show-hide-thanks' => '$1 o rexistro de agradecementos',
);

/** Gujarati (ગુજરાતી)
 * @author Ashok modhvadia
 * @author Dsvyas
 */
$messages['gu'] = array(
	'thanks-desc' => 'ઇતિહાસ અને તફાવત બતાવતી વખતે આભાર માટેની કડી ઉમેરે છે',
	'thanks-thank' => 'આભાર માનો',
	'thanks-thanked' => '{{GENDER:$1|આભાર માન્યો}}',
	'thanks-button-thank' => '{{GENDER:$1|આભાર માનો}}',
	'thanks-button-thanked' => '{{GENDER:$1|આભાર માન્યો}}',
	'thanks-error-undefined' => 'આભારની ક્રિયા  નિષ્ફળ ગઈ છે. ફરી પ્રયત્ન કરો.',
	'thanks-error-invalidrevision' => 'પુનરાવર્તન આઇ.ડી. માન્ય નથી.',
	'thanks-error-ratelimited' => '{{GENDER:$1|તમે}} તમારી ગુણાંકન સીમા વટાવી ચૂક્યા છો. કૃપા કરી થોડો સમય રાહ જુઓ અને પછી પ્રયત્ન કરો.',
	'thanks-thank-tooltip' => '{{GENDER:$2|આ સભ્યને}} આભાર સંદેશો {{GENDER:$1|મોકલો}}',
	'thanks-confirmation' => 'શું તમે આ ફેરફાર માટે $2નો {{GENDER:$1|આભાર}} માનવા ચાહો છો?',
	'thanks-thanked-notice' => '$1ને માહિતગાર કરવામાં આવ્યા છે કે તમને {{GENDER:$2|તેમણે}} કરેલો ફેરફાર ગમ્યો છે.',
	'echo-pref-subscription-edit-thank' => 'મેં કરેલા ફેરફાર માટે મારો આભાર માને છે',
	'echo-pref-tooltip-edit-thank' => 'મેં કરેલા ફેરફાર માટે કોઈ મારો આભાર માને ત્યારે મને જણાવો.',
	'echo-category-title-edit-thank' => 'આભાર',
	'notification-thanks-diff-link' => 'તમે કરેલો ફેરફાર',
	'notification-thanks' => '[[:$3]]માંના $2 માટે [[User:$1|$1]]એ તમારો {{GENDER:$1|આભાર માન્યો}}.',
	'notification-thanks-flyout2' => '$2 પરના તમારા ફેરફાર માટે [[User:$1|$1]]એ તમારો {{GENDER:$1|આભાર માન્યો}}.',
	'notification-thanks-email-subject' => '{{SITENAME}} પરના તમારા ફેરફાર માટે $1એ તમારો {{GENDER:$1|આભાર માન્યો}}.',
	'notification-thanks-email-batch-body' => '$2 પરના તમારા ફેરફાર માટે $1એ તમારો {{GENDER:$1|આભાર માન્યો}}.',
	'notification-link-text-respond-to-user' => 'સભ્યને પ્રત્યુત્તર પાઠવો',
	'log-name-thanks' => 'આભાર નોંધ',
	'log-description-thanks' => 'નીચે એવા સભ્યોની યાદિ આપી છે જેમનો અન્ય સભ્યોએ આભાર માન્યો હોય.',
	'logentry-thanks-thank' => '$1એ {{GENDER:$4|$3}}નો {{GENDER:$2|આભાર માન્યો}}',
	'log-show-hide-thanks' => '$1 આભાર નોંધ',
);

/** Hebrew (עברית)
 * @author Amire80
 * @author Guycn1
 * @author Guycn2
 * @author Rotemliss
 */
$messages['he'] = array(
	'thanks-desc' => 'הוספת קישורי "תודה" לדפי היסטוריה והשוואה',
	'thanks-thank' => 'תודה',
	'thanks-thanked' => '{{GENDER:$1|הודֵיתָ|הודֵיתְ}}',
	'thanks-button-thank' => '{{GENDER:$1|תודה}}',
	'thanks-button-thanked' => '{{GENDER:$1|הודֵיתָ|הודֵיתְ}}',
	'thanks-error-undefined' => 'פעולת תודה נכשלה. נא לנסות שוב.',
	'thanks-error-invalidrevision' => 'מזהה גרסה אינו תקין.',
	'thanks-error-ratelimited' => '{{GENDER:$1|עברת}} את מגבלת הקצב שלך. נא להמתין ולנסות שוב.',
	'thanks-thank-tooltip' => '{{GENDER:$1|שלח|שלחי}} הודעת תודה {{GENDER:$2|למשתמש זה|למשתמשת זו}}',
	'thanks-confirmation' => 'האם {{GENDER:$1|אתה|את}} רוצה להודות ל־$2 על העריכה הזאת?',
	'thanks-thanked-notice' => 'ל{{GRAMMAR:תחילית|$1}} נאמר שאהבת את העריכה {{GENDER:$2|שלו|שלה|שלו}}.',
	'thanks' => 'נשלחה תודה',
	'thanks-form-revid' => 'מזהה גרסה עבור עריכה',
	'thanks-already-thanked' => 'כבר {{GENDER:$1|שלחת}} תודה על העריכה הזאת.',
	'echo-pref-subscription-edit-thank' => 'מודה לי על עריכה שלי',
	'echo-pref-tooltip-edit-thank' => 'להודיע לי כשמישהו מודה לי על עריכה שעשיתי.',
	'echo-category-title-edit-thank' => 'תודות',
	'notification-thanks-diff-link' => 'עריכה שלך',
	'notification-thanks' => '[[User:$1|$1]] {{GENDER:$1|הודה|הודתה}} לך על $2 בדף [[:$3]].',
	'notification-thanks-flyout2' => '[[User:$1|$1]] {{GENDER:$1|הודה|הודתה}} לך על עריכתך בדף $2.',
	'notification-thanks-email-subject' => '$1 {{GENDER:$1|הודה|הודתה}} לך על עריכה שלך באתר {{SITENAME}}',
	'notification-thanks-email-batch-body' => '$1 {{GENDER:$1|הודה|הודתה}} לך על עריכה שלך בדף $2.',
	'notification-link-text-respond-to-user' => 'להשיב',
	'log-name-thanks' => 'יומן תודות',
	'log-description-thanks' => 'להלן רשימת משתמשים שאנשים אחרים הודו להם.',
	'logentry-thanks-thank' => '$1 {{GENDER:$2|הודה|הודתה}} ל{{GRAMMAR:תחילית|{{GENDER:$4|$3}}}}',
	'log-show-hide-thanks' => '$1 יומן תודות',
);

/** Hindi (हिन्दी)
 * @author Shubhamkanodia
 * @author Siddhartha Ghai
 */
$messages['hi'] = array(
	'thanks-desc' => 'इतिहास और बदलाव दृश्य में धन्यवाद कड़ियाँ जोड़ें।',
	'thanks-thank' => 'धन्यवाद दें',
	'thanks-thanked' => '{{GENDER:$1|धन्यवाद दिया}}',
	'thanks-button-thank' => 'धन्यवाद', # Fuzzy
	'thanks-button-thanked' => '{{GENDER:$1|धन्यवाद दिया}}',
	'thanks-error-undefined' => 'धन्यवाद देने का कार्य विफल रहा। कृपया पुनः प्रयास करें।',
	'thanks-error-invalidrevision' => 'अवतरण आई॰डी मान्य नहीं है।',
	'thanks-error-ratelimited' => 'आप अपनी दर सीमा पार कर चुके हैं। कृपया थोड़ी देर बाद पुनः प्रयास करें।', # Fuzzy
	'thanks-thank-tooltip' => 'इस {{GENDER:$2|सदस्य}} को धन्यवाद अधिसूचना {{GENDER:$1|भेजें}}।',
	'thanks-confirmation' => 'क्या आप इस सम्पादन के लिए $2 को {{GENDER:$1|धन्यवाद}} देना चाहते हैं?', # Fuzzy
	'thanks-thanked-notice' => '$1 को बताया गया कि आपको {{GENDER:$2|उनका}} सम्पादन अच्छा लगा।', # Fuzzy
	'echo-pref-subscription-edit-thank' => 'मेरे सम्पादन के लिए मुझे धन्यवाद दे।',
	'echo-pref-tooltip-edit-thank' => 'जब कोई मेरे सम्पादन के लिये मुझे धन्यवाद कहे, मुझे सूचित करें।',
	'echo-category-title-edit-thank' => 'धन्यवाद',
	'notification-thanks-diff-link' => 'आपके सम्पादन',
	'notification-thanks' => '[[User:$1|$1]] ने आपको $2 के लिये [[:$3]] पर {{GENDER:$1|धन्यवाद कहा है}}।',
	'notification-thanks-flyout2' => '[[User:$1|$1]] ने आपको $2 पर आपके सम्पादन के लिए{{GENDER:$1|धन्यवाद कहा है}}।',
	'notification-thanks-email-subject' => '$1 ने आपको {{SITENAME}} पर आपके सम्पादन के लिये आपको {{GENDER:$1|धन्यवाद कहा है}}।',
	'notification-thanks-email-batch-body' => '$1 ने $2 पर आपके सम्पादन के लिये आपको {{GENDER:$1|धन्यवाद कहा है}}।',
	'notification-link-text-respond-to-user' => 'सदस्य को जवाब दें',
	'log-name-thanks' => 'धन्यवाद लॉग',
	'log-description-thanks' => 'अन्य सदस्यों द्वारा धन्यवाद पाने वाले सदस्यों की सूची निम्न है।',
	'logentry-thanks-thank' => '$1 ने {{GENDER:$4|$3}} को {{GENDER:$2|धन्यवाद कहा है}}',
	'log-show-hide-thanks' => '$1 धन्यवाद लॉग',
);

/** Croatian (hrvatski)
 * @author MaGa
 * @author Roberta F.
 */
$messages['hr'] = array(
	'thanks-thank' => 'zahvala',
	'thanks-thanked' => '{{GENDER:$1|zahvala je objavljena}}',
	'thanks-button-thank' => '{{GENDER:$1|Zahvala je objavljena|Zahvala je objavljena}}',
	'thanks-button-thanked' => '{{GENDER:$1|Zahvala je objavljena|Zahvala je objavljena}}',
	'thanks-thank-tooltip' => '{{GENDER:$1|Pošalji}} zahvalu {{GENDER:$2|ovom suradniku|ovoj suradnici}}',
	'thanks-confirmation' => 'Želite li {{GENDER:$1|zahvaliti}} suradniku $2 za ovo uređivanje?',
	'echo-pref-tooltip-edit-thank' => 'Obavijesti me kad mi netko zahvali za moju izmjenu.',
	'echo-category-title-edit-thank' => 'Hvala',
	'notification-thanks-diff-link' => 'vaše uređivanje',
	'notification-thanks' => '[[User:$1|$1]] vam je {{GENDER:$1|zahvalio|zahvalila}} za $2 na stranici [[:$3]].',
	'notification-thanks-flyout2' => '[[User:$1|$1]] Vam je {{GENDER:$1|zahvalio|zahvalila}} za Vašu izmjenu na stranici $2.',
	'notification-thanks-email-subject' => '$1 Vam {{GENDER:$1|zahvaljuje|zahvaljuje}} za uređivanje na projektu {{SITENAME}}',
	'notification-thanks-email-batch-body' => '$1 vam {{GENDER:$1|zahvaljuje}} za Vaše uređivanje na stranici $2.',
	'notification-link-text-respond-to-user' => 'Odgovor suradniku',
	'log-name-thanks' => 'Evidencija zahvala',
	'log-description-thanks' => 'Slijedi popis suradnika koji su drugim suradnicima objavili zahvalu.',
	'logentry-thanks-thank' => '$1 {{GENDER:$2|zahvalio|zahvalila}} je {{GENDER:$4|suradniku|suradnici}} {{GENDER:$4|$3}}',
	'log-show-hide-thanks' => '$1 evidenciju zahvala',
);

/** Upper Sorbian (hornjoserbsce)
 * @author Michawiki
 */
$messages['hsb'] = array(
	'thanks-desc' => 'Přidawa dźakne wotkazy historiji a wersijowym rozdźělam',
	'thanks-thank' => 'dźakować so',
	'thanks-thanked' => '{{GENDER:$1|je so dźakował|je so dźakowała}}',
	'thanks-button-thank' => '{{GENDER:$1|Dźakować so}}',
	'thanks-button-thanked' => '{{GENDER:$1|Je so dźakował|Je so dźakowała}}',
	'thanks-error-undefined' => 'Dźakowanje je so njeporadźiło. Prošu spytaj hišće raz.',
	'thanks-error-invalidrevision' => 'Wersijowy ID njeje płaćiwy.',
	'thanks-error-ratelimited' => '{{GENDER:$1|Ty}} sy swój akciski limit {{GENDER:$1|překročił|překročiła}}. Prošu čakaj chwilku a spytaj hišće raz.',
	'thanks-thank-tooltip' => 'Dźaknu źdźělenku {{GENDER:$2|tutomu wužiwarjej|wužiwarce}} {{GENDER:$1|pósłać}}',
	'thanks-confirmation' => 'Chceš so $2 za tutu změnu {{GENDER:$1|dźakować}}?',
	'thanks-thanked-notice' => '$1 je so {{GENDER:$1|informował|informowała}}, zo {{GENDER:$2|jeho|jeje}} změna je ći spodobała.',
	'thanks' => 'Dźak pósłać',
	'thanks-form-revid' => 'Wersijowy ID za změnu',
	'thanks-already-thanked' => 'Sy hižo dźak za tutu změnu {{GENDER:$1|pósłał|pósłała}}.',
	'echo-pref-subscription-edit-thank' => 'Dźakuje so mi za moju změnu',
	'echo-pref-tooltip-edit-thank' => 'Informuj mje, hdyž něchtó dźakuje so mje za změnu, kotruž sym činił.',
	'echo-category-title-edit-thank' => 'Wulki dźak',
	'notification-thanks-diff-link' => 'twoja změna',
	'notification-thanks' => '[[User:$1|$1]] je so ći za $2 na [[:$3]] {{GENDER:$1|dźakował|dźakowała}}.',
	'notification-thanks-flyout2' => '[[User:$1|$1]] je so ći za změnu na $2 {{GENDER:$1|dźakował|dźakowała}}.',
	'notification-thanks-email-subject' => '$1 je so ći za twoju změnu na {{GRAMMAR:lokatiw|{{SITENAME}}}} {{GENDER:$1|dźakował|dźakowała}}',
	'notification-thanks-email-batch-body' => '$1 je so ći za twoju změnu na $2 {{GENDER:$1|dźakował|dźakowała}}.',
	'notification-link-text-respond-to-user' => 'Wotmołwa wužiwarjej',
	'log-name-thanks' => 'Dźakny protokol',
	'log-description-thanks' => 'Deleka je lisćina wužiwarjow, kotrymž su so druzy wužiwarjo dźakowali.',
	'logentry-thanks-thank' => '$1 je {{GENDER:$4|$3}} {{GENDER:$2|dźakował|dźakowała}}',
	'log-show-hide-thanks' => 'Dźakny protokol $1',
);

/** Hungarian (magyar)
 * @author Misibacsi
 * @author Samat
 * @author Southparkfan
 * @author Teemeah
 * @author William915
 */
$messages['hu'] = array(
	'thanks-desc' => 'Köszönőlinket helyez el a laptörténetben és a diffváltozatokban',
	'thanks-thank' => 'köszönet',
	'thanks-thanked' => '{{GENDER:$1|Megköszönve}}',
	'thanks-error-undefined' => 'A megköszönés sikertelen. Kérlek, próbáld meg újra!',
	'thanks-error-invalidrevision' => 'A lapváltozat azonosítója érvénytelen.',
	'thanks-error-ratelimited' => 'Túllépted a meghatározott limitet. Kérlek várj egy kicsit és próbáld újra.', # Fuzzy
	'thanks-thank-tooltip' => '{{GENDER:$1|Küldj}} köszönetet ennek a {{GENDER:$2|szerkesztőnek}}',
	'thanks-confirmation' => 'Biztos, hogy {{GENDER:$1|meg akarod köszönni}} $2 szerkesztését?',
	'thanks-thanked-notice' => '$1 was notified that you liked {{GENDER:$2|his|her|their}} edit.',
	'echo-pref-subscription-edit-thank' => 'Megköszöni a szerkesztésem',
	'echo-pref-tooltip-edit-thank' => 'Értesítést kérek, ha valaki megköszöni egy szerkesztésemet.',
	'echo-category-title-edit-thank' => 'köszönet',
	'notification-thanks-diff-link' => 'a szerkesztésed',
	'notification-thanks' => '[[User:$1|$1]] {{GENDER:$1|megköszönte}} $2 a(z) [[:$3]] szócikkben.',
	'notification-thanks-flyout2' => '[[User:$1|$1]] {{GENDER:$1|megköszönte}} a szerkesztésed a(z) $2 szócikkben.',
	'notification-thanks-email-subject' => '$1 {{GENDER:$1|megköszönte}} a(z) {{SITENAME}} oldalon tett szerkesztésedet.',
	'notification-thanks-email-batch-body' => '$1 {{GENDER:$1|megköszönte}} a(z) $2 lapon tett szerkesztésedet.',
	'notification-link-text-respond-to-user' => 'Válaszolok a szerkesztőnek.',
	'log-name-thanks' => 'Köszönési napló',
	'log-description-thanks' => 'Az alábbi szerkesztők köszönetet mondtak egy másik szerkesztőnek.',
	'logentry-thanks-thank' => '$1 {{GENDER:$2|köszönetet mondott}} {{GENDER:$4|$3}} szerkesztőnek.',
	'log-show-hide-thanks' => 'Köszönetnapló $1',
);

/** Armenian (Հայերեն)
 * @author Arman musikyan
 * @author Vacio
 * @author Xelgen
 */
$messages['hy'] = array(
	'thanks-desc' => 'Ավելացնում է «Շնորհակալ եմ» հղումը էջի պատմության և խմբագրումների տարբերությունների մեջ',
	'thanks-thank' => 'շնորհակալ եմ',
	'thanks-thanked' => '{{GENDER:$1| մասնակցին շնորհակալություն է հայնտված}}',
	'thanks-button-thank' => '{{GENDER:$1|Շնորհակալություն հայտնել}}',
	'thanks-button-thanked' => '{{GENDER:$1|մասնակցին շնորհակալությունը հայտնված է}}',
	'thanks-error-undefined' => 'Չստացվեց շնորհակալություն։ Փորձեք կրկին։',
	'thanks-error-invalidrevision' => 'Խմբագրման համարանիշը վավեր չէ։',
	'thanks-error-ratelimited' => '{{GENDER:$1|Դուք}} շատ եք շնորհակալություն հայտնել։ Սպասեք որոշ ժամանակ և նորից փորձեք։',
	'thanks-thank-tooltip' => '{{GENDER:$1|Ուղարկեք}} շնորհակալական ուղերձ այս {{GENDER:$2|մասնակցին}}',
	'thanks-confirmation' => 'Ուզո՞ւմ եք {{GENDER:$1|շնորհակալություն}} ասել $2ին այս խմբագրման համար։',
	'thanks-thanked-notice' => '$1 մասնակիցը ծանուցում է ստացել, որ դուք հավանել եք {{GENDER:$2|իր}} խմբագրումը։',
	'echo-pref-subscription-edit-thank' => 'Շնորհակալ է իմ խմբագրման համար',
	'echo-pref-tooltip-edit-thank' => 'Տեղեկացնել, երբ ինչ–որ մեկն շնորհակալ է իմ կատարած խմբագրման համար։',
	'echo-category-title-edit-thank' => 'Շնորհակալ է',
	'notification-thanks-diff-link' => 'ձեր խմբագրման',
	'notification-thanks' => '[[User:$1|$1]] մասնակիցը {{GENDER:$1|շնորհակալ է}} ձեզ [[:$3]] էջում $2 համար․',
	'notification-thanks-flyout2' => '[[User:$1|$1]] մասնակիցը {{GENDER:$1|շնորհակալ է}} $2 էջում ձեր արած խմբագրման համար։',
	'notification-thanks-email-subject' => '$1 մասնակիցը շնորհակալ է ձեզ «{{SITENAME}}»–ում ձեր խմբագրման համար։',
	'notification-thanks-email-batch-body' => '$1 մասնակիցը {{GENDER:$1|շնորհակալ է ձեզ}} $2 էջում ձեր խմբագրման համար։',
	'notification-link-text-respond-to-user' => 'Պատասխանել մասնակցին',
	'log-name-thanks' => 'Շնորհակալությունների գրանցամատյան',
	'log-description-thanks' => 'Ստորև «շնորհակալություներ» ստացած մասնակիցների ցանկն է։',
	'logentry-thanks-thank' => '$1 մասնակիցը {{GENDER:$2|շնորհակալություն է}} հայտնել {{GENDER:$4|$3}} մասնակցին',
	'log-show-hide-thanks' => '$1 շնորհակալությունների գրանցամատյան',
);

/** Interlingua (interlingua)
 * @author McDutchie
 */
$messages['ia'] = array(
	'thanks-desc' => 'Adde ligamines de regratiamento al vistas de historia e diff',
	'thanks-thank' => 'regratiar',
	'thanks-thanked' => '{{GENDER:$1|regratiate}}',
	'thanks-button-thank' => '{{GENDER:$1|Regratiar}}',
	'thanks-button-thanked' => '{{GENDER:$1|Regratiate}}',
	'thanks-error-undefined' => 'Le action de regratiamento ha fallite. Per favor reproba.',
	'thanks-error-invalidrevision' => 'Le ID de version es invalide.',
	'thanks-error-ratelimited' => '{{GENDER:$1|Tu}} ha excedite tu limite de frequentia. Per favor attende un poco e reproba.',
	'thanks-thank-tooltip' => '{{GENDER:$1|Inviar}} un nota de regratiamento a iste {{GENDER:$2|usator}}',
	'thanks-confirmation' => 'Vole tu {{GENDER:$1|regratiar}} $2 pro iste modification?',
	'thanks-thanked-notice' => '$1 ha essite notificate que {{GENDER:$2|su}} modification te placeva.',
	'thanks' => 'Inviar regratiamento',
	'thanks-form-revid' => 'ID de version del modification',
	'thanks-already-thanked' => '{{GENDER:$1|Tu}} ha jam inviate un regratiamento pro iste modification.',
	'echo-pref-subscription-edit-thank' => 'Me regratia pro mi modification',
	'echo-pref-tooltip-edit-thank' => 'Notificar me quando un persona me regratia pro un modification que io ha facite.',
	'echo-category-title-edit-thank' => 'Regratiamentos',
	'notification-thanks-diff-link' => 'tu modification',
	'notification-thanks' => '[[User:$1|$1]] te {{GENDER:$1|regratiava}} pro $2 in [[:$3]].',
	'notification-thanks-flyout2' => '[[User:$1|$1]] te {{GENDER:$1|regratiava}} pro tu modification in $2.',
	'notification-thanks-email-subject' => '$1 te {{GENDER:$1|regratiava}} pro tu modification in {{SITENAME}}',
	'notification-thanks-email-batch-body' => '$1 te {{GENDER:$1|regratiava}} pro tu modification in $2.',
	'notification-link-text-respond-to-user' => 'Responder al usator',
	'log-name-thanks' => 'Registro de regratiamentos',
	'log-description-thanks' => 'Ecce un lista de usatores regratiate per altere usatores.',
	'logentry-thanks-thank' => '$1 {{GENDER:$2|regratiava}} {{GENDER:$4|$3}}',
	'log-show-hide-thanks' => '$1 registro de regratiamentos',
);

/** Indonesian (Bahasa Indonesia)
 * @author Iwan Novirion
 * @author William Surya Permana
 */
$messages['id'] = array(
	'thanks-desc' => 'Menambahkan pranala terima kasih pada tampilan riwayat suntingan dan perbedaan revisi',
	'thanks-thank' => 'berterima kasih',
	'thanks-thanked' => '{{GENDER:$1|sudah berterima kasih}}',
	'thanks-button-thank' => '{{GENDER:$1|Berterima kasih}}',
	'thanks-button-thanked' => '{{GENDER:$1|Sudah berterima kasih}}',
	'thanks-error-undefined' => 'Tindakan berterima kasih gagal. Silakan coba lagi.',
	'thanks-error-invalidrevision' => 'ID revisi tidak sah.',
	'thanks-error-ratelimited' => '{{GENDER:$1|Anda}} telah melampaui batas Anda. Silakan tunggu beberapa saat dan coba lagi.',
	'thanks-thank-tooltip' => '{{GENDER:$1|Kirim}} sebuah pemberitahuan terima kasih kepada {{GENDER:$2|pengguna}} ini',
	'thanks-confirmation' => 'Apakah Anda ingin {{GENDER:$1|berterima kasih}} kepada $2 atas suntingan ini?',
	'thanks-thanked-notice' => '$1 telah diberitahu bahwa Anda menyukai {{GENDER:$2|suntingannya|suntingannya|suntingan mereka}}.',
	'echo-pref-subscription-edit-thank' => 'Berterima kasih kepada saya atas suntingan saya',
	'echo-pref-tooltip-edit-thank' => 'Beritahu saya saat seseorang berterima kasih kepada saya atas suntingan yang saya buat.',
	'echo-category-title-edit-thank' => 'Terima kasih',
	'notification-thanks-diff-link' => 'suntingan Anda',
	'notification-thanks' => '[[User:$1|$1]] {{GENDER:$1|berterima kasih}} kepada Anda atas $2 di [[:$3]].',
	'notification-thanks-flyout2' => '[[User:$1|$1]] {{GENDER:$1|berterima kasih}} kepada Anda atas suntingan Anda di $2.',
	'notification-thanks-email-subject' => '$1 {{GENDER:$1|berterima kasih}} kepada Anda atas suntingan Anda di {{SITENAME}}',
	'notification-thanks-email-batch-body' => '$1 {{GENDER:$1|berterima kasih}} kepada Anda atas suntingan Anda di $2.',
	'notification-link-text-respond-to-user' => 'Tanggapi pengguna',
	'log-name-thanks' => 'Log terima kasih',
	'log-description-thanks' => 'Di bawah ini adalah daftar pengguna yang menerima terima kasih dari pengguna lain.',
	'logentry-thanks-thank' => '$1 {{GENDER:$2|berterima kasih}} kepada {{GENDER:$4|$3}}',
	'log-show-hide-thanks' => '$1 log terima kasih',
);

/** Iloko (Ilokano)
 * @author Lam-ang
 */
$messages['ilo'] = array(
	'thanks-desc' => 'Agnayon kadagiti silpo ti panagyaman kadagiti panagkita ti pakasaritaan ken sabali',
	'thanks-thank' => 'yamanan',
	'thanks-thanked' => '{{GENDER:$1|nayamanan}}',
	'thanks-button-thank' => '{{GENDER:$1|Yamanan}}',
	'thanks-button-thanked' => '{{GENDER:$1|Nayamanan}}',
	'thanks-error-undefined' => 'Napaay ti tignay a panagyaman. Pangngaasi a padasen manen.',
	'thanks-error-invalidrevision' => 'Saan nga umiso to ID ti panagbaliw.',
	'thanks-error-ratelimited' => '{{GENDER:$1|Sika}} ket nalabesamon ti patingga ti gatadmo. Pangngaasi nga agurayka bassit ken padasem manen.',
	'thanks-thank-tooltip' => '{{GENDER:$1|Agipatulod}} ti pakaammo a panagyaman iti daytoy nga {{GENDER:$2|agar-aramat}}',
	'thanks-confirmation' => 'Kayatmo kadi ti {{GENDER:$1|agyaman}} kenni $2 para iti daytoy nga inurnos?',
	'thanks-thanked-notice' => 'Naipaammo idi kenni $1 a kinayatmo {{GENDER:$2|ti|dagiti}} inurnosda.',
	'echo-pref-subscription-edit-thank' => 'Pagyamanennak para iti inurnosko',
	'echo-pref-tooltip-edit-thank' => 'Pakaammuannak no adda agyaman kaniak para iti maysa nga inaramidko nga inurnos.',
	'echo-category-title-edit-thank' => 'Dagiti panagyaman',
	'notification-thanks-diff-link' => 'ti inurnosmo',
	'notification-thanks' => 'Ni [[User:$1|$1]] ket {{GENDER:$1|agyaman}} kenka para iti $2 iti [[:$3]].',
	'notification-thanks-flyout2' => 'Ni [[User:$1|$1]] ket {{GENDER:$1|nagyaman}} kenka para iti inurnosmo iti $2.',
	'notification-thanks-email-subject' => 'Ni $1 ket {{GENDER:$1|agyaman}} kenka para it inurnosmo idiay {{SITENAME}}',
	'notification-thanks-email-batch-body' => 'Ni $1 ket {{GENDER:$1|agyaman}} kenka para iti inurnosmo idiay $2.',
	'notification-link-text-respond-to-user' => 'Sumungbat iti agar-aramat',
	'log-name-thanks' => 'Listaan kadagiti panagyaman',
	'log-description-thanks' => 'Dita baba ket listaan dagiti agar-aramat a nayamanan babaen dagiti dadduma nga agar-aramat.',
	'logentry-thanks-thank' => 'Ni $1 ket {{GENDER:$2|nagyaman}} kenni {{GENDER:$4|$3}}',
	'log-show-hide-thanks' => '$1 ti listaan dagiti panagyaman',
);

/** Italian (italiano)
 * @author Beta16
 * @author Elitre
 */
$messages['it'] = array(
	'thanks-desc' => 'Aggiunge un collegamento per ringraziare nella cronologia e nelle differenze fra versioni',
	'thanks-thank' => 'ringrazia',
	'thanks-thanked' => '{{GENDER:$1|ringraziato|ringraziata|ringraziato/a}}',
	'thanks-button-thank' => '{{GENDER:$1|Ringrazia}}',
	'thanks-button-thanked' => '{{GENDER:$1|Ringraziato|Ringraziata|Ringraziato/a}}',
	'thanks-error-undefined' => 'Errore durante ringraziamento. Riprova ancora.',
	'thanks-error-invalidrevision' => "L'ID versione non è valido.",
	'thanks-error-ratelimited' => "{{GENDER:$1|Hai superato}} il limite massimo di ringraziamenti. Aspetta un po' di tempo e riprova.",
	'thanks-thank-tooltip' => '{{GENDER:$1|Invia}} una notifica di ringraziamento a {{GENDER:$2|questo|questa}} utente',
	'thanks-confirmation' => 'Vuoi {{GENDER:$1|ringraziare}} $2 per questa modifica?',
	'thanks-thanked-notice' => 'È stato notificato a $1 che ti piace {{GENDER:$2|la sua}} modifica.',
	'thanks' => 'Invia ringraziamento',
	'thanks-form-revid' => 'ID versione per modifica',
	'thanks-already-thanked' => '{{GENDER:$1|Hai}} già inviato un ringraziamento per questa modifica.',
	'echo-pref-subscription-edit-thank' => 'Mi ringrazia per una mia modifica',
	'echo-pref-tooltip-edit-thank' => 'Avvisami quando qualcuno mi ringrazia per una modifica che ho fatto.',
	'echo-category-title-edit-thank' => 'Ringraziamenti',
	'notification-thanks-diff-link' => 'la tua modifica',
	'notification-thanks' => '[[User:$1|$1]] ti {{GENDER:$1|ha ringraziato}} per $2 su [[:$3]].',
	'notification-thanks-flyout2' => '[[User:$1|$1]] ti {{GENDER:$1|ha ringraziato}} per la tua modifica su $2.',
	'notification-thanks-email-subject' => '$1 ti {{GENDER:$1|ha ringraziato}} per la tua modifica su {{SITENAME}}.',
	'notification-thanks-email-batch-body' => '$1 ti {{GENDER:$1|ha ringraziato}} per la tua modifica su $2.',
	'notification-link-text-respond-to-user' => "Rispondi all'utente",
	'log-name-thanks' => 'Ringraziamenti',
	'log-description-thanks' => 'Di seguito è riportato un elenco di utenti ringraziati da altri utenti.',
	'logentry-thanks-thank' => '$1 {{GENDER:$2|ha ringraziato}} {{GENDER:$4|$3}}',
	'log-show-hide-thanks' => '$1 registro dei ringraziamenti',
);

/** Japanese (日本語)
 * @author Fryed-peach
 * @author Penn Station
 * @author Shirayuki
 */
$messages['ja'] = array(
	'thanks-desc' => '履歴ページおよび差分ページに、感謝を示すリンクを追加する',
	'thanks-thank' => '感謝',
	'thanks-thanked' => '{{GENDER:$1|感謝を示しました}}',
	'thanks-button-thank' => '{{GENDER:$1|感謝}}',
	'thanks-button-thanked' => '{{GENDER:$1|感謝を示しました}}',
	'thanks-error-undefined' => '感謝の操作に失敗しました。もう一度やり直してください。',
	'thanks-error-invalidrevision' => '版 ID が無効です。',
	'thanks-error-ratelimited' => '{{GENDER:$1|}}速度制限を超えました。しばらくしてからもう一度やり直してください。',
	'thanks-thank-tooltip' => 'この{{GENDER:$2|利用者}}に感謝の通知を{{GENDER:$1|送信する}}',
	'thanks-confirmation' => '$2 のこの編集に対して{{GENDER:$1|感謝を示しますか}}?',
	'thanks-thanked-notice' => 'あなたが $1 の編集に感謝を示したことを{{GENDER:$2|本人}}に通知しました。',
	'thanks' => '感謝を示す',
	'thanks-form-revid' => '編集の版 ID',
	'thanks-already-thanked' => '{{GENDER:$1|}}この編集には既に感謝を示しました。',
	'echo-pref-subscription-edit-thank' => '自分の編集に誰かが感謝を示したとき',
	'echo-pref-tooltip-edit-thank' => '自分の編集に誰かが感謝を示したときに通知する。',
	'echo-category-title-edit-thank' => '感謝',
	'notification-thanks-diff-link' => 'あなたの編集',
	'notification-thanks' => '[[User:$1|$1]] が [[:$3]] での$2に{{GENDER:$1|感謝を示しました}}',
	'notification-thanks-flyout2' => '[[User:$1|$1]] が $2 でのあなたの編集に{{GENDER:$1|感謝を示しました}}。',
	'notification-thanks-email-subject' => '$1 が{{SITENAME}}でのあなたの編集に{{GENDER:$1|感謝を示しました}}',
	'notification-thanks-email-batch-body' => '$1 が $2 でのあなたの編集に{{GENDER:$1|感謝を示しました}}',
	'notification-link-text-respond-to-user' => '利用者に返信',
	'log-name-thanks' => '感謝記録',
	'log-description-thanks' => '以下に、他の利用者から感謝を示された利用者を列挙します。',
	'logentry-thanks-thank' => '$1 が {{GENDER:$4|$3}} に{{GENDER:$2|感謝を示しました}}',
	'log-show-hide-thanks' => '感謝記録を$1',
);

/** Georgian (ქართული)
 * @author BRUTE
 * @author David1010
 */
$messages['ka'] = array(
	'thanks-thank' => 'მადლობა',
	'thanks-button-thank' => '{{GENDER:$1|მადლობა}}',
	'thanks-button-thanked' => '{{GENDER:$1|მადლობა გადახდილია}}',
	'thanks-error-undefined' => 'მადლობის გადახდა ვერ მოხერხდა. გთხოვ სცადეთ კიდევ.',
	'thanks-confirmation' => 'გსურთ მომხმარებელს $2 {{GENDER:$1|მადლობა გადაუხადოთ}} ამ რედაქტირებისათვის?',
	'thanks-thanked-notice' => 'მომხმარებელს/მომხმარებლებს $1 გაეგზავნა(თ) შეტყობინება, რომ თქვენ მოიწონეთ {{GENDER:$2|მისი|მისი|მათი}} რედაქტირება.',
	'echo-pref-subscription-edit-thank' => 'მადლობა ჩემი რედაქტირებისათვის',
	'echo-pref-tooltip-edit-thank' => 'შემატყობინე, როდესაც ვინმე მადლობას გადამიხდის ჩემი რედაქტირებისათვის',
	'echo-category-title-edit-thank' => 'გმადლობ',
	'notification-thanks-diff-link' => 'რედაქტირებისათვის',
	'notification-thanks' => 'მომხმარებელმა [[User:$1|$1]] {{GENDER:$1|მადლობა გადაგიხადათ}} თქვენი $2 გვერდზე [[:$3]].',
	'notification-thanks-flyout2' => 'მომხმარებელმა [[User:$1|$1]] {{GENDER:$1|მადლობა გადაგიხადათ}} თქვენი რედაქტირებისათვის გვერდზე $2.',
	'notification-thanks-email-subject' => 'მომხმარებელმა $1 {{GENDER:$1|მადლობა გადაგიხადათ}} თქვენი რედაქტირებისათვის საიტზე {{SITENAME}}',
	'notification-thanks-email-batch-body' => 'მომხმარებელმა $1 {{GENDER:$1|მადლობა გადაგიხადათ}} თქვენი რედაქტირებისათვის $2.',
	'notification-link-text-respond-to-user' => 'უპასუხე მომხმარებელს',
	'log-name-thanks' => '„მადლობის“ ჟურნალი',
	'log-description-thanks' => 'ქვემოთ მოცემულია მომხმარებელთა სია, რომელთაც სხვა მომხმარებლებმა გადაუხადეს მადლობა',
	'log-show-hide-thanks' => '$1 „მადლობის“ ჟურნალი',
);

/** Kazakh (Cyrillic script) (қазақша (кирил)‎)
 * @author Arystanbek
 */
$messages['kk-cyrl'] = array(
	'thanks-desc' => 'Тарих және нұсқалар айырмасында <<рахмет>> сілтемелерін қосу',
	'thanks-thank' => 'рахмет',
	'thanks-thanked' => '{{GENDER:$1|рахмет айттыңыз}}',
	'thanks-button-thank' => '{{GENDER:$1|Рахметіңізді білдіру}}',
	'thanks-button-thanked' => '{{GENDER:$1|Рахмет білдірілді}}',
	'thanks-error-undefined' => 'Рахмет айту әрекеті орындалмады. Тағы қайталап көріңіз.',
	'thanks-error-invalidrevision' => 'ID нұсқа жарамсыз.',
	'thanks-error-ratelimited' => '{{GENDER:$1|Сіз}} шекті жылдамдықтан асырдыңыз. Біраз уақыт күте тұрып қайталап көріңіз.',
	'thanks-thank-tooltip' => 'Бұл {{GENDER:$2|қатысушыға}} рахмет айту хабарландыруын {{GENDER:$1|жіберу}}',
	'thanks-confirmation' => 'Бұл өңдеме үшін $2 деген қатысушыға {{GENDER:$1|рахметіңізді}} білдіргіңіз келе ме?',
	'thanks-thanked-notice' => '$1 есімді қатысушыға {{GENDER:$2|оның|олардың}} өңдемесін ұнатқаныңыз білдірілді.',
	'thanks' => 'Рахметті жөнелту',
	'thanks-form-revid' => 'Өңдеме үшін нұсқа ID-і',
	'thanks-already-thanked' => '{{GENDER:$1|Сіз}} бұл өңдемеге әлдеқашан рахметіңізді білдірдіңіз.',
	'echo-pref-subscription-edit-thank' => 'Менің өңдемем үшін маған рахмет айту',
	'echo-pref-tooltip-edit-thank' => 'Мен жасаған өңдеме үшін кейбіреу рахмет айтқанда маған хабарландыр.',
	'echo-category-title-edit-thank' => 'Рахмет',
	'notification-thanks-diff-link' => 'сіздің өңдемеңізге',
	'notification-thanks' => '[[User:$1|$1]] [[:$3]] бетіндегі $2  {{GENDER:$1|рахметін}} білдірді.',
	'notification-thanks-flyout2' => '[[User:$1|$1]] $2 бетіндегі өңдемеңізге {{GENDER:$1|рахметін}} білдірді.',
	'notification-thanks-email-subject' => '$1 {{SITENAME}} сайтындағы өңдемеңіз үшін сізге {{GENDER:$1|рахметін}} білдірді.',
	'notification-thanks-email-batch-body' => '$1 $2 бетіндегі өңдемеңіз үшін сізге {{GENDER:$1|рахметін}} білдірді.',
	'notification-link-text-respond-to-user' => 'Қатысушыға жауап қайтару',
	'log-name-thanks' => 'Рахмет білдіру журналы',
	'log-description-thanks' => 'Төменде басқа қатысушылардан рахмет айтылған қатысушылар тізімі берілген.',
	'logentry-thanks-thank' => '$1 {{GENDER:$4|$3}} деген қатысушыға {{GENDER:$2|рахметін}} білдірді.',
	'log-show-hide-thanks' => 'рахметін білдіру журналын $1',
);

/** Kannada (ಕನ್ನಡ)
 * @author Pavanaja
 */
$messages['kn'] = array(
	'thanks-thank' => 'ಧನ್ಯವಾದ ಹೇಳಿ',
	'thanks-error-undefined' => 'ಧನ್ಯವಾದ ಪ್ರಕ್ರಿಯ ನಡೆಯಲಿಲ್ಲ. ಪುನಃ ಪ್ರಯತ್ನಿಸಿ',
	'echo-category-title-edit-thank' => 'ಧನ್ಯವಾದಗಳು',
	'notification-thanks-diff-link' => 'ನಿಮ್ಮ ಸಂಪಾದನೆ',
);

/** Korean (한국어)
 * @author Hym411
 * @author Priviet
 * @author 관인생략
 * @author 아라
 */
$messages['ko'] = array(
	'thanks-desc' => '역사와 차이 보기에 감사 링크를 추가합니다',
	'thanks-thank' => '감사',
	'thanks-thanked' => '{{GENDER:$1|감사합니다}}',
	'thanks-button-thank' => '{{GENDER:$1|감사}}',
	'thanks-button-thanked' => '{{GENDER:$1|감사를 표합니다}}',
	'thanks-error-undefined' => '감사 표시 작업을 실패했습니다. 다시 시도하세요.',
	'thanks-error-invalidrevision' => '판 ID가 올바르지 않습니다.',
	'thanks-error-ratelimited' => '{{GENDER:$1|당신은}} 속도 제한을 초과했습니다. 잠시 기다리고 나서 다시 시도하세요.',
	'thanks-thank-tooltip' => '이 {{GENDER:$2|사용자}}에게 감사의 알림을 {{GENDER:$1|보냅니다}}',
	'thanks-confirmation' => '이 편집에 대해 $2님에게 {{GENDER:$1|감사}}를 표하겠습니까?',
	'thanks-thanked-notice' => '$1님이 당신이 {{GENDER:$2|그|그녀|그들}}의 편집에 감사했다는 것을 들었습니다.',
	'thanks' => '감사 보내기',
	'thanks-form-revid' => '편집의 판 번호',
	'thanks-already-thanked' => '{{GENDER:$1|당신은}} 이 편집에 대해 이미 감사를 표했습니다.',
	'echo-pref-subscription-edit-thank' => '내 편집에 대해 다른 사용자가 감사를 표했습니다',
	'echo-pref-tooltip-edit-thank' => '내게 내 편집에 대해 누군가가 감사를 표했을 때 알립니다.',
	'echo-category-title-edit-thank' => '감사',
	'notification-thanks-diff-link' => '내 편집',
	'notification-thanks' => '[[User:$1|$1]]님이 [[:$3]]에 대한 $2에 {{GENDER:$1|감사를 표했습니다}}.',
	'notification-thanks-flyout2' => '[[User:$1|$1]]님이 $2에 대한 내 편집에 {{GENDER:$1|감사를 표했습니다}}.',
	'notification-thanks-email-subject' => '$1님이 {{SITENAME}}에 대한 내 편집에 {{GENDER:$1|감사를 표했습니다}}',
	'notification-thanks-email-batch-body' => '$1님이 $2에 대한 내 편집에 {{GENDER:$1|감사를 표했습니다}}.',
	'notification-link-text-respond-to-user' => '사용자에게 응답',
	'log-name-thanks' => '감사 기록',
	'log-description-thanks' => '아래에는 다른 사용자가 감사를 표한 사용자의 목록입니다.',
	'logentry-thanks-thank' => '$1 사용자가 {{GENDER:$4|$3}}님에게 {{GENDER:$2|감사를 표했습니다}}',
	'log-show-hide-thanks' => '감사 기록을 $1',
);

/** Karachay-Balkar (къарачай-малкъар)
 * @author Iltever
 */
$messages['krc'] = array(
	'thanks-thank' => 'сау бол де',
	'thanks-thanked' => '{{GENDER:$1|сау бол деди}}',
	'thanks-button-thank' => '{{GENDER:$1|Сау бол де}}',
	'thanks-button-thanked' => '{{GENDER:$1|Сау бол айтылды}}',
	'thanks-error-undefined' => 'Сау бол айтылалмады. Джангыдан кёрюгюз.',
	'thanks-error-invalidrevision' => 'Версияны номери тюз тюлдю.',
	'thanks-error-ratelimited' => '{{GENDER:$1|Сиз}}, терклик чекни оздугъуз. Бираз сакълаб, джангыдан кёрюгюз.',
	'thanks-thank-tooltip' => 'Бу {{GENDER:$2|къошулуучугъа}} {{GENDER:$1|ыспас билдириу джибер}}',
	'thanks-confirmation' => 'Бу тюрлендириу ючюн $2 къошулуучугъа {{GENDER:$1|сау бол айтыргъа}}
излеймисиз?',
	'thanks-thanked-notice' => '$1 къошулуучугъа {{GENDER:$2|аны|аны|аланы}} тюрлендириуюн джаратханыгъыз билдирилди.',
	'echo-pref-subscription-edit-thank' => 'Тюрлендириуюм ючюн меннге ыспас',
	'echo-pref-tooltip-edit-thank' => 'Ким болса да, этген тюрлендириуюм ючюн сау бол десе, меннге билдир.',
	'echo-category-title-edit-thank' => 'Сау бол',
	'notification-thanks-diff-link' => 'тюрлендириуюгюз',
	'notification-thanks' => '[[User:$1|$1]], «[[:$3]]» бетдеги $2 тюрлендириуюгюз ючюн сизге сау бол {{GENDER:$1|айтды}}.',
	'notification-thanks-flyout2' => '[[User:$1|$1]], «$2» бетдеги тюрлендириуюгюз ючюн сизге {{GENDER:$1|поблагодарил|сай бол айтды}}.',
	'notification-thanks-email-subject' => '$1, «{{SITENAME}}» сайтдагъы тюрлендириуюгюз ючюн {{GENDER:$1|сау бол айтды}}.',
	'notification-thanks-email-batch-body' => '$1, «$2» бетдеги тюрлендириуюгюз ючюн {{GENDER:$1|сау бол айтды}}.',
	'notification-link-text-respond-to-user' => 'Къошулуучугъа джууаб бер',
	'log-name-thanks' => 'Сау бол айтыу журнал',
	'log-description-thanks' => 'Тюбюрекде, башха къошулуучуладан ыспас алгъан къошулуучуланы тизмесиди.',
	'logentry-thanks-thank' => '$1, $3 {{GENDER:$4|къошулуучугъа}} {{GENDER:$2|сау бол айтды}}',
	'log-show-hide-thanks' => '$1 сай бол айтыу журнал',
);

/** Kyrgyz (Кыргызча)
 * @author Викиней
 */
$messages['ky'] = array(
	'notification-thanks-diff-link' => 'сиздин оңдооңуз',
);

/** Latin (Latina)
 * @author Autokrator
 * @author UV
 */
$messages['la'] = array(
	'thanks-thank' => 'gratias agere',
	'thanks-thanked' => '{{GENDER:$1|gratiae actae sunt}}',
	'thanks-button-thank' => '{{GENDER:$1|Gratias agere}}',
	'thanks-button-thanked' => '{{GENDER:$1|Gratiae actae sunt}}',
	'thanks-error-undefined' => 'Gratias agere non contigit.',
	'thanks-error-invalidrevision' => 'ID emendationis falsa est.',
	'thanks-error-ratelimited' => 'Excessisti concessum numerum aestimationum.', # Fuzzy
	'thanks-thank-tooltip' => '{{GENDER:$1|Mitte}} nuntium gratiarum habendarum ad istum {{GENDER:$2|usorem}}',
	'thanks-confirmation' => 'Visne gratiam agere {{GENDER:$1|usori}} $2 huius recensionis?',
	'thanks-thanked-notice' => '$1 nuntiatum est recensionem {{GENDER:$2|eius}} tibi placuisse.',
	'echo-pref-subscription-edit-thank' => 'Gratias egit recensionis meae causa',
	'echo-pref-tooltip-edit-thank' => 'Me certiorem facere si quis mihi gratias egerit',
	'echo-category-title-edit-thank' => 'Gratias agere',
	'notification-thanks-diff-link' => 'recensione tua',
	'notification-thanks' => '[[User:$1|$1]] {{GENDER:$1|gratias egit}} tibi pro $2 in pagina [[:$3]].',
	'notification-thanks-flyout2' => '[[User:$1|$1]] {{GENDER:$1|gratias egit}} tibi recensionis in pagina $2 factae causa.',
	'notification-thanks-email-subject' => '$1 {{GENDER:$1|gratias egit}} recensionis apud {{grammar:accusative|{{SITENAME}}}} factae causa',
	'notification-thanks-email-batch-body' => '$1 {{GENDER:$1|gratias egit}} recensionis tuae in $2 factae causa.',
	'notification-link-text-respond-to-user' => 'Usori respondere',
	'log-name-thanks' => 'Index gratiarum',
	'log-description-thanks' => 'Infra est index usorum quibus gratiae ab aliis usoribus actae sunt.',
	'logentry-thanks-thank' => '$1 {{GENDER:$2|gratias egit}} {{GENDER:$4|$3}}',
	'log-show-hide-thanks' => '$1 indicem gratiarum',
);

/** Luxembourgish (Lëtzebuergesch)
 * @author Robby
 * @author Soued031
 */
$messages['lb'] = array(
	'thanks-desc' => "Setzt 'Merci'-Linken bei den Historique a bei Versiounsënnerscheeder derbäi",
	'thanks-thank' => 'merci',
	'thanks-button-thank' => '{{GENDER:$1|Merci soen}}',
	'thanks-error-undefined' => "'Merci soen' huet net funktionéiert. Probéiert w.e.g. nach eng Kéier.",
	'thanks-error-invalidrevision' => 'Versiounsnummer (ID) ass net valabel.',
	'thanks-thank-tooltip' => '{{GENDER:$2|Dësem Benotzer|Dëser Benotzerin}} ee "Merci" {{GENDER:$1|schécken}}',
	'thanks-confirmation' => "Wëllt Dir dem $2 'Merci soen', fir {{GENDER:$1|hir|seng}} Ännerung?",
	'thanks' => 'Merci soen',
	'thanks-already-thanked' => '{{GENDER:$1|Dir}} hutt scho fir dës Ännerung Merci gesot.',
	'echo-pref-subscription-edit-thank' => "'Mercie' fir meng Ännerung",
	'echo-pref-tooltip-edit-thank' => 'Mech Informéieren wann ee mir fir eng Ännerung déi ech gemaach hu Merci seet.',
	'echo-category-title-edit-thank' => 'Merci',
	'notification-thanks-diff-link' => 'Är Ännerung',
	'notification-thanks-email-batch-body' => '$1 {{GENDER:$1|seet}} Iech merci fir Är Ännerung op $2.',
	'notification-link-text-respond-to-user' => 'Dem Benotzer äntwerten',
	'log-name-thanks' => 'Logbuch vum Merci-soen',
	'log-description-thanks' => "Hei drënner ass eng Lëscht vu Benotzer déi anere Benotzer 'Merci' gesot hunn.",
	'logentry-thanks-thank' => '$1 {{GENDER:$2|huet dem}} {{GENDER:$4|$3}} Merci gesot',
	'log-show-hide-thanks' => "Logbuch vum 'Merci' $1",
);

/** لوری (لوری)
 * @author Bonevarluri
 * @author Mogoeilor
 */
$messages['lrc'] = array(
	'thanks-thank' => 'منمون',
	'echo-category-title-edit-thank' => 'منمون',
	'notification-thanks-diff-link' => 'ویرایشت شما',
	'notification-thanks-email-subject' => '$1 {{جنس:$1|تشکر کرده}} د شما سی ویرایشتتو د {{نوم سیلجا}}',
	'log-name-thanks' => 'پهرستنومه منمون بیئنی یا',
	'log-description-thanks' => 'د هار یه گل نوم که کاروریایی هئ که کاروریا هنی دشو تشکر کردنه',
	'log-show-hide-thanks' => 'پهرستنومه منمون بیئنی یا$1',
);

/** Lithuanian (lietuvių)
 * @author Hugo.arg
 */
$messages['lt'] = array(
	'thanks-thank' => 'padėkoti',
	'thanks-thanked' => '{{GENDER:$1|padėkota}}',
	'thanks-button-thank' => '{{GENDER:$1|Padėkoti}}',
	'thanks-thank-tooltip' => '{{GENDER:$1|Nusiųskite}} padėkos žinutę šiam {{GENDER:$2|naudotojui}}',
	'thanks-confirmation' => 'Ar jūs iš tiesų norite {{GENDER:$1|padėkoti}} $2 už šį keitimą?',
	'notification-thanks-flyout2' => '[[User:$1|$1]] padėkojo jums už jūsų keitimą puslapyje $2.',
);

/** Latvian (latviešu)
 * @author Edgars2007
 * @author Papuass
 */
$messages['lv'] = array(
	'thanks-desc' => 'Pievieno pateicības saiti vēstures un atšķirību skatiem',
	'thanks-thank' => 'pateikties',
	'thanks-thanked' => '{{GENDER:$1|pateicās}}',
	'thanks-error-undefined' => 'Pateicības darbība neizdevās. Lūdzu, mēģiniet vēlreiz.',
	'thanks-error-invalidrevision' => 'Versijas ID ir nederīgs.',
	'thanks-error-ratelimited' => 'Jūsu ierobežojums ir pārsniegts. Lūdzu, uzgaidiet un mēģiniet vēlreiz.', # Fuzzy
	'thanks-thank-tooltip' => '{{GENDER:$1|Nosūtīt}} pateicības ziņojumu {{GENDER:$2|šim  lietotājam|šai lietotājai}}',
	'thanks-confirmation' => 'Vai tiešām jūs vēlaties {{GENDER:$1|pateikties}} $2 par šo labojumu?', # Fuzzy
	'echo-pref-subscription-edit-thank' => 'Pateicība par manu labojumu',
	'echo-pref-tooltip-edit-thank' => 'Paziņot man, kad kāds man izsaka pateicību par labojumu.',
	'echo-category-title-edit-thank' => 'Paldies',
	'notification-thanks-diff-link' => 'tavu labojumu',
	'notification-thanks' => '[[User:$1|$1]] {{GENDER:$1|pateicās}} tev par $2 [[:$3]].',
	'notification-thanks-flyout2' => '[[User:$1|$1]] {{GENDER:$1|pateicās}} jums par jūsu labojumu $2.',
	'notification-thanks-email-subject' => '$1 {{GENDER:$1|pateicās}} jums par jūsu labojumu {{SITENAME}}',
	'notification-thanks-email-batch-body' => '$1 {{GENDER:$1|pateicās}} jums par jūsu labojumu $2.',
	'notification-link-text-respond-to-user' => 'Atbildēt lietotājam',
	'log-name-thanks' => 'Pateicību žurnāls',
	'log-description-thanks' => 'Zemāk ir saraksts ar lietotājiem, kuriem citi lietotāji ir pateikušies.',
	'logentry-thanks-thank' => '$1 {{GENDER:$2|pateicās}} {{GENDER:$4|$3}}',
	'log-show-hide-thanks' => '$1 pateicību žurnāls',
);

/** Macedonian (македонски)
 * @author Bjankuloski06
 */
$messages['mk'] = array(
	'thanks-desc' => 'Додава врски за заблагодарувања во историјата и прегледот на разликите',
	'thanks-thank' => 'заблагодари се',
	'thanks-thanked' => '{{GENDER:$1|заблагодарено}}',
	'thanks-button-thank' => '{{GENDER:$1|Заблагодари се}}',
	'thanks-button-thanked' => '{{GENDER:$1|Заблагодарено}}',
	'thanks-error-undefined' => 'Заблагодарувањето не успеа. Обидете се повторно.',
	'thanks-error-invalidrevision' => 'Ревизијата има неважечка назнака.',
	'thanks-error-ratelimited' => '{{GENDER:$1|Ја надминавте}} границата на заблагодарувања. Почекајте некое време, па обидете се подоцна',
	'thanks-thank-tooltip' => '{{GENDER:$1|Испратете}} му благодарност (во порака) на {{GENDER:$2|корисников}}',
	'thanks-confirmation' => 'Дали сте сигурни дека сакате да {{GENDER:$1|му се заблагодарите|да ѝ се заблагодарите}} на $2 за уредувањево?',
	'thanks-thanked-notice' => '$1 {{GENDER:$2|е известен дека ви се допаѓа неговото уредување|е известена дека ви се допаѓа нејзиното уредување|доби известување дека ви се допаѓа уредувањето што го направи}}.',
	'thanks' => 'Заблагодари се',
	'thanks-form-revid' => 'Назнака на ревизијата на уредувањето',
	'thanks-already-thanked' => '{{GENDER:$1|Веќе}} се заблагодаривте за ова уредување.',
	'echo-pref-subscription-edit-thank' => 'Ќе ми се заблагодари за мое уредување',
	'echo-pref-tooltip-edit-thank' => 'Извести ме кога некој ќе ми заблагодари за напарвено уредување.',
	'echo-category-title-edit-thank' => 'Благодарам',
	'notification-thanks-diff-link' => 'вашето уредување',
	'notification-thanks' => '[[User:$1|$1]] ви {{GENDER:$1|благодари}} за $2 на [[:$3]].',
	'notification-thanks-flyout2' => '[[User:$1|$1]] {{GENDER:$1|Ви заблагодари}} за вашето уредување на $2.',
	'notification-thanks-email-subject' => '$1 ви {{GENDER:$1|благодари}} за вашето уредување на {{SITENAME}}',
	'notification-thanks-email-batch-body' => '$1 {{GENDER:$1|Ви заблагодари}} за вашето уредување на $2.',
	'notification-link-text-respond-to-user' => 'Одговори му на корисникот',
	'log-name-thanks' => 'Дневник на благодарности',
	'log-description-thanks' => 'Следи список на корисници на кои други им искажале благодарност.',
	'logentry-thanks-thank' => '$1 {{GENDER:$2|му се заблагодари на|ѝ се заблагодари на|се заблагодари на}} {{GENDER:$4|$3}}',
	'log-show-hide-thanks' => '$1 го дневникот на благодарења',
);

/** Malayalam (മലയാളം)
 * @author Praveenp
 */
$messages['ml'] = array(
	'thanks-desc' => 'നാൾവഴിയിലും വ്യത്യാസങ്ങളിലും നന്ദി രേഖപ്പെടുത്തുവാനുള്ള കണ്ണികൾ ചേർക്കുക',
	'thanks-thank' => 'നന്ദി രേഖപ്പെടുത്തുക',
	'thanks-thanked' => '{{GENDER:$1|നന്ദി രേഖപ്പെടുത്തി}}',
	'thanks-button-thank' => '{{GENDER:$1|നന്ദി രേഖപ്പെടുത്തുക}}',
	'thanks-button-thanked' => '{{GENDER:$1|നന്ദി രേഖപ്പെടുത്തി}}',
	'thanks-error-undefined' => 'നന്ദി രേഖപ്പെടുത്തൽ പരാജയപ്പെട്ടു. ദയവായി വീണ്ടും ശ്രമിക്കുക.',
	'thanks-error-invalidrevision' => 'നാൾപ്പതിപ്പിന്റെ ഐ.ഡി. അസാധുവാണ്.',
	'thanks-error-ratelimited' => '{{GENDER:$1|താങ്കളുടെ}} പരിധി അധികരിച്ചിരിക്കുന്നു. ദയവായി അല്പസമയം കാത്തിരുന്ന ശേഷം വീണ്ടും ശ്രമിക്കുക.',
	'thanks-thank-tooltip' => 'ഈ {{GENDER:$2|ഉപയോക്താവിന്}} താങ്കളുടെ കൃതജ്ഞത {{GENDER:$1|അയയ്ക്കുക}}',
	'thanks-confirmation' => 'ഈ തിരുത്തിന് $2 എന്ന ഉപയോക്താവിന് {{GENDER:$1|നന്ദി രേഖപ്പെടുത്തണം}} എന്ന് താങ്കൾക്കുറപ്പാണോ?',
	'thanks-thanked-notice' => '$1 എന്ന ഉപയോക്താവിനെ, താങ്കൾക്ക്  {{GENDER:$2|അദ്ദേഹത്തിന്റെ|അവരുടെ|അവരുടെ}} തിരുത്ത് ഇഷ്ടപ്പെട്ടുവെന്ന് അറിയിച്ചു.',
	'thanks' => 'കൃതജ്ഞത അറിയിക്കുക',
	'thanks-form-revid' => 'തിരുത്തിന്റെ നാൾപ്പതിപ്പിന്റെ ഐ.ഡി.',
	'thanks-already-thanked' => 'ഈ തിരുത്തിന് {{GENDER:$1|താങ്കൾ}} നന്ദി അറിയിച്ചിട്ടുണ്ട്.',
	'echo-pref-subscription-edit-thank' => 'എന്റെ തിരുത്തിന് എനിക്ക് കൃതജ്ഞത രേഖപ്പെടുത്തുക',
	'echo-pref-tooltip-edit-thank' => 'ഞാൻ ചെയ്ത തിരുത്തിന് ആരെങ്കിലും നന്ദി രേഖപ്പെടുത്തിയാൽ എന്നെ അറിയിക്കുക.',
	'echo-category-title-edit-thank' => 'നന്ദി',
	'notification-thanks-diff-link' => 'താങ്കൾ ചെയ്ത തിരുത്തിന്',
	'notification-thanks' => '[[:$3]] എന്ന താളിൽ $2,  [[User:$1|$1]] {{GENDER:$1|നന്ദി രേഖപ്പെടുത്തി}}.',
	'notification-thanks-flyout2' => '$2 എന്ന താളിൽ താങ്കൾ ചെയ്ത തിരുത്തിന് [[User:$1|$1]] {{GENDER:$1|നന്ദി രേഖപ്പെടുത്തി}}',
	'notification-thanks-email-subject' => '{{SITENAME}} സംരംഭത്തിൽ താങ്കൾ ചെയ്ത തിരുത്തിന് $1 {{GENDER:$1|നന്ദി രേഖപ്പെടുത്തി}}',
	'notification-thanks-email-batch-body' => '$2 എന്ന താളിൽ താങ്കൾ ചെയ്ത തിരുത്തിന് $1 {{GENDER:$1|നന്ദി രേഖപ്പെടുത്തി}}',
	'notification-link-text-respond-to-user' => 'ഉപയോക്താവിനെ ബന്ധപ്പെടുക',
	'log-name-thanks' => 'കൃതജ്ഞതാരേഖ',
	'log-description-thanks' => 'മറ്റ് ഉപയോക്താക്കളുടെ കൃതജ്ഞത ലഭിച്ച ഉപയോക്താക്കളുടെ പട്ടിക താഴെ കാണാം.',
	'logentry-thanks-thank' => '{{GENDER:$4|$3}} എന്ന ഉപയോക്താവിന് $1 {{GENDER:$2|നന്ദി രേഖപ്പെടുത്തി}}',
	'log-show-hide-thanks' => 'കൃതജ്ഞതാരേഖ $1',
);

/** Marathi (मराठी)
 * @author V.narsikar
 */
$messages['mr'] = array(
	'thanks-desc' => 'इतिहास व आवृत्त्यामधील फरकाच्या दृष्यास धन्यवादाचा दुवा जोडते',
	'thanks-thank' => 'धन्यवाद',
	'thanks-thanked' => '{{GENDER:$1|नी धन्यवाद दिले}}',
	'thanks-button-thank' => '{{GENDER:$1|चे धन्यवाद}}',
	'thanks-button-thanked' => '{{GENDER:$1|नी धन्यवाद दिलेत}}',
	'thanks-error-undefined' => 'धन्यवाद देण्याची क्रिया अयशस्वी झाली.कृपया पुन्हा प्रयत्न करा.',
	'thanks-error-invalidrevision' => 'आवृत्तीचा आयडी वैध नाही.',
	'thanks-error-ratelimited' => '{{GENDER:$1|आपण}} दर मर्यादा पार केली आहे.कृपया थोडा वेळ थांबून पुन्हा प्रयत्न करा.',
	'thanks-thank-tooltip' => '{{GENDER:$2|या सदस्याला}} एक धन्यवादाची अधिसूचना {{GENDER:$1|पाठवा}}',
	'thanks-confirmation' => 'या संपादनासाठी  $2 ला {{GENDER:$1|धन्यवाद}} द्यायचे आहेत काय?',
	'thanks-thanked-notice' => '$1 ने नोंदविले आहे कि आपणास {{GENDER:$2|त्याचे|तिचे|त्यांचे}} संपादन आवडले आहे.',
	'echo-pref-subscription-edit-thank' => 'माझ्या संपादनाबद्दल मलाच धन्यवाद द्या',
	'echo-pref-tooltip-edit-thank' => 'मी केलेल्या संपादनाबद्दल जर कोणी मला धन्यवाद देत असेल तर मला सूचना द्या.',
	'echo-category-title-edit-thank' => 'धन्यवाद',
	'notification-thanks-diff-link' => 'आपले संपादन',
	'notification-thanks' => '[[User:$1|$1]] ने  $2 करीता [[:$3]]वर {{GENDER:$1|धन्यवाद दिलेत.}}',
	'notification-thanks-flyout2' => '[[User:$1|$1]] ने आपणास {{GENDER:$1|धन्यवाद दिलेत}}$2 वर केलेल्या संपादनाबद्दल.',
	'notification-thanks-email-subject' => '$1 ने {{SITENAME}}वर  {{GENDER:$1|धन्यवाद दिलेत}}आपण केलेल्या संपादनाबाबत',
	'notification-thanks-email-batch-body' => '$1 ने आपण $2वर केलेल्या संपादनाबाबत आपणास {{GENDER:$1|धन्यवाद दिलेत.}}',
	'notification-link-text-respond-to-user' => 'सदस्यास उत्तर द्या',
	'log-name-thanks' => 'धन्यवादाच्या नोंदी',
	'log-description-thanks' => 'खाली त्या सदस्यांची यादी आहे ज्यांना इतर सदस्यांनी धन्यवाद दिलेत.',
	'logentry-thanks-thank' => '$1 ने {{GENDER:$4|$3}} ला {{GENDER:$2|धन्यवाद दिलेत}}',
	'log-show-hide-thanks' => '$1 धन्यवादाच्या नोंदी',
);

/** Malay (Bahasa Melayu)
 * @author Anakmalaysia
 */
$messages['ms'] = array(
	'thanks-desc' => 'Meletakkan pautan terima kasih pada paparan sejarah dan beza',
	'thanks-thank' => 'berterima kasih',
	'thanks-thanked' => '{{GENDER:$1|berterima kasih kepada}}',
	'thanks-error-undefined' => 'Tindakan terima kasih gagal. Sila cuba lagi.',
	'thanks-error-invalidrevision' => 'ID semakan tidak sah.',
	'thanks-error-ratelimited' => 'Anda telah melampaui had kadar anda. Sila cuba seketika, kemudian cuba lagi.', # Fuzzy
	'thanks-thank-tooltip' => 'Hantar ucapan terima kasih kepada pengguna ini', # Fuzzy
	'thanks-confirmation' => 'Adakah anda betul-betul ingin {{GENDER:$1|berterima kasih}} kepada $2 atas suntingan ini?', # Fuzzy
	'echo-pref-subscription-edit-thank' => 'Berterima kasih pada saya atas suntingan saya',
	'echo-pref-tooltip-edit-thank' => 'Beritahu saya apabila seseorang berterima kasih kepada saya atas suntingan saya.',
	'echo-category-title-edit-thank' => 'Terima kasih',
	'notification-thanks-diff-link' => 'suntingan anda',
	'notification-thanks' => '[[User:$1|$1]] telah {{GENDER:$1|berterima kasih}} kepada anda atas $2 di [[:$3]].',
	'notification-thanks-flyout2' => '[[User:$1|$1]] {{GENDER:$1|berterima kasih}} kepada anda kerana menyunting $2.',
	'notification-thanks-email-subject' => '$1 telah {{GENDER:$1|berterima kasih}} kepada anda atas suntingan anda di {{SITENAME}}',
	'notification-thanks-email-batch-body' => '$1 telah {{GENDER:$1|berterima kasih}} kepada anda atas suntingan anda di $2.',
	'notification-link-text-respond-to-user' => 'Balas pengguna',
	'log-name-thanks' => 'Log ucapan terima kasih',
	'log-description-thanks' => 'Yang berikut adalah senarai pengguna yang menerima ucapan terima kasih daripada pengguna lain.',
	'logentry-thanks-thank' => '$1 {{GENDER:$2|berterima kasih}} kepada $3', # Fuzzy
);

/** Maltese (Malti)
 * @author Chrisportelli
 * @author Leli Forte
 * @author MTSap
 */
$messages['mt'] = array(
	'thanks-desc' => "Iżżid ħoloq ta' ringrazzjament fil-kronoloġija u fid-differenzi bejn il-verżjonijiet",
	'thanks-thank' => 'irringrazzja',
	'thanks-thanked' => '{{GENDER:$1|irringrazzjat|irringrazzjata}}',
	'thanks-button-thank' => '{{GENDER:$1|Irringrazzja}}',
	'thanks-button-thanked' => '{{GENDER:$1|Irringrazzjat|Irringrazzjata}}',
	'thanks-error-undefined' => "Ir-ringrazzjament ma ħadimx. Erġa' pprova.",
	'thanks-error-invalidrevision' => 'L-ID tar-reviżjoni mhuwiex validu.',
	'thanks-error-ratelimited' => "Qbiżt il-limitu massimu tar-ringrazzjamenti. Jekk jogħġbok stenna ftit u erġa' pprova.", # Fuzzy
	'thanks-thank-tooltip' => "{{GENDER:$1|Ibgħat}} notifika ta' ringrazzjament lil {{GENDER:$2|dan|din}} l-utent",
	'thanks-confirmation' => "Trid {{GENDER:$1|tirringrazzja}} 'l $2 għal din il-modifika?",
	'thanks-thanked-notice' => '$1 {{GENDER:$2|ġie mgħarraf|ġiet mgħarrfa|ġew mgħarrfin}} li għoġbitek il-modifika {{GENDER:$2|tiegħu|tagħha|tagħhom}}.',
	'echo-pref-subscription-edit-thank' => 'Jirringrazzjani għall-modifika li għamilt',
	'echo-pref-tooltip-edit-thank' => 'Agħrrafni meta xi ħadd jirringrazzjani għal xi modifika li nkun għamilt.',
	'echo-category-title-edit-thank' => 'Ringrazzjamenti',
	'notification-thanks-diff-link' => 'il-modifika tiegħek',
	'notification-thanks' => '[[User:$1|$1]] {{GENDER:$1|irringrazzjak|irringrazzjatek}} għal $2 fuq [[:$3]].',
	'notification-thanks-flyout2' => '[[User:$1|$1]] {{GENDER:$1|irringrazzjak|irringrazzjatek}} għall-modifika li għamilt fuq $2.',
	'notification-thanks-email-subject' => '$1 {{GENDER:$1|irringrazzjak|irringrazzjatek}} għall-modifika li għamilt fuq {{SITENAME}}',
	'notification-thanks-email-batch-body' => '$1 {{GENDER:$1|irringrazzjak|irringrazjatek}} għall-modifika li għamilt fuq $2.',
	'notification-link-text-respond-to-user' => 'Wieġeb l-utent',
	'log-name-thanks' => "Reġistru ta' ringrazzjamenti",
	'log-description-thanks' => "Taħt hawn lista ta' utenti irringrazzjati minn utenti oħra.",
	'logentry-thanks-thank' => '$1 {{GENDER:$2|irringrazzja|irringrazzjat}} lil {{GENDER:$4|$3}}',
	'log-show-hide-thanks' => "$1 reġistru ta' ringrazzjamenti",
);

/** Norwegian Bokmål (norsk bokmål)
 * @author Danmichaelo
 * @author Jeblad
 * @author Njardarlogar
 */
$messages['nb'] = array(
	'thanks-desc' => 'Gir mulighet for å takke brukere fra historikk- og sammenligningssider.',
	'thanks-thank' => 'takk',
	'thanks-thanked' => '{{GENDER:$1|takket}}',
	'thanks-button-thank' => '{{GENDER:$1|Takk}}',
	'thanks-button-thanked' => '{{GENDER:$1|Takket}}',
	'thanks-error-undefined' => 'Takkehandling feilet. Forsøk igjen.',
	'thanks-error-invalidrevision' => 'Revisjons-ID er ikke gyldig.',
	'thanks-error-ratelimited' => '{{GENDER:$1|Du}} har overskredet frekvensbegrensingen din. Vent litt og prøv igjen.',
	'thanks-thank-tooltip' => '{{GENDER:$1|Send}} en takkemelding til denne {{GENDER:$2|brukeren}}',
	'thanks-confirmation' => 'Vil du {{GENDER:$1|takke}} $2 for denne redigeringen?',
	'thanks-thanked-notice' => '$1 får høre at du satte pris på {{GENDER:$2|redigeringen hans|redigeringen hennes|redigeringen}}.',
	'thanks' => 'Send takk',
	'thanks-form-revid' => 'Revisjons-ID for redigeringen',
	'thanks-already-thanked' => '{{GENDER:$1|Du}} har allerede sagt takk for denne redigeringen.',
	'echo-pref-subscription-edit-thank' => 'Takker meg for redigeringen min',
	'echo-pref-tooltip-edit-thank' => 'Varsle meg når noen takker meg for en redgering jeg har gjort.',
	'echo-category-title-edit-thank' => 'Takk',
	'notification-thanks-diff-link' => 'redigeringen din',
	'notification-thanks' => '[[User:$1|$1]] {{GENDER:$1|takket}} deg for $2 på [[:$3]].',
	'notification-thanks-flyout2' => '[[User:$1|$1]] {{GENDER:$1|takket}} deg for redigeringen din på $2.',
	'notification-thanks-email-subject' => '$1 {{GENDER:$1|takket}} deg for redigeringen din på {{SITENAME}}',
	'notification-thanks-email-batch-body' => '$1 {{GENDER:$1|takket}} deg for redigeringen din på $2.',
	'notification-link-text-respond-to-user' => 'Svar til bruker',
	'log-name-thanks' => 'Takkelogg',
	'log-description-thanks' => 'Under er en liste av brukere som er takket av andre brukere.',
	'logentry-thanks-thank' => '$1 {{GENDER:$2|takket}} {{GENDER:$4|$3}}',
	'log-show-hide-thanks' => '$1 takkelogg',
);

/** Low Saxon (Netherlands) (Nedersaksies)
 * @author Servien
 */
$messages['nds-nl'] = array(
	'thanks-desc' => 't Zet de "Bedankt"-verwiezing op de geschiedenisse en verschillenweergaven',
	'thanks-thank' => 'bedanken',
	'thanks-thanked' => '{{GENDER:$1|is bedankt}}',
	'thanks-button-thank' => '{{GENDER:$1|Bedanken}}',
	'thanks-button-thanked' => '{{GENDER:$1|Is bedankt}}',
	'thanks-error-undefined' => 'Bedanken is mislokt. Probeer t weer.',
	'thanks-error-invalidrevision' => 't Versienummer is niet geldig.',
	'thanks-error-ratelimited' => "{{GENDER:$1|Je}} hebben joew limiet veur bedankjes overschrejen. Wacht effen veurda'j veurdan gaon.",
	'thanks-thank-tooltip' => '{{GENDER:$1|Stuur}} n melding mit n bedankjen naor disse {{GENDER:$2|gebruker}}',
	'thanks-confirmation' => "Wi'j $2 {{GENDER:$1|bedanken}} veur disse bewarking?",
	'thanks-thanked-notice' => '$1 hef bericht ekregen dat jie {{GENDER:$2|zien|heur|zien/heur}} bewarking mooi vienen.',
	'echo-pref-subscription-edit-thank' => "Bedank m'n veur mien bewarking",
	'echo-pref-tooltip-edit-thank' => "Stuur m'n n melding as der ene mien bedankt veur n bewarking die'k an-ebröcht hebbe.",
	'echo-category-title-edit-thank' => 'Bedankt',
	'notification-thanks-diff-link' => 'joew bewarking',
	'notification-thanks' => '[[User:$1|$1]] {{GENDER:$1|hef}} joe bedankt veur $2 op [[:$3]].',
	'notification-thanks-flyout2' => '[[User:$1|$1]] {{GENDER:$1|hef}} joe bedankt veur joew bewarking op $2.',
	'notification-thanks-email-subject' => '$1 {{GENDER:$1|hef}} joe bedankt veur joew bewarking op {{SITENAME}}',
	'notification-thanks-email-batch-body' => '$1 {{GENDER:$1|hef}} joe bedankt veur joew bewarking op $2.',
	'notification-link-text-respond-to-user' => 'Gebruker beantwoorden',
	'log-name-thanks' => 'Bedankjeslogboek',
	'log-description-thanks' => "Hieronder zie'j n lieste mit gebrukers die deur aandere gebrukers bedankt bin.",
	'logentry-thanks-thank' => '$1 {{GENDER:$2|hef}} {{GENDER:$4|$3}} bedankt',
	'log-show-hide-thanks' => 'bedankjeslogboek $1',
);

/** Dutch (Nederlands)
 * @author Hansmuller
 * @author JurgenNL
 * @author Konovalov
 * @author SPQRobin
 * @author Siebrand
 * @author Sjoerddebruin
 * @author Southparkfan
 */
$messages['nl'] = array(
	'thanks-desc' => 'Voegt "Bedankt"-koppelingen toe aan geschiedenis en verschillenweergaves',
	'thanks-thank' => 'bedanken',
	'thanks-thanked' => '{{GENDER:$1|is bedankt}}',
	'thanks-button-thank' => '{{GENDER:$1|Bedanken}}',
	'thanks-button-thanked' => '{{GENDER:$1|Bedankt}}',
	'thanks-error-undefined' => 'Bedanken is mislukt. Probeer het opnieuw.',
	'thanks-error-invalidrevision' => 'Het versienummer is niet geldig.',
	'thanks-error-ratelimited' => '{{GENDER:$1|U}} hebt uw limiet voor bedankjes overschreden. Wacht even en probeer het dan opnieuw.',
	'thanks-thank-tooltip' => 'Deze {{GENDER:$2|gebruiker}} een bedankje {{GENDER:$1|sturen}}',
	'thanks-confirmation' => 'Wilt u $2 {{GENDER:$1|bedanken}} voor deze bewerking?',
	'thanks-thanked-notice' => '$1 heeft bericht gekregen dat u {{GENDER:$2|zijn|haar|zijn/haar}} bewerking leuk vindt.',
	'thanks' => 'Bedanken',
	'thanks-form-revid' => 'Versie-ID voor bewerking',
	'thanks-already-thanked' => '{{GENDER:$1|U}} hebt al bedankt voor deze bewerking.',
	'echo-pref-subscription-edit-thank' => 'als iemand u bedankt voor een bewerking',
	'echo-pref-tooltip-edit-thank' => 'U een melding zenden als iemand u bedankt voor een bewerking die u hebt gemaakt.',
	'echo-category-title-edit-thank' => 'Bedankt',
	'notification-thanks-diff-link' => 'uw bewerking',
	'notification-thanks' => '[[User:$1|$1]] {{GENDER:$1|heeft}} u bedankt voor $2 op [[:$3]].',
	'notification-thanks-flyout2' => '[[User:$1|$1]] {{GENDER:$1|heeft}} u bedankt voor uw bewerking op $2.',
	'notification-thanks-email-subject' => '$1 {{GENDER:$1|heeft}} u bedankt voor uw bewerking op  {{SITENAME}}',
	'notification-thanks-email-batch-body' => '$1 {{GENDER:$1|heeft}} u bedankt voor uw bewerking op $2.',
	'notification-link-text-respond-to-user' => 'Op gebruiker reageren',
	'log-name-thanks' => 'Bedankjeslogboek',
	'log-description-thanks' => 'Hieronder wordt een lijst weergegeven met gebruikers die door andere gebruikers zijn bedankt.',
	'logentry-thanks-thank' => '$1 {{GENDER:$2|heeft}} {{GENDER:$4|$3}} bedankt',
	'log-show-hide-thanks' => 'bedankjeslogboek $1',
);

/** Norwegian Nynorsk (norsk nynorsk)
 * @author Njardarlogar
 */
$messages['nn'] = array(
	'thanks-desc' => 'Legg til takkelenkjer til historikk og skilnadsvising',
	'thanks-thank' => 'takk',
	'thanks-thanked' => '{{GENDER:$1|takka}}',
	'thanks-button-thank' => 'Takk', # Fuzzy
	'thanks-button-thanked' => '{{GENDER:$1|Takka}}',
	'thanks-error-undefined' => 'Takkehandlinga gjekk ikkje. Freist om att.',
	'thanks-error-invalidrevision' => 'Versjons-ID-en er ikkje gild',
	'thanks-error-ratelimited' => 'Du har overskride frekvensgrensa di. Vent litt og freist om att.', # Fuzzy
	'thanks-thank-tooltip' => '{{GENDER:$1|Send}} ei takkemelding til {{GENDER:$2|brukaren}}',
	'thanks-confirmation' => 'Er du viss på at du ynskjer å {{GENDER:$1|takka}} $2 for denne endringa?', # Fuzzy
	'thanks-thanked-notice' => '$1 vart fortald at du lika endringa {{GENDER:$2|hans|hennar|hans/hennar}}.', # Fuzzy
	'echo-pref-subscription-edit-thank' => 'Takkar meg for endringa mi',
	'echo-pref-tooltip-edit-thank' => 'Meld meg når nokon takkar meg for ei endring eg har gjort.',
	'echo-category-title-edit-thank' => 'Takk',
	'notification-thanks-diff-link' => 'endringa di',
	'notification-thanks' => '[[User:$1|$1]] {{GENDER:$1|takka}} deg for $2 på [[:$3]].',
	'notification-thanks-flyout2' => '[[User:$1|$1]] {{GENDER:$1|takka}} deg for endringa di på $2.',
	'notification-thanks-email-subject' => '$1 {{GENDER:$1|takka}} deg for endringa di på {{SITENAME}}',
	'notification-thanks-email-batch-body' => '$1 {{GENDER:$1|takka}} deg for endringa di på $2.',
	'notification-link-text-respond-to-user' => 'Svar brukar',
	'log-name-thanks' => 'Takkelogg',
	'log-description-thanks' => 'Under er ei liste over brukarar som har vorte takka av andre brukarar.',
	'logentry-thanks-thank' => '$1 {{GENDER:$2|takka}} {{GENDER:$4|$3}}',
	'log-show-hide-thanks' => '$1 takkelogg',
);

/** Occitan (occitan)
 * @author Cedric31
 */
$messages['oc'] = array(
	'thanks-desc' => 'Apond de ligams de mercejament a las vistas istoric e de diferéncia',
	'thanks-thank' => 'mercé',
	'thanks-thanked' => '{{GENDER:$1|mercejat|mercejada}}',
	'thanks-button-thank' => '{{GENDER:$1|Mercé}}',
	'thanks-button-thanked' => '{{GENDER:$1|Mercejat}}',
	'thanks-error-undefined' => 'Fracàs de l’accion de mercejament. Tornatz ensajar.',
	'thanks-error-invalidrevision' => 'L’ID de revision es invalid.',
	'thanks-error-ratelimited' => '{{GENDER:$1|Avètz}} depassat vòstre limit de debit. Esperatz un pauc e tornatz ensajar.',
	'thanks-thank-tooltip' => '{{GENDER:$1|Mandar}} una notificacion de mercejament a {{GENDER:$2|aqueste utilizaire|aquesta utilizaira}}',
	'thanks-confirmation' => 'Volètz {{GENDER:$1|mercejar}} $2 per aquesta modificacion ?',
	'thanks-thanked-notice' => '$1 es estat notificat que vos a agradat {{GENDER:$2|sa}} modificacion.',
	'echo-pref-subscription-edit-thank' => 'Me mercejar per ma modificacion',
	'echo-pref-tooltip-edit-thank' => "M'avisar quand qualqu’un me merceja per una modificacion qu’ai facha.",
	'echo-category-title-edit-thank' => 'Mercé',
	'notification-thanks-diff-link' => 'vòstra modificacion',
	'notification-thanks' => '[[User:$1|$1]] vos {{GENDER:$1|a mercejat}} per $2 sus [[:$3]].',
	'notification-thanks-flyout2' => '[[User:$1|$1]] vos {{GENDER:$1|a mercejat}} per vòstra modificacion sus $2.',
	'notification-thanks-email-subject' => '$1 vos {{GENDER:$1|a mercejat}} per vòstra modificacion sus {{SITENAME}}',
	'notification-thanks-email-batch-body' => '$1 vos {{GENDER:$1|a mercejat}} per vòstra modificacion sus $2.',
	'notification-link-text-respond-to-user' => 'Respondre a l’utilizaire',
	'log-name-thanks' => 'Entrada mercejaments',
	'log-description-thanks' => "Trobaretz çaijós una lista d'utilizaires que son estats mercejats per d'autres.",
	'logentry-thanks-thank' => '$1 {{GENDER:$2|a mercejat}} {{GENDER:$4|$3}}',
	'log-show-hide-thanks' => '$1 lo jornal dels mercejaments',
);

/** Punjabi (ਪੰਜਾਬੀ)
 * @author Babanwalia
 * @author Satdeep gill
 */
$messages['pa'] = array(
	'thanks-desc' => 'ਇਤਿਹਾਸ ਵਿੱਚ ਧੰਨਵਾਦੀ ਲਿੰਕ ਅਤੇ ਵੱਖਰੇ ਵਿਚਾਰ ਜੋੜਦਾ ਹੈ',
	'thanks-thank' => 'ਧੰਨਵਾਦ',
	'thanks-thanked' => '{{GENDER:$1|ਧੰਨਵਾਦ ਕੀਤਾ ਗਿਆ}}',
	'thanks-button-thank' => 'ਧੰਨਵਾਦ', # Fuzzy
	'thanks-button-thanked' => '{{GENDER:$1|ਧੰਨਵਾਦ ਕੀਤਾ ਗਿਆ}}',
	'thanks-error-undefined' => 'ਧੰਨਵਾਦ ਕਾਰਜ ਫੇਲ ਹੋਇਆ। ਦੁਬਾਰਾ ਕੋਸ਼ਿਸ਼ ਕਰੋ ਜੀ।',
	'thanks-error-invalidrevision' => 'ਸੁਧਾਈ ਪਛਾਣ ਉਚਿਤ ਨਹੀਂ ਹੈ।',
	'thanks-error-ratelimited' => 'ਤੁਸੀਂ ਗਤੀ ਹੱਦ ਪਾਰ ਕਰ ਗਏ ਹੋ। ਕਿਰਪਾ ਕਰਕੇ ਕੁਝ ਸਮਾਂ ਇੰਤਜ਼ਾਰ ਕਰੇ ਅਤੇ ਦੁਬਾਰਾ ਕੋਸ਼ਿਸ਼ ਕਰੋ।', # Fuzzy
	'thanks-thank-tooltip' => 'ਇਸ {{GENDER:$2|ਵਰਤੋਂਕਾਰ}} ਨੂੰ ਇੱਕ ਧੰਨਵਾਦੀ ਸੂਚਨਾ {{GENDER:$1|ਭੇਜੋ}}',
	'thanks-confirmation' => 'ਕੀ ਤੁਸੀਂ ਪੱਕਾ $2 ਦਾ ਇਸ ਸੋਧ ਲਈ {{GENDER:$1|ਧੰਨਵਾਦ}} ਕਰਨਾ ਚਾਹੁੰਦੇ ਹੋ?', # Fuzzy
	'thanks-thanked-notice' => '$1 ਨੂੰ ਦੱਸ ਦਿੱਤਾ ਗਿਆ ਕਿ ਤੁਹਾਨੂੰ {{GENDER:$2|ਉਹਨਾਂ ਦੀ}} ਸੋਧ ਪਸੰਦ ਆਈ।', # Fuzzy
	'echo-pref-subscription-edit-thank' => 'ਮੇਰੀ ਸੋਧ ਲਈ ਮੈਨੂੰ ਧੰਨਵਾਦ',
	'echo-pref-tooltip-edit-thank' => 'ਜਦੋਂ ਕੋਈ ਮੇਰੀ ਸੋਧ ਦਾ ਧੰਨਵਾਦ ਕਰਦਾ ਹੈ ਤਾਂ ਮੈਨੂੰ ਇਤਲਾਹ ਦਿਓ',
	'echo-category-title-edit-thank' => 'ਧੰਨਵਾਦ',
	'notification-thanks-diff-link' => 'ਤੁਹਾਡੀ ਸੋਧ',
	'notification-thanks' => '[[User:$1|$1]] ਨੇ [[:$3]] ਉੱਤੇ $2 ਲਈ ਤੁਹਾਡਾ {{GENDER:$1|ਧੰਨਵਾਦ ਕੀਤਾ}}।',
	'notification-thanks-flyout2' => '[[User:$1|$1]] $2 ਉੱਤੇ ਤੁਹਾਡੀ ਸੋਧ ਲਈ ਤੁਹਾਡਾ {{GENDER:$1|ਧੰਨਵਾਦ ਕੀਤਾ}}।',
	'notification-thanks-email-subject' => '$1 ਨੇ {{SITENAME}} ਉੱਤੇ ਤੁਹਾਡੀ ਸੋਧ ਲਈ ਤੁਹਾਡਾ {{GENDER:$1|ਧੰਨਵਾਦ ਕੀਤਾ}}',
	'notification-thanks-email-batch-body' => '$1 ਨੇ $2 ਉੱਤੇ ਤੁਹਾਡੀ ਸੋਧ ਲਈ ਤੁਹਾਡਾ {{GENDER:$1|ਧੰਨਵਾਦ ਕੀਤਾ}}।',
	'notification-link-text-respond-to-user' => 'ਵਰਤੋਂਕਾਰ ਨੂੰ ਜੁਆਬ ਦਿਓ',
	'log-name-thanks' => 'ਮਿਹਰਬਾਨੀਆਂ ਦਾ ਇੰਦਰਾਜ',
	'log-description-thanks' => 'ਹੇਠਾਂ ਦੂਸਰੇ ਵਰਤੋਂਕਾਰਾਂ ਦੁਆਰਾ ਧੰਨਵਾਦ ਕੀਤੇ ਵਰਤੋਂਕਾਰਾਂ ਦੀ ਇੱਕ ਸੂਚੀ ਹੈ।',
	'logentry-thanks-thank' => '$1 ਨੇ {{GENDER:$4|$3}} ਦਾ {{GENDER:$2|ਧੰਨਵਾਦ ਕੀਤਾ ਹੈ}}',
	'log-show-hide-thanks' => '$1 ਧੰਨਵਾਦੀ ਸੂਚੀ',
);

/** Polish (polski)
 * @author Chrumps
 * @author Matma Rex
 * @author Tar Lócesilion
 * @author Ty221
 * @author WTM
 */
$messages['pl'] = array(
	'thanks-desc' => 'Dodaje do stron historii i różnicy pomiędzy wersjami link umożliwiający podziękowanie',
	'thanks-thank' => 'podziękuj',
	'thanks-thanked' => '{{GENDER:$1|podziękowałeś|podziękowałaś}}',
	'thanks-button-thank' => '{{GENDER:$1|Podziękuj}}',
	'thanks-button-thanked' => '{{GENDER:$1|Podziękowałeś|Podziękowałaś}}',
	'thanks-error-undefined' => 'Operacja podziękowania nie powiodła się. Proszę spróbować ponownie.',
	'thanks-error-invalidrevision' => 'Nieprawidłowy identyfikator wersji.',
	'thanks-error-ratelimited' => '{{GENDER:$1|Przekroczyłeś|Przekroczyłaś}} limit podziękowań. Poczekaj chwilę i spróbuj ponownie.',
	'thanks-thank-tooltip' => '{{GENDER:$1|Wyślij}} podziękowanie do {{GENDER:$2|tego użytkownika|tej użytkowniczki}}',
	'thanks-confirmation' => 'Czy chcesz {{GENDER:$1|podziękować}} $2 za tę edycję?',
	'thanks-thanked-notice' => '$1 {{GENDER:$2|został powiadomiony|została powiadomiona}} o twoim podziękowaniu za {{GENDER:$2|jego|jej}} edycję.',
	'thanks' => 'Wyślij podziękowanie',
	'thanks-form-revid' => 'ID wersji',
	'thanks-already-thanked' => 'Już {{GENDER:$1|podziękowałeś|podziękowałaś}} za tę edycję.',
	'echo-pref-subscription-edit-thank' => 'podziękuje mi za edycję, którą wykonałem',
	'echo-pref-tooltip-edit-thank' => 'Powiadom mnie, kiedy ktoś podziękuje mi za edycję, którą wykonałem.',
	'echo-category-title-edit-thank' => 'Podziękowania',
	'notification-thanks-diff-link' => 'edycję',
	'notification-thanks' => '[[User:$1|$1]] {{GENDER:$1|podziękował|podziękowała}} Ci za $2 na stronie [[:$3]].',
	'notification-thanks-flyout2' => '[[User:$1|$1]] {{GENDER:$1|podziękował|podziękowała}} Ci za edycję na stronie $2.',
	'notification-thanks-email-subject' => '$1 {{GENDER:$1|podziękował|podziękowała}} Ci za edycję w {{GRAMMAR:MS.lp|{{SITENAME}}}}',
	'notification-thanks-email-batch-body' => '$1 {{GENDER:$1|podziękował|podziękowała}} Ci za edycję na stronie $2.',
	'notification-link-text-respond-to-user' => 'Odpowiedz',
	'log-name-thanks' => 'Rejestr podziękowań',
	'log-description-thanks' => 'Poniżej znajduje się lista użytkowników, którym podziękowali inni użytkownicy.',
	'logentry-thanks-thank' => '$1 {{GENDER:$2|podziękował|podziękowała}} {{GENDER:$4|użytkownikowi|użytkowniczce}} $3',
	'log-show-hide-thanks' => '$1 rejestr podziękowań',
);

/** Piedmontese (Piemontèis)
 * @author Borichèt
 */
$messages['pms'] = array(
	'thanks-desc' => "A gionta dle liure d'aringrassiament a le viste dë stòria e ëd diferensa",
	'thanks-thank' => 'aringrassié',
	'thanks-thanked' => '{{GENDER:$1|aringrassià}}',
	'thanks-button-thank' => '{{GENDER:$1|Mersì}}',
	'thanks-button-thanked' => '{{GENDER:$1|Aringrassià}}',
	'thanks-error-undefined' => "Falì a aringrassié. Për piasì, ch'a preuva torna.",
	'thanks-error-invalidrevision' => "L'ID ëd revision a l'é nen bon.",
	'thanks-error-ratelimited' => "{{GENDER:$1|A}} l'ha sorpassà sò lìmit ëd frequensa. Për piasì, ch'a speta un pòch e ch'a preuva torna.",
	'thanks-thank-tooltip' => "{{GENDER:$1|Mandé}} na notìfica d'aringrassiament a cost {{GENDER:$2|utent}}",
	'thanks-confirmation' => 'A veul {{GENDER:$1|aringrassié}} $2 për costa modìfica?',
	'thanks-thanked-notice' => "A l'é stàit notificà a $1 che a chiel a l'é piasuje {{GENDER:$2|soa}} modìfica.",
	'thanks' => "mandé dj'aringrassiament",
	'thanks-form-revid' => 'Identificatin ëd revision për la modìfica',
	'thanks-already-thanked' => "{{GENDER:$1|Chiel|Chila}} a l'ha già mandà n'aringrassiament për costa modìfica.",
	'echo-pref-subscription-edit-thank' => 'Aringrassieme për mia modìfica',
	'echo-pref-tooltip-edit-thank' => "Aviseme cand cheidun a m'aringrassia për na modìfica ch'i l'hai fàit.",
	'echo-category-title-edit-thank' => 'Mersì',
	'notification-thanks-diff-link' => 'soa modìfica',
	'notification-thanks' => "[[User:$1|$1]] a l'ha {{GENDER:$1|aringrassialo|aringrassiala}} për $2 su [[:$3]].",
	'notification-thanks-flyout2' => "[[User:$1|$1]] a l'ha {{GENDER:$1|aringrassialo|aringrassiala}} për soa modìfica su $2.",
	'notification-thanks-email-subject' => "$1 a l'ha {{GENDER:$1|aringrassialo|aringrassiala}} për soa modìfica su {{SITENAME}}",
	'notification-thanks-email-batch-body' => "$1 a l'ha {{GENDER:$1|aringrassialo|aringrassiala}} për soa modìfica su $2.",
	'notification-link-text-respond-to-user' => "Rësponde a l'utent",
	'log-name-thanks' => "Argistr dj'aringrassiament",
	'log-description-thanks' => "Sì-sota a-i é na lista d'utent aringrassià da d'àutri utent.",
	'logentry-thanks-thank' => "$1 a l'ha {{GENDER:$2|aringrassià}} {{GENDER:$4|$3}}",
	'log-show-hide-thanks' => "$1 l'argistr ëd j'aringrassiament",
);

/** Pashto (پښتو)
 * @author Ahmed-Najib-Biabani-Ibrahimkhel
 */
$messages['ps'] = array(
	'thanks-desc' => 'د پېښليک او توپيرونو کتنو کې د مننې تړنې ورگډوي',
	'thanks-thank' => 'مننه',
	'thanks-thanked' => '{{GENDER:$1|منندوی شو}}',
	'thanks-button-thank' => '{{GENDER:$1|مننه}}',
	'thanks-button-thanked' => '{{GENDER:$1|منندوی شو}}',
	'thanks-error-undefined' => 'د مننې چاره پاتې راغله. بيا مو هڅه وکړۍ.',
	'thanks-error-invalidrevision' => 'د کره کتنې پېژند سم نه دی.',
	'thanks-error-ratelimited' => '{{GENDER:$1|تاسې}} د خپل ټاکلي بريد نه واوښتلئ. مهرباني وکړۍ لږ څه تم شۍ او بيا يې وآزمويۍ.',
	'thanks-thank-tooltip' => 'دې {{GENDER:$2|کارن}} ته د مننې يو پيغام {{GENDER:$1|ورلېږل}}',
	'thanks-confirmation' => 'آيا په رښتيا له $2 څخه د دې سمون په خاطر {{GENDER:$1|مننه کول غواړې}}؟',
	'thanks-thanked-notice' => '$1 ته ووييل شول چې تاسې د {{GENDER:$2|هغه|هغې|هغوی}} سمونونه خوښ کړل.',
	'echo-pref-subscription-edit-thank' => 'زه د سمون پخاطر زما منندوی شه',
	'echo-pref-tooltip-edit-thank' => 'خبر مې کړه کله چې يو څوک زما د يو سمون په خاطر له ما څخه مننه کوي.',
	'echo-category-title-edit-thank' => 'مننه',
	'notification-thanks-diff-link' => 'ستاسې سمون',
	'notification-thanks' => '[[User:$1|$1]] له تاسې څخه په [[:$3]] باندې د $2 پخاطر {{GENDER:$1|مننه وکړه}}.',
	'notification-thanks-flyout2' => '[[User:$1|$1]] له تاسې څخه په $2 باندې ستاسې د سمون پخاطر {{GENDER:$1|مننه وکړه}}.',
	'notification-thanks-email-subject' => '$1 په {{SITENAME}} باندې ستاسې د سمون په خاطر {{GENDER:$1|مننه وکړه}}',
	'notification-thanks-email-batch-body' => '$1 په $2 باندې ستاسې د سمون په خاطر {{GENDER:$1|مننه وکړه}}.',
	'notification-link-text-respond-to-user' => 'کارن ته ځواب',
	'log-name-thanks' => 'د مننې يادښت',
	'log-description-thanks' => 'دا لاندې د هغو کارنانو يو لړليک دی چې نور کارنان ترې منندوی دي.',
	'logentry-thanks-thank' => '$1 {{GENDER:$2|منندوی شو}} له {{GENDER:$4|$3}}',
	'log-show-hide-thanks' => 'د مننې يادښت $1',
);

/** Portuguese (português)
 * @author GoEThe
 * @author Helder.wiki
 * @author Malafaya
 * @author OTAVIO1981
 * @author Oona
 * @author Opraco
 * @author Titoncio
 * @author Vitorvicentevalente
 */
$messages['pt'] = array(
	'thanks-desc' => 'Adiciona ligações para agradecimentos quando na página do histórico ou em diffs',
	'thanks-thank' => 'agradecer',
	'thanks-thanked' => '{{GENDER:$1|agradecimento enviado}}',
	'thanks-button-thank' => 'Agradecer', # Fuzzy
	'thanks-button-thanked' => '{{GENDER:$1|Agradecimento enviado}}',
	'thanks-error-undefined' => 'Acção de agradecimento falhou. Por favor, tente novamente.',
	'thanks-error-invalidrevision' => 'O ID de revisão não é válido.',
	'thanks-error-ratelimited' => 'Excedeu o limite de velocidade. Por favor, espere algum tempo e tente novamente.', # Fuzzy
	'thanks-thank-tooltip' => '{{GENDER:$1|Envie}} um agradecimento para {{GENDER:$2|este utilizador|esta utilizadora}}',
	'thanks-confirmation' => 'Tem a certeza que deseja {{GENDER:$1|agradecer}}  a $2 por esta edição?', # Fuzzy
	'thanks-thanked-notice' => '$1 foi {{GENDER:$2|informado|informada|informado(a)}} que você gostou da sua edição.', # Fuzzy
	'echo-pref-subscription-edit-thank' => 'Agradece-me pela minha edição',
	'echo-pref-tooltip-edit-thank' => 'Notificar-me quando alguém me agradecer por uma edição que eu fiz.',
	'echo-category-title-edit-thank' => 'Agradecimentos',
	'notification-thanks-diff-link' => 'sua edição',
	'notification-thanks' => '[[User:$1|$1]] {{GENDER:$1|agradeceu-lhe}} pela $2 em [[:$3]].',
	'notification-thanks-flyout2' => '[[User:$1|$1]] {{GENDER:$1|agradeceu-lhe}} pela sua edição em $2.',
	'notification-thanks-email-subject' => '$1 {{GENDER:$1|agradeceu-lhe}} pela sua edição em {{SITENAME}}',
	'notification-thanks-email-batch-body' => '$1 {{GENDER:$1|agradeceu-lhe}} pela sua edição em $2.',
	'notification-link-text-respond-to-user' => 'Responder ao utilizador',
	'log-name-thanks' => 'Registo de agradecimentos',
	'log-description-thanks' => 'Abaixo está uma lista de utilizadores que receberam agradecimentos de outros utilizadores.',
	'logentry-thanks-thank' => '$1 {{GENDER:$2|agradeceu}} a {{GENDER:$4|$3}}',
	'log-show-hide-thanks' => '$1 registo de agradecimentos',
);

/** Brazilian Portuguese (português do Brasil)
 * @author Dianakc
 * @author HenriqueCrang
 * @author OTAVIO1981
 * @author Opraco
 * @author Teles
 */
$messages['pt-br'] = array(
	'thanks-desc' => 'Adiciona link de agradecimento às páginas de histórico e de diferença entre edições',
	'thanks-thank' => 'agradecer',
	'thanks-thanked' => '{{GENDER:$1|agradecido|agradecida}}',
	'thanks-error-undefined' => 'O agradecer falhou. Por favor tente de novo.',
	'thanks-error-invalidrevision' => 'ID de revisão inválido.',
	'thanks-error-ratelimited' => 'Você excedeu seu limite. Por favor aguarde um pouco e tente novamente.', # Fuzzy
	'thanks-thank-tooltip' => '{{GENDER:$1|Envie}} uma nota de agradecimento para este {{GENDER:$2|usuário}}',
	'thanks-confirmation' => 'Você tem certeza que deseja {{GENDER:$1|agradecer}}  a $2 por esta edição?', # Fuzzy
	'echo-pref-subscription-edit-thank' => 'Agradeça-me pela minha edição',
	'echo-pref-tooltip-edit-thank' => 'Notifique-me quando alguém agradecer por uma edição que fiz.',
	'echo-category-title-edit-thank' => 'Agradecimento',
	'notification-thanks-diff-link' => 'sua edição',
	'notification-thanks' => '[[User:$1|$1]] {{GENDER:$1|agradeceu-lhe}} pela $2 em [[:$3]].',
	'notification-thanks-flyout2' => '[[User:$1|$1]] {{GENDER:$1|agradeceu-lhe}} pela sua edição em $2.',
	'notification-thanks-email-subject' => '$1 agradeceu por sua edição na {{SITENAME}}',
	'notification-thanks-email-batch-body' => '$1 agradeceu por sua edição em $2.',
	'notification-link-text-respond-to-user' => 'Responder ao usuário',
	'log-name-thanks' => 'Registro de agradecimentos',
	'log-description-thanks' => 'Abaixo está uma lista de usuários que receberam agradecimentos de outros usuários.',
	'logentry-thanks-thank' => '$1 {{GENDER:$2|agradeceu}} {{GENDER:$4|$3}}',
);

/** Romansh (rumantsch)
 * @author Kazu89
 */
$messages['rm'] = array(
	'log-name-thanks' => "Protocol d'engraziaments",
	'log-show-hide-thanks' => "$1 il protocol d'engraziaments",
);

/** Romanian (română)
 * @author Minisarm
 */
$messages['ro'] = array(
	'thanks-desc' => 'Adaugă legături pentru mulțumiri în istoric și în caseta „Diferență între versiuni”',
	'thanks-thank' => 'mulțumire',
	'thanks-thanked' => '{{GENDER:$1|ați mulțumit}}',
	'thanks-button-thank' => '{{GENDER:$1|Mulțumesc}}',
	'thanks-button-thanked' => '{{GENDER:$1|Ați mulțumit}}',
	'thanks-error-undefined' => 'Încercarea de a mulțumi a eșuat. Încercați din nou.',
	'thanks-error-invalidrevision' => 'Codul versiunii nu este valid.',
	'thanks-error-ratelimited' => '{{GENDER:$1|V}}-ați depășit limita de evaluare. Așteptați un timp și reîncercați.',
	'thanks-thank-tooltip' => '{{GENDER:$1|Trimite}} o notificare de mulțumire {{GENDER:$2|acestui utilizator|acestei utilizatoare}}',
	'thanks-confirmation' => 'Doriți {{GENDER:$1|să mulțumiți}} utilizatorului $2 pentru această modificare?',
	'thanks-thanked-notice' => '$1 a fost {{GENDER:$2|notificat|notificată|notificat}} că i-ați apreciat modificarea.',
	'thanks' => 'Trimitere mulțumiri',
	'thanks-form-revid' => 'ID-ul versiunii pentru modificare',
	'thanks-already-thanked' => '{{GENDER:$1|Ați}} trimis deja mulțumiri pentru această modificare.',
	'echo-pref-subscription-edit-thank' => 'Mi se mulțumește pentru modificarea mea',
	'echo-pref-tooltip-edit-thank' => 'Notifică-mă când cineva îmi mulțumește pentru o modificare pe care am efectuat-o.',
	'echo-category-title-edit-thank' => 'Mulțumiri',
	'notification-thanks-diff-link' => 'modificarea dumneavoastră',
	'notification-thanks' => '[[User:$1|$1]] {{GENDER:$1|v-a mulțumit}} pentru $2 asupra paginii [[:$3]].',
	'notification-thanks-flyout2' => '[[User:$1|$1]] {{GENDER:$1|v-a mulțumit}} pentru modificarea dumnevoastră asupra paginii $2.',
	'notification-thanks-email-subject' => '$1 {{GENDER:$1|v-a mulțumit}} pentru modificarea dumneavoastră de la {{SITENAME}}',
	'notification-thanks-email-batch-body' => '$1 {{GENDER:$1|v-a mulțumit}} pentru modificarea dumneavoastră asupra paginii $2.',
	'notification-link-text-respond-to-user' => 'Răspuns către utilizator',
	'log-name-thanks' => 'Jurnal mulțumiri',
	'log-description-thanks' => 'Mai jos se află o listă a utilizatorilor cărora li s-a mulțumit de către alți utilizatori.',
	'logentry-thanks-thank' => '$1 {{GENDER:$2|i-a mulțumit}} {{GENDER:$4|utilizatorului $3|utilizatoarei $3}}',
	'log-show-hide-thanks' => '$1 jurnalul de mulțumiri',
);

/** tarandíne (tarandíne)
 * @author Joetaras
 */
$messages['roa-tara'] = array(
	'thanks-desc' => "Aggiunge le collegaminde de rengraziamende sus a le viste d'u cunde e de le differenze",
	'thanks-thank' => 'grazie',
	'thanks-thanked' => '{{GENDER:$1|ringraziate}}',
	'thanks-button-thank' => '{{GENDER:$1|Grazie}}',
	'thanks-button-thanked' => '{{GENDER:$1|Ringraziate}}',
	'thanks-error-undefined' => 'Azione de ringraziamende fallite. Pe piacere pruéve arrete.',
	'thanks-error-invalidrevision' => "ID d'a revisione non g'è valide.",
	'thanks-error-ratelimited' => "Tu è sbunnate le limite de valutazione tune. Pe piacere aspitte 'nu picche e pruève arrete.", # Fuzzy
	'thanks-thank-tooltip' => "{{GENDER:$1|Manne}} 'na notifiche de rengraziamende a stu {{GENDER:$2|utende}}",
	'thanks-confirmation' => 'Sì secure ca vuè ccu {{GENDER:$1|rengrazie}} $2 pe stu cangiamende?', # Fuzzy
	'thanks' => 'Manne le rengraziaminde',
	'thanks-form-revid' => "ID d'a revisione pu cangiamende",
	'echo-pref-subscription-edit-thank' => 'Ringraziame pu cangiamende mije',
	'echo-pref-tooltip-edit-thank' => "Notificame quanne quacchedune me ringrazie pe 'nu cangiamende ca agghie fatte.",
	'echo-category-title-edit-thank' => 'Grazie!',
	'notification-thanks-diff-link' => 'le cangiaminde tune',
	'notification-thanks' => '[[User:$1|$1]] {{GENDER:$1|te rengrazie}} pe $2 sus a [[:$3]].',
	'notification-thanks-flyout2' => '[[User:$1|$1]] {{GENDER:$1|te rengrazie}} pu cangiamende tune sus a $2.',
	'notification-thanks-email-subject' => '$1 {{GENDER:$1|te rengrazie}} pu cangiamende tune sus a {{SITENAME}}',
	'notification-thanks-email-batch-body' => '$1 {{GENDER:$1|te rengrazie}} pu cangiamende tune sus a $2.',
	'notification-link-text-respond-to-user' => "Respunne a l'utende",
	'log-name-thanks' => 'Archivije de le rengraziaminde',
	'log-description-thanks' => "Sotte stè 'n'elenghe de utinde ca onne rengraziate otre utinde.",
	'logentry-thanks-thank' => '$1 {{GENDER:$2|ave ringraziate}} {{GENDER:$4|$3}}',
	'log-show-hide-thanks' => '$1 archivije de le rengraziaminde',
);

/** Russian (русский)
 * @author Kaganer
 * @author Lockal
 * @author Okras
 * @author Чаховіч Уладзіслаў
 */
$messages['ru'] = array(
	'thanks-desc' => 'Добавляет благодарственные ссылки на историю и сравнение версий',
	'thanks-thank' => 'спасибо',
	'thanks-thanked' => '{{GENDER:$1|поблагодарил|поблагодарила}}',
	'thanks-button-thank' => '{{GENDER:$1|Спасибо}}',
	'thanks-button-thanked' => '{{GENDER:$1|Был поблагодарён|Была поблагодарена}}',
	'thanks-error-undefined' => 'Попытка поблагодарить не удалась. Попробуйте снова.',
	'thanks-error-invalidrevision' => 'Некорректный номер версии.',
	'thanks-error-ratelimited' => '{{GENDER:$1|Вы}} превысили ограничение скорости выполнения таких действий. Пожалуйста, подождите некоторое время и попробуйте снова.',
	'thanks-thank-tooltip' => '{{GENDER:$1|Отправить}} {{GENDER:$2|этому участнику|этой участнице}} благодарственное сообщение',
	'thanks-confirmation' => 'Хотите {{GENDER:$1|поблагодарить}} $2 за эту правку?',
	'thanks-thanked-notice' => '$1 {{GENDER:$2|был оповещён|была оповещена|были оповещены}}, что вам понравилось {{GENDER:$2|его|её|их}} правка.',
	'thanks' => 'Отправить благодарность',
	'thanks-form-revid' => 'Идентификатор правки для редактирования',
	'thanks-already-thanked' => '{{GENDER:$1|Вы}} уже отправили благодарность за эту правку.',
	'echo-pref-subscription-edit-thank' => 'Спасибо мне за мою правку',
	'echo-pref-tooltip-edit-thank' => 'Сообщать мне, когда кто-то благодарит меня за сделанную мной правку.',
	'echo-category-title-edit-thank' => 'Спасибо',
	'notification-thanks-diff-link' => 'вашу правку',
	'notification-thanks' => '[[User:$1|$1]] {{GENDER:$1|поблагодарил|поблагодарила}} вас за $2 на странице «[[:$3]]».',
	'notification-thanks-flyout2' => '[[User:$1|$1]] {{GENDER:$1|поблагодарил|поблагодарила}} вас за вашу правку на странице «$2».',
	'notification-thanks-email-subject' => '$1 {{GENDER:$1|поблагодарил|поблагодарила}} вас за вашу правку на сайте «{{SITENAME}}».',
	'notification-thanks-email-batch-body' => '$1 {{GENDER:$1|поблагодарил|поблагодарила}} вас за вашу правку на странице «$2».',
	'notification-link-text-respond-to-user' => 'Ответить участнику',
	'log-name-thanks' => 'Журнал благодарностей',
	'log-description-thanks' => 'Ниже находится список участников, получивших благодарности от других участников.',
	'logentry-thanks-thank' => '$1 {{GENDER:$2|поблагодарил|поблагодарила}} {{GENDER:$4|участника|участницу}} $3',
	'log-show-hide-thanks' => '$1 журнал благодарностей',
);

/** Sicilian (sicilianu)
 * @author Gmelfi
 */
$messages['scn'] = array(
	'thanks-thank' => 'arringràzzia',
	'thanks-button-thank' => '{{GENDER:$1|Arringràzzia}}',
	'thanks-confirmation' => 'Vuliti {{GENDER:$1|arringrazziari}} $2 pi stu canciu ?',
	'echo-pref-subscription-edit-thank' => "M'arringràzzia pi lu mè canciu",
	'echo-pref-tooltip-edit-thank' => "Abbìsami quannu quarchidunu m'arringràzzia pi nu canciu ca fici.",
);

/** Samogitian (žemaitėška)
 * @author Hugo.arg
 */
$messages['sgs'] = array(
	'thanks-thank' => 'padiekvuotė',
	'thanks-button-thank' => 'Padiekavuotė', # Fuzzy
	'notification-thanks-flyout2' => '[[User:$1|$1]] {{GENDER:$1|padiekavuojė}} Tamstā ož Tamstas pakeitėma poslapī $2.',
);

/** Serbo-Croatian (srpskohrvatski / српскохрватски)
 * @author Kolega2357
 */
$messages['sh'] = array(
	'thanks-desc' => 'Dodaje mogućnost zahvaljivanja u pregledu historije i pregledu razlika između izmena',
	'thanks-thank' => 'zahvali se',
	'thanks-thanked' => '{{GENDER:$1|zahvalio se|zahvalila se}}',
	'notification-link-text-respond-to-user' => 'Odgovori korisniku',
	'log-name-thanks' => 'Evidencija zahvaljivanja',
	'log-description-thanks' => 'Ispod se nalazi spisak korisnika kojima su se drugi korisnici zahvalili.',
	'logentry-thanks-thank' => '$1 se {{GENDER:$2|zahvalio|zahvalila}} {{GENDER:$4|korisniku|korisnici}} {{GENDER:$4|$3}}',
	'log-show-hide-thanks' => '$1 evidencija zahvaljivanja',
);

/** Slovak (slovenčina)
 * @author Sudo77(new)
 */
$messages['sk'] = array(
	'thanks-desc' => 'Pridáva odkazy na poďakovanie do histórie a zobrazenia rozdielov',
	'thanks-thank' => 'poďakovať',
	'thanks-thanked' => '{{GENDER:$1|poďakoval}}',
	'thanks-button-thank' => '{{GENDER:$1|Ďakujem}}',
	'thanks-button-thanked' => '{{GENDER:$1|Poďakoval}}',
	'thanks-error-undefined' => 'Poďakovanie sa nepodarilo. Skúste to prosím znova.',
	'thanks-error-invalidrevision' => 'ID revízie je neplatné.',
	'thanks-error-ratelimited' => 'Prekročili ste rýchlostný limit. Prosím počkajte chvíľu a skúste to znova.', # Fuzzy
	'thanks-thank-tooltip' => '{{GENDER:$1|Poslať}} {{GENDER:$2|tomuto redaktorovi|tejto redaktorke}} poďakovanie',
	'thanks-confirmation' => 'Chcete sa {{GENDER:$1|poďakovať}} $2 za túto úpravu?',
	'thanks-thanked-notice' => '$1 bol upozornený, že sa vám páčila  {{GENDER:$2| jeho|jej|ich}} úprava.',
	'echo-pref-subscription-edit-thank' => 'poďakuje mi niekto za moje úpravy',
	'echo-pref-tooltip-edit-thank' => 'Upozornite ma, ak mi niekto poďakuje za moju úpravu.',
	'echo-category-title-edit-thank' => 'poďakovanie',
	'notification-thanks-diff-link' => 'vašu úpravu',
	'notification-thanks' => '[[User:$1|$1]] vám {{GENDER:$1|poďakoval|poďakovala}} za $2 stránky [[:$3]].',
	'notification-thanks-flyout2' => '[[User:$1|$1]] vám {{GENDER:$1|poďakoval|poďakovala}} za úpravu stránky $2.',
	'notification-thanks-email-subject' => '$1 vám {{GENDER:$1|poďakoval|poďakovala}} za vašu úpravu na {{grammar:6sg|{{SITENAME}}}}',
	'notification-thanks-email-batch-body' => '$1 vám {{GENDER:$1|poďakoval|poďakovala}} za úpravu stránky $2.',
	'notification-link-text-respond-to-user' => 'Reagovať na redaktora',
	'log-name-thanks' => 'Kniha poďakovaní',
	'log-description-thanks' => 'Nižšie je uvedený zoznam redaktorov, ktorým ostatný redaktori poďakovali.',
	'logentry-thanks-thank' => '$1 {{GENDER:$2|poďakoval|poďakovala}} {{GENDER:$4|redaktorovi|redaktorke}} $3',
	'log-show-hide-thanks' => '$1 knihu poďakovaní',
);

/** Slovenian (slovenščina)
 * @author Dbc334
 * @author Eleassar
 * @author Matej1234
 * @author Yerpo
 */
$messages['sl'] = array(
	'thanks-desc' => 'K prikazom zgodovine in razlik doda povezavo za zahvalo.',
	'thanks-thank' => 'zahvala',
	'thanks-thanked' => '{{GENDER:$1|zahvala je objavljena}}',
	'thanks-button-thank' => '{{GENDER:$1|Zahvala}}',
	'thanks-button-thanked' => '{{GENDER:$1|Zahvala je objavljena|Zahvala je objavljena}}',
	'thanks-error-undefined' => 'Zahvala ni uspela. Prosimo, poskusite znova.',
	'thanks-error-invalidrevision' => 'ID-številka redakcije ni veljavna.',
	'thanks-error-ratelimited' => '{{GENDER:$1|Presegli}} ste omejitev hitrosti. Prosimo, počakajte nekaj časa in nato poskusite znova.',
	'thanks-thank-tooltip' => '{{GENDER:$1|Pošljite}} {{GENDER:$2|temu uporabniku|tej uporabnici}} zahvalo',
	'thanks-confirmation' => 'Ali se želite uporabniku $2 {{GENDER:$1|zahvaliti}} za to urejanje?',
	'thanks-thanked-notice' => '$1 ste sporočili, da vam je bilo {{GENDER:$2|njegovo|njeno}} urejanje všeč.',
	'thanks' => 'Pošljite zahvalo',
	'thanks-form-revid' => 'ID redakcije za urejanje',
	'thanks-already-thanked' => 'Za to urejanje {{GENDER:$1|ste}} že poslali zahvalo.',
	'echo-pref-subscription-edit-thank' => 'Se mi zahvali za urejanje',
	'echo-pref-tooltip-edit-thank' => 'Obvesti me, kadar se mi kdo zahvali za katero od mojih urejanj.',
	'echo-category-title-edit-thank' => 'Zahvala',
	'notification-thanks-diff-link' => 'vaše urejanje',
	'notification-thanks' => '[[User:$1|$1]] se vam je {{GENDER:$1|zahvalil|zahvalila}} za $2 strani »[[:$3]]«.',
	'notification-thanks-flyout2' => '[[User:$1|$1]] se vam je {{GENDER:$1|zahvalil|zahvalila}} za urejanje strani »$2«.',
	'notification-thanks-email-subject' => '$1 se vam je {{GENDER:$1|zahvalil|zahvalila}} za urejanje {{GRAMMAR:rodilnik|{{SITENAME}}}}',
	'notification-thanks-email-batch-body' => '$1 se vam je {{GENDER:$1|zahvalil|zahvalila}} za urejanje strani »$2«.',
	'notification-link-text-respond-to-user' => 'Odgovor uporabniku',
	'log-name-thanks' => 'Dnevnik zahval',
	'log-description-thanks' => 'Prikazan je dnevnik uporabnikov, ki se jim je kdo zahvalil.',
	'logentry-thanks-thank' => '$1 se je {{GENDER:$2|zahvalil|zahvalila}} {{GENDER:$4|uporabniku|uporabnici}} {{GENDER:$4|$3}}',
	'log-show-hide-thanks' => '$1 dnevnik zahval',
);

/** Serbian (Cyrillic script) (српски (ћирилица)‎)
 * @author Milicevic01
 * @author Милан Јелисавчић
 */
$messages['sr-ec'] = array(
	'thanks-desc' => 'Додаје могућност захваљивања у прегледу историје и прегледу разлика између измена',
	'thanks-thank' => 'захвали се',
	'thanks-thanked' => '{{GENDER:$1|захвалио се|захвалила се}}',
	'thanks-button-thank' => '{{GENDER:$1|Захвали се}}',
	'thanks-error-undefined' => 'Захваљивање није успело. Покушајте поново.',
	'thanks-thank-tooltip' => '{{GENDER:$1|Пошаљите}} захвалницу {{GENDER:$2|овом кориснику|овој корисници}}',
	'thanks-confirmation' => 'Да ли сте сигурни да желите да се захвалите {{GENDER:$1|кориснику|корисници}} $2 за ову измену?',
	'thanks' => 'Захвали се',
	'echo-pref-tooltip-edit-thank' => 'Обавештава вас када вам се неко захвали за измену коју сте начинили.',
	'echo-category-title-edit-thank' => 'Захвалнице',
	'notification-thanks-diff-link' => 'вашој измени',
	'notification-thanks' => '[[User:$1|$1]] вам се {{GENDER:$1|захваљује}} на $2 странице [[:$3]].',
	'notification-thanks-flyout2' => '[[User:$1|$1]] вам се {{GENDER:$1|захваљује}} за вашу измену на страници $2.',
	'notification-thanks-email-subject' => '$1 вам се {{GENDER:$1|захваљује}} за вашу измену на {{SITENAME}}',
	'notification-thanks-email-batch-body' => '$1 вам се {{GENDER:$1|захваљује}} за вашу измену на страници $2.',
	'notification-link-text-respond-to-user' => 'Одговори кориснику',
	'log-name-thanks' => 'Дневник захваљивања',
	'log-description-thanks' => 'Испод се налази списак корисника којима су се други корисници захвалили.',
	'logentry-thanks-thank' => '$1 се {{GENDER:$2|захвалио|захвалила}} {{GENDER:$4|кориснику|корисници}} {{GENDER:$4|$3}}',
	'log-show-hide-thanks' => '$1 дневник захваљивања',
);

/** Serbian (Latin script) (srpski (latinica)‎)
 * @author Milicevic01
 */
$messages['sr-el'] = array(
	'thanks-desc' => 'Dodaje mogućnost zahvaljivanja u pregledu istorije i pregledu razlika između izmena',
	'thanks-thank' => 'zahvali se',
	'thanks-thanked' => '{{GENDER:$1|zahvalio se|zahvalila se}}',
	'thanks-button-thank' => '{{GENDER:$1|Zahvali se}}',
	'thanks-error-undefined' => 'Zahvaljivanje nije uspelo. Pokušajte ponovo.',
	'thanks-thank-tooltip' => '{{GENDER:$1|Pošaljite}} zahvalnicu {{GENDER:$2|ovom korisniku|ovoj korisnici}}',
	'thanks-confirmation' => 'Da li ste sigurni da želite da se zahvalite {{GENDER:$1|korisniku|korisnici}} $2 za ovu izmenu?',
	'thanks' => 'Zahvali se',
	'echo-pref-tooltip-edit-thank' => 'Obaveštava vas kada vam se neko zahvali za izmenu koju ste načinili.',
	'echo-category-title-edit-thank' => 'Zahvalnice',
	'notification-thanks-diff-link' => 'vašoj izmeni',
	'notification-thanks' => '[[User:$1|$1]] vam se {{GENDER:$1|zahvaljuje}} na $2 stranice [[:$3]].',
	'notification-thanks-flyout2' => '[[User:$1|$1]] vam se {{GENDER:$1|zahvaljuje}} za vašu izmenu na stranici $2.',
	'notification-thanks-email-subject' => '$1 vam se {{GENDER:$1|zahvaljuje}} za vašu izmenu na {{SITENAME}}',
	'notification-thanks-email-batch-body' => '$1 vam se {{GENDER:$1|zahvaljuje}} za vašu izmenu na stranici $2.',
	'notification-link-text-respond-to-user' => 'Odgovori korisniku',
	'log-name-thanks' => 'Dnevnik zahvaljivanja',
	'log-description-thanks' => 'Ispod se nalazi spisak korisnika kojima su se drugi korisnici zahvalili.',
	'logentry-thanks-thank' => '$1 se {{GENDER:$2|zahvalio|zahvalila}} {{GENDER:$4|korisniku|korisnici}} {{GENDER:$4|$3}}',
	'log-show-hide-thanks' => '$1 dnevnik zahvaljivanja',
);

/** Swedish (svenska)
 * @author Ainali
 * @author Jopparn
 * @author Skalman
 * @author WikiPhoenix
 */
$messages['sv'] = array(
	'thanks-desc' => 'Lägger till tacklänkar till historik och skillnadsjämförelser',
	'thanks-thank' => 'tacka',
	'thanks-thanked' => '{{GENDER:$1|tackade}}',
	'thanks-button-thank' => '{{GENDER:$1|Tacka}}',
	'thanks-button-thanked' => '{{GENDER:$1|Tackat}}',
	'thanks-error-undefined' => 'Tackåtgärden misslyckades. Var god försök igen.',
	'thanks-error-invalidrevision' => 'Versions-ID är inte giltigt.',
	'thanks-error-ratelimited' => '{{GENDER:$1|Du}} har överskridit din frekvensgräns. Var god vänta en stund och försök igen.',
	'thanks-thank-tooltip' => '{{GENDER:$1|Skicka}} ett tackmeddelande till denna {{GENDER:$2|användare}}',
	'thanks-confirmation' => 'Vill du {{GENDER:$1|tacka}} $2 för denna redigering?',
	'thanks-thanked-notice' => '$1 meddelades att du gillade {{GENDER:$2|hans|hennes|dennes}} redigering.',
	'thanks' => 'Skicka tack',
	'thanks-form-revid' => 'Versions-ID för redigering',
	'thanks-already-thanked' => '{{GENDER:$1|Du}} har redan tackat för denna redigering.',
	'echo-pref-subscription-edit-thank' => 'Tackar mig för min redigering',
	'echo-pref-tooltip-edit-thank' => 'Meddela mig när någon tackar mig för en redigering jag har gjort.',
	'echo-category-title-edit-thank' => 'Tack',
	'notification-thanks-diff-link' => 'din redigering',
	'notification-thanks' => '[[User:$1|$1]] {{GENDER:$1|tackade}} dig för $2 på [[:$3]].',
	'notification-thanks-flyout2' => '[[User:$1|$1]] {{GENDER:$1|tackade}} dig för din redigering på $2.',
	'notification-thanks-email-subject' => '$1 {{GENDER:$1|tackade}} dig för din redigering på {{SITENAME}}',
	'notification-thanks-email-batch-body' => '$1 {{GENDER:$1|tackade}} dig för din redigering på $2.',
	'notification-link-text-respond-to-user' => 'Svara användare',
	'log-name-thanks' => 'Tacklogg',
	'log-description-thanks' => 'Nedan är en lista med användare som fått tack från andra användare.',
	'logentry-thanks-thank' => '$1 {{GENDER:$2|tackade}} {{GENDER:$4|$3}}',
	'log-show-hide-thanks' => '$1 tacklogg',
);

/** Tamil (தமிழ்)
 * @author Jayarathina
 */
$messages['ta'] = array(
	'thanks-desc' => 'திருத்த வரலாறு மற்றும் திருத்தங்களுக்கிடையேயான வேறுபாட்டு பக்கங்களில் நன்றி இணைப்பிடுக',
	'thanks-button-thank' => 'நன்றி!', # Fuzzy
	'thanks-error-undefined' => 'நன்றி தெரிவிப்பது தோல்வியடைந்தது. மீண்டும் முயற்சிக்கவும்.',
	'thanks-error-invalidrevision' => 'திருத்த எண் தவறானது.',
	'echo-pref-subscription-edit-thank' => 'என் தொகுப்புக்கு எனக்கு நன்றி கூறுகிறார்',
	'echo-pref-tooltip-edit-thank' => 'நான் செய்த ஒரு தொகுப்புக்கு எனக்கு யாரேனும் நன்றி சொன்னால் எனக்கு தெரிவி.',
	'echo-category-title-edit-thank' => 'நன்றி!',
	'notification-thanks-diff-link' => 'உங்கள் தொகுப்பு',
	'notification-thanks' => 'நீங்கள் $2 [[:$3]]இல் செய்த தொகுப்புக்கு [[User:$1|$1]] நன்றி தெரிவித்தார்.',
	'notification-thanks-flyout2' => 'நீங்கள் $2இல் செய்த தொகுப்புக்கு [[User:$1|$1]] நன்றி தெரிவித்தார்.',
	'notification-thanks-email-subject' => 'நீங்கள் {{SITENAME}}இல் செய்த தொகுப்புக்கு $1 நன்றி தெரிவித்தார்.',
	'notification-thanks-email-batch-body' => 'நீங்கள் $2இல் செய்த தொகுப்புக்கு $1 நன்றி தெரிவித்தார்.',
	'notification-link-text-respond-to-user' => 'பயனருக்கு பதிலளிக்க',
	'log-name-thanks' => 'நன்றிகள் பதிவு',
	'log-description-thanks' => 'பிற பயனர்களால் நன்றி தெரிவிக்கப்பட்ட பயனர்களின் பட்டியல் கீழே உள்ளது.',
	'logentry-thanks-thank' => '$1, $4க்கு நன்றி தெரிவித்தார்.', # Fuzzy
	'log-show-hide-thanks' => '$1 நன்றிகள் பதிவு',
);

/** Telugu (తెలుగు)
 * @author Arjunaraoc
 * @author Veeven
 * @author Visdaviva
 * @author రహ్మానుద్దీన్
 */
$messages['te'] = array(
	'thanks-desc' => 'చరిత్ర మరియు తేడా వీక్షణాలకు ధన్యవాద లంకెలను జత చేస్తుంది',
	'thanks-thank' => 'కృతజ్ఞత తెలుపు',
	'thanks-thanked' => '{{GENDER:$1|అభినందించారు}}',
	'thanks-error-undefined' => 'కృతజ్ఞతల చర్య విఫలమైంది. దయచేసి మళ్ళీ ప్రయత్నించండి.',
	'thanks-error-invalidrevision' => 'కూర్పుల ID చెల్లదు',
	'thanks-error-ratelimited' => 'మీరు మీ రేట్ హద్దును దాటారు. దయచేసి కాసేపాగి తిరిగి ప్రయత్నించండి.', # Fuzzy
	'thanks-thank-tooltip' => '{{GENDER:$2|వాడుకరి}}కి ఒక ధన్యవాద సూచన {{GENDER:$1|పంపండి}}',
	'thanks-confirmation' => '$2 కి ఈ మార్పుకై {{GENDER:$1|కృతజ్ఞతలు}} తెలపాలనుకుంటున్నారా?', # Fuzzy
	'echo-pref-subscription-edit-thank' => 'నా మార్పుకు ధన్యవాదాలు',
	'echo-pref-tooltip-edit-thank' => 'నేను చేసిన మార్పుకు ఎవరైనా ధన్యవాదాలు చెపితే నాకు తెలియజేయి',
	'echo-category-title-edit-thank' => 'ధన్యవాదాలు',
	'notification-thanks-diff-link' => 'మీ మార్పు',
	'notification-thanks' => '[[వాడుకరి:$1|$1]] ఇక్కడ [[:$3]] మీరు $2 కు {{GENDER:$1|ధన్యవాదాలు పంపారు}}.', # Fuzzy
	'notification-thanks-flyout2' => '$2 పై మీరు చేసిన మార్పు కై మీకు [[User:$1|$1]]  {{GENDER:$1|ధన్యవాదాలు పంపారు}}.',
	'notification-thanks-email-subject' => '{{SITENAME}} పై మీరు చేసిన మార్పుకు  $1  {{GENDER:$1|ధన్యవాదాలు పంపారు}}',
	'notification-thanks-email-batch-body' => '$2 పై మీ మార్పుకు $1 మీకు {{GENDER:$1|ధన్యవాదాలు పంపారు}}.',
	'notification-link-text-respond-to-user' => 'వాడుకరికి ప్రతిస్పందించండి',
	'log-name-thanks' => 'ధన్యవాదాల చిట్టా',
	'log-description-thanks' => 'క్రింది వాడుకరులు ఇతర వాడుకరుల నుండి ధన్యవాదాలు పొందారు.',
	'logentry-thanks-thank' => '$1  {{GENDER:$4|$3}} కు {{GENDER:$2|ధన్యవాదాలు పంపారు}}',
	'log-show-hide-thanks' => '$1 ధన్యవాదాల చిట్టా',
);

/** Tagalog (Tagalog)
 * @author AnakngAraw
 * @author Sky Harbor
 */
$messages['tl'] = array(
	'thanks-desc' => 'Nagdaragdag ng mga kawing ng pasasalamat sa pagtanaw ng kasaysayan at pagkakaiba',
	'thanks-thank' => 'pasalamatan',
	'thanks-thanked' => '{{GENDER:$1|pinasalamatan na}}',
	'thanks-button-thank' => 'Pasalamatan', # Fuzzy
	'thanks-button-thanked' => '{{GENDER:$1|Pinasalamatan na}}',
	'thanks-error-undefined' => 'Nabigo ang kilos ng pagpapasalamat.  Mangyaring subukan muli.',
	'thanks-error-invalidrevision' => 'Walang saysay ang ID ng rebisyon.',
	'thanks-error-ratelimited' => 'Nilampasan mo ang iyong hangganan ng antas. Mangyaring maghintay ng ilang sandali at subukan muli.', # Fuzzy
	'thanks-thank-tooltip' => '{{GENDER:$1|Magpadala}} ng isang pabatid ng pasasalamat sa {{GENDER:$2|tagagamit}} na ito',
	'thanks-confirmation' => 'Nais mo bang {{GENDER:$1|pasalamatan}} si $2 para sa pagbabagong ito?', # Fuzzy
	'thanks-thanked-notice' => 'Sinabihan si $1 na ginusto mo ang {{GENDER:$2|kaniyang|kanilang}} pagbabago.', # Fuzzy
	'echo-pref-subscription-edit-thank' => 'Pinasalamatan ako para sa aking pagbabago',
	'echo-pref-tooltip-edit-thank' => 'Ipabatid sa akin kapag may nagpasalamat sa akin para sa isang pagbabagong naigawa ko.',
	'echo-category-title-edit-thank' => 'Pasasalamat',
	'notification-thanks-diff-link' => 'ang pagbabago mo',
	'notification-thanks' => '{{GENDER:$1|Pinasalamatan}} ka ni [[User:$1|$1]] para sa $2 sa [[:$3]].',
	'notification-thanks-flyout2' => '{{GENDER:$1|Pinasalamatan}} ka ni [[User:$1|$1]] para sa pagbabago mo sa $2.',
	'notification-thanks-email-subject' => '{{GENDER:$1|Pinasalamatan}} ka ni $1 para sa pagbabago mo sa {{SITENAME}}',
	'notification-thanks-email-batch-body' => '{{GENDER:$1|Pinasalamatan}} ka ni $1 para sa pagbabago mo sa $2.',
	'notification-link-text-respond-to-user' => 'Tumugon sa tagagamit',
	'log-name-thanks' => 'Tala ng pasasalamat',
	'log-description-thanks' => 'Nasa ibaba ang isang tala ng mga tagagamit na pinasalamatan ng ibang tagagamit.',
	'logentry-thanks-thank' => '{{GENDER:$2|Pinasalamatan}} ni $1 si {{GENDER:$4|$3}}',
	'log-show-hide-thanks' => '$1 ang tala ng pasasalamat',
);

/** Turkish (Türkçe)
 * @author Incelemeelemani
 * @author Rapsar
 */
$messages['tr'] = array(
	'thanks-desc' => 'Tarih ve fark görünümüne teşekkür bağlantısı ekler',
	'thanks-thank' => 'teşekkür et',
	'thanks-thanked' => '{{GENDER:$1|teşekkür edildi}}',
	'thanks-button-thank' => '{{GENDER:$1|Teşekkür et}}',
	'thanks-button-thanked' => '{{GENDER:$1|Teşekkür}}',
	'thanks-error-undefined' => 'Teşekkür iletilemedi. Lütfen tekrar deneyin.',
	'thanks-error-invalidrevision' => 'Revizyon numarası geçerli değil.',
	'thanks-error-ratelimited' => 'Gönderme limitini aştınız. Lütfen bekleyin ve tekrar deneyin.', # Fuzzy
	'thanks-thank-tooltip' => 'Bu {{GENDER:$2|kullanıcıya}} {{GENDER:$1|teşekkürlerini}} ilet',
	'thanks-confirmation' => 'Bu değişikliğinden ötürü $2 adlı kullanıcıya {{GENDER:$1|teşekkür}} etmek istiyor musunuz?',
	'thanks-thanked-notice' => '$1 kullanıcısına {{GENDER:$2|onu|onu|onları}} beğendiğiniz iletildi.',
	'echo-pref-subscription-edit-thank' => 'Katkım için bana teşekkür edildi',
	'echo-pref-tooltip-edit-thank' => 'Yaptığım katkılar için yapılan teşekkürleri bana bildir.',
	'echo-category-title-edit-thank' => 'Teşekkürler',
	'notification-thanks-diff-link' => 'düzenlemeniz',
	'notification-thanks' => '[[User:$1|$1]], [[:$3]] sayfasındaki $2 değişikliğiniz için size {{GENDER:$1|teşekkür}} etti.',
	'notification-thanks-flyout2' => '[[User:$1|$1]], $2 sayfasındaki değişikliğiniz için size {{GENDER:$1|teşekkür}} etti.',
	'notification-thanks-email-subject' => '$1 {{SITENAME}} değişikliği için {{GENDER:$1|teşekkür}} ediyor',
	'notification-thanks-email-batch-body' => '$1, $2 sayfasındaki değişikliğiniz için size {{GENDER:$1|teşekkür etti}}.',
	'notification-link-text-respond-to-user' => 'Kullanıcıyı yanıtla',
	'log-name-thanks' => 'Teşekkürler kayıtları',
	'log-description-thanks' => 'Diğer teşekkür eden kullanıcılar aşağıda listelenmektedir.',
	'logentry-thanks-thank' => '$1 {{GENDER:$2|teşekkür}} {{GENDER:$4|$3}}',
	'log-show-hide-thanks' => '$1 teşekkür kayıtları',
);

/** Ukrainian (українська)
 * @author Aced
 * @author Andriykopanytsia
 * @author Base
 * @author Ата
 */
$messages['uk'] = array(
	'thanks-desc' => 'Додає посилання вдячності до переглядів історії та різниці версій',
	'thanks-thank' => 'дякую',
	'thanks-thanked' => '{{GENDER:$1|подякував|подякувала}}',
	'thanks-button-thank' => '{{GENDER:$1|Подякувати}}',
	'thanks-button-thanked' => '{{GENDER:$1|Подякував|Подякувала}}',
	'thanks-error-undefined' => 'Не вдалось подякувати. Спробуйте знову.',
	'thanks-error-invalidrevision' => 'Неправильний ідентифікатор версії.',
	'thanks-error-ratelimited' => '{{GENDER:$1|Ви}} перевищили свій ліміт частоти. Будь ласка, зачекайте деякий час, і спробуйте знову.',
	'thanks-thank-tooltip' => '{{GENDER:$1|Надіслати}} сповіщення вдячності {{GENDER:$2|цьому користувачу|цій користувачці}}',
	'thanks-confirmation' => 'Ви хочете {{GENDER:$1|подякувати}} $2 за цю зміну?',
	'thanks-thanked-notice' => '$1 {{GENDER:$1|був повідомлений|була повідомлена|були повідомлені}}, що вам сподобалися {{GENDER:$2|його|її|їхні}} зміни.',
	'thanks' => 'Надіслати подяку',
	'thanks-form-revid' => 'ІД редакції для редагування',
	'thanks-already-thanked' => '{{GENDER:$1|Ви}} вже надіслали подяки за це редагування.',
	'echo-pref-subscription-edit-thank' => 'Дякує мені за мої редагування',
	'echo-pref-tooltip-edit-thank' => 'Повідомляти, коли хтось дякує мені за редагування, зроблені мною.',
	'echo-category-title-edit-thank' => 'вдячність',
	'notification-thanks-diff-link' => 'Ваше редагування',
	'notification-thanks' => '[[User:$1|$1]] {{GENDER:$1|подякував|подякувала}} Вам за $2 на [[:$3]].',
	'notification-thanks-flyout2' => '[[User:$1|$1]]  {{GENDER:$1|подякував|подякувала}} Вам за Ваше редагування на $2.',
	'notification-thanks-email-subject' => '$1 {{GENDER:$1|подякував|подякувала}} Вам за Ваше редагування на {{SITENAME}}',
	'notification-thanks-email-batch-body' => '$1 {{GENDER:$1|подякував|подякувала}} Вам за Ваше редагування на $2.',
	'notification-link-text-respond-to-user' => 'Відгукнутися на користувача',
	'log-name-thanks' => 'Журнал вдячностей',
	'log-description-thanks' => 'Нижче наведено перелік користувачів, які подякували іншими користувачами.',
	'logentry-thanks-thank' => '$1 {{GENDER:$2|подякував|подякувала}} {{GENDER:$4|користувачу|користувачці}} $3',
	'log-show-hide-thanks' => 'журнал подяк $1',
);

/** Urdu (اردو)
 * @author Noor2020
 */
$messages['ur'] = array(
	'thanks-thanked' => '{{GENDER:$1|کا شکریہ ادا کیا}}',
);

/** Uzbek (oʻzbekcha)
 * @author Abdulla
 * @author Nataev
 * @author Sociologist
 */
$messages['uz'] = array(
	'thanks-thank' => 'rahmat',
	'thanks-thanked' => '{{GENDER:$1|rahmat aytildi}}',
	'thanks-button-thank' => '{{GENDER:$1|Rahmat}}',
	'thanks-button-thanked' => '{{GENDER:$1|Rahmat aytildi}}',
	'thanks-error-undefined' => 'Rahmat yetkazilmadi. Iltimos takrorlang.',
	'thanks-error-invalidrevision' => 'Versiya raqami notoʻgʻri.',
	'thanks-error-ratelimited' => '{{GENDER:$1|Siz}} bu amallarni haddan oshiq tez bajaryapsiz. Iltimos bir oz kuting va takrorlang.',
	'thanks-thank-tooltip' => 'Bu {{GENDER:$2|foydalanuvchiga}} rahmat {{GENDER:$1|ayt}}',
	'thanks-confirmation' => 'Bu tahrir uchun $2ga {{GENDER:$1|rahmat}} aytmoqchimisiz?',
	'thanks-thanked-notice' => '$1ga {{GENDER:$2|uning|uning|ularning}} tahririni yoqtirganingiz haqida bildirildi.',
	'echo-pref-subscription-edit-thank' => 'Tahririm uchun menga rahmat aytildi',
	'echo-pref-tooltip-edit-thank' => 'Tahririm uchun rahmat aytilsa menga bildir.',
	'echo-category-title-edit-thank' => 'Rahmat',
	'notification-thanks-diff-link' => 'tahriringiz',
	'notification-thanks' => '[[User:$1|$1]] [[:$3]] sahifasidagi $2 tahriringiz uchun sizga {{GENDER:$1|rahmat aytdi}}.',
	'notification-thanks-flyout2' => '[[User:$1|$1]] $2 sahifasidagi tahriringiz uchun sizga {{GENDER:$1|rahmat}} aytdi.',
	'notification-thanks-email-subject' => '$1 {{SITENAME}} tahriri uchun sizga {{GENDER:$1|rahmat}} aytdi',
	'notification-thanks-email-batch-body' => '$1 $2 sahifasidagi tahriringiz uchun sizga {{GENDER:$1|rahmat aytdi}}.',
	'notification-link-text-respond-to-user' => 'Foydalanuvchiga javob qil',
	'log-name-thanks' => 'Rahmatlar qaydi',
	'log-description-thanks' => 'Quyida rahmat aytilgan foydalanuvchilar roʻyxati keltirilgan.',
	'logentry-thanks-thank' => '$1 {{GENDER:$4|$3}}ga {{GENDER:$2|rahmat aytdi}}',
	'log-show-hide-thanks' => 'Rahmatlar qaydini $1',
);

/** vèneto (vèneto)
 * @author Candalua
 */
$messages['vec'] = array(
	'thanks-thank' => 'ringrassia',
	'thanks-thanked' => '{{GENDER:$1|ringrassià}}',
	'thanks-button-thank' => 'Ringrassia', # Fuzzy
	'thanks-button-thanked' => '{{GENDER:$1|Ringrassià}}',
	'thanks-error-undefined' => 'Eror durante el ringrassiamento. Próa da novo.',
	'thanks-error-invalidrevision' => "L'ID de la version no'l xe mia valido.",
	'thanks-error-ratelimited' => 'Te ghè superà el limite massimo de ringrassiamenti. Speta un fià e ripróa.', # Fuzzy
	'thanks-thank-tooltip' => '{{GENDER:$1|Màndeghe}} na notifica de ringrassiamento a {{GENDER:$2|sto|sta}} utente qua',
	'thanks-confirmation' => 'Sito sicuro che te vol {{GENDER:$1|ringrassiar}} $2 par sta modifica?', # Fuzzy
	'thanks-thanked-notice' => 'Te ghè dito a $1 che te piase {{GENDER:$2|la so}} modifica.', # Fuzzy
	'echo-pref-subscription-edit-thank' => 'I me ringrassia par na me modifica',
	'echo-pref-tooltip-edit-thank' => 'Avìseme co che qualcheduni me ringrassia par na modifica che gò fato.',
	'echo-category-title-edit-thank' => 'Ringrassiamenti',
	'notification-thanks-diff-link' => 'la to modifica',
	'notification-thanks' => '[[User:$1|$1]] {{GENDER:$1|el|la}} te gà ringrassià par $2 su [[:$3]].',
	'notification-thanks-flyout2' => '[[User:$1|$1]] {{GENDER:$1|el|la}} te gà ringrassià par la to modifica su $2.',
	'notification-thanks-email-subject' => '$1 {{GENDER:$1|el|la}} te gà ringrassià par la to modifica su {{SITENAME}}.',
	'notification-thanks-email-batch-body' => '$1 {{GENDER:$1|el|la}} te gà ringrassià par la to modifica su $2.',
	'notification-link-text-respond-to-user' => "Rispóndighe a l'utente",
	'log-name-thanks' => 'Registro dei ringrassiamenti',
	'log-description-thanks' => 'Sta qua xe na lista dei utenti ringrassià da altri utenti.',
	'logentry-thanks-thank' => '$1 {{GENDER:$2|el|la}} gà ringrassià {{GENDER:$4|$3}}',
	'log-show-hide-thanks' => '$1 registro dei ringrassiamenti',
);

/** Vietnamese (Tiếng Việt)
 * @author Minh Nguyen
 * @author Prenn
 */
$messages['vi'] = array(
	'thanks-desc' => 'Thêm liên kết cảm ơn vào các trang lịch sử và khác biệt',
	'thanks-thank' => 'cảm ơn',
	'thanks-thanked' => '{{GENDER:$1}}đã cảm ơn',
	'thanks-button-thank' => '{{GENDER:$1}}Cảm ơn',
	'thanks-button-thanked' => '{{GENDER:$1}}Đã cảm ơn',
	'thanks-error-undefined' => 'Cảm ơn thất bại. Xin vui lòng thử lại.',
	'thanks-error-invalidrevision' => 'Số phiên bản không hợp lệ.',
	'thanks-error-ratelimited' => '{{GENDER:$1}}Bạn đã vượt quá giới hạn tốc độ. Xin vui lòng thử lại lát nữa.',
	'thanks-thank-tooltip' => '{{GENDER:$1}}Gửi thông báo cảm ơn cho {{GENDER:$2}}người dùng này',
	'thanks-confirmation' => 'Bạn có muốn {{GENDER:$1}}cảm ơn $2 vì sửa đổi này?',
	'thanks-thanked-notice' => 'Đã cho $1 biết rằng bạn thích sửa đổi của {{GENDER:$2}}họ.',
	'thanks' => 'Gửi lời cảm ơn',
	'thanks-form-revid' => 'ID phiên bản sửa đổi',
	'thanks-already-thanked' => '{{GENDER:$1}}Bạn đã gửi lời cảm ơn về sửa đổi này rồi.',
	'echo-pref-subscription-edit-thank' => 'Cảm ơn tôi vì một sửa đổi của tôi',
	'echo-pref-tooltip-edit-thank' => 'Báo cho tôi biết khi nào người ta cảm ơn tôi vì một sửa đổi của tôi.',
	'echo-category-title-edit-thank' => 'Cảm ơn',
	'notification-thanks-diff-link' => 'sửa đổi của bạn',
	'notification-thanks' => '[[User:$1|$1]] {{GENDER:$1}}cảm ơn bạn vì $2 tại [[:$3]].',
	'notification-thanks-flyout2' => '[[User:$1|$1]] {{GENDER:$1}}cảm ơn bạn vì sửa đổi của bạn tại $2.',
	'notification-thanks-email-subject' => '$1 {{GENDER:$1}}cảm ơn bạn vì sửa đổi của bạn tại {{SITENAME}}',
	'notification-thanks-email-batch-body' => '$1 {{GENDER:$1}}cảm ơn bạn vì sửa đổi của bạn tại $2.',
	'notification-link-text-respond-to-user' => 'Trả lời cho người dùng',
	'log-name-thanks' => 'Nhật trình cảm ơn',
	'log-description-thanks' => 'Dưới đây có danh sách những người dùng được người khác cảm ơn.',
	'logentry-thanks-thank' => '$1 {{GENDER:$2}}đã cảm ơn {{GENDER:$4}}$3',
	'log-show-hide-thanks' => '$1 nhật trình cảm ơn',
);

/** Volapük (Volapük)
 * @author Malafaya
 */
$messages['vo'] = array(
	'thanks-thank' => 'danön',
	'thanks-thanked' => '{{GENDER:$1|pedanon}}',
	'thanks-button-thank' => '{{GENDER:$1|Danön}}',
	'thanks-button-thanked' => '{{GENDER:$1|Pedanon}}',
	'thanks-thank-tooltip' => '{{GENDER:$1|Sedön}} nunädi dana {{GENDER:$2|gebane}} at',
	'echo-pref-subscription-edit-thank' => 'Danon obi pro redakam oba',
	'echo-category-title-edit-thank' => 'Dans',
	'notification-thanks-diff-link' => 'redakam olik',
	'notification-thanks' => '[[User:$1|$1]] {{GENDER:$1|edanon}} oli pro $2 su [[:$3]].',
	'notification-thanks-flyout2' => '[[User:$1|$1]] {{GENDER:$1|edanon}} oli pro redakam olik su $2.',
	'notification-thanks-email-subject' => '$1 {{GENDER:$1|edanon}} oli pro redakam olik su {{SITENAME}}',
	'notification-thanks-email-batch-body' => '$1 {{GENDER:$1|edanon}} oli pro redakam olik su $2.',
	'notification-link-text-respond-to-user' => 'Gespikön gebane',
	'log-name-thanks' => 'Jenotalised danas',
	'log-description-thanks' => 'Dono binon lised gebanas fa gebans votik pedanöls.',
	'logentry-thanks-thank' => '$1 {{GENDER:$2|edanon}} {{GENDER:$4|$3}}',
	'log-show-hide-thanks' => '$1 jenotalisedi danas',
);

/** Yiddish (ייִדיש)
 * @author פוילישער
 */
$messages['yi'] = array(
	'thanks-thank' => 'דאַנק',
	'thanks-thanked' => '{{GENDER:$1|געדאַנקט}}',
	'thanks-button-thank' => '{{GENDER:$1|דאַנקען}}',
	'thanks-button-thanked' => '{{GENDER:$1|געדאַנקט}}',
	'thanks-error-undefined' => 'דאנק אקציע אדורכגעפאלן. זייט אזוי גוט פרובירט נאכאמאל.',
	'thanks-error-invalidrevision' => 'רעוויסיע אידענטיפיצורונג נישט גילטיק.',
	'thanks-confirmation' => 'צי ווילט איר {{GENDER:$1|דאַנקען}} $2 פאר דער רעדאקטירונג?',
	'echo-pref-subscription-edit-thank' => 'דאנקט מיך פאר מיין רעדאקטירונג',
	'echo-pref-tooltip-edit-thank' => 'זיי מיך מודיע ווען איינער דאנקט מיך פאר א רעדאקטירונג מיינע.',
	'echo-category-title-edit-thank' => 'אַ דאַנק',
	'notification-thanks-diff-link' => 'אײַער רעדאקטירונג',
	'notification-thanks' => '[[User:$1|$1]] {{GENDER:$1|האט געדאנקט}} דיך פֿאר $2 אויף [[:$3]].',
	'logentry-thanks-thank' => '$1 {{GENDER:$2|האט געדאנקט}} {{GENDER:$4|$3}}',
);

/** Cantonese (粵語)
 * @author William915
 */
$messages['yue'] = array(
	'thanks-thank' => '多謝',
	'thanks-thanked' => '{{GENDER:$1|多謝咗}}',
	'thanks-button-thank' => '多謝', # Fuzzy
	'thanks-button-thanked' => '{{GENDER:$1|多謝咗}}',
	'thanks-error-undefined' => '多謝失敗，麻煩再試多次。',
	'thanks-error-invalidrevision' => '錯嘅版本號',
	'echo-category-title-edit-thank' => '人哋嘅多謝',
);

/** Simplified Chinese (中文（简体）‎)
 * @author Chiefwei
 * @author Fantasticfears
 * @author Hzy980512
 * @author Liuxinyu970226
 * @author Qiyue2001
 * @author Xiaomingyan
 * @author Yfdyh000
 * @author Zhuyifei1999
 */
$messages['zh-hans'] = array(
	'thanks-desc' => '添加感谢链接至历史和差异视图',
	'thanks-thank' => '感谢',
	'thanks-thanked' => '{{GENDER:$1|已感谢}}',
	'thanks-button-thank' => '{{GENDER:$1|感谢}}',
	'thanks-button-thanked' => '{{GENDER:$1|已感谢}}',
	'thanks-error-undefined' => '感谢操作失败，请重试。',
	'thanks-error-invalidrevision' => '版本ID无效。',
	'thanks-error-ratelimited' => '{{GENDER:$1|您}}的编辑可能已经超频。请等待一段时间后重试。',
	'thanks-thank-tooltip' => '{{GENDER:$1|发送}}感谢通知给该{{GENDER:$2|用户}}',
	'thanks-confirmation' => '您确定要{{GENDER:$1|感谢}}$2的这个编辑吗？',
	'thanks-thanked-notice' => '$1已被告知你感谢{{GENDER:$2|他|她|他/她}}的编辑。',
	'thanks' => '发送感谢',
	'thanks-form-revid' => '用于编辑的修订ID',
	'thanks-already-thanked' => '{{GENDER:$1|您}}已经对此编辑发送感谢。',
	'echo-pref-subscription-edit-thank' => '对我的编辑的感谢',
	'echo-pref-tooltip-edit-thank' => '当有人感谢我的编辑时通知我。',
	'echo-category-title-edit-thank' => '感谢',
	'notification-thanks-diff-link' => '编辑',
	'notification-thanks' => '[[User:$1|$1]]{{GENDER:$1|感谢}}你对[[:$3]]的$2。',
	'notification-thanks-flyout2' => '[[User:$1|$1]]{{GENDER:$1|感谢}}你对$2的编辑。',
	'notification-thanks-email-subject' => '$1{{GENDER:$1|感谢}}你在{{SITENAME}}的编辑',
	'notification-thanks-email-batch-body' => '$1{{GENDER:$1|感谢}}你对$2的编辑。',
	'notification-link-text-respond-to-user' => '回应用户',
	'log-name-thanks' => '感谢日志',
	'log-description-thanks' => '下面是得到其他用户感谢的用户的列表。',
	'logentry-thanks-thank' => '$1{{GENDER:$2|感谢}}{{GENDER:$4|$3}}',
	'log-show-hide-thanks' => '$1感谢日志',
);

/** Traditional Chinese (中文（繁體）‎)
 * @author Ch.Andrew
 * @author Fantasticfears
 * @author Liuxinyu970226
 * @author Simon Shek
 * @author Waihorace
 */
$messages['zh-hant'] = array(
	'thanks-desc' => '在歷史記錄與檢視差異頁面當中加入感謝連結',
	'thanks-thank' => '感謝',
	'thanks-thanked' => '{{GENDER:$1|已感謝}}',
	'thanks-button-thank' => '{{GENDER:$1|感謝}}',
	'thanks-button-thanked' => '{{GENDER:$1|已感謝}}',
	'thanks-error-undefined' => '感謝的操作失敗。請再試一次。',
	'thanks-error-invalidrevision' => '修訂 ID 無效。',
	'thanks-error-ratelimited' => '{{GENDER:$1|您}}的編輯已超出限額。請過段時間再試。',
	'thanks-thank-tooltip' => '{{GENDER:$1|發送}}一則感謝的通知給此位{{GENDER:$2|使用者}}',
	'thanks-confirmation' => '您確定要對$2的此次編輯表示{{GENDER:$1|感謝}}嗎？',
	'thanks-thanked-notice' => '$1得知了您喜歡{{GENDER:$2|他的|她的|他們的}}編輯。',
	'thanks' => '發送感謝',
	'thanks-form-revid' => '用於編輯的修訂ID',
	'thanks-already-thanked' => '{{GENDER:$1|您}}已發送感謝於此編輯。',
	'echo-pref-subscription-edit-thank' => '對於我的編輯所表示的感謝',
	'echo-pref-tooltip-edit-thank' => '有人感謝我所做的編輯時，請通知我。',
	'echo-category-title-edit-thank' => '感謝',
	'notification-thanks-diff-link' => '編輯',
	'notification-thanks' => '[[User:$1|$1]]對於您在[[:$3]]頁面的$2編輯表示{{GENDER:$1|感謝}}。',
	'notification-thanks-flyout2' => '[[User:$1|$1]]對於您在$2頁面的編輯表示{{GENDER:$1|感謝}}。',
	'notification-thanks-email-subject' => '$1對於您在{{SITENAME}}的編輯表示{{GENDER:$1|感謝}}',
	'notification-thanks-email-batch-body' => '$1對於您在$2頁面的編輯表示{{GENDER:$1|感謝}}。',
	'notification-link-text-respond-to-user' => '回應使用者',
	'log-name-thanks' => '感謝日誌',
	'log-description-thanks' => '以下是得到其他人表示感謝的使用者列表。',
	'logentry-thanks-thank' => '$1向{{GENDER:$4|$3}}表示{{GENDER:$2|感謝}}',
	'log-show-hide-thanks' => '$1感謝日誌',
);
