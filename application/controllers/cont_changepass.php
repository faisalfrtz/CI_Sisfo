<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cont_changepass extends CI_Controller {

    function sendMail(){

        $user = new user();
        $user = $user->getUserByEmail($this->input->post('email'));
        if($user != null){
            $this->session->set_userdata('page','change_pass2');
            foreach($user as $user){
                $data['uid'] = $user->uid;
            }
            $this->load->view('index.php',$data);
        }
        else {
            echo "<script>alert('Email Tidak Ditemukan');history.go(-1);</script>";
        }
    }
}