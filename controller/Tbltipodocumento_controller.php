<?php
require_once "model/Tbltipodocumento_model.php";
class Tbltipodocumento_controller{
    private $model_tbltipodocumento;

    public function __construct(){
        $this->model_tbltipodocumento = new Tbltipodocumento_model();
    }

    public function menuTipoDocumento(){
        $consulta=$this->model_tbltipodocumento->consultarTipoDocumento();
        require_once "view/menuTipoDocumento.php";
    }

    public function guardarTipoDocumento(){
        $dato['nombre'] = $_POST['txtnombredocumento'];
        $this->model_tbltipodocumento->insertarTipoDocumento($dato);
        $this->menuTipoDocumento();
    }

    public function guardarCambiosTipoDocumento(){
        $dato['id']=$_POST["txtid"];
        $dato['nombre']=$_POST["txtnombretipodocumento"];
        $this->model_tbltipodocumento->actualizarTipoDocumento($dato);
        $this->menuTipoDocumento();
    }
    public function modificarTipoDocumento(){
        $id=$_REQUEST['id'];
        $consulta = $this->model_tbltipodocumento->consultarPorId("SELECT * FROM tbltipodocumento WHERE idtipo=$id");
        require_once "view/Tbltipodocumento_modificar.php";
    }
    public function eliminarTipoDocumento(){
        $id=$_REQUEST['id'];
        $this->model_tbltipodocumento->deleteTipoDocumento($id);
        $this->menuTipoDocumento();
    }

}
?>