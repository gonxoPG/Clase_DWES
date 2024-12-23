<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2.2</title>
</head>

<body>
    <?php

    session_start();

    if (isset($_GET["menu"])) {

        switch ($_GET["menu"]) {
            case "nombre":
                echo '<form action="#" method="POST">
                            Escribe tu nombre: 
                            <input type="text" name="inputNombre" required>
                            <br><br>
                            <input type="submit" value="Guardar">
                            <input type="reset" value="Borrar">
                        </form>';


                break;

            case "apellidos":
                echo '<form action="#" method="POST">
                            Escribe tu primer apellido: 
                            <input type="text" name="inputApellido1" required>
                            <br><br>
                            Escribe tu segundo apellido: 
                            <input type="text" name="inputApellido2" required>
                            <br><br>
                            <input type="submit" value="Guardar">
                            <input type="reset" value="Borrar">
                        </form>';
                break;

            case "resultado":
                if (isset($_SESSION["inputNombre"], $_SESSION["inputApellido1"], $_SESSION["inputApellido2"])) {
                    echo "<p>Nombre: <strong>" . $_SESSION["inputNombre"] . "</strong></p>";
                    echo "<p>Primer apellido: <strong>" . $_SESSION["inputApellido1"] . "</strong></p>";
                    echo "<p>Segundo apellido: <strong>" . $_SESSION["inputApellido2"] . "</strong></p>";
                } else {
                    echo "<p>No hay datos guardados en la sesión.</p>";
                }
                break;

            case "borrar":
                session_unset();
                session_destroy();

                echo "<p>Información borrada y sesión finalizada correctamente.</p>";
                break;

            default:
                echo "Error: opción no válida";
                break;
        }

        echo '<br><a href="..\Ejercicio2\index.php">Volver al menú principal</a>';
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (!empty($_POST["inputNombre"])) {
            $_SESSION["inputNombre"] = $_POST["inputNombre"];
            echo "<p>Nombre guardado correctamente.</p>";

            header("Location: index.php");
            exit();
        }

        if (!empty($_POST["inputApellido1"]) && !empty($_POST["inputApellido2"])) {
            $_SESSION["inputApellido1"] = $_POST["inputApellido1"];
            $_SESSION["inputApellido2"] = $_POST["inputApellido2"];
            echo "<p>Apellidos guardados correctamente.</p>";

            header("Location: index.php");
            exit();
        }

    }
    ?>
</body>

</html>