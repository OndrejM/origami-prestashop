<?php /* Smarty version Smarty-3.1.14, created on 2014-01-29 14:51:12
         compiled from "/var/www/clients/client0/web3/web/admin/themes/default/template/controllers/slip/_print_pdf_icon.tpl" */ ?>
<?php /*%%SmartyHeaderCode:32036113152e915601e5ee8-12520273%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b88f19418319686d633aa4817193396e1537cb2e' => 
    array (
      0 => '/var/www/clients/client0/web3/web/admin/themes/default/template/controllers/slip/_print_pdf_icon.tpl',
      1 => 1390208060,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '32036113152e915601e5ee8-12520273',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
    'order_slip' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52e915601ed2d8_68386124',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52e915601ed2d8_68386124')) {function content_52e915601ed2d8_68386124($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include '/var/www/clients/client0/web3/web/tools/smarty/plugins/modifier.escape.php';
?>


<span style="width:20px; margin-right:5px;">
<a target="_blank" href="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminPdf'), 'htmlall', 'UTF-8');?>
&submitAction=generateOrderSlipPDF&id_order_slip=<?php echo $_smarty_tpl->tpl_vars['order_slip']->value->id;?>
"><img src="../img/admin/tab-invoice.gif" alt="order_slip" /></a>
</span>
<?php }} ?>