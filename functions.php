<?php
/**
 * This is the Phase child theme functions.php file.
 * You can use this file to overwrite existing functions, filter and actions to customize the parent theme.
 * https://wolfthemes.ticksy.com/article/11659/
 *
 * @package WordPress
 * @subpackage %NAME%
 */

function typed_script_init() {
    wp_enqueue_script( 'typedJS', 'https://pro.crunchify.com/typed.min.js', array('jquery') );
}
add_action('wp_enqueue_scripts', 'typed_script_init');
 
function typed_init() {
    echo '<script>
	jQuery(function($){
      		$(".element").typed({
      	 	strings: ["App Shah...", " an Engineer (MS)...","a WordPress Lover...", "a Java Developer..."],
      	 	typeSpeed:100,
     		backDelay:1000,
     		loop:true
	});
     });</script>';
}
add_action('wp_footer', 'typed_init');

wp_register_style( 'owl', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css' );
wp_enqueue_style('owl');

//wp_register_script( 'jQuery', 'https://code.jquery.com/jquery-3.5.1.js', null, null, true );
//wp_enqueue_script('jQuery');


wp_register_script( 'javascript', 'https://cdnjs.cloudflare.com/ajax/libs/javascript.util/0.12.12/javascript.util.min.js', null, null, true );
wp_enqueue_script('javascript');



function register_my_menus() {
  register_nav_menus(
    array(
      'press_menu' => __( 'Press Menu' ),
      'footer_menu' => __( 'Footer Menu' )
    )
  );
}
add_action( 'init', 'register_my_menus' );
