<?php
	/**
	 * Created by PhpStorm.
	 * User: lcd34
	 * Date: 24/9/2016
	 * Time: 12:06 PM
	 */

	namespace BoilerPlate\Panel\Controllers;

	use Exception;
	use BoilerPlate\Panel\Models\ExampleModel;


	// all new controllers should extend extended base
	class ExampleController extends ExtendedBaseController  {

		public function index() {

			$self = $this;
			$model = new ExampleModel();

			$form = $model->form(function ($form) use ($self) {

				$data = $form->serialize();
				try {

					// do something with data on form submission

					$self->notify(':-)');
				} catch (Exception $e) {
					$self->alert($e->getMessage());
				}
			});

			// this is important - set the action to the form action to the url of the page explicitly.
			$form->action("boilerplate");

			// load the view, include the name of the view, the model (you need this just for the top bar), and arguments for the view itself
			// if you need the screen to load as a modal - use $this->modal instead and you don't need to pass the second variable.
			echo $this->screen('index', $model, [
				'form' => $form,
				'model' => $model,
			]);
		}

	}