<?php 
namespace controller;
class ContactController
	extends AbstractController
{
	public $request;
	public $params;

	//TODO: Implementa la acción que recogerá los datos enviados 
	//      mediante el envio por AJAX de un formulario
	//      la acción se llamará processContactAjaxAction
	public function processContactAjaxAction ($request , array $params) {


		if (empty($params['email'])){
			$message = false;
		} 
		elseif (empty($params['nombre'])){
			$message = false;
		}
		elseif (empty($params['mensaje'])) {
			$message = false;
		}
		else { //si todo está relleno ;
			$message =  "DATOS RECIBIDOS CORRECTAMENTE."; 
			//echo json_encode($message);
		}
		echo json_encode($message);
		
	}
		
	public function indexAction($request ,array $params){
		include __DIR__."/../view/contact.html.php";
	}
}