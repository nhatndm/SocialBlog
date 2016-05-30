<?php defined('BASEPATH') OR exit('No direct script access allowed');
class user extends CI_Model{
    function get_user($user,$pass){
        /*METHOD2*/
         $query = $this -> db -> query ("select * from userid where username = '".$user."' and password ='".MD5($pass)."'");
         return $query->result_array();
        /* Method1
        $this -> db -> select('username, password');
        $this -> db -> from('userid');
        $this -> db -> where('username', $user);
        $this -> db -> where('password', MD5($pass));
        $query = $this -> db -> get();
        return $query->num_rows(); 
        */
    }   
}
