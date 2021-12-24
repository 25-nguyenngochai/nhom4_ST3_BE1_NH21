<?php
class Details extends Db{
    public function addDetails($Username, $Name, $Email, $SDT, $SoLuong, $Tensp, $price)
    {
        $sql = self::$connection->prepare("INSERT INTO `chitietdonhang`(`Username`, `Name`, `Email`, `SDT`, `SoLuong`, `Tensp`, `price`) VALUES(?,?,?,?,?,?,?)");
        $sql->bind_param("ssssisi", $Username, $Name, $Email, $SDT, $SoLuong, $Tensp, $price);
        return $sql->execute(); //return an object
    }
}
    ?>