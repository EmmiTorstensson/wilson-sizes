<section class="page-section lates-project-module">
	<div class="inner-container">

		@php               
            $args = array (
                'post_type' => 'projects',
                'posts_per_page' => 2,
                'orderby' => 'latest'
            );

			$the_query = new WP_Query( $args );
        @endphp


<div class="headline">
	@if( $content->headline )
		<h2>{{ $content->headline }}</h2>
	@endif
</div>
		<div class="place-box d-flex row">
		


			@foreach( $the_query->posts as $post )
				<div class="col-12 col-md-6 post-box">
						@php
							$fields = get_fields($post->ID)
						@endphp
			
						<div
							style="background-image:url({{ $fields['image'] }})"
							class="bg-cover img-box">
						</div>
			
						<div class="project-box">
			
			
							<h3>{{ get_the_title($post->ID) }}</h3>
							<p class="developer">{{ $fields['developer'] }}</p>
			
							<div class="d-flex facts">
								<div class="d-flex flex-column mr-5">
									<p class="font-weight-bold font-color">BTA</p>
									<p>{{ $fields['total_area'] }}</p>
								</div>
								<div class="column mr-5">
									<p class="font-weight-bold font-color">BOA</p>
									<p>{{ $fields['living_space'] }}</p>
								</div>
								<div class="column"><p class="font-weight-bold font-color">Lägenheter</p>
									<p>{{ $fields['apartments'] }}</p>
								</div>
							</div>
	
							<a href="{{ $fields['project_page_link'] }}" class="link"> {{ $fields['project_page_link_text'] }}</a>
						
						</div>
					</div>
					@endforeach
				</div>

		
		@if( $content->page_link )
			<a href="{{ $content->page_link }}" class="link">{{ $content->page_link_text }}</a>
		@endif

	</div>
</section>