<?php

require_once 'guatemalaregions.civix.php';
use CRM_Guatemalaregions_ExtensionUtil as E;

/**
 * Implements hook_civicrm_config().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_config/ 
 */
function guatemalaregions_civicrm_config(&$config) {
  _guatemalaregions_civix_civicrm_config($config);
}

/**
 * Implements hook_civicrm_xmlMenu().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_xmlMenu
 */
function guatemalaregions_civicrm_xmlMenu(&$files) {
  _guatemalaregions_civix_civicrm_xmlMenu($files);
}

/**
 * Implements hook_civicrm_install().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_install
 */
function guatemalaregions_civicrm_install() {
  _guatemalaregions_civix_civicrm_install();
}

/**
 * Implements hook_civicrm_postInstall().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_postInstall
 */
function guatemalaregions_civicrm_postInstall() {
  _guatemalaregions_civix_civicrm_postInstall();
}

/**
 * Implements hook_civicrm_uninstall().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_uninstall
 */
function guatemalaregions_civicrm_uninstall() {
  _guatemalaregions_civix_civicrm_uninstall();
}

/**
 * Implements hook_civicrm_enable().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_enable
 */
function guatemalaregions_civicrm_enable() {
  _guatemalaregions_civix_civicrm_enable();
}

/**
 * Implements hook_civicrm_disable().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_disable
 */
function guatemalaregions_civicrm_disable() {
  _guatemalaregions_civix_civicrm_disable();
}

/**
 * Implements hook_civicrm_upgrade().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_upgrade
 */
function guatemalaregions_civicrm_upgrade($op, CRM_Queue_Queue $queue = NULL) {
  return _guatemalaregions_civix_civicrm_upgrade($op, $queue);
}

/**
 * Implements hook_civicrm_alterSettingsFolders().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_alterSettingsFolders
 */
function guatemalaregions_civicrm_alterSettingsFolders(&$metaDataFolders = NULL) {
  _guatemalaregions_civix_civicrm_alterSettingsFolders($metaDataFolders);
}
