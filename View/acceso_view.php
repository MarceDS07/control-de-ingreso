<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
    crossorigin="anonymous"></script>
  <link rel="stylesheet" type="text/css" href="../View/styles.css" />
</head>

<body>
    <nav style="background: #620023;" class="navbar navbar-expand-lg navbar-light fixed-top">
        <div class="container">
        <a style="color: aliceblue;" class="navbar-brand" href="..\index.php">Control de Acceso</a>
        </div>
    </nav>
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