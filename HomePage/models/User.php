<?php
class User extends Db{
    public function checkLogin($username, $password){
        $sql = self::$connection->prepare("SELECT * FROM `user` WHERE `Username` = ? AND `Password` = ?");
        $password = md5($password);
        $sql->bind_param("ss",$username, $password);
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->num_rows;
        if($items == 1){
            return true;
        }
        else{
            return false;
        }
    }
    public function addUser($name, $username, $password, $email, $sdt)
    {
        $sql = self::$connection->prepare("INSERT INTO `user`(`Name`, `Username`, `Password`, `Email`, `SDT`) VALUES (?,?,?,?,?)");
        $password = md5($password);
        $sql->bind_param("sssss", $name, $username, $password, $email, $sdt);
        return $sql->execute();
    }
    public function getAllUser($username)
    {
        $sql = self::$connection->prepare("SELECT * FROM `user` WHERE `Username` = ?");
        $sql->bind_param("s", $username);
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
}
?>