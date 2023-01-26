<?php
/**
 *
 * Gmerk. An extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2023, FJS
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

namespace fjs9\gmerk\ucp;

/**
 * Gmerk UCP module info.
 */
class main_info
{
	public function module()
	{
		return [
			'filename'	=> '\fjs9\gmerk\ucp\main_module',
			'title'		=> 'UCP_GMERK_TITLE',
			'modes'		=> [
				'settings'	=> [
					'title'	=> 'UCP_GMERK',
					'auth'	=> 'ext_fjs9/gmerk',
					'cat'	=> ['UCP_GMERK_TITLE'],
				],
			],
		];
	}
}
