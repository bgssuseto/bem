<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        $this->load->library('form_validation');
        $this->load->library('session');
        $this->load->model('M_anggota');
        $this->load->model('M_data');


        if ($this->uri->segment(2) != NULL) {
            login();
        }
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

    public function aksi_anggota()
    {
        $this->form_validation->set_rules('nama', 'Nama', 'required|trim');
        $this->form_validation->set_rules('jabatan', 'Jabatan', 'required|trim');
        $this->form_validation->set_rules('departemen', 'Departemen', 'required|trim');
        $this->form_validation->set_rules('foto', 'Foto Diri', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->tambah_anggota();
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
            $this->session->set_flashdata('message', '<div class="alert alert-success col-7" role="alert">Semua Pesan Berhasil Dihapus!</div>');
            redirect('Admin/liat_pesan');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger col-7" role="alert">Pesan Gagal Dihapus!</div>');
            redirect('Admin/liat_pesan');
        }
    }
}
