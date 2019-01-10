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
function  userinfo_data()
	{
		
				$this->load->model('userinfo_model');
                $input = urldecode(file_get_contents('php://input'));



                $received = json_decode($input, true);

                 //var_dump($received);exit();

                $data = array();

                foreach( $received as $value)
                {
                    $data[$value['city']] = $value['value'];
                    $data[$value['state']] = $value['value'];
                    $data[$value['country']] = $value['value'];
                    $data[$value['highschool']] = $value['value'];
                    $data[$value['college']] = $value['value'];
                    $data[$value['university']] = $value['value'];
                    $data[$value['about_me']] = $value['value'];
                    $data[$value['social_view']] = $value['value'];
                    $data[$value['political_view']] = $value['value'];
                    $data[$value['hobby']] = $value['value'];
                    $data[$value['interests']] = $value['value'];
                    $data[$value['skills']] = $value['value'];
                    $data[$value['work_profile']] = $value['value'];
                }

               
               


                $modal_data = array(

                    'City'          		=>  $data['city'],
                    'State'         		=>  $data['state'],
                    'Country'       		=>  $data['country'],
                    'High School'   		=>  $data['highschool'],
                    'College'       		=>  $data['college'],
                    'University'    		=>  $data['university'],
                    'About Me'      		=>  $data['about_me'],
                    'Social View'   		=>  $data['social_view'],
                    'Political View'		=>  $data['political_view'],
                    'Hobby'         		=>  $data['hobby'],
                    'Interests'     		=>  $data['interests'],
                    'Skills'        		=>  $data['skills'],
                    'Work Profile'  		=>  $data['work_profile'],
                );


                $result = $this->userinfo_model->save_data($modal_data);

                //var_dump($result);exit;
                if ($result) {
                	$resp['success'] = 'Your Data Submitted Successfully';
                }else{
                	$resp['error'] = 'Databse Error';
                }

                $this->output
                ->set_status_header(200)
                ->set_content_type('application/json', 'utf-8')
                ->set_output(json_encode($resp, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES))
                ->_display();
                exit;
	}//end of function userinfo data
}


