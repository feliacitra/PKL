<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Email extends CI_Controller
{
    public function index()
    {
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

        $this->email->set_newline("\r\n");
        $this->email->from('feliacitra28@gmail.com', 'Felia Citra');
        $this->email->to('17102128@ittelkom-pwt.ac.id');
        $this->email->subject('selamat ');
        $this->email->message('Saya Felia');

        return $this->email->send();
    }
}
