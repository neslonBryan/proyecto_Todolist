<?php 

    include 'complementos/header.php';
    require_once 'baseDatos/db.php';

    $obj = new conexion();
    $conexion = $obj ->conectar();
    $id = $_GET['id'];
    $sql="SELECT titulotarea FROM ttarea where id='$id'";
    $result = mysqli_query($conexion,$sql);
    $ver = mysqli_fetch_row($result);
?>

<form action="procesos/actualizar.php" method="post">
                <input type="hidden"  value="<?php echo $id?>" name="id">
                <label>Actualizar la tarea</label>
                <p></p>
                <div class="form-group">
                    <input type="text" name="titulotarea" value="<?php echo $ver[0]?>" class="form-control" maxlength="50"
                    minlength="1" placeholder="" autofocus>
                </div>
               
        <br>
        <center><input type="submit" class="btn btn-success btn-block boton"
        name="guardar" value="Guardar"  ></center>
</form>


<?php include 'complementos/footer.php'; ?>