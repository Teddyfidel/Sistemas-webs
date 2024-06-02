<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Obtener los valores de los coeficientes
        $a1 = $_POST["a1"];
        $b1 = $_POST["b1"];
        $c1 = $_POST["c1"];
        $a2 = $_POST["a2"];
        $b2 = $_POST["b2"];
        $c2 = $_POST["c2"];

        // Calcular los valores de x e y utilizando el método de sustitución de incógnitas
        $y = ($c1 * $a2 - $a1 * $c2) / ($b1 * $a2 - $a1 * $b2);
        $x = ($c1 - $b1 * $y) / $a1;

        // Mostrar los resultados
        echo "<h2>Resultados:</h2>";
        echo "<p>El valor de x es: " . $x . "</p>";
        echo "<p>El valor de y es: " . $y . "</p>";
    }
    ?>