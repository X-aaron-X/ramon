<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>
</head>
<body>
    <form action="ejercicio1Destino.php" method="post">
        <div>
            <label for="nombre">Nombre: </label>
            <input type="text" name="nombre" id="nombre" placeholder="Introduce tu nombre">
        </div><br>
        <div>
            <label for="color">Color: </label>
            <input type="text" name="color" id="color" placeholder="Introduce tu color">
        </div><br>
        <div>
            <label for="alto">Alto: </label>
            <input type="number" name="alto" id="alto" placeholder="Introduce tu altura">
        </div><br>
        <div>
            <label for="peso">Peso: </label>
            <input type="number" name="peso" id="peso" placeholder="Introduce tu peso">
        </div><br>
        <button>Enviar</button>
    </form>
</body>
</html>