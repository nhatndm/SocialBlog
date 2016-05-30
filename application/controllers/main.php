<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class main extends CI_Controller {
     
    public function __construct(){
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('blog');
    }     
	public function index($idbloger = '')
	{
        $data['blog_result'] = $this->blog->get_blog($idbloger);
        $error = array_filter($data);
        if(empty($error)){
            $this->load->view('errors/error_404');                   
        } 
        else{
            $this->load->view('content/index',$data);    
        }             
	}
    public function getblog(){
        if(isset($_GET['id'])){
            $id = $_GET['id'];
            if($id == ''){
               $this->load->view('errors/error_404');   
            } 
            else{
               $data['idblog'] = $this->blog->get_contentblog($id);
               $this->load->view('content/main',$data);  
            }
        }
        else{
            $this->load->view('errors/error_404');  
        }    
    }
}
