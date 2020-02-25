<?php require_once 'header.php'; ?>

        <h2>Modificación de Estudiante</h2>
        <br>
        <?php foreach($consulta2 as $datoEstudiantes): ?>
        <form name="form1" method="POST" action="./?accion=guardarCambiosEstudiantes">
            <p>Tipo documento:
                <select name="seldocumento">
                    <?php foreach($consulta as $datos): ?>
                        <?php
                        if($dato2['idtipo'] == $datos['idtipo']){
                            ?>
                            <option selected value="<?php echo $datos['idtipo']; ?>"><?php echo $datos['nombre']; ?></option>
                            <?php
                        }else{
                            ?>
                            <option value="<?php echo $datos['idtipo']; ?>"><?php echo $datos['nombre']; ?></option>
                            <?php
                        }
                    ?>
                    <?php endforeach; ?>
                </select>
            </p>
            <p>Número: <input type="text" name="txtnumeroestudiante" value="<?php echo $datoEstudiantes['numero'] ?>"></p>
            <p>Nombre: <input type="text" name="txtnombreestudiante" value="<?php echo $datoEstudiantes['nombre'] ?>"></p>
            <p>Fecha nacimiento: <input type="text" name="txtnacimiento" value="<?php echo $datoEstudiantes['f_nacimiento'] ?>"></p>
            <p><input type="submit" name="btnguardarestudiante" value="Guardar Estudiante"></p>
        </form>
        <?php endforeach; ?>

        <br>
        <br>
        <br>
        <a href="./?accion=menuProductos">Volver</a>
<?php require_once 'footer.php'; ?>