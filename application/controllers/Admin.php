<?php defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

    public function homeadmin()
    {
        check_not_login();
        // $this->load->view('halamanadmin');
        $data['berkas'] = $this->db->get('tb_berkas');
        $data['dari'] = $this->db->get('tb_upload');
        $this->load->view('halamanadmin', $data);
    }
    public function template()
    {
        check_not_login();
        $data['berkas'] = $this->db->get('tb_berkas');
        $this->load->view('template', $data);
    }
}
