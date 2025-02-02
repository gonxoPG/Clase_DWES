<html>
<head>
<style type="text/css">
    fieldset{
        border: 2px #7262FF solid;
        background-color: #CBC5FF;
    }
    legend{
        border: 2px #7262FF solid;
        background-color: white;
    }
  </style>
</head>
<body>
<form ACTION="pedido.php" method="post">
    <fieldset>
        <legend>Buscar</legend>
<p>Nombre: <input type="text" name="nombre"></p>
<p>Direccion: <input type="text" name="direccion"></p>
<p>Iphone11: <input type="checkbox" name="iphone11" value="iphone11">Cantidad: <input type="number" name="iphone111"></p>
<p>Roomba: <input type="checkbox" name="roomba" value="roomba">Cantidad: <input type="number" name="roomba1"></p>
<p>Reloj: <input type="checkbox" name="reloj" value="reloj">Cantidad: <input type="number" name="reloj1"></p>
<p><input type="submit" value="Confirmar" name="submit"></p>
</form>
<?php
setlocale(LC_ALL,"es_ES");
date_default_timezone_set("Europe/Madrid");
$submit = $_REQUEST['submit'];
$nombre = $_REQUEST['nombre'];
$direccion = $_REQUEST['direccion'];
$iphone11 = $_REQUEST['iphone11'];
$iphone111 = $_REQUEST['iphone111'];
$roomba = $_REQUEST['roomba'];
$roomba1 = $_REQUEST['roomba1'];
$reloj = $_REQUEST['reloj'];
$reloj1 = $_REQUEST['reloj1'];
if (isset($submit)){
    if ($nombre != "" && $direccion != ""){
        if ($iphone11 == "iphone11" || $roomba == "roomba" || $reloj == "reloj"){
            if ($iphone11 == "iphone11" && $iphone111 == ""){
                echo "Tienes que elegir una cantidad";
            }
            if ($roomba == "roomba" && $roomba1 == ""){
                echo "Tienes que elegir una cantidad";
            }
            if ($reloj == "reloj" && $reloj1 == ""){
                echo "Tienes que elegir una cantidad";
            }

            if ($iphone11 == "iphone11" && $iphone111 != ""){
                $fp = fopen("./pedidos.txt", "a");
                $datos= "$nombre,$direccion,$iphone11,$iphone111,".date("d").",".date("m").",".date("Y").",".strftime("%H:%M")."\n";
                fputs($fp,$datos);
                fclose($fp);
            }
            if ($roomba == "roomba" && $roomba1 != ""){
                $fp = fopen("./pedidos.txt", "a");
                $datos= "$nombre,$direccion,$roomba,$roomba1,".date("d").",".date("m").",".date("Y").",".strftime("%H:%M")."\n";
                fputs($fp,$datos);
                fclose($fp);
            }
            if ($reloj == "reloj" && $reloj1 != ""){
                $fp = fopen("./pedidos.txt", "a");
                $datos= "$nombre,$direccion,$reloj,$reloj1,".date("d").",".date("m").",".date("Y").",".strftime("%H:%M")."\n";
                fputs($fp,$datos);
                fclose($fp);
            }
        }
        if ($iphone11 == "" && $roomba == "" && $reloj == ""){
            echo "Tienes q seleccionar un pedido";
        }
    }
    if ($nombre == "" || $direccion == ""){
        echo "por favor rellena el nombre y la direccion<br>";
        if ($iphone11 == "" && $roomba == "" && $reloj == ""){
            echo "Tienes q seleccionar un pedido";
        }
    }
}
?>
</body>
</html>