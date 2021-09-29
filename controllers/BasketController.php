<?php


class BasketController
{
    /**
     * Отображение страницы корзины
     * @return bool
     */
    public function actionIndex()
    {
        $categories = array();
        $categories = Category::getCategoriesList();

        $productsInCart = false;

        $productsInCart = Cart::getProducts();

        if ($productsInCart) {
            $productsIds = array_keys($productsInCart);
            $products = Product::getProductsByIds($productsIds);
            $totalPrice = Cart::getTotalPrice($products);
        }
        if (isset($_POST['submit'])&&($productsInCart)){
            $nameUser = $_POST['name'];
            $telUser = $_POST['tel'];
            $commentUser = $_POST['comment'];

            $order = Cart::getOrder();
            $message = '
             Имя пользователя: ' . $nameUser . '.
             Номер телефона: ' . $telUser . '.
             Комментарий: ' . $commentUser . '.
             Общая стоимость заказа: ' . $totalPrice .' руб.
             Заказ: ' . $order;
            $email = 'olga110723@gmail.com';
            $subjects = 'Новый заказ!';
          	$_SESSION['orderDone'] = true;
            unset($_SESSION['products']);
            mail($email, $subjects, $message);
            header('Location: /basket/');
        }

        require_once(ROOT . '/views/basket/index.php');
        return true;
    }

    /**
     * Добавление нового товара по айди методом аджакс
     * @param $id
     * @return bool
     */
    public function actionAddAjax($id)
    {
        echo Cart::addProduct($id);
        return true;
    }

    /**
     * Добавление нового товара по айди методом аджакс и получение его количества
     * @param $id
     * @return bool
     */
    public function actionAddOneAjax($id)
    {
        Cart::addProduct($id);
        echo Cart::getCountOneProductInCart($id);
        return true;
    }

    /**
     * Получение общей цены товаров в корзине методом аджакс
     * @return bool
     */
    public function actionTotalPriceAjax()
    {
        $productsInCart = false;
        $productsInCart = Cart::getProducts();
        if ($productsInCart) {
            $productsIds = array_keys($productsInCart);
            $products = Product::getProductsByIds($productsIds);
            echo Cart::getTotalPrice($products);
        }
        return true;
    }

    /**
     * Получение общего количества товаров в корзине методом аджакс
     * @return bool
     */
    public function actionCountAjax()
    {
        echo Cart::countItems();
        return true;
    }

    /**
     * Удаление товара по айди методом аджакс и получение его количества
     * @param $id
     * @return bool
     */
    public function actionDeleteOneAjax($id)
    {
        Cart::deleteOneProduct($id);
        echo Cart::getCountOneProductInCart($id);
        return true;
    }

    /**
     * обавление определенного количества товара по айди в корзину
     * @param $id
     * @param $count
     * @return bool
     */
    public function actionAddCountProductAjax($id, $count)
    {
        echo Cart::addCountProduct($id, $count);
        return true;

    }

    /**
     * Дабавление товара перезагрузкой
     * @param $id
     */
    public function actionAdd($id)
    {
        Cart::addProduct($id);

        $referrer = $_SERVER['HTTP_REFERER'];
        header("Location: $referrer");
    }

    /**
     * Удаление товара перезагрузкой
     * @param $id
     */
    public function actionDelete($id)
    {
        Cart::deleteProduct($id);

        $referrer = $_SERVER['HTTP_REFERER'];
        header("Location: $referrer");
    }

    /**
     * Удаление одного товара перезагрузкой
     * @param $id
     */
    public function actionDeleteOne($id)
    {
        Cart::deleteOneProduct($id);

        $referrer = $_SERVER['HTTP_REFERER'];
        header("Location: $referrer");
    }

    public function actionCheckOut()
    {
        return true;
    }

}