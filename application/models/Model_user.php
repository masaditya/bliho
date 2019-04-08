<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_user extends CI_Model
{

  var $table = "tabel_user";

  public function __construct()
  {
    parent::__construct();
  }

  public function login_admin($data)
	{
		$condition = "email = '" . $data['email'] . "' AND password = '" . $data['password'] . "'";

		$this->db->select("*");
		$this->db->from($this->table);
		$this->db->where($condition); //kondisi login sesuai dengan data di database
		$this->db->limit(1);

		$query = $this->db->get();

		if($query->num_rows() == 1)
		{
			return $query->result();
		}
		else
		{
			return FALSE;
		}
	}

  public function select_all()
  {
    $this->db->where('tipe', 0);
    $query = $this->db->get($this->table);

    if($query->num_rows() > 0)
    {
      return $query->result();
    }
    else
    {
      return array();
    }
  }

  public function select_all_su()
  {
    $query = $this->db->get($this->table);

    if($query->num_rows() > 0)
    {
      return $query->result();
    }
    else
    {
      return array();
    }
  }

  public function select_by_id($id)
  {
    $this->db->where('id_user', $id);
    $query = $this->db->get($this->table);

    if($query->num_rows() == 1)
    {
      return $query->result();
    }
    else
    {
      return false;
    }
  }

  public function insert()
  {
    $data = array(
      'first_name'        => $this->input->post('FirstName'),
      'last_name'       => $this->input->post('LastName'),
      'nationality' => $this->input->post('nationality'),
      'email'   => $this->input->post('email'),
      'phone'    => $this->input->post('phone'),
      'organization'       => $this->input->post('organization'),
      'password'    => md5($this->input->post('password')),
      'register_date' => date('Y-m-d h:i:s'),
      'validation_status' => 0,
      'tipe'    => $this->input->post('tipeakun')

    );

    $this->db->insert($this->table, $data);
  }

  public function update($data, $id)
  {
    $this->db->where('id_user', $id);
    $this->db->update($this->table, $data);
  }

  public function delete($id)
  {
    $this->db->where('id_user', $id);

    if($this->db->delete($this->table))
    {
        return true;
    }else {
      return false;
    }
  }
}
