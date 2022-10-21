<?php
    class User extends conexion{
        
        public function getUser($email , $contraseña){
            
            $sql = "SELECT * FROM tusuario WHERE email ='$email' AND contraseña = '$contraseña'";
            
            $resultado = $this->conectar()->query($sql);
            
            $cantFilas = $resultado ->num_rows;
            
            if($cantFilas == 1){
                return true;
            }
            return false;
        }
    }
