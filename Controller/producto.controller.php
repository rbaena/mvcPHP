<?php
require_once 'model/producto.php';

class ProductoController{

    private $model;

    public function __CONSTRUCT(){
        $this->model = new producto();
    }

    //Llamado plantilla principal
    public function Index(){
        require_once 'view/header.php';
        require_once 'view/producto/producto.php';
        require_once 'view/footer.php';
    }

    public function Crud(){
        $prod = new producto();

        if(isset($_REQUEST['idProducto'])){
            $prod = $this->model->Obtener($_REQUEST['idProducto']);
        }

        require_once 'view/header.php';
        require_once 'view/producto/producto-editar.php';
        require_once 'view/footer.php';
    }

    public function Nuevo(){
        $prod = new producto();

        require_once 'view/header.php';
        require_once 'view/producto/producto-nuevo.php';
        require_once 'view/footer.php';
    }

    public function Guardar(){
        $prod = new producto();

        $prod->idProducto = $_REQUEST['idProducto'];
        $prod->nit = $_REQUEST['nit'];
        $prod->nomprod = $_REQUEST['nomprod'];
        $prod->precioU = $_REQUEST['precioU'];
        $prod->descrip = $_REQUEST['descrip'];

        $this->model->Registrar($prod);

        header('Location: index.php?c=producto');
    }

    public function Editar(){
        $prod = new producto();

        $prod->idProducto = $_REQUEST['idProducto'];
        $prod->nit = $_REQUEST['nit'];
        $prod->nomprod = $_REQUEST['nomprod'];
        $prod->precioU = $_REQUEST['precioU'];
        $prod->descrip = $_REQUEST['descrip'];

        $this->model->Actualizar($prod);

        header('Location: index.php?c=producto');
    }

    public function Eliminar(){
        $this->model->Eliminar($_REQUEST['idProducto']);
        header('Location: index.php');
    }
}
