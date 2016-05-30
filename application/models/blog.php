<?php defined('BASEPATH') OR exit('No direct script access allowed');
class blog extends CI_Model{
    function get_blog($iduser){
         $query = $this -> db -> query ("select * from blog where idbloger = '".$iduser."'");
         return $query->result_array();       
    }   
    function get_contentblog($id){
        $query = $this -> db -> query ("select * from blog where id = '".$id."'");
        return $query->result_array();
    }
}
