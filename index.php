<?php

	$_error = [];
	$_message = [];

	session_start();

	$module = $_GET['module'] ?? '';

	$module_name = ($module == '') ? 'home' : $module;
	$module_filename = "./model/module-{$module_name}.php";

	if (!file_exists($module_filename))
		$module_filename = "./model/module-error404.php";

	include_once($module_filename);



	include_once("./view/page-header.php");
	include_once("./view/page-navigation.php");
	include_once("./view/page-body.php");
	include_once("./view/page-footer.php");

	exit;

?>
