<?php
    use clases\Aplicacion;
    use clases\DetailView;
    use clases\Header;
    use clases\Modelo;
    use clases\Pagina;

    require_once 'autoload.php';

    $aplicacion = new Aplicacion();
    $favoritos = new Modelo($aplicacion->db);

    $_GET["id"] = $_GET["id"] ?? 0;

    $query = $favoritos->query("select * from favoritos where id = " . $_GET['id']);

    $cabecera = Header::ejecutar([
        "titulo" => "Detalles de la pagina",
        "subTitulo" => $aplicacion->configuraciones['autor'],
        "salida" => $_GET["id"]
    ]);

    Pagina::comenzar();
    
    if ($query->num_rows == 0) {
        DetailView::comenzar();
    
        echo "<li class='list-group-item'> No tenemos ningun registro</li>";
    
        DetailView::terminar(["titulo" => "Aviso"]);
    }
    else {
        echo DetailView::ejecutar([
            "query" => $query,
            "campos" => [
                "id",
                "url",
            ],
            "campoTitulo" =>  'titulo'

        ]);
    }

    Pagina::terminar([
        "titulo" => "inicio",
        "cabecera" => $cabecera,
        "pie" => "Creado por: " . $aplicacion->configuraciones['autor']
    ]);
