<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Search extends CI_Controller {

 public function index()
 {
  $this->load->view('frontend/merchant_dasboard/check');
 }

 public function checkUsername()
 {
  $this->load->model('Search_model');
  if($this->Search_model->getUsername($_POST['username'])){
   echo '1';
  }
  else {
   echo '0';
  }
 }

}