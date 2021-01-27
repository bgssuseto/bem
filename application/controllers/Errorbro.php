<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Errorbro extends CI_Controller
{
    public function index()
    {
        $data['judul'] = 'Error 404 - Admin';
        $this->load->view('templates/adm_header', $data);
        $this->load->view('errors/404');
        $this->load->view('templates/adm_footer');
    }
}
