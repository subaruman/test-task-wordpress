<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <script src="https://code.jquery.com/jquery-3.5.0.js"
            integrity="sha256-r/AaFHrszJtwpe+tHyNi/XCfMxYpbsRg2Uqn0x3s2zc=" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri() ?>"/>
    <title>Мир посуды</title>
    <?php wp_head() ?>
</head>
<header class="header">
    <div class="container">
        <div class="row align-self-start">
            <div class="col">
                <p class="header_name">ИНТЕРНЕТ-МАГАЗИН ПОСУДЫ</p>
                <h1 class="header_link">POSUDANEW.RU</h1>
                <p class="header_desc">ПОСУДА ПО НИЗКИМ ЦЕНАМ</p>
            </div>
            <div class="col">
                <input class="search" id="search" type="search" placeholder="Поиск среди 10 000 товаров...">
                <span class="search_img" type="image"></span>
            </div>

            <div class="col call_wrap">
                <span class="call_img" type="image"></span>
                <div class="col call">
                    <p class="call_text">Звоните нам</p>
                    <p class="call_phone">+7 (4872)79-29-10</p>
                </div>
            </div>

            <div class="col-3 cart_wrap">
                <div class="col cart_img" type="image"></div>
                <div class="col cart">
                    <p class="cart_header">КОРЗИНА</p>
                    <p class="cart_products">Товаров нет</p>
                    <p class="cart_autorisation">
                        <a href="" class="link_autorisation">Регистрация</a> /
                        <a href="" class="link_autorisation">Вход</a></p>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row menu">
            <div class="menu_item"><a>ГЛАВНАЯ</a></div>
            <span class="menu_delimiter">|</span>
            <div class="menu_item"><a>КАТАЛОГ</a></div>
            <span class="menu_delimiter">|</span>
            <div class="menu_item"><a>НОВИНКИ</a></div>
            <span class="menu_delimiter">|</span>
            <div class="menu_item"><a>АКЦИИ</a></div>
            <span class="menu_delimiter">|</span>
            <div class="menu_item"><a>КАК СДЕЛАТЬ ЗАКАЗ</a></div>
            <span class="menu_delimiter">|</span>
            <div class="menu_item"><a>ДОСТАВКА И ОПЛАТА</a></div>
            <span class="menu_delimiter">|</span>
            <div class="menu_item"><a>КОНТАКТЫ</a></div>
        </div>
    </div>
</header>

<body>
