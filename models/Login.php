<?php

/**
 * Modelo de la tabla Services
 * CRUD.php
 */
class Login
{
    private $pdo;
    
	public function __construct()
	{
		try {
			$this->pdo = new Database;
		} catch (PDOException $e) {
			die($e->getMessage());
		}
    }
    
    public function validateUser($data)
    {
        try {
            $strSql = "SELECT u.*, r.nombre_rol as rol FROM usuario u
                        INNER JOIN Rol r ON r.id_rol_PK = u.id_rol_FK
                        WHERE u.correo = '{$data['correo']}' 
                            AND u.clave = '{$data['clave']}'
                            AND u.estado_usuario = 1";
            
            $query = $this->pdo->select($strSql);

            if(isset($query[0]->id_usuario_PK)){
                $_SESSION['user'] = $query[0];
                return true;
            }else{
                return 'Error al Iniciar Sesión. Verifique sus Credenciales';
            }
		} catch (PDOException $e) {
			return $e->getMessage();
		}
    }

}
