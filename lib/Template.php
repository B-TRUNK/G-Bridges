<?php class Template {
	
	//Path to template
	protected $template;
	//Vars passed in
	protected $vars = array(); 

	//create a constructor
	public function __construct($template) {
		$this->template = $template;
	}
	// setting a get func to get template variables
	public function __get($key) {
		return $this->vars[$key];
	}
	public function __set($key ,$value) {
		 $this->vars[$key] = $value;
	}
	public function __toString() {
		 extract($this->vars);
		 chdir(dirname($this->template));
		 // add to a buffer
		 ob_start();
		 include basename($this->template);
		 return ob_get_clean();
	}
}