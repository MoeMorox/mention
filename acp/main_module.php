<?php
/**
 *
 * phpBB mentions. An extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2016, paul999, https://www.phpbbextensions.io
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

namespace paul999\mention\acp;

/**
 * phpBB mentions ACP module.
 */
class main_module
{
	/** @var string $page_title */
	public $page_title;

	/** @var string $tpl_name */
	public $tpl_name;

	/** @var string $u_action */
	public $u_action;

	/**
	 * Main ACP module
	 *
	 * @param int    $id   The module ID (not used)
	 * @param string $mode The module mode
	 */
	public function main($id, $mode)
	{
		global $config, $request, $template, $user, $phpbb_log;

		$this->tpl_name = 'acp_mention_settings';
		$this->page_title = $user->lang('ACP_MENTION_SETTINGS');

		$user->add_lang_ext('paul999/mention', 'acp_common');

		$form_key = 'paul999_mention_settings';
		add_form_key($form_key);

		$errors = [];

		if ($request->is_set_post('submit'))
		{
			if (!check_form_key($form_key))
			{
				trigger_error('FORM_INVALID');
			}

			$minlength = $request->variable('simple_mention_minlength', 1);
			$maxresults = $request->variable('simple_mention_maxresults', 50);
			$large_groups = $request->variable('simple_mention_large_groups', 50);
			$color = strtolower($request->variable('simple_mention_color', 'ff0000'));
			$link = $request->variable('simple_mention_link', 0);
			$style = $request->variable('simple_mention_style', 'italic');

			if (!preg_match('/^([a-f0-9]{3}){1,2}$/', $color))
			{
				$errors[] = $user->lang('MENTION_COLOR_INVALID', $color);
			}

			if (!in_array($style, ['none', 'italic', 'bold', 'italic_bold']))
			{
				$errors[] = $user->lang('MENTION_STYLE_INVALID', $style);
			}

			if (!count($errors))
			{
				$old_link = $config['simple_mention_link'];

				$config->set('simple_mention_minlength', $minlength);
				$config->set('simple_mention_maxresults', $maxresults);
				$config->set('simple_mention_color', $color);
				$config->set('simple_mention_large_groups', $large_groups);
				$config->set('simple_mention_link', $link);
				$config->set('simple_mention_style', $style);

				if ($old_link != $link)
				{
					global $phpbb_container;
					$phpbb_container->get('text_formatter.cache')->invalidate();
				}

				$phpbb_log->add('admin', $user->data['user_id'], $user->ip, 'LOG_MENTION_SETTINGS');

				trigger_error($user->lang('CONFIG_UPDATED') . adm_back_link($this->u_action));
			}
		}

		$template->assign_vars([
			'SIMPLE_MENTION_MINLENGTH'		=> $config['simple_mention_minlength'],
			'SIMPLE_MENTION_MAXRESULTS'		=> $config['simple_mention_maxresults'],
			'SIMPLE_MENTION_COLOR'			=> $config['simple_mention_color'],
			'SIMPLE_MENTION_LARGE_GROUPS'	=> $config['simple_mention_large_groups'],
			'SIMPLE_MENTION_LINK'			=> (bool) $config['simple_mention_link'],
			'SIMPLE_MENTION_STYLE'			=> $config['simple_mention_style'],
			'ERROR_MSG'						=> (count($errors)) ? implode('<br>', $errors) : '',
			'U_ACTION'						=> $this->u_action,
		]);
	}
}
