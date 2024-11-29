<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
</head>
<body>
    <h1>Resultado</h1>

    <?php
    $numeroUno = $_REQUEST['numUno'];
    $numeroDos = $_REQUEST['numDos'];
    $recibir = $_REQUEST['operacion'];

    if ($recibir == "suma") {

        $resultado = sumar($numeroUno, $numeroDos);

        print "El resultado de <b>la suma</b> de los números <b>$numeroUno</b> y <b>$numeroDos</b> es <b>$resultado</b>";

    } elseif ($recibir == "resta") {

        $resultado = restar($numeroUno, $numeroDos);

        print "El resultado de <b>la resta</b> de los números <b>$numeroUno</b> y <b>$numeroDos</b> es <b>$resultado</b>";

    } elseif ($recibir == "multi") {

        $resultado = multiplicar($numeroUno, $numeroDos);

        print "El resultado de <b>la multiplicación</b> de los números <b>$numeroUno</b> y <b>$numeroDos</b> es <b>$resultado</b>";

    } else {
        
        $resultado = dividir($numeroUno, $numeroDos);
        print "El resultado de <b>la división</b> de los números <b>$numeroUno</b> y <b>$numeroDos</b> es <b>$resultado</b>";

    }

    function sumar ($param1, $param2) {
        return $param1 + $param2;
    }

    function restar ($param1, $param2) {
        return $param1 - $param2;
    }

    function multiplicar ($param1, $param2) {
        return $param1 * $param2;
    }

    function dividir ($param1, $param2) {
        return $param1 / $param2;
    }

    ?>
</body>
</html>