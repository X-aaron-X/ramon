<?php
    use clases\Aplicacion;
    use Clases\GridView;
    use clases\Modelo;
    use Clases\Pagina;
    use Clases\Header;

    require_once 'autoload.php';

    $aplicacion = new Aplicacion();
    $favoritos = new Modelo($aplicacion->db);
    //$favoritos->query("select * from favoritos where categorias='formacion'");

    $query = $favoritos->query("select * from favoritos");

    Pagina::comenzar();

    $cabecera = Header::ejecutar([
        "titulo" => "Mi Formaciones Favoritas",
        "subTitulo" => $aplicacion->configuraciones['autor'],
        "salida" => "Aplicacion la formacion."
    ]);
?>

<?= GridView::render($query, [], ["Editar"  => "actualizar.php", "Eliminar"  => "borrar.php"]) ?>

<?php
    Pagina::terminar([
        "titulo" => "inicio",
        "cabecera" => $cabecera,
        "pie" => "Creado por {$aplicacion->configuraciones['autor']}"
    ]);