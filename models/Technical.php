<?php 

/**
 * Modelo de la tabla Servicers
 * CRUD.php
 */
class Technical
{

	private $id_tecnico_PK;	
	private $id_tipo_documento_FK;
	private $id_usuario_FK;
	private $nombre_tecnico;
	private $telefono;
	private $numero_documento;
	private $foto_tecnico;
	private $pdo;


	public function __construct()
	{
    	try {
    		$this->pdo = new Database;
    	} catch (PDOException $e) {
    		die($e->getMessage());
    	}
	}

	public function getActiveTechnicians()
	{
		try {
			$strSql = "SELECT * FROM VW_UTD_tecnico WHERE estado_usuario = 1";
			// llamado al metodo general que ejecuta un select a la bd
			$query = $this->pdo->select($strSql);
			return $query;
		} catch (PDOException $e) {
			die($e->getMessage());
		}
	}
    
    // peticion request
	// public function newServicer($data)
	// {
	// 	try {
	// 		// $data['status_id'] = 1;
	// 		$this->pdo->insert('Servicio', $data);
	// 	} catch (PDOException $e){
	// 		die($e->getMessage());
	// 	}
	// }

// 	public function getServicerById($id)
// 	{
// 		try {			
// 			$strSql = "SELECT * FROM Servicers WHERE id=:id";
// 			$arrayData = ['id'=>$id];
// 			$query = $this->pdo->select($strSql, $arrayData);
// 			return $query;
// 		} catch (PDOException $e) {
// 			die($e->getMessage());
// 		}
// 	}


// 	public function editServicer($data)
// 	{
// 		try {			
// 			$strWhere = 'id = '.$data['id'];
// 			$this->pdo->update('Servicers',$data,$strWhere);

// 		} catch (PDOException $e) {
// 			die($e->getMessage());
// 		}
// 	}

// 	// public function deleteServicer($data)
// 	// {
// 	// 	try {			
// 	// 		$strWhere = 'id = '.$data['id'];
// 	// 		$this->pdo->delete('Servicers',$strWhere);

// 	// 	} catch (PDOException $e) {
// 	// 		die($e->getMessage());
// 	// 	}
// 	// }
// 	// 
// 	public function editServicerStatus($data){
// 		try {
// 			$strWhere = 'id =' . $data['id'];
// 			$this->pdo->update('Servicers',$data,$strWhere);
// 		} catch (PDOException $e) {
// 			die($e->getMessage());
// 		}
// 	}

}

 ?>