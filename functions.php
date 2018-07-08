<?php
  function register_dq_menu()
  {
    register_nav_menu('header-menu',__( 'Header Menu' ));
  }
  add_action( 'init', 'register_dq_menu' );
  add_theme_support( 'post-thumbnails' );
?>
