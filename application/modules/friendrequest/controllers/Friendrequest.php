<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Friendrequest extends MX_Controller{


	public function index()
	{
		if(isset($this->session->userdata['sessiondata'])){
		$this->load->view('Friendrequest-view');
	}else{
		redirect(base_url().'login');
		}
		
	}//end of function
}//end of class