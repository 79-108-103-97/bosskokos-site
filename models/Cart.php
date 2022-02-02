<?php

class Cart
{
    /**
     * Добавление товара в корзину по айди
     * @param $id
     * @return int|mixed
     */
    public static function addProduct($id)
    {
        $id = intval($id);

        $productInCart = array();

        $productInCart = self::getProducts();

        if (!empty($productInCart) && array_key_exists($id, $productInCart)) {
            $productInCart[$id]++;
        } else {
            $productInCart[$id] = 1;
        }
        $_SESSION['products'] = $productInCart;

        return self::countItems();
    }

    /**
     * Добавление определенного оличества товара в корзину по айди
     * @param $id
     * @param $value
     * @return int|mixed
     */
    public static function addCountProduct($id, $value)
    {
        $id = intval($id);
        $value = intval($value);
        $productInCart = array();

        $productInCart = self::getProducts();

        if (array_key_exists($id, $productInCart)) {
            $productInCart[$id] = $value;
        }
        $_SESSION['products'] = $productInCart;
        return self::countItems();
    }

    /**
     * Удаление товара из корзины по айди
     * @param $id
     * @return int|mixed
     */
    public static function deleteProduct($id)
    {
        $id = intval($id);

        $productInCart = array();

        if (isset($_SESSION['products'])) {
            $productInCart = $_SESSION['products'];
        }

        if (array_key_exists($id, $productInCart)) {
            unset($productInCart[$id]);
        }
        $_SESSION['products'] = $productInCart;

        return self::countItems();
    }

    /**
     * Удаление одного товара из корзины по айди
     * @param $id
     * @return int|mixed
     */
    public static function deleteOneProduct($id)
    {
        $id = intval($id);

        $productInCart = array();

        if (isset($_SESSION['products'])) {
            $productInCart = $_SESSION['products'];
        }

        if (array_key_exists($id, $productInCart)) {
            $productInCart[$id]--;
            if ($productInCart[$id] == 0) {
                unset($productInCart[$id]);
            }
        }
        $_SESSION['products'] = $productInCart;

        return self::countItems();
    }

    /**
     * Получение общего количества товаров в корзине
     * @return int|mixed
     */
    public static function countItems()
    {
        if (isset($_SESSION['products'])) {
            $count = 0;
            foreach ($_SESSION['products'] as $id => $quantity) {
                $count = $count + $quantity;
            }
            return $count;
        } else {
            return 0;
        }
    }

    /**
     * Получение количества одного товара по айди в корзине
     * @param $productId
     * @return false|mixed
     */
    public static function getCountOneProductInCart($productId)
    {
        $productsInCart = self::getProducts();
        if (isset($productsInCart[$productId])) {
            return $productsInCart[$productId];
        }
        return false;
    }

    /**
     * Получение массива всех товаров в корзине
     * @return false|mixed
     */
    public static function getProducts()
    {
        if (isset($_SESSION['products'])) {
            return $_SESSION['products'];
        }
        return false;
    }

    /**
     * Получение общей стоимости товаров в корзине
     * @param $products
     * @return float|int
     */
    public static function getTotalPrice($products)
    {
        $productsInCart = self::getProducts();

        $total = 0;

        if ($productsInCart) {
            foreach ($products as $item) {
                $total += $item['price'] * $productsInCart[$item['idProduct']];
            }
        }
        return $total;
    }

    public static function getOrder()
    {
        $productsInCart = Cart::getProducts();

        if ($productsInCart) {
            $productsIds = array_keys($productsInCart);
            $products = Product::getProductsByIds($productsIds);
        }
        $order = '';
        foreach ($products as $product){
            $order .= '
            id товара: ' . $product['idProduct'] . '; ';
            $order .= ' Название товара: ' .$product['name'] . ';';
            $order .= ' Количество товара: ' .$productsInCart[$product['idProduct']] . ';';
            $order .= ' Цена товара: ' .$product['price'] . ';';
        }
        return $order;
    }
    public static function SendEmail($email, $subject, $message)
    {
        $result = mail($email, $subject, $message);
        var_dump($result);
        die;
    }

}