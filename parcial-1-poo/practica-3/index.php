<?php

    require_once "clases/Alumno.php";
    require_once "clases/Admin.php";
    
    //instancia de clase alumno
    $objAlumno = new Alumno();

    $objAlumno->setNombre("Hector");
    $objAlumno->setMatricula("20888597");

    //intenta asignar el correo, y falla si no tiene el formato adecuado
    try {
        $objAlumno->setCorreo("correo@hotmail.com");
    } catch (Exception $e) {
        echo $e->getMessage();
    }

    echo $objAlumno->getCorreo() . "<br>";
    echo $objAlumno->getRol() . "<br>";

    //instancia de objeto Admin
    $objAdmin = new Admin();
    try{
        $objAdmin->setCorreo("correo equivocado");
    } catch (Exception $e){
        echo $e->getMessage();
    }
    echo $objAdmin->getCorreo();
    echo $objAdmin->getRol();



?>