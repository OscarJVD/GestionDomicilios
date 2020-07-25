<?php 

/**
 * CLASE ServicerController
 * CONTROLADOR ALGO ASI COMO UN JS
 */

require 'models/Servicer.php';
require 'models/Client.php';

class ServicerController 
{
	private $model;
    private $client;


	public function __construct()
	{
  
        //Se vuelven objetos
		$this->model = new Servicer; //instanciando la clase Servicer
        $this->client = new Client;
	}

    public function index()
    {
        require 'views/layout.php';
        // require 'views/navbar.php';
        // require 'views/content.php';
    	// Llamdo al metodo que trae la consulta
        $clients = $this->client->getAll();// 
    	$servicers = $this->model->getAll();
        require 'views/servicer/new.php';
        require 'views/servicer/list.php';
        require 'views/footer.php';  
    }

    // muestra la vista de crear
    // public function add() //ESTO NO ES NECESARIO SI ES UN MODAL :D
    // {

    //     $clients = $this->client->getAll();
    //     require 'views/layout.php';
    //     require 'views/servicer/new.php';
    //     var_dump()
    // }

    // // realiza el proceso de guardar
    // public function save()
    // {

    //     $this->model->newServicer($_REQUEST);
    //     header('Location: ?controller=Servicer');

    // }

    // // muestra la vista de editar
    // public function edit()
    // {
    //     if (isset($_REQUEST['id'])) {
    //         $id = $_REQUEST['id'];
    //         $data = $this->model->getServicerById($id);
    //         require 'views/layout.php';
    //         require 'views/Servicer/edit.php'; 

    //     }else{
    //         echo "Error :(";
    //     }
        
    // }

    // // realiza el proceso de editar
    // public function update()
    // {
    //     if(isset($_POST)){
    //         $this->model->editServicer($_POST);
    //         header('Location: ?controller=Servicer');
    //     }else{
    //         echo "Error :(";
    //     }
    // }


    //  // realiza el proceso de eliminar
    // public function delete()
    // {
    //     $this->model->deleteServicer($_REQUEST);
    //     header('Location: ?controller=Servicer');
    // }

    // public function updateServicerStatus()
    // {
    //     $Servicer = $this->model->getServicerById($_REQUEST['id']);
       

    //     if ($Servicer[0]->status_id==1) {
    //         $data = [
    //                     'id' =>$Servicer[0]->id,
    //                     'status_id' => 2
    //                 ];
    //     }elseif($Servicer[0]->status_id==2){
    //         $data = [
    //                     'id' =>$Servicer[0]->id,
    //                     'status_id' => 1
    //                 ];
    //     }
    //     $this->model->editServicerStatus($data);
    //     header('Location: ?controller=Servicer');


    // }

 
}


 ?>