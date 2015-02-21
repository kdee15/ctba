<?php
    
    function ctba_preprocess_node(&$variables) {
          $variables['theme_hook_suggestions'][] = 'node__' . $variables['type'] . '__' . $variables['view_mode'];
        }

    drupal_add_js(drupal_get_path('theme', 'ctba') .'/assets/js/libraries/modernizr-2.6.2.min.js');
    drupal_add_js(drupal_get_path('theme', 'ctba') .'/assets/js/scripts/app.js');