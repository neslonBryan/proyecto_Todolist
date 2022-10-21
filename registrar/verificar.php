<?php

class usuario {

    public function verificarUsuario($email){
            
        $sql = "SELECT * FROM tusuario WHERE email ='$email' ";
        
        $resultado = $this->conectar()->query($sql);
        
        $cantFilas = $resultado ->num_rows;
        
        if($cantFilas == 1){
            return false;
        }
        return true;
    }

}
