<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Procesar</title>
</head>
<body>
    <?php
    $submit = $_REQUEST["submit"];
    $nombre = $_REQUEST["usuario"];
    $clave = $_REQUEST["clave"];

    $fp = fopen("clave.txt", "r");

    while (!feof($fp)) {
        $linea = fgets($fp);
        $lista = explode(" ", $linea);

        if ($nombre == $lista[0] && $clave == $lista[1]) {

            echo "¡Bienvendio usuario!";

            echo "<br><br><a href='pedido.php'>Hacer pedido</a>";
            echo "<br><br><a href='mostrar.php'>Mostrar pedidos</a>";
            echo "<br><br><a href='calcular.php'>Calcular precio del pedido</a>";
            echo "<br><br><a href='sorteo.php'>Sorteo del pedido</a>";
            
        } else {
            echo "Error...";

            echo "<br><br><a href='index.php'>Voler a inicio</a>";
        }
    }
    ?>
</body>
</html>