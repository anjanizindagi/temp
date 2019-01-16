<?php

class Userinfo_model extends CI_Model
{
  		function __construct() {
  		parent::__construct();
  		}

		function userdetails($data){
			$this->db->insert('user_info', $data);
		
		}//end of userdetails function
		function display_records($user_id)
  		{
    		$query = $this->db->query("select * from users where user_id = '$user_id'");
    		return $query->row_array();
  		}//end of display_records function
  		function get_user_info($user_id)
  		{
    		$query=$this->db->query("select * from user_info where user_id = '$user_id'");
    		return $query->row_array();
  		}//end of get_user_info function
}