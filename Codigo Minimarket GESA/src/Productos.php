<?php

namespace Minimarket;

class Productos{

    private $config;
    private $cn = null;

    public function __construct(){

        $this->config = parse_ini_file(__DIR__.'/../config.ini') ;

        $this->cn = new \PDO( $this->config['dns'], $this->config['usuario'],$this->config['clave'],array(
            \PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'
        ));
        
    }
    
    public function registrar($_params){
        $sql = "INSERT INTO `productos`(`titulo`, `descripcion`, `foto`, `precio`, `categoria_ID`, `fecha`) 
        VALUES (:titulo,:descripcion,:foto,:precio,:categoria_ID,:fecha)";

        $resultado = $this->cn->prepare($sql);
        $_array = array(
            ":titulo" => $_params['titulo'],
            ":descripcion" => $_params['descripcion'],
            ":foto" => $_params['foto'],
            ":precio" => $_params['precio'],
            ":categoria_ID" => $_params['categoria_ID'],
            ":fecha" => $_params['fecha'],
        );

        if($resultado->execute($_array))
            return true;

        return false;
    }

    public function actualizar($_params){
        $sql = "UPDATE `productos` SET `titulo`=:titulo,`descripcion`=:descripcion,`foto`=:foto,
        `precio`=:precio,`categoria_ID`=:categoria_ID,`fecha`=:fecha  WHERE `ID`=:ID";

        $resultado = $this->cn->prepare($sql);

        $_array = array(
            ":titulo" => $_params['titulo'],
            ":descripcion" => $_params['descripcion'],
            ":foto" => $_params['foto'],
            ":precio" => $_params['precio'],
            ":categoria_ID" => $_params['categoria_ID'],
            ":fecha" => $_params['fecha'],
            ":ID" =>  $_params['ID']
        );

        if($resultado->execute($_array))
            return true;

        return false;
    }

    public function eliminar($ID){
        $sql = "DELETE FROM `productos` WHERE `ID`=:ID";

        $resultado = $this->cn->prepare($sql);
        
        $_array = array(
            
            ":ID" =>  $ID
        );

        if($resultado->execute($_array))
            return true;

        return false;
    }

    public function mostrar(){
        $sql = "SELECT productos.ID, titulo, descripcion,foto,nombre,precio,fecha,estado FROM productos 
        
        INNER JOIN categorias
        ON productos.categoria_ID = categorias.ID ORDER BY productos.ID DESC
        ";
        
        $resultado = $this->cn->prepare($sql);

        if($resultado->execute())
            return $resultado->fetchAll();

        return false;
    }

    public function mostrarPorID($ID){
        
        $sql = "SELECT * FROM `productos` WHERE `ID`=:ID ";
        
        $resultado = $this->cn->prepare($sql);
        $_array = array(

            ":ID" => $ID
        );

        if($resultado->execute($_array))
            return $resultado->fetch();

        return false;
    }


    
}



