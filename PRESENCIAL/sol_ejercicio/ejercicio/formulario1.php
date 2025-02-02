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
<form ACTION="formulario1.php" method="post">
    <fieldset>
        <legend>Buscar</legend>
<p>Nombre: <input type="text" name="nombre"></p>
<p>Clave: <input type="password" name="clave"></p>
<p><input type="submit" value="aceptar" name="submit"></p>
</form>
<?php
$submit = $_REQUEST['submit'];
$nombre = $_REQUEST['nombre'];
$clave = $_REQUEST['clave'];
if (isset($submit)){
    $fp = fopen("clave.txt", "r");
    while(!feof($fp)){
        
        $linea = fgets($fp);
        $lista = explode(" ",$linea);
        if (($lista[0] == $nombre) && ($lista[1] == $clave) ){
            echo "Bienvenido Usuario<br>";
            print("<a href=pedido.php>Hacer pedido</a><br>");
            print("<a href=mostrar.php>Mostrar Pedidos</a><br>");
            print("<a href=calcular.php>Calcular Precio del Pedido</a><br>");
            print("<a href=sorteo.php>Sorteo del pedido</a><br>");
        }
        else{
            echo "Error";
        }
    }
}
?>
</body>
</html>