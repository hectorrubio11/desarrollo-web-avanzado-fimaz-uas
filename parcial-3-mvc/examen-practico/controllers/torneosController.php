<?php
    require_once("../../models/torneosModel.php");

    class torneosController{
        private $modelo;

        public function __construct()
        {
            $this->modelo = new torneosModel();
        }


        //Creamos método controlador que mandará a llamar
        //la función insert del modelo
        //Si los datos se guardan redireccionaremos a ese usuario a la
        //pantalla princial de inicio, de lo contrario
        //se mantendrá en la pantalla del formulario de captura
        //de datos del torneo

        public function saveTorneo($nombreTorneo, $organizador, $patrocinadores,
        $sede, $categoria, $premio1, $premio2, $premio3, $usuario, $contrasena){
            //Recordemos que la función insert del modelo, regresa
            //el último id generado
            $id = $this->modelo->insert($nombreTorneo, $organizador,
            $patrocinadores, $sede, $categoria, $premio1, 
            $premio2, $premio3, $usuario, $contrasena);
            return ($id != false) ? header("Location: mainTorneos.php") : header("Location: frmTorneos.php");
        }
    }
?>