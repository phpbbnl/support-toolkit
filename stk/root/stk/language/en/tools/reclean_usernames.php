<?php
/**
*
* @package Support Tool Kit - Reclean Usernames
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

/**
* DO NOT CHANGE
*/
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
	'RECLEAN_USERNAMES' 			=> 'Reclean Usernames',
	'RECLEAN_USERNAMES_COMPLETE'	=> 'The usernames have been recleaned successfully.',
	'RECLEAN_USERNAMES_CONFIRM'		=> 'Are you sure you want to reclean the usernames?',
	'RECLEAN_USERNAMES_EXPLAIN'		=> 'This tool was built to go through and reset the username_clean field in the database in case it contains corrupt data.',
));

?>