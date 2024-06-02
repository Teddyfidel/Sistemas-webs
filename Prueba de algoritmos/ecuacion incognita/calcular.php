<?php
    // Obtener los coeficientes ingresados desde el formulario
    $a = $_POST['a'];
    $b = $_POST['b'];
    $c = $_POST['c'];

    // Calcular el discriminante
    $discriminante = pow($b, 2) - (4 * $a * $c);

    // Determinar las soluciones de la ecuación
    if ($discriminante > 0) {
        $x1 = (-$b + sqrt($discriminante)) / (2 * $a);
        $x2 = (-$b - sqrt($discriminante)) / (2 * $a);
        $soluciones = "Existen dos soluciones reales: x1 = $x1, x2 = $x2";
    } elseif ($discriminante == 0) {
        $x = -$b / (2 * $a);
        $soluciones = "Existe una solución real: x = $x";
    } else {
        $soluciones = "No existen soluciones reales. Las soluciones son imaginarias.";
    }

    // Mostrar las soluciones
    echo "Las soluciones de la ecuación $a*x^2 + $b*x + $c = 0 son:<br><br>";
    echo $soluciones;
    echo "<br><br>";
    echo "<a href='index.php'>Regresar</a>";
?>