<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Template extends MX_Controller{


	public function index()
	{
		$data = array('module_name' => 'newsfeed');
		$this->load->view('template-view', $data);
	}//end of index function

	public function timeline()
	{
		$data = array('module_name' => 'timeline');
		$this->load->view('template-view', $data);
	}//end of timeline function

	public function message()
	{
		$data = array('module_name' => 'message');
		$this->load->view('template-view', $data);
	}//end of message function

	
	public function notification()
	{
		$data = array('module_name' => 'notification');
		$this->load->view('template-view', $data);
	}//end of notification

	public function friendrequest()
	{
		$data = array('module_name' => 'friendrequest');
		$this->load->view('template-view', $data);
	}//end of friendrequest function

	public function friendlist()
	{
		$data = array('module_name' => 'friendlist');
		$this->load->view('template-view', $data);
	}//end of friendlist function

	public function setting()
	{
		$data = array('module_name' => 'setting');
		$this->load->view('template-view', $data);
	}//end of setting function


	public function userinfo()
	{
		$data = array('module_name' => 'userinfo');
		$this->load->view('template-view', $data);
	}//end of userinfo function

}//end of class
