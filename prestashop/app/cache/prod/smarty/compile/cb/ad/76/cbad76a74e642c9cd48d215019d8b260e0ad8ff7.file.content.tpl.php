<?php /* Smarty version Smarty-3.1.19, created on 2017-03-15 13:23:25
         compiled from "/Users/nicolasgarnier/Documents/PHP/www/prestashop_1.7.0.6/admin689txzkzn/themes/default/template/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:70747847858c9323d0f9cb7-40876096%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cbad76a74e642c9cd48d215019d8b260e0ad8ff7' => 
    array (
      0 => '/Users/nicolasgarnier/Documents/PHP/www/prestashop_1.7.0.6/admin689txzkzn/themes/default/template/content.tpl',
      1 => 1489580434,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '70747847858c9323d0f9cb7-40876096',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58c9323d101084_93446808',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58c9323d101084_93446808')) {function content_58c9323d101084_93446808($_smarty_tpl) {?>
<div id="ajax_confirmation" class="alert alert-success hide"></div>

<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div><?php }} ?>
