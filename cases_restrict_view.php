<?php

require_once 'cases_restrict_view.civix.php';
// phpcs:disable
use CRM_CasesRestrictView_ExtensionUtil as E;
// phpcs:enable

/**
 * Implements hook_civicrm_config().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_config/
 */
function cases_restrict_view_civicrm_config(&$config) {
  _cases_restrict_view_civix_civicrm_config($config);
}

/**
 * Implements hook_civicrm_xmlMenu().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_xmlMenu
 */
function cases_restrict_view_civicrm_xmlMenu(&$files) {
  _cases_restrict_view_civix_civicrm_xmlMenu($files);
}

/**
 * Implements hook_civicrm_install().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_install
 */
function cases_restrict_view_civicrm_install() {
  _cases_restrict_view_civix_civicrm_install();
}

/**
 * Implements hook_civicrm_postInstall().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_postInstall
 */
function cases_restrict_view_civicrm_postInstall() {
  _cases_restrict_view_civix_civicrm_postInstall();
}

/**
 * Implements hook_civicrm_uninstall().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_uninstall
 */
function cases_restrict_view_civicrm_uninstall() {
  _cases_restrict_view_civix_civicrm_uninstall();
}

/**
 * Implements hook_civicrm_enable().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_enable
 */
function cases_restrict_view_civicrm_enable() {
  _cases_restrict_view_civix_civicrm_enable();
}

/**
 * Implements hook_civicrm_disable().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_disable
 */
function cases_restrict_view_civicrm_disable() {
  _cases_restrict_view_civix_civicrm_disable();
}

/**
 * Implements hook_civicrm_upgrade().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_upgrade
 */
function cases_restrict_view_civicrm_upgrade($op, CRM_Queue_Queue $queue = NULL) {
  return _cases_restrict_view_civix_civicrm_upgrade($op, $queue);
}

/**
 * Implements hook_civicrm_managed().
 *
 * Generate a list of entities to create/deactivate/delete when this module
 * is installed, disabled, uninstalled.
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_managed
 */
function cases_restrict_view_civicrm_managed(&$entities) {
  _cases_restrict_view_civix_civicrm_managed($entities);
}

/**
 * Implements hook_civicrm_caseTypes().
 *
 * Generate a list of case-types.
 *
 * Note: This hook only runs in CiviCRM 4.4+.
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_caseTypes
 */
function cases_restrict_view_civicrm_caseTypes(&$caseTypes) {
  _cases_restrict_view_civix_civicrm_caseTypes($caseTypes);
}

/**
 * Implements hook_civicrm_angularModules().
 *
 * Generate a list of Angular modules.
 *
 * Note: This hook only runs in CiviCRM 4.5+. It may
 * use features only available in v4.6+.
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_angularModules
 */
function cases_restrict_view_civicrm_angularModules(&$angularModules) {
  _cases_restrict_view_civix_civicrm_angularModules($angularModules);
}

/**
 * Implements hook_civicrm_alterSettingsFolders().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_alterSettingsFolders
 */
function cases_restrict_view_civicrm_alterSettingsFolders(&$metaDataFolders = NULL) {
  _cases_restrict_view_civix_civicrm_alterSettingsFolders($metaDataFolders);
}

/**
 * Implements hook_civicrm_entityTypes().
 *
 * Declare entity types provided by this module.
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_entityTypes
 */
function cases_restrict_view_civicrm_entityTypes(&$entityTypes) {
  _cases_restrict_view_civix_civicrm_entityTypes($entityTypes);
}

/**
 * Implements hook_civicrm_themes().
 */
function cases_restrict_view_civicrm_themes(&$themes) {
  _cases_restrict_view_civix_civicrm_themes($themes);
}

// --- Functions below this ship commented out. Uncomment as required. ---

/**
 * Implements hook_civicrm_preProcess().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_preProcess
 */
//function cases_restrict_view_civicrm_preProcess($formName, &$form) {
//
//}

/**
 * Implements hook_civicrm_navigationMenu().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_navigationMenu
 */
//function cases_restrict_view_civicrm_navigationMenu(&$menu) {
//  _cases_restrict_view_civix_insert_navigation_menu($menu, 'Mailings', array(
//    'label' => E::ts('New subliminal message'),
//    'name' => 'mailing_subliminal_message',
//    'url' => 'civicrm/mailing/subliminal',
//    'permission' => 'access CiviMail',
//    'operator' => 'OR',
//    'separator' => 0,
//  ));
//  _cases_restrict_view_civix_navigationMenu($menu);
//}

/**
 *  Implements hook_civicrm_pageRun.
 */
function cases_restrict_view_civicrm_pageRun( &$page )
{
  $pageName = $page->getVar('_name');
  if ($pageName == 'CRM_Case_Page_Tab') {
    $contact_id = $page->getVar('_contactId');
    $client_ids = [1,7654,5,2];
    if (in_array($contact_id, $client_ids) ) {
      //show message
      CRM_Core_Session::setStatus(ts('You do not have permission to access this page.'));
      //redirect to dashboard
      CRM_Utils_System::redirect(CRM_Utils_System::url('civicrm/dashboard', 'reset=1'));

    }
  }
}
