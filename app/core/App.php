<?php


class App
{
	private $controller = 'Landing';
	private $method 	= 'index';

	private function splitURL()
	{
		$URL = $_GET['url'] ?? 'landing';
		$URL = explode("/", trim($URL,"/"));
		return $URL;	
	}

	public function loadController()
	{
		$URL = $this->splitURL();

		/** select controller **/
		$filename = "../app/controllers/".ucfirst($URL[0]).".php";
		if(file_exists($filename))
		{
			require $filename;
			$this->controller = ucfirst($URL[0]);
			unset($URL[0]);
		}else{

			$filename = "../app/controllers/_404.php";
			require $filename;
			$this->controller = "_404";
		}

		$controller = new $this->controller;

		call_user_func_array([$controller,$this->method], []);

	}	

}


