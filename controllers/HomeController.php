<?php 

/**
 * Clase HomeController para cargar el home del proyecto
 */

class HomeController
{	

	public function index()
	{
        require 'views/home/layoutHome.php';
        require 'views/home/home.php';
        require 'views/home/footerHome.php';

    }
    
    public function contact()
    {

    	require 'config/config.php';
		require 'views/home/layoutHome.php';
        require 'views/home/contact.php';
        require 'views/home/footerHome.php';

    }

    public function us()
    {

    	require 'config/config.php';
		require 'views/home/layoutHome.php';
        require 'views/home/us.php';
        require 'views/home/footerHome.php';

    }

    public function product()
    {

    	require 'config/config.php';
		require 'views/home/layoutHome.php';
        require 'views/home/product.php';
        require 'views/home/footerHome.php';

    }

    public function service()
    {

    	require 'config/config.php';
		require 'views/home/layoutHome.php';
        require 'views/home/service.php';
        require 'views/home/footerHome.php';

    }

    public function access()
    {
    	require 'config/config.php';
    	require 'views/home/head.php';
        require 'views/home/login/inicioSesion.php';
    }

    public function register()
    {

        require 'config/config.php';
        require 'views/home/head.php';
        require 'views/home/login/inicioSesion.php';
        require 'views/home/login/registro.php';
    }

    public function php1()
    {
    	require 'config/config.php';
		require 'views/home/layoutHome.php';
		require 'views/home/php/php1/php1.php';
    	require 'views/home/footerHome.php';
    }

    public function php2()
    {
    	require 'config/config.php';
		require 'views/home/layoutHome.php';
        require 'views/home/php/php2/php2.1.php';
    	require 'views/home/footerHome.php';
    }

    public function php2_3()
    {
        require 'config/config.php';
        require 'views/home/layoutHome.php';
        require 'views/home/php/php2/php2.2/php2.3.php';
        require 'views/home/footerHome.php';
    }

    public function php2_3p2()
    {
        require 'config/config.php';
        require 'views/home/layoutHome.php';
        require 'views/home/php/php2/php2.2/php2.3.php';
        require 'views/home/footerHome.php';
    }

    public function php2_4()
    {
        require 'config/config.php';
        require 'views/home/layoutHome.php';
        require 'views/home/php/php2/php2.2/php2.4.php';
        require 'views/home/footerHome.php';
    }

    public function php3()
    {
    	require 'config/config.php';
		require 'views/home/layoutHome.php';
        require 'views/home/php/php3/php3.php';
		require 'views/home/footerHome.php';
    }

    public function tablas()
    {
        require 'config/config.php';
        require 'views/home/layoutHome.php';
        require 'views/home/php/php3/tablas/tablas.php';
        require 'views/home/footerHome.php';
    }

    public function ej_9p3()
    {
        require 'config/config.php';
        require 'views/home/layoutHome.php';
        require 'views/home/php/php3/Ej_9.php';
        require 'views/home/footerHome.php';
    }

    public function ej_10p3()
    {
        require 'config/config.php';
        require 'views/home/layoutHome.php';
        require 'views/home/php/php3/Ej_10.php';
        require 'views/home/footerHome.php';
    }

    public function ej_11p3()
    {
        require 'config/config.php';
        require 'views/home/layoutHome.php';
        require 'views/home/php/php3/Ej_11.php';
        require 'views/home/footerHome.php';
    }

    public function ej_14p3()
    {
        require 'config/config.php';
        require 'views/home/layoutHome.php';
        require 'views/home/php/php3/Ej_14.php';
        require 'views/home/footerHome.php';
    }

}
