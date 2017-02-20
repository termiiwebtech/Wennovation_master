{if isset($item.item) && in_array($item.item, explode(',', $core.config.gmap_items_enabled))}
	<script type="text/javascript" src="http://maps.google.com/maps/api/js?{if $core.config.gmap_api_key}key={$core.config.gmap_api_key}{/if}"></script>
	<div class="gmap-data hidden" id="item-gmap-data">
		<input type="hidden" name="longitude" value="{if isset($smarty.post.longitude)}{$smarty.post.longitude}{elseif isset($item.longitude)}{$item.longitude}{/if}">
		<input type="hidden" name="latitude" value="{if isset($smarty.post.latitude)}{$smarty.post.latitude}{elseif isset($item.latitude)}{$item.latitude}{/if}">
	</div>

	<label id="js-gmap-annotation" class="hidden">{lang key='drag_and_drop_marker'}</label>
	<div id="js-gmap-renderer" class="m-b hidden" style="height: 250px;"></div>

	{ia_print_css files='_IA_URL_plugins/gmap/templates/front/css/style'}
	{ia_print_js files='_IA_URL_plugins/gmap/js/frontend/manage-google-map' order=3}
{/if}