<?php /* Template Name: Interior */ ?>

<?php get_header(); ?>

<div class="holder">
	<?php get_template_part('inc/theme/sticker')?>
	<div id="content">
		<div class="vscrollable">
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<div class="post">
					<?php the_content(); ?>
				</div> <!-- end post -->
			<?php endwhile; endif; ?>
			<?php if (!is_page('about') && (!is_page('management-staff'))) { ?>
				<div class="widgets">
					<?php get_template_part('inc/theme/cafe-buttons')?>
					<?php get_template_part('inc/theme/news-events'); ?>
				</div> <!-- end widgets -->
			<?php } ?>
		</div>
	</div><!-- end content -->
	
	<?php get_sidebar(); ?>

</div> <!-- end holder -->

<?php get_footer(); ?>