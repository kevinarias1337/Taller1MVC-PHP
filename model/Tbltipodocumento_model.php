<?php
class Tbltipodocumento_model{
    private $bd;
    private $tbltipodocumento;

    public function __construct(){
        $this->bd=Conexion::getConexion();
        $this->tbltipodocumento=array();
    }
    public function consultarTipoDocumento(){
        $consulta=$this->bd->query("SELECT * FROM tbltipodocumento");
        while($fila=$consulta->fetch_assoc()){
            $this->tbltipodocumento[]=$fila;
        }
        return $this->tbltipodocumento;
    }
    public function insertarTipoDocumento($dato){
        $nombre=$dato['nombre'];
        $consulta="INSERT INTO tbltipodocumento (nombre) VALUES ('$nombre')";
        mysqli_query($this->bd, $consulta) or die ("Error al insertar la categoria");
    }
    public function actualizarTipoDocumento($dato){
        $id=$dato['id'];
        $nombre=$dato['nombre'];
        $consulta="UPDATE tbltipodocumento SET nombre = '$nombre' WHERE idtipo = '$id'";
        mysqli_query($this->bd, $consulta) or die ("Error al actualizar los datos");
    } 
    public function consultarPorId($sql){
        $consulta = $this->bd->query($sql);
        $fila=$consulta->fetch_assoc();
        $this->tbltipodocumento[]=$fila;
        return $this->tbltipodocumento;
    }
    public function deleteTipoDocumento($id){
        $consulta="DELETE FROM tbltipodocumento WHERE idtipo=$id";
        mysqli_query($this->bd, $consulta) or die ("Error al eliminar los datos");
    }
}
?>