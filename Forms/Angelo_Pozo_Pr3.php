<!DOCTYPE html>
<html>

<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numero1 = htmlspecialchars(string: $_POST['num1']);
        $numero2 = htmlspecialchars(string: $_POST['num2']);

        if ($numero1 > $numero2) {
            echo "Lista de menor a mayor: <br>";
            for ($i = $numero2; $i <= $numero1; $i++) {
                echo "<li style='color:red;'> $i </li>";
            }
            echo "Lista de mayor a menor: <br>";
            for ($i = $numero1; $i >= $numero2; $i--) {
                echo "<li style='color:blue;'> $i </li>";
            }
        } elseif ($numero2 > $numero1) {
            echo "Lista de menor a mayor: <br>";
            for ($i = $numero1; $i <= $numero2; $i++) {
                echo "<li style='color:red;'> $i </li>";
            }
            echo "Lista de mayor a menor: <br>";
            for ($i = $numero2; $i >= $numero1; $i--) {
                echo "<li style='color:blue;'> $i </li>";
            }
        } else {
            echo "No se puede generar una lista porque ambos números son iguales.";
        }
    }
    ?>
    <h2>Introduce numeros</h2>
    <form action="Angelo_Pozo_Pr3.php" method="POST">
        <label for="nombre">Numero 1:</label>
        <input type="number" id="numero1" name="num1" min="0" max="20" required><br><br>

        <label for="apellido">Numero 2:</label>
        <input type="number" id="numero2" name="num2" min="0" max="20" required><br><br>

        <input type="submit" value="Enviar">
        <input type="reset" value="Borrar">
    </form>
</body>

</html>