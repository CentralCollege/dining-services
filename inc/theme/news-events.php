<?php

if (is_page('central-market') || is_page('freds') || is_page('the-cafe-at-geisler')) {
	return;
}

?>
<div class="widget">
	<div class="heading">
		<h2><a href="<?php echo get_permalink( get_page_by_path( 'about/news-events' )) ?>">NEWS / EVENTS</a></h2>
	</div>
	<ul class="navigation">
		<?php
			$args = array(
				'numberofposts'	=>	'2',
				'orderby' 		=> 	'post_date',
			);
			$recent_posts = wp_get_recent_posts($args);
			foreach( $recent_posts as $recent ){
					echo '<li><a href="' . get_permalink($recent["ID"]) . '" title="'.$recent["post_title"].'" >' .   $recent["post_title"].'</a> </li> ';
				}
		?>
        <li><a href="/diningservices/about/hours-of-operation">Hours of Operation</a></li>
	</ul>
</div>