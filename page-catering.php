<?php /* Template Name: Catering */ ?>

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
		</div>
	</div><!-- end content -->
	
	<?php get_sidebar(); ?>

</div> <!-- end holder -->

<?php get_footer(); ?>