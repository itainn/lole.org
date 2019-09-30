<?php

namespace controller;

class HomeController
	extends AbstractController
{
	public $request;
	public $params;
public function indexAction($request , $params) {
	
		include __DIR__."/../view/home.php";
		
	}
	

	
}