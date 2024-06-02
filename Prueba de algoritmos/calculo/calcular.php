<?php
    // Obtener el valor del radio enviado desde el formulario
    $radio = $_POST['radio'];

    // Calcular la superficie y el volumen de la esfera
    $superficie = 4 * pi() * pow($radio, 2);
    $volumen = (4/3) * pi() * pow($radio, 3);

    // Mostrar los resultados
    echo "La esfera de radio $radio tiene una superficie de $superficie y un volumen de $volumen";
    echo "<br><br>";
    echo "<a href='index.html'>Regresar</a>";
?>
