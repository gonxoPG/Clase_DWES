<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Procesar pedido</title>
</head>
<body>
<?php

setlocale(LC_ALL, "es_ES");
date_default_timezone_set("Europe/Madrid");

    $submit = $_REQUEST["submit"];

    $nombre = $_REQUEST["nombre"];
    $direccion = $_REQUEST["direccion"];
    $iPhone = $_REQUEST["iphone"];
    $roomba = $_REQUEST["roomba"];
    $reloj = $_REQUEST["reloj"];

    $cantidad_iphone = $_REQUEST["cantidad_1"];
    $cantidad_roomba = $_REQUEST["cantidad_2"];
    $cantidad_reloj = $_REQUEST["cantidad_3"];

    if (isset($submit)) {
        
        if ($nombre != "" && $direccion != "") {
            
            if ($iPhone == "iphone" || $roomba == "roomba" || $reloj == "reloj") {
                
                if ($iPhone == "iphone" && $cantidad_iphone == "") {
                    echo "Tienes que elegir una cantidad de iPhone";
                }

                if ($roomba == "roomba" && $cantidad_roomba == "") {
                    echo "Tienes que elegir una cantidad de Roomba";
                }

                if ($reloj == "reloj" && $cantidad_reloj == "") {
                    echo "Tienes que elegir una cantidad de Reloj";
                }

                if ($iPhone == "ihpone" && $cantidad_iphone !="") {

                    $fp = fopen("./pedidos.text", "a");

                    $datos = "$nombre, $direccion, $iPhone, $cantidad_iphone,".date("d").",".date("m").",".date("Y").",".date("H:i")."\n";
                    
                    fputs($fp, $datos);
                    fclose($fp);
                }

                if ($roomba == "roomba" && $cantidad_roomba !="") {
                    
                    $fp = fopen("./pedidos.txt", "a");

                    $datos = "$nombre, $direccion, $roomba, $cantidad_roomba,".date("d").",".date("m").",".date("Y").",".date("H:i")."\n";

                    fputs($fp, $datos);
                    fclose($fp);
                }

                if ($reloj == "reloj" && $cantidad_reloj !="") {
                    
                    $fp = fopen("./pedidos.text", "a");

                    $datos = "$nombre, $direccion, $reloj, $cantidad_reloj,".date("d").",".date("m").",".date("Y").",".date("H:i")."\n";

                    fputs($fp, $datos);
                    fclose($fp);
                }

            }
            if ($iPhone == "" && $roomba == "" && $reloj == "") {
                echo "Tienes que seleccionar un pedidio";
            }
        }

        if ($nombre == "" || $direccion == "") {
            echo "Por favor, rellena el nombre y la dirección<br>";

            if ($iPhone == "" && $roomba == "" && $reloj == "") {
                echo "Tienes que seleccionar un pedido";
            }
        }
    }
    ?>
</body>
</html>