{if isset($gmap)}
	<div id="js-gm-canvas" style="height: 300px"></div>
	<div style="display: none" id="js-gm-data" data-skin="{$gmap.style}"{if $gmap.location} data-location="{$gmap.location|escape:'html'}"{/if}>{$gmap.items}</div>

	<script src="https://maps.googleapis.com/maps/api/js?v=3.14&language={$gmap.language}"></script>
	{ia_print_js files='_IA_URL_plugins/gmap/js/frontend/loader'}
{/if}