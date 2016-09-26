<?php

	//In case you need a custom "form" (any page on kirby tthat you edit like pages or users is a form)

	use BoilerPlate\Panel\Models\ExampleModel;

	return function ($model) {


		// this part is like a blueprint, defined in an array. I suspect it has exactly the same rules

		$fields = array(

			'username' => [
				'label' => 'Email',
				'type' => 'text',
				'icon' => 'user',
				'required' => true,
				'readonly' => true,
			],

			'email' => [
				'label' => 'email',
				'type' => 'email',
				'width' => '1',
				'required' => true
			],

			'text' => [
				'label' => 'text',
				'type' => 'textarea',
				'width' => '1',
				'model' => new ExampleModel() // text area has to have a model attached to it!
			]

		);


		// set up the values for the form when it's loaded - in this case the users email will show up in the email field
		$form = new Kirby\Panel\Form($fields, [
			'username' => $model->username(),
			'email' => $model->email()
		]);

		// setup the url for the cancel button
		$form->cancel("");
		// text of the submit button of the form
		$form->buttons->submit->value = "Send";

		return $form;

	};
