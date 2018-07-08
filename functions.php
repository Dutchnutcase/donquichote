<?php
  function register_dq_menu()
  {
    register_nav_menu('header-menu',__( 'Header Menu' ));
  }
  function plugin_myContentFilter($content)
  {
    return substr($content, 0, 300);
  }
  add_action( 'init', 'register_dq_menu' );
  add_theme_support( 'post-thumbnails' );
  add_filter("the_content", "plugin_myContentFilter");
?>
