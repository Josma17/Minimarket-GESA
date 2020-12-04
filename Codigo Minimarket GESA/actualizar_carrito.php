<?php

session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    require 'funciones.php';
    $ID = $_POST['ID'];
    $cantidad = $_POST['cantidad'];

    if (is_numeric($cantidad)) {

        if (array_key_exists($ID, $_SESSION['carrito']))
            actualizarProductos($ID, $cantidad);
    }

    header('Location: carrito.php');
}
