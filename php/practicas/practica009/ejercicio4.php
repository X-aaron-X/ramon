<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4</title>
</head>
<body>
    <form action="ejercicio4Destino.php">
        <div>
            <label for="nombre">Nombre: </label>
            <input type="text" name="nombre" id="nombre" placeholder="Introduce tu nombre">
        </div>
        <br>
        <div>
            <label for="email">Email: </label>
            <input type="text" name="email" id="email" placeholder="Introduce tu correo">
        </div>
        <br>
        <div>
            <button formmethod="GET">Enviar por GET</button>
            <button formmethod="POST">Enviar por POST</button>
        </div>
    </form>
</body>
</html>