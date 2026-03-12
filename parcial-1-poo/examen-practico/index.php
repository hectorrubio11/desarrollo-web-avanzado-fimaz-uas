<?php
    require_once('Admin.php');
    require_once('Alumno.php');

    $usuarios = []; 

    /**
     * 
     */
    try{
        $objAdmin = new Admin("Hector Rubio","hectorrubaya76@gmail.com");
        $usuarios[] = $objAdmin;

        $objAlumno = new Alumno("Lennyn Hernandez","lennyn16@gmail.com",207777);
        $usuarios[] = $objAlumno;

        //este usuario falla
        $objAdminError = new Admin("Carlos","correo,invalido");
        $usuarios[] = $objAlumno;
    } catch (Exception $e){
        echo $e->getMessage();
    }
?>
<table border="1">
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Correo</th>
            <th>Rol</th>
            <th>Matricula</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($usuarios as $usuario): ?>
            <tr>
                <td><?= $usuario->getNombre() ?></td>
                <td><?= $usuario->getCorreo() ?></td>
                <td><?= $usuario->getRol() ?></td>

                <?php if ($usuario instanceof Alumno): ?>
                    <td> <?= $usuario->getMatricula() ?></td>
                <?php else: ?>
                    <td> - </td>
                <?php endif; ?>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>