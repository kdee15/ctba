<?php



/**

 * @file

 * template.php

 */





/* Add javascript files for front-page jquery slideshow.

 **********************************************

*/ 

if (drupal_is_front_page()) {

  drupal_add_css(drupal_get_path('theme', 'WPBATheme') . '/css/homepage.css');

}


drupal_add_js(drupal_get_path('theme', 'WPBATheme') .'/js/ctbascript.js');



?>
