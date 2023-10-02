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

        <div class="tabla">Tabla</div>
    </div>
</div>
</body>

</html>