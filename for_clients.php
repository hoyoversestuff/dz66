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
            background: url('img/bg7.jpg') no-repeat center center;
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
        #client-info h2 {
            font-family: 'Playfair Display', serif;
            font-size: 3rem;
            color: #588157;
            margin-bottom: 2rem;
        }
        .info-card {
            background-color: #ffffff;
            border: 1px solid #d8e2dc;
            border-radius: 8px;
            padding: 2rem;
            margin-bottom: 2rem;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .info-card h4 {
            font-size: 1.5rem;
            color: #588157;
            margin-bottom: 1rem;
        }
        .info-card p {
            font-size: 1.2rem;
            color: #4a4a4a;
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
        <h1>Клиентам</h1>
    </div>

    <section id="client-info">
        <div class="container">
            <h2 class="text-center">Информация для родителей</h2>

            <div class="info-card">
                <h4>Необходимые документы</h4>
                <p>Для зачисления ребёнка в детский сад необходимо предоставить:</p>
                <ul>
                    <li>Свидетельство о рождении ребёнка</li>
                    <li>Паспорт одного из родителей (законного представителя)</li>
                    <li>Медицинскую карту ребёнка с актуальными прививками</li>
                    <li>Анкету с контактными данными</li>
                </ul>
            </div>

            <div class="info-card">
                <h4>Возрастные ограничения</h4>
                <p>Наш детский сад принимает детей в возрасте от 3 до 7 лет. Для каждой возрастной группы разработаны специальные образовательные программы и игровые занятия.</p>
            </div>

            <div class="info-card">
                <h4>Режим работы</h4>
                <p>Мы работаем с понедельника по пятницу с 8:00 до 18:00. В случае необходимости продлённого пребывания ребёнка, уточните информацию у администратора.</p>
            </div>

            <div class="info-card">
                <h4>Стоимость обучения</h4>
                <p>Стоимость услуг нашего детского сада зависит от выбранного пакета обучения. Подробную информацию можно узнать в разделе <a href="info.php">"Информация"</a> или у администратора.</p>
            </div>

            <div class="info-card">
                <h4>Контакты</h4>
                <p>Если у вас остались вопросы, вы можете связаться с нами по телефону: <strong>+7 (495) 123-45-67</strong> или написать на электронную почту: <strong>info@det-sad.ru</strong>.</p>
            </div>
        </div>
    </section>

    <footer class="footer">
        <p>&copy; 2024 Страна чудес. Все права защищены.</p>
    </footer>

    <script src="bootstrap.bundle.min.js"></script>
</body>
</html>
