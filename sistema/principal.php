<?php 
    session_start();
    if(isset($_POST['cerrarSession'])){
        unset($_SESSION['usuario']);
        header('Location:../index.php');
    }
?>
<?php if(isset($_SESSION['usuario'])){?>
<?php require_once 'acciones.php';?>
<?php include '../baseDatos/db.php';?>
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
    

<div class="container">
    <div class="row mt-3 justify-content-md-center">
        <h1>Bienvenido <?php $iniciouser = $_SESSION['usuario'] ;echo ' <strong>'.$iniciouser.'<strong>'?></h1>
    </div>

    <div class="tarea">
            <form action="procesos/insertar.php" method="post">
                <label>Quieres ingresar nueva Tarea?</label>
                <p></p>
                <div class="form-group">
                    <input type="text" name="titulotarea" class="form-control" maxlength="50"
                    minlength="5" placeholder="Nueva Tarea ...." autofocus required>
                </div>
                <input type="hidden" name="email" value="<?php echo $iniciouser ?>" readonly>
                <br>
                <center><input type="submit" class="btn btn-success btn-block boton"
                name="guardar" value="Guardar" id ="g"></center>
            </form>
    </div>
    <br>
    <div class="col-md-8">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Lista de tareas</th>
                    <th>Actualizar</th>
                    <th>Eliminar</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $obj = new metodos();
                $sql = "SELECT * FROM ttarea where email='$iniciouser' ";
                $datos = $obj -> mostrarDatos($sql);
                foreach($datos as $key){
                ?> 
                <tr>
                    <td><?php echo $key['titulotarea']?></td>
                    
                    <td >
                        <a id="editar" href="editar.php?id=<?php echo $key['id'] ?>">
                            Editar 
                        </a>
                    </td>
                    <td >
                        <a id="eliminar" href="procesos/eliminar.php?id=<?php echo $key['id'] ?>">
                            Eliminar 
                        </a>
                    </td>
                </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>
    <div class="row mt-3 justify-content-md-center">
            <form action="" method="POST">
                <button type="submit" class="btn btn-primary btn-block" 
                    name="cerrarSession">cerrar session
                </button>
            </form>
    </div>

    

</div>


<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>
</html>
<?php }
else{
    header('Location:../index.php');
} ?>
