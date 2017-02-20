<!DOCTYPE html>
<html lang="{$core.language.iso}" dir="{$core.language.direction}">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<title>{ia_print_title}</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="generator" content="Subrion CMS &middot; {$core.config.version}">
	<base href="{$smarty.const.IA_ADMIN_URL}">

	<!--[if lt IE 9]>
		<script src="../../../js/utils/shiv.js"></script>
		<script src="../../../js/utils/respond.min.js"></script>
	<![endif]-->

	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="{$img}ico/apple-touch-icon-144-precomposed.png">
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="{$img}ico/apple-touch-icon-114-precomposed.png">
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="{$img}ico/apple-touch-icon-72-precomposed.png">
	<link rel="apple-touch-icon-precomposed" href="{$img}ico/apple-touch-icon-57-precomposed.png">
	<link rel="shortcut icon" href="{$img}favicon.png">
	<link rel="shortcut icon" href="{$img}favicon.ico">

	{ia_print_css files='bootstrap' order=99}
	{ia_add_media files='jquery, subrion, js:admin/login' order=0}
	{ia_print_js files='_IA_TPL_bootstrap.min'}

	{ia_print_css display='on'}

	{ia_add_js order=0}
		{foreach $core.customConfig as $key => $value}
			intelli.config.{$key} = '{$value}';
		{/foreach}
	{/ia_add_js}
</head>
<body id="page-login" >

    
				<center><a href="http://www.termii.com/" class="logo"><img src="{$img}logo-symbol-150.png" style="margin-top: 5%;" alt="Termii CMS" title="Termii CMS"/></a></center>
	<div class="login-block effect-1">

				
		<div class="login-block-content">
			<div class="login-body">
				<!-- <p class="help-block">{lang key='login_to_text'}</p> -->
				{if isset($access_denied) && $access_denied}
					<div class="alert alert-danger">{lang key='access_denied'}</div>
				{/if}
				{if isset($error_login) && $error_login}
					<div class="alert alert-danger">{lang key='error_login'}</div>
				{/if}
				{if isset($empty_login) && $empty_login}
					<div class="alert alert-danger">{lang key='empty_login'}</div>
				{/if}

				<form method="post" class="sap-form">
					{preventCsrf}
					<p>
						<input type="text" id="username" name="username" tabindex="1" value="{if isset($smarty.post.username)}{$smarty.post.username|escape:"html"}{/if}" autofocus placeholder="{lang key='login'}">
					</p>
					<p>
						<input type="password" id="dummy_password" name="password" tabindex="2" placeholder="{lang key='password'}">
					</p>
					<div class="checkbox">
						<label><input type="checkbox" name="remember"{if isset($smarty.post.remember)} checked{/if}> {lang key='remember_me'}</label>
					</div>
					{if count($core.languages) > 1}
					<p>
						<select name="_lang" id="_lang">
							{foreach $core.languages as $code => $language}
								<option value="{$code}"{if $code == $smarty.const.IA_LANGUAGE} selected{/if}>{$language.title}</option>
							{/foreach}
						</select>
					</p>
					{/if}
					<input type="submit" class="btn btn-primary" tabindex="3" value="{lang key='login'}">
					<a href="#" class="btn btn-link" id="js-forgot-dialog">{lang key='forgot_password'}</a>
				</form>
			</div>
			<div class="js-login-body-forgot-password">
				<form method="post" class="sap-form">
					<div class="alert" style="display: none;">{lang key='error_email_incorrect'}</div>
					{preventCsrf}
					<p class="help-block">{lang key='restore_password'}</p>
					<p>
						<input type="text" id="email" name="email" tabindex="1" placeholder="{lang key='type_email_here'}">
					</p>
					<input id="js-forgot-submit" type="submit" class="btn btn-primary" tabindex="2" value="{lang key='go'}">
					<input  id="js-forgot-dialog-close" type="submit" class="btn btn-link" tabindex="3" value="{lang key='cancel'}">
				</form>
			</div>
			<a href="{$smarty.const.IA_URL}" class="back-to-home"><span>←</span> {lang key='back_to_homepage'}</a>
		</div>
	</div>

	{ia_hooker name='smartyAdminFooterBeforeJsDisplay'}
	{ia_print_js display='on'}
	{ia_hooker name='smartyAdminFooterAfterJsDisplay'}

</body>
</html>