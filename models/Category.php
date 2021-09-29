<?php


class Category
{
    /**
     * Получение всех отображаемых категорий товаров
     * @return array
     */
    public static function getCategoriesList()
    {
        $db = Db::getConnection();

        $categoryList = array();

        $result = $db->query('
            SELECT *
            FROM categories
            WHERE statusCategory = "1"
            ORDER BY sort_orderCategory ASC
        ');

        $i = 0;
        while ($row = $result->fetch()) {
            $categoryList[$i]['id'] = $row['idCategory'];
            $categoryList[$i]['name'] = $row['nameCategory'];
            $categoryList[$i]['sort_order'] = $row['sort_orderCategory'];
            $categoryList[$i]['status'] = $row['statusCategory'];
            $i++;
        }

        return $categoryList;
    }

    /**
     * Получение всех категорий товаров
     * @return array
     */
    public static function getCategoriesAllList()
    {
        $db = Db::getConnection();

        $categoryList = array();

        $result = $db->query('SELECT * FROM categories');

        $i = 0;
        while ($row = $result->fetch()) {
            $categoryList[$i]['id'] = $row['idCategory'];
            $categoryList[$i]['name'] = $row['nameCategory'];
            $categoryList[$i]['sort_order'] = $row['sort_orderCategory'];
            $categoryList[$i]['status'] = $row['statusCategory'];
            $i++;
        }

        return $categoryList;
    }

    /**
     * Получение определенной категории по айди
     * @param $id
     * @return array
     */
    public static function getCategoryById($id)
    {
        $db = Db::getConnection();

        $category = array();
        $result = $db->query('
            SELECT *
            FROM categories
            WHERE idCategory = '. $id);

        $result->setFetchMode(PDO::FETCH_ASSOC);
        $row = $result->fetch();

        $category['id'] = $row['idCategory'];
        $category['name'] = $row['nameCategory'];
        $category['sort_order'] = $row['sort_orderCategory'];
        $category['status'] = $row['statusCategory'];
        return $category;
    }


    /**
     * Изменение определенной категории
     * @param $id
     * @param $name
     * @param $sort_order
     * @param $status
     * @return bool
     */
    public static function changeCategoryById($id, $name, $sort_order, $status)
    {
        $db = Db::getConnection();

        $sql = '
            UPDATE categories
            SET nameCategory = :name,
            sort_orderCategory = :sort_order,
            statusCategory = :status
            WHERE idCategory = :id
            ';
        $result = $db->prepare($sql);
        $result->bindParam(':name', $name, PDO::PARAM_STR);
        $result->bindParam(':sort_order', $sort_order, PDO::PARAM_INT);
        $result->bindParam(':status', $status, PDO::PARAM_INT);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        return $result->execute();
    }

    /**
     * Удаление категории
     * @param $id
     * @return bool
     */
    public static function deleteCategoryById($id){
        $db = Db::getConnection();
        $sql = 'DELETE FROM categories WHERE idCategory =  :id ';
        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        return $result->execute();
    }

    public static function addCategory($name, $sort_order, $status)
    {
        $db = Db::getConnection();

        $sql ='INSERT INTO categories (nameCategory, sort_orderCategory,statusCategory) 
               VALUES (:name, :sort_order, :status)';
        $result = $db->prepare($sql);
        $result->bindParam(':name', $name, PDO::PARAM_STR);
        $result->bindParam(':sort_order', $sort_order, PDO::PARAM_INT);
        $result->bindParam(':status', $status, PDO::PARAM_INT);
        return $result->execute();
    }
}