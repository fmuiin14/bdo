<?php
class Dashboard extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('logged') != TRUE) {
			$url = base_url('login');
			redirect($url);
		}
	}

	public function index()
	{
		$idnya = $this->session->userdata('id');

		$this->load->view('admin_template/header');
		$this->load->view('backend/index');
		$this->load->view('admin_template/footer');
	}
}
