<?php
    include_once '../complementos/header.php';
    include_once '../baseDatos/db.php';
?>


<h1>Hola nuevo usuario!!</h1>

    <form action="" method="POST">
        <div class="form-group">
                <label for="email">Email:</label>
                <input class="form-control"name="email"type="email" placeholder="Ingresa tu email" required minlength="5"
                reset autocomplete="off">
        </div>
        <div class="form-group">
                <label for="contraseña">Contraseña:</label>
                <input class="form-control"name="contraseña"type="password" placeholder="Ingresa tu contraseña" required 
                reset autocomplete="off">
        </div>
        <br>
        <button type="submit" name ="submit" class="btn btn-sm btn-block btn-primary">Registrate</button>
        
        <button >
        <a href="../index.php">volver</a>
        </button>  
    </form>

<?php
    include_once '../complementos/footer.php';

?>