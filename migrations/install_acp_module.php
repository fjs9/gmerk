<?php
/**
 *
 * Gmerk. An extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2023, FJS, https://f.fenocja.org.pl/
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

/**
 * CONFIG JEST NASTĘPUJĄCY:
 * fedemerk_gmerk_klucz_stempel
 * fedemerk_gmerk_klucz_mbp
 */

namespace fedemerk\gmerk\migrations;

class install_acp_module extends \phpbb\db\migration\migration
{
	public function effectively_installed()
	{
		if (isset($this->config['fedemerk_gmerk_klucz_stempel'])) {
			return isset($this->config['fedemerk_gmerk_klucz_mbp']);
		} else {
			return false;
		}
	}

	public static function depends_on()
	{
		return ['\phpbb\db\migration\data\v320\v320'];
	}

	public function update_data()
	{
		return [
			['config.add', ['fedemerk_gmerk_klucz_stempel', '0']],
			['config.add', ['fedemerk_gmerk_klucz_mbp', '0']],

			['module.add', [
				'acp',
				'ACP_CAT_DOT_MODS',
				'ACP_GMERK_TITLE'
			]],
			['module.add', [
				'acp',
				'ACP_GMERK_TITLE',
				[
					'module_basename'	=> '\fedemerk\gmerk\acp\main_module',
					'modes'				=> ['settings'],
				],
			]],
		];
	}
}
