<?php


class Mail
{
    public static function SendMail($nameUser, $telUser, $commentUser, $totalPrice, $order)
    {
        $message = '
             Имя пользователя: ' . $nameUser . '.
             Номер телефона: ' . $telUser . '.
             Комментарий: ' . $commentUser . '.
             Общая стоимость заказа: ' . $totalPrice . ' руб.
             Заказ: ' . $order;
        $email = 'olga110723@gmail.com';
        $subjects = 'Новый заказ!';
        $_SESSION['orderDone'] = true;
        unset($_SESSION['products']);
        mail($email, $subjects, $message);
    }

    public static function CheckData($nameUser, $telUser, $commentUser)
    {
        if ((!empty($nameUser)) && (!empty($telUser)) && (!empty($commentUser))) {
            return true;
        }
        return false;
    }
}