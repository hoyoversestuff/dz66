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
            background: url('img/bg3.jpg') no-repeat center center;
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
        #contacts {
            background-color: #edf2f4;
        }
        #contacts h2 {
            color: #588157;
            font-family: 'Playfair Display', serif;
            font-size: 3rem;
        }
        #contacts p {
            font-size: 1.1rem;
            line-height: 1.8;
        }
        #contacts .card {
            border: none;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
        }
        #contacts .card-title {
            color: #588157;
            font-family: 'Playfair Display', serif;
            font-size: 1.8rem;
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
            <a class="navbar-brand" href="#">Страна Чудес</a>
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
        <h1>Контакты</h1>
    </div>
    <section id="contacts">
        <div class="container text-center">
            <h2 class="mb-4">Свяжитесь с нами</h2>
            <p>Если у вас есть вопросы или вы хотите узнать больше о нашем детском саду, свяжитесь с нами любым удобным для вас способом.</p>
            <div class="row mt-5">
                <div class="col-md-4">
                    <div class="card p-3">
                        <div class="card-body">
                            <h5 class="card-title">Наш адрес</h5>
                            <p class="card-text">г. Москва, ул. Цветочная, 15</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card p-3">
                        <div class="card-body">
                            <h5 class="card-title">Телефон</h5>
                            <p class="card-text">+7 (495) 123-45-67</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card p-3">
                        <div class="card-body">
                            <h5 class="card-title">Электронная почта</h5>
                            <p class="card-text">info@detsad.ru</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer class="footer">
        <p>&copy; 2024 Частный детский сад. Все права защищены.</p>
    </footer>

    <script src="bootstrap.bundle.min.js"></script>
</body>
</html>
