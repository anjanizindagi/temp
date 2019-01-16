<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Timeline extends MX_Controller{

	public function __construct()
	{
		//call CodeIgniter's default Constructor
		parent::__construct();
		//load database libray manually
		$this->load->database();
		//load Model
		$this->load->model('Timeline_model');
		$this->load->helper('form');
		$this->load->library('session');
		
	}


	public function index(){

		$this->load->model('timeline_model');
        if(isset($this->session->userdata['sessiondata'])){
            
            $user_id = $this->session->userdata['sessiondata']['user_id'];
             $result = $this->timeline_model->display_records($user_id);
            $user_data = $this->timeline_model->get_user_info($user_id); 
            $this->load->model('timeline_model');
            $result['info'] = $user_data;
            $loggedname = $this->timeline_model->display_records($user_id);
            //$userpost = $this->timeline_model->timeline_post($user_id);
            $userposts = $this->timeline_model->timeline_posts($user_id);
            
            //$result['images'] = $images;

            $all_data = array(
                'data'              => $result,
                //'images'            =>  $images,
                'info'              =>  $user_data,
                'loggedname'        =>  $loggedname['name'],
                'userposts'             =>  $userposts,
                
            );
            $this->load->view('timeline-view',$all_data);

        }else{
            redirect(base_url().'login');
            }
	}


	function upload_file(){
			
			$this->load->model('timeline_model');
			$fname = $this->input->post('file_name');
           	
			//var_dump($fname);exit;

            $path = '/var/www/html/temp/uploads/images';
            $image_path='uploads/images';
      
            $new_name = date('ymd') . time();
             
         if (!file_exists($path)) {
	            mkdir($path, 0755, true);
	         }

                $config['upload_path']          = $path;
                $config['allowed_types']        = 'pdf|doc|docx|jpg|jpeg|gif|text|png';
                $config['max_size']             = 204800;
                $config['max_width']            = 2000;
                $config['max_height']           = 2000;
                $config['file_name']            = $new_name;
               
                $this->load->library('upload', $config);
                if(!$this->upload->do_upload('myfile'))
                {
                        var_dump($this->upload->display_errors());
                        $this->session->set_flashdata('error', $this->upload->display_errors());
                        //redirect('template');
                       // $this->load->view('slider-images-view', $error);
                }
                else
                {
                        $image_details = $this->upload->data();
                        $user_id = $this->session->userdata['sessiondata']['user_id'];
                        $img_data = array(
                        	'image_id'          => uniqid(),
                        	'user_id'			=> $user_id,
                        	'image_name'		=>	$fname,	
							'path'				=>	$image_path,
							'file_name'			=>	$image_details['file_name'],
							'upload_time'		=>	date('Y-m-d h:m:s')
                        );
                    //var_dump($img_data);exit;
                    $result = $this->timeline_model->submit_image_details($img_data);
                        if ($result){ 
                           $this->session->set_flashdata('success', 'file uploaded successfully');
                        }
                        else
                        {
                          $this->session->set_flashdata('error', 'File uploaded but data not saved');
                        }
                          redirect('template/timeline');
                    }
    }//end of function upload_file function  
    
    function delete_img($div_id=0){
            $this->load->model('timeline_model');
            //$this->load->model('newsfeed_model');
            $del_image_id = $this->input->post('del_id');

            $image_details = $this->timeline_model->get_details($del_image_id);
            $path = $image_details['path'];
            $file_name = $image_details['file_name'];

            //var_dump($image_details);exit;
            $file_status = $path.'/'.$file_name; 
                if (file_exists($file_status))
                {
                    $del_status = unlink($file_status);
                    //var_dump($del_status);exit;
                    if ($del_status) {
                        $result = $this->timeline_model->delete_image($del_image_id);
                        $this->session->set_flashdata('success', 'Image deleted successfully');
                    }else{
                        $this->session->set_flashdata('error', 'Deletion failed');
                    }
                    
                }
            //var_dump($result);exit;   
           redirect('template/timeline/'.$div_id);
    }//end of delete_img function //

    function upload_profile(){
            
            $this->load->model('timeline_model');
            
            //var_dump($fname);exit;
            $path = '/var/www/html/bindassbuddy/uploads/images';
            $image_path='uploads/images';
            $new_name = date('ymd') . time();
             if (!file_exists($path)) {
                mkdir($path, 0755, true);
             }

                $config['upload_path']          = $path;
                $config['allowed_types']        = 'pdf|doc|docx|jpg|jpeg|gif|text|png';
                $config['max_size']             = 204800;
                $config['max_width']            = 2000;
                $config['max_height']           = 2000;
                $config['file_name']            = $new_name;
               
                

                $this->load->library('upload', $config);

                             
               
                if(!$this->upload->do_upload('myfile'))
                {
                        
                        var_dump($this->upload->display_errors());
                        $this->session->set_flashdata('error', $this->upload->display_errors());
                        //redirect('template');
                       // $this->load->view('slider-images-view', $error);
                }
                else
                {
                                                 
                        $image_details = $this->upload->data();
                        $user_id = $this->session->userdata['sessiondata']['user_id'];

                        $img_data = array(
                          
                            
                            'profile_pic'         =>  $image_details['profile_pic'],
                            

                        );

                    var_dump($img_data);exit;
                    $result = $this->timeline_model->submit_profile_details($img_data,$user_id);
                        
                        if ($result){ 
                           $this->session->set_flashdata('success', 'file uploaded successfully');
                        }
                        else
                        {
                          $this->session->set_flashdata('error', 'File uploaded but data not saved');
                        }
                       
                         redirect('template/timeline');

                }

    }//end of function upload_file function  


}//end of the class
