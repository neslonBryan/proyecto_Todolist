<?php
    
    include_once '../baseDatos/db.php';
    require_once 'control.php';
    
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
    

<div id="titulo"><h1>Hola nuevo usuario!!</h1></div>

<div class="container">
    <div class="row mt-3 justify-content-md-center">
        <div class="col-md-6">
    <form action="control.php" method="POST">
        <img src="https://www.gentletouchanimalhospital.com/wp-content/uploads/2019/10/happy-cat-1.jpg" alt="">
        <div class="form-group">
                <label for="email">Email:</label>
                <input class="form-control" name="email"type="email" placeholder="Ingresa tu email" required minlength="5"
                reset autocomplete="off" autofocus>
        </div>
        <div class="form-group">
                <label for="contraseña">Contraseña:</label>
                <input class="form-control" name="contraseña"type="password" placeholder="Ingresa tu contraseña" required 
                reset autocomplete="off">
        </div>
        <br>
        <h6>NOTA: si al presionar "enviar datos" los campos desaparecen , entonces el correo ya esta en uso , por favor escoge otro</h2>
        <button type="submit" name ="enviar" class="btn btn-sm btn-block btn-primary">Enviar datos</button>
        <br>
        <button id="v" >
        <a href="../index.php">Regresar a Iniciar Session</a>
        </button> 
    </form>
    </div>
    </div>
    </div>

<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

</body>
</html>