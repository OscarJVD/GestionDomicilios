<?php 

/**
 * Modelo de la tabla Statuss
 * CRUD.php
 */
class Status
{

	private $id_estado_PK;	
	private $nombre_estado;
	private $pdo;


	public function __construct()
	{
    	try {
    		$this->pdo = new Database;
    	} catch (PDOException $e) {
    		die($e->getMessage());
    	}
	}

	public function getAll()
	{
		try {
			$strSql = "SELECT * FROM Estado";
			// llamado al metodo general que ejecuta un select a la bd
			$query = $this->pdo->select($strSql);
			return $query;
		} catch (PDOException $e) {
			die($e->getMessage());
		}
	}
    
    // peticion request
	// public function newStatus($data)
	// {
	// 	try {
	// 		// $data['status_id'] = 1;
	// 		$this->pdo->insert('Servicio', $data);
	// 	} catch (PDOException $e){
	// 		die($e->getMessage());
	// 	}
	// }

// 	public function getStatusById($id)
// 	{
// 		try {			
// 			$strSql = "SELECT * FROM Statuss WHERE id=:id";
// 			$arrayData = ['id'=>$id];
// 			$query = $this->pdo->select($strSql, $arrayData);
// 			return $query;
// 		} catch (PDOException $e) {
// 			die($e->getMessage());
// 		}
// 	}


// 	public function editStatus($data)
// 	{
// 		try {			
// 			$strWhere = 'id = '.$data['id'];
// 			$this->pdo->update('Statuss',$data,$strWhere);

// 		} catch (PDOException $e) {
// 			die($e->getMessage());
// 		}
// 	}

// 	// public function deleteStatus($data)
// 	// {
// 	// 	try {			
// 	// 		$strWhere = 'id = '.$data['id'];
// 	// 		$this->pdo->delete('Statuss',$strWhere);

// 	// 	} catch (PDOException $e) {
// 	// 		die($e->getMessage());
// 	// 	}
// 	// }
// 	// 
// 	public function editStatusStatus($data){
// 		try {
// 			$strWhere = 'id =' . $data['id'];
// 			$this->pdo->update('Statuss',$data,$strWhere);
// 		} catch (PDOException $e) {
// 			die($e->getMessage());
// 		}
// 	}

}

 ?>