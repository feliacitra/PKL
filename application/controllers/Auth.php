<?php defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

    public function login()
    {
        check_already_login();
        $this->load->view('login');
    }
    public function process()
    {
        $post = $this->input->post(null, TRUE);
        if (isset($post['login'])) {
            $this->load->model('user_m');
            $query = $this->user_m->login($post);
            if ($query->num_rows() > 0) {
                $row = $query->row();
                $params = array(
                    'userid' => $row->user_id,
                    'level' => $row->level
                );

                $this->session->set_userdata($params);
                // var_dump($this->user_m['level']);
                // die;

                if ($params['level'] == 1) {
                    redirect('admin/homeadmin');
                } else {
                    redirect('dinas/index');
                }
            } else {
                echo " <script>
                    alert('Login Gagal, username atau password salah');
                    
                  </script>";
                redirect('auth/login');
            }
        }
    }
    public function logout()
    {
        $params = array('userid', 'level');
        $this->session->unset_userdata($params);
        redirect('auth/login');
    }
    public function block()
    {
        echo 'anda tidak boleh akses ini !!!';
    }
}
