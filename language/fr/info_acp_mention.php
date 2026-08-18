<?php
/**
 *
 * Simple mentions. An extension for the phpBB Forum Software package.
 * French translation by Fred Rimbert (https://caforum.fr)
 *
 * @copyright (c) 2026, Joe and Moe, https://github.com/MoeMorox/mention
 * @copyright (c) 2016, paul999, https://www.phpbbextensions.io
 * @license GNU General Public License, version 2 (GPL-2.0-only)
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
// ’ « » “ ” … „ “

$lang = array_merge($lang, array(
	'ACP_MENTION'					=> 'Simple mentions',
	'ACP_MENTION_SETTINGS'			=> 'Paramètres',
	'ACP_MENTION_SETTINGS_EXPLAIN'	=> 'Vous pouvez configurer ici les paramètres de l’extension Simple mentions.',
	'LOG_MENTION_SETTINGS'			=> '<strong>Paramètres de Simple mentions mis à jour</strong>',
));
