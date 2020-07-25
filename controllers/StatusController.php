<?php 

/**
 * CLASE StatusController
 * CONTROLADOR ALGO ASI COMO UN JS
 */

require 'models/Status.php';

class StatusController 
{
	private $model;

	public function __construct()
	{
  
        //Se vuelven objetos
		$this->model = new Status; //instanciando la clase Status
	}

    public function index()
    {
        require 'views/layout.php';
        // require 'views/navbar.php';
        // require 'views/content.php';
    	// Llamdo al metodo que trae la consulta
    	$statuses = $this->model->getAll();
        require 'views/Status/new.php';
        require 'views/Status/list.php';
        require 'views/footer.php';  
    }

    // muestra la vista de crear
    // public function add() //ESTO NO ES NECESARIO SI ES UN MODAL :D
    // {

    //     $clients = $this->client->getAll();
    //     require 'views/layout.php';
    //     require 'views/Status/new.php';
    //     var_dump()
    // }

    // // realiza el proceso de guardar
    // public function save()
    // {

    //     $this->model->newStatus($_REQUEST);
    //     header('Location: ?controller=Status');

    // }

    // // muestra la vista de editar
    // public function edit()
    // {
    //     if (isset($_REQUEST['id'])) {
    //         $id = $_REQUEST['id'];
    //         $data = $this->model->getStatusById($id);
    //         require 'views/layout.php';
    //         require 'views/Status/edit.php'; 

    //     }else{
    //         echo "Error :(";
    //     }
        
    // }

    // // realiza el proceso de editar
    // public function update()
    // {
    //     if(isset($_POST)){
    //         $this->model->editStatus($_POST);
    //         header('Location: ?controller=Status');
    //     }else{
    //         echo "Error :(";
    //     }
    // }


    //  // realiza el proceso de eliminar
    // public function delete()
    // {
    //     $this->model->deleteStatus($_REQUEST);
    //     header('Location: ?controller=Status');
    // }

    // public function updateStatusStatus()
    // {
    //     $Status = $this->model->getStatusById($_REQUEST['id']);
       

    //     if ($Status[0]->status_id==1) {
    //         $data = [
    //                     'id' =>$Status[0]->id,
    //                     'status_id' => 2
    //                 ];
    //     }elseif($Status[0]->status_id==2){
    //         $data = [
    //                     'id' =>$Status[0]->id,
    //                     'status_id' => 1
    //                 ];
    //     }
    //     $this->model->editStatusStatus($data);
    //     header('Location: ?controller=Status');


    // }

 
}


 ?>