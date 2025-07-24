<?php

class MegaMenuWalker extends Walker_Nav_Menu
{
  function start_lvl(&$output, $depth = 0, $args = array())
  {

    $indent = str_repeat("\t", $depth);
    if ($depth === 0) {
      $output .= "\n$indent<ul class=\"sub-menu grid grid-cols-3 gap-x-6 w-full\">\n";
    } else {
      $output .= "\n$indent<ul class=\"sub-menu list-disc ml-6\">\n";
    }
  }

  function end_lvl(&$output, $depth = 0, $args = array())
  {
    $indent = str_repeat("\t", $depth);
    $output .= "$indent</ul>\n";
  }

  function start_el(&$output, $item, $depth = 0, $args = array(), $id = 0)
  {
    $indent = ($depth) ? str_repeat("\t", $depth) : '';

    $classes = empty($item->classes) ? array() : (array) $item->classes;
    $classes[] = 'menu-item menu-item-top';
    if (in_array('menu-item-has-children', $classes)) {
      $classes[] = 'menu-item-has-children';
    }
    if ($depth === 1) {
      $classes[] = 'menu-col relative';
      $classes[] = 'sub-menu-col-' . $item->menu_order;
    }
    $classes[] = 'menu-item-' . $item->ID;

    $classes = array_unique(array_filter($classes));
    $class_names = $classes ? 'class="' . esc_attr(implode(' ', $classes)) . '"' : '';

    $output .= "$indent<li $class_names id=\"menu-item-{$item->ID}\">";

    $atts = array();
    $atts['href'] = !empty($item->url) ? $item->url : '#';

    $attributes = '';
    foreach ($atts as $attr => $value) {
      $attributes .= ' ' . $attr . '="' . esc_attr($value) . '"';
    }

    $title = apply_filters('the_title', $item->title, $item->ID);

    if ($depth === 1) {
      $output .= '<img src="' . get_template_directory_uri() . '/assets/src/images/menu-before-icon.svg" alt="" class="absolute left-[-28px] top-[7px]" />';
      $output .= '<a class="font-roboto menu-col-head-a block mb-3"' . $attributes . '>';
      $output .= '<span class="menu-col-head text-lg font-medium flex items-baseline">' . $title . '</span>';
      $output .= '</a>';
    } else {
      $output .= '<a' . $attributes . '>' . $title . '</a>';
    }


    if ($depth === 0 && in_array('menu-item-has-children', $classes)) {

      $output .= "\n<div class=\"mega-menu-wrapper flex w-full items-baseline data-target menu-item-{$item->ID}\" data-target=\"menu-item-{$item->ID}\">\n";
      $output .= "<div class=\"h-[1px] bg-nitsBluePlus absolute left-0 right-0 w-[85%] mx-auto\"></div>\n";
      $output .= "<div class=\"sub-menu-wrapper flex flex-wrap main-width lg:pt-15 3xl:pt-20\">\n";
    }
  }

  function end_el(&$output, $item, $depth = 0, $args = array())
  {

    if ($depth === 0 && in_array('menu-item-has-children', (array) $item->classes)) {
      $output .= "</div>\n</div>\n"; // sub-menu-wrapper & mega-menu-wrapper
    }

    $output .= "</li>\n";
  }
}
