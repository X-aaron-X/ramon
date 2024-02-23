<?php
    // Conectarme al servidor de base de datos MySQL localhost
    // Crear una nueva base de datos personas
    // Realizar una consulta para mostrar la tabla persona
    // Mostar los registros de la tabla persona
    // Cerrar conexion

    // La variable conexion es un objeto de tipo mysqli
    $conexion = new mysqli(
        'localhost', // Host al que quiero conectarme
        'root', // Nombre de usuario
        '', // Contraseña
        'personas', // Nombre de la base de datos
        '3307' // Puerto
    );

    // Realizar una consulta para mostrar la tabla persona
    // La variable resultado es un objeto de tipo mysqli_result
    $resultados = $conexion->query("SELECT p.idPersona, p.nombre, p.edad FROM persona p");
    
    // Muestra la consulta "$resultados" en un array bidimensional asociativo. Pueden ser tambien, MYSQLI_NUM, o MYSQLI_BOTH
    $registros = $resultados->fetch_all(MYSQLI_ASSOC);

    foreach ($registros as $indice => $personas) {
        ?>
            <h2>Registro <?=  $indice ?></h2>
        <?php
        array_walk($personas, function($persona, $nombreCampo) {
            ?>
                <ul>
                    <li><?= $nombreCampo ?>: <?= $persona ?> </li>
                </ul>
            <?php
        });
    }

    // Cerrar la conexion
    $conexion->close();