<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuario y clave</title>
</head>

<body>
    <form action="procesar.php" method="POST">

        <label for="usuario">Usuario:</label>
        <input type="text" name="usuario">

        <br><br>

        <label for="clave">Contraseña:</label>
        <input type="password" name="clave">

        <br><br>

        <input type="submit" value="Aceptar" name="submit">
    </form>
</body>
</html>