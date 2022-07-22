<?php 

	require "App/Routing.php";
	$url = key($_GET);

	$route = new Router();
	$route->addRoute("/", "main.php");
	$route->addRoute("/shop", "shop.php");
	$route->addRoute("/order", "order.php");
	$route->addRoute("/order", "order.php");
	$route->addRoute("/single_product", "single_product.php");
	$route->addRoute("/cart", "cart.php");

	$route->route("/".$url);

 ?>