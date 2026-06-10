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
        .hero { background: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)),  url('quad.jpg');
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
            
            <?php 
            <?php session_start(); ?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quad - Wynajem Quadów</title>
    <style>
        body { 
            margin: 0; 
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; 
            background-color: #f9f9f9;
            color: #333;
        }
        nav { 
            display: flex; 
            justify-content: space-between; 
            padding: 15px 50px; 
            background: #fff; 
            align-items: center; 
            border-bottom: 1px solid #eee; 
            box-shadow: 0 2px 5px rgba(0,0,0,0.05);
        }
        .logo {
            font-size: 22px;
            letter-spacing: 1px;
        }
        .nav-links {
            display: flex;
            align-items: center;
            gap: 20px;
        }
        .nav-links a { 
            text-decoration: none; 
            color: #444; 
            font-weight: 500; 
            transition: color 0.3s;
        }
        .nav-links a:hover {
            color: #000;
        }
        .btn { 
            padding: 10px 22px; 
            background: #000; 
            color: #fff !important; 
            text-decoration: none; 
            border-radius: 6px; 
            font-weight: bold;
            transition: background 0.3s;
        }
        .btn:hover {
            background: #222;
        }
        .btn-secondary {
            padding: 10px 22px; 
            background: #e0e0e0; 
            color: #000 !important; 
            text-decoration: none; 
            border-radius: 6px; 
            font-weight: bold;
            transition: background 0.3s;
        }
        .btn-secondary:hover {
            background: #d5d5d5;
        }
        .hero { 
            background: linear-gradient(rgba(0,0,0,0.65), rgba(0,0,0,0.65)), url('quad.jpg');
            background-size: cover;          
            background-repeat: no-repeat;    
            background-position: center;     
            height: 450px; 
            display: flex; 
            flex-direction: column; 
            justify-content: center; 
            align-items: center; 
            color: white; 
            text-align: center; 
            padding: 0 20px;
        }
        .hero h1 {
            font-size: 42px;
            margin-bottom: 10px;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.5);
        }
        .hero p {
            font-size: 18px;
            margin-bottom: 25px;
            color: #ddd;
        }
        .products-section {
            padding: 60px 50px;
            max-width: 1200px;
            margin: 0 auto;
        }
        .products-section h2 {
            text-align: center;
            font-size: 32px;
            margin-bottom: 40px;
            position: relative;
        }
        .products-section h2::after {
            content: '';
            display: block;
            width: 60px;
            height: 3px;
            background: #000;
            margin: 10px auto 0 auto;
        }
        .products-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
        }
        .product-card {
            background: #fff;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 4px 15px rgba(0,0,0,0.05);
            transition: transform 0.3s, box-shadow 0.3s;
            display: flex;
            flex-direction: column;
        }
        .product-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 25px rgba(0,0,0,0.1);
        }
        .product-img {
            width: 100%;
            height: 220px;
            object-fit: cover;
            background-color: #ddd;
        }
        .product-info {
            padding: 20px;
            display: flex;
            flex-direction: column;
            flex-grow: 1;
        }
        .product-info h3 {
            margin: 0 0 10px 0;
            font-size: 20px;
        }
        .product-info p {
            color: #666;
            font-size: 14px;
            line-height: 1.5;
            margin: 0 0 20px 0;
            flex-grow: 1;
        }
        .product-bottom {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .product-price {
            font-size: 18px;
            font-weight: bold;
            color: #000;
        }
    </style>
</head>
<body>

    <nav>
        <div class="logo"><strong>QuadsLuxe</strong></div>
        <div class="nav-links">
            <?php 
            if (isset($_SESSION['user_login']) && ($_SESSION['user_login'] == 'qqq' || (isset($_SESSION['user_rola']) && $_SESSION['user_rola'] == 'admin'))) {
                echo '<a href="dashboard.php?page=produkty" style="color: #000; font-weight: bold;">Panel Admina</a>';
            } else {
                echo '<a href="#oferta">Produkty</a>';
            }
            ?>
            <a href="#">Cennik</a>
            
            <?php if(isset($_SESSION['user_login'])): ?>
                <span style="font-size: 14px; color: #555;">Witaj, <strong><?= htmlspecialchars($_SESSION['user_login']) ?></strong>!</span>
                <a href="logout.php" class="btn">Wyloguj</a>
            <?php else: ?>
                <a href="login.php" class="btn">Logowanie</a>
                <a href="register.php" class="btn-secondary">Rejestracja</a>
            <?php endif; ?>
        </div>
    </nav>

    <div class="hero">
        <h1>Potężne Quady na każdą trasę</h1>
        <p>Odkryj naszą flotę pojazdów ATV i poczuj prawdziwą adrenalinę</p>
        <a href="#oferta" class="btn">Zobacz ofertę</a>
    </div>

    <section class="products-section" id="oferta">
        <h2>Nasza Flota Quadów</h2>
        
        <div class="products-grid">
            <div class="product-card">
                <img src="quad.jpg" alt="Quad Sport" class="product-img">
                <div class="product-info">
                    <h3>Yamaha Raptor 700R</h3>
                    <p>Sportowy król bezdroży. Idealny wybór dla osób szukających ekstremalnych wrażeń na piaszczystych torach i zakrętach.</p>
                    <div class="product-bottom">
                        <span class="product-price">350 zł / doba</span>
                        <a href="#" class="btn" style="font-size: 14px; padding: 8px 15px;">Wynajmij</a>
                    </div>
                </div>
            </div>

            <div class="product-card">
                <img src="quad.jpg" alt="Quad Przeprawowy" class="product-img">
                <div class="product-info">
                    <h3>Can-Am Outlander 1000 PRO</h3>
                    <p>Potężny napęd 4x4, wyciągarka i niezrównana moc. Stworzony do pokonywania najgłębszego błota i górskich szlaków.</p>
                    <div class="product-bottom">
                        <span class="product-price">450 zł / doba</span>
                        <a href="#" class="btn" style="font-size: 14px; padding: 8px 15px;">Wynajmij</a>
                    </div>
                </div>
            </div>

            <div class="product-card">
                <img src="quad.jpg" alt="Quad Turystyczny" class="product-img">
                <div class="product-info">
                    <h3>Polaris Sportsman 570</h3>
                    <p>Niezwykle komfortowy quad turystyczny. Doskonały na długie wycieczki krajoznawcze w pojedynkę lub we dwoje.</p>
                    <div class="product-bottom">
                        <span class="product-price">290 zł / doba</span>
                        <a href="#" class="btn" style="font-size: 14px; padding: 8px 15px;">Wynajmij</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

</body>
</html><?php session_start(); ?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quad - Wynajem Quadów</title>
    <style>
        body { 
            margin: 0; 
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; 
            background-color: #f9f9f9;
            color: #333;
        }
        nav { 
            display: flex; 
            justify-content: space-between; 
            padding: 15px 50px; 
            background: #fff; 
            align-items: center; 
            border-bottom: 1px solid #eee; 
            box-shadow: 0 2px 5px rgba(0,0,0,0.05);
        }
        .logo {
            font-size: 22px;
            letter-spacing: 1px;
        }
        .nav-links {
            display: flex;
            align-items: center;
            gap: 20px;
        }
        .nav-links a { 
            text-decoration: none; 
            color: #444; 
            font-weight: 500; 
            transition: color 0.3s;
        }
        .nav-links a:hover {
            color: #000;
        }
        .btn { 
            padding: 10px 22px; 
            background: #000; 
            color: #fff !important; 
            text-decoration: none; 
            border-radius: 6px; 
            font-weight: bold;
            transition: background 0.3s;
        }
        .btn:hover {
            background: #222;
        }
        .btn-secondary {
            padding: 10px 22px; 
            background: #e0e0e0; 
            color: #000 !important; 
            text-decoration: none; 
            border-radius: 6px; 
            font-weight: bold;
            transition: background 0.3s;
        }
        .btn-secondary:hover {
            background: #d5d5d5;
        }
        .hero { 
            background: linear-gradient(rgba(0,0,0,0.65), rgba(0,0,0,0.65)), url('quad.jpg');
            background-size: cover;          
            background-repeat: no-repeat;    
            background-position: center;     
            height: 450px; 
            display: flex; 
            flex-direction: column; 
            justify-content: center; 
            align-items: center; 
            color: white; 
            text-align: center; 
            padding: 0 20px;
        }
        .hero h1 {
            font-size: 42px;
            margin-bottom: 10px;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.5);
        }
        .hero p {
            font-size: 18px;
            margin-bottom: 25px;
            color: #ddd;
        }
        .products-section {
            padding: 60px 50px;
            max-width: 1200px;
            margin: 0 auto;
        }
        .products-section h2 {
            text-align: center;
            font-size: 32px;
            margin-bottom: 40px;
            position: relative;
        }
        .products-section h2::after {
            content: '';
            display: block;
            width: 60px;
            height: 3px;
            background: #000;
            margin: 10px auto 0 auto;
        }
        .products-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
        }
        .product-card {
            background: #fff;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 4px 15px rgba(0,0,0,0.05);
            transition: transform 0.3s, box-shadow 0.3s;
            display: flex;
            flex-direction: column;
        }
        .product-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 25px rgba(0,0,0,0.1);
        }
        .product-img {
            width: 100%;
            height: 220px;
            object-fit: cover;
            background-color: #ddd;
        }
        .product-info {
            padding: 20px;
            display: flex;
            flex-direction: column;
            flex-grow: 1;
        }
        .product-info h3 {
            margin: 0 0 10px 0;
            font-size: 20px;
        }
        .product-info p {
            color: #666;
            font-size: 14px;
            line-height: 1.5;
            margin: 0 0 20px 0;
            flex-grow: 1;
        }
        .product-bottom {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .product-price {
            font-size: 18px;
            font-weight: bold;
            color: #000;
        }
    </style>
</head>
<body>

    <nav>
        <div class="logo"><strong>QuadsLuxe</strong></div>
        <div class="nav-links">
            <?php 
            if (isset($_SESSION['user_login']) && ($_SESSION['user_login'] == 'qqq' || (isset($_SESSION['user_rola']) && $_SESSION['user_rola'] == 'admin'))) {
                echo '<a href="dashboard.php?page=produkty" style="color: #000; font-weight: bold;">Panel Admina</a>';
            } else {
                echo '<a href="#oferta">Produkty</a>';
            }
            ?>
            <a href="#">Cennik</a>
            
            <?php if(isset($_SESSION['user_login'])): ?>
                <span style="font-size: 14px; color: #555;">Witaj, <strong><?= htmlspecialchars($_SESSION['user_login']) ?></strong>!</span>
                <a href="logout.php" class="btn">Wyloguj</a>
            <?php else: ?>
                <a href="login.php" class="btn">Logowanie</a>
                <a href="register.php" class="btn-secondary">Rejestracja</a>
            <?php endif; ?>
        </div>
    </nav>

    <div class="hero">
        <h1>Potężne Quady na każdą trasę</h1>
        <p>Odkryj naszą flotę pojazdów ATV i poczuj prawdziwą adrenalinę</p>
        <a href="#oferta" class="btn">Zobacz ofertę</a>
    </div>

    <section class="products-section" id="oferta">
        <h2>Nasza Flota Quadów</h2>
        
        <div class="products-grid">
            <div class="product-card">
                <img src="quad.jpg" alt="Quad Sport" class="product-img">
                <div class="product-info">
                    <h3>Yamaha Raptor 700R</h3>
                    <p>Sportowy król bezdroży. Idealny wybór dla osób szukających ekstremalnych wrażeń na piaszczystych torach i zakrętach.</p>
                    <div class="product-bottom">
                        <span class="product-price">350 zł / doba</span>
                        <a href="#" class="btn" style="font-size: 14px; padding: 8px 15px;">Wynajmij</a>
                    </div>
                </div>
            </div>

            <div class="product-card">
                <img src="quad.jpg" alt="Quad Przeprawowy" class="product-img">
                <div class="product-info">
                    <h3>Can-Am Outlander 1000 PRO</h3>
                    <p>Potężny napęd 4x4, wyciągarka i niezrównana moc. Stworzony do pokonywania najgłębszego błota i górskich szlaków.</p>
                    <div class="product-bottom">
                        <span class="product-price">450 zł / doba</span>
                        <a href="#" class="btn" style="font-size: 14px; padding: 8px 15px;">Wynajmij</a>
                    </div>
                </div>
            </div>

            <div class="product-card">
                <img src="quad.jpg" alt="Quad Turystyczny" class="product-img">
                <div class="product-info">
                    <h3>Polaris Sportsman 570</h3>
                    <p>Niezwykle komfortowy quad turystyczny. Doskonały na długie wycieczki krajoznawcze w pojedynkę lub we dwoje.</p>
                    <div class="product-bottom">
                        <span class="product-price">290 zł / doba</span>
                        <a href="#" class="btn" style="font-size: 14px; padding: 8px 15px;">Wynajmij</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

</body>
</html><?php session_start(); ?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quad - Wynajem Quadów</title>
    <style>
        body { 
            margin: 0; 
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; 
            background-color: #f9f9f9;
            color: #333;
        }
        nav { 
            display: flex; 
            justify-content: space-between; 
            padding: 15px 50px; 
            background: #fff; 
            align-items: center; 
            border-bottom: 1px solid #eee; 
            box-shadow: 0 2px 5px rgba(0,0,0,0.05);
        }
        .logo {
            font-size: 22px;
            letter-spacing: 1px;
        }
        .nav-links {
            display: flex;
            align-items: center;
            gap: 20px;
        }
        .nav-links a { 
            text-decoration: none; 
            color: #444; 
            font-weight: 500; 
            transition: color 0.3s;
        }
        .nav-links a:hover {
            color: #000;
        }
        .btn { 
            padding: 10px 22px; 
            background: #000; 
            color: #fff !important; 
            text-decoration: none; 
            border-radius: 6px; 
            font-weight: bold;
            transition: background 0.3s;
        }
        .btn:hover {
            background: #222;
        }
        .btn-secondary {
            padding: 10px 22px; 
            background: #e0e0e0; 
            color: #000 !important; 
            text-decoration: none; 
            border-radius: 6px; 
            font-weight: bold;
            transition: background 0.3s;
        }
        .btn-secondary:hover {
            background: #d5d5d5;
        }
        .hero { 
            background: linear-gradient(rgba(0,0,0,0.65), rgba(0,0,0,0.65)), url('quad.jpg');
            background-size: cover;          
            background-repeat: no-repeat;    
            background-position: center;     
            height: 450px; 
            display: flex; 
            flex-direction: column; 
            justify-content: center; 
            align-items: center; 
            color: white; 
            text-align: center; 
            padding: 0 20px;
        }
        .hero h1 {
            font-size: 42px;
            margin-bottom: 10px;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.5);
        }
        .hero p {
            font-size: 18px;
            margin-bottom: 25px;
            color: #ddd;
        }
        .products-section {
            padding: 60px 50px;
            max-width: 1200px;
            margin: 0 auto;
        }
        .products-section h2 {
            text-align: center;
            font-size: 32px;
            margin-bottom: 40px;
            position: relative;
        }
        .products-section h2::after {
            content: '';
            display: block;
            width: 60px;
            height: 3px;
            background: #000;
            margin: 10px auto 0 auto;
        }
        .products-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
        }
        .product-card {
            background: #fff;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 4px 15px rgba(0,0,0,0.05);
            transition: transform 0.3s, box-shadow 0.3s;
            display: flex;
            flex-direction: column;
        }
        .product-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 25px rgba(0,0,0,0.1);
        }
        .product-img {
            width: 100%;
            height: 220px;
            object-fit: cover;
            background-color: #ddd;
        }
        .product-info {
            padding: 20px;
            display: flex;
            flex-direction: column;
            flex-grow: 1;
        }
        .product-info h3 {
            margin: 0 0 10px 0;
            font-size: 20px;
        }
        .product-info p {
            color: #666;
            font-size: 14px;
            line-height: 1.5;
            margin: 0 0 20px 0;
            flex-grow: 1;
        }
        .product-bottom {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .product-price {
            font-size: 18px;
            font-weight: bold;
            color: #000;
        }
    </style>
</head>
<body>

    <nav>
        <div class="logo"><strong>QuadsLuxe</strong></div>
        <div class="nav-links">
            <?php 
            if (isset($_SESSION['user_login']) && ($_SESSION['user_login'] == 'qqq' || (isset($_SESSION['user_rola']) && $_SESSION['user_rola'] == 'admin'))) {
                echo '<a href="dashboard.php?page=produkty" style="color: #000; font-weight: bold;">Panel Admina</a>';
            } else {
                echo '<a href="#oferta">Produkty</a>';
            }
            ?>
            <a href="#">Cennik</a>
            
            <?php if(isset($_SESSION['user_login'])): ?>
                <span style="font-size: 14px; color: #555;">Witaj, <strong><?= htmlspecialchars($_SESSION['user_login']) ?></strong>!</span>
                <a href="logout.php" class="btn">Wyloguj</a>
            <?php else: ?>
                <a href="login.php" class="btn">Logowanie</a>
                <a href="register.php" class="btn-secondary">Rejestracja</a>
            <?php endif; ?>
        </div>
    </nav>

    <div class="hero">
        <h1>Potężne Quady na każdą trasę</h1>
        <p>Odkryj naszą flotę pojazdów ATV i poczuj prawdziwą adrenalinę</p>
        <a href="#oferta" class="btn">Zobacz ofertę</a>
    </div>

    <section class="products-section" id="oferta">
        <h2>Nasza Flota Quadów</h2>
        
        <div class="products-grid">
            <div class="product-card">
                <img src="quad.jpg" alt="Quad Sport" class="product-img">
                <div class="product-info">
                    <h3>Yamaha Raptor 700R</h3>
                    <p>Sportowy król bezdroży. Idealny wybór dla osób szukających ekstremalnych wrażeń na piaszczystych torach i zakrętach.</p>
                    <div class="product-bottom">
                        <span class="product-price">350 zł / doba</span>
                        <a href="#" class="btn" style="font-size: 14px; padding: 8px 15px;">Wynajmij</a>
                    </div>
                </div>
            </div>

            <div class="product-card">
                <img src="quad.jpg" alt="Quad Przeprawowy" class="product-img">
                <div class="product-info">
                    <h3>Can-Am Outlander 1000 PRO</h3>
                    <p>Potężny napęd 4x4, wyciągarka i niezrównana moc. Stworzony do pokonywania najgłębszego błota i górskich szlaków.</p>
                    <div class="product-bottom">
                        <span class="product-price">450 zł / doba</span>
                        <a href="#" class="btn" style="font-size: 14px; padding: 8px 15px;">Wynajmij</a>
                    </div>
                </div>
            </div>

            <div class="product-card">
                <img src="quad.jpg" alt="Quad Turystyczny" class="product-img">
                <div class="product-info">
                    <h3>Polaris Sportsman 570</h3>
                    <p>Niezwykle komfortowy quad turystyczny. Doskonały na długie wycieczki krajoznawcze w pojedynkę lub we dwoje.</p>
                    <div class="product-bottom">
                        <span class="product-price">290 zł / doba</span>
                        <a href="#" class="btn" style="font-size: 14px; padding: 8px 15px;">Wynajmij</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

</body>
</html><?php session_start(); ?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quad - Wynajem Quadów</title>
    <style>
        body { 
            margin: 0; 
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; 
            background-color: #f9f9f9;
            color: #333;
        }
        nav { 
            display: flex; 
            justify-content: space-between; 
            padding: 15px 50px; 
            background: #fff; 
            align-items: center; 
            border-bottom: 1px solid #eee; 
            box-shadow: 0 2px 5px rgba(0,0,0,0.05);
        }
        .logo {
            font-size: 22px;
            letter-spacing: 1px;
        }
        .nav-links {
            display: flex;
            align-items: center;
            gap: 20px;
        }
        .nav-links a { 
            text-decoration: none; 
            color: #444; 
            font-weight: 500; 
            transition: color 0.3s;
        }
        .nav-links a:hover {
            color: #000;
        }
        .btn { 
            padding: 10px 22px; 
            background: #000; 
            color: #fff !important; 
            text-decoration: none; 
            border-radius: 6px; 
            font-weight: bold;
            transition: background 0.3s;
        }
        .btn:hover {
            background: #222;
        }
        .btn-secondary {
            padding: 10px 22px; 
            background: #e0e0e0; 
            color: #000 !important; 
            text-decoration: none; 
            border-radius: 6px; 
            font-weight: bold;
            transition: background 0.3s;
        }
        .btn-secondary:hover {
            background: #d5d5d5;
        }
        .hero { 
            background: linear-gradient(rgba(0,0,0,0.65), rgba(0,0,0,0.65)), url('quad.jpg');
            background-size: cover;          
            background-repeat: no-repeat;    
            background-position: center;     
            height: 450px; 
            display: flex; 
            flex-direction: column; 
            justify-content: center; 
            align-items: center; 
            color: white; 
            text-align: center; 
            padding: 0 20px;
        }
        .hero h1 {
            font-size: 42px;
            margin-bottom: 10px;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.5);
        }
        .hero p {
            font-size: 18px;
            margin-bottom: 25px;
            color: #ddd;
        }
        .products-section {
            padding: 60px 50px;
            max-width: 1200px;
            margin: 0 auto;
        }
        .products-section h2 {
            text-align: center;
            font-size: 32px;
            margin-bottom: 40px;
            position: relative;
        }
        .products-section h2::after {
            content: '';
            display: block;
            width: 60px;
            height: 3px;
            background: #000;
            margin: 10px auto 0 auto;
        }
        .products-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
        }
        .product-card {
            background: #fff;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 4px 15px rgba(0,0,0,0.05);
            transition: transform 0.3s, box-shadow 0.3s;
            display: flex;
            flex-direction: column;
        }
        .product-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 25px rgba(0,0,0,0.1);
        }
        .product-img {
            width: 100%;
            height: 220px;
            object-fit: cover;
            background-color: #ddd;
        }
        .product-info {
            padding: 20px;
            display: flex;
            flex-direction: column;
            flex-grow: 1;
        }
        .product-info h3 {
            margin: 0 0 10px 0;
            font-size: 20px;
        }
        .product-info p {
            color: #666;
            font-size: 14px;
            line-height: 1.5;
            margin: 0 0 20px 0;
            flex-grow: 1;
        }
        .product-bottom {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .product-price {
            font-size: 18px;
            font-weight: bold;
            color: #000;
        }
    </style>
</head>
<body>

    <nav>
        <div class="logo"><strong>QuadsLuxe</strong></div>
        <div class="nav-links">
            <?php 
            if (isset($_SESSION['user_login']) && ($_SESSION['user_login'] == 'qqq' || (isset($_SESSION['user_rola']) && $_SESSION['user_rola'] == 'admin'))) {
                echo '<a href="dashboard.php?page=produkty" style="color: #000; font-weight: bold;">Panel Admina</a>';
            } else {
                echo '<a href="#oferta">Produkty</a>';
            }
            ?>
            <a href="#">Cennik</a>
            
            <?php if(isset($_SESSION['user_login'])): ?>
                <span style="font-size: 14px; color: #555;">Witaj, <strong><?= htmlspecialchars($_SESSION['user_login']) ?></strong>!</span>
                <a href="logout.php" class="btn">Wyloguj</a>
            <?php else: ?>
                <a href="login.php" class="btn">Logowanie</a>
                <a href="register.php" class="btn-secondary">Rejestracja</a>
            <?php endif; ?>
        </div>
    </nav>

    <div class="hero">
        <h1>Potężne Quady na każdą trasę</h1>
        <p>Odkryj naszą flotę pojazdów ATV i poczuj prawdziwą adrenalinę</p>
        <a href="#oferta" class="btn">Zobacz ofertę</a>
    </div>

    <section class="products-section" id="oferta">
        <h2>Nasza Flota Quadów</h2>
        
        <div class="products-grid">
            <div class="product-card">
                <img src="quad.jpg" alt="Quad Sport" class="product-img">
                <div class="product-info">
                    <h3>Yamaha Raptor 700R</h3>
                    <p>Sportowy król bezdroży. Idealny wybór dla osób szukających ekstremalnych wrażeń na piaszczystych torach i zakrętach.</p>
                    <div class="product-bottom">
                        <span class="product-price">350 zł / doba</span>
                        <a href="#" class="btn" style="font-size: 14px; padding: 8px 15px;">Wynajmij</a>
                    </div>
                </div>
            </div>

            <div class="product-card">
                <img src="quad.jpg" alt="Quad Przeprawowy" class="product-img">
                <div class="product-info">
                    <h3>Can-Am Outlander 1000 PRO</h3>
                    <p>Potężny napęd 4x4, wyciągarka i niezrównana moc. Stworzony do pokonywania najgłębszego błota i górskich szlaków.</p>
                    <div class="product-bottom">
                        <span class="product-price">450 zł / doba</span>
                        <a href="#" class="btn" style="font-size: 14px; padding: 8px 15px;">Wynajmij</a>
                    </div>
                </div>
            </div>

            <div class="product-card">
                <img src="quad.jpg" alt="Quad Turystyczny" class="product-img">
                <div class="product-info">
                    <h3>Polaris Sportsman 570</h3>
                    <p>Niezwykle komfortowy quad turystyczny. Doskonały na długie wycieczki krajoznawcze w pojedynkę lub we dwoje.</p>
                    <div class="product-bottom">
                        <span class="product-price">290 zł / doba</span>
                        <a href="#" class="btn" style="font-size: 14px; padding: 8px 15px;">Wynajmij</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

</body>
</html>
            if (isset($_SESSION['user_login']) && ($_SESSION['user_login'] == 'qqq' || (isset($_SESSION['user_rola']) && $_SESSION['user_rola'] == 'admin'))) {
                echo '<a href="dashboard.php?page=produkty" style="color: black; font-weight: bold;">Produkty</a>';
            } else {
                echo '<a href="#">Produkty</a>';
            }
            ?>
            
            <a href="#">Cennik</a>
            
            <?php if(isset($_SESSION['user_login'])): ?>
                <span>Witaj, <?= htmlspecialchars($_SESSION['user_login']) ?>!</span>
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