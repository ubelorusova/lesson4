<?php
$array = [
    [
        'item' => 'Товар 1',
        'description' => 'Описание товара 1',
        'price' => 200,
        'currency' => 'RUB',
        'discount' => false,
        'currency_with_discount' => 100
    ],
    [
        'item' => 'Товар 1',
        'description' => 'Описание товара 1',
        'price' => 200,
        'currency' => 'RUB',
        'discount' => false,
        'currency_with_discount' => 100
    ],
    [
        'item' => 'Товар 1',
        'description' => 'Описание товара 1',
        'price' => 200,
        'currency' => 'RUB',
        'discount' => false,
        'currency_with_discount' => 100
    ],
    [
        'item' => 'Товар 1',
        'description' => 'Описание товара 1',
        'price' => 200,
        'currency' => 'RUB',
        'discount' => false,
        'currency_with_discount' => 100
    ],
    [
        'item' => 'Товар 1',
        'description' => 'Описание товара 1',
        'price' => 200,
        'currency' => 'RUB',
        'discount' => false,
        'currency_with_discount' => 100
    ],
    [
        'item' => 'Товар 1',
        'description' => 'Описание товара 1',
        'price' => 200,
        'currency' => 'RUB',
        'discount' => false,
        'currency_with_discount' => 100
    ],
    [
        'item' => 'Товар 1',
        'description' => 'Описание товара 1',
        'price' => 200,
        'currency' => 'RUB',
        'discount' => false,
        'currency_with_discount' => 100
    ],
]
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Школа Брейк-Данса</title>
    <style>
        .btn {
            width: 300px;
            height: 40px;
            border-radius: 30px;
            background-color: #666cff;
            border: 0;
            box-shadow: 0 5px #999;
            transition: 1s;
        }

        .btn:hover {
            background-color: #fcfcfc;
        }

        .button:active {
            background-color: #ff0080;
            box-shadow: 0 5px rgb(241, 255, 204);
            transform: translate(4px);
        }

        .item {
            padding-top: 25px;
            padding-left: 75px;
            padding-right: 75px;
            width: 300px;
            height: 600px;
            border-radius: 30px;
            cursor: pointer;
            border: 1px solid rgb(202, 202, 209);
        }

        .item:hover {
            box-shadow: 2px 2px 2px 2px rgb(202, 202, 209);
        }

        .item-img {
            border-radius: 30px;
            border-color: #d9d9d9;
            width: 300px;
            height: 300px;
            margin-bottom: 10px;
        }

        .item-title {
            text-align: center;
            font-size: 15px;
            margin-bottom: 100px;
        }

        .item-btn {
            margin-bottom: 30px;
        }

        .container {
            width: 100%;
            height: 100%;
            display: grid;
            gap: 20px;
            flex-wrap: nowrap;
            grid-template-columns: 30em 30em 30em;
            grid-template-rows: repeat(3, 1fr);
        }
    </style>
</head>

<body>

    <body>
        <div class="container">
            <?php foreach ($array as $item) : ?>
                <div class="item">
                    <div class="item-img">
                        <img src="logo sky lvl.jpg" alt="Логотип" width="300px" height="300px">
                    </div>
                    <div class="item-title">
                        Записаться на пробное занятие
                    </div>
                    <button class="btn">
                        Попробовать!
                    </button>
                </div>
                <div class="item">
                    <div class="item-img">
                        <img src="summer camp.jpg" alt="Интенсив" width="300px" height="300px">
                    </div>
                    <div class="item-title">
                        SUMMER CAMP
                    </div>
                    <button class="btn">
                        Записаться на летний интенсив
                    </button>
                </div>
                <div class="item">
                    <div class="item-img">
                        <img src="something.jpg" alt="это фриз" width="300px" height="300px">
                    </div>
                    <div class="item-title">
                        Расписание тренировок
                    </div>
                    <button class="btn">
                        Посмотреть расписание
                    </button>
                </div>
                <div class="item">
                    <div class="item-img">
                        <img src="winners.jpg" alt="Победители" width="300px" height="300px">
                    </div>
                    <div class="item-title">
                        Наши достижения
                    </div>
                    <button class="btn">
                        Посмотреть результаты чемпионатов
                    </button>
                </div>
                <div class="item">
                    <div class="item-img">
                        <img src="1539499416_1.jpg" alt="Тут был котик" width="300px" height="300px">
                    </div>
                    <div class="item-title">
                        Это кот в бумажке
                    </div>
                    <button class="btn">
                        Добавить в избранное
                    </button>
                </div>
                <div class="item">
                    <div class="item-img">
                        <img src="1539499416_1.jpg" alt="Тут был котик" width="300px" height="300px">
                    </div>
                    <div class="item-title">
                        Это кот в бумажке
                    </div>
                    <button class="btn">
                        Добавить в избранное
                    </button>
                </div>
                <div class="item">
                    <div class="item-img">
                        <img src="1539499416_1.jpg" alt="Тут был котик" width="300px" height="300px">
                    </div>
                    <div class="item-title">
                        Это кот в бумажке
                    </div>
                    <button class="btn">
                        Добавить в избранное
                    </button>
                </div>
    </body>

<?php endforeach; ?>
</div>

</html>