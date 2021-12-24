<?php
class User extends Db
{
    //Lấy ra các sp product lk manufactures, protypes:
    public function getAllUser()
    {
        $sql = self::$connection->prepare("SELECT * FROM `user` ORDER BY  User_id  DESC");
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
}