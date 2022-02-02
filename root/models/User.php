<?php


class User
{
    /**
     * Получение информации пользователя по айди
     * @param $id
     * @return mixed
     */
    public static function getUserById($id)
    {
        if($id){
            $db = Db::getConnection();
            $sql = 'SELECT * FROM user WHERE id = :id';

            $result = $db->prepare($sql);
            $result->bindParam(':id', $id, PDO::PARAM_INT);

            $result->setFetchMode(PDO::FETCH_ASSOC);
            $result->execute();

            return $result->fetch();
        }

    }

}