<?php
    class postmodel extends DModel{
      public function __construct(){
        parent::__construct();
      }
      //category product
    public function category_post($table){
      $sql = "SELECT * FROM $table ORDER BY id_category_post ASC";
      return $this->db->select($sql);
      }
       public function postbyid($table_post,$cond){
        $sql = "SELECT * FROM $table_post WHERE $cond";
        return $this->db->select($sql);
      }
    
  
      public function insertpost($table_post,$data){
        return $this->db->insert($table_post,$data);
      }
      public function post($table_post ,$table_category){
        $sql = "SELECT * FROM $table_post ,$table_category WHERE $table_post.id_category_post = $table_category.id_category_post 
        ORDER BY $table_post.id_post ASC";
        return $this->db->select($sql);
      }
      public function list_post_home($post){
        $sql = "SELECT * FROM $post ORDER BY id_post ASC";
        return $this->db->select($sql);
      }
      
      public function updatepost($table_post,$data,$cond)
      {
        return $this->db->update($table_post,$data,$cond); 
      }

      public function deletepost($table_post,$cond)
      {
        return $this->db->delete($table_post,$cond); 
      }
     
     
     
  }
?>



