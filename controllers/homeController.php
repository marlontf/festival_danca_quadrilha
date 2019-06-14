<?php

/**
 * 
 */
class homeController extends controller
{
	
	public function index()
	{
		if (isset($_SESSION['LOGIN']) && !empty($_SESSION['LOGIN'])) {
		$this->loadTemplate('home');
		}else{
			header('Location:'.BASE_URL.'usuario');
		}

	}


}