<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register_merchant extends CI_Model{
    public function insertUser () {

        $merchant = 'tabel_merchant';
        //insert data
        $data = array(
            //assign data into array elements
            'username' => $this->input->post('username'),
            'fname' => $this->input->post('fname'),
            'email' =>$this->input->post('email'),
            'contact' => $this->input->post('contact'),
            'nic' => $this->input->post('nic'),
            'password' => sha1($this->input->post('password'))
        );
        //insert data to the database
        $this->db->insert('users',$data);
    }
    
    
    public function getUsername($username)
        {
        // $this->db->where('username' , $username);
        // $query = $this->db->get('tabel_merchant');

        // if($query->num_rows()>0){
        // return true;
        // }
        // else {
        // return false;
        // }
        $this->db->where('username', $username);
		$this->db->limit(1);
		$query = $this->db->get($this->merchant);

		if ($query->num_rows() == 1) {
			return TRUE;
		}
		
		return FALSE;
        }
}
