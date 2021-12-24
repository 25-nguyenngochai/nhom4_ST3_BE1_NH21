<?php
class Product extends Db
{
    //Lấy ra các sp product lk manufactures, protypes:
    public function getAllProducts()
    {
        $sql = self::$connection->prepare("SELECT * FROM products, manufactures, protypes WHERE products.manu_id = manufactures.manu_id AND products.type_id =  protypes.type_id ORDER BY id DESC");
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
    //Lấy ra các sp product lk manufactures, protypes theo id:
    public function getAllProductsById($id)
    {
        $sql = self::$connection->prepare("SELECT * FROM products, manufactures, protypes WHERE products.manu_id = manufactures.manu_id AND products.type_id =  protypes.type_id AND id = ?");
        $sql->bind_param("i",$id);
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
    //Lấy ra các sản phẩm theo $id:
    public function getProductById($id)
    {
        $sql = self::$connection->prepare("SELECT * FROM products WHERE id = ?");
        $sql->bind_param("i",$id);
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
    //Seach:
    public function getProductSearch($keyword)
    {
        $sql = self::$connection->prepare("SELECT * FROM products, manufactures, protypes WHERE products.manu_id = manufactures.manu_id AND products.type_id =  protypes.type_id AND `name` LIKE ? ");
        $keyword = "%$keyword%";
        $sql->bind_param("s", $keyword);
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
    //Phân trang products.php:
    public function getProductSearchPT($keyword, $page, $perPage)
    {
        // Tính số thứ tự trang bắt đầu
        $firstLink = ($page - 1) * $perPage;
        $sql = self::$connection->prepare("SELECT * FROM products, manufactures, protypes WHERE products.manu_id = manufactures.manu_id AND products.type_id =  protypes.type_id AND `name` LIKE ? ORDER BY id LIMIT ?, ?");
        $keyword = "%$keyword%";
        $sql->bind_param("sii", $keyword, $firstLink, $perPage);
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
    //phân trang 1,2,3....:
    function paginate($url, $total, $perPage)
    {
        $totalLinks = ceil($total/$perPage);
 	    $link ="";
    	for($j=1; $j <= $totalLinks ; $j++)
     	{
      		$link = $link."<button><a href='$url&page=$j'> $j </a></button>";
     	}
     	return $link;
    }
    public function addProducts($name, $manu_id, $type_id, $price, $image, $description, $feature)
    {
        $sql = self::$connection->prepare("INSERT INTO `products`(`name`, manu_id, `type_id`, `price`, `image`, `description`, feature) VALUES(?,?,?,?,?,?,?)");
        $sql->bind_param("siiissi", $name, $manu_id, $type_id, $price, $image, $description, $feature);
        return $sql->execute(); //return an object
    }
    public function delProducts($id)
    {
        $sql = self::$connection->prepare("DELETE FROM `products` WHERE `id` = ?");
        $sql->bind_param("i", $id);
        return $sql->execute();
    }
    public function editProduct($id, $name, $manu_id, $type_id, $price, $image, $description, $feature)
    {
        if ($image == "") {
            $sql = self::$connection->prepare("UPDATE products 
            SET `name` = ?, manu_id = ?, `type_id` = ?, price = ?, `description` = ?, feature = ?
            WHERE id = ?");
            $sql->bind_param("siiisii", $name, $manu_id, $type_id, $price, $description, $feature, $id);
        } else {
            $sql = self::$connection->prepare("UPDATE products 
            SET `name` = ?, manu_id = ?, `type_id` = ?, price = ?, `image` = ?, `description` = ?, feature = ?
            WHERE id = ?");
            $sql->bind_param("siiissii", $name, $manu_id, $type_id, $price, $image, $description, $feature, $id);
        }
        return $sql->execute();
    }
}