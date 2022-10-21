<?php
    require_once '../../baseDatos/db.php';
    require_once '../acciones.php';
    
    $tarea = $_POST['titulotarea'];
    $iniciouser = $_POST['email'];
    $datos = array(
                $tarea,
                $iniciouser
                    );

    $obj = new metodos();

    if($obj ->insertarTarea($datos)==1){
        header("Location:../principal.php");
    }
    else{
        echo "fallo al agregar";
    }


?>