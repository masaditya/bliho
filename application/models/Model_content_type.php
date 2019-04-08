<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_content_type extends CI_Model{

  var $table = "tabel_content_type";

  public function select_all($limit = null)
  {
    $query = $this->db->get($this->table);

    if($query->num_rows() > 0)
    {
      return $query->result_array();
    }
    else
    {
      return array();
    }
  }

  public function select_by_id($id)
  {
    $this->db->where('content_type_id', $id);
    $query = $this->db->get($this->table);

    if($query->num_rows() == 1)
    {
      return $query->result_array();
    }
    else
    {
      return false;
    }
  }

  public function insert(){
    // $data = array(
    //   'nama_fasilitasToilet' => $this->input->post('nama')
    // );

    // $res = $this->db->insert($this->table,$data);
    // return $res;
  }

  public function update($id){
    // $data = array(
    //   'nama_fasilitasToilet' => $this->input->post('nama')
    // );

    // $this->db->where('id_fasilitasToilet', $id);
    // $res = $this->db->update($this->table,$data);
    // return $res;
  }

  public function delete($id)
  {
//     $this->db->where('id_fasilitasToilet', $id);

//     if($this->db->delete($this->table))
//     {
//         return true;
//     }else {
//       return false;
//     }
   }
}
