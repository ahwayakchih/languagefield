<?php

	require_once(EXTENSIONS . '/languagefield/lib/languages.php');

	Class extension_languageField extends Extension{
	
		public function about(){
			return array('name' => __('Field: Language'),
						 'version' => '1.2',
						 'release-date' => '2011-04-25',
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
			return true;
		}

		public function install(){
			return Symphony::Database()->query("CREATE TABLE `tbl_fields_language` (
				`id` int(11) unsigned NOT NULL auto_increment,
				`field_id` int(11) unsigned NOT NULL,
				`allow_multiple_selection` enum('yes','no') NOT NULL default 'no',
				`enable_browser_language_support` enum('yes','no') NOT NULL default 'no',
				`allowed_languages` text NOT NULL default '',
				PRIMARY KEY  (`id`),
				KEY `field_id` (`field_id`)
			)");
		}

	}

