<?php

/*  CONSTANTS */
if( !defined( 'SMPNA_THEME_PATH' ) ) {
  define( 'SMPNA_THEME_PATH', get_template_directory() );
}

if( !defined( 'SMPNA_THEME_URI' ) ) {
  define( 'SMPNA_THEME_URI', get_template_directory_uri() );
}

// INCLUDE FILES
$inc_files = array(
  'lib/class-smpna-base.php',
  'lib/class-smpna-theme.php',
  'lib/hooks/hooks.php'
);

foreach( $inc_files as $inc_file ){ require_once( $inc_file ); }
