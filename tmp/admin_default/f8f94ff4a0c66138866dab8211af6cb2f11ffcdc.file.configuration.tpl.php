<?php /* Smarty version Smarty-3.1.19, created on 2017-02-09 17:19:06
         compiled from "/home/getmailout/public_html/wenno/admin/templates/default/configuration.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1479830738589c967a392a10-85635356%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f8f94ff4a0c66138866dab8211af6cb2f11ffcdc' => 
    array (
      0 => '/home/getmailout/public_html/wenno/admin/templates/default/configuration.tpl',
      1 => 1455494036,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1479830738589c967a392a10-85635356',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'params' => 0,
    'entry' => 0,
    'field_show' => 0,
    'core' => 0,
    'dependent_fields' => 0,
    'tooltips' => 0,
    'custom' => 0,
    'key' => 0,
    'value2' => 0,
    'subkey' => 0,
    'subvalue' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_589c967a6e7f97_50628736',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_589c967a6e7f97_50628736')) {function content_589c967a6e7f97_50628736($_smarty_tpl) {?><?php if (!is_callable('smarty_function_ia_html_file')) include '/home/getmailout/public_html/wenno/includes/smarty/intelli_plugins/function.ia_html_file.php';
if (!is_callable('smarty_function_html_radio_switcher')) include '/home/getmailout/public_html/wenno/includes/smarty/intelli_plugins/function.html_radio_switcher.php';
?><?php if (isset($_smarty_tpl->tpl_vars['params']->value)) {?>
<form enctype="multipart/form-data" method="post" class="sap-form form-horizontal">
	<?php echo iaSmarty::preventCsrf(array(),$_smarty_tpl);?>

	<div class="wrap-list">
		<div class="wrap-group">
		<?php  $_smarty_tpl->tpl_vars['entry'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['entry']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['params']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['entry']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['entry']->key => $_smarty_tpl->tpl_vars['entry']->value) {
$_smarty_tpl->tpl_vars['entry']->_loop = true;
 $_smarty_tpl->tpl_vars['entry']->index++;
 $_smarty_tpl->tpl_vars['entry']->first = $_smarty_tpl->tpl_vars['entry']->index === 0;
?>
			<?php if (!empty($_smarty_tpl->tpl_vars['entry']->value['show'])) {?>
				<?php $_smarty_tpl->tpl_vars['field_show'] = new Smarty_variable(explode('|',$_smarty_tpl->tpl_vars['entry']->value['show']), null, 0);?>

				<?php $_smarty_tpl->_capture_stack[0][] = array('default', 'dependent_fields', null); ob_start(); ?>
					data-id="js-<?php echo $_smarty_tpl->tpl_vars['field_show']->value[0];?>
-<?php echo $_smarty_tpl->tpl_vars['field_show']->value[1];?>
" <?php if ((!empty($_smarty_tpl->tpl_vars['field_show']->value[0])&&$_smarty_tpl->tpl_vars['core']->value['config'][$_smarty_tpl->tpl_vars['field_show']->value[0]]!=$_smarty_tpl->tpl_vars['field_show']->value[1])) {?> style="display: none;"<?php }?>
				<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, array("$_capture_buffer" => ob_get_contents()), true);
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
			<?php } else { ?>
				<?php $_smarty_tpl->tpl_vars['dependent_fields'] = new Smarty_variable('', null, 0);?>
			<?php }?>

			<?php if ('divider'==$_smarty_tpl->tpl_vars['entry']->value['type']) {?>
				<?php if (!$_smarty_tpl->tpl_vars['entry']->first) {?>
					</div>
					<div class="wrap-group" <?php echo $_smarty_tpl->tpl_vars['dependent_fields']->value;?>
>
				<?php }?>
				<a name="<?php echo $_smarty_tpl->tpl_vars['entry']->value['name'];?>
"></a>
				<div class="wrap-group-heading" <?php echo $_smarty_tpl->tpl_vars['dependent_fields']->value;?>
>
					<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['entry']->value['value'], ENT_QUOTES, 'UTF-8', true);?>


					<?php if (isset($_smarty_tpl->tpl_vars['tooltips']->value[$_smarty_tpl->tpl_vars['entry']->value['name']])) {?>
						<a href="#" class="js-tooltip" data-placement="right" title="<?php echo $_smarty_tpl->tpl_vars['tooltips']->value[$_smarty_tpl->tpl_vars['entry']->value['name']];?>
"><i class="i-info"></i></a>
					<?php }?>
				</div>
			<?php } elseif ('hidden'!=$_smarty_tpl->tpl_vars['entry']->value['type']) {?>
				<div class="row <?php echo $_smarty_tpl->tpl_vars['entry']->value['class'];?>
" <?php echo $_smarty_tpl->tpl_vars['dependent_fields']->value;?>
>
					<label class="col col-lg-2 control-label" for="<?php echo $_smarty_tpl->tpl_vars['entry']->value['name'];?>
">
						<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['entry']->value['description'], ENT_QUOTES, 'UTF-8', true);?>

						<?php if (isset($_smarty_tpl->tpl_vars['tooltips']->value[$_smarty_tpl->tpl_vars['entry']->value['name']])) {?>
							<a href="#" class="js-tooltip" title="<?php echo $_smarty_tpl->tpl_vars['tooltips']->value[$_smarty_tpl->tpl_vars['entry']->value['name']];?>
"><i class="i-info"></i></a>
						<?php }?>
					</label>

					<?php if (in_array($_smarty_tpl->tpl_vars['entry']->value['type'],array('textarea','tpl'))) {?>
						<div class="col col-lg-8">
					<?php } else { ?>
						<div class="col col-lg-5">
					<?php }?>

					<input type="hidden" class="chck" name="c[<?php echo $_smarty_tpl->tpl_vars['entry']->value['name'];?>
]" value="<?php if ('custom'!=$_smarty_tpl->tpl_vars['entry']->value['class']) {?>1<?php } else { ?>0<?php }?>" />
					<?php if ('password'==$_smarty_tpl->tpl_vars['entry']->value['type']) {?>
						<?php if ($_smarty_tpl->tpl_vars['custom']->value) {?>
							<div class="form-control disabled item-val"><?php if (empty($_smarty_tpl->tpl_vars['entry']->value['default'])) {?><?php echo iaSmarty::lang(array('key'=>'config_empty_password'),$_smarty_tpl);?>
<?php } else { ?>***********<?php }?></div>
						<?php }?>

						<div class="item-input">
							<input type="password" class="js-input-password" name="v[<?php echo $_smarty_tpl->tpl_vars['entry']->value['name'];?>
]" id="<?php echo $_smarty_tpl->tpl_vars['entry']->value['name'];?>
" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['entry']->value['value'], ENT_QUOTES, 'UTF-8', true);?>
" />
						</div>
					<?php } elseif ('text'==$_smarty_tpl->tpl_vars['entry']->value['type']) {?>
						<?php if ('captcha_preview'==$_smarty_tpl->tpl_vars['entry']->value['name']) {?>
							<?php echo iaSmarty::captcha(array('preview'=>true),$_smarty_tpl);?>

						<?php } else { ?>
							<?php if ($_smarty_tpl->tpl_vars['custom']->value) {?>
								<div class="form-control disabled item-val"><?php if (empty($_smarty_tpl->tpl_vars['entry']->value['default'])) {?><?php echo iaSmarty::lang(array('key'=>'config_empty_value'),$_smarty_tpl);?>
<?php } else { ?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['entry']->value['default'], ENT_QUOTES, 'UTF-8', true);?>
<?php }?></div>
							<?php }?>

							<div class="item-input">
								<input type="text" name="v[<?php echo $_smarty_tpl->tpl_vars['entry']->value['name'];?>
]" id="<?php echo $_smarty_tpl->tpl_vars['entry']->value['name'];?>
" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['entry']->value['value'], ENT_QUOTES, 'UTF-8', true);?>
" />
							</div>
						<?php }?>
					<?php } elseif ('textarea'==$_smarty_tpl->tpl_vars['entry']->value['type']) {?>
						<?php if ($_smarty_tpl->tpl_vars['custom']->value) {?>
							<div class="form-control disabled item-val"><?php if (empty($_smarty_tpl->tpl_vars['entry']->value['default'])) {?><?php echo iaSmarty::lang(array('key'=>'config_empty_value'),$_smarty_tpl);?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['entry']->value['default'];?>
<?php }?></div>
						<?php }?>

						<div class="item-input">
							<textarea name="v[<?php echo $_smarty_tpl->tpl_vars['entry']->value['name'];?>
]" id="<?php echo $_smarty_tpl->tpl_vars['entry']->value['name'];?>
" class="<?php if ($_smarty_tpl->tpl_vars['entry']->value['wysiwyg']==1) {?>js-wysiwyg <?php } elseif ($_smarty_tpl->tpl_vars['entry']->value['code_editor']) {?>js-code-editor <?php }?>common" cols="45" rows="7"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['entry']->value['value'], ENT_QUOTES, 'UTF-8', true);?>
</textarea>
						</div>
					<?php } elseif ('image'==$_smarty_tpl->tpl_vars['entry']->value['type']) {?>
						<?php if (!is_writeable(@constant('IA_UPLOADS'))) {?>
							<div class="alert alert-info"><?php echo iaSmarty::lang(array('key'=>'upload_writable_permission'),$_smarty_tpl);?>
</div>
						<?php } else { ?>
							<?php if (!empty($_smarty_tpl->tpl_vars['entry']->value['value'])||$_smarty_tpl->tpl_vars['entry']->value['name']=='site_logo') {?>
								<div class="thumbnail">
									<?php if (!empty($_smarty_tpl->tpl_vars['entry']->value['value'])) {?>
										<img src="<?php echo $_smarty_tpl->tpl_vars['core']->value['page']['nonProtocolUrl'];?>
uploads/<?php echo $_smarty_tpl->tpl_vars['entry']->value['value'];?>
">
									<?php } elseif ($_smarty_tpl->tpl_vars['entry']->value['name']=='site_logo') {?>
										<img src="<?php echo $_smarty_tpl->tpl_vars['core']->value['page']['nonProtocolUrl'];?>
templates/<?php echo $_smarty_tpl->tpl_vars['core']->value['config']['tmpl'];?>
/img/logo.png">
									<?php }?>
								</div>

								<?php if (!empty($_smarty_tpl->tpl_vars['entry']->value['value'])) {?>
									<div class="checkbox">
										<label><input type="checkbox" name="delete[<?php echo $_smarty_tpl->tpl_vars['entry']->value['name'];?>
]"> <?php echo iaSmarty::lang(array('key'=>'delete'),$_smarty_tpl);?>
</label>
									</div>
								<?php }?>
							<?php }?>

							<?php echo smarty_function_ia_html_file(array('name'=>$_smarty_tpl->tpl_vars['entry']->value['name'],'value'=>$_smarty_tpl->tpl_vars['entry']->value['value']),$_smarty_tpl);?>

						<?php }?>
					<?php } elseif ('checkbox'==$_smarty_tpl->tpl_vars['entry']->value['type']) {?>
						<div class="item-input">
							<input type="checkbox" name="v[<?php echo $_smarty_tpl->tpl_vars['entry']->value['name'];?>
]" id="<?php echo $_smarty_tpl->tpl_vars['entry']->value['name'];?>
">
						</div>
					<?php } elseif ('radio'==$_smarty_tpl->tpl_vars['entry']->value['type']) {?>
						<?php if ($_smarty_tpl->tpl_vars['custom']->value) {?>
							<div class="form-control disabled item-val"><?php if ($_smarty_tpl->tpl_vars['entry']->value['default']==1) {?>ON<?php } else { ?>OFF<?php }?></div>
						<?php }?>

						<div class="item-input">
							<?php echo smarty_function_html_radio_switcher(array('value'=>$_smarty_tpl->tpl_vars['entry']->value['value'],'name'=>$_smarty_tpl->tpl_vars['entry']->value['name'],'conf'=>true),$_smarty_tpl);?>

						</div>
					<?php } elseif ('select'==$_smarty_tpl->tpl_vars['entry']->value['type']) {?>
						<?php if ($_smarty_tpl->tpl_vars['custom']->value) {?>
							<div class="form-control disabled item-val"><?php if ($_smarty_tpl->tpl_vars['entry']->value['name']=='lang') {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['entry']->value['values'][$_smarty_tpl->tpl_vars['entry']->value['default']]['title'], ENT_QUOTES, 'UTF-8', true);?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['entry']->value['default'];?>
<?php }?></div>
						<?php }?>

						<div class="item-input">
							<select name="v[<?php echo $_smarty_tpl->tpl_vars['entry']->value['name'];?>
]" <?php if (count($_smarty_tpl->tpl_vars['entry']->value['values'])==1) {?> disabled="disabled"<?php }?> id="<?php echo $_smarty_tpl->tpl_vars['entry']->value['name'];?>
">
								<?php  $_smarty_tpl->tpl_vars['value2'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value2']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['entry']->value['values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value2']->key => $_smarty_tpl->tpl_vars['value2']->value) {
$_smarty_tpl->tpl_vars['value2']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value2']->key;
?>
									<?php if ('lang'==$_smarty_tpl->tpl_vars['entry']->value['name']) {?>
										<option value="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
"<?php if ($_smarty_tpl->tpl_vars['key']->value==$_smarty_tpl->tpl_vars['entry']->value['value']||$_smarty_tpl->tpl_vars['value2']->value==$_smarty_tpl->tpl_vars['entry']->value['value']) {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['value2']->value['title'];?>
</option>
									<?php } elseif (is_array($_smarty_tpl->tpl_vars['value2']->value)) {?>
										<optgroup label="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
">
											<?php  $_smarty_tpl->tpl_vars['subvalue'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['subvalue']->_loop = false;
 $_smarty_tpl->tpl_vars['subkey'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['value2']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['subvalue']->key => $_smarty_tpl->tpl_vars['subvalue']->value) {
$_smarty_tpl->tpl_vars['subvalue']->_loop = true;
 $_smarty_tpl->tpl_vars['subkey']->value = $_smarty_tpl->tpl_vars['subvalue']->key;
?>
												<option value="<?php echo $_smarty_tpl->tpl_vars['subkey']->value;?>
"<?php if ($_smarty_tpl->tpl_vars['subkey']->value==$_smarty_tpl->tpl_vars['entry']->value['value']) {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['subvalue']->value;?>
</option>
											<?php } ?>
										</optgroup>
									<?php } else { ?>
										<option value="<?php echo trim($_smarty_tpl->tpl_vars['value2']->value,"'");?>
"<?php if (trim($_smarty_tpl->tpl_vars['value2']->value,"'")==$_smarty_tpl->tpl_vars['entry']->value['value']) {?> selected<?php }?>><?php echo trim($_smarty_tpl->tpl_vars['value2']->value,"'");?>
</option>
									<?php }?>
								<?php } ?>
							</select>
						</div>
					<?php } elseif ($_smarty_tpl->tpl_vars['entry']->value['type']=='itemscheckbox'&&!$_smarty_tpl->tpl_vars['custom']->value) {?>
						<?php if (isset($_smarty_tpl->tpl_vars['entry']->value['items'])) {?>
							<div class="item-input">
								<input type="hidden" name="v[<?php echo $_smarty_tpl->tpl_vars['entry']->value['name'];?>
][]">
								<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['entry']->value['items']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['items']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['items']['iteration']++;
?>
									<p>
										<input type="checkbox" id="icb_<?php echo $_smarty_tpl->tpl_vars['entry']->value['name'];?>
_<?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['items']['iteration'];?>
" name="v[<?php echo $_smarty_tpl->tpl_vars['entry']->value['name'];?>
][]" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
"<?php if ($_smarty_tpl->tpl_vars['item']->value['checked']) {?> checked<?php }?>>
										<label for="icb_<?php echo $_smarty_tpl->tpl_vars['entry']->value['name'];?>
_<?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['items']['iteration'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</label>
									</p>
								<?php } ?>
							</div>
						<?php } else { ?>
							<div class="alert alert-info"><?php echo iaSmarty::lang(array('key'=>'no_implemented_packages'),$_smarty_tpl);?>
</div>
						<?php }?>
					<?php } elseif ('tpl'==$_smarty_tpl->tpl_vars['entry']->value['type']) {?>
						<?php if (file_exists($_smarty_tpl->tpl_vars['entry']->value['multiple_values'])) {?>
							<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['entry']->value['multiple_values'], $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

						<?php } else { ?>
							<?php echo iaSmarty::lang(array('key'=>'template_file_error','file'=>$_smarty_tpl->tpl_vars['entry']->value['multiple_values']),$_smarty_tpl);?>

						<?php }?>
					<?php }?>
					</div> <!-- /.col -->
					<?php if ($_smarty_tpl->tpl_vars['custom']->value) {?>
						<div class="col col-lg-2">
							<span class="btn btn-default set-custom" data-value="1"><?php echo iaSmarty::lang(array('key'=>'config_set_custom'),$_smarty_tpl);?>
</span>
							<span class="btn btn-default set-default" data-value="0"><?php echo iaSmarty::lang(array('key'=>'config_set_default'),$_smarty_tpl);?>
</span>
						</div>
					<?php }?>
				</div><!-- /.row -->
			<?php }?>
		<?php } ?>
	</div>

	<div class="form-actions">
		<input type="submit" name="save" id="save" class="btn btn-primary" value="<?php echo iaSmarty::lang(array('key'=>'save_changes'),$_smarty_tpl);?>
">
	</div>
</form>
<?php }?>

<?php echo iaSmarty::ia_print_js(array('files'=>'utils/edit_area/edit_area, ckeditor/ckeditor, admin/configuration'),$_smarty_tpl);?>
<?php }} ?>
