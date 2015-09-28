<h2 class="sticker">
	<?php if (is_single() || is_page()) { ?>
		<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
	<?php }
		else if (is_category()) { 
			$cur_cat_id = get_cat_id( single_cat_title("",false) );
			$category_link = get_category_link( $cur_cat_id );
			?>
			<a href="<?php echo esc_url( $category_link ); ?>"><?php single_cat_title(); ?></a>
		<?php }
	?>
</h2>