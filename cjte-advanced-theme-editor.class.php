<?php
/**
* 
*/

// Disallow direct access.
defined('ABSPATH') or die("Access denied");

# Define Block Widget Linker extension autoloader.
CJT_Framework_Autoload_Loader::autoLoad('CJTEATE', dirname(__FILE__));

/**
* 
*/
class CJTEAdvancedThemeEditor {
	
	/**
	* put your comment there...
	* 
	* @var CJTEPAE_Views_AdvEditor_View
	*/
	protected $view;
	
	/**
	* put your comment there...
	* 
	*/
	public function getInvolved() {
		# Get involved when Wordpress plugins editor page is being opened
		add_action('load-theme-editor.php', array($this, 'overrideEditor'));
	}

	/**
	* put your comment there...
	* 
	*/
	public function overrideEditor() {
		# Creating view
		$this->view = new CJTEATE_Views_AdvEditor_View(null);
	}

}