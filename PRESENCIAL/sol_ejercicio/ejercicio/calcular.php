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
<form ACTION="calcular.php" method="post">
    <fieldset>
        <legend>Calcular</legend>
<p>Nombre: <input type="text" name="nombre"><input type="submit" value="Buscar" name="submit"></p>
</form>
<?php
$submit = $_REQUEST['submit'];
$nombre = $_REQUEST['nombre'];
if (isset($submit)){
    $fp = fopen("pedidos.txt", "r");
    $nombres=[];
    $suma = 0;
    $verificar = 0;
    if ($nombre != ""){
    while(!feof($fp)){
        
        $linea = fgets($fp);
        $lista = explode(",",$linea);
        if (($lista[0] == $nombre) && $lista[2] == "iphone11"){
            array_push($nombres,$linea);
            $suma = $suma + ($lista[3] * 1000);
        }
        if (($lista[0] == $nombre) && $lista[2] == "roomba"){
            array_push($nombres,$linea);
            $suma = $suma + ($lista[3] * 500);
        }
        if (($lista[0] == $nombre) && $lista[2] == "reloj"){
            array_push($nombres,$linea);
            $suma = $suma + ($lista[3] * 100);
        }
        
    }
    for ($x=0;$x<count($nombres);$x++){
        echo $nombres[$x]."<br>";
    }
      echo $suma;
    fclose($fp); 
    }
    if ($nombre == ""){
        while(!feof($fp)){
        
            $linea = fgets($fp);
            $lista = explode(",",$linea);
            if ($lista[2] == "iphone11"){
                array_push($nombres,$linea);
                $suma = $suma + ($lista[3] * 1000);
            }
            if ($lista[2] == "roomba"){
                array_push($nombres,$linea);
                $suma = $suma + ($lista[3] * 500);
            }
            if ($lista[2] == "reloj"){
                array_push($nombres,$linea);
                $suma = $suma + ($lista[3] * 100);
            }
            
        }
        for ($x=0;$x<count($nombres);$x++){
            echo $nombres[$x]."<br>";
        }
          echo $suma;
        fclose($fp); 
    }
}
?>
</body>
</html>