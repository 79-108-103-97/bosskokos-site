<?php


class Product
{
    //Количество отображаемых товаров
    const SHOW_BY_DEFAULT = 12;

    public static function getAllProducts()
    {
        $db = Db::getConnection();

        $productsList = array();

        //Запрос к БД всей информации по товарам и запись их в переменную
        $result = $db->query('
         SELECT 
                idProduct, name, idCategory, 
                description,  price, is_topsales, 
                is_new, is_recomendet,  image,
                avaliability, status
         FROM product 
         ORDER BY idProduct ASC');

        $i = 0;
        while ($row = $result->fetch()) {
            $productsList[$i]['idProduct'] = $row['idProduct'];
            $productsList[$i]['name'] = $row['name'];
            $productsList[$i]['idCategory'] = $row['idCategory'];
            $productsList[$i]['description'] = $row['description'];
            $productsList[$i]['price'] = $row['price'];
            $productsList[$i]['topsales'] = $row['is_topsales'];
            $productsList[$i]['new'] = $row['is_new'];
            $productsList[$i]['recomendet'] = $row['is_recomendet'];
            $productsList[$i]['image'] = $row['image'];
            $productsList[$i]['avaliability'] = $row['avaliability'];
            $productsList[$i]['status'] = $row['status'];
            $i++;
        }
        return $productsList;
    }
    /**
     * Поиск продуктов
     * @param $querySearch
     * @return array
     */
    public static function getProductsForSearch($querySearch)
    {
        $querySearch = '"%' . strval($querySearch) . '%"';
        $db = Db::getConnection();
        $productsList = array();

        $result = $db->query('
            SELECT idProduct, name, description, price, is_topsales, is_new, is_recomendet, image
            FROM product 
            WHERE status = "1" AND (
                    name LIKE ' . $querySearch . ' OR
                    description LIKE ' . $querySearch . ' OR
                    price LIKE ' . $querySearch . '
                )
            ORDER BY idProduct ASC');

        $i = 0;
        while ($row = $result->fetch()) {
            $productsList[$i]['idProduct'] = $row['idProduct'];
            $productsList[$i]['name'] = $row['name'];
            $productsList[$i]['description'] = $row['description'];
            $productsList[$i]['price'] = $row['price'];
            $productsList[$i]['new'] = $row['is_new'];
            $productsList[$i]['topsales'] = $row['is_topsales'];
            $productsList[$i]['image'] = $row['image'];
            $i++;
        }
        return $productsList;
    }

    /**
     * Получение определенного количества последних товаров из БД
     * @param int $count
     * @return array
     */
    public static function getProducts($count = self::SHOW_BY_DEFAULT, $page)
    {
        $count = intval($count);

        $page = intval($page);
        $offset = intval(($page - 1) * $count);

        $db = Db::getConnection();

        $productsList = array();

        //Запрос к БД всей информации по товарам и запись их в переменную
        $result = $db->query('
         SELECT idProduct, name, description, price, is_topsales, is_new, image
         FROM product 
         WHERE status = "1"
         ORDER BY idProduct ASC 
         LIMIT ' . $count . ' 
         OFFSET ' . $offset);

        $i = 0;
        while ($row = $result->fetch()) {
            $productsList[$i]['idProduct'] = $row['idProduct'];
            $productsList[$i]['name'] = $row['name'];
            $productsList[$i]['description'] = $row['description'];
            $productsList[$i]['price'] = $row['price'];
            $productsList[$i]['new'] = $row['is_new'];
            $productsList[$i]['topsales'] = $row['is_topsales'];
            $productsList[$i]['image'] = $row['image'];
            $i++;
        }
        return $productsList;
    }

    /**
     * Получение определенного количества Хитов Продаж из БД
     * @param int $count
     * @return array
     */
    public static function getTopSalesProducts($count = self::SHOW_BY_DEFAULT)
    {
        $count = intval($count);

        $db = Db::getConnection();

        $productsList = array();

        //Запрос к БД всей информации по товарам и запись их в переменную
        $result = $db->query('
         SELECT idProduct, name, description, price, is_topsales, is_new, image
         FROM product 
         WHERE status = 1 AND is_topsales = 1
         ORDER BY idProduct ASC 
         LIMIT ' . $count);

        $i = 0;
        while ($row = $result->fetch()) {
            $productsList[$i]['idProduct'] = $row['idProduct'];
            $productsList[$i]['name'] = $row['name'];
            $productsList[$i]['description'] = $row['description'];
            $productsList[$i]['price'] = $row['price'];
            $productsList[$i]['topsales'] = $row['is_topsales'];
            $productsList[$i]['new'] = $row['is_new'];
            $productsList[$i]['image'] = $row['image'];
            $i++;
        }
        return $productsList;
    }

    /**
     * Получение определенного количества Новых товаров
     * @param int $count
     * @return array
     */
    public static function getNewProducts($count = self::SHOW_BY_DEFAULT)
    {
        $count = intval($count);

        $db = Db::getConnection();

        $productsList = array();

        //Запрос к БД всей информации по товарам и запись их в переменную
        $result = $db->query('
         SELECT idProduct, name, description, price, is_topsales, is_new, image
         FROM product 
         WHERE status = 1 AND is_new = 1
         ORDER BY idProduct ASC 
         LIMIT ' . $count);

        $i = 0;
        while ($row = $result->fetch()) {
            $productsList[$i]['idProduct'] = $row['idProduct'];
            $productsList[$i]['name'] = $row['name'];
            $productsList[$i]['description'] = $row['description'];
            $productsList[$i]['price'] = $row['price'];
            $productsList[$i]['topsales'] = $row['is_topsales'];
            $productsList[$i]['new'] = $row['is_new'];
            $productsList[$i]['image'] = $row['image'];
            $i++;
        }
        return $productsList;
    }

    /**
     * Получение определенного количества Рекомендованных товаров
     * @param int $count
     * @return array
     */
    public static function getRecomendetProducts($count = self::SHOW_BY_DEFAULT)
    {
        $count = intval($count);

        $db = Db::getConnection();

        $productsList = array();

        //Запрос к БД всей информации по товарам и запись их в переменную
        $result = $db->query('
         SELECT idProduct, name, description, price, is_topsales, is_new, is_recomendet, image
         FROM product 
         WHERE status = 1 AND is_recomendet = 1
         ORDER BY idProduct ASC 
         LIMIT ' . $count);

        $i = 0;
        while ($row = $result->fetch()) {
            $productsList[$i]['idProduct'] = $row['idProduct'];
            $productsList[$i]['name'] = $row['name'];
            $productsList[$i]['description'] = $row['description'];
            $productsList[$i]['price'] = $row['price'];
            $productsList[$i]['topsales'] = $row['is_topsales'];
            $productsList[$i]['new'] = $row['is_new'];
            $productsList[$i]['image'] = $row['image'];
            $i++;
        }
        return $productsList;
    }

    /**
     * Получение количества всех товаров из бд
     * @return mixed
     */
    public static function getTotalProducts()
    {
        $db = Db::getConnection();
        $result = $db->query('
        SELECT count(idProduct) AS count 
        FROM product
        WHERE status = 1
        ');

        $result->setFetchMode(PDO::FETCH_ASSOC);
        $row = $result->fetch();

        return $row['count'];
    }

    /**
     * Получение количества товаров в определенной категории
     * @param $categoryId
     * @return mixed
     */
    public static function getTotalProductsInCategory($categoryId)
    {
        $db = Db::getConnection();

        $result = $db->query('
        SELECT count(idProduct) AS count
        FROM product
        WHERE status = 1 AND idCategory = ' . $categoryId);

        $result->setFetchMode(PDO::FETCH_ASSOC);
        $row = $result->fetch();

        return $row['count'];

    }

    /**
     * Получение товаров по идентификатору
     * @param $idsArray
     * @return array
     */
    public static function getProductsByIds($idsArray)
    {
        $products = array();

        $db = Db::getConnection();

        $idsString = implode(',', $idsArray);

        $sql = "SELECT * FROM product WHERE status = '1' AND idProduct IN ($idsString)";

        $result = $db->query($sql);
        $result->setFetchMode(PDO::FETCH_ASSOC);

        $i = 0;
        while ($row = $result->fetch()) {
            $products[$i]['idProduct'] = $row['idProduct'];
            $products[$i]['name'] = $row['name'];
            $products[$i]['description'] = $row['description'];
            $products[$i]['price'] = $row['price'];
            $products[$i]['image'] = $row['image'];
            $i++;
        }
        return $products;
    }

    /**
     * Получение товаров из определенной категории по страницам
     * @param false $categoryId
     * @param int $count
     * @return array
     */
    public static function getProductsByCategory($categoryId = false, $count = self::SHOW_BY_DEFAULT)
    {
        if ($categoryId) {

            $count = intval($count);
            $db = Db::getConnection();

            $products = array();

            $query = '
            SELECT idProduct, name, description, price, is_topsales, is_new, is_recomendet, image
            FROM product 
            WHERE status = "1" AND idCategory = ' . $categoryId . '
            ORDER BY idProduct ASC
            LIMIT ' . $count;

            $result = $db->query($query);

            $i = 0;
            while ($row = $result->fetch()) {
                $products[$i]['idProduct'] = $row['idProduct'];
                $products[$i]['name'] = $row['name'];
                $products[$i]['description'] = $row['description'];
                $products[$i]['price'] = $row['price'];
                $products[$i]['new'] = $row['is_new'];
                $products[$i]['topsales'] = $row['is_topsales'];
                $products[$i]['image'] = $row['image'];
                $i++;
            }
            return $products;

        }
    }


    /**
     * Получение товаров из определенной категории по страницам
     * @param false $categoryId
     * @param int $page
     * @return array
     */
    public static function getProductsListByCategory($categoryId = false, $page = 1)
    {
        if ($categoryId) {

            $count = intval(self::SHOW_BY_DEFAULT);

            $page = intval($page);
            $offset = intval(($page - 1) * $count);

            $db = Db::getConnection();

            $products = array();

            $query = '
            SELECT idProduct, name, description, price, is_topsales, is_new, is_recomendet, image
            FROM product 
            WHERE status = "1" AND idCategory = ' . $categoryId . '
            ORDER BY idProduct ASC
            LIMIT ' . $count . ' OFFSET ' . $offset;

            $result = $db->query($query);

            $i = 0;
            while ($row = $result->fetch()) {
                $products[$i]['idProduct'] = $row['idProduct'];
                $products[$i]['name'] = $row['name'];
                $products[$i]['description'] = $row['description'];
                $products[$i]['price'] = $row['price'];
                $products[$i]['new'] = $row['is_new'];
                $products[$i]['topsales'] = $row['is_topsales'];
                $products[$i]['image'] = $row['image'];
                $i++;
            }
            return $products;

        }
    }

}