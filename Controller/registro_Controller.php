<?php

require_once('..\Model\persona_model.php');
$p = new persona_model();
$datos = $p->getPersona();
require_once('..\View\registro_view.php');


if (!empty($_POST['guardarUsuario'])){
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
}

if (!empty($_POST['borrarUsuario'])) {
    if (empty($_POST['cedula'])) {
        echo "<script>alert('Datos invalidos, Intente otra vez');</script>";
        echo "Cedula invalida";
    } else {
        $ci = $_POST['cedula'];
        $p->deletePersona($ci);
        header("Location: registro_Controller.php");
    }
}
if (!empty($_POST['modificarUsuario'])){
    if (empty($_POST['cedula']) || empty($_POST['nombre']) || empty($_POST['apellido']) || empty($_POST['tipo'])) {
        echo "<script>alert('Datos invalidos, Intente otra vez');</script>";
        echo "Cedula invalida";
    } else {
        $ci = $_POST['cedula'];
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $tipo = $_POST['tipo'];
        $p->updatePersona($ci, $nombre, $apellido, $tipo);
        header("Location: registro_Controller.php");
    }
}

?>