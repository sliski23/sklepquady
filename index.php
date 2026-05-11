<?php session_start(); ?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quad - Wynajem Quadów</title>
    <style>
        body { margin: 0; font-family: sans-serif; }
        nav { display: flex; justify-content: space-between; padding: 20px 50px; background: #fff; align-items: center; border-bottom: 1px solid #eee; }
        .hero { background: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)), url('quad-bg.jpg'); /* dodaj własne foto */
                background-color: #555; height: 400px; display: flex; flex-direction: column; 
                justify-content: center; align-items: center; color: white; text-align: center; }
        .btn { padding: 10px 25px; background: #000; color: #fff; text-decoration: none; border-radius: 4px; }
        .nav-links a { margin-left: 20px; text-decoration: none; color: #333; font-weight: 500; }
    </style>
</head>
<body>
    <nav>
        <div class="logo"><strong>QuadsLuxe</strong></div>
        <div class="nav-links">
            <a href="#">Produkty</a>
            <a href="#">Cennik</a>
            <?php if(isset($_SESSION['user_login'])): ?>
                <span>Witaj, <?= $_SESSION['user_login'] ?>!</span>
                <a href="logout.php" class="btn">Wyloguj</a>
            <?php else: ?>
                <a href="login.php" class="btn">Logowanie</a>
                <a href="register.php" style="background: #333; color: white; padding: 10px 15px; border-radius: 4px; text-decoration: none;">Rejestracja</a>
            <?php endif; ?>
        </div>
    </nav>

    <div class="hero">
        <h1>Potężne Quady na każdą trasę</h1>
        <p>Odkryj naszą flotę pojazdów ATV i poczuj adrenalinę</p>
        <a href="#" class="btn">Zobacz ofertę</a>
    </div>
</body>
</html>