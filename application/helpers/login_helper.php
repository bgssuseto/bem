<?php

function login()
{
    $ci = &get_instance();

    if ($ci->session->userdata('user') == null) {
        $ci->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Maaf Anda Tidak Diijinkan Masuk !</div>');
        redirect('admin');
    }
}
