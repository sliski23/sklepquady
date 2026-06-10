<?php
session_start();
require_once "db.php";
$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $login = $_POST['login'];
    $password = $_POST['password'];

    $sql = "SELECT id, login, haslo, rola FROM uzytkownicy WHERE login = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $login);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($user = $result->fetch_assoc()) {
        if (password_verify($password, $user['haslo'])) {
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['user_login'] = $user['login'];
            $_SESSION['user_rola'] = $user['rola'];
            header("Location: index.php");
        } else {
            $error = "Błędne hasło!";
        }
    } else {
        $error = "Nie znaleziono użytkownika!";
    }
}
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>QuadsLuxe - Logowanie</title>
    <style>
        
        body { font-family: , sans-serif; background: #f4f4f4; display: flex; justify-content: center; align-items: center; height: 100vh; margin: 0; }
        .form-card { background: white; padding: 40px; border-radius: 8px; box-shadow: 0 4px 15px rgba(0,0,0,0.1); width: 350px; }
        h2 { text-align: center; color: #333; }
        input { width: 100%; padding: 12px; margin: 10px 0; border: 1px solid #ddd; border-radius: 4px; box-sizing: border-box; }
        button { width: 100%; padding: 12px; background: #000; color: white; border: none; border-radius: 4px; cursor: pointer; }
        .error { color: red; text-align: center; }
    </style>
</head>
<body>
    <div class="form-card">
        <h2>Logowanie</h2>
        <?php if($error) echo "<p class='error'>$error</p>"; ?>
        <form method="POST">
            <input type="text" name="login" placeholder="Login" required>
            <input type="password" name="password" placeholder="Hasło" required>
            <button type="submit">ZALOGUJ SIĘ</button>
        </form>
        <p style="text-align:center">Nie masz konta? <a href="register.php">Zarejestruj się</a></p>
    </div>
</body>
</html>