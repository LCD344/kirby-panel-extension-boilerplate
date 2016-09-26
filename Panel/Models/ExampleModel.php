<?php
	/**
	 * Created by PhpStorm.
	 * User: lcd34
	 * Date: 26/9/2016
	 * Time: 9:56 AM
	 */

	namespace BoilerPlate\Panel\Models;

	// optional here - extend the kirby panel class you want the model to extend/
	use Obj;

	class ExampleModel extends Obj {

		public function __construct() {
			$this->username = "johndoe";
			$this->email = "john@doe.com";
		}

		public function topbar($topbar) {
			//add a breadcrumb to topbar
			$topbar->append(purl('boilerplate'), "Boiler Plate");
		}

		public function form($callback){

			// load model specific form - first argument is path to your form, second is the model to send to the form, last is the callback
			return panel()->form(kirby()->roots->plugins() . DS . "panelExtentionBoilerPlate/Panel/Forms/exampleForm.php", $this, $callback);
		}

		// you need this on the mdoel for the textarea options to work)
		public function url ($action){
			return purl("boilerplate" . DS .$action);
		}
	}