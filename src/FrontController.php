<?php

include "config.php";
class FrontController
{
	/**
	 * Componente de enrutamiento que será del tipo RoutingInterface
	 * @var RoutingInterface
	 */
	protected $routing;
	
	/**
	 * Ruta que se está cargando desde el navegador después del dominio
	 * @var string
	 */
	public $request_uri;
	/**
	 * Información recibida a través de los parámetros de la URL
	 * o de los datos enviados mediante formulario
	 * o ambas cosas
	 * @var array
	 */
	public $params;

	/**
	 
	 * el controller y la acción que se ejecutarán para dar una respuesta
	 * a la petición ($_REQUEST)
	 */
	public function __construct()
	{
		$this->routing = new Routing();
	}
	
	

	/**
	 * Función que se ejecuta para dar una respuesta
	 * a la petición.
	 * @internal Esta función se ejecuta desde index.php
	 * Si se comenta la línea en que se ejecuta run, la aplicación no se ejecuta
	 * 
	 */
	public function run()
	{
		$this->request_uri = $_SERVER['REQUEST_URI'];
		//funcion  referente a url ? https://www.php.net/manual/es/ref.url.php
		
		$this->request_uri = parse_url($this->request_uri);
		$this->request_uri = $this->request_uri['path'];
		

		$this->params = array_merge($_GET,$_POST);

		$controller = $this->routing->getController($this->request_uri);
		$action = $this->routing->getAction($this->request_uri);
		
		$controller->callAction($this->request_uri, $action, $this->params);
		
		exit;


	}

}
