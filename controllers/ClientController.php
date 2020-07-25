<?php 

/**
 * CLASE CategoryController
 * CONTROLADOR ALGO ASI COMO UN JS
 */

require 'models/Client.php';

class ClientController 
{
    private $model;

    public function __construct()
    {
        $this->model = new Client;

    }

    public function index()
    {
        require 'views/layout.php';
        // Llamdo al metodo que trae la consulta
        $clients = $this->model->getAll();
        require 'views/client/list.php';
        require 'views/footer.php';
    }

    // // muestra la vista de crear
    // public function add()
    // {
    //     require 'views/layout.php';
    //     require 'views/client/new.php';

    // }

    // // realiza el proceso de guardar
    // public function save()
    // {

    //     $this->model->newCategory($_REQUEST);
    //     header('Location: ?controller=category');

    // }

    // // muestra la vista de editar
    // public function edit()
    // {
    //     if (isset($_REQUEST['id'])) {
    //         $id = $_REQUEST['id'];
    //         $data = $this->model->getCategoryById($id);
    //         $statuses = $this->status->getAll();
    
    //         require 'views/layout.php';
    //         require 'views/category/edit.php'; 

    //     }else{
    //         echo "Error :(";
    //     }
        
    // }

    // // realiza el proceso de editar
    // public function update()
    // {
    //     if(isset($_POST)){
    //         $this->model->editCategory($_POST);
    //         header('Location: ?controller=category');
    //     }else{
    //         echo "Error :(";
    //     }
    // }

    // //  // realiza el proceso de eliminar
    // // public function delete()
    // // {
    // //     $this->model->deleteCategory($_REQUEST);
    // //     header('Location: ?controller=category');
    // // }
    // // 
    
    // public function updateCategoryStatus()
    // {
    //     $category = $this->model->getCategoryById($_REQUEST['id']);
       

    //     if ($category[0]->status_id==1) {
    //         $data = [
    //                     'id' =>$category[0]->id,
    //                     'status_id' => 2
    //                 ];
    //     }elseif($category[0]->status_id==2){
    //         $data = [
    //                     'id' =>$category[0]->id,
    //                     'status_id' => 1
    //                 ];
    //     }
    //     $this->model->editCategoryStatus($data);
    //     header('Location: ?controller=category');


    // }
}


 ?>