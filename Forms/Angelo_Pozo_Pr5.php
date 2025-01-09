<!DOCTYPE html>
<html lang="es">

<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = htmlspecialchars($_POST['name']);
        $numero1 = htmlspecialchars($_POST['primero']);
        $numero2 = htmlspecialchars($_POST['segundo']);

        echo "Welcome $name! <br>";

        if ($numero1 % 2 == 0 && $numero2 % 2 == 0) {
            echo "$numero1 is even and $numero2 is even.<br>";
        } else if ($numero1 % 2 != 0 && $numero2 % 2 != 0) {
            echo "$numero1 is odd and $numero2 is odd.<br>";
        } else if ($numero1 % 2 == 0 && $numero2 != 0) {
            echo "$numero1 is even and $numero2 is odd.<br>";
        } else if ($numero1 % 2 != 0 && $numero2 % 2 == 0) {
            echo "$numero1 is odd and $numero2 is even.<br>";
        }

        if ($numero1 < $numero2) {
            for ($i = $numero1; $i <= $numero2; $i++) {
                if ($i % 2 == 0) {
                    echo "<div><li style='color:green;'> $i </li></div>";
                } else if ($i % 2 != 0) {
                    echo "<div><li style='color:orange;'> $i </li></div>";
                }
            }
        } else {
            for ($i = $numero2; $i <= $numero1; $i++) {
                if ($i % 2 == 0) {
                    echo "<div><li style='color:green;'> $i </li></div>";
                } else if ($i % 2 != 0) {
                    echo "<div><li style='color:orange;'> $i </li></div>";
                }
            }
        }
    }
    ?>

    <h2>Datos personales</h2>
    <form method="POST">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="name" required><br><br>

        <label for="primero">Numero1</label>
        <input type="number" name="primero" id="first"><br><br>

        <label for="segundo">Numero2</label>
        <input type="number" name="segundo" id="second"><br><br>

        <input type="submit" value="Enviar">
    </form>
</body>

</html>