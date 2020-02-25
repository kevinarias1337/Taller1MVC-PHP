<?php
require_once "model/Tblestudiantes_model.php";
require_once "model/Tbltipodocumento_model.php";

class Tblestudiantes_controller{
    private $model_tbltipodocumento;
    private $model_tblestudiantes;

    public function __construct(){
        $this->model_tblestudiantes = new Tblestudiantes_model();
        $this->model_tbltipodocumento = new Tbltipodocumento_model();
    }

    public function menuEstudiantes(){
        $consulta=$this->model_tbltipodocumento->consultarTipoDocumento();
        $consulta2=$this->model_tblestudiantes->consultarEstudiantes();
        require_once "view/menuEstudiantes.php";
    } 

    public function guardarEstudiantes(){
        $dato['idtipo']=$_POST["seldocumento"];
        $dato['nombre']=$_POST["txtnombreestudiante"];
        $dato['numero']=$_POST["txtnumeroestudiante"];
        $dato['f_nacimiento']=$_POST["txtnacimientoestudiante"];
        $this->model_tblestudiantes->insertarEstudiantes($dato);
        $this->menuEstudiantes();
    }

    public function modificarEstudiantes(){
        $id = $_REQUEST['id'];
        $consulta = $this->model_tbltipodocumento->consultarTipoDocumento();
        $consulta2 = $this->model_tblestudiantes->consultarEstudiantesPorId($id);
        require_once 'view/Tblestudiante_modificar.php';
    }

    public function guardarCambiosEstudiantes(){
        $dato['numero'] = $_POST["txtnumeroestudiante"];
        $dato['idtipo'] = $_POST["seldocumento"];
        $dato['nombre'] = $_POST["txtnombreestudiante"];
        $dato['f_nacimiento'] = $_POST["txtnacimiento"];
        $this->model_tblestudiantes->actualizarEstudiantes($dato);
        $this->menuEstudiantes();
    }

    public function eliminarEstudiantes(){
        $id=$_REQUEST['id'];
        $this->model_tblestudiantes->deleteEstudiantes($id);
        $this->menuEstudiantes();
    }
}
?>