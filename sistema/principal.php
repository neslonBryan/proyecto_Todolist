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
<?php include '../complementos/header.php';?>


<div class="container">
    <div class="row mt-3 justify-content-md-center">
        <h1>Hola, Bienvenido <?php $iniciouser = $_SESSION['usuario'] ;echo ' <strong>'.$iniciouser.'<strong>'?></h1>
    </div>

    <div class="card card-body ester">
            <form action="procesos/insertar.php" method="post">
                <label>Ingresar nueva Tarea</label>
                <p></p>
                <div class="form-group">
                    <input type="text" name="titulotarea" class="form-control" maxlength="50"
                    minlength="5" placeholder="Nueva Tarea ...." autofocus required>
                </div>
                <input type="hidden" name="email" value="<?php echo $iniciouser ?>" readonly>
                <br>
                <center><input type="submit" class="btn btn-success btn-block boton"
                name="guardar" value="Guardar"  ></center>
            </form>
    </div>
    
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
                    
                    <td>
                        <a href="editar.php?id=<?php echo $key['id'] ?>">
                            Editar 
                        </a>
                    </td>
                    <td>
                        <a href="procesos/eliminar.php?id=<?php echo $key['id'] ?>">
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



<?php include '../complementos/footer.php'; ?>
<?php }
else{
    header('Location:../index.php');
} ?>
