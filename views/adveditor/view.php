<?php
/**
* 
*/

// Disallow direct access.
defined('ABSPATH') or die("Access denied");

/**
* 
*/
class CJTBlocksBlockView extends CJTView {
	
	/**
	* put your comment there...
	* 
	*/
	public function __construct() {
		# Initialize view base
		parent::__construct(null);
	}	
}

/**
* 
*/
class CJTEATE_Views_AdvEditor_View extends CJTView {

	/**
	* put your comment there...
	* 
	*/
	public function __construct() {
		# Initialize view base
		parent::__construct(null);
		$dummyBlockView = new CJTBlocksBlockView();
		# Enqueue scripts and styles
		add_action('admin_print_styles', array(__CLASS__, 'enqueueStyles'));
		add_action('admin_print_scripts', array(__CLASS__, 'enqueueScripts'));
	}
	
	/**
	* put your comment there...
	* 
	*/
	public static function enqueueScripts() {
		// Delegate extensions
		$allScripts = CJTBlocksBlockView::trigger('CJTBlocksBlockView.usescripts', array(
			'framework:js:ace(loadMethod=Tag, lookFor=ace)',
			'framework:js:cookies:{CJT-}jquery.cookies.2.2.0',
			'framework:js:ui:{CJT-}jquery.toolbox',
			'extension://cjte-advanced-theme-editor/views:adveditor:public:js:{CJTEATE_Views_AdvEditor_View-}_dummycjtblock',
		));
		# Editor MAIN/CORE/LOADER module must be the latest script to run
		$allScripts[] = 'extension://cjte-advanced-theme-editor/views:adveditor:public:js:{CJTEATE_Views_AdvEditor_View-}_editor';
		# Use related scripts.
		self::useScripts(__CLASS__, $allScripts);
	}
	
	/**
	* put your comment there...
	* 
	*/
	public static function enqueueStyles() {
		# Deletegate extensions
		$allStyles = CJTBlocksBlockView::trigger('CJTBlocksBlockView.usestyles', array(
			'framework:css:{CJT-}toolbox',
			'extension://cjte-advanced-theme-editor/views:adveditor:public:css:{CJTEATE_Views_AdvEditor_View-}editor'
		));
		# Initialize style.
		self::useStyles(__CLASS__, $allStyles);
	}

	/**
	* put your comment there...
	* 
	* @param mixed $name
	* @param mixed $params
	*/
	public function getAdvEditorTemplate($name, $params = null) {
		# Open buffer
		ob_start();
		# Get template content
		require 'templates' . DIRECTORY_SEPARATOR . "{$name}.html";
		# Return content
		return ob_get_clean();
	}

} // End class.

CJTEATE_Views_AdvEditor_View::define('CJTEATE_Views_AdvEditor_View');