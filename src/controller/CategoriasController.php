<?php

namespace controller;

class CategoriasController
	extends AbstractController
{
	public $request;
	public $params;
public function CategoriasAction($request , $params) {
	
    include __DIR__."/../view/categorias.php";
		
	}
	

	
}