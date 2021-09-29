<!doctype html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Магазин экзотических фруктов из Вьетнама и Тайланда в Южно-Сахалинске.
    Купить фруктовую коробку с доставкой на дом и офис на Сахалине. Заказать готовые фруктовые наборы
    в интернет-магазине «Босс Кокос».">
    <meta name="keywords"
          content="магазин фрукты экзотические фрукт купить
          на острове Сахалин экзотических фруктов фруктовая коробка на заказ
          купить фруктовые коробки доставка фруктовых с экзотическими фруктами
          южно-сахалинск заказать в подарок с доставкой офис на дом из тайланда вьетнама наборы">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
  	<link rel="shortcut icon" href="//<?php echo $_SERVER['SERVER_NAME']; ?>/template/images/logo2.png" type="image/png">
    <!-- Подключение Bootstrap css v5.0 -->
    <link rel="stylesheet" href="//<?php echo $_SERVER['SERVER_NAME']; ?>/template/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="//<?php echo $_SERVER['SERVER_NAME']; ?>/template/bootstrap/css/mdb.min.css">
    <link rel="stylesheet" href="//<?php echo $_SERVER['SERVER_NAME']; ?>/template/slick/slick.css">
    <link rel="stylesheet" href="//<?php echo $_SERVER['SERVER_NAME']; ?>/template/style.css">
    <link rel="stylesheet" href="//<?php echo $_SERVER['SERVER_NAME']; ?>/template/fonts/style.css">

    <title>Босс Кокос. Магазин экзотических фруктов на Сахалине.</title>
</head>

<body class="container-fluid">

<header class="fixed-top container-fluid header-container">
    <div class="header">
        <div class="header_mobile-head">
            <!-- Панель для отображения на мобильных устройствах при открытии бургера -->
            <div class="header_mobile-head-content container-fluid">
                <!-- Кнопка закрытия мобильного меню -->
                <button type="button" class="header-mobile-btn_menu btn_close_burger-menu">
                    <span class="icon icon-close"></span>
                </button>
                <div class="header-mobile-panel_controls">
                    <a href="" class="header_basket-icon">
                        <span class="header_control-bage"><?php echo Cart::countItems(); ?></span>
                    </a>
                </div>
            </div>
        </div>
        <div class="header_content">
            <!--Основной контент навигации, который прячется в бургер-->
            <div class="header-part-top">
                <div class="header-part-top_inner container">
                    <div class="header_area-menu">
                        <!-- Основное меню навигации -->
                        <ul>
                            <li class="header_menu-item">
                                <div class="header_menu-controls">
                                    <span class="header_menu-link-before link-before-subject"></span>
                                    <a href="/catalog/" class="header_menu-link dropdown-btn">Каталог</a>
                                </div>
                            </li>
                            <?php foreach ($categories as $category) : ?>
                            <div class="dropdown category-dropdown element-hide">
                                <li>
                                    <div>
                                        <a class="header-part-cataloge_category <?php if ($categoryId == $category['id']) echo 'active'; ?>"
                                           href="/catalog/category/<?php echo $category['id'] ?>"><?php echo $category['name'] ?></a>
                                    </div>
                                </li>
                            </div>
                            <?php endforeach; ?>
                            <li class="header_menu-item">
                                <div class="header_menu-controls">
                                    <span class="header_menu-link-before link-before-percent2"></span>
                                    <a href="/" class="header_menu-link">Акции</a>
                                </div>
                            </li>
                            <li class="header_menu-item">
                                <div class="header_menu-controls">
                                    <span class="header_menu-link-before link-before-local_shipping"></span>
                                    <a href="/" class="header_menu-link">Доставка</a>
                                </div>
                            </li>
                            <li class="header_menu-item">
                                <div class="header_menu-controls">
                                    <span class="header_menu-link-before link-before-people"></span>
                                    <a href="/" class="header_menu-link">Отзывы</a>
                                </div>
                            </li>
                            <li class="header_menu-item">
                                <div class="header_menu-controls">
                                    <span class="header_menu-link-before link-before-info"></span>
                                    <a href="/" class="header_menu-link">О нас</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="header_area-text">
                        <!-- Время работы -->
                        <div class="header_work-time">с 09:00 до 20:00</div>
                    </div>
                    <div class="header_area-contacts">
                        <!-- Контакты -->
                        <div class="header_phone">
                            <a href="tel:89006663377" class="header_phone-value">+7(900) 666-33-77</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-part-main">
                <div class="header-part-main_inner container">
                    <div class="header_area-logo">
                        <!-- Логотип -->
                        <span><a href="/"><img src="//<?php echo $_SERVER['SERVER_NAME']; ?>/template/images/logo.png"
                                               height="40" alt=""></a></span>
                    </div>
                    <div class="header_area-catalog">
                        <button class="header-show_catalog">
                            <span class="icon icon-subject"></span>
                            <span>Каталог</span>
                        </button>
                    </div>
                    <div class="header_area-search">
                        <!-- Поиск -->
                        <div class="header_search">
                            <form action="/catalog/" method="post" class="header_search-form">
                                <input name="query" placeholder="Найти манго..." type="search"
                                       class="header_search-input">
                                <button type="submit" class="header_search-btn" name="search"></button>
                            </form>
                        </div>
                    </div>
                    <div class="header_area-controls">
                        <!-- Корзина и другие элементы -->
                        <a class="header_basket-icon" href="/basket/">
                            <span class="header_control-bage" id="cart-count"><?php echo Cart::countItems(); ?></span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="header-part-cataloge">
                <?php foreach ($categories as $category) : ?>
                    <a class="header-part-cataloge_category <?php if ($categoryId == $category['id']) echo 'active'; ?>"
                       href="/catalog/category/<?php echo $category['id'] ?>"><?php echo $category['name'] ?></a>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
    <div class="header-mobile-panel">
        <!-- Панель (шапка) для отображения на мобильных устройствах -->
        <div class="header-mobile-panel_content container-fluid">
            <!-- Кнопка для открытия мобильной панели -->
            <button type="button" id="menu-burger" class="header-mobile-btn_menu btn_open_burger-menu">
                <span class="icon icon-menu"></span>
            </button>
            <div class="header-mobile-panel_search">
                <div class="header-mobile_search">
                    <button type="button" class="header-mobile-panel_open_search_btn"><span
                                class="icon icon-search"></span></button>
                    <form action="" method="get" class="header-mobile_search-form">
                        <input name="s" placeholder="Найти манго..." type="search"
                               class="header-mobile_search-input">
                        <button type="submit" class="header-mobile_search-btn">
                            <span class="icon icon-search"></span>
                        </button>
                    </form>
                </div>
            </div>
            <div class="header-mobile-panel_logo">
                <span><a href="/"><img src="//<?php echo $_SERVER['SERVER_NAME']; ?>/template/images/logo.png"
                                       height="35"
                                       alt=""></span></a>
            </div>
            <div class="header-mobile-panel_controls">
                <a href="/basket/" class="header_basket-icon">
                    <span class="header_control-bage" id="cart-count-mobile"><?php echo Cart::countItems(); ?></span>
                </a>
            </div>
        </div>
    </div>
</header>