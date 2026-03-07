<?php

    class Usuario{
        protected $nombre;
        protected $correo;

        public function __construct($nombre,$correo){
            $this->nombre = $nombre;
            $this->correo = $correo;

            /**
             * @throws Exception 
             */
            if (!filter_var($correo,FILTER_VALIDATE_EMAIL)){
                throw new Exception("Excepción controlada: correo con formato incorrecto");
            }
        }

        public function getNombre(){
            return $this->nombre;
        }

        public function getCorreo(){
            return $this->correo;
        }

    } 

?>