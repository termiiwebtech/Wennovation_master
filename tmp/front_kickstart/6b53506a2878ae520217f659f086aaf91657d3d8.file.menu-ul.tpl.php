<?php /* Smarty version Smarty-3.1.19, created on 2017-02-09 16:27:52
         compiled from "/home/getmailout/public_html/wenno/templates/common/menu-ul.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1253201614589c8a78c60259-75153223%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6b53506a2878ae520217f659f086aaf91657d3d8' => 
    array (
      0 => '/home/getmailout/public_html/wenno/templates/common/menu-ul.tpl',
      1 => 1473644488,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1253201614589c8a78c60259-75153223',
  'function' => 
  array (
    'menu' => 
    array (
      'parameter' => 
      array (
        'pid' => 0,
      ),
      'compiled' => '',
    ),
  ),
  'variables' => 
  array (
    'pid' => 0,
    'data' => 0,
    'class' => 0,
    'position' => 0,
    'core' => 0,
    'menu' => 0,
    'menu_children' => 0,
    'dropdown' => 0,
    'menus' => 0,
    'menu_class' => 0,
  ),
  'has_nocache_code' => 0,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_589c8a78d1a971_98183354',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_589c8a78d1a971_98183354')) {function content_589c8a78d1a971_98183354($_smarty_tpl) {?><?php if (!function_exists('smarty_template_function_menu')) {
    function smarty_template_function_menu($_smarty_tpl,$params) {
    $saved_tpl_vars = $_smarty_tpl->tpl_vars;
    foreach ($_smarty_tpl->smarty->template_functions['menu']['parameter'] as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);};
    foreach ($params as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);}?>
	<?php if (isset($_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['pid']->value])) {?>
		<ul class="<?php echo $_smarty_tpl->tpl_vars['class']->value;?>
<?php if ($_smarty_tpl->tpl_vars['pid']->value) {?> menu_<?php echo $_smarty_tpl->tpl_vars['pid']->value;?>
<?php }?>">

			<?php  $_smarty_tpl->tpl_vars['menu'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['menu']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['pid']->value]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['menu']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['menu']->key => $_smarty_tpl->tpl_vars['menu']->value) {
$_smarty_tpl->tpl_vars['menu']->_loop = true;
 $_smarty_tpl->tpl_vars['menu']->iteration++;
?>

				<?php if ('mainmenu'==$_smarty_tpl->tpl_vars['position']->value&&$_smarty_tpl->tpl_vars['menu']->iteration>(($tmp = @$_smarty_tpl->tpl_vars['core']->value['config']['max_top_menu_items'])===null||$tmp==='' ? 5 : $tmp)&&$_smarty_tpl->tpl_vars['menu']->value['level']<1) {?><?php $_smarty_tpl->_capture_stack[0][] = array($_smarty_tpl->tpl_vars['menu']->value['page_name'], null, 'dropdown'); ob_start(); ?><?php }?>
				
				<?php if (in_array($_smarty_tpl->tpl_vars['position']->value,array('left','right','user1','user2','top'))) {?>
					<a class="list-group-item<?php if ($_smarty_tpl->tpl_vars['menu']->value['active']) {?> active<?php }?>" href="<?php if ($_smarty_tpl->tpl_vars['menu']->value['url']) {?><?php echo $_smarty_tpl->tpl_vars['menu']->value['url'];?>
<?php } else { ?><?php echo @constant('IA_SELF');?>
#<?php }?>"<?php if ($_smarty_tpl->tpl_vars['menu']->value['nofollow']) {?> rel="nofollow"<?php }?><?php if ($_smarty_tpl->tpl_vars['menu']->value['new_window']) {?> target="_blank"<?php }?>><?php echo $_smarty_tpl->tpl_vars['menu']->value['text'];?>
</a>
				<?php } else { ?>
					<li class="m_<?php echo $_smarty_tpl->tpl_vars['menu']->value['page_name'];?>

					    <?php if (isset($_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['menu']->value['el_id']])||isset($_smarty_tpl->tpl_vars['menu_children']->value)) {?> dropdown<?php }?>
					    <?php if ($_smarty_tpl->tpl_vars['menu']->value['active']) {?> active<?php }?>
					    <?php if ($_smarty_tpl->tpl_vars['menu']->value['level']>=1&&(isset($_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['menu']->value['el_id']])||isset($_smarty_tpl->tpl_vars['menu_children']->value))) {?> dropdown-submenu<?php }?>
					    <?php if ($_smarty_tpl->tpl_vars['menu']->value['level']>=0&&(isset($_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['menu']->value['el_id']])||isset($_smarty_tpl->tpl_vars['menu_children']->value))&&$_smarty_tpl->tpl_vars['position']->value=='left') {?> dropdown-submenu<?php }?>
					    ">

						<a href="<?php if ($_smarty_tpl->tpl_vars['menu']->value['url']) {?><?php echo $_smarty_tpl->tpl_vars['menu']->value['url'];?>
<?php } else { ?><?php echo @constant('IA_SELF');?>
#<?php }?>"
								<?php if ($_smarty_tpl->tpl_vars['menu']->value['nofollow']) {?> rel="nofollow"<?php }?>
								<?php if ($_smarty_tpl->tpl_vars['menu']->value['new_window']) {?> target="_blank"<?php }?>
						><i class="fa fa-angle-double-right"></i>
							<?php echo $_smarty_tpl->tpl_vars['menu']->value['text'];?>

						</a>
						<?php if ((isset($_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['menu']->value['el_id']])||isset($_smarty_tpl->tpl_vars['menu_children']->value))&&$_smarty_tpl->tpl_vars['menu']->value['level']==0&&$_smarty_tpl->tpl_vars['position']->value!='left') {?><span class="navbar-nav__drop dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"></span><?php }?>
						<?php if (isset($_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['menu']->value['el_id']])) {?>
							<?php if (in_array($_smarty_tpl->tpl_vars['position']->value,array('inventory','right','copyright'))) {?>
								<?php smarty_template_function_menu($_smarty_tpl,array('data'=>$_smarty_tpl->tpl_vars['data']->value,'pid'=>$_smarty_tpl->tpl_vars['menu']->value['el_id'],'class'=>'dropdown-menu pull-right'));?>

							<?php } else { ?>
								<?php smarty_template_function_menu($_smarty_tpl,array('data'=>$_smarty_tpl->tpl_vars['data']->value,'pid'=>$_smarty_tpl->tpl_vars['menu']->value['el_id'],'class'=>'dropdown-menu'));?>

							<?php }?>
						<?php }?>
					</li>
				<?php }?>

				<?php if ('mainmenu'==$_smarty_tpl->tpl_vars['position']->value&&$_smarty_tpl->tpl_vars['menu']->iteration>(($tmp = @$_smarty_tpl->tpl_vars['core']->value['config']['max_top_menu_items'])===null||$tmp==='' ? 5 : $tmp)&&$_smarty_tpl->tpl_vars['menu']->value['level']<1) {?><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, array("$_capture_buffer" => ob_get_contents()), true);
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php }?>

			<?php } ?>

			<!-- MORE menu dropdown -->
			<?php if (isset($_smarty_tpl->tpl_vars['dropdown']->value)&&$_smarty_tpl->tpl_vars['menu']->value['level']<1) {?>
				<li class="dropdown dropdown-more">
					<a class="dropdown-toggle" data-toggle="dropdown" href="#"><?php echo iaSmarty::lang(array('key'=>'more'),$_smarty_tpl);?>
</a>
					<span class="navbar-nav__drop dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="fa fa-angle-down"></span></span>
					
					<ul class="dropdown-menu">
						<?php  $_smarty_tpl->tpl_vars['menu'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['menu']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['dropdown']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['menu']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['menu']->key => $_smarty_tpl->tpl_vars['menu']->value) {
$_smarty_tpl->tpl_vars['menu']->_loop = true;
 $_smarty_tpl->tpl_vars['menu']->iteration++;
?>
							<?php echo $_smarty_tpl->tpl_vars['menu']->value;?>

						<?php } ?>
					</ul>
				</li>
			<?php }?>
		</ul>
	<?php }?>
<?php $_smarty_tpl->tpl_vars = $saved_tpl_vars;
foreach (Smarty::$global_tpl_vars as $key => $value) if(!isset($_smarty_tpl->tpl_vars[$key])) $_smarty_tpl->tpl_vars[$key] = $value;}}?>


<?php smarty_template_function_menu($_smarty_tpl,array('data'=>$_smarty_tpl->tpl_vars['menus']->value,'class'=>$_smarty_tpl->tpl_vars['menu_class']->value));?>
<?php }} ?>
