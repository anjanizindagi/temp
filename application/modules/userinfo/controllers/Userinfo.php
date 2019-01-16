<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Userinfo extends MX_Controller{

    function __construct() 
        {
            Parent::__construct();
            $this->load->database();
            $this->load->helper('form');
            $this->load->model('Userinfo_model');
            $this->load->library('session');
        }

	public function index()
	{
		if(isset($this->session->userdata['sessiondata'])){
         $user_id = $this->session->userdata['sessiondata']['user_id'];
            $result = $this->Userinfo_model->display_records($user_id);
            $user_data = $this->Userinfo_model->get_user_info($user_id); 
            $this->load->model('Userinfo_model');
            $result['info'] = $user_data;
            $loggedname = $this->Userinfo_model->display_records($user_id);
        $all_data = array(
                'data'              => $result,
                //'images'            =>  $images,
                'info'              =>  $user_data,
                'loggedname'        =>  $loggedname['name'],
                //'posts'             =>  $posts
            );
		$this->load->view('userinfo-view');
	}else{
		redirect(base_url()."template/userinfo");
		}
		
	}//end of index function 

    function userdetails(){
        $city = $this->input->post('city');
        $state = $this->input->post('state');
        $country= $this->input->post('country');
        $highschool = $this->input->post('highschool');
        $college= $this->input->post('college');
        $university = $this->input->post('university');
        $working_profile= $this->input->post('working_profile');
        $about_me = $this->input->post('about_me');
        $skills = $this->input->post('skills');
        $interests= $this->input->post('interests');
        $hobby= $this->input->post('hobby');
        $social_view= $this->input->post('social_view');
        $political_view= $this->input->post('political_view');

        $user_id = $this->session->userdata['sessiondata']['user_id'];


        $data = array(
            'user_info_id' =>uniqid(),
            'user_id' =>$user_id,
            'city'=> $city,
            'state' => $state,
            'country' => $country,
            'highschool' => $highschool,
            'college' => $college,
            'university' => $university,
            'working_profile' => $working_profile,
            'about_me' => $about_me,
            'skills' => $skills,
            'interests' => $interests,
            'hobby' => $hobby,
            'social_view' => $social_view,
            'political_view' => $political_view,
            );
        //var_dump($data); exit;
        $this->load->model('userinfo_model');
        $this->userinfo_model->userdetails($data);
        redirect(base_url()."template/userinfo");
    }//end of userdetails function


}

