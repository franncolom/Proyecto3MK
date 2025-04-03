<?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $valorDolar = 40;

    $cantidadEnPesos = floatval($_POST['cantidad']);
    $cantidadTotalDolares = $cantidadEnPesos / $valorDolar;

    echo "<h2>Resultado de la conversión</h2>";
    echo "<p>$cantidadEnPesos pesos uruguayos equivale a <strong>" . $cantidadTotalDolares . " dolares </strong></p>";
  } else {
    echo "Error en la solicitud.";
  }
?>
