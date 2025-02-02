<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>
<body>

<h2>Pedido:</h2>
    <form action="procesarpedido.php" method="POST">

        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="nombre"><br><br>

        <label for="direccion">Dirección:</label>
        <input type="text" name="direccion" id="direccion"><br><br>

        <label for="iphone">iPhone:</label>
        <input type="checkbox" name="iphone" id="iphone">

        <label for="cantidad_1">Cantidad:</label>
        <input type="number" name="cantidad_1" id="cantidad_1"><br><br>
        
        <label for="roomba">Roomba:</label>
        <input type="checkbox" name="roomba" id="roomba">

        <label for="cantidad_2">Cantidad:</label>
        <input type="number" name="cantidad_2" id="cantidad_2"><br><br>

        <label for="Reloj">Reloj:</label>
        <input type="checkbox" name="reloj" id="reloj">

        <label for="cantidad_3">Cantidad:</label>
        <input type="number" name="cantidad_3" id="cantidad_3"><br><br>

        <input type="submit" value="Confirmar" name="submit">
    </form>
</body>
</html>