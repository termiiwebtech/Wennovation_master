  
<div class="row">  
    
<div class="col-md-3">
    
<div style="background: #fcfcfc !important;padding: 2%;">
    {ia_blocks block='left'}
    </div>

</div>
  
<div class="col-md-8">
    
<div style="background: #fcfcfc !important;padding: 2%;">
{if isset($blog_entry)}

                  <div class="row"> 
                  <div class="col-md-4" style="padding: 2%;">
	{if $blog_entry.image}
		{printImage imgfile=$blog_entry.image title=$blog_entry.title|escape:'html' class='img-responsive m-b'}
	{/if}
                      </div> 
                  <div class="col-md-8">
                      
	<p class="text-i text-fade-50">{lang key='posted_on'} {$blog_entry.date_added|date_format:$core.config.date_format} {lang key='by'} {$blog_entry.fullname}</p>
                      
	{$blog_entry.body}

	<div class="tags">
		<span class="fa fa-tags"></span>
		{if $tags}
			{lang key='tags'}:
			{foreach $tags as $tag}
				<a href="{$smarty.const.IA_URL}tag/{$tag.alias}">{$tag.title|escape:'html'}</a>{if !$tag@last}, {/if}
			{/foreach}
		{else}
			{lang key='no_tags'}
		{/if}
                      </div>
                      </div>
	</div>

	<hr>
	<!-- AddThis Button BEGIN -->
	<div class="addthis_toolbox addthis_default_style">
		<a class="addthis_button_facebook_like" fb:like:layout="button_count"></a>
		<a class="addthis_button_tweet"></a>
		<a class="addthis_button_pinterest_pinit"></a>
		<a class="addthis_button_google_plusone" g:plusone:size="medium"></a>
		<a class="addthis_counter addthis_pill_style"></a>
	</div>
	<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=xa-5170da8b1f667e6d"></script>
	<!-- AddThis Button END -->
{else}
	{if $blog_entries}
		<div class="ia-items blogroll">
			{foreach $blog_entries as $blog_entry}
				<div class="ia-item"> 
                  <div class="row"> 
                  <div class="col-md-4" style="padding: 2%;">
					{if $blog_entry.image}
						<a href="{$smarty.const.IA_URL}blog/{$blog_entry.id}-{$blog_entry.alias}" class="ia-item__image">{printImage imgfile=$blog_entry.image title=$blog_entry.title}</a>
					{/if}
                    </div>
                      
                   <div class="col-md-8">
					<div class="ia-item__content">
						<h4 class="ia-item__title">
							<a href="{$smarty.const.IA_URL}blog/{$blog_entry.id}-{$blog_entry.alias}">{$blog_entry.title|escape:'html'}</a>
						</h4>
						<div class="ia-item__additional">
							<p><span class="fa fa-tags"></span>
							{if $tags}
								{$tagsExist=0}
								{foreach $tags as $tag}
									{if $blog_entry.id == $tag.blog_id}
										{$tagsExist = $tagsExist + 1}
									{/if}
								{/foreach}
								{if $tagsExist != 0}
									{foreach $tags as $tag}
										{if $blog_entry.id == $tag.blog_id}
											<a href="{$smarty.const.IA_URL}tag/{$tag.alias}">{$tag.title|escape: 'html'}</a>
										{/if}
									{/foreach}
								{else}
									{lang key='no_tags'}
								{/if}

							{else}
								{lang key='no_tags'}
							{/if}
							</p>
							<p>{lang key='posted_on'} {$blog_entry.date_added|date_format:$core.config.date_format} {lang key='by'} {$blog_entry.fullname}</p>
						</div>
						<div class="ia-item__body">{$blog_entry.body|strip_tags|truncate:$core.config.blog_max:'...'}</div>
					</div>
                    </div>
				</div>
            </div>
			{/foreach}
		</div>

		{navigation aTotal=$pagination.total aTemplate=$pagination.template aItemsPerPage=$core.config.blog_number aNumPageItems=5}
	{else}
		<div class="alert alert-info">{lang key='no_blog_entries'}</div>
	{/if}
{/if}
    </div>
</div>
    
</div>