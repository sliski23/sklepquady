<?php
if (!isset($_SESSION['user_rola'])) { exit(); }

// Sprawdzamy akcję: czy wyświetlić listę, czy prosty formularz dodawania
$action = isset($_GET['action']) ? $_GET['action'] : 'list';

// Pobieramy produkty z bazy danych
$wynik = $conn->query("SELECT * FROM produkty");
?>

<h2>Zawartość: Produkty</h2>

<?php if (isset($_SESSION['msg'])): ?>
    <p style="color: blue; font-weight: bold;"><?= $_SESSION['msg']; unset($_SESSION['msg']); ?></p>
<?php endif; ?>

<?php if ($action == 'add'): ?>
    <h3>Dodaj nowy produkt</h3>
    <form method="POST" action="add_product_process.php">
        Nazwa artykułu: <input type="text" name="nazwa" required><br><br>
        Cena (zł): <input type="number" step="0.01" name="cena" required><br><br>
        
        <button type="submit">Zapisz i dodaj</button> | 
        <a href="dashboard.php?page=produkty">[Anuluj]</a>
    </form>

<?php else: ?>
    <p>
        <a href="dashboard.php?page=produkty&action=add" style="background: #000; color: #fff; padding: 10px 20px; text-decoration: none; font-weight: bold;">
            Add Product
        </a>
    </p>

    <table border="1" cellpadding="5" style="border-collapse: collapse; width: 100%;">
        <thead>
            <tr style="background: #eee;">
                <th>Nazwa</th>
                <th>Cena</th>
            </tr>
        </thead>
        <tbody>
            <?php if ($wynik->num_rows == 0): ?>
                <tr>
                    <td colspan="2" align="center">Brak produktów. Kliknij przycisk powyżej, aby dodać quada.</td>
                </tr>
            <?php else: ?>
                <?php while($row = $wynik->fetch_assoc()): ?>
                <tr>
                    <td><?= htmlspecialchars($row['nazwa']) ?></td>
                    <td><?= $row['cena'] ?> zł</td>
                </tr>
                <?php endwhile; ?>
            <?php endif; ?>
        </tbody>
    </table>

<?php endif; ?>