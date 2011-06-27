<?php

	require_once(EXTENSIONS . '/languagefield/lib/languages.php');

	Class extension_languageField extends Extension{
	
		public function about(){
			return array('name' => __('Field: Language'),
						 'version' => '1.3',
						 'release-date' => '2011-06-27',
						 'author' => array('name' => 'Marcin Konicki',
										   'website' => 'http://ahwayakchih.neoni.net',
										   'email' => 'ahwayakchih@neoni.net'),
						 'description' => __('Adds browser-languages parameter to list of all parameters available for data-sources and XSLT to use. Enables language field.')
			);
		}

		public function getSubscribedDelegates(){
			return array(
				array(
					'page' => '/frontend/',
					'delegate' => 'FrontendParamsResolve',
					'callback' => '__pageParamsResolve'
				),
			);
		}

		public function __pageParamsResolve($ctx) {
			// context array contains: &$params
			$languages = getBrowserLanguages();
			$ctx['params']['browser-languages'] = implode(',', $languages);
/*
			$index = 1;
			foreach($languages as $lang){
				$ctx['params']['browser-language-'.$index++] = $lang;
			}
*/
		}

		public function uninstall(){
			return Symphony::Database()->query("DROP TABLE `tbl_fields_language`");
		}
		
		public function update($previousVersion){
			$status = true;

			if (version_compare($previousVersion, '1.3', '<')) {
				$found = Symphony::Database()->fetchVar('Field', 0, "SHOW COLUMNS FROM `tbl_fields_language` LIKE 'default_language'");
				if(!$found) {
					$status = Symphony::Database()->query(
						"ALTER TABLE `tbl_fields_language` ADD `default_language` varchar(10) default 'en'"
					);
				}
			}

			return $status;
		}

		public function install(){
			return Symphony::Database()->query("CREATE TABLE `tbl_fields_language` (
				`id` int(11) unsigned NOT NULL auto_increment,
				`field_id` int(11) unsigned NOT NULL,
				`allow_multiple_selection` enum('yes','no') NOT NULL default 'no',
				`enable_browser_language_support` enum('yes','no') NOT NULL default 'no',
				`allowed_languages` text NOT NULL default '',
				`default_language` varchar(10) default '',
				PRIMARY KEY  (`id`),
				KEY `field_id` (`field_id`)
			)");
		}

	}

