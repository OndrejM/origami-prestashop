<?php /*%%SmartyHeaderCode:196911243952e916637cebc6-03745589%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0738c92a0214715ace770fed278496a401b08f71' => 
    array (
      0 => '/var/www/clients/client0/web3/web/themes/default/modules/blockmanufacturer/blockmanufacturer.tpl',
      1 => 1390208062,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '196911243952e916637cebc6-03745589',
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52e91f32eed364_70077818',
  'has_nocache_code' => false,
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52e91f32eed364_70077818')) {function content_52e91f32eed364_70077818($_smarty_tpl) {?>
<!-- Block manufacturers module -->
<div id="manufacturers_block_left" class="block blockmanufacturer">
	<p class="title_block"><a href="http://origami.inginea.eu/index.php?controller=manufacturer" title="Výrobci">Výrobci</a></p>
	<div class="block_content">
		<ul class="bullet">
					<li class="first_item"><a href="http://origami.inginea.eu/index.php?id_manufacturer=1&amp;controller=manufacturer&amp;id_lang=3" title="Více o Apple Computer, Inc">Apple Computer, Inc</a></li>
							<li class="last_item"><a href="http://origami.inginea.eu/index.php?id_manufacturer=2&amp;controller=manufacturer&amp;id_lang=3" title="Více o Shure Incorporated">Shure Incorporated</a></li>
				</ul>
				<form action="/index.php" method="get">
			<p>
				<select id="manufacturer_list" onchange="autoUrl('manufacturer_list', '');">
					<option value="0">Všichni výrobci</option>
									<option value="http://origami.inginea.eu/index.php?id_manufacturer=1&amp;controller=manufacturer&amp;id_lang=3">Apple Computer, Inc</option>
									<option value="http://origami.inginea.eu/index.php?id_manufacturer=2&amp;controller=manufacturer&amp;id_lang=3">Shure Incorporated</option>
								</select>
			</p>
		</form>
		</div>
</div>
<!-- /Block manufacturers module -->
<?php }} ?>