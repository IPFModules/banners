<?php
/**
* File containing onUpdate and onInstall functions for the module
*
* This file is included by the core in order to trigger onInstall or onUpdate functions when needed.
* Of course, onUpdate function will be triggered when the module is updated, and onInstall when
* the module is originally installed.
*
* @copyright	The ImpressCMS Project
* @license		http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU General Public License (GPL)
* @since		1.0
* @author		Phoenyx <phoenyx@impresscms.de>
* @package		banners
* @version		$Id$
*/
defined("ICMS_ROOT_PATH") or die("ICMS root path not defined");

// this needs to be the latest db version
define("BANNERS_DB_VERSION", 1);

/**
 * it is possible to define custom functions which will be call when the module is updating at the
 * correct time in update incrementation. Simpy define a function named <direname_db_upgrade_db_version>
 */
//function banners_db_upgrade_1() {}

function icms_module_update_banners($module) {
	// optimize tables
	/*$banners_banner_handler = icms_getModuleHandler('banner', basename(dirname(dirname(__FILE__))), 'banners');
	$banner_table = new icms_db_legacy_updater_Table($module->getVar("dirname") . "_banner");
	$banner_table->addAlteredField('type', 'tinyint(1) not null default ' . BANNERS_BANNER_TYPE_IMAGE);
	$banner_table->addAlteredField('contract', 'tinyint(1) not null default ' . BANNERS_BANNER_CONTRACT_TIME);
	$banner_table->addAlteredField('active', 'tinyint(1) not null default 0');
	$banner_table->alterTable();*/
    return TRUE;
}

function icms_module_install_banners($module) {
	return TRUE;
}