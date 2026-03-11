<?php
    require_once ('Usuario.php');

    class Admin extends Usuario{
        /**
         * @return string
         */
        public function getRol(){
            return "Administrador";
        }
    }
?>