<?php 
function ohmag_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Primary Sidebar', 'ohmag' ),
		'id'            => 'sidebar-1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'          => __( 'Secondray Sidebar', 'ohmag' ),
		'id'            => 'sidebar-2',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'          => __( 'Footer Widget 1 ', 'ohmag' ),
		'id'            => 'footer-1',
		'before_widget' => '<ul><li id="%1$s" class="widget %2$s list-style-none ps-3">',
		'after_widget'  => '</li></ul>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'          => __( 'Footer Widget 2 ', 'ohmag' ),
		'id'            => 'footer-2',
		'before_widget' => '<ul><li id="%1$s" class="widget %2$s list-style-none ps-3">',
		'after_widget'  => '</li></ul>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'          => __( 'Footer Widget 3 ', 'ohmag' ),
		'id'            => 'footer-3',
		'before_widget' => '<ul><li id="%1$s" class="widget %2$s list-style-none ps-3">',
		'after_widget'  => '</li></ul>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'          => __( 'Footer Widget 4', 'ohmag' ),
		'id'            => 'footer-4',
		'before_widget' => '<ul><li id="%1$s" class="widget %2$s list-style-none ps-3 ">',
		'after_widget'  => '</li></ul>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
register_sidebar( array(
		'name'          => __( 'Footer Widget 5', 'ohmag' ),
		'id'            => 'footer-5',
		'before_widget' => '<ul><li id="%1$s" class="widget %2$s list-style-none ps-3 ">',
		'after_widget'  => '</li></ul>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'          => __( 'copyright', 'ohmag' ),
		'id'            => 'copyright',
		'before_widget' => '<ul><li id="%1$s" class="widget %2$s list-style-none ps-3 ">',
		'after_widget'  => '</li></ul>',
		'before_title'  => '<h6 class="copyright fs-5 fw-bold text-uppercase text-md-start text-center">',
		'after_title'   => '</h6>',
	) );
register_sidebar( array(
		'name'          => __( 'social icon', 'ohmag' ),
		'id'            => 'social-icon',
		'before_widget' => '<ul><li id="%1$s" class="widget %2$s list-style-none ps-3">',
	    'after_widget'  => '</li></ul>',
		'before_title'  => '<h6 class="widget-title">',
		'after_title'   => '</h6>',
	) );
	register_sidebar( array(
		'name'          => __( 'General Links', 'ohmag' ),
		'id'            => 'glink-1',
		'before_widget' => '<ul><li id="%1$s" class="widget %2$s list-style-none ps-3">',
	    'after_widget'  => '</li></ul>',
		'before_title'  => '<h6 class="widget-title">',
		'after_title'   => '</h6>',
	) );
	register_sidebar( array(
		'name'          => __( 'General Links', 'ohmag' ),
		'id'            => 'glink-2',
		'before_widget' => '<ul><li id="%1$s" class="widget %2$s list-style-none ps-3">',
	    'after_widget'  => '</li></ul>',
		'before_title'  => '<h6 class="widget-title">',
		'after_title'   => '</h6>',
	) );
	register_sidebar( array(
		'name'          => __( 'General Links', 'ohmag' ),
		'id'            => 'glink-3',
		'before_widget' => '<ul><li id="%1$s" class="widget %2$s list-style-none ps-3">',
	    'after_widget'  => '</li></ul>',
		'before_title'  => '<h6 class="widget-title">',
		'after_title'   => '</h6>',
	) );
	register_sidebar( array(
		'name'          => __( 'General Links', 'ohmag' ),
		'id'            => 'glink-4',
		'before_widget' => '<ul><li id="%1$s" class="widget %2$s list-style-none ps-3">',
	    'after_widget'  => '</li></ul>',
		'before_title'  => '<h6 class="widget-title">',
		'after_title'   => '</h6>',
	) );
	register_sidebar( array(
		'name'          => __( 'General Links', 'ohmag' ),
		'id'            => 'glink-5',
		'before_widget' => '<ul><li id="%1$s" class="widget %2$s list-style-none ps-3">',
	    'after_widget'  => '</li></ul>',
		'before_title'  => '<h6 class="widget-title">',
		'after_title'   => '</h6>',
	) );
	
}

add_action('widgets_init','ohmag_widgets_init');

