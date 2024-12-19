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
            background: url('img/bg6.jpg') no-repeat center center;
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
        #history {
            background-color: #ffffff;
        }
        #history h2 {
            font-family: 'Playfair Display', serif;
            font-size: 3rem;
            color: #588157;
        }
        .history-content {
            line-height: 1.8;
            font-size: 1.2rem;
            color: #4a4a4a;
        }
        .timeline {
            border-left: 3px solid #d8e2dc;
            padding-left: 2rem;
            margin-top: 2rem;
        }
        .timeline h3 {
            font-size: 1.8rem;
            color: #588157;
        }
        .timeline p {
            font-size: 1.1rem;
            margin-bottom: 1.5rem;
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
        <h1>История</h1>
    </div>

    <section id="history">
        <div class="container">
            <h2 class="text-center mb-4">Наша история</h2>
            <div class="history-content">
                <p>Частный детский сад был основан в 2005 году с целью создания уютной и комфортной среды для обучения и развития детей. За годы своего существования мы прошли долгий путь от небольшого семейного учреждения до современного образовательного центра, который гордится своими традициями и достижениями.</p>
            </div>
            <div class="timeline">
                <h3>2005 год</h3>
                <p>Открытие детского сада. Воспитание и обучение начали 10 детей под руководством 2 опытных педагогов.</p>
                <h3>2010 год</h3>
                <p>Расширение территории. Построены новые игровые площадки и отдельные классы для занятий.</p>
                <h3>2015 год</h3>
                <p>Внедрение инновационных образовательных методик. Началась работа по развитию индивидуального подхода к каждому ребёнку.</p>
                <h3>2020 год</h3>
                <p>Переход на смешанное обучение. Образовательная платформа для дистанционного взаимодействия с родителями и детьми.</p>
                <h3>2024 год</h3>
                <p>Запуск новых программ развития. Мы продолжаем стремиться к совершенству, создавая лучшие условия для наших воспитанников.</p>
            </div>
        </div>
    </section>

    <footer class="footer">
        <p>&copy; 2024 Страна чудес. Все права защищены.</p>
    </footer>

    <script src="bootstrap.bundle.min.js"></script>
</body>
</html>
