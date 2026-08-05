<?php
/**
 *
 * phpBB mentions. An extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2016, paul999, https://www.phpbbextensions.io
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

namespace paul999\mention\migrations;

class version_300 extends \phpbb\db\migration\migration
{
	static public function depends_on()
	{
		return array('\paul999\mention\migrations\version_200');
	}

	public function update_data()
	{
		return [
			['config.add', ['simple_mention_link', '1', false]],
			['config.add', ['simple_mention_style', 'none', false]],

			['module.add', ['acp', 'ACP_CAT_DOT_MODS', [
				'module_langname'	=> 'ACP_MENTION',
			]]],

			['module.add', ['acp', 'ACP_MENTION', [
				'module_basename'	=> '\paul999\mention\acp\main_module',
				'modes'				=> ['settings'],
			]]],
		];
	}
}
