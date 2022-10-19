<?php

    class User extends baseDatos{

        public function getUser($email , $contraseña){
            $sql = "SELECT * FROM user WHERE email ='$email' AND contraseña = '$contraseña'";
            
            $resultado = $this->conectar()->query($sql);
            
            $cantFilas = $resultado ->num_rows;
            
            if($cantidadFilas == 1){
                return true;
            }
            return false;
        }


    }