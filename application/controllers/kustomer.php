<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kustomer extends CI_Controller {

    public function laporan()
    {
        $data = array(
            'title' => 'Tambah laporan data kustomer',
            'content' => 'kustomer/laporan'
        );
        $this->load->view('template/main', $data);
    }

}
