<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Buscar Producto - Sistema de Gestión de Inventario</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            margin: 0;
            padding: 20px;
        }

        h1 {
            color: #333;
        }

        form {
            margin-bottom: 20px;
        }

        input[type="text"] {
            padding: 5px;
            width: 300px;
        }

        input[type="submit"] {
            padding: 5px 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
        }

        table {
            border-collapse: collapse;
            width: 100%;
        }

        th,
        td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        .no-results {
            color: #ff0000;
        }

        .back-link {
            margin-top: 20px;
        }
    </style>
</head>

<body>
    <h1>Buscar Producto</h1>

    <form method="POST" action="">
        <input type="text" name="search_term" placeholder="Ingrese ID o nombre del producto" required>
        <input type="submit" value="Buscar">
    </form>

    <?php

    if (isset($_REQUEST["search_term"]) && !empty($_REQUEST["search_term"])) {

        $archivo = fopen("inventario.txt", "r");
        $busqueda = $_REQUEST["search_term"];
        $encontrado = false;

        while (($linea = fgets($archivo)) !== false) {

            $arrayDatos = explode(":", $linea);

            $id = $arrayDatos[0];
            $nombre = $arrayDatos[1];
            $cantidad = $arrayDatos[2];
            $precio = $arrayDatos[3];

            if ($busqueda == $id) {

                echo "ID: $id<br>";
                echo "Producto: <b>$nombre</b><br>";
                echo "Cantidad: $cantidad<br>";
                echo "Precio: $precio €";
                $encontrado = true;

            }
        }

        fclose($archivo);

        if (!$encontrado) {
            echo "Producto no encontrado";
        }
    }
    ?>
</body>

</html>