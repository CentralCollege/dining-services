<?php

/* Template Part: header intro */

?>

<?php 
	if (is_page_template('page-notebook.php') || is_single() || is_page_template('page-blog.php') ) { ?>
		<img src="<?php bloginfo('template_directory')?>/img/img6.jpg" width="1249" height="264" alt="Central Dining"/>
<?php 
	}
	else if (is_home() || is_front_page() || is_404()) { /* if homepage load slider */?>
		<div class="gallery-holder">
			<ul>
				<li><img src="<?php bloginfo('template_directory')?>/img/header1.jpg" width="1235" height="264" alt="Central Dining" /></li>
				<li><img src="<?php bloginfo('template_directory')?>/img/header2.jpg" width="1235" height="264" alt="Central Dining" /></li>
				<li><img src="<?php bloginfo('template_directory')?>/img/header3.jpg" width="1235" height="264" alt="Central Dining" /></li>
				<li><img src="<?php bloginfo('template_directory')?>/img/header4.jpg" width="1235" height="264" alt="Central Dining" />/li>
			</ul>
		</div>
		<ul class="swicher">
			<li class="active"><a href="#">1</a></li>
			<li><a href="#">2</a></li>
			<li><a href="#">3</a></li>
			<li><a href="#">4</a></li>
		</ul>
<?php 
	}
	else if (has_post_thumbnail() ) {
		the_post_thumbnail('banner');
	}
	else { ?>
		<img src="<?php bloginfo('template_directory')?>/img/img3.jpg" width="1221" height="264" alt="Central Dining"/>
<?php
	}
?>