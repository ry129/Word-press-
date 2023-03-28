<?php
/**
 * eyepress Theme Customizer
 *
 * @package eyepress
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */


function x_blogcolor_body_classes( $classes ) {
    // Adds a class of hfeed to non-singular pages.
    $xblogcolor_theme_color = get_theme_mod('xblogcolor_theme_color','theme-purple');
    
    $classes[] = $xblogcolor_theme_color;
   

    return $classes;
}
add_filter( 'body_class', 'x_blogcolor_body_classes',999 );
//Sanitize theme color
function x_blogcolor_sanitize_theme_color($value){ 
    if(!in_array($value, array('theme-black','theme-green','theme-blue','theme-indigo','theme-brown','theme-bluegrey','theme-purple'))){
        $value = 'theme-purple';
    }
    return $value;
}
function x_blogcolor_customize_register( $wp_customize ) {

	$wp_customize->remove_control( 'theme_color_control' );

    $wp_customize->add_setting( 'x_blogcolor_posts_meta' , array(
    'capability'     => 'edit_theme_options',
    'type'           => 'theme_mod',
    'default'       =>  '1',
    'sanitize_callback' => 'absint',
    'transport'     => 'refresh',
    ) );
    $wp_customize->add_control( 'x_blogcolor_posts_meta_control', array(
        'label'      => __('Show post meta? ', 'x-blog-color'),
        'description'=> __('You can show or hide posts meta.', 'x-blog-color'),
        'section'    => 'x_blog_options',
        'settings'   => 'x_blogcolor_posts_meta',
        'type'       => 'checkbox',
        
    ) );

   $wp_customize->add_setting('xblogcolor_theme_color', array(
        'default'        => 'theme-purple',
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'x_blogcolor_sanitize_theme_color',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control('xblogcolor_theme_color_control', array(
        'label'      => __('Select Theme color', 'x-blog-color'),
        'section'    => 'x_blog_options',
        'settings'   => 'xblogcolor_theme_color',
        'type'       => 'select',
        'choices'    => array(
            'theme-purple' => __('Theme purple', 'x-blog-color'),
            'theme-black' => __('Theme Black', 'x-blog-color'),
            'theme-green' => __('Theme Green', 'x-blog-color'),
            'theme-blue' => __('Theme Blue', 'x-blog-color'),
            'theme-indigo' => __('Theme Indigo', 'x-blog-color'),
            'theme-brown' => __('Theme Brown', 'x-blog-color'),
            'theme-bluegrey' => __('Theme Blue Grey', 'x-blog-color'),

        ),
    ));


}
add_action( 'customize_register', 'x_blogcolor_customize_register',99 );

