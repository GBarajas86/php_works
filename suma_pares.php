<?php

// Pedir al usuario la altura del triángulo
echo "Ingrese la altura del triángulo isósceles: ";
$altura = intval(trim(fgets(STDIN)));

for ($i = 1; $i <= $altura; $i++) {
    // Imprimir espacios antes de los asteriscos
    echo str_repeat(" ", $altura - $i);

    // Imprimir asteriscos
    echo str_repeat("*", 2 * $i - 1);

    // Nueva línea después de cada fila del triángulo
    echo "\n";
}

?>
