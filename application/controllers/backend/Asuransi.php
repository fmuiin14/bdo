<?php
class Asuransi extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('Asuransi_model');
		if ($this->session->userdata('logged') != TRUE) {
			$url = base_url('login');
			redirect($url);
		}
	}

	public function index()
	{
		$data['asuransis'] = $this->Asuransi_model->tampil_data_asuransi()->result();

		// var_dump($data['asuransis']);
		// die;

		$this->load->view('admin_template/header');
		$this->load->view('backend/pengajuan/asuransi', $data);
		$this->load->view('admin_template/footer');
	}
}
