<?php
    // Crear un formulario que me permita introducir un numero
    // almacenar ese numero en una cookie y mostrarlo por pantalla
    $leerCookie = "";
    $numero = "";

    if (isset($_POST["enviar"])) {
        $numero = $_POST["numero"] ?: 0;

        setcookie("Numero", $numero, time() + 3600);

        isset($_COOKIE["Numero"]) ? $leerCookie = $_COOKIE["Numero"] : $leerCookie = "";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>11 - Sesiones</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <div class="m-4 p-4 fixed inset-0 flex flex-col items-center justify-center">
        <div class="w-full max-w-md mb-4">
            <form method="post" class="bg-white shadow-2xl rounded px-5 pt-8 pb-8 mb-4">
                <div class="md:flex md:items-center mb-6">
                    <div class="md:w-1/4">
                        <label class="block font-bold text-right mb-1 pr-4" for="numero">Numero</label>
                    </div>

                    <div class="md:w-3/4">
                        <input type="number" id="numero" name="numero" class="border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500">
                    </div>
                </div>
                <div class="text-center">
                    <div>
                        <button name="enviar" class="shadow bg-purple-500 hover:bg-purple-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded">Enviar</button>
                    </div>
                </div>
            </form>
        </div>
        <div>
            <h1 class="text-transparent bg-clip-text bg-gradient-to-r to-emerald-600 from-sky-400 mb-4 text-3xl font-extrabold text-gray-900 md:text-5xl text-xl">Datos Introducidos</h1>
            <p class="text-lg font-normal text-gray-500 lg:text-xl dark:text-gray-400 text-center"><?= $numero ?></p>

            <hr class="my-4">

            <h1 class="text-transparent bg-clip-text bg-gradient-to-r to-emerald-600 from-sky-400 mb-4 text-3xl font-extrabold text-gray-900 md:text-5xl text-xl">Datos Anteriores</h1>
            <p class="text-lg font-normal text-gray-500 lg:text-xl dark:text-gray-400 text-center"><?= $leerCookie ?></p>
        </div>
    </div>
</body>
</html>
