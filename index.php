<?php
require_once "conexion/Conexion.php";
require_once "controller/Index_controller.php";
require_once "controller/Tbltipodocumento_controller.php";
require_once "controller/Tblestudiantes_controller.php";

$controller = new Index_controller();
$controller_tipodocumento = new Tbltipodocumento_controller();
$controller_estudiantes = new Tblestudiantes_controller();

if(!empty($_REQUEST['accion'])){
    $metodo=$_REQUEST['accion'];
    
    switch($metodo){
        case method_exists($controller, $metodo):
            $controller->index();
        break;
    
        case method_exists($controller_tipodocumento, $metodo):
            $controller_tipodocumento->$metodo();
        break;
    
        case method_exists($controller_estudiantes, $metodo):
        $controller_estudiantes->$metodo();
        break;
    
        default:
        $controller->index();
    }
    
    }else{
        $controller->index();
    }
?>