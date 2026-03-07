<?php

    require_once "clases/Admin.php";
    require_once "clases/Alumno.php";
    require_once "clases/Invitado.php";

    $usuarios = [];

    try{
        //estos elementos son válidos y se agregan al arreglo
        $objAdmin = new Admin("Luis","luisct@gmail.com");
        $usuarios[] = $objAdmin;
        $objAlumno = new Alumno("Hector","hectorrubaya76@gmail.com","20888597");
        $usuarios[] = $objAlumno;

        //este correo es inválido, termina con el try y pasa al catch
        $objInvitado = new Invitado("Marvin","correo invalido","RIU");
        $usuarios[] = $objInvitado;
        
    } catch (Exception $e){
        echo $e->getMessage();
    }
?>
<table border>
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Correo</th>
            <th>Rol</th>
            <th>Matricula</th>
            <th>Empresa</th>
        </tr>
    </thead>
    <tbody>

        <?php foreach ($usuarios as $usuario): ?>

        <tr>
            <td><?= $usuario->getNombre() ?></td>
            <td><?= $usuario->getCorreo() ?></td>
            <td><?= $usuario->getRol() ?></td>

            <td>
                <?php
                if ($usuario instanceof Alumno) {
                    echo $usuario->getMatricula(); 
                } else {
                    echo "-";
                }
                ?>
            </td>
            <td>
                <?php  
                if ($usuario instanceof Invitado) {
                    echo $usuario->getEmpresa();
                } else {
                    echo "-";
                }
                ?>   
            </td>
        </tr>

        <?php endforeach; ?>

    </tbody>
</table>