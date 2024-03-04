<?php
    use clases\Aplicacion;
    use clases\Modelo;
    use Clases\Pagina;
    use Clases\Header;

    require_once 'autoload.php';

    $aplicacion = new Aplicacion();
    $favoritos = new Modelo($aplicacion->db);
    $favoritos->query("select * from favoritos where categorias='buscador'");
    
    Pagina::comenzar();

    $cabecera = Header::ejecutar([
        "titulo" => "Mis Buscadores Favoritos",
        "subTitulo" => $aplicacion->configuraciones['autor'],
        "salida" => "Aplicacion del buscador."
    ]);
?>

<?= $favoritos->gridViewBotones(); ?>
<?= $favoritos->gridViewBotones(); ?>

<?php
    Pagina::terminar([
        "titulo" => "inicio",
        "cabecera" => $cabecera,
        "pie" => "Creado por {$aplicacion->configuraciones['autor']}"
    ]);