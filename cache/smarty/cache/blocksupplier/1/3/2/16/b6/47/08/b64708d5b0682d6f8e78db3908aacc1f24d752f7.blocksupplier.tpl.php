<?php /*%%SmartyHeaderCode:113550021052e9166377fb32-37907833%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b64708d5b0682d6f8e78db3908aacc1f24d752f7' => 
    array (
      0 => '/var/www/clients/client0/web3/web/themes/default/modules/blocksupplier/blocksupplier.tpl',
      1 => 1390208062,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '113550021052e9166377fb32-37907833',
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52e91f32ede4f6_25024462',
  'has_nocache_code' => false,
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52e91f32ede4f6_25024462')) {function content_52e91f32ede4f6_25024462($_smarty_tpl) {?>
<!-- Block suppliers module -->
<div id="suppliers_block_left" class="block blocksupplier">
	<p class="title_block"><a href="http://origami.inginea.eu/index.php?controller=supplier" title="Dodavatelé">Dodavatelé</a></p>
	<div class="block_content">
		<ul class="bullet">
					<li class="first_item">
			<a href="http://origami.inginea.eu/index.php?id_supplier=1&amp;controller=supplier&amp;id_lang=3" title="Přečtěte si více o AppleStore">AppleStore</a>
		</li>
							<li class="last_item">
			<a href="http://origami.inginea.eu/index.php?id_supplier=2&amp;controller=supplier&amp;id_lang=3" title="Přečtěte si více o Shure Online Store">Shure Online Store</a>
		</li>
				</ul>
				<form action="/index.php" method="get">
			<p>
				<select id="supplier_list" onchange="autoUrl('supplier_list', '');">
					<option value="0">Všichni dodavatelé</option>
									<option value="http://origami.inginea.eu/index.php?id_supplier=1&amp;controller=supplier&amp;id_lang=3">AppleStore</option>
									<option value="http://origami.inginea.eu/index.php?id_supplier=2&amp;controller=supplier&amp;id_lang=3">Shure Online Store</option>
								</select>
			</p>
		</form>
		</div>
</div>
<!-- /Block suppliers module -->
<?php }} ?>