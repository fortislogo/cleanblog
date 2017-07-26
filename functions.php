<?php 

function _setup() {
	
	add_theme_support( 'title-tag' );

	add_theme_support( 'post-thumbnails' );

	add_image_size( 'cleanblog-featured-image', 2000, 1200, true );

	add_image_size( 'cleanblog-thumbnail-avatar', 100, 100, true );

	register_nav_menus( array(
		'top'    => __( 'Top Menu', 'cleanblog' )
	) );
	
}

add_action( 'after_setup_theme', '_setup' );

function _scripts() {
	// Add custom fonts, used in the main stylesheet.
	wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '/assets/vendor/bootstrap/css/bootstrap.min.css', array(), null );

	wp_enqueue_style( 'cleanblog-css', get_template_directory_uri() . '/assets/css/clean-blog.min.css', array(), null );

	wp_enqueue_style( 'fontawesome', get_template_directory_uri() . '/assets/vendor/font-awesome/css/font-awesome.min.css', array(), null );

	wp_enqueue_style( 'font-lora', 'https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic', array(), null );

	wp_enqueue_style( 'font-opensans', 'https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800', array(), null );

	wp_enqueue_script( 'jquery-js', get_theme_file_uri( '/assets/vendor/jquery/jquery.min.js' ), array(), null );
	
	wp_enqueue_script( 'bootstrap-js', get_theme_file_uri( '/assets/vendor/bootstrap/js/bootstrap.min.js' ), array(), null );

	wp_enqueue_script( 'bootstrapvalidation', get_theme_file_uri( '/assets/js/jqBootstrapValidation.js' ), array(), null );

	wp_enqueue_script( 'contact-me', get_theme_file_uri( '/assets/js/contact_me.js' ), array(), null );

	wp_enqueue_script( 'cleanblog-js', get_theme_file_uri( '/assets/js/clean-blog.min.js' ), array(), null );
	
}

add_action( 'wp_enqueue_scripts', '_scripts' );


function _widgets_init() {
	

	register_sidebar( array(
		'name'          => __( 'Footer 1', 'cleanblog' ),
		'id'            => 'footer-1',
		'description'   => __( 'Add widgets here to appear in your footer.', 'cleanblog' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer 2', 'cleanblog' ),
		'id'            => 'footer-2',
		'description'   => __( 'Add widgets here to appear in your footer.', 'cleanblog' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	
}

add_action( 'widgets_init', '_widgets_init' );

if(function_exists("register_field_group"))
{
	register_field_group(array (
		'id' => 'acf_page-subtitle',
		'title' => 'Page Subtitle',
		'fields' => array (
			array (
				'key' => 'field_59780aaba5d50',
				'label' => 'Subtitle',
				'name' => 'subtitle',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'page',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'no_box',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 0,
	));

	register_field_group(array (
		'id' => 'acf_post-subtitle',
		'title' => 'Post Subtitle',
		'fields' => array (
			array (
				'key' => 'field_597803e967d3a',
				'label' => 'Subtitle',
				'name' => 'subtitle',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'post',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'no_box',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 0,
	));
}
