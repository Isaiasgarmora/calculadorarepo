<?php
if ($_POST) {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];

    $suma = $num1 + $num2;
    $multiplicacion = $num1 * $num2;

    echo "Suma: $suma <br>";
    echo "Multiplicación: $multiplicacion";
}
?>

<form method="POST">
    Número 1: <input type="number" name="num1"><br>
    Número 2: <input type="number" name="num2"><br>
    <input type="submit" value="Calcular">
</form>