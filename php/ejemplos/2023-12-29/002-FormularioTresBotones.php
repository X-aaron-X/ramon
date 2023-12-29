<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>001 Formulario Dos Botones</title>
</head>
<body>
    <form method="post" action="002-destino.php">
        <div>
            <label for="texto">Texto: </label>
            <input type="text" name="texto" id="texto" required placeholder="Escribe una frase">
        </div><br>

        <div>
            <button name="caracter" value="a">a</button>
            <button name="caracter" value="b">b</button>
            <button name="caracter" value="c">c</button>
        </div>
    </form>
</body>
</html>