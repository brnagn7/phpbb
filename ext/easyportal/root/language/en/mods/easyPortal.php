<?php
/**
*
* easyPortal [English]
*
* @package easyPortal
* @version 1.0.1
* @copyright (c) 2008 Noxwizard
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
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
//

$lang = array_merge($lang, array(
	'ANNOUNCEMENT'				=> 'Announcement',
	'BOARD_NAVIGATION'			=> 'Board Navigation',
	'COMMENTS'					=> 'Comments',
	'EASYPORTAL_NOT_INSTALLED'	=> 'easyPortal has not yet been installed. See the DIY section of the MODX file for installation instructions.',
	'LINKS'						=> 'Links',
	'LOGIN_TO_VOTE'				=> 'You must login to vote',
	'NO_POLL'					=> 'No poll at the moment',
	'NO_RECENT_TOPICS'			=> 'No recent topics',
	'RETURN_PORTAL'				=> '%sReturn to the portal%s',
	'POLL'						=> 'Poll',
	'POST_COMMENT'				=> 'Post Comment',
	'POSTED_BY_ON'				=> 'by %1$s on %2$s',
	'READ_FULL'					=> 'Read Full',
	'RECENT_TOPICS'				=> 'Recent Topics',
	'REGISTER_NEW_ACCOUNT'		=> 'Don’t have an account yet?<br />You can %sregister%s for FREE',
	'REMEMBER_ME'				=> 'Remember me',
	'VIEW_COMMENTS'				=> 'View Comments',
	'VIEW_COMPLETE_LIST'		=> 'View Complete List',
	'VIEWING_PORTAL'			=> 'Viewing portal',
	'VOTE'						=> 'Vote',
	'WELCOME'					=> 'Welcome'
));

?>