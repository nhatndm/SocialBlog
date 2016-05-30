<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class testdata extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('blog');
    }

	public function index($idbloger = '')
	{
        /*
        $query = $this -> db -> query ("select * from blog where id = '".$a."' and idbloger ='".$b."'");
        $data = $query->result_array();
        echo "<pre>";
        print_r($data);
        echo "</pre>";
        */
        
        $blog_result = $this->blog->get_blog($idbloger);
        foreach ($blog_result as $key => $val) {
            echo "<pre>";
            echo $val['tieude'];
            echo "<pre>";
            echo $val['noidung'];
            echo "<pre>";
            echo $val['ngay'];
            echo "</pre>";
        }    
	}
}
