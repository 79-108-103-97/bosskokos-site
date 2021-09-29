<?php

class AdminController
{
    /**
     * Проверка входа и отображение админ панели
     * @return bool
     */
    public function actionIndex()
    {
        $userId = Auth::checkLogged();

        $user = User::getUserById($userId);

        $_SESSION['link'] = 'home';
        require_once(ROOT . '/root/views/home/index.php');
        return true;
    }

    /**
     * Вход в панель админа
     * @return bool
     */
    public function actionLogin()
    {
        $name = '';
        $password = '';

        $errors = false;

        if (isset($_POST['submit'])) {
            $name = $_POST['name'];
            $password = md5($_POST['password']);

            $userId = Auth::checkUserData($name, $password);

            if ($userId == false) {
                $errors[] = 'User not found';
            } else {
                Auth::authUser($userId);

                header("Location: /admin/");
            }

        }
        require_once(ROOT . '/root/views/auth/auth.php');
        return true;
    }

    /**
     * Выход из профиля админ панели
     */
    public function actionLogout()
    {
        unset($_SESSION['user']);
        header("Location: /admin/");
    }

    /**
     * Проверка входа и доступ к странице категорий
     * @return bool
     */
    public function actionCategory()
    {
        $userId = Auth::checkLogged();
        $user = User::getUserById($userId);

        $categories = Category::getCategoriesAllList();

        $_SESSION['link'] = 'category';
        require_once(ROOT . '/root/views/catalog/category.php');
        return true;
    }

    /**
     * Изменение категории
     * @param $categoryId
     * @return bool
     */
    public function actionCategoryChange($categoryId)
    {
        $userId = Auth::checkLogged();
        $user = User::getUserById($userId);
        $category = Category::getCategoryById($categoryId);
        if (isset($_POST['submit'])) {

            $newName = $_POST['name'];
            $newSortOrder = $_POST['sort_order'];
            $newStatus = $_POST['status'];
            Category::changeCategoryById($categoryId, $newName, $newSortOrder, $newStatus);
            header('Location: /admin/category/');
        }

        require_once(ROOT . '/root/views/catalog/categoryChange.php');
        return true;
    }

    /**
     * Удаление категории
     * @param $categoryId
     * @return bool
     */
    public function actionCategoryDelete($categoryId)
    {

        $userId = Auth::checkLogged();
        $user = User::getUserById($userId);

        if (isset($_POST['submit'])) {
            Category::deleteCategoryById($categoryId);
            header('Location: /admin/category/');
        }
        require_once(ROOT . '/root/views/catalog/categoryDelete.php');
        return true;
    }

    public function actionSettings()
    {
        $userId = Auth::checkLogged();
        $user = User::getUserById($userId);

        require_once (ROOT . '/root/views/home/settings.php');
        return true;
    }

    /**
     * обавление категории
     * @return bool
     */
    public function actionCategoryAdd()
    {
        $userId = Auth::checkLogged();
        $user = User::getUserById($userId);
        if (isset($_POST['submit'])) {
            $newName = $_POST['name'];
            $newSortOrder = $_POST['sort_order'];
            $newStatus = $_POST['status'];
            Category::addCategory($newName, $newSortOrder, $newStatus);
            header('Location: /admin/category/');
        }

        require_once(ROOT . '/root/views/catalog/categoryAdd.php');
        return true;
    }

    public function actionProduct()
    {
        $userId = Auth::checkLogged();
        $user = User::getUserById($userId);

        $products = Product::getAllProducts();

        $_SESSION['link'] = 'product';
        require_once(ROOT . '/root/views/catalog/products.php');
        return true;
    }

    public function actionProductAdd()
    {
        $userId = Auth::checkLogged();
        $user = User::getUserById($userId);

        $_SESSION['link'] = 'product';
        require_once(ROOT . '/root/views/catalog/productsAdd.php');
        return true;
    }

    public function actionProductChange()
    {
        $userId = Auth::checkLogged();
        $user = User::getUserById($userId);

        $products = Product::getAllProducts();

        $_SESSION['link'] = 'product';
        require_once(ROOT . '/root/views/catalog/products.php');
        return true;
    }

    public function actionProductDelete()
    {
        $userId = Auth::checkLogged();
        $user = User::getUserById($userId);

        $products = Product::getAllProducts();

        $_SESSION['link'] = 'product';
        require_once(ROOT . '/root/views/catalog/products.php');
        return true;
    }
}
