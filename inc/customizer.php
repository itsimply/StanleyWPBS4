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

	Kirki::add_field( 'stanleywp_theme', array(
	'type'        => 'select',
	'settings'    => 'project_items',
	'label'       => __( 'Project Items', 'stanleywp' ),
	'section'     => 'projects_section',
	'default'     => '4',
	'priority'    => 10,
	'multiple'    => 1,
	'choices'     => array(
		'6' => esc_attr__( '2 Items', 'stanleywp' ),
		'4' => esc_attr__( '3 Items', 'stanleywp' ),
		'3' => esc_attr__( '4 Items', 'stanleywp' ),
		'2' => esc_attr__( '6 Items', 'stanleywp' ),
		),
		) );


	/* Typography */

	Kirki::add_section( 'typography_section', array(
    'title'          => esc_attr__( 'typography Settings', 'stanleywp' ),
    'description'    => esc_attr__( 'TypographySetting for my projects', 'stanleywp' ),
    // 'panel'          => 'projects_panel',
    'priority'       => 160,
	) );

	// Kirki::add_field( 'stanleywp_theme', array(
	// 'type'        => 'typography',
	// 'settings'    => 'typography_setting',
	// 'label'       => esc_attr__( 'Typography', 'stanleywp' ),
	// 'section'     => 'typography_section',
	// 'default'     => array(
	// 	'font-family'    => 'Roboto',
	// 	'variant'        => 'regular',
	// 	'font-size'      => '14px',
	// 	'line-height'    => '1.5',
	// 	'letter-spacing' => '0',
	// 	'color'          => '#333333',
	// 	'text-transform' => 'none',
	// 	'text-align'     => 'left',
	// ),
	// 'priority'    => 10,
	// 'output'      => array(
	// 	array(
	// 		'element' => 'body',
	// 	),
	// ),
	// 	) );

	// Kirki::add_field( 'stanleywp_theme', array(
	// 'type'        => 'typography',
	// 'settings'    => 'typography_heading_setting',
	// 'label'       => esc_attr__( 'Typography Heading', 'stanleywp' ),
	// 'section'     => 'typography_section',
	// 'default'     => array(
	// 	'font-family'    => 'Roboto',
	// 	'variant'        => 'regular',
	// 	'font-size'      => '14px',
	// 	'line-height'    => '1.5',
	// 	'letter-spacing' => '0',
	// 	'color'          => '#333333',
	// 	'text-transform' => 'none',
	// 	'text-align'     => 'left',
	// ),
	// 'priority'    => 10,
	// 'output'      => array(
	// 	array(
	// 		'element' => array('h1','h2','h3','h4','h5','h6','.h1','.h2','.h3','.h4','.h5','.h6' ),
	// 	),
	// ),
	// 	) );

	/* General Settings */

}

