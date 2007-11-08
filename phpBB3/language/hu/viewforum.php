<?php
/** 
*
* viewforum [Hungarian]
*
* @package language
* @version $Id: viewforum.php,v 1.8 2007-11-08 20:56:23 fberci Exp $
* @copyright (c) 2007 „Magyar phpBB Közösség fordítók”
* @license http://opensource.org/licenses/gpl-license.php GNU Public License 
* Original copyright: (c) 2005 phpBB Group
*
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

$lang = array_merge($lang, array(
	'ACTIVE_TOPICS'			=> 'Aktív témák', //?
	'ANNOUNCEMENTS'			=> 'Közlemények',

	'FORUM_PERMISSIONS'		=> 'Fórum jogosultságok',

	'ICON_ANNOUNCEMENT'		=> 'Közlemény',
	'ICON_STICKY'			=> 'Kiemelt',

	'LOGIN_NOTIFY_FORUM'	=> 'Értesítést kaptál erről a fórumról. Lépj be, hogy megtekinthesd.', //? "You have been notified about this forum, please login to view it."

	'MARK_TOPICS_READ'		=> 'Témák megjelölése olvasottként',

	'NEW_POSTS_HOT'			=> 'Új hozzászólások [ népszerű ]', //? zárójelek?
	'NEW_POSTS_LOCKED'		=> 'Új hozzászólások [ lezárt ]',
	'NO_NEW_POSTS_HOT'		=> 'Nincsenek új hozzászólások [ népszerű ]',
	'NO_NEW_POSTS_LOCKED'	=> 'Nincsenek új hozzászólások [ lezárt ]',
	'NO_READ_ACCESS'		=> 'Nincs meg a kellő jogosultságod a fórumbeli témák olvasásához.',

	'POST_FORUM_LOCKED'		=> 'A fórum le van zárva.',

	'TOPICS_MARKED'			=> 'A fórum témáit sikeresen megjelöltük olvasottként.', //? Itt jobb lenne a megjelölted (vagy bármi más), de ez akkor nem illeszkedne a többihez

	'VIEW_FORUM'			=> 'Fórum megtekintése',
	'VIEW_FORUM_TOPIC'		=> '1 téma',
	'VIEW_FORUM_TOPICS'		=> '%d téma',
));

?>