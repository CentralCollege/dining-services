<?php /* Template Name: Homepage */ ?>

<?php get_header(); ?>

<div class="holder">
	<div id="content">
		<div class="vscrollable">
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<div class="post">
					<?php the_content(); ?>
				</div> <!-- end post -->
			<?php endwhile; endif; ?>
			<div class="widgets">
				<?php get_template_part('inc/theme/menu-catering-services')?>
			
				<?php get_template_part('inc/theme/news-events'); ?>
				
				<?php get_template_part('inc/theme/facebook-like'); ?>
			
			</div> <!-- end widgets -->
		</div>
	</div><!-- end content -->
	
	<?php get_sidebar(); ?>

</div> <!-- end holder -->

<?php get_footer(); ?>