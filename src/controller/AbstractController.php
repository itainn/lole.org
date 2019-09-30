<?php
namespace controller;
use controller\IndexControllerInterface;
use error\PageNotFoundError;
abstract class AbstractController{
	
	/**
	 * Controller what shows an error page
	 * @var IndexControllerInterface
	 */
	
	protected $errorController;	
	// TODO:
	// es: hacer que en la construcción de una nueva instancia se inicialice la propiedad errorController
	// en: make an initialization of errorController property during construction
	/**
	 * Executes an action if it exists
	 * otherwise shows an error page
	 * @param string @action the action name
	 * @param array @params parameters to provide in the call
	 * @return mixed|NULL the action return once called
	 * 
	 * @uses preg_match, method_exist, call_user_func_array
	 * @see https://www.php.net/manual/es/pcre.pattern.php
	 * @see https://www.php.net/manual/es/function.preg-match.php
	 * @see https://www.php.net/manual/es/function.method-exists.php
	 * @see https://www.php.net/manual/es/function.call-user-func-array.php
	 */
	public function callAction($request, string $action, array $params = [])
	{
		$method = $action;
		//  Si la acción solicitada no termina en "Action"..
		if (FALSE == preg_match('/\w\w*Action$/', $action)){
				$method = $action."Action";
				//$array_params_request = [$request , $params];			
		// le añadimos "Action" al final
		}
		try{
				
			if ( method_exists($this, $method) ){				
			//var_dump($method, $params , $request);
			$array_params_request = [$request , $params];
			//var_dump(	$array_params_request	);	
			return call_user_func_array( [$this,$method],$array_params_request);
				// DONE:
				// es: Piensa e implementa una solución para que el parámetro $request no se pierda
			}	// en: Plan a solution in order to use the $request parameter, which is missed currently
			else {
						$error = PageNotFoundError::getInstance();
						$error->setDetails(new \Exception("Action $action was not found"));
					}
			throw $error;			
		}
		catch (\Throwable $error){
			return $this->showError($request, $error, $action, $params);
			}
	}
	 /* Muestra un error
	 */
	 protected function showError($request, \Throwable $error =null, string $action ='index', array $params=[])
	 {
	 	if ($this->errorController instanceof IndexControllerInterface){
	 	 		$params = array('action'=>$action,'error'=>$error, 'params'=>$params);
	 	 		$this->errorController->indexAction($request,$params);
	 			//$this->errorController->callAction($request,'index',$params);
	 	}
	 	else{
	 	 		if (!($error instanceof \Throwable)){
	 			$error = new \Exception('Uknown Exception',500);
	 		}
	 		throw $error;
	 	}
	 }
	}