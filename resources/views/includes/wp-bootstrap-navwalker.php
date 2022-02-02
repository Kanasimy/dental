<?php class Real_Walker_Nav_Menu extends Walker_Nav_Menu {
  private $curItem;

// add classes to ul sub-menus
function start_lvl( &$output, $depth ) {
// depth dependent classes
$indent = ( $depth > 0  ? str_repeat( "\t", $depth ) : '' ); // code indent
$display_depth = ( $depth + 1); // because it counts the first submenu as 0
$classes = array(
( $display_depth >0 ? 'dropdown-menu' : '' )
);
$class_names = implode( ' ', $classes );

// build html
$output .= "\n" . $indent . '<ul class="' . $class_names . '" aria-labelledby="navbarDropdown-' . $this->curItem . '">' . "\n";
  }

  // add main/sub classes to li's and links
  function start_el( &$output, $item, $depth, $args ) {
  global $wp_query;

  $indent = ( $depth > 0 ? str_repeat( "\t", $depth ) : '' ); // code indent

  // passed classes
  $classes = empty( $item->classes ) ? array() : (array) $item->classes;
  $children = false;
  // if li has sub-menu
    if( in_array('menu-item-has-children', $classes) ){
      $children = true;
      $classes[] = 'dropdown';
    }
    if ( ! empty( $item->url ) && in_array('menu-item-has-children', $classes) ) {
      $classes[] = 'dropdown-btn';
    }

  $class_names = esc_attr( implode( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item ) ) );

  // build html
  $output .= $indent . '<li id="nav-menu-item-'. $item->ID . '" class="'. $class_names . '">';
    $button= "";
    // link attributes
    $attributes  = ! empty( $item->attr_title ) ? ' title="'  . esc_attr( $item->attr_title ) .'"' : '';
    $attributes .= ! empty( $item->target )     ? ' target="' . esc_attr( $item->target     ) .'"' : '';
    $attributes .= ! empty( $item->xfn )        ? ' rel="'    . esc_attr( $item->xfn        ) .'"' : '';
    $attributes .= ! empty( $item->url )        ? ' href="'   . esc_attr( $item->url        ) .'"' : ' href="#"';
    if($children && empty( $item->url )) {
      $this->curItem = $item->ID;
      $attributes .= ' class="nav-link dropdown-toggle"';
      $attributes .= ' id="navbarDropdown-'.$item->ID.'"';
      $attributes .= ' role="button"';
      $attributes .= ' data-toggle="dropdown"';
      $attributes .= ' aria-haspopup="true"';
      $attributes .= ' aria-expanded="false"';
    } elseif ($children && ! empty( $item->url )) {
      $this->curItem = $item->ID;
      $attributes .= ' class="nav-link"';
      $button .= '<button type="button" class="btn btn-danger dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="navbarDropdown-'.$item->ID.'"><span class="sr-only">Открыть подменю</span></button>';
    } else {
      $attributes .= ' class="nav-link"';
    }


    $item_output = sprintf( '%1$s<a%2$s>%3$s%4$s%5$s</a>%6$s%7$s',
    $args->before,
    $attributes,
    $args->link_before,
    apply_filters( 'the_title', $item->title, $item->ID ),
    $args->link_after,
    $button,
    $args->after
    );

    // build html
    $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
    }
    }
