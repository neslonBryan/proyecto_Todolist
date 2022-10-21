<?php
    $id = $_GET['id'];
    require_once '../../baseDatos/db.php';
    require_once '../acciones.php';

    $obj = new metodos();

    if($obj ->eliminarTarea($id)==1){
        header("Location:../principal.php");
    }
    else{
        echo "fallo al eliminar";
    }


?>