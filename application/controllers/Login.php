<?php
class Login extends CI_Controller{
    public function _construct(){
       parent::_construct();
    }
    public function index(){
        $data['title']='login';
        $this->load->view('templates/header',$data);
        $this->load->view('login');
         $this->load->view('templates/footer');
    }
    public function login_process(){
        $user= $this->input->post('user');
        $pass=$this->input->post('pass');
        if($user=='rabab' and $pass=='123')
        {
            $this->session->set_userdata(array('user'=>$user));
            $data['title']='welcome_user';
        $this->load->view('templates/header',$data);
        $this->load->view('welcome_user');
         $this->load->view('templates/footer');
        }
        else{  
            $data['error'] = 'Your Account is Invalid';  
            $this->load->view('login', $data);  
        }  
    }//end process_login function
    public function logout(){
        $this->session->unset_userdata('user');
        redirect('login');
    }
}
?>