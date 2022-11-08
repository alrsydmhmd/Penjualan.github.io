<?php

ob_start();
include 'config/config.php';
include 'config/helpers.php';

// include 'views/includes/header.php';

$helpers = new Helpers;

if(file_exists(__DIR__.'/controllers/'.$controller.'.php'))
	include "controllers/$controller.php";
else
	die('404 Controller not found');

// include 'views/includes/footer.php';

?>