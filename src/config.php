<?php

$paths =<<<PATHS
{
	"home": {
		"controller" : "HomeController",
		"action": "index"
	},

	"pagar": {
		"controller": "PayController",
		"action": "pay"
	},
	"mostrarCarrito": {
		"controller": "HomeController",
		"action": "carrito"
	},
	"categorias" : {
		"controller": "categoriasController",
		"action": "categorias"
	},

	"login" : {
		"controller": "LoginController",
		"action": null
	},

	"productos" :{
		"controller": "StoreController",
		"action": "Store"
	},

	"404" : {
		"controller": "ErrorController"
	},

	"error": {
		"controller": "ErrorController",
		"action": "indexAction"
	}
}
PATHS;
//var_dump($paths);

$paths = json_decode($paths);

$GLOBALS['config']= array(
	"routes" => $paths
);
