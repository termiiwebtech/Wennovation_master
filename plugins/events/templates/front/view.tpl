
<!-- Page Banner Start -->
<div id="page_banner" class="m-b-20">
    <div class="container">
		<div class="page-header text-center">
          <h2>Upcoming Events</h2>
          <h4 class="color_white">We help new and startup companies to develop by trainings, workshops and events.</h4>
        </div>
    </div>
    <center><a href="events" class="btn-light">Return to events</a> <a class="btn-light">or Call (+234) 0909-000-2647 for enquiry</a></center>
</div>
<!-- Page Banner End -->



    <!-- Project Details Start -->
    <section id="solution" class="p-t-10 p-b-10">
         
        <div class="container">
            
<div class="event-view">
    
    <div class="col-md-4 col-sm-12 col-xs-12">
	{if $item.image}
		<div class="event-view__image m-b">
			<div class="ia-item-image">{printImage imgfile=$item.image fullimage=true class='img-responsive'}</div>
		</div>
	{/if}
    </div>
        
        
    <div class="col-md-8 col-sm-12 col-xs-12">

					<h3 class="media-heading event-view__top">
						<a href="{$event.url}">{$item.title}</a>
					</h3>
	<div class="event-view__text m-b">
		{$item.description}
	</div>

	<div class="event-view__date m-b">
		{if $item.date_end|strtotime > $smarty.server.REQUEST_TIME}
			<span class="text-success"><span class="fa fa-clock-o"></span> {$item.date} - {$item.date_end}
		{else}
			<span class="fa fa-clock-o"></span> {$item.date} - {$item.date_end}
		{/if}
	</div>

	{if $item.venue}
		<div id="event-venue-box" class="event-view__venue m-b">
			<p><span class="fa fa-map-marker"></span> {$item.venue}</p>
			<input type="hidden" id="event-venue" value="{$item.venue}">
			<input type="hidden" name="longitude" value="{if isset($item.longitude)}{$item.longitude}{/if}">
			<input type="hidden" name="latitude" value="{if isset($item.latitude)}{$item.latitude}{/if}">

			<div id="event-gmap"></div>
		</div>
	{/if}
        </div>
</div>

<div class="ia-item__panel">
	<!-- AddThis Button BEGIN -->
	<div class="addthis_toolbox addthis_default_style ia-item__panel__item pull-left">
		<a class="addthis_counter addthis_pill_style"></a>
	</div>
	<script type="text/javascript">var addthis_config = { "data_track_addressbar":true };</script>
	<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5228073734bf0c90"></script>
	<!-- AddThis Button END -->

	<span class="ia-item__panel__item pull-right">
		<span class="fa fa-user"></span>
		{if $item.owner}
			{lang key='published_by'}
			{ia_url item='members' data=$item.owner text=$item.owner_fullname}
		{else}
			<i>{lang key='guest'}</i>
		{/if}
	</span>
</div>

            </div>
        </div>
</section>
{ia_print_css files='_IA_URL_plugins/events/templates/front/css/style'}
{ia_print_js files='_IA_URL_plugins/events/js/frontend/view'}
