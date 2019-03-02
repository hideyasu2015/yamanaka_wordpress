<?php
  add_theme_support('menus');

  add_filter('nav_menu_css_class', 'my_nav_menu_li', 10, 2);
  function my_nav_menu_li( $classes, $item ){
     $classes = array();
     if( $item -> current == true ) {
       $classes[] = 'nav-item active';
     }else{
       $classes[] = 'nav-item';
     }
     return $classes;
  }

  add_filter( 'nav_menu_link_attributes', 'filter_function_name', 10, 3 );
  function filter_function_name( $atts, $item, $args ) {
    $atts['class'] = 'nav-link pl-1';
    return $atts;
}
  ?>
