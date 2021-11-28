<?php
class Protype extends Db{
    public function getAllManuType(){
        $sql = self::$connection->prepare("SELECT * FROM protypes");
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
    public function getAllManuTypeDesc(){
        $sql = self::$connection->prepare("SELECT * FROM protypes ORDER BY `type_id` DESC");
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
    public function addProtypes($name)
    {
        $sql = self::$connection->prepare("INSERT INTO `protypes`(`type_name`) VALUES (?)");
        $sql->bind_param("s", $name);
        return $sql->execute();
    }
    public function delProtypes($id)
    {
        $sql = self::$connection->prepare("DELETE FROM `protypes` WHERE `type_id` = ?");
        $sql->bind_param("i", $id);
        return $sql->execute();
    }
}