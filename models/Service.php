<?php

/**
 * Modelo de la tabla Services
 * CRUD.php
 */
class Service
{

	private $id_servicio_PK;
	private $id_cliente_FK;
	private $estado_servicio;
	private $fecha_peticion;
	private $hora_peticion;
	private $costo_servicio;
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
			$strSql = "SELECT * FROM SEC_servicio ORDER BY id_servicio_PK DESC";
			// llamado al metodo general que ejecuta un select a la bd
			$query = $this->pdo->select($strSql);
			return $query;
		} catch (PDOException $e) {
			die($e->getMessage());
		}
	}

	public function getActiveServices()
	{
		try {
			$strSql = "SELECT * FROM SEC_servicio WHERE id_estado_servicio_FK BETWEEN 1 AND 3 ORDER BY id_servicio_PK DESC";
			$query = $this->pdo->select($strSql);
			return $query;
		} catch (PDOException $e) {
			die($e->getMessage());
		}
	}

	public function getInactiveServices()
	{
		try {
			$strSql = "SELECT * FROM SEC_servicio WHERE id_estado_servicio_FK BETWEEN 4 AND 5 ORDER BY id_servicio_PK DESC";
			// llamado al metodo general que ejecuta un select a la bd
			$query = $this->pdo->select($strSql);
			return $query;
		} catch (PDOException $e) {
			die($e->getMessage());
		}
	}
	// IDEAS 
	// 1. obtener servicios inactivos y listarlos
	// 2. Obtener servicios activos y listarlos aparte
	// 3. obtener todos los servicios y listarlos aparte
	// 4. ordenar de manera descendente los registros

	public function getArtService($service_id)
	{
		try {
			$strSql = "SELECT ars.*,a.modelo as modelo FROM Artefacto_Servicio ars 
			INNER JOIN Artefacto a ON a.id_artefacto_PK = ars.id_artefacto_FK 
			WHERE ars.id_servicio_FK = '{$service_id}' ";
			$query = $this->pdo->select($strSql);
			return $query;
		} catch (PDOException $e) {
			die($e->getMessage());
		}
	}

	public function getCitService($service_id)
	{
		try {
			$strSql = "SELECT cs.*,c.direccion_lugar FROM Citacion_Servicio cs 
			INNER JOIN Citacion c ON c.id_citacion_PK = cs.id_citacion_FK 
			WHERE cs.id_servicio_FK = '{$service_id}'";
			$query = $this->pdo->select($strSql);
			return $query;
		} catch (PDOException $e) {
			die($e->getMessage());
		}
	}

	public function getCatService($service_id)
	{
		try {
			$strSql = "SELECT csss.*,cs.nombre_cs
			FROM Categorias_Servicios csss 
			INNER JOIN Categoria_Servicio cs 
			ON cs.id_categoria_servicio_PK = csss.id_categoria_servicio_FK 
			WHERE csss.id_servicio_FK = '{$service_id}'";
			$query = $this->pdo->select($strSql);
			return $query;
		} catch (PDOException $e) {
			die($e->getMessage());
		}
	}

	public function getTechService($service_id)
	{
		try {
			$strSql = "SELECT ts.*,t.numero_documento as numero_documento 
			FROM Tecnico_Servicio ts 
			INNER JOIN Tecnico t ON t.id_tecnico_PK = ts.id_tecnico_asignado_FK 
			WHERE ts.id_servicio_FK = '{$service_id}'";
			$query = $this->pdo->select($strSql);
			return $query;
		} catch (PDOException $e) {
			die($e->getMessage());
		}
	}

	public function getDetService()
	{
		try {
			$strSql = "call sp_getDetService()";
			$query = $this->pdo->select($strSql);
			return $query;
		} catch (PDOException $e) {
			die($e->getMessage());
		}
	}

	//peticion request
	public function newService($data)
	{
		try {
			// $data['costo_servicio'] = $data['costo_servicio']+$data['costo_revision'];
			$this->pdo->insert('Servicio', $data);
			return true;
		} catch (PDOException $e) {
			return $e->getMessage();
		}
	}


	public function getServiceLastId()
	{
		try {
			$strSql = "SELECT MAX(id_servicio_PK) as id_servicio_PK FROM Servicio";
			$query = $this->pdo->select($strSql);
			return $query;
		} catch (PDOException $e) {
			return $e->getMessage();
		}
	}

	public function getServiceById($id_servicio_PK)
	{
		try {
			$strSql = "SELECT * FROM Servicio WHERE id_servicio_PK=:id_servicio_PK";
			$arrayData = ['id_servicio_PK' => $id_servicio_PK];
			$query = $this->pdo->select($strSql, $arrayData);
			return $query;
		} catch (PDOException $e) {
			die($e->getMessage());
		}
	}

	public function getArtServiceById($id_servicio_PK)
	{
		try {
			$strSql = "call sp_getArtServiceById(:id_servicio_PK)";
			$arrayData = ['id_servicio_PK' => $id_servicio_PK];
			$query = $this->pdo->select($strSql, $arrayData);
			return $query;
		} catch (PDOException $e) {
			die($e->getMessage());
		}
	}

	public function getCitServiceById($id_servicio_PK)
	{
		try {
			$strSql = "call sp_getCitServiceById(:id_servicio_PK)";
			$arrayData = ['id_servicio_PK' => $id_servicio_PK];
			$query = $this->pdo->select($strSql, $arrayData);
			return $query;
		} catch (PDOException $e) {
			die($e->getMessage());
		}
	}

	public function getCatServiceById($id_servicio_PK)
	{
		try {
			$strSql = "call sp_getCatServiceById(:id_servicio_PK)";
			$arrayData = ['id_servicio_PK' => $id_servicio_PK];
			$query = $this->pdo->select($strSql, $arrayData);
			return $query;
		} catch (PDOException $e) {
			die($e->getMessage());
		}
	}


	public function getTechServiceById($id_servicio_PK)
	{
		try {
			$strSql = "call sp_getTechServiceById(:id_servicio_PK)";
			$arrayData = ['id_servicio_PK' => $id_servicio_PK];
			$query = $this->pdo->select($strSql, $arrayData);
			return $query;
		} catch (PDOException $e) {
			die($e->getMessage());
		}
	}

	public function getDetServiceById($id_servicio_PK)
	{
		try {
			$strSql = "call sp_getDetServiceById(:id_servicio_PK)";
			$arrayData = ['id_servicio_PK' => $id_servicio_PK];
			$query = $this->pdo->select($strSql, $arrayData);
			return $query;
		} catch (PDOException $e) {
			die($e->getMessage());
		}
	}

	public function editService($data)
	{
		try {
			$strWhere = 'id_servicio_PK = ' . $data['id_servicio_PK'];
			$this->pdo->update('Servicio', $data, $strWhere);
		} catch (PDOException $e) {
			die($e->getMessage());
		}
	}

	public function editDetService($arrayDetails,$id_servicio_PK)
	{
		try {
			$strWhere = 'id_revision_servicio_PK=' . $arrayDetails[0]['id_revision_servicio_PK'];

			foreach ($arrayDetails as $detail) {
				$data = [
					'id_revision_servicio_PK'   => $detail['id_revision_servicio_PK'],
					'id_servicio_FK' 			=> $id_servicio_PK,
					'is_software'  				=> $detail['is_software'],
					'is_hardware'  				=> $detail['is_hardware'],
					'descripcion_cliente'  		=> $detail['descripcion_cliente'],
					'diagnostico'  				=> $detail['diagnostico'],
					'costo_revision'  			=> $detail['costo_revision']
				];

				$this->pdo->update('Revision_Servicio',$data,$strWhere);
			}
			return true;
		} catch (PDOException $e) {
			return $e->getMessage();
		}
	}

	public function editServiceStatus($data)
	{
		try {
			$strWhere = 'id_servicio_PK =' . $data['id_servicio_PK'];
			$this->pdo->update('Servicio', $data, $strWhere);
		} catch (PDOException $e) {
			die($e->getMessage());
		}
	}

	public function saveArtService($arrayArtifacts, $lastIdService)
	{
		try {
			foreach ($arrayArtifacts as $artifact) {
				$data = [
					'id_artefacto_FK' 			=> $artifact['id_artefacto_PK'],
					'id_servicio_FK' 			=> $lastIdService,
				];
				$this->pdo->insert('Artefacto_Servicio', $data);
			}
			return true;
		} catch (PDOException $e) {
			return $e->getMessage();
		}
	}

	public function saveCitService($arrayCitations, $lastIdService)
	{
		try {
			foreach ($arrayCitations as $citation) {
				$data = [
					'id_servicio_FK' 			=> $lastIdService,
					'id_citacion_FK'  			=> $citation['id_citacion_PK'],
				];
				$this->pdo->insert('Citacion_Servicio', $data);
			}
			return true;
		} catch (PDOException $e) {
			return $e->getMessage();
		}
	}

	public function saveCatService($arrayScategories, $lastIdService)
	{
		try {
			foreach ($arrayScategories as $scategory) {
				$data = [
					'id_servicio_FK' 			=> $lastIdService,
					'id_categoria_servicio_FK'  => $scategory['id_categoria_servicio_PK'],
				];
				$this->pdo->insert('Categorias_Servicios', $data);
			}
			return true;
		} catch (PDOException $e) {
			return $e->getMessage();
		}
	}


	public function saveTechService($arrayTechnicians, $lastIdService)
	{
		try {
			foreach ($arrayTechnicians as $techncial) {
				$data = [
					'id_servicio_FK' 			=> $lastIdService,
					'id_tecnico_asignado_FK'    => $techncial['id_tecnico_PK'],
				];
				$this->pdo->insert('Tecnico_Servicio', $data);
			}
			return true;
		} catch (PDOException $e) {
			return $e->getMessage();
		}
	}

	public function saveDetService($arrayDetails, $lastIdService)
	{
		try {
			foreach ($arrayDetails as $detail) {
				$data = [
					'id_servicio_FK' 			=> $lastIdService,
					'is_software'  				=> $detail['is_software'],
					'is_hardware'  				=> $detail['is_hardware'],
					'descripcion_cliente'  		=> $detail['descripcion_cliente'],
					'diagnostico'  				=> $detail['diagnostico'],
					'costo_revision'  			=> $detail['costo_revision'],
					'fecha_inicio'  			=> date("Y-m-d H:i:s"),
					'fecha_fin'  				=> date("Y-m-d H:i:s")
				];

				$this->pdo->insert('Revision_Servicio', $data);
			}
			return true;
		} catch (PDOException $e) {
			return $e->getMessage();
		}
	}

	public function deleteArtService($id_servicio_PK)
	{
		try {
			$strWhere = 'id_servicio_FK=' . $id_servicio_PK;
			$this->pdo->delete('Artefacto_Servicio', $strWhere);
			// var_dump($strWhere);
			// exit();
			return true;
		} catch (PDOException $e) {
			return $e->getMessage();
		}
	}

	public function deleteCitService($id_servicio_PK)
	{
		try {
			$strWhere = 'id_servicio_FK=' . $id_servicio_PK;
			$this->pdo->delete('Citacion_Servicio', $strWhere);
			// var_dump($strWhere);
			// exit();
			return true;
		} catch (PDOException $e) {
			return $e->getMessage();
		}
	}

	public function deleteCatService($id_servicio_PK)
	{
		try {
			$strWhere = 'id_servicio_FK=' . $id_servicio_PK;
			$this->pdo->delete('Categorias_Servicios', $strWhere);
			// var_dump($strWhere);
			// exit();
			return true;
		} catch (PDOException $e) {
			return $e->getMessage();
		}
	}

	public function deleteTechService($id_servicio_PK)
	{
		try {
			$strWhere = 'id_servicio_FK=' . $id_servicio_PK;
			$this->pdo->delete('Tecnico_Servicio', $strWhere);
			// var_dump($strWhere);
			// exit();
			return true;
		} catch (PDOException $e) {
			return $e->getMessage();
		}
	}
}
