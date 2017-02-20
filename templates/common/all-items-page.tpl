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
            <div class="ia-items">
	{foreach $all_items as $item}
		<div class="media ia-item ia-item-bordered">
			{if !empty($item.title)}
				{ia_url item=$all_item_type data=$item type='link' text=$item.title}
			{/if}

			{foreach $all_item_fields as $field}
				{if 'plan_id' != $field.name}
					{include file='field-type-content-view.tpl' wrappedValues=true}
				{/if}
			{/foreach}

			<div class="ia-item-panel">
				{ia_url item=$all_item_type data=$item type='icon' classname='btn-info'}

				{if $member}
					{printFavorites item=$item itemtype=$all_item_type classname='btn-info'}
					{accountActions item=$item itemtype=$all_item_type classname='btn-info'}
				{/if}
			</div>
		</div>
	{/foreach}
</div>
        </div>
</section>