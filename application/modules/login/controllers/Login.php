 <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends MX_Controller {

	function index()
	{
		$this->load->view('login-view');
	}

	function handle(){
		$name = $this->input->post('name');
		$dob = $this->input->post('dob');
		$gender = $this->input->post('gender');
		$phone = $this->input->post('phone');
		$email = $this->input->post('email');
		$password = $this->input->post('password');


		$data = array(
			'user_id' => hash("sha1",$email),
			'name'=> $name,
			'dob' => $dob,
			'gender' => $gender,
			'phone' => $phone,
			'email' => $email,
			'password' => $password,
			'created_date' => date('y-m-d')

		);
		//var_dump($data); exit;
		$this->load->model('login_model');
	    $this->login_model->handle($data);
	    redirect(base_url()."login");
	}//end of handle function


	function verify(){
		$email = $this->input->post('email');
		$password = $this->input->post('password');

		$this->load->model('login_model');
		$user = $this->login_model->verify($email, $password);

		if($user){
			$ses_data = array('user_id' => $user['user_id'],
							   'name' => $user['name'],
							   'email' => $user['email']
							);
			
			$this->session->set_userdata('sessiondata', $ses_data);
			redirect(base_url().'template');
		}else{
			$this->session->set_flashdata('msg','Email or Password is wrong.');
			redirect(base_url().'login');
		}

	}//end of function verify


	function logout(){
		$this->session->sess_destroy();
		redirect(base_url().'login');
	}//end of logout function
	function google(){

		require_once('googleApi/vendor/autoload.php');
		$client = new Google_Client();
		$client->setAuthConfig('client_credentials.json');
		$client->addScope(Google_Service_Oauth2::PLUS_LOGIN);
		$client->setRedirectUri("http://localhost/temp/login/callback");
		$authUrl = $client->createAuthUrl();
		header("location: ".$authUrl);
	
		
	}//end of fuction google

	function callback(){
		require_once('googleApi/vendor/autoload.php');
		$client = new Google_Client();
		$client->setAuthConfig('client_credentials.json');
		$client->addScope(Google_Service_Oauth2::PLUS_LOGIN);
		$client->setRedirectUri("http://localhost/temp/login/callback");
		
		if (isset($_SESSION['accessToken'])){
			$client->setAccessToken($_SESSION['accessToken']);
		}
		else if (isset($_GET['code'])) {
		    $token = $client->fetchAccessTokenWithAuthCode($_GET['code']);
		    $_SESSION['accessToken'] = $token;
		}
		else{
			header("location: index.php");
		}

		$oAtuth = new Google_Service_Oauth2($client);
		$user = $oAtuth->userinfo->get();

		echo "<pre>";
		print_r($user->name);
	}//end of function callback
}//end of class