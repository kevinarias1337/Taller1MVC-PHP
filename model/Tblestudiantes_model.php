<?php
class Tblestudiantes_model{
    private $bd;
    private $tblestudiantes;

    public function __construct(){
        $this->bd=Conexion::getConexion();
        $this->tblestudiantes=array();
    }

    public function consultarEstudiantes(){
        $consulta2=$this->bd->query("SELECT * FROM tblestudiantes");
        while($fila=$consulta2->fetch_assoc()){
            $this->tblestudiantes[]=$fila;
        }
        return $this->tblestudiantes;
    }
    public function insertarEstudiantes($dato){
        $tipodoc=$dato['idtipo'];
        $nombre=$dato['nombre'];
        $numero=$dato['numero'];
        $f_nacimiento=$dato['f_nacimiento'];
        $consulta="INSERT INTO tblestudiantes (tipodoc, numero, nombre, f_nacimiento) VALUES ($tipodoc, $numero, '$nombre', '$f_nacimiento')";
        mysqli_query($this->bd, $consulta) or die ("Error al insertar los datos");
    }

    public function consultarEstudiantesPorId($id){
        $consulta = $this->bd->query("SELECT * FROM tblestudiantes WHERE numero = " . $id);
        $fila = $consulta->fetch_assoc();
        $this->tblestudiantes[] = $fila;
        return $this->tblestudiantes;
    }

    public function actualizarEstudiantes($dato){
        $tipodoc = $dato['idtipo'];
        $nombre = $dato['nombre'];
        $numero = $dato['numero'];
        $f_nacimiento=$dato['f_nacimiento'];
        $consulta = "UPDATE tblestudiantes SET tipodoc=$tipodoc, nombre='$nombre', numero=$numero, f_nacimiento='$f_nacimiento'  WHERE numero=$numero";
        mysqli_query($this->bd, $consulta) or die ("Error al actualizar los cambios del Estudiante.");
    }

    public function deleteEstudiantes($id){
        $consulta="DELETE FROM tblestudiantes WHERE numero=$id";
        mysqli_query($this->bd, $consulta) or die ("Error al eliminar los datos");
    }
}
?>