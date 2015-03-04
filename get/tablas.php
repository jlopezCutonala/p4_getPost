<!DOCTYPE html>
<html>
    <head>
        <title>Tablas</title>
    </head>
    <body>
        <h1>Alumnos</h1>
        <?php
            $alumnos = array(
                /*0*/array(
                    'id' => '1',
                    'codigo' => '34354454',
                    'nombre' => 'Juan Perez'
                ),
                /*1*/array(
                    'id' => '2',
                    'codigo' => '343344343',
                    'nombre' => 'Jose Hernandez'
                ),
                /*2*/array(
                    'id' => '3',
                    'codigo' => '7766776',
                    'nombre' => 'Maria Fonseca'
                ),
                /*3*/array(
                    'id' => '4',
                    'codigo' => '121211',
                    'nombre' => 'Margarita Herrera'
                ),
                array(
                    'id' => '5',
                    'codigo' => '3993546',
                    'nombre' => 'Jonathan'
                ),
                array(
                    'id' => '6',
                    'codigo' => '1111',
                    'nombre' => 'Ana Valencia'
                )
            );
        ?>
        <table>
            <tr>
                <th>ID</th>
                <th>C&oacute;digo</th>
                <th>Nombre</th>
                <th>Opciones</th>
            </tr>
            <?php foreach ($alumnos as $alumno) { ?>
                <tr>
                    <td><?php echo $alumno['id']; ?></td>
                    <td><?php echo $alumno['codigo']; ?></td>
                    <td><?php echo $alumno['nombre']; ?></td>
                    <td>
                        <a href="ver.php?id=<?php echo $alumno['id']; ?>">
                            Ver
                        </a>
                    </td>
                </tr>
            <?php } ?>
        </table>
    </body>
</html>

