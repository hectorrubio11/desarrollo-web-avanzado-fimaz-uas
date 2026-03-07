<?php

require_once "Usuario.php";

class Alumno extends Usuario{
    private $matricula;
    
    //setter de matricula
    public function setMatricula($matricula){
        $this->matricula = $matricula;
    }
    //getter de matricula
    public function getMatricula(){
        return $this->matricula;
    }

    //devuelve el rol Alumni
    public function getRol(){
        return "Alumno";
    }
}

?>