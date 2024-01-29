<?php
    use clases\animales\Animal;
    use clases\animales\Perro;
    use clases\animales\Persona;
    use clases\animales\Vaca;

    include "autoload.php";

    $animal = new Animal();
    $persona = new Persona('Juan', '602165478', 'Calle Falsa 123');
    $perro = new Perro('Toby', 5, 'Si', $persona);
    $vaca = new Vaca('Lechera');

    var_dump($animal, $perro, $persona, $vaca);

    echo "<hr>";

    $persona->setNombre('Pepe');
    
    var_dump($persona, $perro);