<?php

namespace controller;

class ChartController
	extends AbstractController
{
	public $request;
	public $params;
// public function indexAction($request , $params) {
	
// 		include __DIR__."/../view/home.php";
		
// 	}
public function ChartAction($request , $params) {
		include __DIR__."/../view/mostrarCarrito.php";

}
	
}