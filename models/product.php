<?php
class Product extends Db
{
    public function getAllProducts()
    {
        $sql = self::$connection->prepare("SELECT * FROM products ");
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
    public function getProductById($id)
    {
        $sql = self::$connection->prepare("SELECT * FROM products WHERE id = ?");
        $sql->bind_param("i",$id);
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
    public function getNewsProducts()
    {
        $sql = self::$connection->prepare("SELECT * FROM products ORDER BY id DESC LIMIT 10");
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
    public function getProductSearch($keyword)
    {
        $sql = self::$connection->prepare("SELECT * FROM products WHERE `name` LIKE ?");
        $keyword = "%$keyword%";
        $sql->bind_param("s", $keyword);
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
    public function getAllProductsSP($type_id)
    {
        $sql = self::$connection->prepare("SELECT * FROM `products` WHERE `type_id` = ?");
        $sql->bind_param("i", $type_id);
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
    public function getAllProductsSPMN($type_id)
    {
        $sql = self::$connection->prepare("SELECT * FROM `products` WHERE `type_id` = ? ORDER BY id DESC LIMIT 5");
        $sql->bind_param("i", $type_id);
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
    public function getNewsProductsTopNB()
    {
        $sql = self::$connection->prepare("SELECT * FROM products WHERE `feature` = 1 ORDER BY id DESC LIMIT 10");
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
    //NHỮNG SP NỔI BẬT:
    public function getNewsProductsTopNB1()
    {
        $sql = self::$connection->prepare("SELECT * FROM products WHERE `feature` = 1 ORDER BY id DESC LIMIT 0,3");
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
    public function getNewsProductsTopNB2()
    {
        $sql = self::$connection->prepare("SELECT * FROM products WHERE `feature` = 1 ORDER BY id DESC LIMIT 3,3");
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
    public function getNewsProductsTopNB3()
    {
        $sql = self::$connection->prepare("SELECT * FROM products WHERE `feature` = 1 ORDER BY id DESC LIMIT 6,3");
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
    public function getNewsProductsTopNB4()
    {
        $sql = self::$connection->prepare("SELECT * FROM products WHERE `feature` = 1 ORDER BY id DESC LIMIT 9,3");
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
    public function getNewsProductsTopNB5()
    {
        $sql = self::$connection->prepare("SELECT * FROM products WHERE `feature` = 1 ORDER BY id DESC LIMIT 12,3");
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
    public function getNewsProductsTopNB6()
    {
        $sql = self::$connection->prepare("SELECT * FROM products WHERE `feature` = 1 ORDER BY id DESC LIMIT 15,3");
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
}