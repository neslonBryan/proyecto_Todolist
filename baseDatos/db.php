<?php

    class baseDatos{
        private $server;
        private $usuario;
        private $contraseña;
        private $dbNombre;

        public function __constructor(){
            $this -> server ='localhost';
            $this -> usuario ='root';
            $this -> contraseña ='12345';
            $this -> dbNombre ='db_todolist';
        }

        public function conectar (){
            $conn = new mysqli($this -> server ,$this -> usuario,
            $this -> contraseña, $this -> dbNombre);
            return $conn;
        }
    }