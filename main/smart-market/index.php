<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Philosopher:ital@0;1&display=swap" rel="stylesheet">
    <title>Интернет магазин</title>
    <style>
        body{
            font-family: 'Philosopher', sans-serif;
        }
        img{
            width: 100%;
            margin-top: 20px;
            margin-bottom: 10px;
        }
        p{
            line-height: 1.8em;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="col-12 m-auto">
                <img src="images/smartlogo-969x360.png">
                <h5 class="text-center">Интернет магазин Smart Market, Оптовый раздел</h5>
                <p>🕖 График работы: 10:00 - 19:00(без выходных) <br>
                    🔥 Эксклюзивные товары <br>
                    💰 Низкие цены <br>
                    💰 Нашли дешевле? Снизим цену<br>
                    🚛 Доставка по всему КЗ <br>
                    📍 Наш Адрес: г.Алматы, Мкр Нуркент 57
                </p>
            </div>
        </div>

        <div class="col-12 text-center">
            <button class="btn btn-danger col-md-6 font-weight-bold mb-1" data-toggle="modal" data-target="#gotolead">
                <i class="far fa-calendar-check"></i> Оставить заявку</button>
        </div>
        <div class="col-12 text-center">
            <a href="https://wa.me/77711367976" class="btn btn-success col-md-6 font-weight-bold">
                <i class="fab fa-whatsapp"></i> Наш WhatsApp</a>
        </div>

        <div class="col-12 text-center">
            <a href="https://smart-market.kz" class="btn btn-warning col-md-6 mt-1 font-weight-bold">
                <i class="fas fa-globe-americas"></i> Наш сайт</a>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="gotolead" tabindex="-1" role="dialog" aria-labelledby="gotoleadLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="gotolead">Напишите данные</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="add.php" method="post">
                    <input type="text" class="form-control mb-2" name="name" placeholder="Имя">
                    <input type="tel" class="form-control mb-2" name="phone" placeholder="Телефон">
                    <input type="hidden" class="form-control mb-1" name="client_product" value="SMART MARKET" placeholder="Телефон">
                    <input type="hidden" class="form-control mb-1" name="client_price" value="100000" placeholder="Телефон">
                    <button class="btn btn-success w-100">Отправить</button>
                </form>
            </div>
        </div>
    </div>
</div>

<script src="js/jquery-3.5.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="https://kit.fontawesome.com/89dfc9b8f5.js" crossorigin="anonymous"></script>
</body>
</html>