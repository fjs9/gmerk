<?php
/**
 *
 * Gmerk. An extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2023, FJS
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = [];
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
// ’ » “ ” …
//

$lang = array_merge($lang, [
	'UCP_GMERK'				=> 'Ustawienia',
	'UCP_GMERK_TITLE'		=> 'Moduł Gmerk',

    'UCP_GMERK_RACHUNEK_MBP'            =>  'Numer rachunku w MBP',
    'UCP_GMERK_RACHUNEK_MBP_EXPLAIN'    =>  'Na ten rachunek będziesz otrzymywać wszelkie wypłaty. Dodatkowo, jego saldo będzie widoczne w Twoim profilu.',

    'UCP_GMERK_KOD_JEDNORAZ'            =>  'Jednorazowy kod STEMPEL',
    'UCP_GMERK_KOD_JEDNORAZ_EXPLAIN'    =>  'Wpisz, jeśli chcesz powiązać swój profil z profilem w Stemplu.',

    'UCP_GMERK_STEMPEL_ID'              =>  'Aktualnie połączony Stempel',
    'UCP_GMERK_STEMPEL_ID_EXPLAIN'      =>  '',

	'UCP_GMERK_SAVED'		=> 'Ustawienia zostały pomyślnie zapisane!',

	'NOTIFICATION_TYPE_GMERK'	=> 'Użyj powiadomień Gmerka',
]);
