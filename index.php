<?php
session_start();
if(isset($_SESSION['usuario'])){
    header('Location:principal.php');
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
                    <input class="form-control"name="email"type="text" placeholder="Ingresa tu email">
                </div>
                <div class="form-group">
                    <label for="contraseña">Contraseña:</label>
                    <input class="form-control"name="contraseña"type="password" placeholder="Ingresa tu contraseña">
                </div>

                <button type="submit" name ="submit" class="btn btn-sm btn-block btn-primary">Iniciar Sesion</button>
            </form>

        </div>
    </div>
</div>











<?php Include 'complementos/footer.php'?>