<?php
$fitxer = 'contador.txt';
if (!file_exists($fitxer)) {
    $contador = 1;
} else {
    $contador = (int)file_get_contents($fitxer);
    $contador++;
}
file_put_contents($fitxer, $contador);
echo "Has visitat aquesta pàgina $contador vegades.";
?>
