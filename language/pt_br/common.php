<?php
/**
*
* About us extension for the phpBB Forum Software package.
* [Brazilian Portuguese [pt_br]]
* Brazilian Portuguese translation by null2 (c) 2017 [ver 2.1.2] (https://github.com/phpBBTraducoes)
* @copyright (c) 2014-2015 Crizzo <http://www.crizzo.de>
* @license GNU General Public License, version 2 (GPL-2.0)
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
// ’ » “ ” …
//

$lang = array_merge($lang, array(
	'ABOUTUS'						=> 'Sobre nós',
	'ABOUTUS_SETTINGS'				=> 'Configurações',
	'ABOUTUS_UPDATED'				=> 'Sobre nós atualizado com sucesso.',
	'ABOUTUS_AND'					=> 'e',

	'ACP_ABOUTUS_ENABLE'			=> 'Habilitar Sobre nós',
	'ACP_ABOUTUS_ENABLE_EXPLAIN'	=> 'Se a extensão for desabilitada, o fórum não mostrará um link para a página Sobre nós. No entanto, o link direto “app.php/aboutus” funcionará.',
	'ACP_ABOUTUS_INFO'				=> 'Texto Sobre nós',
	'ACP_ABOUTUS_INFO_EXPLAIN'		=> 'Edite o texto que será mostrado na página Sobre nós.',
	'ACP_ABOUTUS_INFO_PREVIEW'		=> 'Prever Sobre nós',
	'ACP_ABOUTUS_SETTINGS'			=> 'Configurações Sobre nós',
	'ACP_ABOUTUS_SETTINGS_EXPLAIN'	=> 'Defina o texto e habilite/desabilite a página Sobre nós.',

	'ACP_TERMS_OF_USE_ENABLE' 			=> 'Mostrar termos de uso',
	'ACP_TERMS_OF_USE_ENABLE_EXPLAIN'	=> 'Mostra um link para os termos de uso na página Sobre nós.',
	'ACP_PRIVACY_ENABLE' 				=> 'Mostrar políticas de privacidade',
	'ACP_PRIVACY_ENABLE_EXPLAIN'		=> 'Mostra um link para a políticas de privacidade na página Sobre nós.',

	'DESCRIPTION_PRIVACY'			=> 'Você pode ver as políticas de privacidade aqui:',
	'DESCRIPTION_TERMS_OF_USE'		=> 'Você pode ver os termos de uso aqui:',
	'DESCRIPTION_PRIVACY_TERMS_OF_USE'=> 'Você pode ver os termos de uso e as políticas de privacidade aqui:',

	'VIEWONLINE_ABOUTUS'	=> 'Vendo Sobre nós',
));
