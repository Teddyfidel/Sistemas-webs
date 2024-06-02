<?php
if(isset($_POST['numero1']) && isset($_POST['numero2'])) {
    $numero1 = $_POST['numero1'];
    $numero2 = $_POST['numero2'];
    $resultado = $numero1 + $numero2;
    echo $resultado;
}
echo "<br><br>";
echo "<a href='suma.html'>Regresar</a>";
?>
