<?php /* Smarty version Smarty-3.1.19, created on 2017-02-09 17:24:01
         compiled from "/home/getmailout/public_html/wenno/admin/templates/default/plugins.tpl" */ ?>
<?php /*%%SmartyHeaderCode:675401917589c97a10d2ce1-38407096%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9bb1df9524d293d72f1a4a4fcdc3221ad5164ee3' => 
    array (
      0 => '/home/getmailout/public_html/wenno/admin/templates/default/plugins.tpl',
      1 => 1455494036,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '675401917589c97a10d2ce1-38407096',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_589c97a1163db0_73292556',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_589c97a1163db0_73292556')) {function content_589c97a1163db0_73292556($_smarty_tpl) {?><div class="tabbable">
	<ul class="nav nav-tabs">
		<li class="active"><a href="#tab-installed" data-toggle="tab"><?php echo iaSmarty::lang(array('key'=>'installed_plugins'),$_smarty_tpl);?>
</a></li>
		<li><a href="#tab-available" data-toggle="tab"><?php echo iaSmarty::lang(array('key'=>'available_plugins'),$_smarty_tpl);?>
</a></li>
	</ul>
	<div class="tab-content">
		<div class="tab-pane active" id="tab-installed">
			<div id="js-grid-installed"></div>
		</div>
		<div class="tab-pane" id="tab-available">
			<div id="js-grid-available"></div>
		</div>
	</div>
</div><?php }} ?>
