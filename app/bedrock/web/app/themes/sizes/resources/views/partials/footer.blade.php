<footer class="sizes-footer">

  <div class="d-flex inner-container">
	
	@if( get_field('logo_white', 'options') )
		<a href="{{ home_url() }}">
			<div 
				style="background-image: url( {{ get_field('logo_white', 'options')['url']  }} );"
				class="company-logo">
			</div>
		</a>
	@endif
	
	<div class="d-flex justify-content-around info-container">

		<div class="adress">
			<p class="headline">Besöksadress</p>
			{!! get_field('address', 'options') !!}
		</div>
		
		<div class="footer-nav">
			<?php 
				wp_nav_menu(   
					array ( 
						'theme_location' => 'footer-menu' 
					) 
				); 
			?>
		</div>
	
		<div class="social-links">
			<p class="headline">Följ Oss</p>
			
		</div>
	</div>
  </div>

</footer>