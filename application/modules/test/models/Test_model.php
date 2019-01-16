<?php

class Test_model extends CI_Model
{
	
	function save_data($modal_data){

		$result = $this->db->insert('tests', $modal_data);
		if ($result) {
			return true;
		}else{
			return false;
		}

	}//end of function 

	function display_record($user_id)
	{
		$query=$this->db->query("select * from users where user_id = '$user_id'");
		return $query->row_array();
	}//end of display_records function

	function display_records($user_info_id)
	{
		$query=$this->db->query("select * from images join tests on user_info.user_info_id = tests.user_info_id");
		return $query->row_array();
	}//end of display_records function
}


