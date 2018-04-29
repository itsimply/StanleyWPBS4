<?php
/**
 * StanleyWP Theme Customizer
 *
 * @package StanleyWP
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function stanleywp_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';
}
add_action( 'customize_register', 'stanleywp_customize_register' );

if (class_exists('Kirki'))  {
	Kirki::add_config( 'stanleywp_theme', array(
	'capability'    => 'edit_theme_options',
	'option_type'   => 'theme_mod',
) );

	// if there is more options to configure us panel 
	// Kirki::add_panel( 'projects_panel', array(
	//     'priority'    => 10,
	//     'title'       => esc_attr__( 'Projects', 'textdomain' ),
	//     'description' => esc_attr__( 'Projects description', 'textdomain' ),
	// ) );


	/* Project Settings */

	Kirki::add_section( 'projects_section', array(
    'title'          => esc_attr__( 'Projects Settings', 'stanleywp' ),
    'description'    => esc_attr__( 'Setting for my projects', 'stanleywp' ),
    // 'panel'          => 'projects_panel',
    'priority'       => 160,
) );

	Kirki::add_field( 'stanleywp_theme', array(
	'type'     => 'text',
	'settings' => 'projects_title',
	'label'    => __( 'Title', 'stanleywp' ),
	'section'  => 'projects_section',
	'default'  => esc_attr__( 'Projects', 'stanleywp' ),
	'priority' => 10,
) );


	/* General Settings */

}

