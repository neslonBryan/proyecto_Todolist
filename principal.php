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
    <div class="row mt-3 justify-content-md-center">
            <form action="" method="POST">
                <button type="submit" class="btn btn-primary btn-block" 
                    name="cerrarSession">cerrar session
                </button>
            </form>
        </div>

</div>



<?php include 'complementos/footer.php'; ?>
<?php }
else{
    header('Location:index.php');
} ?>
