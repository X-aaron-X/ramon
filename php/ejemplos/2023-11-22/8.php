<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hola</title>
    <style>
         .caja{ /* Por clase */
            background-color: black;
            color: white;
            margin: 10px auto;
            font-size: 3em;
            border: solid 7px #dbcccc;
        }

        .centrado{
            text-align: center;
        }

        #negrita{ /* Por id */
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div style="margin: 30% auto;">
        <div id="negrita" class="caja">
            Hola Mundo
        </div>
        <div class="caja centrado">
            Adios Mundo
        </div>
    </div>
</body>
</html>