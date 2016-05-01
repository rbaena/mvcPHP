<?php
class producto
{
	private $pdo;

    public $idProducto;
    public $nit;
    public $nomprod;
    public $precioU;
    public $descrip;

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

	public function Listar()
	{
		try
		{
			$result = array();

			$stm = $this->pdo->prepare("SELECT * FROM producto");
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function Obtener($idProducto)
	{
		try
		{
			$stm = $this->pdo->prepare("SELECT * FROM producto WHERE idProducto = ?");
			$stm->execute(array($idProducto));
			return $stm->fetch(PDO::FETCH_OBJ);
		} catch (Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function Eliminar($idProducto)
	{
		try
		{
			$stm = $this->pdo
			            ->prepare("DELETE FROM producto WHERE idProducto = ?");

			$stm->execute(array($idProducto));
		} catch (Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function Actualizar($data)
	{
		try
		{
			$sql = "UPDATE producto SET
						nomprod          = ?,
						precioU        = ?,
            descrip        = ?
				    WHERE idProducto = ?";

			$this->pdo->prepare($sql)
			     ->execute(
				    array(
                        $data->nomprod,
                        $data->precioU,
                        $data->descrip,
                        $data->idProducto
					)
				);
		} catch (Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function Registrar(producto $data)
	{
		try
		{
		$sql = "INSERT INTO producto (idProducto,nit,nomprod,precioU,descrip)
		        VALUES (?, ?, ?, ?,?)";

		$this->pdo->prepare($sql)
		     ->execute(
				array(
                    $data->idProducto,
                    $data->nit,
                    $data->nomprod,
                    $data->precioU,
                    $data->descrip
                )
			);
		} catch (Exception $e)
		{
			die($e->getMessage());
		}
	}
}
