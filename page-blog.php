<?php /* Template Name: News */ ?>

<?php get_header(); 

$query = new WP_Query();
$query->query('posts_per_page=3'.'&paged='.$paged);

?>
<script type="text/javascript">
	jQuery(document).ready(function() {
		
		jQuery("#main").addClass("plain");
	});
</script>
<div class="holder">
	<?php get_template_part('inc/theme/sticker')?>
	<div id="content" class="blog">
		<div class="vscrollable">
			<?php if ( $query->have_posts() ) : while (  $query->have_posts() ) :  $query->the_post(); ?>
				<div class="post">
					<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
					<p><em>published on <?php the_date(); ?> under <?php the_category(','); ?></em></p>
					<?php the_content(); ?>
				</div>
			<?php endwhile; endif; ?>
			<div class="navigation">
			    <div class="alignleft"><?php previous_posts_link('&laquo; Previous') ?></div>
	       		<div class="alignright"><?php next_posts_link('More &raquo;') ?></div>
	        </div>
		</div>
	</div><!-- end content -->
	
	<?php get_sidebar(); ?>

</div> <!-- end holder -->

<?php
	$query = null;
	get_footer(); 
?>