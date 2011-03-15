<?php

		/**
		 * Get browser languages
		 *
		 * Return languages accepted by browser as an array sorted by priority
		 * @return array language codes, e. g. 'en'
		 */	 
		function getBrowserLanguages() {
			static $languages;
			if(is_array($languages)) return $languages;

			$languages = array();

			if(strlen(trim($_SERVER['HTTP_ACCEPT_LANGUAGE'])) < 1) return $languages;
			if(!preg_match_all('/(\w+(?:-\w+)?,?)+(?:;q=(?:\d+\.\d+))?/', preg_replace('/\s+/', '', $_SERVER['HTTP_ACCEPT_LANGUAGE']), $matches)) return $languages;

			$priority = 1.0;
			$languages = array();
			foreach($matches[0] as $def){
				list($list, $q) = explode(';q=', $def);
				if(!empty($q)) $priority=floatval($q);
				$list = explode(',', $list);
				foreach($list as $lang){
					$languages[$lang] = $priority;
					$priority -= 0.000000001;
				}
			}
			arsort($languages);
			$languages = array_keys($languages);
			// return list sorted by descending priority, e.g., array('en-gb','en');
			return $languages;
		}

