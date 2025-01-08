<?php
$conn = new mysqli('localhost', 'root', '', 'visites');
if ($conn->connect_error) {
    die("Connexió fallida: " . $conn->connect_error);
}

$sql = "CREATE TABLE IF NOT EXISTS contador (id INT PRIMARY KEY, visites INT)";
$conn->query($sql);

$sql = "INSERT INTO contador (id, visites) VALUES (1, 1) ON DUPLICATE KEY UPDATE visites = visites + 1";
$conn->query($sql);

$result = $conn->query("SELECT visites FROM contador WHERE id = 1");
$fila = $result->fetch_assoc();
echo "Has visitat aquesta pàgina " . $fila['visites'] . " vegades.";
$conn->close();
?>
