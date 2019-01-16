<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Newsfeed extends MX_Controller{
    function __construct() 
        {
            Parent::__construct();
            $this->load->database();
            $this->load->helper('form');
            $this->load->model('newsfeed_model');
            $this->load->library('session');
        }


    public function index()
    {
        //$user_id = $this->session->userdata("session_data");

        if(isset($this->session->userdata['sessiondata'])){
            
            $user_id = $this->session->userdata['sessiondata']['user_id'];
            $result = $this->newsfeed_model->display_records($user_id);
            $user_data = $this->newsfeed_model->get_user_info($user_id); 
            $this->load->model('newsfeed_model');
            $result['info'] = $user_data;
            $loggedname = $this->newsfeed_model->display_records($user_id);
            $posts = $this->newsfeed_model->get_posts();
            //var_dump($posts);exit;
            //$result['images'] = $images

            $all_data = array(
                'data'              => $result,
                //'images'            =>  $images,
                'info'              =>  $user_data,
                'loggedname'        =>  $loggedname['name'],
                'posts'             =>  $posts
            );
            $this->load->view('newsfeed-view',$all_data);

        }else{
            redirect(base_url().'login');
            }
        }   //end of function index
    
    function upload_file(){
            
            $this->load->model('newsfeed_model');
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
                            'user_id'           => $user_id,
                            'image_name'        =>  $fname, 
                            'path'              =>  $image_path,
                            'file_name'         =>  $image_details['file_name'],
                            'upload_time'       =>  date('Y-m-d h:m:s')

                        );

                    //var_dump($img_data);exit;
                    $result = $this->newsfeed_model->submit_image_details($img_data);
                        
                        if ($result){ 
                           $this->session->set_flashdata('success', 'file uploaded successfully');
                        }
                        else
                        {
                          $this->session->set_flashdata('error', 'File uploaded but data not saved');
                        }
                       
                         redirect('template');
                         }
        }//end of upload_file function

    function delete_img(){
            //$this->load->model('newsfeed_model');
            $del_image_id = $this->input->post('del_id');

            $image_details = $this->newsfeed_model->get_details($del_image_id);
            $path = $image_details['path'];
            $file_name = $image_details['file_name'];


            $file_status = $path.'/'.$file_name; 
                if (file_exists($file_status))
                {
                    $del_status = unlink($file_status);
                    //var_dump($del_status);exit;
                    if ($del_status) {
                        $result = $this->newsfeed_model->delete_image($del_image_id);
                        $this->session->set_flashdata('success', 'Image deleted successfully');
                    }else{
                        $this->session->set_flashdata('error', 'Deletion failed');
                    }
                    
                }

           redirect('template');
    }//end of delete_img function 

 
     function like_post(){
            $user_id = $this->session->userdata['sessiondata']['user_id'];
            $this->load->model('newsfeed_model');
            $input = urldecode(file_get_contents('php://input'));
            $received = json_decode($input, true);

            $image_id       =  $received['image_id'];

                 
                 $input_data = array(
                    'like_id'       =>  uniqid(),
                    'image_id'       =>  $image_id, 
                    'user_id'       =>  $user_id, 
                  );
                // var_dump($input_data);exit;
                 $result = $this->newsfeed_model->like_post($input_data,$user_id,$image_id);
                 
                $resp = true;
                
                $this->output
                ->set_status_header(200)
                ->set_content_type('application/json', 'utf-8')
                ->set_output(json_encode($result, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES))
                ->_display();
                exit;
   
    }//end of like_post function   
  

    
}//end of class