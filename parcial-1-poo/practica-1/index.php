<?php

    include "Usuario.php";
    $objUsuario = new Usuario();

    $objUsuario->setNombre("Hector Rubio");
    echo "Mi nombre es: ".$objUsuario->getNombre();
    echo "<br>";

    //establecemos e imprimimos el valor de correo
    $objUsuario->setCorreo("hectorrubaya76@gmail.com");
    echo "correo: ".$objUsuario->getCorreo();
?>