<?php

/* RETURNS ASSET IMAGE BASED ON NAME */
add_action( 'smpna_img', function( $img_name, $extension ){
  $img_src = SMPNA_THEME_URI."/assets/images/$img_name.$extension";
  _e('<img src="'.$img_src.'" alt="'.$img_name.'">');
}, 10, 2);
