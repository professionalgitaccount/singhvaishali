
<?php

register_nav_menus( array(
	'header_menu' => 'My Custom Header Menu',
	'footer_menu' => 'My Custom Footer Menu',
) );

?>

<?php

function ourWidget(){
	
	/*  for home page scroller   */
	
		register_sidebar(array(
	'name'=>'social',
	'id'=>'social',
	'before_widget'=>'<div class="foot-links">',
	'after_widget'=>'</div>'
	/* 'before_title'=>'<div class="sidtitle">',
	'after_widget'=>'</h3>'  */ 
	));	
		
}



add_action('widgets_init','ourWidget');

	
add_theme_support( 'post-thumbnails' );

$defaults = array(
	'default-image'          => '',
	'width'                  => 0,
	'height'                 => 0,
	'flex-height'            => false,
	'flex-width'             => false,
	'uploads'                => true,
	'random-default'         => false,
	'header-text'            => true,
	'default-text-color'     => '',
	'wp-head-callback'       => '',
	'admin-head-callback'    => '',
	'admin-preview-callback' => '',
);
add_theme_support( 'custom-header', $defaults );


function mytheme_add_woocommerce_support() {
    add_theme_support( 'woocommerce' );
}
add_action( 'after_setup_theme', 'mytheme_add_woocommerce_support' );

// custom logo

 function silics_custom_logo(){
	 	$defaults=array(
	 		'height'=>100,
	 		'width'=>400,
	 		'flex-height'=>true,
	 		'flex-width'=>true,
	 		'header-text'=>array('site-title','site-description'),
	 	);
	 	add_theme_support('custom-logo',$defaults);
		}
		 add_action('after_setup_theme','silics_custom_logo');

// custom logo
// blogs
// custom post type
		  

// blogs

?>

<?php
 function my_custom_post() {
   register_post_type( 'blogs', array(
		'labels' => array(
	 		'name' => __('Blogs'),
	 		'singular_name'	=> __('Blogs'),
	 	),
		'supports' => array('title', 'thumbnail','editor'),
	 	'public' => true,
	 	'has_archive' => true,
	 ) ); }
	     add_action( 'init', 'my_custom_post' ); 
	


 
   register_post_type( 'events', array(
		'labels' => array(
	 		'name' => __('Events'),
	 		'singular_name'	=> __('Events'),
	 	),
		'supports' => array('title', 'thumbnail','editor'),
	 	'public' => true,
	 	'has_archive' => true,
	 ) ); 
	     add_action( 'init', 'my_custom_post' ); 
	?>