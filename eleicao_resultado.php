<?php

$eleitores = 1235;
$votos_brancos = 35;
$votos_nulos = 25;
$votos_validos = $eleitores - $votos_brancos - $votos_nulos;

printf('<pre>TOTAL DE ELEITORES  = %d', $eleitores);
printf('<br>Votos Brancos       = %.2f%%', (100*$votos_brancos/$eleitores));
printf('<br>Votos Nulos         = %.2f%%', (100*$votos_nulos/$eleitores));
printf('<br>Votos Válidos       = %.2f%%</pre>', (100*$votos_validos/$eleitores));