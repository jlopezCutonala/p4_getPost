<!DOCTYPE html>
<html>
    <head>
        <title>Tablas</title>
    </head>
    <body>
        <h1>Alumno</h1>
        <?php
            $id = $_GET['id'];
            if ($id!='') {
                $alumnos = array(
                    '1'=>array(
                        'id' => '1',
                        'codigo' => '34354454',
                        'nombre' => 'Juan Perez'
                    ),
                    '2'=>array(
                        'id' => '2',
                        'codigo' => '343344343',
                        'nombre' => 'Jose Hernandez'
                    ),
                    '3'=>array(
                        'id' => '3',
                        'codigo' => '7766776',
                        'nombre' => 'Maria Fonseca'
                    ),
                    '4'=>array(
                        'id' => '4',
                        'codigo' => '121211',
                        'nombre' => 'Margarita Herrera'
                    ),
                    '5'=>array(
                        'id' => '5',
                        'codigo' => '3993546',
                        'nombre' => 'Jonathan'
                    ),
                    '6'=>array(
                        'id' => '6',
                        'codigo' => '1111',
                        'nombre' => 'Ana Valencia'
                    )
                );
                if (array_key_exists($id, $alumnos)) {
                    $alumno = $alumnos[$id];
                ?>
                    <div>
                        <h4><?php echo $alumno['codigo']; ?></h4>
                       <span><?php echo $alumno['nombre']; ?></span><br/> 
                    </div>
                    <div>
                        <a href="tablas.php">Volver</a>
                    </div>
                <?php
                } else {
                ?>
                    <p>
                        No tiene permiso para entrar.
                    </p>
                <?php
                }
            } else {
            ?>
                <p>
                    No tiene permiso para entrar.
                </p>
            <?php
            }
        ?>
    </body>
</html>

