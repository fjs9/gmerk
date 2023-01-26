<?php
/**
 *
 * Gmerk. An extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2023, FJS
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

namespace fjs9\gmerk\acp;

/**
 * Gmerk ACP module info.
 */
class main_info
{
	public function module()
	{
		return [
			'filename'	=> '\fjs9\gmerk\acp\main_module',
			'title'		=> 'ACP_GMERK_TITLE',
			'modes'		=> [
				'settings'	=> [
					'title'	=> 'ACP_GMERK',
					'auth'	=> 'ext_fjs9/gmerk && acl_a_board',
					'cat'	=> ['ACP_GMERK_TITLE'],
				],
			],
		];
	}
}
