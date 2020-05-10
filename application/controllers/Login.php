<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->model('GeneralModel');
    }

    public function index()
    {   
        
        $this->load->view('Login');//load view login
    }

    public function cekLogin()
    {
        $this->form_validation->set_rules('username','Username','trim|required');
        $this->form_validation->set_rules('password','Password','trim|required|callback_cekDb');

        if($this->form_validation->run()==FALSE){
            $this->load->view('login');
        }else{
            redirect('admin');
        }
    }


    public function cekDb($password)
    {
        $username = $this->input->post('username'); 
        $where = array('username' => $username);
        $where2 = array('password' => md5($password));
        $result = $this->GeneralModel->get_selected_2where('admin',$where,$where2)->result();
        if($result){
                     $session_array = array();
                     foreach ($result as $key) 
                     {
                        $session_array = array(
                        'id_admin'=>$key->id_admin,
                        'username'=>$key->username,
                        'password' => $key->password
                      );
                        $this->session->set_userdata('logged_in',$session_array);
                     }
                        return true;
        }else{
                $this->form_validation->set_message('cekDb',"login failed");
                return false;
              }
        }

    public function logout()
    {
        $this->session->unset_userdata('logged_in');
        $this->session->sess_destroy();//hapus semua session
        redirect('Login','refresh');//redirect ke halaman login
    }
}
?>