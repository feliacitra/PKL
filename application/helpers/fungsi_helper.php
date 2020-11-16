<?<?php
    function check_already_login()
    {
        $ci = &get_instance();
        $user_session = $ci->session->userdata('userid');
        // if (!$user_session){
        //     redirect('auth/login');
        // } else {
        $level = $ci->session->userdata('level');
        // $menu = $ci->uri->segment(1);
        // $useraccess = $ci->db->get_where('useraccess', [
        //     'level'=> $level,
        //     'useraccess' => $useraccess
        // ]);

        // if ($useraccess->num_row()<1){
        //     redirect('auth/block');
        // }

        // $
        // }

        if ($user_session) {
            if (($level) == 1) {
                redirect('admin/homeadmin');
            } elseif (($level) == 2) {
                redirect('dinas/index');
            } else {
                redirect('auth/block');
            }
        }
    }
    function check_not_login()
    {
        $ci = &get_instance();
        $user_session = $ci->session->userdata('userid');
        if (!$user_session) {
            redirect('auth/login');
        }
    }
    ?>