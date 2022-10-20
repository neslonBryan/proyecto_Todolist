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

    
   /* class tareas extends conexion{
        public function añadir($email){
            $sql= "INSERT INTO ttarea ()";
            $resultado = $this->conectar()->query($sql);
            $cantFilas = $resultado ->num_rows;

            return true;
        }
    }*/