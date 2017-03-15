<?php /* Smarty version Smarty-3.1.19, created on 2017-03-15 13:42:34
         compiled from "/Users/nicolasgarnier/Documents/PHP/www/prestashop_1.7.0.6/themes/classic/templates/checkout/_partials/steps/unreachable.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21121141858c936ba602bf0-11652374%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5a5768a1f2a72d57060d3a9f26e3831a2f23030d' => 
    array (
      0 => '/Users/nicolasgarnier/Documents/PHP/www/prestashop_1.7.0.6/themes/classic/templates/checkout/_partials/steps/unreachable.tpl',
      1 => 1489580432,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21121141858c936ba602bf0-11652374',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'identifier' => 0,
    'position' => 0,
    'title' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58c936ba60cf40_25140381',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58c936ba60cf40_25140381')) {function content_58c936ba60cf40_25140381($_smarty_tpl) {?>
<section class="checkout-step -unreachable" id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['identifier']->value, ENT_QUOTES, 'UTF-8');?>
">
  <h1 class="step-title h3">
    <span class="step-number"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['position']->value, ENT_QUOTES, 'UTF-8');?>
</span> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'UTF-8');?>

  </h1>
</section>
<?php }} ?>
