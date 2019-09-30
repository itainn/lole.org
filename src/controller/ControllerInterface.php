<?php
namespace controller;

interface ControllerInterface
{
	
	
	public function callAction($request, string $action, array $params = []);
}