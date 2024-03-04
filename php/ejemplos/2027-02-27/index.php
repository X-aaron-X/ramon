<?php
    use clases\Aplicacion;
    use Clases\GridView;
    use clases\Modelo;
    use Clases\Pagina;
    use Clases\Header;

    require_once 'autoload.php';

    $aplicacion = new Aplicacion();
    $favoritos = new Modelo($aplicacion->db);

    $query = $favoritos->query("select * from favoritos");

    Pagina::comenzar();

    $cabecera = Header::ejecutar([
        "titulo" => "Mi primer sitio web",
        "subTitulo" => $aplicacion->configuraciones['autor'],
        "salida" => "Aplicacion para mostrar páginas interesantes."
    ]);
?>

    <?= GridView::render($query, [], ["Detalles"  => "ver.php"]) ?>

<?php
    Pagina::terminar([
        "titulo" => "inicio",
        "cabecera" => $cabecera,
        "pie" => "Creado por {$aplicacion->configuraciones['autor']}"
    ]);
