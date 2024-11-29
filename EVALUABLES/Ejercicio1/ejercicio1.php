<!DOCTYPE html>

<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>
</head>

<body>
    <?php
    
        $numeroFilas = rand(5,15);
        $numeroColumnas = rand(5,15);

        echo "Las filas son: $numeroFilas <br>";
        echo "Las columnas son: $numeroColumnas <br><br>";
    
        for ($i=0; $i < $numeroFilas; $i++) { 

            for ($e=0; $e < $numeroColumnas; $e++) { 
                print "*";
            }
            print "<br>";
        }
    ?>
</body>
</html>

<!-- Realizar un programa PHP que genere 2 números aleatorios (entre 5 y 15) y me dibuje un rectángulo de asteriscos -->