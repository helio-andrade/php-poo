<?php

$horas_normais = 220;
$horas_extras = 10;

$salario_bruto = 45.75 * $horas_normais + 25.50 * $horas_extras;
$salario_liquido = 0.90 * $salario_bruto;

echo 'SALÁRIO BRUTO     -> R$ ' . number_format($salario_bruto, 2, ",", ".") . "<br>" . 
     'SALÁRIO LÍQUIDO   -> R$ ' . number_format($salario_liquido, 2, ",", ".");