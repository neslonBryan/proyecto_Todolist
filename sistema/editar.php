<?php 
    require_once '../baseDatos/db.php';

    $obj = new conexion();
    $conexion = $obj ->conectar();
    $id = $_GET['id'];
    $sql="SELECT titulotarea FROM ttarea where id='$id'";
    $result = mysqli_query($conexion,$sql);
    $ver = mysqli_fetch_row($result);
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

<form class="editar"action="procesos/actualizar.php" method="post">
                <input type="hidden"  value="<?php echo $id?>" name="id">
                <label id="textoactualizar">Actualizar la tarea</label>
                <p></p>
                <div class="form-group">
                    <input type="text" name="titulotarea" value="<?php echo $ver[0]?>" class="form-control" maxlength="50"
                    minlength="5" placeholder="Actualiza la tarea" required autofocus>
                </div>
        <br>
        <center><input type="submit" class="btn btn-success btn-block boton"
        name="guardar" value="Guardar"  ></center>
</form>

<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>
</html>