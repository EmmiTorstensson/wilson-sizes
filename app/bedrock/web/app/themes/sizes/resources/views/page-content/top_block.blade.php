<section class="page-section top-block bg-cover"
	@if( $content->background_image )
		style="background-image:url({{ $content->background_image['url'] }});"
	@endif
>

	<div class="inner-container">
		@if( $content->sub_headline )
			<p class="sub-headline">{{ $content->sub_headline }}</p>
		@endif
	
		<h1 class="headline">
			@if( $content->headline )
				{{ $content->headline }}
			@else
				{{ the_title() }}
			@endif
		</h1>
	
		@if( $content->more_link_text )
			<a href="{{ $content->more_link }}" class="link"> {{ $content->more_link_text }} </a>
		@endif
	</div>


</section>