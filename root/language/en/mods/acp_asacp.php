<?php
/**
*
* @package Anti-Spam ACP
* @copyright (c) 2008 EXreaction
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
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

$lang = array_merge($lang, array(
	'ASACP_ENABLE'				=> 'Enable Anti-Spam ACP',
	'ASACP_ENABLE_EXPLAIN'		=> 'Set to no to disable the entire Anti-Spam ACP system.',
	'ASACP_LOG'					=> 'Enable Spam Log',
	'ASACP_LOG_EXPLAIN'			=> 'If disabled new items will not be added to the spam log.',
	'ASACP_REGISTER_SETTINGS'	=> 'Registration Settings',
	'ASACP_REG_CAPTCHA'			=> 'Pre-Registration Captcha',
	'ASACP_REG_CAPTCHA_EXPLAIN'	=> 'This controls the display of the initial captcha shown before the registration process begins.<br />If enabled you should consider disabling "Enable visual confirmation for registrations" in General->Board configuration->User registration settings so the user does not have to fill out two captchas to register.',
	'ASACP_SETTINGS_UPDATED'	=> 'Anti-Spam ACP Settings have been updated successfully.',
	'ASACP_VERSION'				=> 'Version Information',

	'INSTALLED_VERSION'			=> 'Installed Version',

	'LATEST_VERSION'			=> 'Latest Version',

	'NOT_AVAILABLE'				=> 'Not Available',

	'VERSION'					=> 'Version',
));

?>