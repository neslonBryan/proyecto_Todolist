<?php
session_start();
if(isset($_SESSION['usuario'])){
    header('Location:sistema/principal.php');
}

include 'baseDatos/db.php';
include 'consultas.php';
include 'controlador.php';

?>

<?php Include 'complementos/header.php'?>

<div class="container">
    <div class="row mt-3 justify-content-md-center">
        <div class="col-md-6">

            <form action="" method="POST">

                <div class="form-group">
                    <label for="email">Email:</label>
                    <input class="form-control" name="email" type="email" placeholder="Ingresa tu email" required autofocus 
                    reset autocomplete = "off">
                </div>
                <div class="form-group">
                    <label for="contraseña">Contraseña:</label>
                    <input class="form-control" name="contraseña" type="password" placeholder="Ingresa tu contraseña" required
                    reset autocomplete = "off">
                </div>
                <br>
                <button type="submit" name ="submit" class="btn btn-sm btn-block btn-primary">Iniciar Sesion</button>

                <button ><a href="registrar/registrarse.php"> Registrate !!</a></button>
            </form>

        </div>
    </div>
</div>


<?php Include 'complementos/footer.php'?>