<?php

	require_once(EXTENSIONS . '/languagefield/lib/languages.php');

	Class fieldLanguage extends Field {

		// I don't know these languages, so if You know for sure that browser uses different code,
		// or that native name should be different, please let me know about that :).
		// It would also be great, if whole string could be in native form, including country name.
		public $lang = array(						// [English name]
			'ab' => 'аҧсуа бызшәа',					// Abkhazian
			'af' => 'Afrikaans',					// Afrikaans
			'sq' => 'shqip',						// Albanian
			'am' => 'አማርኛ',							// Amharic
			'ar-dz' => 'العربية (Algeria)',			// Arabic
			'ar-bh' => 'العربية (Bahrain)',			// Arabic
			'ar-eg' => 'العربية (Egypt)',			// Arabic
			'ar-iq' => 'العربية (Iraq)',			// Arabic
			'ar-jo' => 'العربية (Jordan)',			// Arabic
			'ar-kw' => 'العربية (Kuwait)',			// Arabic
			'ar-lb' => 'العربية (Lebanon)',			// Arabic
			'ar-ly' => 'العربية (Libya)',			// Arabic
			'ar-ma' => 'العربية (Morocco)',			// Arabic
			'ar-om' => 'العربية (Oman)',			// Arabic
			'ar-qa' => 'العربية (Qatar)',			// Arabic
			'ar-sa' => 'العربية (Saudi Arabia)',	// Arabic
			'ar-sy' => 'العربية (Syria)',			// Arabic
			'ar-tn' => 'العربية (Tunisia)',			// Arabic
			'ar-ae' => 'العربية (U.A.E.)',			// Arabic
			'ar-ye' => 'العربية (Yemen)',			// Arabic
			'ar' => 'العربية',						// Arabic
			'hy' => 'Հայերեն',						// Armenian
			'as' => 'অসমীয়া',							// Assamese
			'az' => 'azərbaycan',					// Azeri
			'eu' => 'euskera',						// Basque
			'be' => 'Беларуская',					// Belarusian
			'bn' => 'বাংলা',							// Bengali
			'bg' => 'Български',					// Bulgarian
			'ca' => 'Català',						// Catalan
			'zh-cn' => '简体中文 (China)',			// Chinese simplified script
			'zh-hk' => '繁體中文 (Hong Kong SAR)',	// Chinese traditional script
			'zh-mo' => '繁體中文 (Macau SAR)',		// Chinese traditional script
			'zh-sg' => '简体中文 (Singapore)',		// Chinese simplified script
			'zh-tw' => '繁體中文 (Taiwan)',			// Chinese traditional script
			'zh' => '中文',							// Chinese
			'hr' => 'Hrvatski',						// Croatian
			'cs' => 'čeština',						// Czech
			'da' => 'Dansk',						// Danish
			'dv' => 'ދިވެހި',							// Divehi
			'nl-be' => 'Nederlands (Belgium)',		// Dutch
			'nl' => 'Nederlands (Netherlands)',		// Dutch
			'en-au' => 'English (Australia)',		// English
			'en-bz' => 'English (Belize)',			// English
			'en-ca' => 'English (Canada)',			// English
			'en-ie' => 'English (Ireland)',			// English
			'en-jm' => 'English (Jamaica)',			// English
			'en-nz' => 'English (New Zealand)',		// English
			'en-ph' => 'English (Philippines)',		// English
			'en-za' => 'English (South Africa)',	// English
			'en-tt' => 'English (Trinidad)',		// English
			'en-gb' => 'English (United Kingdom)',	// English
			'en-us' => 'English (United States)',	// English
			'en-zw' => 'English (Zimbabwe)',		// English
			'en' => 'English',						// English
			'ee' => 'Ɛʋɛ',							// Ewe
			'et' => 'Eesti',						// Estonian
			'fo' => 'føroyskt',						// Faeroese
			'fa' => 'فارسی',						// Farsi
			'fi' => 'suomi',						// Finnish
			'fr-be' => 'français (Belgium)',		// French (Belgium)
			'fr-ca' => 'français canadien',			// French (Canada)
			'fr-lu' => 'français (Luxembourg)',		// French
			'fr-mc' => 'français (Monaco)',			// French
			'fr-ch' => 'français (Switzerland)',	// French
			'fr' => 'français',						// French
			'ff' => 'Fulfulde, Pulaar, Pular',		// Fula, Fulah, Fulani
			'gl' => 'Galego',						// Galician
			'gd' => 'Gàidhlig',						// Gaelic (Scottish)
			'ga' => 'Gaeilge',						// Gaelic (Irish)
			'gv' => 'Gaelg',						// Gaelic (Manx) (Isle of Man)
			'ka' => 'ქართული ენა',					// Georgian
			'de-at' => 'Deutsch (Austria)',			// German
			'de-li' => 'Deutsch (Liechtenstein)',	// German
			'de-lu' => 'Deutsch (Luxembourg)',		// German
			'de-ch' => 'Deutsch (Switzerland)',		// German
			'de' => 'Deutsch',						// German
			'el' => 'Ελληνικά',						// Greek
			'gu' => 'ગુજરાતી',							// Gujarati
			'ha' => 'هَوْسَ',							// Hausa
			'he' => 'עברית',						// Hebrew
			'hi' => 'हिंदी',							// Hindi
			'hu' => 'Magyar',						// Hungarian
			'is' => 'Íslenska',						// Icelandic
			'id' => 'Bahasa Indonesia',				// Indonesian
			'it-ch' => 'italiano (Switzerland)',	// Italian
			'it' => 'italiano',						// Italian
			'ja' => '日本語',							// Japanese
			'kn' => 'ಕನ್ನಡ',						// Kannada
			'kk' => 'Қазақ',						// Kazakh
			'rw' => 'Kinyarwanda',					// Kinyarwanda
			'kok' => 'कोंकणी',							// Konkani
			'ko' => '한국어/조선말',					// Korean
			'kz' => 'Кыргыз',						// Kyrgyz
			'lv' => 'Latviešu',						// Latvian
			'lt' => 'Lietuviškai',					// Lithuanian
			'luo'=> 'Dholuo',						// Luo
			'ms' => 'Bahasa Melayu',				// Malay
			'mk' => 'Македонски',					// Macedonian
			'ml' => 'മലയാളം',							// Malayalam
			'mt' => 'Malti',						// Maltese
			'mr' => 'मराठी',							// Marathi
			'mn' => 'Монгол',						// Mongolian  (Cyrillic)
			'ne' => 'नेपाली',							// Nepali
			'nb-no' => 'Norsk bokmål',				// Norwegian Bokmål
			'nb' => 'Norsk bokmål',					// Norwegian Bokmål
			'nn-no' => 'Norsk nynorsk',				// Norwegian Nynorsk
			'nn' => 'Norsk nynorsk',				// Norwegian Nynorsk
			'no' => 'Norsk',						// Norwegian
			'or' => 'ଓଡ଼ିଆ',							// Oriya
			'ps' => 'پښتو',						// Pashto
			'pl' => 'polski',						// Polish
			'pt-br' => 'português brasileiro',		// Portuguese (Brasil)
			'pt' => 'português',					// Portuguese
			'pa' => 'پنجابی/ਪੰਜਾਬੀ',					// Punjabi
			'qu' => 'Runa Simi/Kichwa',				// Quechua
			'rm' => 'Romansch',						// Rhaeto-Romanic
			'ro-md' => 'Română (Moldova)',			// Romanian
			'ro' => 'Română',						// Romanian
			'rn' => 'kiRundi', 						// Rundi
			'ru-md' => 'Pyccĸий (Moldova)',			// Russian
			'ru' => 'Pyccĸий',						// Russian
			'sg' => 'yângâ tî sängö',				// Sango
			'sa' => 'संस्कृतम्',							// Sanskrit
			'sc' => 'sardu',						// Sardinian
			'sr' => 'Srpski/српски',				// Serbian
			'sn' => 'chiShona',						// Shona
			'ii' => 'ꆇꉙ',							// Sichuan Yi
			'si' => 'සිංහල',							// Sinhalese, Sinhala
			'sk' => 'Slovenčina',					// Slovak
			'ls' => 'Slovenščina',					// Slovenian
			'so' => 'Soomaaliga/af Soomaali',		// Somali
			'st' => 'Sesotho',						// Sotho, Sutu
			'es-ar' => 'Español (Argentina)',		// Spanish
			'es-bo' => 'Español (Bolivia)',			// Spanish
			'es-cl' => 'Español (Chile)',			// Spanish
			'es-co' => 'Español (Colombia)',		// Spanish
			'es-cr' => 'Español (Costa Rica)',		// Spanish
			'es-do' => 'Español (Dominican Republic)',// Spanish
			'es-ec' => 'Español (Ecuador)',			// Spanish
			'es-sv' => 'Español (El Salvador)',		// Spanish
			'es-gt' => 'Español (Guatemala)',		// Spanish
			'es-hn' => 'Español (Honduras)',		// Spanish
			'es-mx' => 'Español (Mexico)',			// Spanish
			'es-ni' => 'Español (Nicaragua)',		// Spanish
			'es-pa' => 'Español (Panama)',			// Spanish
			'es-py' => 'Español (Paraguay)',		// Spanish
			'es-pe' => 'Español (Peru)',			// Spanish
			'es-pr' => 'Español (Puerto Rico)',		// Spanish
			'es-us' => 'Español (United States)',	// Spanish
			'es-uy' => 'Español (Uruguay)',			// Spanish
			'es-ve' => 'Español (Venezuela)',		// Spanish
			'es' => 'Español',						// Spanish
			'sw' => 'kiswahili',					// Swahili
			'sv-fi' => 'svenska (Finland)',			// Swedish
			'sv' => 'svenska',						// Swedish
			'syr' => 'ܣܘܪܝܝܐ',						// Syriac
			'ta' => 'தமிழ்',							// Tamil
			'tt' => 'татарча/تاتارچا',				// Tatar
			'te' => 'తెలుగు',							// Telugu
			'th' => 'ภาษาไทย',						// Thai
			'ti' => 'ትግርኛ',							// Tigrinya
			'ts' => 'Xitsonga',						// Tsonga
			'tn' => 'Setswana',						// Tswana
			'tr' => 'Türkçe',						// Turkish
			'tk' => 'Түркмен',						// Turkmen
			'ug' => 'ئۇيغۇرچە‎/Uyƣurqə/Уйғурчә',	// Uighur, Uyghur
			'uk' => 'Українська',					// Ukrainian
			'ur' => 'اردو',							// Urdu
			'uz' => 'o\'zbek',						// Uzbek
			've' => 'Tshivenḓa',					// Venda
			'vi' => 'Tiếng Việt',					// Vietnamese
			'wa' => 'walon',						// Waloon
			'cy' => 'Cymraeg',						// Welsh
			'wo' => 'Wolof',						// Wolof
			'xh' => 'isiXhosa',						// Xhosa
			'yi' => 'ייִדיש',						// Yiddish
			'yo' => 'Yorùbá',						// Yoruba
			'zu' => 'isiZulu',						// Zulu
		);

		public function __construct() {
			parent::__construct();

			$this->_name = __('Language');
			$this->_required = true;

			// Set defaults
			$this->set('show_column', 'no');
			$this->set('required', 'yes');
		}


	/*-------------------------------------------------------------------------
		Definition:
	-------------------------------------------------------------------------*/

		public function canToggle() {
			return ($this->get('allow_multiple_selection') == 'yes' ? false : true);
		}

		public function getToggleStates() {
			$states = array();
			$allowed = array_fill_keys(explode(',', $this->get('allowed_languages')), NULL);
			return array_intersect_key($this->lang, $allowed);
		}

		public function toggleFieldData(array $data, $newState, $entry_id = null){
			$data['lang'] = General::sanitize($newState);
			return $data;
		}

		public function canFilter() {
			return true;
		}

		public function canPrePopulate() {
			return true;
		}

		public function isSortable() {
			return true;
		}

		public function allowDatasourceOutputGrouping() {
			return $this->canToggle();
		}

		public function requiresSQLGrouping() {
			return true;
		}

		public function allowDatasourceParamOutput() {
			return true;
		}


	/*-------------------------------------------------------------------------
		Setup:
	-------------------------------------------------------------------------*/

		public function createTable() {
			return Symphony::Database()->query(
				'CREATE TABLE IF NOT EXISTS `tbl_entries_data_'.$this->get('id').'` (
					`id` int(11) unsigned NOT NULL auto_increment,
					`entry_id` int(11) unsigned NOT NULL,
					`lang` varchar(10) default NULL,
					PRIMARY KEY (`id`),
					KEY `entry_id` (`entry_id`),
					KEY `language` (`lang`)
				) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;'
			);
		}


	/*-------------------------------------------------------------------------
		Settings:
	-------------------------------------------------------------------------*/

		public function findDefaults(array &$settings) {
			if (!isset($settings['allow_multiple_selection'])) $settings['allow_multiple_selection'] = 'no';
			if (!isset($settings['enable_browser_language_support'])) $settings['enable_browser_language_support'] = 'no';
			if (!isset($settings['allowed_languages'])) $settings['allowed_languages'] = '';
		}

		public function displaySettingsPanel(XMLElement &$wrapper, $errors = null) {
			parent::displaySettingsPanel($wrapper, $errors);

			$group = new XMLElement('div', NULL, array('class' => 'two columns'));

			$div = new XMLElement('div', NULL, array('class' => 'column'));

			// Allow to select which languages should be available for authors to select when publishing entries.
			$options = array();
			$selected = $this->get('allowed_languages');
			if (!is_array($selected)) {
				if (empty($selected)) $selected = array();
				else $selected = explode(',', $selected);
			}
			foreach ($this->lang as $lang => $name) {
				$options[] = array($lang, in_array($lang, $selected), $name);
			}
			$label = Widget::Label(__('Show only'));
			$label->appendChild(Widget::Select('fields['.$this->get('sortorder').'][allowed_languages][]', $options, array('multiple' => 'multiple')));
			$div->appendChild($label);

			$group->appendChild($div);

			$div = new XMLElement('div', NULL, array('class' => 'column'));

			// Select default language, used when browser does not define preferred languages, or none of them is used on site.
			$selected = $this->get('default_language');
			$options = array(array('', !isset($this->lang[$selected]), ''));
			foreach ($this->lang as $lang => $name) {
				$options[] = array($lang, ($lang == $selected), $name);
			}
			$label = Widget::Label(__('Default to'));
			$label->appendChild(Widget::Select('fields['.$this->get('sortorder').'][default_language]', $options));
			$div->appendChild($label);

			// Allow selection of multiple items
			$label = Widget::Label();
			$input = Widget::Input('fields['.$this->get('sortorder').'][allow_multiple_selection]', 'yes', 'checkbox');
			if ($this->get('allow_multiple_selection') == 'yes') $input->setAttribute('checked', 'checked');
			$label->setValue(__('%s Allow selection of multiple languages', array($input->generate())));
			$div->appendChild($label);

			// When browser language support is enabled, and data-source is sorted by this field,
			// entries will be sorted by the same order as languages found in list of browser's preferred
			// languages.
			$label = Widget::Label();
			$input = Widget::Input('fields['.$this->get('sortorder').'][enable_browser_language_support]', 'yes', 'checkbox');
			if ($this->get('enable_browser_language_support') == 'yes') $input->setAttribute('checked', 'checked');
			$label->setValue(__('%s Support browser\'s language settings', array($input->generate())));
			$div->appendChild($label);

			$group->appendChild($div);
			$wrapper->appendChild($group);

			$div = new XMLElement('div', NULL, array('class' => 'two columns'));
			$this->appendShowColumnCheckbox($div);
			$this->appendRequiredCheckbox($div);
			$wrapper->appendChild($div);
		}

		public function commit() {
			if (!parent::commit()) return false;

			$id = $this->get('id');

			if ($id === false) return false;

			$fields = array();
			$fields['field_id'] = $id;
			$fields['allow_multiple_selection'] = ($this->get('allow_multiple_selection') ? $this->get('allow_multiple_selection') : 'no');
			$fields['enable_browser_language_support'] = ($this->get('enable_browser_language_support') ? $this->get('enable_browser_language_support') : 'no');
			$fields['allowed_languages'] = ($this->get('allowed_languages') ? implode(',', $this->get('allowed_languages')) : '');
			$fields['default_language'] = (isset($this->lang[$this->get('default_language')]) ? $this->get('default_language') : '');

			return FieldManager::saveSettings($id, $fields);
		}


	/*-------------------------------------------------------------------------
		Publish:
	-------------------------------------------------------------------------*/

		public function displayPublishPanel(XMLElement &$wrapper, $data = null, $flagWithError = null, $fieldnamePrefix = null, $fieldnamePostfix = null, $entry_id = null) {
			if (empty($data) && (empty($entry_id) || $this->get('required') == 'yes')) $data = array('lang' => $this->get('default_language'));
			if (!is_array($data['lang'])) $data['lang'] = array($data['lang']);

			$options = array();
			if ($this->get('required') != 'yes') $options[] = array(NULL, false, NULL);

			foreach ($this->getToggleStates() as $lang => $name) {
				$options[] = array($lang, in_array($lang, $data['lang']), $name);
			}

			$fieldname = 'fields'.$fieldnamePrefix.'['.$this->get('element_name').']'.$fieldnamePostfix;
			if ($this->get('allow_multiple_selection') == 'yes') $fieldname .= '[]';

			$label = Widget::Label($this->get('label'));
			if ($this->get('required') != 'yes') $label->appendChild(new XMLElement('i', __('Optional')));
			$label->appendChild(Widget::Select($fieldname, $options, ($this->get('allow_multiple_selection') == 'yes' ? array('multiple' => 'multiple') : NULL)));

			if ($flagWithError != NULL) $wrapper->appendChild(Widget::wrapFormElementWithError($label, $flagWithError));
			else $wrapper->appendChild($label);
		}

		public function processRawFieldData($data, &$status, &$message = null, $simulate = false, $entry_id = null) {
			$status = self::__OK__;

			if (empty($data)) return NULL;

			if (!is_array($data)) {
				if (isset($this->lang[$data])) return array('lang' => $data);
				else {
					$status = self::__INVALID_FIELDS__;
					return NULL;
				}
			}

			$result = array('lang' => array());
			foreach ($data as $lang) {
				if (isset($this->lang[$lang])) $result['lang'][] = $lang;
			}

			if (empty($result['lang'])) $result = array();

			return $result;
		}


	/*-------------------------------------------------------------------------
		Output:
	-------------------------------------------------------------------------*/

		public function appendFormattedElement(XMLElement &$wrapper, $data, $encode = false, $mode = null, $entry_id = null) {
			if (!is_array($data) or empty($data)) return;

			$list = new XMLElement($this->get('element_name'));

			if (!is_array($data['lang'])) {
				$data['lang'] = array($data['lang']);
			}

			foreach ($data['lang'] as $lang) {
				$list->appendChild(new XMLElement('item', General::sanitize($this->lang[$lang]), array('handle'	=> $lang)));
			}

			$wrapper->appendChild($list);
		}

		public function prepareTableValue($data, XMLElement $link = NULL, $entry_id = null) {
			if (!is_array($data) || (is_array($data) && !isset($data['lang']))) return parent::prepareTableValue(NULL);
			if (!is_array($data['lang'])) $data['lang'] = array($data['lang']);

			$result = array();
			foreach ($data['lang'] as $lang) {
				if (isset($this->lang[$lang])) $result[$lang] = $this->lang[$lang];
			}

			return parent::prepareTableValue(array('value' => @implode(', ', $result)), $link);
		}

		public function getParameterPoolValue(array $data, $entry_id = NULL) {
			if (is_array($data['lang'])) return implode(', ', $data['lang']);
			return $data['lang'];
		}


	/*-------------------------------------------------------------------------
		Filtering:
	-------------------------------------------------------------------------*/

		public function displayDatasourceFilterPanel(&$wrapper, $data = NULL, $errors = NULL, $fieldnamePrefix = NULL, $fieldnamePostfix = NULL) {
			parent::displayDatasourceFilterPanel($wrapper, $data, $errors, $fieldnamePrefix, $fieldnamePostfix);

			$existing_options = $this->fetchLanguages();
			if (is_array($existing_options) && !empty($existing_options)) {
				$optionlist = new XMLElement('ul');
				$optionlist->setAttribute('class', 'tags');

				foreach ($existing_options as $option) {
					$optionlist->appendChild(new XMLElement('li', $this->lang[$option], array('class' => $option)));
				}

				$wrapper->appendChild($optionlist);
			}
		}

		public function buildDSRetrievalSQL($data, &$joins, &$where, $andOperation = false) {
			$field_id = $this->get('id');
			if (!is_array($data)) $data = array($data);

			if (self::isFilterRegex($data[0])) {
				$this->_key++;
				$this->buildRegexSQL($data[0], array('lang'), $joins, $where);
			} elseif ($andOperation) {
				foreach ($data as $value) {
					$this->_key++;
					$value = $this->cleanValue($value);
					$joins .= " LEFT JOIN `tbl_entries_data_{$field_id}` AS t{$field_id}_{$this->_key} ON (e.id = t{$field_id}_{$this->_key}.entry_id) ";
					$where .= " AND (t{$field_id}_{$this->_key}.lang = '{$value}') ";
				}
			} else {
				$this->_key++;
				$data = implode("', '", array_map(array($this, 'cleanValue'), $data));
				$joins .= " LEFT JOIN `tbl_entries_data_{$field_id}` AS t{$field_id}_{$this->_key} ON (e.id = t{$field_id}_{$this->_key}.entry_id) ";
				$where .= " AND (t{$field_id}_{$this->_key}.lang IN ('{$data}')) ";
			}

			return true;
		}


	/*-------------------------------------------------------------------------
		Sorting:
	-------------------------------------------------------------------------*/

		public function buildSortingSQL(&$joins, &$where, &$sort, $order = 'ASC') {
			if ($this->get('enable_browser_language_support') == 'yes' && count($languages = getBrowserLanguages()) > 0) {
				// Allow selecting default language, so if browser does not hint us about languages, or none of 
				// browser languages is found, next in order will always be default.
				$default = $this->get('default_language');
				if (isset($this->lang[$default]) && !in_array($default, $languages)) array_push($languages, $default);

				// If user selected specific language, make sure it will be the first
				if ((($temp = $_GET['language']) || ($temp = $_COOKIE['language']) || ($temp = $_SESSION['language'])) && isset($this->lang[$temp])) {
					array_unshift($languages, $temp);
					if ($_GET['language']) {
						setcookie('language', $temp, time() + TWO_WEEKS, '/');
						$_SESSION['language'] = $temp;
					}
				}

				// array_unique keeps first encountered value, so it has to be run before array_reverse,
				// otherwise selected order will not be used, e.g., "pl,en-US,en,pl" (after passing ?language=pl in URL)
				// will become "pl,en,en-US" instead of "en,en-US,pl".
				$languages = array_map(array($this, 'cleanValue'), ($order == 'ASC' ? array_unique($languages) : array_reverse(array_unique($languages))));
				$order = 'DESC';
				$field = "FIELD(`ed`.`lang`, '".implode("','", $languages)."')";
			}
			else $field = '`ed`.`lang`';

			$joins .= " INNER JOIN `tbl_entries_data_".$this->get('id')."` AS `ed` ON (`e`.`id` = `ed`.`entry_id`) ";
			$sort = ' ORDER BY ' . (in_array(strtolower($order), array('random', 'rand')) ? 'RAND()' : "{$field} {$order} ");
		}


	/*-------------------------------------------------------------------------
		Grouping:
	-------------------------------------------------------------------------*/

		public function groupRecords($records) {
			if (!is_array($records) || empty($records)) return;

			$name = $this->get('element_name');
			$groups = array($name => array());

			foreach ($records as $r) {
				$data = $r->getData($this->get('id'));

				if (!isset($groups[$name][$data['lang']])) {
					$groups[$name][$data['lang']] = array(
						'attr' => array(
							'handle' => $data['lang']
						),
						'records' => array(),
						'groups' => array(),
					);
				}
				$groups[$name][$data['lang']]['records'][] = $r;
			}

			return $groups;
		}


	/*-------------------------------------------------------------------------
		Events:
	-------------------------------------------------------------------------*/

		public function getExampleFormMarkup() {
			$states = $this->getToggleStates();
			$options = array();

			foreach ($states as $lang => $name) {
				$options[] = array($lang, NULL, $name);
			}

			$fieldname = 'fields['.$this->get('element_name').']';
			if ($this->get('allow_multiple_selection') == 'yes') $fieldname .= '[]';

			$label = Widget::Label($this->get('label'));
			if ($this->get('required') != 'yes') $label->appendChild(new XMLElement('i', __('Optional')));
			$label->appendChild(Widget::Select($fieldname, $options, ($this->get('allow_multiple_selection') == 'yes' ? array('multiple' => 'multiple') : NULL)));

			return $label;
		}


	/*-------------------------------------------------------------------------
		Utilities:
	-------------------------------------------------------------------------*/

		private function fetchLanguages() {
			return Symphony::Database()->fetchCol('lang', "SELECT `lang` FROM `tbl_entries_data_".$this->get('id')."` GROUP BY `lang`");
		}
	}

