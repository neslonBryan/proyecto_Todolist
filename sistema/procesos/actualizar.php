<?php
    require_once '../../baseDatos/db.php';
    require_once '../acciones.php';
    
    $tarea = $_POST['titulotarea'];
    $id = $_POST['id'];
    $datos = array(
                $tarea,
                $id
                    );

    $obj = new metodos();

    if($obj ->actualizarTarea($datos)==1){
        header("Location:../principal.php");
    }
    else{
        echo "fallo al agregar";
    }