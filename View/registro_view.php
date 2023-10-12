<?php include 'header_Controller.php' ?>

<div class="div-centrado">
    <div class="caja" style="color: aliceblue;">
        <div class="registro">
            <form action="" method="POST">
                <input type="text" name="cedula" placeholder="Cedula"><br>
                <input type="text" name="nombre" placeholder="Nombre"><br>
                <input type="text" name="apellido" placeholder="Apellido"><br>
                <select id="tipo" name="tipo">
                    <option value="alumno">Alumno</option>
                    <option value="docente">Docente</option>
                    <option value="no docente">No Docente</option>
                    <option value="administrador">Administrador</option>
                </select><br>
                <input type="submit" value="borrar" class="boton" name='borrarUsuario'>
                <input type="submit" value="guardar" class="boton" name='guardarUsuario'>
                <input type="submit" value="modificar" class="boton" name='modificarUsuario'>
            </form>
        </div>

        <table class="tabla" border="1" width="300">
            <tr>
                <th>CI</th>
                <th>Nombre</th>
                <th>Apellido</th>
            </tr>
            <?php
                //Recorremos el array para ir mostrando fila a fila los registros
                foreach ($datos as $dato) {
                    echo "<tr><td>".$dato["ci"]."</td><td>".$dato["nombre"]."</td><td>".$dato["apellido"]."</td>";
                }
            ?>
        </table>
    </div>
</div>
</body>

</html>