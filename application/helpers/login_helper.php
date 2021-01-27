<?php

function login()
{
    $ci = &get_instance();

    if ($ci->session->userdata('user') == null) {

        redirect('Errorbro');
    }
}
