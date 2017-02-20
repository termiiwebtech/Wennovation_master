<?php /* Smarty version Smarty-3.1.19, created on 2017-02-09 16:27:54
         compiled from "/home/getmailout/public_html/wenno/templates/common/captcha.tpl" */ ?>
<?php /*%%SmartyHeaderCode:932248042589c8a7ad38815-56826187%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fed4843bb9ffb27ee50f91381b5da11403e5d6fe' => 
    array (
      0 => '/home/getmailout/public_html/wenno/templates/common/captcha.tpl',
      1 => 1455494036,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '932248042589c8a7ad38815-56826187',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'core' => 0,
    'member' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_589c8a7ad419d5_28913267',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_589c8a7ad419d5_28913267')) {function content_589c8a7ad419d5_28913267($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['core']->value['config']['captcha']&&!$_smarty_tpl->tpl_vars['member']->value) {?>
	<div class="fieldset">
		<div class="fieldset__header"><?php echo iaSmarty::lang(array('key'=>'safety'),$_smarty_tpl);?>
</div>
		<div class="fieldset__content">
			<div class="captcha"><?php echo iaSmarty::captcha(array(),$_smarty_tpl);?>
</div>
		</div>
	</div>
<?php }?><?php }} ?>
