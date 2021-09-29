<?php include ROOT . '/views/layouts/header.php' ?>

<main class="main-container">
    <div class="container main-path">
        <a class="" href="/">Главная</a>
        <span class="icon icon-long-arrow-alt-right"></span>
        <a class="active" href="/catalog/">Корзина</a>
    </div>

    <div class="basket_shop container">
        <div class="basket_shop-part_cards">
            <div class="basket_shop-part_cards_inner">
                <div class="basket_shop-sum">

                    <?php if (isset($totalPrice)): ?>
                        <span>Сумма заказа: <span id="total-price"><?php echo $totalPrice; ?></span> руб.</span>
                    <?php endif; ?>
                </div>
                <?php if ($productsInCart) : ?>
                    <?php foreach ($products as $product) : ?>
                        <div class="basket_card-item">
                            <div class="basket_card-delete-div"><a
                                        href="/basket/delete/<?php echo $product['idProduct']; ?>"
                                        class="basket_card-delete"></a></div>
                            <div class="basket_card-img">
                                <img src="//<?php echo $_SERVER['SERVER_NAME']; ?>/template/images/product_item_img/<?php echo trim($product['image']); ?>"
                                     alt="">
                            </div>
                            <div class="basket_card-description flex-grow-1">
                                <div>
                                    <h5><?php echo $product['name'] ?></h5>
                                </div>
                                <div>
                                    <p><?php echo $product['description'] ?></p>
                                </div>
                            </div>
                            <div class="basket_card-amount">
                                <div class="basket_card-part-pc">
                                    <a class="icon-minus" data-id="<?php echo $product['idProduct'] ?>"
                                       href="#"></a>
                                    <input type="text" class="input-count" placeholder="1"
                                           data-id="<?php echo $product['idProduct'] ?>"
                                           id="id-count<?php echo $product['idProduct']; ?>"
                                           value="<?php echo $productsInCart[$product['idProduct']] ?>">
                                    <!--                                    <span>кг</span>-->
                                    <a class="icon-plus1" data-id="<?php echo $product['idProduct'] ?>"
                                       href="#"></a>
                                </div>
                                <!--                                <div class="basket_card-part-kl">-->
                                <!--                                    <a class="icon-minus" href=""></a>-->
                                <!--                                    <input type="text" placeholder="1">-->
                                <!--                                    <span>шт</span>-->
                                <!--                                    <a class="icon-plus1" href=""></a>-->
                                <!--                                </div>-->
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php else: ?>
                    <?php if (isset($_SESSION['orderDone'])) : ?>
                        <span class="main-benefits-subtitle_span">Заказ оформлен. Мы Вам презвоним!</span>
              		<?php unset($_SESSION['orderDone']);?>
                    <?php else: ?>
                    <span class="main-benefits-subtitle_span">Корзина пуста!</span>
              		<?php endif; ?>
                <?php endif; ?>


            </div>
        </div>
        <div class="basket_shop-part_form">
            <div class="basket_shop-part_form_inner">
                <form class="basket_shop-form" method="post" action="/basket/">
                    <span>Оформление заказа</span>
                    <input name="name" type="text" placeholder="Имя"
                           value="<?php if (isset($nameUser)) echo $nameUser; ?>">
                    <input name="tel" type="tel" placeholder="Телефон"
                           value="<?php if (isset($telUser)) echo $telUser; ?>">
                    <textarea name="comment" id="" cols="30" rows="10" placeholder="Комментарий и адрес"></textarea>
                    <button name="submit" type="submit">Оформить заказ</button>
                </form>
            </div>

        </div>
    </div>

</main>

<?php include ROOT . '/views/layouts/footer.php' ?>

