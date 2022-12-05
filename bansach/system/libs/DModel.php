<?php
class DModel{
   protected $db = array();
    public function __construct(){
       //host = ip máy mình không phải localhost nhé
       $connect = 'mysql:dbname=pdo_web; host=localhost;charset=utf8';
       $user = 'root';
       $password = '';
       $this -> db = new Database($connect,$user,$password);
    }
 }
?>