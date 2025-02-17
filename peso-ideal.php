<?php

$altura = 1.80;
$peso = 93.00;
$sexo = 1;

// Vetor com as fórmulas para cada sexo
$formulas = [
    1 => fn($h) => (72.7 * $h) - 58,   // Masculino
    2 => fn($h) => (62.1 * $h) - 44.7  // Feminino
];

if (isset($formulas[$sexo])) {
    $peso_ideal = $formulas[$sexo]($altura);
    printf("Seu peso ideal é %.2f kg\n", $peso_ideal);
} else {
    echo "Sexo inválido!\n";
}

/* $peso_ideal = 0;
$altura = 1.80;
$peso = 93.00;
$sexo = 1;

$peso_ideal = ($sexo == 1) ? (72.7 * $altura) - 58 : (62.1 * $altura) - 44.7;

printf("Seu peso ideal é %.2f kg\n", $peso_ideal); */

/* $altura = 1.70;
$peso = 80.00;
$sexo = 1;

$peso_ideal = $sexo === 1 
    ? (72.7 * $altura) - 58 
    : (62.1 * $altura) - 44.7;

printf("Seu peso ideal é %.2f kg\n", $peso_ideal); */
