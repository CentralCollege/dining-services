<?php 
// Saftey first.
if (!empty($_SERVER['SCRIPT_FILENAME']) && 'functions.php' == basename($_SERVER['SCRIPT_FILENAME']))
	die ('Please do not load this page directly!');

// --------------------------------
// Central College Functions 
// --------------------------------

// Remove dashboard widgets
add_action('wp_dashboard_setup', 'CUI_remove_dashboard_widgets' );
function CUI_remove_dashboard_widgets() {
	remove_meta_box( 'dashboard_recent_comments', 'dashboard', 'normal');
	remove_meta_box( 'dashboard_right_now', 'dashboard', 'normal' );
	remove_meta_box( 'dashboard_incoming_links', 'dashboard', 'normal' );
	remove_meta_box( 'dashboard_quick_press', 'dashboard', 'side' );
	remove_meta_box( 'dashboard_primary', 'dashboard', 'side');
	remove_meta_box( 'dashboard_secondary', 'dashboard', 'side');
}

// Removes extra headers from wordpress
	remove_action('wp_head', 'rsd_link');
	remove_action('wp_head', 'wp_generator');
	remove_action('wp_head', 'feed_links', 2);
	remove_action('wp_head', 'index_rel_link');
	remove_action('wp_head', 'wlwmanifest_link');
	remove_action('wp_head', 'feed_links_extra', 3);
	remove_action('wp_head', 'start_post_rel_link', 10, 0);
	remove_action('wp_head', 'parent_post_rel_link', 10, 0);
	remove_action('wp_head', 'adjacent_posts_rel_link', 10, 0);
	remove_action('wp_head', 'start_post_rel_link', 10, 0 );
	remove_action('wp_head', 'rel_canonical');
	
// --------------------------------
	
// load up jQuery from Google CDN
if( !is_admin()){
   wp_deregister_script('jquery'); 
   wp_register_script('jquery', ("http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"), false, '1.6.2'); 
   wp_enqueue_script('jquery');
}

// Add awesome brower classes to body tag
add_filter('body_class','browser_body_class');
function browser_body_class($classes) {
	global $is_lynx, $is_gecko, $is_IE, $is_opera, $is_NS4, $is_safari, $is_chrome, $is_iphone;

	if($is_lynx) $classes[] = 'lynx';
	elseif($is_gecko) $classes[] = 'gecko';
	elseif($is_opera) $classes[] = 'opera';
	elseif($is_NS4) $classes[] = 'ns4';
	elseif($is_safari) $classes[] = 'safari';
	elseif($is_chrome) $classes[] = 'chrome';
	elseif($is_IE) $classes[] = 'ie';
	else $classes[] = 'unknown';

	if($is_iphone) $classes[] = 'iphone';
	return $classes;
}

// Remove usless the_generator meta tag - whoops
add_filter( 'the_generator', create_function('$a', "return null;") );

// Custom Logo
function custom_logo() { ?> 
	<style type="text/css">
		h1 a { background-image: url(
			<?php echo get_bloginfo('template_directory'); ?>/img/logo.png
		) !important;
		 	height: 100px; }
    </style>
<?php }

add_action('login_head', 'custom_logo');

// Admin Footer
function remove_footer_admin () {
	echo 'Powered by <a href="http://www.wordpress.org" target="_blank">WordPress</a> | Have WordPress Questions? <a href="http://48Web.com" target="_blank">48Web can help!</a>';
}

add_filter('admin_footer_text', 'remove_footer_admin');

// Sidebars
if ( function_exists('register_sidebar') )
	register_sidebar(array('name'=>'Sidebar',
	'before_widget' => '<li class="widget">',
	'after_widget' => '</li>',
	'before_title' => '<h2 class="widgettitle">',
	'after_title' => '</h3>',
));

// menu support
add_action('init', 'register_custom_menu');
 
function register_custom_menu() {
	register_nav_menu('top_menu', __('Top Menu'));
	register_nav_menu('main_menu', __('Main Menu'));
	register_nav_menu('footer_menu', __('Footer Menu'));
	register_nav_menu('catering_menu', __('Catering Menu'));
	register_nav_menu('about_menu', __('About Menu'));
}

/* post thumbs */
if ( function_exists( 'add_theme_support' ) ) { 
  add_theme_support( 'post-thumbnails' ); 
}

/* featured image sizes */
add_image_size( 'banner', 1221, 264 );

/* check if page is child */
function is_child($page_id_or_slug) { 
	global $post; 
	if(!is_int($page_id_or_slug)) {
		$page = get_page_by_path($page_id_or_slug);
		$page_id_or_slug = $page->ID;
	} 
	if(is_page() && $post->post_parent == $page_id_or_slug ) {
       		return true;
	} else { 
       		return false; 
	}
}

error_reporting(E_ALL ^ E_NOTICE); 
function getMenuWidget($url) {
	require TEMPLATEPATH . '/inc/admin/XMLParser.class.php';	

	if($url){			
		$xml=new XMLParser();
		$results=$xml->parse($url);			
		
		foreach($results[0]['child'] as $values){			
			if($values['name']!="ANNOUNCEMENT"){
				if(isset($values['attrs']['DATE'])){
					$date_posted=$values['attrs']['DATE'];
					$details.="<h2 class='menu'>".date("l",strtotime($date_posted)).":</h2>";
				}
				foreach($values['child'] as $key=>$val){
					if(isset($val['attrs']['STARTDATE']) && isset($val['attrs']['ENDDATE']) && $key==0){							
						$details.="<h3 style='font-size:13px;font-weight:bold;'>Start Date: ".date("F j, Y",strtotime($val['attrs']['STARTDATE']))."<br/> End Date: ".date("F j, Y",strtotime($val['attrs']['ENDDATE']))."</h3>";
					}
					if(isset($val['name']) && isset($val['content'])){
						$details.="<p style='margin:5px 0px 5px 0px;padding:0px;line-height:20px;'><span style='font-weight:bold;'>". ucwords(strtolower($val['name'])).": </span>".$val['content']."</p>";
					}
				}					
			}				
		}			
		echo $details;
	}
}
?>