<?php
    class customermodel extends DModel{
      public  function __construct(){
        parent::__construct();
      }
      public function insertcustomer($table_customer,$data){
        return $this->db->insert($table_customer,$data);
      }
      public function login($table_customer,$username,$password){
        $sql = "SELECT * FROM $table_customer WHERE customer_email=? AND customer_password=? ";
        return $this->db->affectedRows($sql,$username,$password);
      }
      public function getLogin($table_customer,$username,$password){
          $sql = "SELECT * FROM $table_customer WHERE customer_email=? AND customer_password=? ";
          return $this->db->selectUser($sql,$username,$password);
      }
  }
?>



