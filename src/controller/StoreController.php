<?php

namespace controller;

class StoreController
    extends AbstractController
{
	public $request;
	public $params;
	

    public function StoreAction($request , $params) {
		include __DIR__."/../view/productos.php";

    }
}