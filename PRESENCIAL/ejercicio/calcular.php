<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcular precio</title>
</head>
<body>
    <!-- Hay que enlazar un formulario con otro PHP que procese -->

   <?php

    print '<form ACTION="calcular.php" method="post">
    <fieldset>
        <legend>Calcular</legend>
<p>Nombre: <input type="text" name="nombre"><input type="submit" value="Buscar" name="submit"></p>
</form>';

    $submit = $_REQUEST["submit"];
    $nombre = $_REQUEST["nombre"];

    if (isset($submit)) {
        $fp = fopen("pedidos.txt", "r");

        $nombres = [];
        $suma = 0;
        $verificar = 0;

        if ($nombre != "") {
            while (!feof($fp)) {
                $linea =fgets($fp);
                $lista = explode(",", $linea);

                if ($lista[0] == $nombre && $lista[2 == "iphone"])  {
                    array_push($nombres, $linea);
                    $suma = $suma + ($lista[3] * 1000);
                }

                if ($lista[0] == $nombre && $lista[2] == "roomba") {
                    array_push($nombres, $linea);
                    $suma = $suma + ($lista[3] * 500);
                }

                if ($lista[0 == $nombre && $lista[2] == "reloj"]) {
                    array_push($nombres, $linea);
                    $suma = $suma + ($lista[3] * 100);
                }
            }

            for ($i=0; $i < count($nombres); $i++) { 
                echo $nombres[$i]."<br>";
            }

            echo $suma;

            fclose($fp);
        }

        if ($nombre == "") {
            
            while (!feof($fp)) {
                $linea = fgets($fp);
                $lista = explode(",", $linea);

                if ($lista[2] == "iphone") {
                    array_push($nombres, $linea);
                    $suma = $suma + ($lista[3] * 1000);
                }

                if ($lista[2] == "roomba") {
                    array_push($nombres, $linea);
                    $suma = $suma + ($lista[3] * 500);
                }

                if ($lista[2] == "reloj") {
                    array_push($nombres, $lista);
                    $suma = $suma + ($lista[3] * 100);
                }

            }

            for ($i=0; $i < count($nombres); $i++) { 
                echo $nombres[$i]."<br>";
            }

            echo $suma;
            fclose($fp);
        }
    }
   ?>
</body>
</html>