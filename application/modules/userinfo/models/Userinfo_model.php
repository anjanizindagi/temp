<?php

class Userinfo_model extends CI_Model
{
		function userdetails($data){
			$this->db->insert('user_info', $data);
		
		}//end of userdetails function
	

}