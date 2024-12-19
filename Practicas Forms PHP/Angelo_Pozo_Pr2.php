<!DOCTYPE html>
<html>

<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numero1 = htmlspecialchars(string: $_POST['num1']);
        $numero2 = htmlspecialchars(string: $_POST['num2']);

        if ($numero1 > $numero2) {
            echo "El primer numero: $numero1 es mayor que el segundo numero: $numero2";
        } elseif ($numero2 > $numero1) {
            echo "El segundo numero: $numero2 es mayor que el primer numero: $numero1";
        } else {
            echo "El primer numero: $numero1 es igual al segundo numero: $numero2";
        }
    }
    ?>
    <h2>Introduce dos numeros para comprobar cuál es mayor o si son iguales.</h2>
    <form action="Angelo_Pozo_Pr2.php" method="POST">
        <label for="nombre">Numero 1:</label>
        <input type="number" id="numero1" name="num1" required><br><br>

        <label for="apellido">Numero 2:</label>
        <input type="number" id="numero2" name="num2" required><br><br>

        <input type="submit" value="Enviar">
        <input type="reset" value="Borrar">
    </form>
</body>

</html>