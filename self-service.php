<?php

$peso_comida = 1.256;

$preco_pagar = $peso_comida * 35;

echo 'Valor a pagar: R$ ' . number_format($preco_pagar, 2);