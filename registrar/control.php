<?php
    require_once 'accion.php';

    if(isset($_POST['enviar'])){
        $email = $_POST['email'];
        $contraseña = $_POST['contraseña'];
        $mensaje;
        
        if(empty($email)||empty($contraseña)){
            echo '<div class="alert alert-danger">Email y/o contraseña vacio(s)</div>';
        }
        else{
            $user = new comprobar;

            if($user -> verificarUsuario($email) == 1){
                $mensaje = "<script>alert ( ' el usuario ya existe');
                </script>";
                header('Location:registrarse.php');
            }
            else{
                $user->insertarUsuario($email,$contraseña);
                header('Location:../index.php');
            }
        }
    }