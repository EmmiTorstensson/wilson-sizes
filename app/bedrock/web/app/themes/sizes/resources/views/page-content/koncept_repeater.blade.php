<section class="text-center page-section koncept-repeater">

	<div class="inner-container">

		<div class="d-flex koncept">

			@foreach ( $content->koncept as $koncept)
			<div class="d-flex flex-column align-self-start col-12 col-md-4 single-koncept">
				<img src="{{ $koncept['icon'] }}" alt="" class="icon">
				<h2>{{ $koncept['headline'] }}</h2>
				<p>{{ $koncept['info_text'] }}</p>
			</div>
			@endforeach
		</div>
	
		@if( $content->link_text )
			<a href="{{ $content->learn_more_page_link }}" class="link link-center"> {{$content->link_text }} </a>
		@endif

	</div>
	
</section>