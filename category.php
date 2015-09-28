<?php /* Template Name: News */ ?>

<?php get_header(); 
$cur_cat_id = get_cat_id( single_cat_title("",false) );

$args = array(
	'posts_per_page'	=>	'3',
	'paged'				=>	$paged,
	'cat'				=>	$cur_cat_id
);
$query = new WP_Query();
$query->query($args);

?>
<script type="text/javascript">
	jQuery(document).ready(function() {
		
		jQuery("#main").addClass("plain");
	});
</script>
<div class="holder">
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