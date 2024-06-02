<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Obtener los valores de la base y la altura
        $base = $_POST["base"];
        $altura = $_POST["altura"];

        // Validar si los datos cumplen con los requisitos
        if ($base >= 0 && $base <= 1.248 && $altura >= 0 && $altura <= 1.000) {
            // Calcular el área y el perímetro
            $area = $base * $altura;
            $perimetro = 2 * ($base + $altura);

            // Mostrar los resultados
            echo "<h2>Resultados:</h2>";
            echo "<p>El área del rectángulo es: " . $area . "</p>";
            echo "<p>El perímetro del rectángulo es: " . $perimetro . "</p>";
        } else {
            echo "<p>Los datos están fuera del rango permitido.</p>";
        }
    }
    ?>