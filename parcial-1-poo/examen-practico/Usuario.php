<?php
    class Usuario{
        private $correo;
        private $nombre;

        public function __construct($nombre,$correo){
            $this->nombre = $nombre;
            $this->correo = $correo;

            /**
             * @throws Exception
             */
            if (!filter_var($correo,FILTER_VALIDATE_EMAIL)){
                throw new Exception("Excepción controlada: correo inválido");
            }
        }
        /**
         *
         * @return string
         */
        public function getNombre(){
            return $this->nombre;
        }
        /**
         *
         * @return string
         */
        public function getCorreo(){
            return $this->correo;
        }
    }
?>