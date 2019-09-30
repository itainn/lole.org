<?php
namespace error\controller;
//DONE:
// es: Determinar el namespace correcto
// en: Determine the right namespace
use controller\AbstractController as IdxController;
use controller\IndexControllerInterface as IdxInterface;
class ErrorController
	extends IdxController
	//DONE: 
	// es: relacionar correctamente con AbstractController
    // en: relate in the right manner with AbstractController
	implements IdxInterface
	//DONE
	// es: Importar IndexControllerInterface
	// en: Import IndexControllerInterface
{	
	public function indexAction($request,array $params){
		include __DIR__."/../../view/error.php";
	}
}