<?php /*%%SmartyHeaderCode:29117672152e91663730237-73103026%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5820d15f7c4281d1c61c7220bbbc3925feccda0f' => 
    array (
      0 => '/var/www/clients/client0/web3/web/themes/default/modules/blockcategories/blockcategories.tpl',
      1 => 1390208062,
      2 => 'file',
    ),
    'f3bb31e32c525479dc285041a040146ef934d774' => 
    array (
      0 => '/var/www/clients/client0/web3/web/themes/default/modules/blockcategories/category-tree-branch.tpl',
      1 => 1390208062,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '29117672152e91663730237-73103026',
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52e91f32ece660_59590111',
  'has_nocache_code' => false,
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52e91f32ece660_59590111')) {function content_52e91f32ece660_59590111($_smarty_tpl) {?>
<!-- Block categories module -->
<div id="categories_block_left" class="block">
	<p class="title_block">Kategorie</p>
	<div class="block_content">
		<ul class="tree dhtml">
									
<li >
	<a href="http://origami.inginea.eu/index.php?id_category=3&amp;controller=category&amp;id_lang=3" 		title="Now that you can buy movies from the iTunes Store and sync them to your iPod, the whole world is your theater.">iPods</a>
	</li>

												
<li >
	<a href="http://origami.inginea.eu/index.php?id_category=4&amp;controller=category&amp;id_lang=3" 		title="Wonderful accessories for your iPod">Accessories</a>
	</li>

												
<li class="last">
	<a href="http://origami.inginea.eu/index.php?id_category=5&amp;controller=category&amp;id_lang=3" 		title="The latest Intel processor, a bigger hard drive, plenty of memory, and even more new features all fit inside just one liberating inch. The new Mac laptops have the performance, power, and connectivity of a desktop computer. Without the desk part.">Laptops</a>
	</li>

							</ul>
		
		<script type="text/javascript">
		// <![CDATA[
			// we hide the tree only if JavaScript is activated
			$('div#categories_block_left ul.dhtml').hide();
		// ]]>
		</script>
	</div>
</div>
<!-- /Block categories module -->
<?php }} ?>