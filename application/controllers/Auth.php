<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_data');
		$this->load->library('form_validation');
	}

	public function index()
	{
		$data['anggota'] = $this->M_data->tampil_anggota();
		$data['row'] = $this->M_data->tampil_slide();
		$data['berita'] = $this->M_data->berita();
		$this->load->view('templates/header');
		$this->load->view('Auth/index', $data);
		$this->load->view('templates/footer');
	}
}
