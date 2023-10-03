<?php


require_once('..\Model\ingreso_model.php');
require_once('..\Model\persona_model.php');
$ingreso = new ingreso_model();
$persona = new persona_model();

$datos = $persona->getPersona();

require_once('..\View\acceso_view.php');

if (!empty($_POST['ingresar']))
    if (empty($_POST['cedula'])) {
        echo "Cedula invalida";
    } else {
        $ci = $_POST['cedula'];
        $ingreso->insertIngreso($ci);
        if ($ingreso->insertIngreso($ci) != 0) {
            header("Location: acceso_Controller.php");
        }
    }

?>