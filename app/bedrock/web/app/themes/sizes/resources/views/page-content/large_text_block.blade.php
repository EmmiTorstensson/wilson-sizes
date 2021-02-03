<section class="page-section large-text-block bg-cover"
	@if( $content->background_image )
		style="background-image:url({{ $content->background_image['url'] }});"
	@endif>

	<div class="inner-container">
	
        <div class="text"> {!! $content->text !!} </div>

		<a href="{{ $content->page_link }}" class="link"> {{ $content->page_link_text }} </a>
	</div>
</section>