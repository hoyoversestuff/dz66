<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Страна чудес</title>
    <link href="bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Amatic+SC:wght@400;700&family=Comfortaa:wght@300;400;700&display=swap" rel="stylesheet">
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
            background: url('img/kids.jpg') no-repeat center center;
            background-size: cover;
            height: 400px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #ffffff;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
        }
        .hero h1 {
            font-family: 'Playfair Display', serif;
            font-size: 4rem;
        }
        section {
            padding: 3rem 0;
        }
    
        #about h2, #clubs h2 {
            color: #588157;
            font-family: 'Playfair Display', serif;
            font-size: 3rem;
        }
        #about p, #clubs p {
            font-size: 1.1rem;
            line-height: 1.8;
        }
       
        #clubs .card {
            border: none;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            transition: transform 0.3s;
        }
        #clubs .card:hover {
            transform: scale(1.05);
        }
        #clubs .card img {
            border-radius: 10px 10px 0 0;
        }
        #contacts {
            background-color: #f7f6f4;
            text-align: center;
        }
        #contacts h2, #contacts p {
            color: #333333;
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
        <h1>Добро пожаловать!</h1>
    </div>

    <section id="about">
        <div class="container text-center">
            <h2 class="mb-4">О нас</h2>
            <p>Наш детский сад — это место, где дети могут учиться, играть и развиваться в комфортной и дружественной атмосфере. Мы предоставляем творческие занятия, увлекательные кружки и заботу о каждом ребенке.</p>
        </div>
    </section>

    <section id="clubs">
        <div class="container">
            <h2 class="text-center mb-4">Наши кружки</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <img src="img/1.jpg" class="card-img-top" alt="Лепка">
                        <div class="card-body">
                            <h5 class="card-title">Лепка</h5>
                            <p class="card-text">Мы создаем красивые поделки и развиваем мелкую моторику.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="img/2.jpg" class="card-img-top" alt="Рисование">
                        <div class="card-body">
                            <h5 class="card-title">Рисование</h5>
                            <p class="card-text">Учим детей выражать себя через искусство и цвета.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="img/3.jpg" class="card-img-top" alt="Музыка">
                        <div class="card-body">
                            <h5 class="card-title">Музыка</h5>
                            <p class="card-text">Музыкальные занятия для развития слуха и ритма.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="contacts">
        <div class="container">
            <h2 class="mb-4">Контакты</h2>
            <p>Позвоните нам по телефону: <strong>+7 (123) 456-78-90</strong></p>
            <p>Адрес: Москва, ул. Радости, д. 1</p>
        </div>
    </section>

    <footer class="footer">
        <p>&copy; 2024 Страна чудес. Все права защищены.</p>
    </footer>

    <script src="bootstrap.bundle.min.js"></script>
</body>
</html>
