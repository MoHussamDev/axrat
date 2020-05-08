<?php

function load_scripts() {
	wp_enqueue_style( 'SiteStyle',get_template_directory_uri()."/dist/css/style.css");
	wp_enqueue_style( 'slickStyle',get_template_directory_uri()."/dist/css/swiper.min.css");
	wp_enqueue_script('fontawesome','https://kit.fontawesome.com/1b49ad937d.js', array(), '', true  );
	wp_enqueue_script('jquery', get_template_directory_uri()."/dist/js/jquery.js", array(), '1.0.0', false  );
	wp_enqueue_script('bootstrap', get_template_directory_uri()."/dist/js/bootstrap.min.js", array(), '1.0.0', false  );
	wp_enqueue_script('slick', get_template_directory_uri()."/dist/js/swiper.min.js", array(), '1.0.0', false  );
}
add_action('wp_enqueue_scripts', 'load_scripts', 12);

function add_attribs_to_scripts( $tag, $handle, $src ) {
// The handles of the enqueued scripts we want to defer
$fontAwsome = array(
	'fontawesome',
);

if ( in_array( $handle, $fontAwsome ) ) {
    return '<script src="' . $src . '" crossorigin="anonymous" type="text/javascript"></script>' . "\n";
}
return $tag;
} 
add_filter( 'script_loader_tag', 'add_attribs_to_scripts', 10, 3 );
