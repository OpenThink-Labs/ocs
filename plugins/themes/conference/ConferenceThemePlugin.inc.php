<?php
/**
 * @file ConferenceThemePlugin.inc.php
 *
 * Copyright (c) 2000-2012 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @class ConferenceThemePlugin
 * @ingroup plugins_themes_vanilla
 *
 * @brief "Vanilla" theme plugin
 */

//$Id$

import('classes.plugins.ThemePlugin');

class ConferenceThemePlugin extends ThemePlugin {
	/**
	 * Get the name of this plugin. The name must be unique within
	 * its category.
	 * @return String name of plugin
	 */
	function getName() {
		return 'ConferenceThemePlugin';
	}

	function getDisplayName() {
		return 'Conference Theme';
	}

	function getDescription() {
		return 'Conference based layout';
	}

	function getStylesheetFilename() {
		return 'css/main.css';
	}

	function getLocaleFilename($locale) {
		return null; // No locale data
	}
}

?>
