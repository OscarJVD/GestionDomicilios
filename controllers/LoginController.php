<?php

require "models/Login.php";

class LoginController
{	
    private $model;

    public function __construct()
    {
        $this->model = new Login;
    }

	public function index()
	{
        if(isset($_SESSION['user'])){
            header('Location: ?controller=dash');
        }else{
            require 'views/home/head.php';
            require 'views/home/login/inicioSesion.php';
        }
    }

    public function login()
    {
        $validateUser = $this->model->validateUser($_POST);

        if($validateUser === true){
            header('Location: ?controller=dash');
        }else{
            $error = 
            [
                'errorMessage' => $validateUser
                // 'correo'       => $_POST['correo']
            ];
            
            require 'views/home/head.php';
            require 'views/home/login/inicioSesion.php';
        }
    }



}

?>