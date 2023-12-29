<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>001 Formulario Dos Botones</title>
</head>
<body>
    <form method="post" action="001-destino.php">
        <div>
            <label for="numero1">Numero 1: </label>
            <input type="number" name="numero1" id="numero1" required>
        </div><br>

        <div>
            <label for="numero2">Numero 2: </label>
            <input type="number" name="numero2" id="numero2" required>
        </div><br>

        <div>
            <button name="operacion" value="sumar">Sumar</button>
            <button name="operacion" value="restar">Restar</button>
        </div>
    </form>
</body>
</html>