<?php
require_once "db.php";
$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $login = $_POST['login'];
    $email = $_POST['email'];
    $pass = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $sql = "INSERT INTO uzytkownicy (login, email, haslo) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sss", $login, $email, $pass);

    if ($stmt->execute()) {
        $message = "Konto utworzone! Możesz się zalogować.";
    } else {
        $message = "Błąd: " . $conn->error;
    }
}
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>QuadsLuxe - Rejestracja</title>
    <style>
        body { font-family: 'Segoe UI', sans-serif; background: #f4f4f4; display: flex; justify-content: center; align-items: center; height: 100vh; margin: 0; }
        .form-card { background: white; padding: 40px; border-radius: 8px; box-shadow: 0 4px 15px rgba(0,0,0,0.1); width: 350px; }
        h2 { text-align: center; color: #333; text-transform: uppercase; letter-spacing: 2px; }
        input { width: 100%; padding: 12px; margin: 10px 0; border: 1px solid #ddd; border-radius: 4px; box-sizing: border-box; }
        button { width: 100%; padding: 12px; background: #000; color: white; border: none; border-radius: 4px; cursor: pointer; font-weight: bold; }
        button:hover { background: #333; }
        .msg { text-align: center; color: green; margin-bottom: 10px; }
    </style>
</head>
<body>
    <div class="form-card">
        <h2>Rejestracja</h2>
        <?php if($message) echo "<p class='msg'>$message</p>"; ?>
        <form method="POST">
            <input type="text" name="login" placeholder="Login" required>
            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="password" placeholder="Hasło" required>
            <button type="submit">ZAREJESTRUJ SIĘ</button>
        </form>
        <p style="text-align:center">Masz konto? <a href="login.php">Zaloguj się</a></p>
    </div>
</body>
</html>