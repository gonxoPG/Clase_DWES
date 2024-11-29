<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3</title>
</head>
<body>
    <form action="datos_operaciones.php" method="GET">
        <p><label>Introduzca el primer número: <input type="number" name="numUno" size="20"></label></p>
        <p><label>Introduzca el segundo número: <input type="number" name="numDos" size="20"></label></p>
        
        <p>Seleccione la operacion: <br><br>
            <input type="radio" name="operacion" value="suma">Suma</input>
            <input type="radio" name="operacion" value="resta">Resta</input>
            <input type="radio" name="operacion" value="multi">Producto</input>
            <input type="radio" name="operacion" value="divi">Cociente</input>
        </p>

        <p>
            <input type="submit" name="enviar" value="Calcular">
        </p>
    </form>
</body>
</html>