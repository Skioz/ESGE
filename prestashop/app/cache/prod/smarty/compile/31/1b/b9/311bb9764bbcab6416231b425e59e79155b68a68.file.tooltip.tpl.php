<?php /* Smarty version Smarty-3.1.19, created on 2017-03-15 13:23:25
         compiled from "/Users/nicolasgarnier/Documents/PHP/www/prestashop_1.7.0.6/modules/welcome/views/templates/tooltip.tpl" */ ?>
<?php /*%%SmartyHeaderCode:61577041658c9323d3eee04-63237722%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '311bb9764bbcab6416231b425e59e79155b68a68' => 
    array (
      0 => '/Users/nicolasgarnier/Documents/PHP/www/prestashop_1.7.0.6/modules/welcome/views/templates/tooltip.tpl',
      1 => 1489580436,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '61577041658c9323d3eee04-63237722',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58c9323d3f4fc6_15022300',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58c9323d3f4fc6_15022300')) {function content_58c9323d3f4fc6_15022300($_smarty_tpl) {?>

<div class="onboarding-tooltip">
  <div class="content"></div>
  <div class="onboarding-tooltipsteps">
    <div class="total"><?php echo smartyTranslate(array('s'=>'Step','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>
 <span class="count">1/5</span></div>
    <div class="bulls">
    </div>
  </div>
  <button class="btn btn-primary btn-xs onboarding-button-next"><?php echo smartyTranslate(array('s'=>'Next','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>
</button>
</div>
<?php }} ?>
