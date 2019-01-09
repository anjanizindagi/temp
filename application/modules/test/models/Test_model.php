<?php

class Test_model extends CI_Model
{
	
	function save_data($modal_data){

		$result = $this->db->insert('test', $modal_data);

		if ($result) {
			return true;
		}else{
			return false;
		}

	}//end of function 
}