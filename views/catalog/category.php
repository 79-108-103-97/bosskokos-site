<?php include ROOT . '/views/layouts/header.php' ?>

<main class="main-container">
    <div class="my-container content-container main-products">
        <div class="main-products_inner">
            <div class="container main-path">
                <a class="" href="/">Главная</a>
                <span class="icon icon-long-arrow-alt-right"></span>
                <a class="" href="/catalog/">Каталог</a>
                <?php foreach ($categories as $category) : ?>
                    <?php if ($categoryId == $category['id']) : ?>
                        <span class="icon icon-long-arrow-alt-right"></span>
                        <a class="active" href=""><?php echo $category['name'] ?></a>
                    <?php endif; ?>
                <?php endforeach; ?>
            </div>
            <div class="catalog container">
                <div class="catalog-nav">
                    <?php foreach ($categories as $category) : ?>
                        <a class="header-part-cataloge_category <?php if ($categoryId == $category['id']) echo 'active2'; ?>"
                           href="/catalog/category/<?php echo $category['id'] ?>"><?php echo $category['name'] ?></a>
                    <?php endforeach; ?>
                </div>
                <div class="catalog-container">
<!--                                <div class="container main-filter-sort-and-category">-->
<!--                                    <div class="main-filter_dropdown filter_sort_and_category-dropdown-div">-->
<!--                                        <a class="main-filter_dropdown-a" href="">Фильтр</a>-->
<!--                                    </div>-->
<!--                                    <div class="main-sort_dropdown filter_sort_and_category-dropdown-div">-->
<!--                                        <a class="main-sort_dropdown-a" href="">Сортировка</a>-->
<!--                                    </div>-->
<!--                                    <div class="main-category_dropdown filter_sort_and_category-dropdown-div">-->
<!--                                        <a class="main-category_dropdown-a" href="">Категория</a>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                                <div class="container main-ffilter-sort-and-category-show">-->
<!--                                    <a class="main-ffilter-sort-and-category-show-a" href="">По убыванию цены</a>-->
<!--                                    <a class="main-ffilter-sort-and-category-show-a" href="">По убыванию цены</a>-->
<!--                                </div>-->
                    <div class="main-products_catalog">
                        <?php foreach ($categoryProducts as $product) : ?>
                            <div class="main-products_grid main-products_slider_item">
                                <div class="top-sales_img">
                                    <img class="<?php if ($product['new'] == '0') { ?>element-opacity<?php }; ?>"
                                         src="//<?php echo $_SERVER['SERVER_NAME'];?>/template/images/product_item_img/hot2.svg" alt="">
                                    <img class="<?php if ($product['topsales'] == '0') { ?>element-opacity<?php }; ?>"
                                         src="//<?php echo $_SERVER['SERVER_NAME'];?>/template/images/product_item_img/heat.svg" alt="">
                                </div>
                                <div class="slider_item-card">
                                    <div class="slider_item-card-img">
                                        <div class="slider_item-card-fun">
                                            <h5>Очень полезен!</h5>
                                            <p>В этом фрукте содержится триллион полезных витаминов!</p>
                                        </div>
                                        <img src="//<?php echo $_SERVER['SERVER_NAME'];?>/template/images/product_item_img/<?php echo trim($product['image']); ?>"
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
                                                <a class="card-description_btn add-to-cart" data-id="<?php echo $product['idProduct']; ?>" href=""></a>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                    <?php if (isset($pagination)) echo $pagination->get(); ?>
                </div>
            </div>

            <!---------------------------------Рекомендованные товары--------------------------->
            <div class="container content-container main-products">
                <!-- Слайдер фрукты -->
                <div class="main-products_inner">
                    <div class="main_heading">
                        <div class="main_heading-title">
                            <span>Рекомендуем</span>
                            <a class="element-opacity" href="/catalog/">каталог</a>
                        </div>
                    </div>
                    <div class="main-products_slider">
                        <?php foreach ($recomendetProducts as $product) : ?>
                            <div class="main-products_slider_item">
                                <div class="top-sales_img">
                                    <img class="<?php if ($product['new'] == '0') { ?>element-opacity<?php }; ?>"
                                         src="//<?php echo $_SERVER['SERVER_NAME'];?>/template/images/product_item_img/hot2.svg" alt="">
                                    <img class="<?php if ($product['topsales'] == '0') { ?>element-opacity<?php }; ?>"
                                         src="//<?php echo $_SERVER['SERVER_NAME'];?>/template/images/product_item_img/heat.svg" alt="">
                                </div>
                                <div class="slider_item-card">
                                    <div class="slider_item-card-img">
                                        <div class="slider_item-card-fun">
                                            <h5>Очень полезен!</h5>
                                            <p>В этом фрукте содержится триллион полезных витаминов!</p>
                                        </div>
                                        <img src="//<?php echo $_SERVER['SERVER_NAME'];?>/template/images/product_item_img/<?php echo trim($product['image']); ?>"
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
                                                <a class="card-description_btn add-to-cart" data-id="<?php echo $product['idProduct']; ?>" href=""></a>
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

        </div>
</main>

<?php include ROOT . '/views/layouts/footer.php' ?>
