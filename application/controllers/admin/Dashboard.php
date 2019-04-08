<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function index()
	{

		// $this->render['content'] = $this->load->view('admin/masterdata/index', $this->render, TRUE);

		$this->render['title'] = "Dashboard";
		$this->render['desc'] = "Static Overview";
		$this->render['breadcrumb'] = array('Dashboard');

		$this->load->view('admin/masterdata/template', $this->render);
	}
}
/* End of file admin.php */
/* Location: ./application/controllers/admin.php */
?>
