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
    ));
  function wpb_list_child_pages()
  {
    global $post;
    if ( is_page() && $post->post_parent )
    {
      $childpages = wp_list_pages( 'sort_column=menu_order&title_li=&child_of=' . $post->post_parent . '&echo=0' );
      $parent_title = get_the_title($post->post_parent);
    }
    else
    {
      $childpages = wp_list_pages( 'sort_column=menu_order&title_li=&child_of=' . $post->ID . '&echo=0' );
      $parent_title = get_the_title($post);
    }
    if ( $childpages )
    {
      $string = '<h4>' . $parent_title . '</h4><ul class="childpages">' . $childpages . '</ul>';
    }
    return $string;
  }
  add_shortcode('wpb_childpages', 'wpb_list_child_pages');
  load_theme_textdomain('donquichote', get_template_directory() . '/languages');
  add_action('after_setup_theme', 'donquichote_theme_setup');
  function donquichote_theme_setup(){
    load_theme_textdomain('donquichote', get_template_directory() . '/languages');
  }
?>
