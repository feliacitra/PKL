<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Upload extends CI_Controller
{

    function create()
    {
        $this->load->view('form_upload');
    }

    function proses()
    {
        $config['upload_path']          = './unggah/';
        $config['allowed_types']        = 'png|xls|xlsx|pdf';

        // $config['encrypt_name']            = TRUE;
        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('dari')) {
            $error = array('error' => $this->upload->display_errors());
            $this->load->view('form_upload', $error);
        } else {
            $data['nama_upload'] = $this->upload->data("file_name");
            $data['keterangan_upload'] = $this->input->post('keterangan_upload');
            $data['tipe_upload'] = $this->upload->data('file_ext');
            $data['ukuran_upload'] = $this->upload->data('file_size');
            $this->db->insert('tb_upload', $data);
            redirect('dinas');
        }
    }

    public function index()
    {
        $data['dari'] = $this->db->get('tb_upload');
        $this->load->view('tampil_upload', $data);
    }
    function download($id)
    {
        $data = $this->db->get_where('tb_upload', ['kd_upload' => $id])->row();
        force_download('unggah/' . $data->nama_upload, NULL);
    }
}
