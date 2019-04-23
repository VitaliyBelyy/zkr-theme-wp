<?php 

	// ПОДКЛЮЧЕНИЕ СТИЛЕЙ
	function diplom_styles() {
	  wp_enqueue_style( 'core', get_template_directory_uri() . '/assets/css/core.css');
	  // wp_enqueue_style( 'comments', get_template_directory_uri() . '/assets/css/comments.css');
	  wp_enqueue_style( 't-rex', get_template_directory_uri() . '/assets/css/t-rex.css');
	  wp_enqueue_style( 'fonts-awesome', get_template_directory_uri() . '/assets/fonts/font-awesome/css/font-awesome.min.css');
	  // wp_enqueue_style( 'jquery-ui', get_template_directory_uri() . '/assets/js/jquery-ui/jquery-ui.min.css');
	  wp_enqueue_style( 'owl.carousel.min-style', get_template_directory_uri() . '/assets/plugins/owl/owl.carousel.min.css');
	  wp_enqueue_style( 'owl.theme', get_template_directory_uri() . '/assets/plugins/owl/owl.theme.default.min.css');
	  wp_enqueue_script( 'jquery.min', get_template_directory_uri() . '/assets/js/jquery/jquery.min.js');
	  // wp_enqueue_script( 'jquery-ui.min', get_template_directory_uri() . '/assets/js/jquery-ui/jquery-ui.min.js');
	  wp_enqueue_script( 'jq-touch', get_template_directory_uri() . '/assets/plugins/jq-touch/jquery.touchSwipe.min.js');
	  wp_enqueue_script( 'stellar', get_template_directory_uri() . '/assets/plugins/stellar/jquery.stellar.min.js');
	  wp_enqueue_script( 'owl.carousel.min-js', get_template_directory_uri() . '/assets/plugins/owl/owl.carousel.min.js');
	  wp_enqueue_script( 'custom', get_template_directory_uri() . '/assets/js/custom.js');
	};
	  
	add_action( 'wp_enqueue_scripts', 'diplom_styles' );


	 add_theme_support( 'post-thumbnails' );
	 

	// Регистрируем сайдбар

    	$args = array(
    		'name'          => 'Правый сайдбар',
    		'id'            => 'sidebar',
    		'description'   => '',
    		'before_widget' => '<div class="widget">',
    		'after_widget'  => '</div>',
    		'before_title'  => '<h2 class="widget-title">',
    		'after_title'   => '</h2>'
    	);
    
    	register_sidebar( $args );
    
	
?>
