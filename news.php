<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Страна чудес</title>
    <link href="bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700&family=Playfair+Display:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Lato', sans-serif;
            background-color: #f6f4f1;
            color: #4a4a4a;
        }
        .navbar {
            background-color: #d8e2dc;
        }
        .navbar-brand {
            font-family: 'Playfair Display', serif;
            font-size: 2rem;
            font-weight: 700;
            color: #588157;
        }
        .nav-link {
            font-size: 1.2rem;
            color: #4a4a4a;
        }
        .nav-link:hover {
            color: #588157;
        }
        .hero {
            background: url('img/bg5.jpg') no-repeat center center;
            background-size: cover;
            height: 400px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #ffffff;
            text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.4);
        }
        .hero h1 {
            font-family: 'Playfair Display', serif;
            font-size: 4rem;
        }
        section {
            padding: 4rem 0;
        }
        #news {
            background-color: #ffffff;
        }
        #news h2 {
            font-family: 'Playfair Display', serif;
            font-size: 3rem;
            color: #588157;
        }
        .news-item {
            border-bottom: 1px solid #eaeaea;
            margin-bottom: 2rem;
            padding-bottom: 1rem;
        }
        .news-item:last-child {
            border-bottom: none;
        }
        .news-item h3 {
            font-size: 1.8rem;
            color: #4a4a4a;
        }
        .news-item p {
            font-size: 1.1rem;
            color: #6b6b6b;
        }
        .footer {
            background-color: #588157;
            color: white;
            text-align: center;
            padding: 1rem 0;
        }
        .footer p {
            margin: 0;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <a class="navbar-brand" href="#">Страна чудес</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="index.php">Главная</a></li>
                    <li class="nav-item"><a class="nav-link" href="about_us.php">О нас</a></li>
                    <li class="nav-item"><a class="nav-link" href="contacts.php">Контакты</a></li>
                    <li class="nav-item"><a class="nav-link" href="info.php">Информация</a></li>
                    <li class="nav-item"><a class="nav-link" href="news.php">Новости</a></li>
                    <li class="nav-item"><a class="nav-link" href="history.php">История</a></li>
                    <li class="nav-item"><a class="nav-link" href="for_clients.php">Клиентам</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="hero">
        <h1>Новости</h1>
    </div>

    <section id="news">
        <div class="container">
            <h2 class="text-center mb-4">Последние новости</h2>
            <div class="news-item">
                <h3>Новая игровая площадка</h3>
                <p>Наш детский сад открыл новую игровую площадку, где дети смогут весело и безопасно проводить время. Приглашаем всех родителей посетить нас!</p>
            </div>
            <div class="news-item">
                <h3>Летний лагерь</h3>
                <p>С 1 июня начинается запись в летний лагерь для детей 3-6 лет. Уникальная программа включает в себя мастер-классы, спортивные игры и экскурсии.</p>
            </div>
            <div class="news-item">
                <h3>Обновленное меню</h3>
                <p>Мы обновили меню для наших маленьких воспитанников. Теперь в рационе больше свежих овощей, фруктов и вкусных десертов.</p>
            </div>
        </div>
    </section>

    <footer class="footer">
        <p>&copy; 2024 Страна чудес. Все права защищены.</p>
    </footer>

    <script src="bootstrap.bundle.min.js"></script>
</body>
</html>
