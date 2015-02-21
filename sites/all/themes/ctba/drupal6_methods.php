<?php

/* Drupal 6 methods definitons */

/**
 * Generate the HTML output for a single local task link.
 *
 * @ingroup themeable
 */
function WPBATheme_menu_local_task($link, $active = FALSE) {
  $output = preg_replace('~<a href="([^"]*)"[^>]*>([^<]*)</a>~',
    '<a href="$1" class="Button"><span class="btn"><span class="t">$2'.
    '</span><span class="r"><span></span></span><span class="l"></span></span></a>', $link);
  return $output;
}

// $id$ 
function WPBATheme_regions() {
  return array(
    'left' => t('left sidebar'),
	'right' => t('right sidebar'),
	'content'  => t('content'));
}

function WPBATheme_breadcrumb($breadcrumb) {
  return art_breadcrumb_woker($breadcrumb);
}

function WPBATheme_comment_wrapper($content, $type = null) {
  return art_comment_woker($content, $type = null);
}

function WPBATheme_links($links, $attributes = array('class' => 'links')) {
  return art_links_woker($links, $attributes = array('class' => 'links'));
}

function WPBATheme_menu_local_tasks() {
  return art_menu_local_tasks();
}

/**
 * Returns a rendered menu tree for Drupal 6.x.
 *
 * @param $tree
 *   A data structure representing the tree as returned from menu_tree_data.
 * @return
 *   The rendered HTML of that data structure.
 */
function art_menu_tree_output_d6($tree) {
  $tree = art_menu_tree_d6($tree);
  if (!empty($tree)) {	
    return '<ul class="artmenu">' . $tree . '</ul>';
  }
}

function art_menu_tree_d6($tree) {
  $output = '';
  $items = array();

  // Pull out just the menu items we are going to render so that we
  // get an accurate count for the first/last classes.
  foreach ($tree as $data) {
    if (!$data['link']['hidden']) {
      $items[] = $data;
    }
  }

  $num_items = count($items);
  foreach ($items as $i => $data) {
    $link = art_menu_item_link_d6($data['link']);	
	if ($data['below']) {
	  $output .= art_menu_item_d6($link, art_menu_tree_d6($data['below']));
    }
    else {
      $output .= art_menu_item_d6($link, '');
    }
  }

  return $output;
}

/**
 * Generate the HTML output for a menu item and submenu for Drupal 6.x.
 *
 * @ingroup themeable
 */
function art_menu_item_d6($link, $menu = '') {
  if ('' != $menu) {
	$menu = "<ul>\n" . $menu . "</ul>\n";
  }
  return '<li class="'. $class .'">'. $link . $menu . "</li>\n";
}

/**
 * Generate the HTML output for a single menu link for Drupal 6.x.
 *
 * @ingroup themeable
 */
function art_menu_item_link_d6($link) {
  if (empty($link['localized_options'])) {
    $link['localized_options'] = array();
  }

  $link = l($link['title'], $link['href'], $link['localized_options']);
  return preg_replace('~(<a [^>]*>)(.*)(</a>)~', '$1<span><span>$2</span></span>$3', $link);
}