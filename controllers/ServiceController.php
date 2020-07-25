<?php

/**
 * CLASE ServiceController
 * CONTROLADOR ALGO ASI COMO UN JS
 */

require 'models/Service.php';
require 'models/Client.php';
require 'models/Status.php';
require 'models/Artifact.php';
require 'models/Citation.php';
require 'models/Scategory.php';
require 'models/Technical.php';

class ServiceController
{

    private $model;
    private $client;
    private $status;
    private $artifact;
    private $citation;
    private $scategory;
    private $technical;

    public function __construct()
    {

        //Se vuelven objetos
        $this->model = new Service; //instanciando la clase Service
        $this->client = new Client;
        $this->status = new Status;
        $this->artifact = new Artifact;
        $this->citation = new Citation;
        $this->scategory = new Scategory;
        $this->technical = new Technical;
    }

    public function index()
    {
        require 'views/layout.php';
        $services = $this->model->getActiveServices();
        $clients = $this->client->getActiveClients();
        $statuses = $this->status->getAll();
        $artifacts = $this->artifact->getActiveArtifacts();
        $citations = $this->citation->getActiveCitations();
        $scategories = $this->scategory->getActiveScategories();
        $technicians = $this->technical->getActiveTechnicians();
        $details = $this->model->getDetService();

        require "views/service/new.php";
        require "views/service/list.php";
        require 'views/footer.php';
    }

    public function listArtifacts()
    {
        if (isset($_REQUEST['id_servicio_PK'])) {
            $id_servicio_PK = $_REQUEST['id_servicio_PK'];
            $data = $this->model->getArtServiceById($id_servicio_PK);
            $artifacts = $this->artifact->getActiveArtifacts();
            require 'views/layout.php';
            require 'views/fragments/artifacts.php';
        } else {
            echo "Algo salio mal :D";
        }
    }

    public function listCitations()
    {
        if (isset($_REQUEST['id_servicio_PK'])) {
            $id_servicio_PK = $_REQUEST['id_servicio_PK'];
            $data = $this->model->getCitServiceById($id_servicio_PK);
            $citations = $this->citation->getActiveCitations();
            require 'views/layout.php';
            require 'views/fragments/citations.php';
        } else {
            echo "Algo salio mal :D";
        }
    }

    public function listScategories()
    {
        if (isset($_REQUEST['id_servicio_PK'])) {
            $id_servicio_PK = $_REQUEST['id_servicio_PK'];
            $data = $this->model->getCatServiceById($id_servicio_PK);
            $scategories = $this->scategory->getActiveScategories();
            require 'views/layout.php';
            require 'views/fragments/scategories.php';
        } else {
            echo "Algo salio mal :D";
        }
    }

    public function listTechnicians()
    {
        if (isset($_REQUEST['id_servicio_PK'])) {
            $id_servicio_PK = $_REQUEST['id_servicio_PK'];
            $data = $this->model->getTechServiceById($id_servicio_PK);
            $technicians = $this->technical->getActiveTechnicians();
            require 'views/layout.php';
            require 'views/fragments/technicians.php';
        } else {
            echo "Algo salio mal :D";
        }
    }

    public function listDetails()
    {
        if (isset($_REQUEST['id_servicio_PK'])) {
            $id_servicio_PK = $_REQUEST['id_servicio_PK'];
            $data = $this->model->getDetServiceById($id_servicio_PK);
            require 'views/layout.php';
            require 'views/fragments/detail.php';
        } else {
            echo "Algo salio mal :D";
        }
    }

    // muestra la vista de crear
    public function add() //ESTO NO ES NECESARIO SI ES UN MODAL :D
    {

        $clients = $this->client->getActiveClients();
        // Instancia del modelo detalle
        $artifacts = $this->artifact->getActiveArtifacts();
        $citations = $this->citation->getActiveCitations();
        $scategories = $this->scategory->getActiveScategories();
        $technicians = $this->technical->getActiveTechnicians();
        require 'views/layout.php';
        require 'views/service/new.php';
    }


    public function save() // realiza el proceso de guardar
    {
        $dataService = // DATOS SERVICIO
            [
                'id_cliente_FK'          =>  $_POST['id_cliente_FK'],
                'id_estado_servicio_FK'  =>  2,
                'fecha_peticion'         =>  date("Y-m-d"),
                'hora_peticion'          =>  date("H:i:s"),
                'costo_servicio'         =>  $_POST['costo_servicio']
            ];

        $arrayArtifacts   = isset($_POST['artifacts'])   ? $_POST['artifacts']   : []; //llega del js
        $arrayCitations   = isset($_POST['citations'])   ? $_POST['citations']   : []; //llega del js
        $arrayScategories = isset($_POST['scategories']) ? $_POST['scategories'] : []; //llega del js
        $arrayTechnicians = isset($_POST['technicians']) ? $_POST['technicians'] : []; //llega del js
        $arrayDetails     = isset($_POST['details'])     ? $_POST['details']     : []; //llega del js

        $arrayDetails[0]["is_software"] = ($arrayDetails[0]["is_software"] == "true") ? true : false;
        $arrayDetails[0]["is_hardware"] = ($arrayDetails[0]["is_hardware"] == "true") ? true : false;

        // echo "<pre>";
        // var_dump($dataService);
        // var_dump($arrayArtifacts);
        // var_dump($arrayCitations);
        // var_dump($arrayScategories);
        // var_dump($arrayTechnicians);
        // var_dump($arrayDetails);
        // echo "</pre>";
        // exit();

        if (
            !empty($arrayArtifacts)
            && !empty($arrayCitations)
            && !empty($arrayScategories)
            && !empty($arrayTechnicians)
            && !empty($arrayDetails)
        ) {

            $respService       = $this->model->newService($dataService); // Inserción servicio

            $lastIdService     = $this->model->getServiceLastId(); //obtener ultimo id del servicio

            $respArtService = $this->model->saveArtService(
                $arrayArtifacts, //insercion al detalle artefacto
                $lastIdService[0]->id_servicio_PK
            );

            $respCitService = $this->model->saveCitService(
                $arrayCitations, //insercion al detalle citacion 
                $lastIdService[0]->id_servicio_PK
            );

            $respCatService = $this->model->saveCatService(
                $arrayScategories, //insercion al detalle categoria 
                $lastIdService[0]->id_servicio_PK
            );

            $respTechService = $this->model->saveTechService(
                $arrayTechnicians,  //insercion al detalle Tecnico
                $lastIdService[0]->id_servicio_PK,
            );

            $respDetService = $this->model->saveDetService(
                $arrayDetails, //insercion a los detalles
                $lastIdService[0]->id_servicio_PK
            );
        } else {
            $respService        = false;
            $respArtService     = false;
            $respCitService     = false;
            $respCatService     = false;
            $respTechService    = false;
            $respDetService     = false;
        }

        $arrayResp = [];

        if (
            $respService == true
            && $respArtService == true
            && $respCitService == true
            && $respCatService == true
            && $respDetService == true
            && $respTechService == true
        ) {

            $arrayResp = [
                'success' => true,
                'message' => "Servicio generado"
            ];
        } else {
            $arrayResp = [
                'error' => false,
                'message' => "Error generando el servicio"
            ];
        }
        echo json_encode($arrayResp);
        return;
    }

    // muestra la vista de editar
    public function edit()
    {

        if (isset($_REQUEST['id_servicio_PK'])) {
            $id_servicio_PK = $_REQUEST['id_servicio_PK'];
            $data = $this->model->getServiceById($id_servicio_PK);
            $detailsArt = $this->model->getArtService($id_servicio_PK);
            $detailsCit = $this->model->getCitService($id_servicio_PK);
            $detailsCat = $this->model->getCatService($id_servicio_PK);
            $detailsTech = $this->model->getTechService($id_servicio_PK);
            $details = $this->model->getDetServiceById($id_servicio_PK);
            $clients = $this->client->getActiveClients();
            $statuses = $this->status->getAll();
            $artifacts = $this->artifact->getActiveArtifacts();
            $citations = $this->citation->getActiveCitations();
            $scategories = $this->scategory->getActiveScategories();
            $technicians = $this->technical->getActiveTechnicians();
            require 'views/layout.php';
            require 'views/service/edit.php';
        } else {
            echo "Hubo un error <i class='fas fa-sad-cry'></i>";
        }
    }

    // realiza el proceso de editar
    public function update()
    {
        $arrayResp = [];

        if (isset($_POST)) {

            $dataService = // DATOS SERVICIO
                [
                    'id_servicio_PK'         =>  $_POST['id_servicio_PK'],
                    'id_cliente_FK'          =>  $_POST['id_cliente_FK'],
                    'id_estado_servicio_FK'  =>  $_POST['id_estado_servicio_FK'],
                    'costo_servicio'         =>  $_POST['costo_servicio']
                ];

            $arrayArtifacts   = isset($_POST['artifacts'])   ? $_POST['artifacts']   : []; //llega del js
            $arrayCitations   = isset($_POST['citations'])   ? $_POST['citations']   : []; //llega del js
            $arrayScategories = isset($_POST['scategories']) ? $_POST['scategories'] : []; //llega del js
            $arrayTechnicians = isset($_POST['technicians']) ? $_POST['technicians'] : []; //llega del js
            $arrayDetails     = isset($_POST['details'])     ? $_POST['details']     : []; //llega del js

            $arrayDetails[0]["is_software"] = ($arrayDetails[0]["is_software"] == "true") ? true : false;
            $arrayDetails[0]["is_hardware"] = ($arrayDetails[0]["is_hardware"] == "true") ? true : false;

            if (
                !empty($arrayArtifacts)
                && !empty($arrayCitations)
                && !empty($arrayScategories)
                && !empty($arrayTechnicians)
                && !empty($arrayDetails)
            ) {

                $respService = $this->model->editService($dataService);

                $this->model->deleteArtService($_POST['id_servicio_PK']); //Quitar detalles
                $this->model->deleteCitService($_POST['id_servicio_PK']);
                $this->model->deleteCatService($_POST['id_servicio_PK']);
                $this->model->deleteTechService($_POST['id_servicio_PK']);

                $respArtService = $this->model->saveArtService(
                    $arrayArtifacts, //insercion al detalle artefacto
                    $_POST['id_servicio_PK']
                );

                $respCitService = $this->model->saveCitService(
                    $arrayCitations, //insercion al detalle citacion 
                    $_POST['id_servicio_PK']
                );

                $respCatService = $this->model->saveCatService(
                    $arrayScategories, //insercion al detalle categoria 
                    $_POST['id_servicio_PK']
                );

                $respTechService = $this->model->saveTechService(
                    $arrayTechnicians,  //insercion al detalle Tecnico
                    $_POST['id_servicio_PK'],
                );

                // El lio
                $respDetService = $this->model->editDetService($arrayDetails,$_POST['id_servicio_PK']);

            } else {
                $respService        = false;
                $respArtService     = false;
                $respCitService     = false;
                $respCatService     = false;
                $respTechService    = false;
                $respDetService     = false;
            }
        } else {
            $arrayResp = [
                'error' => true, 
                'message' => "Error generando el servicio"
            ];
        }
        echo json_encode($arrayResp);
        return;
    }


    public function updateServiceStatus()
    {

        $data =  [
            'id_servicio_PK' =>
            trim($_GET["id_servicio_PK"]),
            'id_estado_servicio_FK' =>
            trim($_GET["id_estado_servicio_FK"])
        ];

        $this->model->editServiceStatus($data);
        header('Location: ?controller=service');
    }
}
