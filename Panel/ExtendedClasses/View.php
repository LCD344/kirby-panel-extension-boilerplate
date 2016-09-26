<?php
	namespace BoilerPlate\Panel\ExtendedClasses;


	class View extends \Kirby\Panel\View {

		public function __construct($file, array $data) {
			parent::__construct($file, $data);
			//point this to your views directory
			$this->_root = kirby()->roots()->plugins() . DS . "panelExtentionBoilerPlate" . DS . "Panel" . DS . "Views";
		}
	}