<?php 

/**
 * Modelo de la tabla Categorys
 * CRUD.php
 */
class Client
{
	
	private $id_cliente_PK;
	private $id_barrio_FK;	
	private $id_usuario_FK;	
	private $id_tipo_documento_FK;	
	private $nombre_cliente;	
	private $numero_documento;
	private $telefono;
	private $direccion_residencia;
	private $foto_cliente;
	private $pdo;


	public function __construct()
	{
    	try {
    		$this->pdo = new Database;
    		    		
    	} catch (PDOException $e){
    		die($e->getMessage());
    	}
	}

	public function getActiveClients()
	{
		try {
			$strSql = "SELECT * FROM VW_BUTD_cliente 
			WHERE id_rol_FK BETWEEN 3 AND 4 
			AND estado_usuario = 1";
			// llamado al metodo general que ejecuta un select a la bd
			$query = $this->pdo->select($strSql);
			return $query;
		} catch (PDOException $e) {
			die($e->getMessage());
		}
	}
    
    // peticion request
	// public function newCategory($data)
	// {
	// 	try {
	// 		$data['status_id'] = 1;
	// 		$this->pdo->insert('categories', $data);
	// 	} catch (PDOException $e){
	// 		die($e->getMessage());
	// 	}
	// }

	// public function getCategoryById($id)
	// {
	// 	try {			
	// 		$strSql = "SELECT * FROM categories WHERE id=:id";
	// 		$arrayData = ['id'=>$id];
	// 		$query = $this->pdo->select($strSql, $arrayData);
	// 		return $query;
	// 	} catch (PDOException $e) {
	// 		die($e->getMessage());
	// 	}
	// }


	// public function editCategory($data)
	// {
	// 	try {			
	// 		$strWhere = 'id = '.$data['id'];
	// 		$this->pdo->update('categories',$data,$strWhere);

	// 	} catch (PDOException $e) {
	// 		die($e->getMessage());
	// 	}
	// }

	// public function deleteCategory($data)
	// {
	// 	try {			
	// 		$strWhere = 'id = '.$data['id'];
	// 		$this->pdo->delete('categories',$strWhere);

	// 	} catch (PDOException $e) {
	// 		die($e->getMessage());
	// 	}
	// }
	
	// public function editCategoryStatus($data){
	// 	try {
	// 		$strWhere = 'id =' . $data['id'];
	// 		$this->pdo->update('categories',$data,$strWhere);
	// 	} catch (PDOException $e) {
	// 		die($e->getMessage());
	// 	}
	// }

}

 ?>