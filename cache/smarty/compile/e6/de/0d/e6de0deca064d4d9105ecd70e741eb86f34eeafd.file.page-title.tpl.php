<?php /* Smarty version Smarty-3.1.14, created on 2014-01-29 14:51:07
         compiled from "/var/www/clients/client0/web3/web/themes/default/mobile/page-title.tpl" */ ?>
<?php /*%%SmartyHeaderCode:178835365552e9155bcafd77-85090238%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e6de0deca064d4d9105ecd70e741eb86f34eeafd' => 
    array (
      0 => '/var/www/clients/client0/web3/web/themes/default/mobile/page-title.tpl',
      1 => 1390208062,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '178835365552e9155bcafd77-85090238',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'page_title' => 0,
    'meta_title' => 0,
    'shop_name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52e9155bcbff42_57084813',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52e9155bcbff42_57084813')) {function content_52e9155bcbff42_57084813($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include '/var/www/clients/client0/web3/web/tools/smarty/plugins/modifier.escape.php';
?><?php if (!isset($_smarty_tpl->tpl_vars['page_title']->value)&&isset($_smarty_tpl->tpl_vars['meta_title']->value)&&$_smarty_tpl->tpl_vars['meta_title']->value!=$_smarty_tpl->tpl_vars['shop_name']->value){?>
	<?php $_smarty_tpl->tpl_vars['page_title'] = new Smarty_variable(smarty_modifier_escape($_smarty_tpl->tpl_vars['meta_title']->value, 'htmlall', 'UTF-8'), null, 0);?>
<?php }?>
<?php if (isset($_smarty_tpl->tpl_vars['page_title']->value)){?>
	<div data-role="header" class="clearfix navbartop" data-position="inline">
		<h1><?php echo $_smarty_tpl->tpl_vars['page_title']->value;?>
</h1>
	</div><!-- /navbartop -->
<?php }?><?php }} ?>