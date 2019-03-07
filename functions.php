<?php
  add_theme_support( 'menus' );
  
  // This theme uses wp_nav_menu() in two locations.
		register_nav_menus(
			array(
				'menu-1' => __( 'Primary', 'twentynineteen' ),
/*
				'footer' => __( 'Footer Menu', 'twentynineteen' ),
				'social' => __( 'Social Links Menu', 'twentynineteen' ),
*/
			)
		);
	
	function twentynineteen_add_ellipses_to_nav( $nav_menu, $args ) {
		
		if ( 'menu-1' === $args->theme_location ) :

			$nav_menu .= '<div class="main-menu-more">';
			$nav_menu .= '<ul class="main-menu">';
			$nav_menu .= '<li class="menu-item menu-item-has-children">';
			$nav_menu .= '<button class="submenu-expand main-menu-more-toggle is-empty" tabindex="-1" aria-label="More" aria-haspopup="true" aria-expanded="false">';
// 			$nav_menu .= '<span class="screen-reader-text">' . esc_html__( 'More', 'twentynineteen' ) . '</span>';
// 			$nav_menu .= twentynineteen_get_icon_svg( 'arrow_drop_down_ellipsis' );
// 			$nav_menu .= '<svg width="24" height="24" xmlns="http://www.w3.org/2000/svg">' ;
			$nav_menu .= '</button>';
			$nav_menu .= '<ul class="sub-menu hidden-links">';
			$nav_menu .= '<li id="menu-item--1" class="mobile-parent-nav-menu-item menu-item--1">';
			$nav_menu .= '<button class="menu-item-link-return">';
// 			$nav_menu .= twentynineteen_get_icon_svg( 'chevron_left' );
// 			$nav_menu .= esc_html__( 'Back', 'twentynineteen' );
			$nav_menu .= '</button>';
			$nav_menu .= '</li>';
			$nav_menu .= '</ul>';
			$nav_menu .= '</li>';
			$nav_menu .= '</ul>';
			$nav_menu .= '</div>';
// 			$nav_menu  = '<div>aaaaaaaaaaaaa</div>';
	
		endif;
	
		return $nav_menu;
	}
	
	add_filter( 'wp_nav_menu', 'twentynineteen_add_ellipses_to_nav', 10, 2 );  

/*

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

*/
  ?>