<?php

/**
 * BOOTSTRAPS THEME SPECIFIC FUNCTIONALITIES
 */
class SMPNA_THEME extends SMPNA_BASE {

  private $sidebars;

  public function __construct() {

    $this->sidebars = array(
      'footer-sidebar'	=> array(
        'name' 				=> __( 'Footer', 'sampoorna-wp-theme' ),
        'description' => __( 'Appears in the footer area', 'sampoorna-wp-theme' )
      )
    );

    add_action( 'wp_enqueue_scripts', array( $this, 'assets' ) );  // LOAD FRONTEND ASSETS

    add_action( 'after_setup_theme', array(  $this, 'after_setup_theme' ) );  // AFTER THE THEME HAS BEEN ACTIVATED

    add_action( 'widgets_init', array( $this, 'widgets_init' ) );  // INITIALIZE ALL THE WIDGETS IN THE SIDEBAR

    add_filter( 'excerpt_length', function( $length ){ return 16; } );  // EXCERPT LENGTH

    add_filter( 'excerpt_more', function( $more ){ return '&hellip;'; } );  // EXCERPT MORE

    /* ADD SOW FROM THE THEME */
    add_action('siteorigin_widgets_widget_folders', function( $folders ){
      $folders[] = SMPNA_THEME_PATH . '/so-widgets/';
      return $folders;
    });

  }

  function assets() {
    wp_enqueue_style( 'smpna-css', SMPNA_THEME_URI.'/assets/css/main.css', array(), time() );

    //ENQUEUE SCRIPTS
    wp_enqueue_script('slick', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.js', array('jquery'), null, true);
    wp_enqueue_script( 'smpn-core-js', SMPNA_THEME_URI.'/assets/js/main.js', array('jquery'), time(), true );

  }

  function after_setup_theme(){

    // REGISTER THEME SUPPORTS
    add_theme_support( 'post-thumbnails' );

    show_admin_bar(false);  // HIDE ADMIN BAR FROM THE FRONTEND

  }

  function widgets_init() {
    foreach( $this->sidebars as $id => $sidebar ) {
      $sidebar['id'] = $id;
      $this->register_sidebar( $sidebar );
    }
  }

  function register_sidebar( $sidebar ) {
    register_sidebar( array(
      'name' 			    => $sidebar['name'],
      'id' 			      => $sidebar['id'],
      'description' 	=> $sidebar['description'],
      'before_widget' => '<aside id="%1$s" class="widget %2$s">',
      'after_widget' 	=> "</aside>",
      'before_title' 	=> '<h3>',
      'after_title' 	=> '</h3>'
    ) );
  }

}

SMPNA_THEME::getInstance();
