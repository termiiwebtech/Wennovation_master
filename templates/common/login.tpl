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
		<form action="{$smarty.const.IA_URL}login/" method="post">
			{preventCsrf}

			<div class="form-group">
				<label for="field_login">{lang key='username_or_email'}:</label>
				<input class="form-control" type="text" tabindex="4" name="username" value="{if isset($smarty.post.username)}{$smarty.post.username|escape:'html'}{/if}">
			</div>

			<div class="form-group">
				<label for="field_password">{lang key='password'}:</label>
				<input class="form-control" type="password" tabindex="5" name="password">
			</div>

			<div class="form-group">
				<div class="checkbox">
					<label><input type="checkbox" name="remember"> {lang key='remember_me'}</label>
				</div>
			</div>

			<div class="form-group form-actions">
				<a class="btn btn-link pull-right" href="{$smarty.const.IA_URL}forgot/">{lang key='forgot'}</a>
				<button class="btn btn-primary" type="submit" tabindex="6" name="login">{lang key='login'}</button>
				<a class="btn btn-link" href="{$smarty.const.IA_URL}registration/" rel="nofollow">{lang key='registration'}</a>
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