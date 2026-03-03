<?php   
    class Usuario{
        private $nombre;
        private $correo;

        function __construct()
        {   //el constructor solo imprime que se instanció una clase
            echo "Nueva instancia de clase! <br>";
        }
        //setter de nombre
        public function setNombre($nombre){
            $this->nombre = $nombre;
        }
        //getter de nombre
        public function getNombre(){
            return $this->nombre;
        }
        //setter de correo
        public function setCorreo($correo){
            $this->correo = $correo;
        }
        //getter de correo
        public function getCorreo(){
            return $this->correo;
        }
    }
?>