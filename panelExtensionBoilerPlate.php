<?php

	//load route and classes, if the panel class exists
	if (class_exists('panel')) {
		require_once __DIR__ . DS ."Panel/Helpers/Helpers.php";
		require_once __DIR__ . DS ."Panel/ExtendedClasses/View.php";
		require_once __DIR__ . DS ."Panel/Models/ExampleModel.php";
		require_once __DIR__ . DS ."Panel/Controllers/ExtendedBaseController.php";
		require_once __DIR__ . DS ."Panel/Controllers/ExampleController.php";
		require_once __DIR__ . DS ."Panel/Router/Router.php";
	}
