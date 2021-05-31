<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

	public function index()
	{
		$data['navbar'] = $this->load->view('fe/navbar', "", TRUE);
		$this->load->view('templates/header');
		$this->load->view('home', $data);
		$this->load->view('templates/footer');
	}

	// public function login()
	// {
	// 	$data['navbar'] = $this->load->view('navbar', "", TRUE);
	// 	$this->load->view('templates/header');
	// 	$this->load->view('login', $data);
	// 	$this->load->view('templates/footer');
	// }
}
