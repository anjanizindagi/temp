<?php
class Template_model extends CI_Model 
{
//View
	/*public function index()
	{
		if(isset($this->session->userdata['session_data'])){
			$user_id = $this->session->userdata("user_id");

			$this->load->model('Timeline_model');
			$user_data = $this->Timeline_model->get_user_info($user_id);
			$this->load->view('timeline-view', $data);
		}
		else{
			redirect(base_url().'login');
		}
		
	}//end of index function*/
	function display_records($user_id)
	{
		$query=$this->db->query("select * from users where user_id = '$user_id'");
		return $query->row_array();
	}//end of display_records
	 

}

		
