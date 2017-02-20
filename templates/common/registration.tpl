<!-- Page Banner Start -->
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
    {ia_blocks block='left'}
    </div>

</div>
  
<div class="col-md-8">
    
<div style="background: #fcfcfc !important;padding: 2%;">
<div class="row">
	<div class="col-md-{if $core.providers}8{else}12{/if}">
		<p>{lang key='registration_annotation'}</p>

		<form method="post" action="{$smarty.const.IA_SELF}" enctype="multipart/form-data" class="ia-form ia-form--bordered">
			{preventCsrf}

			{include file='plans.tpl' item=$tmp}

			{include file='field-type-content-fieldset.tpl' item_sections=$sections item=$tmp}

			<div class="fieldset">
				<div class="fieldset__header">{lang key='password'}</div>
				<div class="fieldset__content">
					<div class="checkbox">
						<label>
							<input type="checkbox" name="disable_fields" id="disable_fields" value="1"{if isset($smarty.post.disable_fields) && $smarty.post.disable_fields} checked{/if}> {lang key='auto_generate_password'}
						</label>
					</div>

					<div id="pass_fieldset" {if isset($smarty.post.disable_fields) && 1 == $smarty.post.disable_fields}style="display: none;"{/if}>
						<div class="form-group">
							<label for="pass1">{lang key='your_password'}:</label>
							<input class="form-control" type="password" name="password" id="pass1" value="{if isset($tmp.password)}{$tmp.password}{/if}">
						</div>
						<div class="form-group">
							<label for="pass2">{lang key='your_password_confirm'}:</label>
							<input class="form-control" type="password" name="password2" id="pass2" value="{if isset($tmp.password)}{$tmp.password}{/if}">
						</div>
					</div>
				</div>
			</div>

			{include file='captcha.tpl'}

			<div class="fieldset__actions">
				<button type="submit" name="register" class="btn btn-success">{lang key='registration'}</button>
			</div>
		</form>
	</div>
	{if $core.providers}
		<div class="col-md-4">
			<div class="social-providers">
				<p>{lang key='login_with_social_network'}:</p>
				{foreach $core.providers as $name => $provider}
					<a class="btn btn-block btn-social btn-{$name|lower}" href="{$smarty.const.IA_URL}login/{$name|lower}/"><span class="fa fa-{$name|lower}"></span> {$name}</a>
				{/foreach}
			</div>
		</div>
	{/if}
</div>
    </div>
    </div>
</div>
        </div>
</section>
{ia_print_js files='frontend/registration'}