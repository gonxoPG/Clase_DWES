<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sorteo</title>
</head>

<body>
    <?php
    $fp = fopen("pedidos.txt", "r");
    $nombres = [];

    while (!feof($fp)) {
        $linea = fgets($fp);
        $lista = explode(",", $linea);

        array_push($nombres, $lista[0]); /* Estoy metiendo en el array solo los nombres */
    }

    for ($i = 0; $i < count($nombres); $i++) {
        echo $nombres[$i] . "<br>";
    }

    $ajuste = count($nombres) - 1; /* Contando la posición 0 daría siempre conteo+1 */

    $random = mt_rand(1, $ajuste);

    echo count($nombres) . "<br>";
    echo "El ganador del sorteo es " . $nombres[$random] . "<br>";

    fclose($fp);
    ?>
</body>

</html>