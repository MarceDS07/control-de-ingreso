<?php

require_once('..\View\acceso_view.php');
require_once('..\Model\ingreso_model.php');
$i = new ingreso_model();

if (!empty($_POST['ingresar']))
    if (empty($_POST['cedula'])) {
        echo "Cedula invalida";
    } else {
        $ci = $_POST['cedula'];
        $i->insertIngreso($ci);
        if ($i->insertIngreso($ci) != 0) {
            header("Location: acceso_Controller.php");
        }
    }

?>