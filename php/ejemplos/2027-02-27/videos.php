<?php
    use clases\Aplicacion;
    use clases\Modelo;
    use Clases\Pagina;
    use Clases\Header;

    require_once 'autoload.php';

    $aplicacion = new Aplicacion();
    $favoritos = new Modelo($aplicacion->db);
    $favoritos->query("select * from favoritos where categorias='videos'");
    
    Pagina::comenzar();

    $cabecera = Header::ejecutar([
        "titulo" => "Mis Videos Favoritos",
        "subTitulo" => $aplicacion->configuraciones['autor'],
        "salida" => "Aplicacion de videos."
    ]);
?>

<?= $favoritos->gridViewBotones(); ?>

<?php
    Pagina::terminar([
        "titulo" => "inicio",
        "cabecera" => $cabecera,
        "pie" => "Creado por {$aplicacion->configuraciones['autor']}"
    ]);