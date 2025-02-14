<?php

$salario_atual = 1258.87;
$reajuste = 10;

$novo_salario = ($reajuste/100) * $salario_atual + $salario_atual;

echo 'Salário reajustado R$ ' . number_format($novo_salario, 2, ",", ".");