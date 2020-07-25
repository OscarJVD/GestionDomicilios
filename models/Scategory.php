<?php 

/**
 * Modelo de la tabla Citations
 * CRUD.php
 */
class Scategory
{

	private $id_categoria_servicio_PK;
	private $estado_cs;	
	private $nombre_categoria_servicio;
	private $pdo;


	public function __construct()
	{
    	try {
    		$this->pdo = new Database;
    	} catch (PDOException $e) {
    		die($e->getMessage());
    	}
	}

	public function getActiveScategories()
	{
		try {
			$strSql = "SELECT * FROM VW_cat_ser WHERE estado_cs = 1";
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