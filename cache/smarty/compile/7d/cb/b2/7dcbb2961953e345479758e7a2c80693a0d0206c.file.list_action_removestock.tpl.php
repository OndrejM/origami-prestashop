<?php /* Smarty version Smarty-3.1.14, created on 2014-01-29 14:51:14
         compiled from "/var/www/clients/client0/web3/web/admin/themes/default/template/helpers/list/list_action_removestock.tpl" */ ?>
<?php /*%%SmartyHeaderCode:128869296452e91562bf78a9-68494080%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7dcbb2961953e345479758e7a2c80693a0d0206c' => 
    array (
      0 => '/var/www/clients/client0/web3/web/admin/themes/default/template/helpers/list/list_action_removestock.tpl',
      1 => 1390208060,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '128869296452e91562bf78a9-68494080',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52e91562bfcc61_46453780',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52e91562bfcc61_46453780')) {function content_52e91562bfcc61_46453780($_smarty_tpl) {?>
<a href="<?php echo $_smarty_tpl->tpl_vars['href']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
">
	<img src="../img/admin/remove_stock.png" alt="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" />
</a>
<?php }} ?>