<?php

$nome = 'Fulano de Tal';
$idade = 35;

$dias_vividos = $idade * 365; 

echo $nome . ' já viveu ' . number_format($dias_vividos, 0, ",", ".") . ' dias.';