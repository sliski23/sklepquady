<?php
session_start();
require_once "db.php";


$_SESSION['user_rola'] = 'admin';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $nazwa = $_POST['nazwa'];
    $cena = $_POST['cena'];
    
   
    $kategoria = "Ogólna"; 
    $ilosc = 1;
    $zdjecie = "quad.jpg";

    
    $sql = "INSERT INTO produkty (nazwa, kategoria, cena, ilosc, zdjecie) VALUES (?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssdis", $nazwa, $kategoria, $cena, $ilosc, $zdjecie);

    if ($stmt->execute()) {
        $_SESSION['msg'] = "Produkt dodany pomyślnie!";
    } else {
        $_SESSION['msg'] = "Błąd bazy danych przy zapisie.";
    }
}


header("Location: dashboard.php?page=produkty");
exit();
?>