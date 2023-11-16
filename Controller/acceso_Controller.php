<?php


require_once('..\Model\ingreso_model.php');
require_once('..\Model\persona_model.php');
$ingreso = new ingreso_model();
$persona = new persona_model();

$datos = $ingreso->getIngresos();
require_once('..\View\acceso_view.php');

if (!empty($_POST['ingresar']))
    if (empty($_POST['cedula'])) {
        echo "Cedula invalida";
    } else {
        $ci = $_POST['cedula'];
        if ($ingreso->insertIngreso($ci) != 0) {
            sleep(3);
            header("Location: acceso_Controller.php");
        }else{
            echo "<script>alert('Ingreso Incorrecto');</script>";
        }
    }

?>