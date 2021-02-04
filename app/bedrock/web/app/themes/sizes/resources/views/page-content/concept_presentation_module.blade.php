<section 
	class="page-section concept-presentation-module 
	@include( 'page-content.padding' )"
>

	<div class="d-flex inner-container  
		@if($content->reverse)
			flex-row-reverse
		@endif
		">

		<div class="col-12 col-md-6 bg-cover image-container"
			@if( $content->image )
				style="background-image:url({{ $content->image['url'] }});"
			@endif
		>

		</div>

		<div class="col-12 col-md-6 d-flex flex-column justify-content-center text-box">
			<h2 class="headline">
				@if( $content->headline )
					{{ $content->headline }}
				@endif
			</h2>		
			<div class="text"> 
				@if( $content->text )
					{!! $content->text !!} 
				@endif
			</div>

			<div> 
				@if( $content->link )
					<a class="link" href="{{ $content->link['url'] }}">{{ $content->link['title'] }}</a>
				@endif
			</div>
		
		</div>

	</div>
</section>