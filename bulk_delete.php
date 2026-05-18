<?php
session_start();
require_once "db.php";

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['ids'])) {
    $ids = $_POST['ids'];

    foreach ($ids as $id) {
        $sql = "DELETE FROM produkty WHERE id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i", $id);
        $stmt->execute();
    }
    $_SESSION['msg'] = "Usunięto zaznaczone produkty.";
}

header("Location: dashboard.php?page=produkty");
exit();
?>