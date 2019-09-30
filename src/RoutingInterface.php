<?php
use controller\AbstractController as IdxController;
/**
 * Interfaz para los Componentes de Enrutamiento
 */
interface RoutingInterface{
	
	/**
	 * Devuelve el controller encargado de atender una $uri
	 * Si el controller no existe devuelve un ErrorController
	 * @param  string $uri ruta solicitada por el usuario
	 * @return IndexControllerInterface objeto controller
	 */
	public function getController(string $uri) : IdxController;
	/**
	 * Devuelve la acción que habrá que ejecutarse
	 * o "index" por defecto
	 * @param  string $uri ruta solicitada por el usuario
	 * @return string|"index"   nombre de la acción a ejecutar
	 */
	public function getAction(string $uri) : string;
}