<?php
class Admin extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Admin_model');
        if ($this->session->userdata('logged') != TRUE) {
            $url = base_url('login');
            redirect($url);
        }
    }

    public function index()
    {
        $this->load->view('admin_template/header');
        $this->load->view('backend/index');
        $this->load->view('admin_template/footer');
    }

    public function registrasi()
    {
        $data['registrations'] = $this->Admin_model->tampil_data_register()->result();


        $this->load->view('admin_template/header');
        $this->load->view('backend/data_register', $data);
        $this->load->view('admin_template/footer');
    }
}
