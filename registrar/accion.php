<?php
    require_once '../baseDatos/db.php';

class comprobar extends conexion {
    
    public function insertarUsuario($email,$contraseña){
        $c = new conexion();
        $conexion = $c -> conectar();
        $sql = "INSERT INTO tusuario (email,contraseña) 
                VALUES ('$email','$contraseña')";
        return $result = mysqli_query($conexion,$sql);
    }

    public function verificarUsuario($email){
        $c = new conexion();
        $conexion = $c -> conectar();
        $sql = "SELECT * FROM tusuario WHERE email ='$email'";
        $result= mysqli_query($conexion , $sql);
        if(mysqli_num_rows($result)>0){
            
            return 1;
        }
        else{
            return 0;
        }
    }
}

?>