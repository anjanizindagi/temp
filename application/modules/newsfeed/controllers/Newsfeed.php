<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Newsfeed extends MX_Controller{


	public function index()
	{
		//$user_id = $this->session->userdata("session_data");
		$user_id = $this->session->userdata['sessiondata']['user_id'];
		$result['data'] = $this->Newsfeed_model->display_records($user_id);
		$this->load->view('newsfeed-view',$result);
		/*if(isset($this->session->userdata['sessiondata'])){
			$this->load->view('newsfeed-view');
		}else{
			redirect(base_url().'login');
			}*/
	}	//end of function index
	public function __construct()
	{
		//call CodeIgniter's default Constructor
		parent::__construct();
		//load database libray manually
		$this->load->database();
		//load Model
		$this->load->model('Newsfeed_model');
	}
	//Display
	
}//end of class