<section class="page-section blog-post-repeater background-{{ $content->background_color ?? "white" }}">

	<div class="inner-container">

		
		@php   
	
	$args = array (
		'post_type' => 'post',
		'posts_per_page' => 3,
		'orderby' => 'latest'
	);
	
	$the_query = new WP_Query( $args );
	
	@endphp	
			
			
			@foreach( $the_query->posts as $post )
			<div class="post">
			
				@php $fields = get_fields($post->ID) @endphp
	
				<p class="post-date">{{ get_the_date($post->DATE) }}</p>

				<h2 class="post-title">{{ get_the_title($post->ID) }}</h2>

				<a href="{{ get_permalink($post->ID)}}" class="link">{{ $content->link_text }}</a>
	
	
			</div>
			@endforeach
			
	</div>
	
</section>