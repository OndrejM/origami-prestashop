<?php /* Smarty version Smarty-3.1.14, created on 2014-01-29 14:51:07
         compiled from "/var/www/clients/client0/web3/web/themes/default/mobile/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:145324307152e9155b8a7008-89831502%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '90503c59713d17f205b90801694f202fdd76f19a' => 
    array (
      0 => '/var/www/clients/client0/web3/web/themes/default/mobile/index.tpl',
      1 => 1390208062,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '145324307152e9155b8a7008-89831502',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52e9155b8aaee7_99074626',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52e9155b8aaee7_99074626')) {function content_52e9155b8aaee7_99074626($_smarty_tpl) {?>
	<div data-role="content" id="content">
		<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"DisplayMobileIndex"),$_smarty_tpl);?>

		<?php echo $_smarty_tpl->getSubTemplate ('./sitemap.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	</div><!-- /content -->
<?php }} ?>