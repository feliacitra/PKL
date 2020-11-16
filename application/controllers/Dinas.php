<?php defined('BASEPATH') or exit('No direct script access allowed');

class Dinas extends CI_Controller
{

    public function daftar()
    {
        $this->load->view('daftardinas');
    }
    public function index()
    {
        check_not_login();
        // $this->load->view('halamandinas');
        $data['berkas'] = $this->db->get('tb_berkas');
        $data['dari'] = $this->db->get('tb_upload');

        $this->load->view('halamandinas', $data);
    }
}
