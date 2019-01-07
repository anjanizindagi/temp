<?php 

	defined('BASEPATH') OR exit('No direct script access allowed');

	class Login_model  extends CI_Model {
		function handle($data){
			$this->db->insert('users', $data);
		
		}//end of handle function

		function verify($email, $password){

			$this->db->select('*');
			$this->db->from('users');
			$this->db->where('email',$email);
			$this->db->where('password', $password);
			$q = $this->db->get();
			if($q->num_rows()>0){
				return $q->row_array();
				}
			else{
				return false;
			}
		}//end of verify function
	}//end of class
