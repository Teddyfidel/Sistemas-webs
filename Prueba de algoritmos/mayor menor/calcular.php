<?php
    // Obtener los valores ingresados desde el formulario
    $numero1 = $_POST['numero1'];
    $numero2 = $_POST['numero2'];
    $numero3 = $_POST['numero3'];

    // Determinar el número mayor
    $mayor = max($numero1, $numero2, $numero3);

    // Mostrar el resultado
    echo "El número mayor de los tres ingresados es: $mayor";
    echo "<br><br>";
    echo "<a href='http://localhost/practoca%20algoritmoooooo/mayor.html'>Regresar</a>";
?>
