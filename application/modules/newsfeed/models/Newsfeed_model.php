<?php
class Newsfeed_model extends CI_Model 
{
//View
	public function index()
	{
		if(isset($this->session->userdata['session_data'])){
			$user_id = $this->session->userdata("user_id");

			$this->load->model('Newsfeed_model');
			$user_data = $this->Newsfeed_model->get_user_info($user_id);
			$this->load->view('Newsfeed-view', $data);
		}
		else{
			redirect(base_url().'login');
		}
		
		
	}//end of index function
	function display_records($user_id)
	{
		$query=$this->db->query("select * from users where user_id = '$user_id'");
		return $query->row_array();
	}//end of display_records
}

		
