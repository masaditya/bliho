<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Search_model extends CI_Model {

 public function getUsername($username)
 {
  $this->db->where('username' , $username);
  $query = $this->db->get('tabel_merchant');

  if($query->num_rows()>0){
   return true;
  }
  else {
   return false;
  }
 }
}