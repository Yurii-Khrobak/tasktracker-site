<?php
add_action( 'wp_enqueue_scripts', function() {
	wp_enqueue_style('style', get_template_directory_uri() . '/assets/css/style.css');
	wp_enqueue_style('fonts', 'https://fonts.googleapis.com/css2?family=Manrope:wght@400;700;800&display=swap');
	wp_enqueue_style('mediaCss', get_template_directory_uri() . '/assets/css/media.css');

	wp_enqueue_script('script', get_template_directory_uri() . '/assets/js/script.js', array(), 'null', true);
});

add_theme_support('custom-logo');
add_theme_support('post-thumbnails');
add_theme_support('title-tag');

add_filter( 'http_request_args', function ( $args ) {

    $args['reject_unsafe_urls'] = false;
    
    return $args;
}, 999 );

function get_custom_logo_url()
{
    $custom_logo_id = get_theme_mod( 'custom_logo' );
    $image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
    return $image[0];
}
?>
