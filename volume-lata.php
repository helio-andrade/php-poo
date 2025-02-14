<?php

$raio = 0.254;
$altura = 0.15;

$volume = M_PI * pow($raio, 2) * $altura;

echo 'Volume = π . raio² . altura = ' . number_format($volume, 4) . ' m³';