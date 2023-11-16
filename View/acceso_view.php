<?php include 'header_Controller.php' ?>

<div class="div-centrado">
    <div class="caja">
        <form action="" method="POST">
            <div class="display">
                <p style="color: aliceblue;">Ingrese su cedula</p>
                <input type="text" name="cedula">
            </div>
            <div>
                <input type="button" value="7" onclick="cedula.value += '7'">
                <input type="button" value="8" onclick="cedula.value += '8'">
                <input type="button" value="9" onclick="cedula.value += '9'">
                <br>
                <input type="button" value="4" onclick="cedula.value += '4'">
                <input type="button" value="5" onclick="cedula.value += '5'">
                <input type="button" value="6" onclick="cedula.value += '6'">
                <br>
                <input type="button" value="1" onclick="cedula.value += '1'">
                <input type="button" value="2" onclick="cedula.value += '2'">
                <input type="button" value="3" onclick="cedula.value += '3'">
                <br>
                <input type="button" value="Borrar" onclick="cedula.value = ''">
                <input type="button" value="0" onclick="cedula.value += '0'">
                <input type="submit" value="Ingresar" name='ingresar'>
            </div>
        </form>

        <table class="tabla" border="1" width="300">
            <tr>
                <th>CI</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Tipo</th>
                <th>Fecha/Hora</th>
            </tr>
            <?php
                //Recorremos el array para ir mostrando fila a fila los registros
                foreach ($datos as $dato) {
                    echo "<tr><td>".$dato["ci"]."</td><td>".$dato["nombre"]."</td><td>".$dato["apellido"]."</td><td>".$dato["tipo"]."</td><td>".$dato["fecha"]."</td>";
                }
            ?>
        </table>

    </div>
</div>
</body>

</html>