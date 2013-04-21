﻿<?php
/**
*
* @package Support Toolkit - Purge Sessions
* @version $Id$
* @copyright (c) 2009 phpBB Group
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
// Some characters you may want to copy&paste:
// ’ » “ ” …
//

$lang = array_merge($lang, array(
	'PURGE_SESSIONS'			=> 'Verwijder alle sessies',
	'PURGE_SESSIONS_COMPLETE'	=> 'Alle sessies zijn succesvol uitgelogd.',
	'PURGE_SESSIONS_CONFIRM'	=> 'Hiermee wordt de sessie-tabel geleegd en zullen alle gebruikers worden uitgelogd. Weet je zeker dat je alle sessies wilt verwijderen? Alle gebruikers zullen worden uitgelogd.',
));