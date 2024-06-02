<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Obtener el valor inicial y el tiempo en meses
        $valorInicial = $_POST["valorInicial"];
        $tiempo = $_POST["tiempo"];

        // Calcular la depreciación y el valor de venta
        $depreciacion = $valorInicial * ($tiempo * 0.0001); // 0.01% es igual a 0.0001
        $valorVenta = $valorInicial - $depreciacion;

        // Mostrar los resultados
        echo "<h2>Resultados:</h2>";
        echo "<p>La depreciación acumulada es: " . $depreciacion . "</p>";
        echo "<p>El valor de venta transcurrido un tiempo de " . $tiempo . " meses es: " . $valorVenta . "</p>";
    }
    ?>
