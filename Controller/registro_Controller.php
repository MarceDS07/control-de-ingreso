<?php

require_once('..\View\registro_view.php');
require_once('..\Model\persona_model.php');
$p = new persona_model();


if (!empty($_POST['guardarUsuario'])) 
    if (empty($_POST['cedula']) || empty($_POST['nombre']) || empty($_POST['apellido']) || empty($_POST['tipo'])) {
        echo "<script>alert('Datos invalidos, Intente otra vez');</script>";
        echo "Cedula invalida";
    } else {
        $ci = $_POST['cedula'];
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $tipo = $_POST['tipo'];
        $p->insertPersona($ci, $nombre, $apellido, $tipo);
        header("Location: registro_Controller.php");
    }


?>