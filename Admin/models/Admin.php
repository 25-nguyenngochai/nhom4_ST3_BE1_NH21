<?php
class Admin extends Db{
    public function checkLogin($username, $password){
            $sql = self::$connection->prepare("SELECT * FROM `admin` WHERE `Username` = ? AND `Password` = ?");
            $password = md5($password);
            $sql->bind_param("ss", $username, $password);
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
   }

?>