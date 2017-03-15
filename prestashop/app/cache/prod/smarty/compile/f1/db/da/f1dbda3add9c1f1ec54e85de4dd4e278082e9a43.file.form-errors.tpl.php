<?php /* Smarty version Smarty-3.1.19, created on 2017-03-15 13:42:34
         compiled from "/Users/nicolasgarnier/Documents/PHP/www/prestashop_1.7.0.6/themes/classic/templates/_partials/form-errors.tpl" */ ?>
<?php /*%%SmartyHeaderCode:112770978358c936ba4fcf44-24373819%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f1dbda3add9c1f1ec54e85de4dd4e278082e9a43' => 
    array (
      0 => '/Users/nicolasgarnier/Documents/PHP/www/prestashop_1.7.0.6/themes/classic/templates/_partials/form-errors.tpl',
      1 => 1489580432,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '112770978358c936ba4fcf44-24373819',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'errors' => 0,
    'error' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58c936ba509e04_83368991',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58c936ba509e04_83368991')) {function content_58c936ba509e04_83368991($_smarty_tpl) {?>
<?php if (count($_smarty_tpl->tpl_vars['errors']->value)) {?>
  <div class="help-block">
    <ul>
      <?php  $_smarty_tpl->tpl_vars['error'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['error']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['errors']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['error']->key => $_smarty_tpl->tpl_vars['error']->value) {
$_smarty_tpl->tpl_vars['error']->_loop = true;
?>
        <li><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['error']->value, ENT_QUOTES, 'UTF-8');?>
</li>
      <?php } ?>
    </ul>
  </div>
<?php }?>
<?php }} ?>
