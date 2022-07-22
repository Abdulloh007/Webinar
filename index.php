<?php 

	require "App/Routing.php";
	$url = key($_GET);


	$route = new Router();
	$route->addRoute("/", "main.php");
	$route->addRoute("/about", "about.php");
	$route->addRoute("/feedback", "feedback.php");

	$route->route("/".$url);

 ?>