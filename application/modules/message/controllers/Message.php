<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Message extends MX_Controller{


	public function index()
	{
		if(isset($this->session->userdata['sessiondata'])){
		$this->load->view('message-view');
	}else{
		redirect(base_url().'login');
		}
	
	}//end of index function
}//end of class