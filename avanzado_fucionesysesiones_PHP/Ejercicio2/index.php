<?php
    session_start();

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2.1</title>
</head>

<body>
    
        <h1>Nombre y Apellidos</h1>
    <form action="second.php" method="GET">

        <select name="menu" required>
            <option value="nombre">Escribir nombre</option>
            <option value="apellidos">Escribir apellidos</option>
            <option value="resultado">Ver nombre y apellido</option>
            <option value="borrar">Borrar información</option>
        </select>

        <input type="submit" value="Aceptar">
    </form>
</body>

</html>

<!-- 2.- Hacer un programa con sesiones.

Queremos un menú con enlaces:

Elija una opción:

Escribir su nombre
Escribir sus apellidos
Ver su nombre y apellido
Borrar la información

Tiene que haber un enlace en cada web para volver al programa principal. -->