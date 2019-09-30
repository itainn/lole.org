<?php
// error_reporting(E_ALL);
// ini_set('display_errors', 1);


include('../global/config.php');
include('../global/conexion.php');
// include('../carrito.php');
include( '../src/view/templates/cabecera.php');





require_once __DIR__.'/../vendor/autoload.php';

//require __DIR__.'/../src/FrontController.php';

$front = new FrontController();
$front->run();


