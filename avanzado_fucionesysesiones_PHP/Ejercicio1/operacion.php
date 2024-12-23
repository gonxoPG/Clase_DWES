<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1.2</title>
</head>

<body>
    <?php
    function numeroMayor($a, $b, $c)
    {
        if ($a > $b && $a > $c) {
            echo "<h2>$a</h2> es el número más grande";
        } else if ($b > $a && $b > $c) {
            echo "<h2>$b</h2> es el número más grande";
        } else {
            echo "<h2>$c</h2> es el número más grande";
        }
    }

    $numeroA = $_REQUEST["a"];
    $numeroB = $_REQUEST["b"];
    $numeroC = $_REQUEST["c"];

    numeroMayor($numeroA, $numeroB, $numeroC);
    ?>
</body>

</html>