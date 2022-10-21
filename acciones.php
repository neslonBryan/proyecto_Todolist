<?php
    /*if(isset($_POST['guardar'])){
        $email = $_POST['email'];
        $tarea = $_POST['titulotarea'];
        
        $query="INSERT INTO ttarea(email,titulotarea)
        VALUES ('$email','$tarea')";
        $result = $this->conexion()->query($query);
        if(!$result){
            die("Query faild");
        }
        $_SESSION['message']='Tarea guardada';
        $_SESSION['message_type']='success';
        header('Location : principal.php');
    }*/

    class metodos{
        public function mostrarDatos($sql){
            $c = new conexion();
            $conexion = $c -> conectar();
            $result =mysqli_query($conexion , $sql);

            return mysqli_fetch_all($result , MYSQLI_ASSOC);

        }

    }