<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Userinfo extends MX_Controller{


	public function index()
	{
		if(isset($this->session->userdata['sessiondata'])){
		$this->load->view('userinfo-view');
	}else{
		redirect(base_url().'login');
		}
		
	}//end of function 
}//end of the class