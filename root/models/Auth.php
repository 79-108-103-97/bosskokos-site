<?php


class Auth
{
    /**
     * Проверкав входа
     * @return mixed
     */
    public static function checkLogged()
    {
        if (isset($_SESSION['user'])) {
            return $_SESSION['user'];
        }
        header("Location: /admin/login/");
    }

    /**
     * Регистрация пользователя по айди
     * @param $userId
     */
    public static function authUser($userId)
    {
        $_SESSION['user'] = $userId;
    }

    /**
     * Проверка на существование пользователя
     * @param $name
     * @param $password
     * @return false|mixed
     */
    public static function checkUserData($name, $password)
    {
        $db = Db::getConnection();

        $sql = 'SELECT * FROM user WHERE email = :name AND password =:password';

        $result = $db->prepare($sql);
        $result->bindParam(':name', $name, PDO::PARAM_INT);
        $result->bindParam(':password', $password, PDO::PARAM_INT);

        $result->execute();

        $user = $result->fetch();
        if ($user) {
            return $user['id'];
        }
        return false;

    }

    /**
     * Проверка на правильный ввод имени
     * @param $name
     * @return bool
     */
    public static function checkName($name)
    {
        if (strlen($name) >= 2) {
            return true;
        }
        return false;
    }

    /**
     * Проверка на правильный ввод пароля
     * @param $password
     * @return bool
     */
    public static function checkPassword($password)
    {
        if (strlen($password) >= 6) {
            return true;
        }
        return false;
    }

}