<?php
require '../vendor/autoload.php';

$productos = new Minimarket\Productos;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    if ($_POST['limpieza'] === 'Registrar') {

        if (empty($_POST['titulo']))
            exit('Completar titulo');

        if (empty($_POST['descripcion']))
            exit('Completa la descripción');

        if (empty($_POST['categoria_ID']))
            exit('Seleccionar una Categoria');

        if (!is_numeric($_POST['categoria_ID']))
            exit('Seleccionar una Categoria válida');


        $_params = array(
            'titulo' => $_POST['titulo'],
            'descripcion' => $_POST['descripcion'],
            'foto' => subirFoto(),
            'precio' => $_POST['precio'],
            'categoria_ID' => $_POST['categoria_ID'],
            'fecha' => date('Y-m-d')
        );
        $rpt = $productos->registrar($_params);

        if ($rpt)
            header("Location: productos/index.php");
        else
            print "Error al reguistrar una producto";
    }
    if ($_POST['limpieza'] === 'Actualizar') {

        if (empty($_POST['titulo']))
            exit('Completar titulo');

        if (empty($_POST['descripcion']))
            exit('Completar titulo');

        if (empty($_POST['categoria_ID']))
            exit('Seleccionar una Categoria');

        if (!is_numeric($_POST['categoria_ID']))
            exit('Seleccionar una Categoria válida');


        $_params = array(
            'titulo' => $_POST['titulo'],
            'descripcion' => $_POST['descripcion'],
            'precio' => $_POST['precio'],
            'categoria_ID' => $_POST['categoria_ID'],
            'fecha' => date('Y-m-d'),
            'ID' => $_POST['ID'],
        );

        if (!empty($_POST['foto_temp']))
            $_params['foto'] = $_POST['foto_temp'];

        if (!empty($_FILES['foto']['name']))
            $_params['foto'] = subirFoto();


        $rpt = $productos->actualizar($_params);
        if ($rpt)
            header('Location: productos/index.php');
        else
            print 'Error al actualizar una productos';
    }
}
if ($_SERVER['REQUEST_METHOD'] === 'GET') {

    $ID = $_GET['ID'];

    $rpt = $productos->eliminar($ID);

    if ($rpt)
        header('Location: productos/index.php');
    else
        print 'Error al eliminar un producto';
}


function subirFoto()
{

    $carpeta = __DIR__ . '/../upload/';

    $archivo = $carpeta . $_FILES['foto']['name'];

    move_uploaded_file($_FILES['foto']['tmp_name'], $archivo);

    return $_FILES['foto']['name'];
}
