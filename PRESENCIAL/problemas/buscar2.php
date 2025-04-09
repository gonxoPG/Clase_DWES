<?php
include "connexion.php";
?>

<!DOCTYPE html>
<html>

<head>
    <title>Buscador de Productos</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th,
        td {
            border: 1px solid #ddd;
            padding: 8px;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>

<body>
    <h1>Buscador de Productos</h1>

    <form action="" method="POST">
        <input type="text" name="busqueda" placeholder="ID o Nombre del producto">
        <button type="submit">Buscar</button>
    </form>

    <?php

    $conn = mysqli_connect($servername, $username, $password, $dbname) or die("Conexión fallida: " . mysqli_connect_error());

    if (isset($_POST["busqueda"]) && !empty($_POST["busqueda"])) {
        $id = mysqli_real_escape_string($conn, $_POST['busqueda']);

        $sql = "SELECT * FROM productos WHERE id = '$id'";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
            $nombre = $row["nombre"];
            $precio = $row["precio"];
            $cantidad = $row["cantidad"];

            echo "<div>";
            echo "Producto: $nombre<br>";
            echo "Precio: $precio €<br>";
            echo "Cantidad: $cantidad<br>";
            echo "</div>";

        } else {
            echo "No se encontró el usuario";
        }

    }
    ?>

</body>

</html>