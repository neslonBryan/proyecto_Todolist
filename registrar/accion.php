<?php

class metodo{
    public function insertarUsuario($datos){
        $c = new conexion();
        $conexion = $c -> conectar();
        $sql = "INSERT INTO tusuario (email,contraseña) 
                VALUES ('$datos[0]','$datos[1]')";
        return $result = mysqli_query($conexion,$sql);
    }
}

?>