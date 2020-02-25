<?php require_once "view/header.php"; ?>
<h2>Menú Estudiantes:</h2>
<form name="form1" method="POST" action="./?accion=guardarEstudiantes">
    <p>Tipo documento:
        <select name="seldocumento">
            <option value="">Seleccione...</option>
            <?php foreach($consulta as $datos): ?>
            <option value="<?php echo $datos['idtipo']; ?>"><?php echo $datos['nombre']; ?></option>
            <?php endforeach; ?>
        </select>
    </p>
    <p>Número: <input type="text" name="txtnumeroestudiante"></p>
    <p>Nombre: <input type="text" name="txtnombreestudiante"></p>
    <p>Fecha Nacimiento: <input type="text" name="txtnacimientoestudiante"></p>
    <p><input type="submit" name="btnguardarestudiante" value="Guardar estudiante"></p>
</form>
<br>

<table>
    <thead>
        <tr>
        <th>Tipo Documento -</th>
        <th> Numero Documento -</th>
        <th> Nombre -</th>
        <th> Fecha Nacimiento</th>
        </tr>
    </thead>

    <tbody>
        <?php foreach($consulta2 as $dato): ?>
        <tr>
            <td><?php echo $dato['tipodoc']; ?></td>
            <td><?php echo $dato['numero']; ?></td>
            <td><?php echo $dato['nombre']; ?></td>
            <td><?php echo $dato['f_nacimiento']; ?></td>
            <td><a href="./?accion=modificarEstudiantes&id=<?php echo $dato['numero']; ?>">Modificar</a></td>
            <td><a href="./?accion=eliminarEstudiantes&id=<?php echo $dato['numero'];?>">Eliminar</a></td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<br>
<br>
<a href="./">Volver</a>
<?php require_once "view/footer.php"; ?>