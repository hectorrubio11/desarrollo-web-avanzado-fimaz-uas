<?php
    include "Usuario.php";
    //instancia de clase
    $objUsuario = new Usuario();

    //establecemos e imprimimos el valor de nombre
    $objUsuario->setNombre("Hector Rubio");
    echo "Mi nombre es: ".$objUsuario->getNombre();
    echo "<br>";

    //establecemos e imprimimos el valor de correo
    $objUsuario->setCorreo("hectorrubaya76@gmail.com");
    echo "correo: ".$objUsuario->getCorreo();
?>