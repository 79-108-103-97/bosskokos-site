<?php


class CatalogController
{

    /**
     * Отображение страницы каталога
     * @param int $page
     * @return bool
     */
    public function actionIndex($page = 1)
    {

        $categories = array();
        $categories = Category::getCategoriesList();

        $recomendetProducts = array();
        $recomendetProducts = Product::getRecomendetProducts();

        $count = 12;
        $latestProducts = array();
        $errors = false;
        if (isset($_POST['search'])) {
            $querySearch = $_POST['query'];
            $latestProducts = Product::getProductsForSearch($querySearch);

            if (!isset($latestProducts[0])) {
                $errors[] = 'Сожалеем, но мы ничего не нашли!';
            }
        } else {
            $latestProducts = Product::getProducts($count, $page);
            $total = Product::getTotalProducts();
            $temp = ceil($total / $count);
            $temp = ceil($total / $temp) - 1;

            $pagination = new Pagination($total, $page, $temp, 'page-');
        }


        require_once(ROOT . '/views/catalog/index.php');
        return true;

    }

    /**
     * Отображение страницы каталога по категориям
     * @param $categoryId
     * @param int $page
     * @return bool
     */
    public function actionCategory($categoryId, $page = 1)
    {


        $categories = array();
        $categories = Category::getCategoriesList();

        $recomendetProducts = array();
        $recomendetProducts = Product::getRecomendetProducts();

        $categoryProducts = array();
        $categoryProducts = Product::getProductsListByCategory($categoryId, $page);

        $total = Product::getTotalProductsInCategory($categoryId);

        if ($total != 0) {
            $count = Product::SHOW_BY_DEFAULT;
            $temp = ceil($total / $count);
            $temp = ceil($total / $temp) - 1;

            if ($total > $count) {
                $pagination = new Pagination($total, $page, $temp, 'page-');
            }
        }

        require_once(ROOT . '/views/catalog/category.php');
        return true;
    }
}