<?php
/**
 *
 * Simple mentions. An extension for the phpBB Forum Software package.
 * French translation by Galixte (http://www.galixte.com) & Fred Rimbert (https://caforum.fr)
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
	'MENTION_LENGTH'                => 'Nombre minimum de caractères',
	'MENTION_LENGTH_EXPLAIN'        => 'Nombre minimum de caractères à saisir avant d’afficher la liste déroulante des mentions. Sur les forums comptant beaucoup de membres, vous pouvez augmenter cette valeur.',
	'MENTION_COLOR'                 => 'Couleur des mentions',
	'MENTION_COLOR_EXPLAIN'         => 'Cette couleur est utilisée dans les messages pour identifier l’utilisateur mentionné. Seules les valeurs hexadécimales peuvent être utilisées.',
	'MENTION_COLOR_INVALID'         => 'La couleur de mention sélectionnée (%s) est invalide. Veuillez sélectionner une couleur HEX valide, sans le caractère #.',
	'MENTION_STYLE'                 => 'Style de police des mentions',
	'MENTION_STYLE_EXPLAIN'         => 'Style de police appliqué aux mentions dans les messages.',
	'MENTION_STYLE_INVALID'         => 'Le style de police de mention sélectionné (%s) est invalide.',
	'MENTION_STYLE_NONE'            => 'Aucun',
	'MENTION_STYLE_ITALIC'          => 'Italique',
	'MENTION_STYLE_BOLD'            => 'Gras',
	'MENTION_STYLE_ITALIC_BOLD'     => 'Gras et italique',
	'MENTION_MAX_RESULTS'           => 'Nombre maximum de résultats',
	'MENTION_MAX_RESULTS_EXPLAIN'   => 'Nombre maximum d’utilisateurs affichés dans la liste déroulante. Sur les forums comptant beaucoup de membres, vous pouvez réduire cette valeur.',
	'MENTION_LARGE_GROUPS'          => 'Taille des groupes importants',
	'MENTION_LARGE_GROUPS_EXPLAIN'  => 'Si le groupe compte plus de membres que le nombre indiqué, la permission « Peut mentionner les groupes importants » est requise.',
	'MENTION_LINK'                  => 'Lien vers le profil',
	'MENTION_LINK_EXPLAIN'          => 'Lorsque cette option est activée, les utilisateurs mentionnés sont liés à leur profil. Lorsqu’elle est désactivée, les mentions sont affichées sous forme de texte brut.',
));
