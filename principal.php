<?php 
    session_start();
    if(isset($_POST['cerrarSession'])){
        unset($_SESSION['usuario']);
        header('Location:index.php');
    }
?>
<?php if(isset($_SESSION['usuario'])){?>
<?php include 'complementos/header.php';?>

<div class="container">
    <div class="row mt-3 justify-content-md-center">
        <h1>Hola, Bienvenido <?php echo ' <strong>'.$_SESSION['usuario'].'<strong>'?></h1>
    </div>

    <div class="card card-body ester">
            <form action="" method="POST">
                <h2>Ingresar nueva Tarea</h2>
                <div class="form-group">
                    <input type="text" name="tarea" class="form-control" maxlength="50"
                    minlength="1" placeholder="Nueva Tarea ...." autofocus>
                </div>
                <br>
                <center><input type="submit" class="btn btn-success btn-block boton"
                name="guardar" value="Guardar"  ></center>
            </form>
    </div>
    <div class="row mt-3 justify-content-md-center">
            <form action="" method="POST">
                <button type="submit" class="btn btn-primary btn-block" 
                    name="cerrarSession">cerrar session
                </button>
            </form>
    </div>
    <div class="col-md-8">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Lista de tareas</th>
                </tr>
            </thead>
            <tbody>
                
            </tbody>
        </table>


    </div>

    

</div>



<?php include 'complementos/footer.php'; ?>
<?php }
else{
    header('Location:index.php');
} ?>
