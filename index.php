<?php
session_start();
if(isset($_SESSION['usuario'])){
    header('Location:sistema/principal.php');
}

include 'baseDatos/db.php';
include 'consultas.php';
include 'controlador.php';

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="estilos.css">
</head>
<body>


<h1>Bienvenido al inicio de Session</h1>
<div class="container">
    <div class="row mt-3 justify-content-md-center">
        <div class="col-md-6">
        <div id="inicioS">
            
            <form action="" method="POST">
                <img src="https://pngimage.net/wp-content/uploads/2018/06/icono-iniciar-sesion-png-5.png" alt="">
                <div class="form-group">
                    <label for="email" >Email:</label>
                    <input class="form-control" name="email" type="email" placeholder="Ingresa tu email" required autofocus 
                    reset autocomplete = "off">
                </div>
                <div class="form-group">
                    <label for="contraseña">Contraseña:</label>
                    <input class="form-control" name="contraseña" type="password" placeholder="Ingresa tu contraseña" required
                    reset autocomplete = "off">
                </div>
                <br>
                <div id="botones">
                    <button type="submit" name ="submit" class="btn btn-sm btn-block btn-primary">Iniciar Sesion</button>

                    <button ><a href="registrar/registrarse.php"> Registrate !!</a></button>
                </div>
            </form>

        </div>
    </div>
</div>
</div>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>
</html>