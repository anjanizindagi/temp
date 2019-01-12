<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Timeline extends MX_Controller{


	public function index()
	{
		//$user_id = $this->session->userdata("session_data");
		$user_id = $this->session->userdata['sessiondata']['user_id'];
		$result['data']=$this->Timeline_model->display_records($user_id);
		$this->load->view('timeline-view',$result);
		/*if(isset($this->session->userdata['sessiondata'])){
		$this->load->view('timeline-view');
	}else{
		redirect(base_url().'login');
		}*/
		
	}//end of function 
	public function __construct()
	{
		//call CodeIgniter's default Constructor
		parent::__construct();
		//load database libray manually
		$this->load->database();
		//load Model
		$this->load->model('Timeline_model');
	}
	//Display
	/*public function displaydata()
	{
		$user_id = $this->session->userdata("session_data");
		$user_id = $this->session->userdata['sessiondata']['user_id'];
		$result['data']=$this->Timeline_model->display_records($user_id);
		$this->load->view('timeline-view',$result);
	}*/
}//end of the class