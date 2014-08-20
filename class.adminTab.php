<?php

class AdminTabs {

	public $currentTab;
	public $tabs = array();


	function __construct($tabs) {
		foreach ($tabs as $key => $value) {
			$tab = new Tab($value);
			$this->tabs[] = $tab;
		}
	}

	function getCurrentTab() {
		//Either set to query-parameter or first tab, if no parameter is given
	}

	function buildTabs() {
		//build query strings
		//create tabs, with the current tab active
	}

	function assignContent() {
		//load the file associated with CurrentTab
	}

}

class Tab {
	
	public $name;
	public $slug;
	public $file;


	function __construct($tabBasis) {
		if(is_array($tabBasis)) {
			if (isset($tabBasis[0]))	$this->name = $tabBasis[0];
			if (isset($tabBasis[1]))	$this->slug = $tabBasis[1];
			if (isset($tabBasis[2]))	$this->file = $tabBasis[2];

			if(!isset($this->slug))		guessFromName($this->name);

			if(!isset($this->file))		$this->file = $this->slug;

		} else guessFromName($tabBasis);

		$this->file .= '.php';
	}

	function guessFromName($name) {
		$this->name	= $name;
		$this->slug	= makeSlug($name);
		$this->file = $this->slug;
	}

	function makeSlug($string) {
		$text = preg_replace('~[^\\pL\d]+~u', '-', $text);
		$text = trim($text, '-');
		$text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);
		$text = strtolower($text);
		$text = preg_replace('~[^-\w]+~', '', $text);

		if (empty($text)) {	return 'n-a'; }

  		return $text;
	}
	
}

?>