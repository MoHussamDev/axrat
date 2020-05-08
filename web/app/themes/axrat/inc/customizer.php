<?php
/**
 * fiveh Theme Customizer
 *
 * @package fiveh
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function fiveh_customize_register( $wp_customize ) {



    $wp_customize->add_setting(
        'blog_email',
        array(
            'default' => 'mohamedhussamdiv@gmail.com',
            'type' => 'theme_mod', // you can also use 'theme_mod'
            'capability' => 'edit_theme_options'
		));
		
    $wp_customize->add_setting(
        'blog_tele',
        array(
            'default' => '01021257331',
            'type' => 'theme_mod', // you can also use 'theme_mod'
            'capability' => 'edit_theme_options'
        ));
    $wp_customize->add_setting(
        'blog_address',
        array(
            'default' => '',
            'type' => 'theme_mod', // you can also use 'theme_mod'
            'capability' => 'edit_theme_options'
        ));

    $wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'email',
        array(
            'label'      => __( 'Company Email', 'fiveh Theme' ),
            'settings'   => 'blog_email',
            'priority'   => 30,
            'section'    => 'title_tagline',
            'type'       => 'email',
        )
	) );
    $wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'address',
        array(
            'label'      => __( 'Company address', 'fiveh Theme' ),
            'settings'   => 'blog_address',
            'priority'   => 30,
            'section'    => 'title_tagline',
            'type'       => 'email',
        )
	) );
    $wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'telephone',
        array(
            'label'      => __( 'Company Telephone', 'fiveh Theme' ),
            'settings'   => 'blog_tele',
            'priority'   => 30,
            'section'    => 'title_tagline',
			'type'       => 'email',
			
        )
	) );



	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'blog_email' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'blog_tele' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'blog_address' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial( 'blogname', array(
			'selector'        => '.site-title a',
			'render_callback' => 'fiveh_customize_partial_blogname',
		) );
		$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
			'selector'        => '.site-description',
			'render_callback' => 'fiveh_customize_partial_blogdescription',
		) );
		$wp_customize->selective_refresh->add_partial( 'blog_email', array(
			'selector'        => '.site-email',
			'render_callback' => 'fiveh_customize_partial_blogtele',
		) );
		$wp_customize->selective_refresh->add_partial( 'blog_tele', array(
			'selector'        => '.site-email',
			'render_callback' => 'fiveh_customize_partial_blogeAddress',
		) );


	}
}


add_action( 'customize_register', 'fiveh_customize_register' );


function panel($wp_customize){

	$wp_customize->add_panel('fiveh_theme_options',array(
		'title'=>'Theme Options',
		'description'=> 'You Can Add You Social Icon Links Here',
		'priority'=> 30,
	));
	
	
	$wp_customize->add_section('social_icons',array(
		'title'=>'Social Icons',
		'priority'=>10,
		'panel'=>'fiveh_theme_options',
	));
	
// Registering Settings 

	$wp_customize->add_setting('si_facebook',array(
		'default'=>'#',
		'type' => 'theme_mod', // you can also use 'theme_mod'
        'capability' => 'edit_theme_options'
	));
	
	
	$wp_customize->add_setting('si_instagram',array(
		'default'=>'#',
		'type' => 'theme_mod', // you can also use 'theme_mod'
		'capability' => 'edit_theme_options'
	));
	$wp_customize->add_setting('si_twitter',array(
		'default'=>'#',
		'type' => 'theme_mod', // you can also use 'theme_mod'
		'capability' => 'edit_theme_options'
	));
// Registering Controls 
	
	$wp_customize->add_control('sic_facebook',array(
		'label'=>'Facebook Link',
		'type'=>'link',
		'section'=>'social_icons',
		'settings'=>'si_facebook', 

	));
	
	
	$wp_customize->add_control('sic_instagram',array(
		'label'=>'Instagram Link',
		'type'=>'link',
		'section'=>'social_icons',
		'settings'=>'si_instagram', 
	));
	
	$wp_customize->add_control('sic_twitter',array(
		'label'=>'Twitter Link',
		'type'=>'link',
		'section'=>'social_icons',
		'settings'=>'si_twitter', 
	));

// post methods 

$wp_customize->get_setting( 'si_facebook' )->transport  = 'postMessage';
$wp_customize->get_setting( 'si_instagram' )->transport  = 'postMessage';
$wp_customize->get_setting( 'si_twitter' )->transport  = 'postMessage';

// selective Refresh 

if ( isset( $wp_customize->selective_refresh ) ) {
	$wp_customize->selective_refresh->add_partial( 'si_facebook', array(
		// 'selector'        => '.site-title a',
		'render_callback' => 'fiveh_customize_partial_facebook',
	) );
	$wp_customize->selective_refresh->add_partial( 'si_instagram', array(
		// 'selector'        => '.site-title a',
		'render_callback' => 'fiveh_customize_partial_instagram',
	) );
	$wp_customize->selective_refresh->add_partial( 'si_twitter', array(
		// 'selector'        => '.site-title a',
		'render_callback' => 'fiveh_customize_partial_twitter',
	) );
}

}
add_action('customize_register','panel');
/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function fiveh_customize_partial_blogname() {
	bloginfo( 'name' );
}

function fiveh_customize_partial_blogemail() {
theme_mod('blog_email','');
}
function fiveh_customize_partial_blogtele() {
theme_mod('blog_tele','');
}
function fiveh_customize_partial_blogAddress() {
theme_mod('blog_address','');
}
function fiveh_customize_partial_si_facebook() {
theme_mod('si_facebook','');
}
function fiveh_customize_partial_si_twitter() {
theme_mod('si_twitter','');
}
function fiveh_customize_partial_si_instagram() {
theme_mod('si_instagram','');
}



/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function fiveh_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
// function my_register_additional_customizer_settings( $wp_customize ) {

function fiveh_customize_preview_js() {
	wp_enqueue_script( 'fiveh-customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'fiveh_customize_preview_js' );
