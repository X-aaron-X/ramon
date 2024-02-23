<?php
    use src\Empleado;
    use src\Cliente;
    use src\Directivo;

    session_start();

    require_once "autoload.php";

    // he pulsado el boton de almacenar empleado
    if (isset($_POST["empleado"])) {
        //Tengo que pasar los datos del array POST
        $empleado = new Empleado();

        $empleado->asignar($_POST);
    }

    if(isset($_POST["cliente"])) {
        $cliente = new Cliente();

        $cliente->asignar($_POST);
    }

    if(isset($_POST["directivo"])) {
        $directivo = new Directivo();

        $directivo->asignar($_POST);
    }
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body class="p-3 m-0 border-0 bd-example m-0 border-0">
    <div class="container">
        <?php
            //Cargo el formulario de empleado
            require "_empleado.php";

            if (isset($empleado)) {
                echo "<br><h1 class=\"display-6\">Ultimo registro Introducido</h1><br>";
                echo $empleado;

                //Guardo el objeto de la sesion serializado
                $_SESSION["empleados"][] = serialize($empleado);
            }

            echo "<br><hr><br>";

            require "_cliente.php";

            if (isset($cliente)) {
                echo "<br><h1 class=\"display-6\">Ultimo registro Introducido</h1><br>";
                echo $cliente;

                $_SESSION["clientes"][] = serialize($cliente);
            }

            echo "<br><hr><br>";

            require "_directivo.php";

            if (isset($directivo)) {
                echo "<br><h1 class=\"display-6\">Ultimo registro Introducido</h1><br>";
                echo $directivo;

                $_SESSION["directivos"][] = serialize($directivo);
            }

            if (isset($_SESSION["empleados"])) {
                echo "<br><h1 class=\"display-5 text-center\">Empleados Introducidos</h1><br>";

                echo "<div class=\"row\">";
    
                //Quiero que me muestre todos los registros introducidos en la sesion actual
                foreach ($_SESSION["empleados"] as $empleado) {
                    $empleadoLimpios = unserialize($empleado);
    
                    echo $empleadoLimpios;
                }
    
                echo "</div>";
                echo "<br><hr><br>";
            }

            if (isset($_SESSION["clientes"])) {
                echo "<br><h1 class=\"display-5 text-center\">Clientes Introducidos</h1><br>";

                echo "<div class=\"row\">";

                //Quiero que me muestre todos los registros introducidos en la sesion actual
                foreach ($_SESSION["clientes"] as $clientes) {
                    $clientesLimpios = unserialize($clientes);

                    echo $clientesLimpios;
                }

                echo "</div>";
                echo "<br><hr><br>";
            }

            if (isset($_SESSION["directivos"])) {
                echo "<br><h1 class=\"display-5 text-center\">Directivos Introducidos</h1><br>";

                echo "<div class=\"row\">";

                //Quiero que me muestre todos los registros introducidos en la sesion actual
                foreach ($_SESSION["directivos"] as $directivos) {
                    $directivosLimpios = unserialize($directivos);

                    echo $directivosLimpios;
                }

                echo "</div>";
                echo "<br><hr><br>";
            }
        ?>
    </div>
</body>
</html>