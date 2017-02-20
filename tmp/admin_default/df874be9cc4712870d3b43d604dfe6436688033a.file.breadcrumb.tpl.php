<?php /* Smarty version Smarty-3.1.19, created on 2017-02-09 16:35:17
         compiled from "/home/getmailout/public_html/wenno/admin/templates/default/breadcrumb.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2022822973589c8c3551c6c9-43535052%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'df874be9cc4712870d3b43d604dfe6436688033a' => 
    array (
      0 => '/home/getmailout/public_html/wenno/admin/templates/default/breadcrumb.tpl',
      1 => 1455494036,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2022822973589c8c3551c6c9-43535052',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'core' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_589c8c35544209_31194269',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_589c8c35544209_31194269')) {function content_589c8c35544209_31194269($_smarty_tpl) {?><ul class="breadcrumb">
	<?php if ('index'==$_smarty_tpl->tpl_vars['core']->value['page']['name']) {?>
		<li class="active"><?php echo iaSmarty::lang(array('key'=>'welcome_to_admin_board'),$_smarty_tpl);?>
</li>
	<?php } else { ?>
		<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['core']->value['page']['breadcrumb']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['item']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['item']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['item']->iteration++;
 $_smarty_tpl->tpl_vars['item']->last = $_smarty_tpl->tpl_vars['item']->iteration === $_smarty_tpl->tpl_vars['item']->total;
?>
			<?php if ($_smarty_tpl->tpl_vars['item']->value['url']&&!$_smarty_tpl->tpl_vars['item']->last) {?>
				<li><a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['caption'];?>
</a></li>
			<?php } else { ?>
				<li class="active"><?php echo $_smarty_tpl->tpl_vars['item']->value['caption'];?>
</li>
			<?php }?>
		<?php } ?>
	<?php }?>
</ul><?php }} ?>
