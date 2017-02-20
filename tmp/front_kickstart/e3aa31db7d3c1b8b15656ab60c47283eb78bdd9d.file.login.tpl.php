<?php /* Smarty version Smarty-3.1.19, created on 2017-02-15 18:34:36
         compiled from "/home/getmailout/public_html/wenno/templates/common/login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:168834246458a4912c401123-50299753%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e3aa31db7d3c1b8b15656ab60c47283eb78bdd9d' => 
    array (
      0 => '/home/getmailout/public_html/wenno/templates/common/login.tpl',
      1 => 1486621686,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '168834246458a4912c401123-50299753',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'core' => 0,
    'name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58a4912c4f63a1_39273026',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58a4912c4f63a1_39273026')) {function content_58a4912c4f63a1_39273026($_smarty_tpl) {?><!-- Page Banner Start -->
<div id="page_banner" class="m-b-20">
    <div class="container">
		<div class="page-header text-center">
          <h2>Membership</h2>
          <h4 class="color_white">We provide a shared work environment where people meet, work, network, share ideas and collaborate on projects.</h4>
        </div>
    </div>
</div>
<!-- Page Banner End -->



    <!-- Project Details Start -->
    <section id="solution" class="p-t-10 p-b-10">
        <div class="container">
<div class="row">  
    
<div class="col-md-3">
    
<div style="background: #fcfcfc !important;padding: 2%;">
    <?php echo iaSmarty::ia_blocks(array('block'=>'left'),$_smarty_tpl);?>

    </div>

</div>
  
<div class="col-md-8">
    
<div style="background: #fcfcfc !important;padding: 2%;">
<div class="row">
	<div class="col-md-<?php if ($_smarty_tpl->tpl_vars['core']->value['providers']) {?>8<?php } else { ?>12<?php }?>">
		<form action="<?php echo @constant('IA_URL');?>
login/" method="post">
			<?php echo iaSmarty::preventCsrf(array(),$_smarty_tpl);?>


			<div class="form-group">
				<label for="field_login"><?php echo iaSmarty::lang(array('key'=>'username_or_email'),$_smarty_tpl);?>
:</label>
				<input class="form-control" type="text" tabindex="4" name="username" value="<?php if (isset($_POST['username'])) {?><?php echo htmlspecialchars($_POST['username'], ENT_QUOTES, 'UTF-8', true);?>
<?php }?>">
			</div>

			<div class="form-group">
				<label for="field_password"><?php echo iaSmarty::lang(array('key'=>'password'),$_smarty_tpl);?>
:</label>
				<input class="form-control" type="password" tabindex="5" name="password">
			</div>

			<div class="form-group">
				<div class="checkbox">
					<label><input type="checkbox" name="remember"> <?php echo iaSmarty::lang(array('key'=>'remember_me'),$_smarty_tpl);?>
</label>
				</div>
			</div>

			<div class="form-group form-actions">
				<a class="btn btn-link pull-right" href="<?php echo @constant('IA_URL');?>
forgot/"><?php echo iaSmarty::lang(array('key'=>'forgot'),$_smarty_tpl);?>
</a>
				<button class="btn btn-primary" type="submit" tabindex="6" name="login"><?php echo iaSmarty::lang(array('key'=>'login'),$_smarty_tpl);?>
</button>
				<a class="btn btn-link" href="<?php echo @constant('IA_URL');?>
registration/" rel="nofollow"><?php echo iaSmarty::lang(array('key'=>'registration'),$_smarty_tpl);?>
</a>
			</div>
		</form>
	</div>
	<?php if ($_smarty_tpl->tpl_vars['core']->value['providers']) {?>
		<div class="col-md-4">
			<div class="social-providers">
				<p><?php echo iaSmarty::lang(array('key'=>'login_with_social_network'),$_smarty_tpl);?>
:</p>
				<?php  $_smarty_tpl->tpl_vars['provider'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['provider']->_loop = false;
 $_smarty_tpl->tpl_vars['name'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['core']->value['providers']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['provider']->key => $_smarty_tpl->tpl_vars['provider']->value) {
$_smarty_tpl->tpl_vars['provider']->_loop = true;
 $_smarty_tpl->tpl_vars['name']->value = $_smarty_tpl->tpl_vars['provider']->key;
?>
					<a class="btn btn-block btn-social btn-<?php echo mb_strtolower($_smarty_tpl->tpl_vars['name']->value, 'UTF-8');?>
" href="<?php echo @constant('IA_URL');?>
login/<?php echo mb_strtolower($_smarty_tpl->tpl_vars['name']->value, 'UTF-8');?>
/"><span class="fa fa-<?php echo mb_strtolower($_smarty_tpl->tpl_vars['name']->value, 'UTF-8');?>
"></span> <?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</a>
				<?php } ?>
			</div>
		</div>
	<?php }?>
</div>
    </div>
    </div>
</div>
        </div>
</section><?php }} ?>
