<?php 

/**
 * CLASE CitationController
 * CONTROLADOR ALGO ASI COMO UN JS
 */


require 'models/Citation.php';

class CitationController 
{
	private $model;


	public function __construct()
	{
  
        //Se vuelven objetos
		$this->model = new Citation; //instanciando la clase Citation
	}

    public function index()
    {
        require 'views/layout.php';
        // require 'views/navbar.php';
        // require 'views/content.php';
    	// Llamdo al metodo que trae la consulta
    	$citations = $this->model->getAll();
        // require 'views/citation/new.php';
        require 'views/citation/list.php';
        require 'views/footer.php';  
    }

    // muestra la vista de crear
    // public function add() //ESTO NO ES NECESARIO SI ES UN MODAL :D
    // {

    //     $clients = $this->client->getAll();
    //     require 'views/layout.php';
    //     require 'views/Citation/new.php';
    //     var_dump()
    // }

    // // realiza el proceso de guardar
    // public function save()
    // {

    //     $this->model->newCitation($_REQUEST);
    //     header('Location: ?controller=Citation');

    // }

    // // muestra la vista de editar
    // public function edit()
    // {
    //     if (isset($_REQUEST['id'])) {
    //         $id = $_REQUEST['id'];
    //         $data = $this->model->getCitationById($id);
    //         require 'views/layout.php';
    //         require 'views/Citation/edit.php'; 

    //     }else{
    //         echo "Error :(";
    //     }
        
    // }

    // // realiza el proceso de editar
    // public function update()
    // {
    //     if(isset($_POST)){
    //         $this->model->editCitation($_POST);
    //         header('Location: ?controller=Citation');
    //     }else{
    //         echo "Error :(";
    //     }
    // }


    //  // realiza el proceso de eliminar
    // public function delete()
    // {
    //     $this->model->deleteCitation($_REQUEST);
    //     header('Location: ?controller=Citation');
    // }

    // public function updateCitationStatus()
    // {
    //     $Citation = $this->model->getCitationById($_REQUEST['id']);
       

    //     if ($Citation[0]->status_id==1) {
    //         $data = [
    //                     'id' =>$Citation[0]->id,
    //                     'status_id' => 2
    //                 ];
    //     }elseif($Citation[0]->status_id==2){
    //         $data = [
    //                     'id' =>$Citation[0]->id,
    //                     'status_id' => 1
    //                 ];
    //     }
    //     $this->model->editCitationStatus($data);
    //     header('Location: ?controller=Citation');


    // }

 
}


 ?>