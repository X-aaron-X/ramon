<?php
    use clases\Aplicacion;
    use clases\Header;
    use clases\Modelo;
    use clases\Pagina;

    require_once 'autoload.php';

    $mensaje = "";
    $aplicacion = new Aplicacion();
    $favoritos = new Modelo($aplicacion->db);

    if (!isset($_GET['id'])) {
        header("Location: index.php");
        exit;
    }

    $id = $_GET['id'];

    $favoritos->delete($id);

    $cabecera = Header::ejecutar([
        "titulo" => "Pagina de insercion",
        "subTitulo" => $aplicacion->configuraciones['autor'],
        "salida" => "Aplicacion para mostrar paginas interesantes"
    ]);

    Pagina::comenzar();


    Pagina::terminar([
        "titulo" => "inicio",
        "cabecera" => $cabecera,
        "pie" => "Creado por: " . $aplicacion->configuraciones['autor']
    ]);