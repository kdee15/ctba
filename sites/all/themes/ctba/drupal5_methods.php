<?php

/* Drupal 5 methods definitons */

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
 * Generate the HTML representing a given menu item ID as a tab.
 *
 * @param $mid
 *   The menu ID to render.
 * @param $active
 *   Whether this tab or a subtab is the active menu item.
 * @param $primary
 *   Whether this tab is a primary tab or a subtab.
 *
 * @ingroup themeable
 */
function WPBATheme_menu_local_task($mid, $active, $primary) {
  $link = menu_item_link($mid, FALSE);
  return '<a href="?q='.$link['href'].'" class="Button"><span class="btn">'.
         '<span class="t">'.$link['title'].'</span><span class="r"><span></span></span>'.
         '<span class="l"></span></span></a>';
} 

/**
 * Generate the HTML for a menu tree for Drupal 5.x.
 *
 * @param $pid
 *   The parent id of the menu.
 *
 * @ingroup themeable
 */
function art_menu_tree_output_d5($pid = 1) {
  if (($tree = art_menu_tree_d5($pid)) && (!empty($tree))) {
    return '<ul class="artmenu">' . $tree . '</ul>';
  }
}

/**
 * Returns a rendered menu tree for Drupal 5.x.
 *
 * @param $pid
 *   The parent id of the menu.
 */
function art_menu_tree_d5($pid = 1) {
  $menu = menu_get_menu();
  $output = '';

  if (isset($menu['visible'][$pid]) && $menu['visible'][$pid]['children']) {
    foreach ($menu['visible'][$pid]['children'] as $mid) {
      $type = isset($menu['visible'][$mid]['type']) ? $menu['visible'][$mid]['type'] : NULL;
      $children = isset($menu['visible'][$mid]['children']) ? $menu['visible'][$mid]['children'] : NULL;
      $output .= art_menu_item_d5($mid, art_menu_tree_d5($mid), count($children) == 0);
    }
  }

  return $output;
}

/**
 * Generate the HTML output for a single menu item for Drupal 5.x.
 *
 * @param $mid
 *   The menu id of the item.
 * @param $children
 *   A string containing any rendered child items of this menu.
 * @param $leaf
 *   A boolean indicating whether this menu item is a leaf.
 *
 * @ingroup themeable
 */
function art_menu_item_d5($mid, $children = '', $leaf = TRUE) {
  $link = preg_replace('~(<a [^>]*>)(.*)(</a>)~', '$1<span><span>$2</span></span>$3', menu_item_link($mid));
  if (NULL != $children) {
	return '<li>'. $link . "\n<ul>\n". $children ."</ul>\n</li>\n";
  }
  return '<li>'. $link . "</li>\n";
}