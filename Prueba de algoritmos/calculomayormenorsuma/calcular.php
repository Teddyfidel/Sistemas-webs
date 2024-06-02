<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Obtener los valores de los números
        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];
        $num3 = $_POST["num3"];
        $num4 = $_POST["num4"];

        // Calcular el mayor, el menor y la sumatoria
        $mayor = max($num1, $num2, $num3, $num4);
        $menor = min($num1, $num2, $num3, $num4);
        $sumatoria = $num1 + $num2 + $num3 + $num4;

        // Mostrar los resultados
        echo "<h2>Resultados:</h2>";
        echo "<p>El número mayor es: " . $mayor . "</p>";
        echo "<p>El número menor es: " . $menor . "</p>";
        echo "<p>La sumatoria es: " . $sumatoria . "</p>";
    }
    ?>