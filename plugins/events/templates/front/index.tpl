

<!-- Page Banner Start -->
<div id="page_banner" class="m-b-20">
    <div class="container">
		<div class="page-header text-center">
          <h2>WennoEvents</h2>
          <h4 class="color_white">We help new and startup companies to develop by trainings, workshops and events.</h4>
        </div>
    </div>
</div>
<!-- Page Banner End -->



    <!-- Project Details Start -->
    <section id="solution" class="p-t-10 p-b-10">
        <div class="container">
                                        
        
<div class="row" >
    <center>
        
    </center>

<div class="col-md-8">
<div style="padding: 5%;">
    
{ia_blocks block='teaser'}
{if isset($items) && $items}
    
    
{if isset($items) && $items && isset($term)}
	<div class="info m-b text-i">{lang key='listings_found'}: <b>{$paginator.total}</b></div>
{/if}
                <hr class="hrr">
	<div class="ia-items events" style="padding: 5%;">

		{foreach $items as $event}

			<div class="media ia-item ia-item--border event">
				{if $event.image}
					<a href="{$event.url}" class="media-object pull-left">{printImage imgfile=$event.image width=100 height=100 class='img-rounded img-responsive'}</a>
				{else}
					<a href="{$event.url}" class="media-object pull-left"><img src="{$smarty.const.IA_CLEAR_URL}plugins/events/templates/front/img/preview-image.png" alt="{$event.title}" width="100" height="100" class="img-rounded img-responsive"></a>
				{/if}

				<div class="media-body">
					<h3 class="media-heading">
						<a href="{$event.url}">{$event.title}</a>
					</h3>
					<div class="media-date">
						{if $event.date_end|strtotime > $smarty.server.REQUEST_TIME}
							<span class="text-success"><span class="fa fa-clock-o"></span> {$event.date} - {$event.date_end}</span>
						{else}
							<span class="fa fa-clock-o"></span> {$event.date} - {$event.date_end}
						{/if}
						{if $event.venue}, <br><span class="fa fa-map-marker"></span> {$event.venue}{/if}
					</div>

					{$event.description|strip_tags|truncate:300:"..."}
				</div>
                <hr class="hrr">
			</div>
		{/foreach}
	</div>
	{navigation aTotal=$paginator.total aTemplate=$paginator.template aItemsPerPage=$paginator.limit aNumPageItems=5 aTruncateParam=1}

{else}
	<div class="message alert bg-warning">{lang key='no_events'}</div>
{/if}
    </div>
</div>
    <div class="col-md-4 col-sm-12 col-xs-12">
                
                <div class="form_left p-t-10">
                    
                   	<div class="updates">
                        	<p>Subscribe to our newsletters to receive latest news and updates. </p>
                            <form>
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

                        </div>
         </section>
{ia_print_css files='_IA_URL_plugins/events/templates/front/css/style'}
