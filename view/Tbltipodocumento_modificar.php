<?php require_once "view/header.php"; ?>
<?php foreach($consulta as $datos):?>    
    <h1>
        Modificar información.
    </h1>
    <br>
    <form name="form1" method="POST" action="index.php?accion=guardarCambiosTipoDocumento">
        <p>Id: <input type="text" name="txtid" value="<?php echo $_REQUEST['id'];?>" readonly></p>
        <p>Nombre: <input type="text" name="txtnombretipodocumento" value="<?php echo $datos['nombre']; ?>"></p>
        <p><input type="submit" name="btnguardarcambios" value="Guardar Cambios"></p>
    </form>
    <?php endforeach; ?>
<?php require_once "view/footer.php"; ?>