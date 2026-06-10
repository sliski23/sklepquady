<?php
session_start();
require_once "db.php";

$uprawnione_role = ['admin', 'manager', 'dostawca'];
if (!isset($_SESSION['user_rola']) || !in_array($_SESSION['user_rola'], $uprawnione_role)) { exit(); }

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    
    $sql = "DELETE FROM produkty WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);
    
    if ($stmt->execute()) {
        $_SESSION['msg'] = "Produkt został usunięty.";
    }
}

header("Location: dashboard.php?page=produkty");
exit();
?>