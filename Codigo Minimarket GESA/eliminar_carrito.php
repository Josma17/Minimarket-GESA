<?php
session_start();

if(!isset($_GET['ID']) OR !is_numeric($_GET['ID']))
    header('Location: carrito.php');

$ID = $_GET['ID'];

if(isset($_SESSION['carrito'])){
    unset($_SESSION['carrito'][$ID]);   
    header('Location: carrito.php');
}else{
    header('Location: index.php');
}


