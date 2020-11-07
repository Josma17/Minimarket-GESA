<?php


if($_SERVER['REQUEST_METHOD'] ==='POST'){

    $nombre_usuario = $_POST['nombre_usuario'];
    $clave = $_POST['clave'];

    require '../vendor/autoload.php';
    $usuario = new Minimarket\Usuario;
    $resultado = $usuario->login($nombre_usuario, $clave );

    if($resultado){
        print 'login ok';
    }else{
        print 'ERROR AL INICIAR SESIÓN';
    }



}