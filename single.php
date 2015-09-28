<?php /* Single Post Template */ ?>

<?php get_header(); ?>
<script type="text/javascript">
	jQuery(document).ready(function() {
		jQuery("#main").addClass("plain");
	});
</script>
<div class="holder">
	<div id="content">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<?php the_content(); ?>
		<?php endwhile; endif; ?>
	</div><!-- end content -->
	
	<?php get_sidebar(); ?>

</div> <!-- end holder -->

<?php get_footer(); ?>