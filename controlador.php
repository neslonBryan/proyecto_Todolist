<?php

    if(isset($_POST['submit'])){
        $email = $_POST['email'];
        $contraseña = $_POST['contraseña'];

        if(empty($email)||empty($contraseña)){
            echo '<div class="alert alert-danger">email o contraseña Vacios</div>';
        }
        else{
            $user = new User;

            if($user ->getUser($email,$contraseña)){
                session_start();
                $_SESSION['usuario'] = $email;
                header('Location:principal.php');
            }
            else{
                echo '<div class="alert alert-danger">El usuaio no existe</div>';
        
            }
            

        }
    }