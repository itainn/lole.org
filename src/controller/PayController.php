<?php

namespace controller;

class PayController
    extends AbstractController
{
	public $request;
	public $params;
	// public function indexAction($request , $params) {
	
	// 	include __DIR__."/../view/home.php";
		
	// }

    public function PayAction($request , $params) {
		include __DIR__."/../view/pagar.php";

    }
	//DONE: Crear el método  para que se muestren las vistas correspondientes a la accion: PAGAR
}