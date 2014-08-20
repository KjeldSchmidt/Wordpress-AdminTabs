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
	public $filename;


	function __construct($tabs) {

	}
}

?>