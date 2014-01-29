<?php /*%%SmartyHeaderCode:170543043352e91663c208b8-70853365%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e62a3e2973f3374d63a1f5fa75853442ae13f130' => 
    array (
      0 => '/var/www/clients/client0/web3/web/themes/default/modules/blockmyaccountfooter/blockmyaccountfooter.tpl',
      1 => 1390208062,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '170543043352e91663c208b8-70853365',
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52e91f330c38f4_51735943',
  'has_nocache_code' => false,
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52e91f330c38f4_51735943')) {function content_52e91f330c38f4_51735943($_smarty_tpl) {?>
<!-- Block myaccount module -->
<div class="block myaccount">
	<p class="title_block"><a href="http://origami.inginea.eu/index.php?controller=my-account" title="Správa mého zákaznického účtu" rel="nofollow">Můj účet</a></p>
	<div class="block_content">
		<ul class="bullet">
			<li><a href="http://origami.inginea.eu/index.php?controller=history" title="Seznam mých objednávek" rel="nofollow">Moje objednávky</a></li>
						<li><a href="http://origami.inginea.eu/index.php?controller=order-slip" title="Seznam mých dobropisů" rel="nofollow">Moje dobropisy</a></li>
			<li><a href="http://origami.inginea.eu/index.php?controller=addresses" title="Seznam mých adres" rel="nofollow">Moje adresy</a></li>
			<li><a href="http://origami.inginea.eu/index.php?controller=identity" title="Správa mých osobních informací" rel="nofollow">Moje osobní údaje</a></li>
						
		</ul>
		<p class="logout"><a href="http://origami.inginea.eu/index.php?mylogout" title="Odhlásit" rel="nofollow">Odhlásit</a></p>
	</div>
</div>
<!-- /Block myaccount module -->
<?php }} ?>