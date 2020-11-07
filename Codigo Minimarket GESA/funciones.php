<?php


function agregarProductos($resultado, $ID, $cantidad = 1){
    $_SESSION['carrito'][$ID] = array(
        'ID' => $resultado['ID'],
        'titulo' => $resultado['titulo'],
        'foto' => $resultado['foto'],
        'precio' => $resultado['precio'],
        'cantidad' => $cantidad
   );
}


function actualizarProductos($ID,$cantidad = FALSE){

    if($cantidad)
        $_SESSION['carrito'][$ID]['cantidad'] = $cantidad;
    else
        $_SESSION['carrito'][$ID]['cantidad']+=1;
}


function calcularTotal(){
    $total = 0;
    if(isset($_SESSION['carrito'])){
        foreach($_SESSION['carrito'] as $indice => $value){
            $total += $value['precio'] * $value['cantidad'];
        }
    }
    return $total;

}

function cantidadProductos(){
    $cantidad = 0;
    if(isset($_SESSION['carrito'])){
        foreach($_SESSION['carrito'] as $indice => $value){
           $cantidad++;
        }
    }

    return $cantidad;
    
}