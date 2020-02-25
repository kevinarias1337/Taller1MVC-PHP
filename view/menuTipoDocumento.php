<?php require_once "view/header.php"; ?>
<h2>Menú Tipo Documento:</h2>
<form name="form1" method="POST" action="./?accion=guardarTipoDocumento">
    <p>Nombre del documento: <input type="text" name="txtnombredocumento"></p>
    <p><input type="submit" name="btnguardardocumento" value="Guardar documento"></p>
</form>
<br>

<table>
    <thead>
        <tr>
        <th>Id</th>
        <th>Documento</th>
        </tr>
    </thead>

    <tbody>
        <?php foreach($consulta as $dato): ?>
        <tr>
            <td><?php echo $dato['idtipo']; ?></td>
            <td><?php echo $dato['nombre']; ?></td>
            <td><a href="./?accion=modificarTipoDocumento&id=<?php echo $dato['idtipo']; ?>">Modificar</a></td>
            <td><a href="./?accion=eliminarTipoDocumento&id=<?php echo $dato['idtipo'];?>">Eliminar</a></td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<br>
<br>
<a href="./">Volver</a>
<?php require_once "view/footer.php"; ?>