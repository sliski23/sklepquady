<?php
$host = "localhost";
$db_user = "root"; // Tu wpisz '01493838_marek' jeśli to Twój user na serwerze
$db_password = ""; 
$db_name = "sklep_quady";

$conn = new mysqli($host, $db_user, $db_password, $db_name);

if ($conn->connect_error) {
    die("Błąd połączenia: " . $conn->connect_error);
}
?>