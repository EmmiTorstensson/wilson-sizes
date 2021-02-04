<footer class="sizes-footer">

  <div class="inner-container">
	<div class="d-flex top-box">
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

	<div class="d-flex justify-content-between align-items-center bottom-box">
		<div class="eu-box">
			<a href="{{ get_field('link_to_eu_info', 'options') }}">
				<div 
					style="background-image: url( {{ get_field('eu_declaration', 'options')['url']  }} );"
					class="bg-cover eu-flag">
				</div>
			</a>
		</div>


		<p class="copyright"> {{ get_field('copyright_declaration', 'options') }} </p>

	</div>
  </div>

</footer>