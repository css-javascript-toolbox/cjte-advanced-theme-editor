/**
* 
*/

/**
* 
*/
(function($) {
	
	/**
	* put your comment there...
	* 
	* @type T_JS_FUNCTION
	*/
	CJTEAPEExtDef = new function() {

		/**
		* put your comment there...
		* 
		* @type String
		*/
		var type = 'theme';
		
		/**
		* put your comment there...
		* 
		* @type String
		*/
		var module = 'CJTEATE';
		
		/**
		* put your comment there...
		* 
		* @type String
		*/
		var name = 'themes';
		
		/**
		* 
		*/
		this.getEditFile = function() {
			// Initialize
			var templateForm = $('#template');
			// Getting theme file path
			return templateForm.find('input[name="theme"]').val() + '/' + templateForm.find('input[name="file"]').val();
		};

		/**
		* 
		*/
		this.getModuleName = function() {
			return module;
		};
	
		/**
		* put your comment there...
		* 
		* @type String
		*/
		this.getName = function() {
			return name;
		};
		
		/**
		* 
		*/
		this.getType = function() {
			return type;
		};
		
	};

})(jQuery);