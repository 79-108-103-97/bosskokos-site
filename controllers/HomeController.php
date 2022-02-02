<?php

class HomeController
{
    /**
     * Отображение главной страницы
     * @return bool
     */
    public function actionIndex(){

        $categories = array();
        $categories = Category::getCategoriesList();

        $topSalesProducts = array();
        $topSalesProducts = Product::getTopSalesProducts();

        $newProducts = array();
        $newProducts = Product::getNewProducts();

        $recomendetProducts = array();
        $recomendetProducts = Product::getRecomendetProducts();

        $basketsProducts = array();
        $basketsProducts = Product::getProductsByCategory(6);

        require_once (ROOT.'/views/home/index.php');

        return true;
    }


}