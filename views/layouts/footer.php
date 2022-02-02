<footer class="footer-container">
    <div class="container footer_wrap">
        <div class="footer_wrap_inner">
            <div class="footer_wrap_logo">
                <img src="//<?php echo $_SERVER['SERVER_NAME']; ?>/template/images/logo2.png" alt="">
            </div>
            <div class="footer_wrap_info">
                <div class="footer_wrap-title_link">
                    <a class="footer_wrap-title_link-a" href="">
                            <span class="footer_wrap-title_link-span">
                                Информация
                            </span>
                    </a>
                    <hr>
                </div>
                <div class="footer_wrap-link_items">
                    <!--                    <a class="footer_wrap-link_item" href="/delivery/"><span>Как заказать</span></a>-->
                    <a class="footer_wrap-link_item" href="/delivery/"><span>Оплата и доставка</span></a>
                    <a class="footer_wrap-link_item" href=""><span>Гарантия и возврат</span></a>
                    <a class="footer_wrap-link_item" href=""><span>Политика конфиденциальности</span></a>
                    <a class="footer_wrap-link_item" href=""><span>Пользовательское соглашение</span></a>
                    <a class="footer_wrap-link_item" href="/about-us/"><span>О магазине</span></a>
                </div>
            </div>
            <div class="footer_wrap_catalog">
                <div class="footer_wrap-title_link">
                    <a class="footer_wrap-title_link-a" href="">
                        <span class="footer_wrap-title_link-span">
                            Каталог
                        </span>
                    </a>
                    <hr>
                </div>
                <div class="footer_wrap-link_items">
                    <a class="footer_wrap-link_item" href="/catalog/category/6"><span>Корзины</span></a>
                    <a class="footer_wrap-link_item" href="/catalog/category/1"><span>Фрукты</span></a>
                    <a class="footer_wrap-link_item" href="/catalog/category/2"><span>Овощи и зелень</span></a>
                    <a class="footer_wrap-link_item" href="/catalog/category/5"><span>Соки и джемы</span></a>
                    <a class="footer_wrap-link_item" href="/catalog/category/3"><span>Приправы и прянности</span></a>
                    <a class="footer_wrap-link_item" href="/catalog/category/4"><span>Сухофрукты</span></a>
                </div>
            </div>
            <div class="footer_wrap_contact">
                <div class="footer_wrap-title_link">
                    <a class="footer_wrap-title_link-a" href="">
                        <span class="footer_wrap-title_link-span">
                            Контакты
                        </span>
                    </a>
                    <hr>
                </div>
                <div class="footer_wrap_contact-connection">
                    <a href="tel:+79006663377">+7(000) 000-00-00</a>
                    <a href="mail:">ул. Мечтателей, 99-А, ТЦ Радужный, 1-й этаж</a>
                </div>
                <div class="contact-connection_social">
                    <a href=""><img src="//<?php echo $_SERVER['SERVER_NAME']; ?>/template/images/icons/instagram.png"
                                    alt=""></a>
                    <a href=""><img src="//<?php echo $_SERVER['SERVER_NAME']; ?>/template/images/icons/whatsup.png"
                                    alt=""></a>
                    <a href=""><img src="//<?php echo $_SERVER['SERVER_NAME']; ?>/template/images/icons/2gis.png"
                                    alt=""></a>
                </div>
                <div class="footer_wrap_contact_work-time">
                    <div class="footer_wrap-title_link">
                        <a class="footer_wrap-title_link-a" href="">
                            <span class="footer_wrap-title_link-span">
                                График работы:
                            </span>
                        </a>
                    </div>
                    <span class="footer_wrap_contact_work-time-span">
                            Пн-Сб с 9:00 до 20:00 Вс с 9:00 до 19:00
                        </span>
                </div>

            </div>
        </div>

    </div>
    <div class="footer_copyright"></div>
</footer>


<!-- Подключение Popper js v2.9.2-->
<script scr="//<?php echo $_SERVER['SERVER_NAME']; ?>/template/popperjs/popper.js"></script>
<!-- Подключение Bootstrap js v5.0-->
<script src="//<?php echo $_SERVER['SERVER_NAME']; ?>/template/bootstrap/js/bootstrap.js"></script>
<script src="//<?php echo $_SERVER['SERVER_NAME']; ?>/template/jquery/jquery.min.js"></script> <!-- top -->
<script src="//<?php echo $_SERVER['SERVER_NAME']; ?>/template/slick/slick.min.js"></script>
<script src="//<?php echo $_SERVER['SERVER_NAME']; ?>/template/bootstrap/js/mdb.min.js"></script>
<script src="//<?php echo $_SERVER['SERVER_NAME']; ?>/template/script.js"></script>
<script>
    $(document).ready(function () {
        //обавление товара в корзину по кнопке в карточке товара
        $(".add-to-cart").click(function () {
            var id = $(this).attr("data-id");
            $.post("/basket/addAjax/" + id, {}, function (data) {
                $(".header_control-bage").html(data);
            });
            return false;
        });

        //Увеличение количества определенного товара (+1) по кнопке в корзине
        $(".icon-plus1").click(function () {
            var id = $(this).attr("data-id");
            $.post("/basket/addOneAjax/" + id, {}, function (data) {
                $("#id-count" + id).val(data);
            });
            $.post("/basket/totalPriceAjax/" + id, {}, function (data) {
                $("#total-price").html(data);
            });
            $.post("/basket/countAjax/" + id, {}, function (data) {
                $(".header_control-bage").html(data);
            });
        });

        //Уменьшение количества определенного товара (-1) по кнопке в корзине
        $(".icon-minus").click(function () {
            var id = $(this).attr("data-id");
            $.post("/basket/deleteOneAjax/" + id, {}, function (data) {
                if (!data) {
                    location.reload();
                } else {
                    $("#id-count" + id).val(data);
                }
            });
            $.post("/basket/totalPriceAjax/" + id, {}, function (data) {
                $("#total-price").html(data);
            });
            $.post("/basket/countAjax/" + id, {}, function (data) {
                $(".header_control-bage").html(data);
            });
        });

        //Изменение количества определенного товара в корзине через импут
        $(".input-count").change(function () {
            var id = $(this).attr("data-id");
            var count = $(this).val();
            $.post("/basket/addCountProductAjax/" + id + "/" + count, {}, function (data) {
                $(".header_control-bage").html(data);
            });
            $.post("/basket/totalPriceAjax/" + id, {}, function (data) {
                $("#total-price").html(data);
            });
        });

        $('.dropdown-btn').click(function (event) {
            if (window.matchMedia('(max-width: 1024px)').matches) {
                event.preventDefault();
                if ($('.dropdown ').hasClass('element-hide')) {
                    $('.dropdown ').removeClass('element-hide');
                } else {
                    $('.dropdown ').addClass('element-hide');
                }
            }

        });
    });
</script>
</body>

</html>