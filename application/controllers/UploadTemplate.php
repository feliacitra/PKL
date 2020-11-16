<?php
defined('BASEPATH') or exit('No direct script access allowed');

class UploadTemplate extends CI_Controller
{



    function proses()
    {
        $config['upload_path']          = './fileTemplate/';
        $config['allowed_types']        = 'png|xls|xlsx|pdf';

        // $config['encrypt_name']            = TRUE;
        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('berkas')) {
            $error = array('error' => $this->upload->display_errors());
            $this->load->view('form_upload', $error);
        } else {
            $data['nama_berkas'] = $this->upload->data("file_name");
            $data['keterangan_berkas'] = $this->input->post('keterangan_berkas');
            $data['tipe_berkas'] = $this->upload->data('file_ext');
            $data['ukuran_berkas'] = $this->upload->data('file_size');
            $this->db->insert('tb_berkas', $data);
            redirect('admin/template');
        }
    }

    public function index()
    {
        $data['berkas'] = $this->db->get('tb_berkas');
        $this->load->view('tampil_berkas', $data);
    }
    function download($id)
    {
        $data = $this->db->get_where('tb_berkas', ['kd_berkas' => $id])->row();
        force_download('fileTemplate/' . $data->nama_berkas, NULL);
    }
}
