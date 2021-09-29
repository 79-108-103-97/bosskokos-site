<?php include ROOT . '/views/layouts/header.php' ?>

<main class="main-container">

    <div class="container-fluid content-container main-banner">
        <div class="main-banner_inner">
            <div class="home-banner"></div>
        </div>
    </div>

    <div class="container-fluid content-container main-benefits">
        <div class="main-benefits_inner">
            <div class="container main-benefits-text">
                <div class="main-benefits-title">
                        <span class="main-benefits-title_span">
                            Порадуй себя и близких товарами из экзотических стран
                        </span>
                </div>
                <div class="main-benefits-subtitle">
                        <span class="main-benefits-subtitle_span">
                            более 100 видов экзотических продуктов с доставкой от 1 штуки
                        </span>
                </div>
            </div>
            <div class="my-container main-benefits-warranty_cards">
                <div class="warranty_card-item">
                    <div class="warranty_card-icon">
                        <span class="warranty_card-icon_b icon icon-certificate"></span>
                    </div>
                    <div class="warranty_card-description">
                        <div class="warranty_card-title">
                                <span class="warranty_card-title_span">
                                    100% гарантия
                                </span>
                        </div>
                        <div class="warranty_card-subtitle">
                                <span class="warranty_card-subtitle_span">
                                    возврата или обмена товара при ненадлежащем качестве
                                </span>
                        </div>
                    </div>
                </div>
                <div class="warranty_card-item">
                    <div class="warranty_card-icon">
                        <span class="warranty_card-icon_b icon icon-leaf1"></span>
                    </div>
                    <div class="warranty_card-description">
                        <div class="warranty_card-title">
                                <span class="warranty_card-title_span">
                                    Без обработки химикатами
                                </span>
                        </div>
                        <div class="warranty_card-subtitle">
                                <span class="warranty_card-subtitle_span">
                                    не используем химию и нитраты для увеличения сроков хранения
                                </span>
                        </div>
                    </div>
                </div>
                <div class="warranty_card-item">
                    <div class="warranty_card-icon">
                        <span class="warranty_card-icon_b icon icon-apple-alt"></span>
                    </div>
                    <div class="warranty_card-description">
                        <div class="warranty_card-title">
                                <span class="warranty_card-title_span">
                                    Гарантия спелости
                                </span>
                        </div>
                        <div class="warranty_card-subtitle">
                                <span class="warranty_card-subtitle_span">
                                    при сборе урожая фермерами из Азии
                                </span>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <a name="sales" class="anchor"></a>
    <div class="content-container my-container main-promotions">
        <div class="main-promitions_inner">
            <div class="main-promitions_slider">
                <div class="main-promitions_item">
                    <img class="main-promotions_img"
                         src="//<?php echo $_SERVER['SERVER_NAME']; ?>/template/images/promotions/promo.jpg" alt="">
                </div>
                <div class="main-promitions_item">
                    <img class="main-promotions_img"
                         src="//<?php echo $_SERVER['SERVER_NAME']; ?>/template/images/promotions/promo2.jpg"
                         alt="">
                </div>
            </div>
        </div>
    </div>

    <!---------------------------------Популярные товары-------------------------------->
    <div class="container content-container main-products">
        <!-- Слайдер фрукты -->
        <div class="main-products_inner">
            <div class="main_heading">
                <div class="main_heading-title">
                    <span>Популярные товары</span>
                    <a href="/catalog/">каталог</a>
                </div>
            </div>
            <div class="main-products_slider">
                <?php foreach ($topSalesProducts as $product) : ?>
                    <div class="main-products_slider_item">
                        <div class="top-sales_img">
                            <img class="<?php if ($product['new'] == '0') { ?>element-opacity<?php }; ?>"
                                 src="//<?php echo $_SERVER['SERVER_NAME']; ?>/template/images/product_item_img/hot2.svg"
                                 alt="">
                            <img class="<?php if ($product['topsales'] == '0') { ?>element-opacity<?php }; ?>"
                                 src="//<?php echo $_SERVER['SERVER_NAME']; ?>/template/images/product_item_img/heat.svg"
                                 alt="">
                        </div>
                        <div class="slider_item-card">
                            <div class="slider_item-card-img">
                                <div class="slider_item-card-fun">
                                    <h5>Очень полезен!</h5>
                                    <p>В этом фрукте содержится триллион полезных витаминов!</p>
                                </div>
                                <img src="//<?php echo $_SERVER['SERVER_NAME']; ?>/template/images/product_item_img/<?php echo trim($product['image']); ?>"
                                     alt="">
                            </div>
                            <div class="slider_item-card-description">
                                <div class="card-description_heading">
                                    <h5><?php echo $product['name']; ?></h5>
                                </div>
                                <div class="card-description_text">
                                    <p><?php echo $product['description']; ?></p>
                                </div>
                                <div class="card-description_footer">
                                    <div class="card-description_price">
                                        <p><?php echo $product['price']; ?> ₽/кг</p>
                                    </div>
                                    <div class="card-description_weight">
                                        <p>~ 0.3 кг</p>
                                    </div>
                                    <div class="card-description_button">
                                        <a class="card-description_btn add-to-cart"
                                           data-id="<?php echo $product['idProduct']; ?>" href="#"></a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
    <!---------------------------------Популярные товары-------------------------------->

    <!---------------------------------Новые товары------------------------------------->
    <div class="container content-container main-products">
        <!-- Слайдер фрукты -->
        <div class="main-products_inner">
            <div class="main_heading">
                <div class="main_heading-title">
                    <span>Новинки</span>
                    <a href="/catalog/">каталог</a>
                </div>
            </div>
            <div class="main-products_slider">
                <?php foreach ($newProducts as $product) : ?>
                    <div class="main-products_slider_item">
                        <div class="top-sales_img">
                            <img class="<?php if ($product['new'] == '0') { ?>element-opacity<?php }; ?>"
                                 src="//<?php echo $_SERVER['SERVER_NAME']; ?>/template/images/product_item_img/hot2.svg"
                                 alt="">
                            <img class="<?php if ($product['topsales'] == '0') { ?>element-opacity<?php }; ?>"
                                 src="//<?php echo $_SERVER['SERVER_NAME']; ?>/template/images/product_item_img/heat.svg"
                                 alt="">
                        </div>
                        <div class="slider_item-card">
                            <div class="slider_item-card-img">
                                <div class="slider_item-card-fun">
                                    <h5>Очень полезен!</h5>
                                    <p>В этом фрукте содержится триллион полезных витаминов!</p>
                                </div>
                                <img src="//<?php echo $_SERVER['SERVER_NAME']; ?>/template/images/product_item_img/<?php echo trim($product['image']); ?>"
                                     alt="">
                            </div>
                            <div class="slider_item-card-description">
                                <div class="card-description_heading">
                                    <h5><?php echo $product['name']; ?></h5>
                                </div>
                                <div class="card-description_text">
                                    <p><?php echo $product['description']; ?></p>
                                </div>
                                <div class="card-description_footer">
                                    <div class="card-description_price">
                                        <p><?php echo $product['price']; ?> ₽/кг</p>
                                    </div>
                                    <div class="card-description_weight">
                                        <p><?php echo $product['idProduct']; ?>~ 0.3 кг</p>
                                    </div>
                                    <div class="card-description_button">
                                        <a class="card-description_btn add-to-cart"
                                           data-id="<?php echo $product['idProduct']; ?>" href="#"></a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
    <!---------------------------------Новые товары------------------------------------->

    <!---------------------------------Рекомендованные товары--------------------------->
    <div class="container content-container main-products">
        <!-- Слайдер фрукты -->
        <div class="main-products_inner">
            <div class="main_heading">
                <div class="main_heading-title">
                    <span>Рекомендуем</span>
                    <a href="/catalog/">каталог</a>
                </div>
            </div>
            <div class="main-products_slider">
                <?php foreach ($recomendetProducts as $product) : ?>
                    <div class="main-products_slider_item">
                        <div class="top-sales_img">
                            <img class="<?php if ($product['new'] == '0') { ?>element-opacity<?php }; ?>"
                                 src="//<?php echo $_SERVER['SERVER_NAME']; ?>/template/images/product_item_img/hot2.svg"
                                 alt="">
                            <img class="<?php if ($product['topsales'] == '0') { ?>element-opacity<?php }; ?>"
                                 src="//<?php echo $_SERVER['SERVER_NAME']; ?>/template/images/product_item_img/heat.svg"
                                 alt="">
                        </div>
                        <div class="slider_item-card">
                            <div class="slider_item-card-img">
                                <div class="slider_item-card-fun">
                                    <h5>Очень полезен!</h5>
                                    <p>В этом фрукте содержится триллион полезных витаминов!</p>
                                </div>
                                <img src="//<?php echo $_SERVER['SERVER_NAME']; ?>/template/images/product_item_img/<?php echo trim($product['image']); ?>"
                                     alt="">
                            </div>
                            <div class="slider_item-card-description">
                                <div class="card-description_heading">
                                    <h5><?php echo $product['name']; ?></h5>
                                </div>
                                <div class="card-description_text">
                                    <p><?php echo $product['description']; ?></p>
                                </div>
                                <div class="card-description_footer">
                                    <div class="card-description_price">
                                        <p><?php echo $product['price']; ?> ₽/кг</p>
                                    </div>
                                    <div class="card-description_weight">
                                        <p><?php echo $product['idProduct']; ?>~ 0.3 кг</p>
                                    </div>
                                    <div class="card-description_button">
                                        <a class="card-description_btn add-to-cart"
                                           data-id="<?php echo $product['idProduct']; ?>" href="#"></a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
    <!---------------------------------Рекомендованные товары--------------------------->


    <div class="container-fluid content-container main-benefits">
        <div class="main-benefits_inner">
            <div class="container main-benefits-text">
                <div class="main-benefits-title">
                        <span class="main-benefits-title_span">
                            Подарок на любой случай жизни
                        </span>
                </div>
                <div class="main-benefits-subtitle">
                        <span class="main-benefits-subtitle_span">
                            день рождения, годовщина свадьбы или знакомства, юбилей папы
                            или мамы - корзина экзотических фруктов удивит всегда
                        </span>
                </div>
            </div>
            <div class="my-container main-benefits-warranty_cards">
                <div class="warranty_card-item">
                    <div class="warranty_card-icon">
                        <span class="warranty_card-icon_b icon icon-gift"></span>
                    </div>
                    <div class="warranty_card-description">
                    </div>
                    <div class="warranty_card-subtitle">
                            <span class="warranty_card-subtitle_span">
                                Соберём корзину экзотических фруктов по вашим пожеланиям
                            </span>
                    </div>
                </div>
                <div class="warranty_card-item">
                    <div class="warranty_card-icon">
                        <span class="warranty_card-icon_b icon icon-coins"></span>
                    </div>
                    <div class="warranty_card-description">
                        <div class="warranty_card-subtitle">
                                <span class="warranty_card-subtitle_span">
                                    Формируем наборы на любую сумму от 2.000 рублей
                                </span>
                        </div>
                    </div>
                </div>
                <div class="warranty_card-item">
                    <div class="warranty_card-icon">
                        <span class="warranty_card-icon_b icon icon-box"></span>
                    </div>
                    <div class="warranty_card-description">
                        <div class="warranty_card-subtitle">
                                <span class="warranty_card-subtitle_span">
                                    Команда «Босса кокоса» с радостью предложит любое наполнение подарочного набора
                                </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!---------------------------------Корзинки----------------------------------------->
    <div class="container content-container main-products">
        <!-- Слайдер фрукты -->
        <div class="main-products_inner">
            <div class="main_heading">
                <div class="main_heading-title">
                    <span>Корзинки</span>
                    <a href="/catalog/category/6">каталог</a>
                </div>
            </div>
            <div class="main-products_slider">
                <?php foreach ($basketsProducts as $product) : ?>
                    <div class="main-products_slider_item">
                        <div class="top-sales_img">
                            <img class="<?php if ($product['new'] == '0') { ?>element-opacity<?php }; ?>"
                                 src="//<?php echo $_SERVER['SERVER_NAME']; ?>/template/images/product_item_img/hot2.svg"
                                 alt="">
                            <img class="<?php if ($product['topsales'] == '0') { ?>element-opacity<?php }; ?>"
                                 src="//<?php echo $_SERVER['SERVER_NAME']; ?>/template/images/product_item_img/heat.svg"
                                 alt="">
                        </div>
                        <div class="slider_item-card">
                            <div class="slider_item-card-img">
                                <div class="slider_item-card-fun">
                                    <h5>Очень полезен!</h5>
                                    <p>В этом фрукте содержится триллион полезных витаминов!</p>
                                </div>
                                <img src="//<?php echo $_SERVER['SERVER_NAME']; ?>/template/images/product_item_img/<?php echo trim($product['image']); ?>"
                                     alt="">
                            </div>
                            <div class="slider_item-card-description">
                                <div class="card-description_heading">
                                    <h5><?php echo $product['name']; ?></h5>
                                </div>
                                <div class="card-description_text">
                                    <p><?php echo $product['description']; ?></p>
                                </div>
                                <div class="card-description_footer">
                                    <div class="card-description_price">
                                        <p><?php echo $product['price']; ?> ₽/кг</p>
                                    </div>
                                    <div class="card-description_weight">
                                        <p><?php echo $product['idProduct']; ?>~ 0.3 кг</p>
                                    </div>
                                    <div class="card-description_button">
                                        <a class="card-description_btn add-to-cart"
                                           data-id="<?php echo $product['idProduct']; ?>" href="#"></a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
    <!---------------------------------Корзинки----------------------------------------->

</main>

<?php include ROOT . '/views/layouts/footer.php' ?>
