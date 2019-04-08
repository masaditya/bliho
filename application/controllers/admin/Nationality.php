<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Nationality extends Admin_Controller {

  public function __construct()
  {
    parent::__construct();
    $this->load->model(array('Model_nationality'));
  }

  public function index()
  {
    $this->render['nationality'] = $this->model_nationality->select_all();

    $this->render['content']       = $this->load->view('admin/member/member', $this->render, true);

    $this->render['title']         = "Member";
    $this->render['desc']		       = "Member";
    $this->render['breadcrumb']    = array('Dashboard', 'Member');

    $this->load->view('admin/template', $this->render);
  }

  public function memberRegister()
  {
    $this->render['content']       = $this->load->view('admin/member/register/member', $this->render, true);

    $this->render['title']         = "Member Baru";
    $this->render['desc']		       = "Member Belum Di Verifikasi";
    $this->render['breadcrumb']    = array('Dashboard', 'Member');

    $this->load->view('admin/template', $this->render);
  }

  public function detail_by_id($id)
  {
    $this->render['detail_member'] = $this->Model_member->select_by_id($id);

    $this->render['content']       = $this->load->view('admin/member/register/detail_member', $this->render, true);

    $this->render['title']         = "Kamar";
    $this->render['desc']		       = "Detail kamar by member";
    $this->render['breadcrumb']    = array('Dashboard', 'Kamar');

    $this->load->view('admin/template', $this->render);
  }

  public function add_data(){
    $this->render['title']         = "Member";
    $this->render['desc']		       = "Member";
    $this->render['breadcrumb']    = array('Dashboard', 'Member');
    $this->render['content']       = $this->load->view('admin/member/member_new', $this->render, true);
    $this->load->view('admin/template', $this->render);
  }

  public function insert()
  {
    $res = $this->Model_member->insert();

    if($res >= true){
      redirect('index.php/admin/member');
    }else{
      echo"insert gagal";
    }
  }

  public function edit_data($id)
  {
    $this->render['kategori_member'] = $this->Kategori_member_model->select_all();
    $this->render['member'] = $this->Model_member->select_by_id($id);

    $this->render['title']         = "Member";
    $this->render['desc']		       = "Member";
    $this->render['breadcrumb']    = array('Dashboard', 'Member');
    $this->render['content']       = $this->load->view('admin/member/member_edit', $this->render, true);

    $this->load->view('admin/template', $this->render);
  }

  public function do_update()
  {
    $id = $this->input->post('id');;

    $res= $this->Model_member->update($id);

    if($res >= true){
      redirect('index.php/admin/member/index');
    }else{
      echo"update gagal";
    }
  }

  function verifikasi_member($id)
  {
    $res= $this->Model_member->update_verifikasi($id);

    if($res >= true){
      $this->session->set_flashdata('success_message', 'Member Terverifikasi');
      redirect('index.php/admin/Member/New/Register','refresh');
    }else{
      $this->session->set_flashdata('error_message', 'Member Terverifikasi');
      redirect('index.php/admin/Member/New/Register','refresh');
    }
  }

  public function do_delete($id)
  {
    if ($id != null) {
    $this->Model_member->delete($id);
    redirect('index.php/admin/member/index');
  }else {
    echo "delete gagal";
  }
  }
}
