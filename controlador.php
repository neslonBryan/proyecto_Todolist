<?php

    if(isset($_POST['submit'])){
        $email = $_POST['email'];
        $contraseña = $_POST['contraseña'];

        if(empty($email)||empty($contraseña)){
            echo '<div class="alert alert-danger">Email y/o contraseña vacio(s)</div>';
        }
        else{
            $user = new User;

            if($user ->getUser($email,$contraseña)){
                session_start();
                $_SESSION['usuario'] = $email;
                header('Location:sistema/principal.php');
            }
            else{
                echo '<div class="alert alert-danger">El usuario no existe</div>';
            }
            

        }
    }
    else if(isset($_POST['registrarse'])){
        header('Location:registrar/registrarse.php');
    }

    