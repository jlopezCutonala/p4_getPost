<?php
    require_once 'Ingreso.php';

    $login = $_POST['login'];
    $contrasena = $_POST['contra'];

    $ingreso = new Ingreso();
    if ($ingreso->evaluar($login, $contrasena)) {
        echo "Bienvenido al sistema.";
    } else {
        echo "Sus datos no son validos.";
    }
?>
