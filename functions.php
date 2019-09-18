<?php 
	 add_action( 'wp_enqueue_scripts', 'groci_child_enqueue_styles' );
	 function groci_child_enqueue_styles() {
 		  wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' ); 
 		  } 
 ?>