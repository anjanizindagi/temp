<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Newsfeed extends MX_Controller{


	public function index()
	{
		if(isset($this->session->userdata['sessiondata'])){
		$this->load->view('newsfeed-view');
	}else{
		redirect(base_url().'login');
		}
	}	//end of function index


}//end of class