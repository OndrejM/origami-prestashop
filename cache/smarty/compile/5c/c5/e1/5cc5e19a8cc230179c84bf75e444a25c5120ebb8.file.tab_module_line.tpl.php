<?php /* Smarty version Smarty-3.1.14, created on 2014-01-29 14:51:11
         compiled from "/var/www/clients/client0/web3/web/admin/themes/default/template/controllers/modules/tab_module_line.tpl" */ ?>
<?php /*%%SmartyHeaderCode:31862807752e9155fde13e3-96732553%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5cc5e19a8cc230179c84bf75e444a25c5120ebb8' => 
    array (
      0 => '/var/www/clients/client0/web3/web/admin/themes/default/template/controllers/modules/tab_module_line.tpl',
      1 => 1390208060,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '31862807752e9155fde13e3-96732553',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'class_row' => 0,
    'module' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52e9155fe2c2d7_77869358',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52e9155fe2c2d7_77869358')) {function content_52e9155fe2c2d7_77869358($_smarty_tpl) {?>

<tr class="<?php echo $_smarty_tpl->tpl_vars['class_row']->value;?>
">
	<td>
		<table border="0" cellpadding="0" cellspacing="5">
			<tr>
				<td valign="top" width="32" align="center">
					<img class="imgm" alt="" src="<?php if (isset($_smarty_tpl->tpl_vars['module']->value->image)){?><?php echo $_smarty_tpl->tpl_vars['module']->value->image;?>
<?php }else{ ?>../modules/<?php echo $_smarty_tpl->tpl_vars['module']->value->name;?>
/<?php echo $_smarty_tpl->tpl_vars['module']->value->logo;?>
<?php }?>">
				</td>
				<td valign="top">
					<div class="moduleDesc" id="anchor<?php echo ucfirst($_smarty_tpl->tpl_vars['module']->value->name);?>
">
						<h3>
							<span style="display:none"><?php echo $_smarty_tpl->tpl_vars['module']->value->name;?>
</span> 
							<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncate'][0][0]->smarty_modifier_truncate($_smarty_tpl->tpl_vars['module']->value->displayName,36,'…');?>
 <?php echo $_smarty_tpl->tpl_vars['module']->value->version;?>

							<?php if (isset($_smarty_tpl->tpl_vars['module']->value->id)&&$_smarty_tpl->tpl_vars['module']->value->id>0){?>
								<?php if ($_smarty_tpl->tpl_vars['module']->value->active){?>
									<span class="setup"><?php echo smartyTranslate(array('s'=>'Enabled'),$_smarty_tpl);?>
</span>
								<?php }else{ ?>
									<span class="setup off"><?php echo smartyTranslate(array('s'=>'Disabled'),$_smarty_tpl);?>
</span>
								<?php }?>
							<?php }else{ ?>
								<?php if (isset($_smarty_tpl->tpl_vars['module']->value->type)&&$_smarty_tpl->tpl_vars['module']->value->type=='addonsMustHave'){?>
									<span class="setup must-have"><?php echo smartyTranslate(array('s'=>'Must Have'),$_smarty_tpl);?>
</span>
								<?php }else{ ?>
									<span class="setup off"><?php echo smartyTranslate(array('s'=>'Not installed'),$_smarty_tpl);?>
</span>
								<?php }?>
								
							<?php }?>
						</h3>
						<p class="desc">
							<?php if (isset($_smarty_tpl->tpl_vars['module']->value->description)&&$_smarty_tpl->tpl_vars['module']->value->description!=''){?>
								<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncate'][0][0]->smarty_modifier_truncate($_smarty_tpl->tpl_vars['module']->value->description,86,'…');?>

							<?php }else{ ?>
								&nbsp;
							<?php }?>
						</p>
					</div>
				</td>
				<td border="0" valign="middle" align="right">
					<?php if (isset($_smarty_tpl->tpl_vars['module']->value->type)&&$_smarty_tpl->tpl_vars['module']->value->type=='addonsMustHave'){?>
						<a href="<?php echo $_smarty_tpl->tpl_vars['module']->value->addons_buy_url;?>
" target="_blank" class="button updated">
						<span><img src="../img/admin/cart_addons.png">&nbsp;&nbsp;<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0][0]->displayPriceSmarty(array('price'=>$_smarty_tpl->tpl_vars['module']->value->price,'currency'=>$_smarty_tpl->tpl_vars['module']->value->id_currency),$_smarty_tpl);?>
</span></a>
					<?php }elseif(!isset($_smarty_tpl->tpl_vars['module']->value->not_on_disk)){?>
						<?php echo $_smarty_tpl->tpl_vars['module']->value->optionsHtml;?>

						<div class="clear">&nbsp;</div>
						<a href="#" class="button action_tab_module" data-option="select_<?php echo $_smarty_tpl->tpl_vars['module']->value->name;?>
" class="button"><?php echo smartyTranslate(array('s'=>'Submit'),$_smarty_tpl);?>
</a>
					<?php }else{ ?>
						<a href="<?php echo $_smarty_tpl->tpl_vars['module']->value->options['install_url'];?>
" class="button"><?php echo smartyTranslate(array('s'=>'Install'),$_smarty_tpl);?>
</a>
					<?php }?>
				</td>
			</tr>
		</table>
	</td>
</tr><?php }} ?>