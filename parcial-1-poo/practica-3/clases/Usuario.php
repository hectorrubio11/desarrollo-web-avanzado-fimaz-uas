<?php   
class Usuario{

    private $nombre;
    private $correo;

    function __construct(){
        echo "Nueva instancia de clase! <br>";
    }

    // setter de nombre
    public function setNombre($nombre){
        $this->nombre = $nombre;
    }

    // getter de nombre
    public function getNombre(){
        return $this->nombre;
    }

    // setter de correo
    public function setCorreo($correo){
        $this->validarCorreo($correo);
        $this->correo = $correo;
    }

    // getter de correo
    public function getCorreo(){
        return $this->correo;
    }

    // validar correo
    public function validarCorreo($correo){
        if (!filter_var($correo, FILTER_VALIDATE_EMAIL)) {
            throw new Exception("Correo electrónico no válido <br>");
        }
    }

}
?>