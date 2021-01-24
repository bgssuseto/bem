<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();

		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->library('upload');
		$this->load->model('M_anggota');
		$this->load->model('M_data');


		if ($this->uri->segment(2) != NULL) {
			login();
		}
	}

	public function backupdb()
	{
		$this->load->dbutil();

		$rule = array(
			'format' => "zip",
			'file_name' => "my_db_backup.sql"
		);

		$backup = $this->dbutil->backup($rule);
		$db_name = 'backup-on-' . date("Y-m-d-H-i-s") . '.zip';
		$savedb = '/assets/backup/db/' . $db_name;

		$this->load->helper('file');
		write_file($db_name, $backup);
		$this->load->helper('download');
		force_download($db_name, $backup);
	}

	public function index()
	{

		$this->form_validation->set_rules('username', 'Username', 'trim|required');
		$this->form_validation->set_rules('password', 'Password', 'required');

		if ($this->form_validation->run() == FALSE) {
			$data['judul'] = 'Admin Page';
			$this->load->view('login/index', $data);
		} else {
			$this->_login();
		}
	}

	private function _login()
	{

		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$cek = $this->db->get_where('wkwk', ['user' => $username])->row_array();


		if ($cek > 0) {
			if (password_verify($password, $cek['pass'])) {
				$data = array('user' => $username);
				$this->data = $data;
				$this->session->set_userdata($data);
				redirect('Admin/dashboard');
			} else {
				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Maaf Password Anda Salah</div>');
				redirect('Admin');
			}
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Maaf Akun Anda Tidak Terdaftar</div>');
			redirect('Admin');
		}
	}

	public function keluar()
	{
		$this->session->sess_destroy();
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Anda Berhasil Logout!</div>');
		redirect('Admin');
	}

	public function dashboard()
	{

		$data['judul'] = 'Admin Page - Dashboard';
		// $data['user'] = $this->db->get_where('wkwk', ['username' => $this->session->userdata('user')])->row_array();
		$this->load->view('templates/adm_header', $data);
		$this->load->view('templates/sidebartop');
		$this->load->view('dashboard/index');
		$this->load->view('templates/adm_footer');
	}

	public function anggota()
	{
		$data['judul'] = 'Admin - Data Anggota';
		$data['p_anggota'] = $this->M_anggota->tampilanggota();
		$this->load->view('templates/adm_header', $data);
		$this->load->view('templates/sidebartop');
		$this->load->view('dashboard/anggota/index');
		$this->load->view('templates/adm_footer');
	}

	public function tambah_anggota()
	{
		$data['p_anggota'] = $this->M_anggota->tampilanggota();
		$data['judul'] = 'Tambah - Anggota';
		$this->load->view('templates/adm_header', $data);
		$this->load->view('templates/sidebartop');
		$this->load->view('dashboard/anggota/form');
		$this->load->view('templates/adm_footer');
	}
	public function edit_anggota($id)
	{

		$data['row'] = $this->M_anggota->edit_angg($id);
		$data['judul'] = 'Edit Data - Anggota';
		$this->load->view('templates/adm_header', $data);
		$this->load->view('templates/sidebartop');
		$this->load->view('dashboard/anggota/edit_anggota', $data);
		$this->load->view('templates/adm_footer');
	}

	public function update_angg($id = array('id' => $id))
	{

		$this->form_validation->set_rules('nama', 'Nama', 'required|trim');
		$this->form_validation->set_rules('prodi', 'Prodi', 'required|trim');
		$this->form_validation->set_rules('jabatan', 'Jabatan', 'required|trim');
		$this->form_validation->set_rules('departemen', 'Departemen', 'required|trim');


		if ($this->form_validation->run() == false) {
			$this->edit_anggota($id);
		} else {

			$nama = $this->input->post('nama');
			$prodi = $this->input->post('prodi');
			$jabatan = $this->input->post('jabatan');
			$departemen = $this->input->post('departemen');
			$id = $this->input->post('id');
			$config['upload_path']          = './assets/img/team/';
			$config['allowed_types']        = 'gif|jpg|png';
			$config['max_size']             = 2000;
			$config['overwrite']			= TRUE;
			//$config['max_width']            = 1024;
			//$config['max_height']           = 768;


			$this->load->library('upload', $config);
			$this->upload->initialize($config);


			if (!$this->upload->do_upload('gambar')) {
				$this->session->set_flashdata('message', '<div class="alert alert-danger col-7" role="alert">Foto Gagal Di Unggah!</div>');
				redirect('Admin/edit_anggota');
			} else {
				$gambar = array('gambar' => $this->upload->data());


				$data = array(
					'gambar' => $gambar['gambar']['file_name'],
					'nama'	=> $nama,
					'prodi' => $prodi,
					'departemen' => $departemen,
					'jabatan' => $jabatan

				);
				$this->db->set($data);
				$this->db->where('id', ['id' => $id]);
				$aksi = $this->db->update('anggota');

				if ($aksi == TRUE) {
					$this->session->set_flashdata('message', '<div class="alert alert-success col-4" role="alert">Data Berhasil Di Update!</div>');
					redirect('Admin/tambah_anggota');
				} else {
					$this->session->set_flashdata('message', '<div class="alert alert-danger col-7" role="alert">Data Gagall Di Update!</div>');
					redirect('Admin/tambah_anggota');
				}
			}
		}
	}





	public function aksi_anggota()
	{
		$this->form_validation->set_rules('nama', 'Nama', 'required|trim');
		$this->form_validation->set_rules('prodi', 'Prodi', 'required|trim');
		$this->form_validation->set_rules('jabatan', 'Jabatan', 'required|trim');
		$this->form_validation->set_rules('departemen', 'Departemen', 'required|trim');


		if ($this->form_validation->run() == false) {
			$this->tambah_anggota();
		} else {
			$nama = $this->input->post('nama');
			$prodi = $this->input->post('prodi');
			$jabatan = $this->input->post('jabatan');
			$departemen = $this->input->post('departemen');
			$config['upload_path']          = './assets/img/team/';
			$config['allowed_types']        = 'gif|jpg|png';
			$config['max_size']             = 2000;
			$config['overwrite']			= TRUE;
			//$config['max_width']            = 1024;
			//$config['max_height']           = 768;


			$this->load->library('upload', $config);
			$this->upload->initialize($config);


			if (!$this->upload->do_upload('gambar')) {
				$this->session->set_flashdata('message', '<div class="alert alert-danger col-7" role="alert">Foto Gagal Di Unggah!</div>');
				redirect('Admin/tambah_anggota');
			} else {
				$gambar = array('gambar' => $this->upload->data());

				$data = array(
					'gambar' => $gambar['gambar']['file_name'],
					'nama'	=> $nama,
					'prodi' => $prodi,
					'departemen' => $departemen,
					'jabatan' => $jabatan

				);

				$aksi = $this->db->insert('anggota', $data);

				if ($aksi == TRUE) {
					$this->session->set_flashdata('message', '<div class="alert alert-success col-4" role="alert">Data Berhasil Di Tambahkan!</div>');
					redirect('Admin/tambah_anggota');
				} else {
					$this->session->set_flashdata('message', '<div class="alert alert-danger col-7" role="alert">Data Gagall Disimpan!</div>');
					redirect('Admin/tambah_anggota');
				}
			}
		}
	}



	public function hapus_anggota($id)
	{

		$aksi = $this->M_anggota->hapus_angg($id);

		if ($aksi == false) {
			$this->session->set_flashdata('message', '<div class="alert alert-success col-3" role="alert">Data Berhasil Dihapus!</div>');
			redirect('Admin/anggota');
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger col-3" role="alert">Data Gagal Dihapus!</div>');
			redirect('Admin/anggota');
		}
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
			redirect('Auth#contact');
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-success col-7" role="alert">Pesan Berhasil Terkirim!</div>');
			redirect('Auth#contact');
		}
	}

	public function liat_pesan()
	{
		$data['judul'] = 'Admin - Pesan Masuk';
		$data['pesan'] = $this->M_data->tampil_pesan();
		$this->load->view('templates/adm_header', $data);
		$this->load->view('templates/sidebartop');
		$this->load->view('inbox/inbox');
		$this->load->view('templates/adm_footer');
	}

	public function hapus_pesan($id)
	{

		$aksi = $this->M_data->hapuspesan($id, 'inbox');
		if ($aksi == false) {
			$this->session->set_flashdata('message', '<div class="alert alert-success col-3" role="alert">Pesan Berhasil Dihapus!</div>');
			redirect('Admin/liat_pesan');
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger col-3" role="alert">Pesan Gagal Dihapus!</div>');
			redirect('Admin/liat_pesan');
		}
	}

	function delpesan()
	{

		$aksi =  $this->M_data->inbox_del();
		if ($aksi == false) {
			$this->session->set_flashdata('message', '<div class="alert alert-success col-4" role="alert">Semua Pesan Berhasil Dihapus!</div>');
			redirect('Admin/liat_pesan');
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger col-4" role="alert">Pesan Gagal Dihapus!</div>');
			redirect('Admin/liat_pesan');
		}
	}
}
