<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class login extends CI_Controller {
     
    public function __construct(){
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('user');
    }     
	public function index()
	{
		$this->load->view('login/login');
	}
    public function login(){
        $user = $this->input->post('username');
        $pass = $this->input->post('password');   
        $data = $this->user->get_user($user,$pass);
        $error = array_filter($data);
        if(empty($error)){
           echo "DANG NHAP KO THANH CONG";
        }
        else{
            foreach ($data as $key => $val) {
                redirect('main/index/'.$val['ID'].'');
            }
        }
       
    }
}
