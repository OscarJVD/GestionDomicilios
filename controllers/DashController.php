<?php 

/**
 * Clase DashController para cargar el home del proyecto
 */
class DashController
{
	
	public function index()
	{
		require 'config/config.php';
		require 'views/layout.php';  // Esto hace que se muestre en todo lado
	}
}



 ?>