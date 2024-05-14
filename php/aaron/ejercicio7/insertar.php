<?php
    require_once 'funciones.php';
    require_once 'controlErrores.php';
    
    $parametros = require_once 'parametros.php';
    
    $salida = "";
    $accion = "Insertar";
    
    $elementoMenu = [
        'Inicio' => 'index.php',
        'Insertar' => 'insertar.php',
    ];
    
    $botones = [
        'Editar' => 'actualizar.php',
        'Eliminar' => 'eliminar.php'
    ]; 
    
    $datos = [
        "titulo" => "",
        "paginas" => "",
        "fechaPublicacion" => "",
    ];

    if($_POST) {
        foreach ($datos as $clave => $valor) {
            $datos[$clave] = $_POST[$clave];
        }

        $conexion = @new mysqli(
            $parametros['servidor'], 
            $parametros['usuario'], 
            $parametros['password'], 
            $parametros['nombreBd'], 
            $parametros['port']
        );

        if ($conexion->connect_error) {
            die("La conexion ha fallado: {$conexion->connect_error}");
        }

        $sql = "INSERT INTO libros (titulo, paginas, fechaPublicacion) VALUES (
                    '{$datos['titulo']}',
                    '{$datos['paginas']}',
                    '{$datos['fechaPublicacion']}'
                )";

        if ($conexion->query($sql)) {
            $salida = "Registro creado correctamente";

            $sql = "select * from libros where id={$conexion->insert_id}";
            $resultado = $conexion->query($sql);
            
            $salida .= gridViewTableBotones($resultado, $botones);
            
            $salida .= "<p class='text-center'>
                            <a href='index.php' class='btn btn-warning'>Ver Registros</a>
                        </p>";
        }
        else {
            $salida = "Error al crear el registro: {$conexion->error}";
        }

        $conexion->close();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <title>Listar registro</title>
</head>
<body class="p-3 m-0 border-0 bd-example m-0 border-0">
    <div class="container">
        <?php
            echo menu($parametros['nombreAlicacion'], $elementoMenu);
        ?>
        
        <div class="p-5">
            <?php
                if(!$_POST) {
                    require '_form.php';
                }

                echo $salida;
            ?>
        </div>
    </div>
</body>
</html>