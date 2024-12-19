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
            background: url('img/bg4.jpg') no-repeat center center;
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
        #price-list {
            background-color: #edf2f4;
        }
        #price-list h2 {
            color: #588157;
            font-family: 'Playfair Display', serif;
            font-size: 3rem;
        }
        #price-list table {
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }
        #price-list th, #price-list td {
            padding: 1rem;
            text-align: center;
        }
        #price-list th {
            background-color: #588157;
            color: #ffffff;
        }
        #price-list td {
            font-size: 1.1rem;
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
        <h1>Информация</h1>
    </div>

    <section id="price-list">
        <div class="container text-center">
            <h2 class="mb-4">Наши услуги и цены</h2>
            <p>Мы предлагаем разнообразные услуги для детей и их родителей. В таблице ниже вы найдете актуальные цены.</p>
            <div class="table-responsive mt-5">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Услуга</th>
                            <th>Описание</th>
                            <th>Цена (руб.)</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Базовая программа</td>
                            <td>Ежедневные занятия, игры, прогулки</td>
                            <td>15,000</td>
                        </tr>
                        <tr>
                            <td>Расширенная программа</td>
                            <td>Творческие мастер-классы, занятия по музыке</td>
                            <td>20,000</td>
                        </tr>
                        <tr>
                            <td>Индивидуальные занятия</td>
                            <td>Разработка личного плана обучения</td>
                            <td>2,500 за занятие</td>
                        </tr>
                        <tr>
                            <td>Питание</td>
                            <td>Полноценный рацион для детей</td>
                            <td>5,000</td>
                        </tr>
                        <tr>
                            <td>Дополнительные экскурсии</td>
                            <td>Развивающие поездки и мероприятия</td>
                            <td>3,000</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <footer class="footer">
        <p>&copy; 2024 Страна чудес. Все права защищены.</p>
    </footer>

    <script src="bootstrap.bundle.min.js"></script>
</body>
</html>
