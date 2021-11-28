<?php
class Manufacture extends Db{
    public function getAllManu(){
        $sql = self::$connection->prepare("SELECT * FROM manufactures");
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
    public function getAllManuDesc(){
        $sql = self::$connection->prepare("SELECT * FROM manufactures ORDER BY `manu_id` DESC");
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
    public function addManufactures($name)
    {
        $sql = self::$connection->prepare("INSERT INTO `manufactures`(`manu_name`) VALUES (?)");
        $sql->bind_param("s", $name);
        return $sql->execute();
    }
    public function delManufactures($id)
    {
        $sql = self::$connection->prepare("DELETE FROM `manufactures` WHERE `manu_id` = ?");
        $sql->bind_param("i", $id);
        return $sql->execute();
    }
}