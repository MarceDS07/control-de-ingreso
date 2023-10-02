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
                <input type="button" value="de" onclick="cedula.value = ''">
                <input type="button" value="0" onclick="cedula.value += '0'">
                <input type="submit" value="ac" name='ingresar'>
            </div>
        </form>

        <div class="tabla">Tabla</div>

    </div>
</div>
</body>

</html>