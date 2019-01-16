<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Test extends MX_Controller {
    public function index()
	{
		$this->load->view('test-view');
	}
	function  form_data()
	{
		
				$this->load->model('test_model');
                $this->load->helper('string');
                $input = urldecode(file_get_contents('php://input'));



                $received = json_decode($input, true);

                $user_info_id = $received[user_info_id]

                 //var_dump($received);exit();

                $data = array();

                foreach($received as $value)
                {
                    $data[$value['name']] = $value['value'];
                    $user_id = $this->session->userdata['sessiondata']['user_id'];
                    //$result['data']=$this->test_model->display_record($user_id);
                    $user_info_id= $this->test_model->display_records($user_info_id);
                }         

               
               


                $modal_data = array(

                    'id'                    =>  uniqid(),
                    'user_info_id'          =>  $user_info_id_array['user_info_id'],
                    'user_id'               =>  $user_id,
                    'name'                  =>  $data['name']
                    //'phone'         =>  $data['mobile'],
                    //'date_time'     =>  date('Y-m-d')
                );


                $result = $this->test_model->save_data($modal_data);

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
	}//end of function form data
}