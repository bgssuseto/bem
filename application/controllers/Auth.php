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

	public function custom()
	{
		$data['judul'] = 'Customize Website - Admin';

		$data['row'] = $this->M_data->tampil_slide();
		$this->load->view('templates/adm_header', $data);
		$this->load->view('templates/sidebartop');
		$this->load->view('dashboard/custom/index');
		$this->load->view('templates/adm_footer');
	}

	public function hapus_custom($id)
	{
		$aksi =  $this->M_data->delete_slide($id);
		if ($aksi == FALSE) {
			$this->session->set_flashdata('message', '<div class="alert alert-success col-4" role="alert">Data Berhasil Di Hapus !</div>');
			redirect('Auth/custom');
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger col-4" role="alert">Data Gagal Di Hapus !</div>');
			redirect('Auth/custom');
		}
	}


	public function create_slide()
	{
		$this->form_validation->set_rules('judul', 'Judul', 'required|trim');
		if ($this->form_validation->run() == false) {
			$this->custom();
		} else {
			$judul = $this->input->post('judul');
			$slide = $this->input->post('slide');

			$config['upload_path']          = './assets/img/slide/';
			$config['allowed_types']        = 'gif|jpg|png';
			$config['max_size']             = 2000;
			$config['overwrite']			= TRUE;
			//$config['max_width']            = 1024;
			//$config['max_height']           = 768;


			$this->load->library('upload', $config);
			$this->upload->initialize($config);


			if (!$this->upload->do_upload('gambar')) {
				$this->session->set_flashdata('message', '<div class="alert alert-danger col-7" role="alert">Foto Gagal Di Unggah!</div>');
				redirect('Auth/custom');
			} else {
				$gambar = array('gambar' => $this->upload->data());

				$data = array(
					'gambar' => $gambar['gambar']['file_name'],
					'judul'	=> $judul,
					'slide' => $slide,
				);

				$aksi = $this->db->insert('slide', $data);

				if ($aksi == TRUE) {
					$this->session->set_flashdata('message', '<div class="alert alert-success col-4" role="alert">Kustomisasi Berhasil Di Ubah !</div>');
					redirect('Auth/custom');
				} else {
					$this->session->set_flashdata('message', '<div class="alert alert-danger col-7" role="alert">Kustomisasi Gagal Di Ubah !</div>');
					redirect('Auth/custom');
				}
			}
		}
	}
}
