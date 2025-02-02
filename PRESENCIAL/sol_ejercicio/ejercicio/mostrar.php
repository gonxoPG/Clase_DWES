<html>
<head>
</head>
<body>
<?php
$fp = fopen("pedidos.txt", "r");
while(!feof($fp)){
    $linea = fgets($fp);
    echo $linea . "<br>";
}
fclose($fp);
?>
</body>
</html>