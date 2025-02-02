<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostrar lista de pedidos</title>
</head>
<body>
    <?php
        $fp = fopen("pedidos.txt", "r");

        while (!feof($fp)) {
            $linea = fgets($fp);

            echo $linea."<br>";
        }

        fclose($fp);
    ?>
</body>
</html>