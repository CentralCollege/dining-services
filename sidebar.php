<div id="sidebar">
	<?php
	if (!is_page_template('page-notebook.php') && !is_single() && !is_page('news-events') && !is_category()) {

		if (is_page('catering') || is_child('catering')) {
			/* load catering menu */
			wp_nav_menu(
				array(
					'menu' 				=>	'catering_menu',
					'menu_class'		=>	'nav-bar',
					'theme_location'	=>	'catering_menu',
					'link_before'		=>	'<span class="button-holder"><span class="button-frame">',
					'link_after'		=>	'</span></span>'
				));
		} else if (is_page('about') || is_child('about') ) {
			/* load about menu */
			wp_nav_menu(
				array(
					'menu' 				=>	'about_menu',
					'menu_class'		=>	'nav-bar',
					'theme_location'	=>	'about_menu',
					'link_before'		=>	'<span class="button-holder"><span class="button-frame">',
					'link_after'		=>	'</span></span>'
				));
		} else {
			/* if none of the above conditions are true, load menu feeds by default */

			// set feed to central market by default
			$feed = "https://api.central.edu/diningServices/centralmarket/index.cfm";
			$class = "central-market";
			if (is_page('central-market')) {
				$feed = "https://api.central.edu/diningServices/centralmarket/index.cfm";
				$class = "central-market";
			}
			if (is_page('the-cafe-at-geisler')) {
				// no feed for cafe
				$class = "cafe";
			}
			if (is_page('grand-central-station')) {
				$feed = "http://www.central.edu/api/diningservices/grandCentralStation/";
				$class="grand-central";
			}
		?>
			<h2 class="text-menu <?php if ($class) echo $class; ?>">central market menu</h2>

			<div id="info-part" class="v">
				<div id="left-part" class="v">
					<div class="text-box vscrollable">
						<?php
							if (is_page('the-cafe-at-geisler')) { ?>
								<h2 class="menu">Monday - Friday:</h2>
								<p>7 a.m - 5 p.m</p>
								<h2 class="menu">Saturday:</h2>
								<p>Closed</p>
								<h2 class="menu">Sunday:</h2>
								<p>6 p.m - 9 p.m</p>
<!-- 							 } else {
								getMenuWidget($feed);
							} -->
						
					</div>
				</div>
			</div>
	<?php }
	} ?>
</div> <!-- end sidebar -->
<div class="circle"></div>
<div class="spoon-top"></div>
<div class="spoon"></div>
<div class="fork"></div>
