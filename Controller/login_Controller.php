<?php

require_once('View/login_view.php');
require_once('Model/login_model.php');
$p = new persona_model();


if (!empty($_POST['botonLogin']))
    if (empty($_POST['cedula'])) {
        echo "Cedula invalida";
    } else {
        $ci = $_POST['cedula'];
        $p->login($ci);
        if ($p->login($ci) != 0) {
            header("Location: Controller\inicio_Controller.php");
        }
    }

?>