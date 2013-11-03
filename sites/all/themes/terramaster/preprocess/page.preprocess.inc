<?php

/**
 * Implements hook_preprocess_page().
 */
function terramaster_preprocess_page(&$vars) {
  // You can use preprocess hooks to modify the variables before they are passed
  // to the theme function or template file.
  $vars['theme_path'] = drupal_get_path('theme', 'terramaster');
}
