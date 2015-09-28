
	</div><!-- end m1 -->
</div> <!-- end main -->

<div id="footer">
	<div class="holder">
		<?php
		 	/* load main menu */
			wp_nav_menu( 
				array(
			'menu' 				=>	'footer_menu',
			'menu_class'		=>	'add-nav',
			'theme_location'	=>	'footer_menu'
		)); ?>
		<address>
			<span>812 University</span>
			<span>Pella, Iowa 50219</span>
			<span>1-877-462-3687</span>
			<span><a href="mailto:admission@central.edu">admission@central.edu</a></span>
			<span>Privacy Policy</span>
		</address>
	</div>
</div> <!-- end footer -->

</div> <!-- end wrapper -->

<div class="hide">
	<input type="hidden" id="rel-url" name="rel-url" value="<?php  bloginfo('template_directory'); ?>" />
	<?php wp_footer(); ?>
</div>

<!-- js -->
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/scripts/init.js"></script>

</body>
</html>