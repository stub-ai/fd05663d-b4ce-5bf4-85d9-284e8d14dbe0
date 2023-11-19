<?php
function register_my_menus() {
  register_nav_menus(
    array(
      'latro-desktop-menu' => __( 'Latro Desktop Menu' ),
      'latro-mobile-menu' => __( 'Latro Mobile Menu' )
    )
  );
}
add_action( 'init', 'register_my_menus' );
?>