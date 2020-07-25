<?php 

/**
 * Modelo de la tabla Citations
 * CRUD.php
 */
class Artifact
{

	private $id_artefacto_PK;	
	private $id_marca_artefacto_FK;
	private $id_categoria_artefacto_FK;
    private $estado_artefacto;
	private $modelo;
	private $caracteristicas;
	private $pdo;


	public function __construct()
	{
    	try {
    		$this->pdo = new Database;
    	} catch (PDOException $e) {
    		die($e->getMessage());
    	}
	}

	public function getActiveArtifacts()
	{
		try {
			$strSql = "SELECT * FROM VW_MCE_artefacto WHERE estado_artefacto = 1";
			// llamado al metodo general que ejecuta un select a la bd
			$query = $this->pdo->select($strSql);
			return $query;
		} catch (PDOException $e) {
			die($e->getMessage());
		}
	}
    
    // peticion request
	// public function newCitation($data)
	// {
	// 	try {
	// 		// $data['status_id'] = 1;
	// 		$this->pdo->insert('Servicio', $data);
	// 	} catch (PDOException $e){
	// 		die($e->getMessage());
	// 	}
	// }

// 	public function getCitationById($id)
// 	{
// 		try {			
// 			$strSql = "SELECT * FROM Citations WHERE id=:id";
// 			$arrayData = ['id'=>$id];
// 			$query = $this->pdo->select($strSql, $arrayData);
// 			return $query;
// 		} catch (PDOException $e) {
// 			die($e->getMessage());
// 		}
// 	}


// 	public function editCitation($data)
// 	{
// 		try {			
// 			$strWhere = 'id = '.$data['id'];
// 			$this->pdo->update('Citations',$data,$strWhere);

// 		} catch (PDOException $e) {
// 			die($e->getMessage());
// 		}
// 	}

// 	// public function deleteCitation($data)
// 	// {
// 	// 	try {			
// 	// 		$strWhere = 'id = '.$data['id'];
// 	// 		$this->pdo->delete('Citations',$strWhere);

// 	// 	} catch (PDOException $e) {
// 	// 		die($e->getMessage());
// 	// 	}
// 	// }
// 	// 
// 	public function editCitationStatus($data){
// 		try {
// 			$strWhere = 'id =' . $data['id'];
// 			$this->pdo->update('Citations',$data,$strWhere);
// 		} catch (PDOException $e) {
// 			die($e->getMessage());
// 		}
// 	}

}

 ?>