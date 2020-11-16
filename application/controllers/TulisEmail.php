<?php
defined('BASEPATH') or exit('No direct script access allowed');

class TulisEmail extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'Halaman Email';
        $this->load->view('email', $data);
    }

    public function sendEmail()
    {
        if (isset($_POST['submit_email'])) {

            $email = $this->input->post('email');
            $subject = $this->input->post('subject');
            $pesan = $this->input->post('pesan');

            if (!empty($email)) {
                $config = array(
                    'protocol' => 'smtp',
                    'smtp_host' => 'ssl://smtp.googlemail.com',
                    'smtp_port' => 465,
                    'smtp_user' => 'feliacitra28@gmail.com',
                    'smtp_pass' => 'felcitdipra',
                    'mailType' => 'html',
                    'charset' => 'iso-8859-1'
                );
                $this->load->library('email', $config);

                $this->email->initialize($config);


                $this->email->set_newline("\r\n");
                $this->email->from('feliacitra28@gmail.com', 'Felia Citra');
                $this->email->to($email);
                $this->email->subject($subject);
                $this->email->message($pesan);

                if ($this->email->send()) {
                    echo "Email, Berhasil Di Kirim";
                } else {
                    show_error($this->email->print_debugger());
                }
            }
        }
    }
}
