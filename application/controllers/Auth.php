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
		$this->load->view('templates/header');
		$this->load->view('Auth/index', $data);
		$this->load->view('templates/footer');
	}

	public function inbox()
	{
		$nama = $this->input->post('nama');
		$email = $this->input->post('email');
		$subjek = $this->input->post('subjek');
		$pesan = $this->input->post('pesan');

		$data = array(
			'nama' => $nama,
			'email' => $email,
			'subjek' => $subjek,
			'pesan' => $pesan

		);

		$insert = $this->db->insert('inbox', $data);

		if ($insert == false) {
			$this->session->set_flashdata('message', '<div class="alert alert-danger col-7" role="alert">Pesan Anda Belum Terkirim!</div>');
			redirect('Auth/#contact');
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-success col-7" role="alert">Pesan Berhasil Terkirim!</div>');
			redirect('Auth/#contact');
		}
	}
}
