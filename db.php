<?php
$host = "localhost";
$db_user = "root"; 
$db_password = ""; 
$db_name = "sklep_quady";

$conn = new mysqli($host, $db_user, $db_password, $db_name);

if ($conn->connect_error) {
    die("Błąd połączenia: " . $conn->connect_error);
}
?>