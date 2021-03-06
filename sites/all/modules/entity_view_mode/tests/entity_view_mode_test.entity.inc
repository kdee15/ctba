<?php

/**
 * @file
 * Entity view mode integration for the entity_view_mode_test module.
 */

/**
 * Implements hook_entity_view_mode_info().
 */
function entity_view_mode_test_entity_view_mode_info() {
  $info['node']['info_1'] = array(
    'label' => t('Hook-defined view mode #1'),
  );
  $info['node']['info_2'] = array(
    'label' => t('Hook-defined view mode #2'),
    'custom settings' => FALSE,
  );
  $info['node']['info_3'] = array(
    'label' => t('Hook-defined view mode #3'),
  );
  $info['node']['full'] = array(
    'label' => t('Full view mode already defined by core.'),
    'custom settings' => TRUE,
  );

  $info['taxonomy_term']['info_1'] = array(
    'label' => t('Hook-defined view mode #1'),
    'custom settings' => TRUE,
  );

  // Invalid entity type.
  $info['invalid-type']['test'] = array(
    'label' => t('Test view mode'),
  );

  // Call entity_get_info() from inside this hook to test recursion prevention.
  foreach (entity_get_info() as $entity_type => $entity_info) {
    $info[$entity_type]['recursion'] = array(
      'label' => t('Recursion'),
    );
  }

  return $info;
}

/**
 * Implements hook_entity_view_mode_info_alter().
 */
function entity_view_mode_test_entity_view_mode_info_alter(&$info) {
  $info['node']['info_2']['label'] = t('Hook-altered view mode');
  $info['node']['info_2']['custom settings'] = TRUE;
}
