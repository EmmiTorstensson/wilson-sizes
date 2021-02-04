<header class="navigation d-flex justify-content-between align-items-center">

	<div class="nav-logo">
		<a href="{{ home_url() }}">
			<div 
				style="background-image: url( {{ get_field('logo', 'options')['url']  }} );"
				class="bg-cover company-logo"></div>
		</a>
	</div>

	<nav class="nav-primary">
		@if (has_nav_menu('primary_navigation'))
			{!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!}
		@endif

	</nav>

</header>
