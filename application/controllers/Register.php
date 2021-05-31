<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Register extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('Login_model');
		$this->load->model('Admin_model');
	}

	public function index()
	{
		$this->load->view('backend/registrasi');
	}

	public function registerAksi()
	{
		$this->_rules();

		if ($this->form_validation->run() == FALSE) {
			$this->index();
		} else {
			// store isian dari form disini
			$nama = $this->input->post('nama');
			// $nik = $this->input->post('nik');
			$no_hp = $this->input->post('no_hp');
			$email = $this->input->post('email');
			$password = $this->input->post('password');
			// $npwp = $this->input->post('npwp');
			$tanggal_lahir = $this->input->post('tanggal_lahir');
			$j_k = $this->input->post('jenis_kelamin');

			// superglobal variabel dr php
			$no_ktp = $_FILES['no_ktp']['name'];

			if ($no_ktp) {
				$config['upload_path'] = 'uploads/ktp/';
				$config['allowed_types'] = 'jpg|jpeg|png|tiff';
				$config['encrypt_name'] = TRUE;

				$this->load->library('upload', $config);
				if (!$this->upload->do_upload('no_ktp')) {
					echo "KTP gagal di upload";
				} else {
					$no_ktp_enc = $this->upload->data('file_name');
				}
			}

			// npwp
			$no_npwp = $_FILES['no_npwp']['name'];

			if ($no_npwp) {
				$config2['upload_path'] = 'uploads/npwp/';
				$config2['allowed_types'] = 'jpg|jpeg|png|tiff';
				$config2['encrypt_name'] = TRUE;

				$this->upload->initialize($config2);

				$this->load->library('upload', $config2);
				if (!$this->upload->do_upload('no_npwp')) {
					echo "NPWP gagal di upload";
				} else {
					$npwp_enc = $this->upload->data('file_name');
				}
			}

			$data = array(
				'nama' => $nama,
				'no_ktp' => $no_ktp_enc,
				'npwp' => $npwp_enc,
				'password' => MD5($password),
				'email' => $email,
				'no_hp' => $no_hp,
				'tgl_lahir' => $tanggal_lahir,
				'is_active' => '0',
				'user_level' => '2',
				'j_k' => $j_k
				// 'created_at' => $tanggal_masuk
			);

			$this->Login_model->insertDataRegister($data, 'users');
			$this->session->set_flashdata('registrasi', '<div class="alert alert-success alert-dismissible fade show" role="alert"><strong>Data berhasil di registrasi. Silakan tunggu.</strong><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
			redirect('register');
		}
	}

	public function approve_register()
	{
		// $where = array('id_user' => $id);
		// $data['users'] = $this->Admin_model->update_registrasi($where, 'users')->result();

		$id = $this->uri->segment(3);
		$this->db->query("UPDATE users
		SET is_active = '1'
		WHERE id_user = '" . $id . "'");

		redirect('backend/admin/registrasi');
	}

	public function _rules()
	{
		$this->form_validation->set_rules('nama', 'Nama', 'trim|required');
		$this->form_validation->set_rules('no_hp', 'no HP', 'trim|required');
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[8]');
		if (empty($_FILES['no_ktp']['name'])) {
			$this->form_validation->set_rules('no_ktp', 'KTP', 'required');
		}
		if (empty($_FILES['no_npwp']['name'])) {
			$this->form_validation->set_rules('no_npwp', 'KTP', 'required');
		}
		$this->form_validation->set_rules('tanggal_lahir', 'Tanggal lahir', 'required');
		$this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'required');
	}
}
