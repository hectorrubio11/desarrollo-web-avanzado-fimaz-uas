<?php

include "Usuario.php";

//extiende la clase Usuario
class Admin extends Usuario{
    public function getRol(){
        //solo imprime Administrador
        return "Administrador";
    }
}

?>