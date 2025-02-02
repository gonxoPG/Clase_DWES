<html>
<head>
</head>
<body>
<?php
$fp = fopen("pedidos.txt", "r");
$nombres=[];
while(!feof($fp)){
        
    $linea = fgets($fp);
    $lista = explode(",",$linea);
    array_push($nombres,$lista[0]);
}
for ($x=0;$x<count($nombres);$x++){
    echo $nombres[$x]."<br>";
}

$ajuste =count($nombres) - 1;

$random = mt_rand(1,$ajuste);
echo count($nombres)."<br>";
echo "El sorteo lo ha ganado: ".$nombres[$random]."<br>";
fclose($fp);
?>
</body>
</html>