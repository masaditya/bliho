<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
    $this->load->model(array('Model_user'));
  }

  public function index()
  {
    $data['nationality'] = $this->Model_nationality->select_all();
    $data['tipeakun'] = $this->Model_tipeakun->select_all();

    $data['content']       = $this->load->view('frontend/user_dashboard/register', $data, true);
    $this->load->view('frontend/user_dashboard/register', $data);

  }

  public function insert()
  {
    $res = $this->Model_user->insert();

    if($res >= true){
      echo"insert gagal";
    }else{
      
      redirect('index.php/Frontend/user_dasboard/Register');
    }
  }

  public function do_update()
  {
    $id = $this->input->post('id');;

    $res= $this->Model_user->update($id);

    if($res >= true){
      redirect('index.php/Frontend/user_dasboard/Register');
    }else{
      echo"update gagal";
    }
  }

  public function do_delete($id)
  {
    $res = $this->Model_user->delete($id);

    if($res>=true){
      redirect('index.php/Frontend/user_dasboard/Register');
    }
    else{
      echo "delete gagal";
    }
  }
}
