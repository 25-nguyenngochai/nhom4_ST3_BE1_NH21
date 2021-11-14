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
    public function getProductByTypeId($type_id)
    {
        $sql = self::$connection->prepare("SELECT * FROM products WHERE `type_id` = ?");
        $sql->bind_param("i", $type_id);
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
    public function getAllProductsSPMN($type_id)
    {
        $sql = self::$connection->prepare("SELECT * FROM `products` WHERE `type_id` = ? ORDER BY id");
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
    public function getAllProductsSPNB($type_id)
    {
        $sql = self::$connection->prepare("SELECT * FROM products WHERE `type_id` = ? AND `feature` = 1 ORDER BY id");
        $sql->bind_param("i", $type_id);
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
    public function getNewsProductsTopKNB()
    {
        $sql = self::$connection->prepare("SELECT * FROM `products` WHERE feature = 0");
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
    public function getAllProductsSPNBTypeid($type_id)
    {
        $sql = self::$connection->prepare("SELECT * FROM products WHERE `type_id` = ? AND feature = 0");
        $sql->bind_param("i", $type_id);
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
    //Phân trang products.php:
    public function get6ProductByManuId($type_id, $page, $perPage)
    {
        // Tính số thứ tự trang bắt đầu
        $firstLink = ($page - 1) * $perPage;
        $sql = self::$connection->prepare("SELECT * FROM products
        WHERE `type_id` = ? LIMIT ?, ?");
        $sql->bind_param("iii", $type_id, $firstLink, $perPage);
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
    function paginate($url, $total, $perPage)
    {
        $totalLinks = ceil($total/$perPage);
 	    $link ="";
    	for($j=1; $j <= $totalLinks ; $j++)
     	{
      		$link = $link."<li><a href='$url&page=$j'> $j </a></li>";
     	}
     	return $link;
    }

    public function paginate1($url, $total, $perPage, $page, $offset)
    {
  
      if ($total <= 0) {
        return "";
      }
  
      $totalLinks = ceil($total / $perPage);
  
      if($totalLinks <= 1) {
        return "";
      }
  
      $from = $page - $offset;
      $to = $page + $offset;
  
      if($from <= 0) {
        $from = 1;
         $to = $offset * 2;
      }
      if($to > $totalLinks) {
        $to = $totalLinks;
      }
  
  
      $link = "";
  
      for ($j = $from; $j <= $to; $j++) {
  
        // current url
        $a = "{$url}&page={$j}";
  
        if ($j != $page) {
          $link = $link . '<li><a href="' . $a . '" />' . $j . '</a></li>';
        } else {
          $link = $link . '<li class="active">' . $j . '</li>';
        }
  
  
        if ($j == $to && $to < $totalLinks) {
          $pageNext = $j + 1;
          // current url
          $a = "{$url}&page={$pageNext}";
          $link = $link . '<li><a href="' .$a .'"><i class="fa fa-angle-right"></i></a></li>';
        }
        
        if ($j == $from && $from > 1) {
          $pagePrev = $j - 1;
          // current url
          $a = "{$url}&page={$pagePrev}";
          $link = '<li><a href="' .$a .'"><i class="fa fa-angle-left"></i></a></li>' . $link;
        }
  
      }
      return $link;
    }
    public function getProductByManuId($manu_id)
    {
        $sql = self::$connection->prepare("SELECT * FROM products WHERE `manu_id` = ?");
        $sql->bind_param("i", $manu_id);
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
    //Phân trang topfeature.php:
    public function get6ProductByManTypeid($type_id, $page, $perPage)
    {
        // Tính số thứ tự trang bắt đầu
        $firstLink = ($page - 1) * $perPage;
        $sql = self::$connection->prepare("SELECT * FROM products WHERE `type_id` = ? AND `feature` = 1 ORDER BY id LIMIT ?, ?");
        $sql->bind_param("iii", $type_id, $firstLink, $perPage);
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
    //Phân trang newproducts.php:
    public function get6ProductByManType($type_id, $page, $perPage)
    {
        // Tính số thứ tự trang bắt đầu
        $firstLink = ($page - 1) * $perPage;
        $sql = self::$connection->prepare("SELECT * FROM `products` WHERE `type_id` = ? ORDER BY id LIMIT ?, ?");
        $sql->bind_param("iii", $type_id, $firstLink, $perPage);
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
    //Phân trang discount.php:
    public function get6ProductByDiscount($page, $perPage)
    {
        // Tính số thứ tự trang bắt đầu
        $firstLink = ($page - 1) * $perPage;
        $sql = self::$connection->prepare("SELECT * FROM `products` WHERE feature = 0 LIMIT ?, ?");
        $sql->bind_param("ii", $firstLink, $perPage);
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
     //Phân trang newproducts.php những sp theo type_id không nổi bật:
     public function get6ProductByKNBTypeid($type_id, $page, $perPage)
     {
         // Tính số thứ tự trang bắt đầu
         $firstLink = ($page - 1) * $perPage;
         $sql = self::$connection->prepare("SELECT * FROM products WHERE `type_id` = ? AND feature = 0 LIMIT ?, ?");
         $sql->bind_param("iii", $type_id, $firstLink, $perPage);
         $sql->execute(); //return an object
         $items = array();
         $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
         return $items; //return an array
     }
}