<?php
class User_model extends CI_model{
 
 public function construct() {
     parent::__construct();
      $this->load->database();
 }

     public function validate($email,$password){
  
  
    $this->db->where('user_email',$email);
    $this->db->where('user_password',$password);
    $result = $this->db->get('user_login',1);
    return $result;
  }
 
 
}

 

 
 
?>