<?php

include "Admin.php";

//instanciamos la clase Admin
$objAdmin = new Admin();

//establecemos e imprimimos el valor de nombre
$objAdmin->setNombre("Hector Rubio");
echo "Mi nombre es: ".$objAdmin->getNombre();
echo "<br>";

//establecemos e imprimimos el valor de correo
$objAdmin->setCorreo("hectorrubaya76@gmail.com");
echo "correo: ".$objAdmin->getCorreo();
echo "<br>";

//llamamos la función getRol para imprimir el rol
echo "Rol de usuario: ".$objAdmin->getRol();

?>