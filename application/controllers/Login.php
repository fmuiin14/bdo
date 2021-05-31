<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('Login_model');
	}

	public function index()
	{
		$this->load->view('backend/login');
	}

	public function auth()
	{
		$username = str_replace("'", "", htmlspecialchars($this->input->post('email', TRUE), ENT_QUOTES));
		$password = str_replace("'", "", htmlspecialchars($this->input->post('password', TRUE), ENT_QUOTES));

		$validate_username = $this->Login_model->validasi_username($username);

		if ($validate_username->num_rows() > 0) {
			$validate_pw = $this->Login_model->validasi_password($username, $password);
			if ($validate_pw->num_rows() > 0) {
				$this->session->set_userdata('logged', TRUE);
				$this->session->set_userdata('user');
				$x = $validate_pw->row_array();

				// administrator
				if ($x['user_level'] == '1') {
					$this->session->set_userdata('access', '1');
					$id = $x['id_user'];
					$name = $x['nama'];
					$email = $x['email'];
					$user_level = $x['user_level'];
					$date_created = $x['created_at'];
					$this->session->set_userdata('id', $id);
					$this->session->set_userdata('name', $name);
					$this->session->set_userdata('email', $email);
					$this->session->set_userdata('user_level', $user_level);
					$this->session->set_userdata('date_created', $date_created);
					redirect('backend/dashboard');
				} else {
					// other user
					$this->session->set_userdata('access', '2');
					$id = $x['id_user'];
					$name = $x['nama'];
					$email = $x['email'];
					$user_level = $x['user_level'];
					$date_created = $x['date_created'];
					$this->session->set_userdata('id', $id);
					$this->session->set_userdata('name', $name);
					$this->session->set_userdata('email', $email);
					$this->session->set_userdata('user_level', $user_level);
					$this->session->set_userdata('date_created', $date_created);
					redirect('backend/dashboard');
				}
			} else {
				$url = base_url('login');
				echo $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"><button type="button" class="close" data-dismiss="alert"><i class="fa fa-close"></i></button> Username / Password Salah</div>');
				redirect($url);
			}
		} else {
			$url = base_url('login');
			echo $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"><button type="button" class="close" data-dismiss="alert"><i class="fa fa-close"></i></button> Username / Password Salah</div>');
			redirect($url);
		}
	}

	function logout()
	{
		$this->session->sess_destroy();
		$this->session->set_flashdata('success-logout', 'Berhasil');
		$url = base_url('login');
		redirect($url);
	}
}
