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
	'MENTION_LENGTH'                => 'Minimale Textlänge',
	'MENTION_LENGTH_EXPLAIN'        => 'Die minimale Textlänge zum Anzeigen der Auswahlliste. Bei größeren Boards können Sie diesen Wert erhöhen.',
	'MENTION_COLOR'                 => 'Farbe',
	'MENTION_COLOR_EXPLAIN'         => 'Diese Farbe wird innerhalb des Beitrags für den Benutzer verwendet, der erwähnt wird. Es können nur Hex-Werte verwendet werden.',
	'MENTION_COLOR_INVALID'         => 'Die gewählte Farbe (%s) ist ungültig. Bitte wähle eine gültige HEX-Farbe, ohne #.',
	'MENTION_STYLE'					=> 'Schriftstil',
	'MENTION_STYLE_EXPLAIN'			=> 'Der Schriftstil, der innerhalb des Beitrags für Erwähnungen verwendet wird.',
	'MENTION_STYLE_INVALID'			=> 'Der gewählte Schriftstil (%s) ist ungültig.',
	'MENTION_STYLE_NONE'			=> 'Keiner',
	'MENTION_STYLE_ITALIC'			=> 'Kursiv',
	'MENTION_STYLE_BOLD'			=> 'Fett',
	'MENTION_STYLE_ITALIC_BOLD'		=> 'Fett und kursiv',
	'MENTION_MAX_RESULTS'			=> 'Maximale Anzahl an Ergebnissen',
	'MENTION_MAX_RESULTS_EXPLAIN'	=> 'Die maximale Anzahl von Benutzern zum Anzeigen der Auswahlliste. Bei größeren Boards können Sie diesen Wert verringern.',
	'MENTION_LARGE_GROUPS'			=> 'Gruppengröße',
	'MENTION_LARGE_GROUPS_EXPLAIN'	=> 'Wenn die Gruppe mehr Mitglieder als die angegebene Anzahl hat, ist die Berechtigung "Kann große Gruppen erwähnen" erforderlich.',
	'MENTION_LINK'					=> 'Link zu Benutzerprofil',
	'MENTION_LINK_EXPLAIN'			=> 'Wenn aktiviert, werden erwähnte Benutzer mit ihrem Profil verlinkt. Wenn deaktiviert, werden Erwähnungen nur als Text angezeigt.'
));
