<section class="page-section lates-project-module">
	<div class="d-flex inner-container">

		@php               
            $args = array (
                'post_type' => 'projects',
                'posts_per_page' => -1,
                'orderby' => 'rand'
            );

            $the_query = new WP_Query( $args );
        @endphp

		<div class="div1">

			@if( $content->headline )
			<h2>{{ $content->headline }}</h2>
		@endif
		</div>

		<div class="div2">

			@if( $content->page_link )
				<a href="{{ $content->page_link }}" class="link">{{ $content->page_link_text }}</a>
			@endif
		</div>


		


		@foreach( $the_query->posts as $post )

			<div class="col-12 col-md-6 project-box">
				@php
					$fields = get_fields($post->ID)
				@endphp

				<p>{{ $fields['developer'] }}</p>
			
			</div>
		@endforeach


	</div>
</section>