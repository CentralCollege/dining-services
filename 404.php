<?php get_header(); ?>

<div class="holder">
	<div id="content">
		<div class="vscrollable">
			<div class="post">
				<h1>Sorry, this page isn't on the menu.</h1><br />
				<img src="http://img.centralcollege.info/templateImages/errorPages/404.jpg" alt="404" />
			</div> <!-- end post -->
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