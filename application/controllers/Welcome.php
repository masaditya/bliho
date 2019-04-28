<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	function __construct(){
        parent::__construct();      
        $this->load->helper('url');
        //$this->load->language('general');
        
    }
	public function index()
	{
		$this->load->view('frontend/b2c/main/header');
		$this->load->view('frontend/b2c/content/home');
		$this->load->view('frontend/b2c/main/footer');
	}
	public function payment(){
		$this->load->view('frontend/b2c/main/header');
		$this->load->view('payment');
	}
	public function signin(){
		$this->load->view('frontend/b2c/main/header');
		$this->load->view('frontend/b2c/content/content-signin');
		$this->load->view('frontend/b2c/main/footer');
	}
	public function signup(){
		$this->load->view('frontend/b2c/main/header');
		$this->load->view('frontend/b2c/content/content-signup');
		$this->load->view('frontend/b2c/main/footer');
	}

	public function templates()
	{
		$this->load->view('frontend/b2c/main/header');
		$this->load->view('frontend/b2c/content/templates/catalog');
		$this->load->view('frontend/b2c/main/footer');
	}

	
}
