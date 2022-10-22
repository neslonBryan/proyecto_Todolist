<?php
    require_once 'accion.php';

    if(isset($_POST['enviar'])){
        $email = $_POST['email'];
        $contraseña = $_POST['contraseña'];
        
        
        if(empty($email)||empty($contraseña)){
            echo '<div class="alert alert-danger">Email y/o contraseña vacio(s)</div>';
        }
        else{

            $user = new comprobar;

            if($user -> verificarUsuario($email,$contraseña) ==1){
                echo"<script>alert('El usuario ya existe');</script>";
                header('Location:registrarse.php');
            }
            else{
                $user->insertarUsuario($email,$contraseña);
                header('Location:../index.php');
            }
        }
    }