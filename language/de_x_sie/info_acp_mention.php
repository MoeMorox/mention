<?php
/**
 *
 * phpBB mentions. An extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2026, Joe and Moe, https://github.com/MoeMorox/mention
 * @copyright (c) 2016, paul999, https://www.phpbbextensions.io
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(
	'ACP_MENTION'					=> 'Simple mentions',
	'ACP_MENTION_SETTINGS'			=> 'Einstellungen',
	'ACP_MENTION_SETTINGS_EXPLAIN'	=> 'Hier können Sie die Einstellungen für die Erweiterung von Simple mentions ändern.',
	'LOG_MENTION_SETTINGS'			=> '<strong>Simple mentions Einstellungen geändert</strong>',
));
