<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="//<?php echo $_SERVER['SERVER_NAME']; ?>/template/images/logo2.png"
          type="image/png">
    <link rel="stylesheet" href="//<?php echo $_SERVER['SERVER_NAME']; ?>/template/fonts/style.css">
    <link rel="stylesheet" href="//<?php echo $_SERVER['SERVER_NAME']; ?>/root/template/admin.css">
    <title>Админ панель</title>
</head>
<body>
<header>
    <div class="header_inner">
        <div class="logo-header">
            <span>Панель управления</span>
            <button class="show-nav-mobile icon-menu"></button>
        </div>
        <div class="profile-info icon-address-book">
                <span>
                    <a href="/admin/settings">
                <?php echo $user['name']; ?>
                    </a>
                </span>
            <a href="/admin/logout/">Выйти</a>
        </div>
    </div>
</header>
<nav class="nav-show">
    <div class="nav_inner">
        <div class="nav-menu_item">
            <div class="nav-menu_item-nodropdown icon icon-home
            <?php if ($_SESSION['link'] == 'home') echo ' active'; ?>">
                <a href="/admin/">Главная</a>
            </div>
        </div>
        <!--        <div class="nav-menu_item">-->
        <!--            <div class="nav-menu_item-dropdown icon icon-pencil2">-->
        <!--                <a href="">Главная</a>-->
        <!--            </div>-->
        <!--            <div class="dropdown-menu">-->
        <!--                <div class="dropdown-menu_item"><a href="">Общие</a></div>-->
        <!--                <div class="dropdown-menu_item"><a href="">Акции</a></div>-->
        <!--            </div>-->
        <!--        </div>-->
        <div class="nav-menu_item">
            <div class="nav-menu_item-dropdown icon icon-pencil2
            <?php if (($_SESSION['link'] == 'category') | ($_SESSION['link'] == 'product')) echo ' active'; ?>">
                <a href="">Каталог</a>
            </div>
            <div class="dropdown-menu">
                <div class="dropdown-menu_item"><a href="/admin/category/">Категории</a></div>
                <div class="dropdown-menu_item"><a href="/admin/product/">Продукты</a></div>
            </div>
        </div>
    </div>
</nav>