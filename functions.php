<?php
  function register_dq_menu()
  {
    register_nav_menu('header-menu',__( 'Header Menu' ));
  }
  add_action( 'init', 'register_dq_menu' );
  add_theme_support( 'post-thumbnails' );
  if ( function_exists('register_sidebar') )
    register_sidebar(array(
      'name' => 'Sidebar area',
      'before_widget' => '<div class = "widgetizedArea">',
      'after_widget' => '</div>',
      'before_title' => '<h3>',
      'after_title' => '</h3>',
    )
  );
?>
