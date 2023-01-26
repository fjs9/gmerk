<?php
/**
 *
 * Gmerk. An extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2023, FJS
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

namespace fjs9\gmerk\migrations;

class install_ucp_module extends \phpbb\db\migration\migration
{
	public function effectively_installed()
	{
		$sql = 'SELECT module_id
			FROM ' . $this->table_prefix . "modules
			WHERE module_class = 'ucp'
				AND module_langname = 'UCP_GMERK_TITLE'";
		$result = $this->db->sql_query($sql);
		$module_id = $this->db->sql_fetchfield('module_id');
		$this->db->sql_freeresult($result);

		return $module_id !== false;
	}

	public static function depends_on()
	{
		return ['\fjs9\gmerk\migrations\install_sample_schema'];
	}

	public function update_data()
	{
		return [
			['module.add', [
				'ucp',
				0,
				'UCP_GMERK_TITLE'
			]],
			['module.add', [
				'ucp',
				'UCP_GMERK_TITLE',
				[
					'module_basename'	=> '\fjs9\gmerk\ucp\main_module',
					'modes'				=> ['settings'],
				],
			]],
		];
	}
}
