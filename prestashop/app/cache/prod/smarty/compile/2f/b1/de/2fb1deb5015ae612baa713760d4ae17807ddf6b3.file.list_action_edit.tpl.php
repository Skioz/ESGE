<?php /* Smarty version Smarty-3.1.19, created on 2017-03-15 13:25:17
         compiled from "/Users/nicolasgarnier/Documents/PHP/www/prestashop_1.7.0.6/admin689txzkzn/themes/default/template/helpers/list/list_action_edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:79422001658c932ad7a2aa8-08176672%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2fb1deb5015ae612baa713760d4ae17807ddf6b3' => 
    array (
      0 => '/Users/nicolasgarnier/Documents/PHP/www/prestashop_1.7.0.6/admin689txzkzn/themes/default/template/helpers/list/list_action_edit.tpl',
      1 => 1489580434,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '79422001658c932ad7a2aa8-08176672',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58c932ad7acf00_52679915',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58c932ad7acf00_52679915')) {function content_58c932ad7acf00_52679915($_smarty_tpl) {?>
<a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['href']->value,'html','UTF-8');?>
" title="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['action']->value,'html','UTF-8');?>
" class="edit">
	<i class="icon-pencil"></i> <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['action']->value,'html','UTF-8');?>

</a><?php }} ?>
