<div class="widget">
	<div class="heading">
		<h2><a href="<?php echo get_permalink( get_page_by_path( 'catering' )) ?>">CATERING SERVICES</a></h2>
	</div>
	<?php
		wp_nav_menu( 
			array(
			'menu' 				=>	'catering_menu',
			'menu_class'		=>	'navigation',
			'theme_location'	=>	'catering_menu'
		));
	?>
</div>