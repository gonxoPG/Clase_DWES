<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2</title>
</head>
<body>
    <?php

        // Lleva un registro de las rondas ganadas por cada jugador a lo largo del juego. (Ayuda IA)
        session_start();

        if (!isset($_SESSION['ganadasJ1'])) {
            $_SESSION['ganadasJ1'] = 0;
        }
        if (!isset($_SESSION['ganadasJ2'])) {
            $_SESSION['ganadasJ2'] = 0;
        }
        

        $jugadorUno = [];
        $jugadorDos = [];

        $sumaJ1;
        $sumaJ2;
         
        print "<h2>Tirada del Jugador 1: </h2>";
            for ($i=0; $i < 5; $i++) { 
                $dado = rand(1,6);
                print "<img src = 'Dados/$dado.jpg' width = 100 heigh = 100>\n";
                
                $jugadorUno[] = $dado;
            }
        
        print "<br><br>";

        print "<h2>Tirada del Jugador 2: </h2>";
        for ($i=0; $i < 5; $i++) { 
            $dado = rand(1,6);
            print "<img src = 'Dados/$dado.jpg' width = 100 heigh = 100>\n";
            $jugadorDos[] = $dado;
        }

        print "<br><br>";

        echo "El J1 tiene los siguientes números: ";
        foreach ($jugadorUno as $numero) {
            echo "$numero\n";
        }
        print "<br><br>";

        echo "El J2 tiene los siguientes números: ";
        foreach ($jugadorDos as $numero) {
            echo "$numero\n";
        }


        print "<br><br>";


        // sumar valores del array

        $sumaJ1 = array_sum($jugadorUno);
        $sumaJ2 = array_sum($jugadorDos);

        if ($sumaJ1 > $sumaJ2) {
            print "Puntuación J1: $sumaJ1<br>";
            print "Puntuación J2: $sumaJ2<br><br>";

            print "¡El JUGADOR 1 ha ganado!";
            // $ganadasJ1++;
            $_SESSION['ganadasJ1']++;

        } elseif ($sumaJ1 == $sumaJ2) {
            print "Puntuación J1: $sumaJ1<br>";
            print "Puntuación J2: $sumaJ2<br><br>";

            print "¡Ha habido un empate!";

        } else {
            print "Puntuación J1: $sumaJ1<br>";
            print "Puntuación J2: $sumaJ2<br><br>";

            print "¡El JUGADOR 2 ha ganado!";
            // $ganadasJ2++;
            $_SESSION['ganadasJ2']++;
        }

        print "<br>-------------------------------------------------------------<br>";

        print "Rondas ganadas J1: {$_SESSION['ganadasJ1']}<br>";
        print "Rondas ganadas J2: {$_SESSION['ganadasJ2']}<br>";

    ?>

    <br>
    <button onclick="location.reload()">Volver a tirar</button>
</body>
</html>

<!-- Cada jugador lanzará 5 dados y se almacenarán los resultados en dos matrices. 
 Después de cada tirada, el programa determinará quién gana según las reglas del juego y mostrará el resultado -->