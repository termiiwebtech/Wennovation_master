
         {ia_blocks block='verytop'}

    <!-- Project Details Start -->
    <section id="solution" class="p-t-10 p-b-10">
        <div class="container">

            <div class="col-md-8 col-sm-12 p-b-10">
                <div class="heading">
                      <div class="heading_border bg_red"></div>
                      <p>Contact Us</p>
                      <h2>WE WANT TO <span class="color_red">HEAR FROM YOU</span></h2>
                    </div>
                <div class="row p-t-40">

<form action="{$smarty.const.IA_URL}contacts/" method="post" id="contact" class="ia-form">
	{preventCsrf}

	<div class="form-group">
		<label for="name">{lang key='fullname'}: <span class="required">*</span></label>
		<input class="form-control" type="text" name="name" id="contact-name" value="{if isset($smarty.post.name)}{$smarty.post.name}{/if}">
	</div>

	<div class="form-group">
		<label for="email">{lang key='email'}: <span class="required">*</span></label>
		<input class="form-control" type="text" name="email" id="contact-email" value="{if isset($smarty.post.email)}{$smarty.post.email}{/if}">
	</div>

	<div class="form-group">
		<label for="phone">{lang key='phone'}:</label>
		<input class="form-control" type="text" name="phone" id="contact-phone" value="{if isset($smarty.post.phone)}{$smarty.post.phone}{/if}">
	</div>

	{if !empty($subjects)}
		<div class="form-group">
			<label for="subject">{lang key='subject'}:</label>
			<select class="form-control" name="subject" id="contact-subject">
				<option>{lang key='_select_'}</option>
				{foreach $subjects as $subject}
					<option value="{lang key=$subject default=$subject}">{lang key=$subject default=$subject}</option>
				{/foreach}
			</select>
		</div>
	{/if}

	<div class="form-group">
		<label for="msg">{lang key='contact_reason'}: <span class="required">*</span></label>
		<textarea class="form-control" id="msg" name="msg" rows="5">{if isset($smarty.post.msg)}{$smarty.post.msg}{/if}</textarea>
		{ia_add_js}
$(function()
{
	$('#msg').dodosTextCounter('500', { counterDisplayElement: 'span', counterDisplayClass: 'textcounter_msg' });
	$('.textcounter_msg').addClass('textcounter').wrap('<p class="help-block text-right"></p>').before('{lang key='chars_left'} ');
});
		{/ia_add_js}
		{ia_print_js files='jquery/plugins/jquery.textcounter'}
	</div>
	
	{include file='captcha.tpl'}

	<div class="form-actions">
		<input type="submit" class="btn btn-primary" value="{lang key='send'}">
	</div>
</form>
                </div>
            </div>
            
            
             <div class="col-md-4 col-sm-12 col-xs-12">
                
                <div class="form_left p-t-80">
                    <div class="over_image"><img src="images/update_bg.png" alt="image"/></div>
                    
                   	<div class="updates">
                        	<p>Subscribe to our newsletters to receive latest news and updates. </p>
                            <form class="p-t-25">
                            	<div class="col-md-12">
                            		<input type="text" placeholder="Name">
                                </div>
                                <div class="col-md-10">
                                	<input type="email" class="email" placeholder="Email">
                                </div>
                                <div class="col-md-2">
                                	<input type="submit" class="submit" value="">
                                    <span><a href="#"><i class="icon-mail-envelope-closed3"></i></a></span>
                                </div>
                            </form>
                        </div>
                           
                    
                        <div class="social-icons_1 p-t-30">
                            <ul>
                                <li><a href="https://web.facebook.com/wennovationhub/"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="https://twitter.com/wennovation/"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="https://www.instagram.com/wennovation/"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                            </ul>

                        </div>
             </div>
                 
             
        </div>
        </div>
</section>

{ia_print_css files='_IA_URL_plugins/contact_us/templates/front/style'}
