<?php
            // Include the functions file
            
            include get_template_directory() . '/inc/home-page-customizer.php';
            
            include get_template_directory() . '/inc/widget-section.php';

            
        // Theme Support Function
        
function ohmag_theme_setup() {
	
			add_theme_support('custom-logo');
			
			add_theme_support('title-tag');
			
			add_theme_support('post-thumbnails');
			
			add_theme_support('automatic-feed-links');
			
		}
	add_action('after_setup_theme', 'ohmag_theme_setup');

    
    //Including stylesheet and scripts
    
    function ohmag_theme_scripts() { 
        
         wp_enqueue_style('font-awesome', get_template_directory_uri() . '/asset/fontawsome/all.min.css');
        
            wp_enqueue_style('style', get_stylesheet_uri());
    
        wp_enqueue_style('bootstrap-css',  get_template_directory_uri() . '/asset/bootstrap/css/bootstrap.min.css');
        
        wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/asset/bootstrap/js/bootstrap.min.js');
        
        wp_enqueue_script('fontawsome', get_template_directory_uri() . '/asset/fontawesome/js/all.js');

    
    }

add_action('wp_enqueue_scripts', 'ohmag_theme_scripts');


function register_custom_menus() {
    
        register_nav_menus(array(
            
        'primary-menu' => __('Primary Menu'),
        
        'category-menu' => __('Secondray Menu'),
    ));
}
add_action('init', 'register_custom_menus');

// Creating the top header editable

function theme_customize_register($wp_customize) {
    
    // Create a new section in the Customizer
    $wp_customize->add_section('header_settings', array(
        
        'title' => __('Header Settings', 'ohmag'),
        
        'priority' => 30,
        
    ));

    // Add a setting for displaying signup and login buttons
    $wp_customize->add_setting('display_signup_login_buttons', array(
        
        'default' => 'yes', // Set the default to 'yes' to initially display the buttons
    ));

    // Add a control to toggle the display of the buttons
    $wp_customize->add_control('display_signup_login_buttons', array(
        
        'label' => __('Display Signup and Login Buttons', 'your-theme-text-domain'),
        
        'section' => 'header_settings',
        
        'type' => 'radio',
        
        'choices' => array(
            
            'yes' => __('Yes', 'ohmag'),
            
            'no' => __('No', 'ohmag'),
        ),
    ));
}
add_action('customize_register', 'theme_customize_register');

function fonts() {
    // Register your font
    wp_register_style('fonts', get_template_directory_uri() . 'assets/fonts/FashionWacksRegular-51vw8.ttf', array(), '1.0.0', 'all');
    
   wp_register_style('font', get_template_directory_uri() . 'assets/fonts/Cormorant_Garamond/Cormorant_Garamond', array(), '1.0.0', 'all');

}
add_action('wp_enqueue_scripts', 'fonts');
