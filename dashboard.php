<?php
session_start();
require_once "db.php";

// Definiujemy zmienną na samym początku, żeby uniknąć błędów Warning
$page = isset($_GET['page']) ? $_GET['page'] : 'home';

// Wytrych testowy dla konta qqq
$_SESSION['user_login'] = 'qqq';
$_SESSION['user_rola'] = 'admin';

$uprawnione_role = ['admin', 'manager', 'dostawca'];
if (!isset($_SESSION['user_rola']) || !in_array($_SESSION['user_rola'], $uprawnione_role)) {
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Dashboard - QuadsLuxe</title>
    <style>
        body { font-family: sans-serif; margin: 0; padding: 20px; background: #fff; }
        
        /* Górna ramka */
        header { 
            border: 2px solid #000; 
            padding: 20px; 
            margin-bottom: 20px; 
            text-align: center; 
        }

        /* Układ dwukolumnowy z makiety */
        .wrapper { 
            display: flex; 
            gap: 20px; 
            min-height: 400px; 
        }

        /* Lewa ramka (Menu) */
        aside { 
            border: 2px solid #000; 
            width: 200px; 
            padding: 15px; 
        }
        
        aside ul { list-style: none; padding: 0; margin: 0; }
        aside ul li { margin-bottom: 15px; }
        aside ul li a { 
            text-decoration: none; 
            color: #000; 
            font-weight: bold; 
            display: block; 
        }

        /* Prawa ramka (Zawartość) */
        main { 
            border: 2px solid #000; 
            flex-grow: 1; 
            padding: 20px; 
        }

        .user-info { font-size: 0.9em; float: right; }
    </style>
</head>
<body>

    <header>
        <div class="user-info">
            Zalogowany: <strong><?= htmlspecialchars($_SESSION['user_login']) ?></strong> | <a href="index.php">Wyjdź</a>
        </div>
        <h1>PANEL</h1>
    </header>

    <div class="wrapper">
        <aside>
            <ul>
                <li><a href="dashboard.php?page=uzytkownicy">Uzytkownicy</a></li>
                <li><a href="dashboard.php?page=klienci">Klienci</a></li>
                <li><a href="dashboard.php?page=produkty">Produkty</a></li>
                <li><a href="dashboard.php?page=platnosci">Platnosci</a></li>
            </ul>
        </aside>

        <main>
            <?php
            // Wczytywanie odpowiedniej podstrony do prawej ramki
            switch ($page) {
                case 'uzytkownicy':
                    echo "<h2>Zawartość: Uzytkownicy</h2>";
                    break;
                case 'klienci':
                    echo "<h2>Zawartość: Klienci</h2>";
                    break;
                case 'platnosci':
                    echo "<h2>Zawartość: Platnosci</h2>";
                    break;
                case 'produkty':
                    include "admin_produkty.php";
                    break;
                default:
                    echo "<h2>Strona główna panelu</h2><p>Wybierz pozycję z menu po lewej stronie.</p>";
                    break;
            }
            ?>
        </main>
    </div>

</body>
</html>