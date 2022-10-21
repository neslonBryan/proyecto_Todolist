<?php
    class metodos{

        public function mostrarDatos($sql){
            $c = new conexion();
            $conexion = $c -> conectar();
            $result =mysqli_query($conexion , $sql);

            return mysqli_fetch_all($result , MYSQLI_ASSOC);

        }

        public function insertarTarea($datos){
            $c = new conexion();
            $conexion = $c -> conectar();
            $sql = "INSERT INTO ttarea (titulotarea,email) 
                    VALUES ('$datos[0]','$datos[1]')";
            return $result = mysqli_query($conexion,$sql);
            
        }

        public function actualizarTarea($datos){
            $c = new conexion();
            $conexion = $c -> conectar();
            $sql = "UPDATE ttarea SET titulotarea='$datos[0]'
                    WHERE id='$datos[1]'";
            return $result =mysqli_query($conexion , $sql);
        }

    }