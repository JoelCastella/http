<?php
if (!isset($_COOKIE['contador'])) {
    $contador = 1;
} else {
    $contador = $_COOKIE['contador'] + 1;
}
setcookie('contador', $contador, time() + 3600); // Cookie que dura 1 hora
echo "Has visitat aquesta pàgina $contador vegades.";
?>
