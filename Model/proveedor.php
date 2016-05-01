<?php
class proveedor
{
	//Atributo para conexión a SGBD
	private $pdo;

		//Atributos del objeto proveedor
    public $nit;
    public $razonS;
    public $dir;
    public $tel;

	//Método de conexión a SGBD.
	public function __CONSTRUCT()
	{
		try
		{
			$this->pdo = Database::Conectar();
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	//Este método selecciona todas las tuplas de la tabla
	//proveedor en caso de error se muestra por pantalla.
	public function Listar()
	{
		try
		{
			$result = array();
			//Sentencia SQL para selección de datos.
			$stm = $this->pdo->prepare("SELECT * FROM proveedor");
			//Ejecución de la sentencia SQL.
			$stm->execute();
			//fetchAll — Devuelve un array que contiene todas las filas del conjunto
			//de resultados
			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			//Obtener mensaje de error.
			die($e->getMessage());
		}
	}

	//Este método obtiene los datos del proveedor a partir del nit
	//utilizando SQL.
	public function Obtener($nit)
	{
		try
		{
			//Sentencia SQL para selección de datos utilizando
			//la clausula Where para especificar el nit del proveedor.
			$stm = $this->pdo->prepare("SELECT * FROM proveedor WHERE nit = ?");
			//Ejecución de la sentencia SQL utilizando el parámetro nit.
			$stm->execute(array($nit));
			return $stm->fetch(PDO::FETCH_OBJ);
		} catch (Exception $e)
		{
			die($e->getMessage());
		}
	}

	//Este método elimina la tupla proveedor dado un nit.
	public function Eliminar($nit)
	{
		try
		{
			//Sentencia SQL para eliminar una tupla utilizando
			//la clausula Where.
			$stm = $this->pdo
			            ->prepare("DELETE FROM proveedor WHERE nit = ?");

			$stm->execute(array($nit));
		} catch (Exception $e)
		{
			die($e->getMessage());
		}
	}

	//Método que actualiza una tupla a partir de la clausula
	//Where y el nit del proveedor.
	public function Actualizar($data)
	{
		try
		{
			//Sentencia SQL para actualizar los datos.
			$sql = "UPDATE proveedor SET
						razonS          = ?,
						dir        = ?,
            tel        = ?
				    WHERE nit = ?";
			//Ejecución de la sentencia a partir de un arreglo.
			$this->pdo->prepare($sql)
			     ->execute(
				    array(
                        $data->razonS,
                        $data->dir,
                        $data->tel,
                        $data->nit
					)
				);
		} catch (Exception $e)
		{
			die($e->getMessage());
		}
	}

	//Método que registra un nuevo proveedor a la tabla.
	public function Registrar(proveedor $data)
	{
		try
		{
			//Sentencia SQL.
			$sql = "INSERT INTO proveedor (nit,razonS,dir,tel)
		        VALUES (?, ?, ?, ?)";

			$this->pdo->prepare($sql)
		     ->execute(
				array(
                    $data->nit,
                    $data->razonS,
                    $data->dir,
                    $data->tel,
                )
			);
		} catch (Exception $e)
		{
			die($e->getMessage());
		}
	}
}
