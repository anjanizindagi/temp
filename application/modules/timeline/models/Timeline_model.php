<?php
class Timeline_model extends CI_Model 
{
  function __construct() {
  parent::__construct();
  }
  
  function timeline_posts($user_id){
    $this->db->where('user_id', $user_id);
    $this->db->select('*');
    $this->db->from('images');
    $q = $this->db->get();

    if ($q->num_rows()>0) {
      return $q->result_array();
    }else{
      return false;
    }
     
  }//end of timeline_posts function
  
  function display_records($user_id)
  {
    $query = $this->db->query("select * from users where user_id = '$user_id'");
    return $query->row_array();
  }//end of display_records function
  function get_user_info($user_id)
  {
    $query=$this->db->query("select * from user_info where user_id = '$user_id'");
    return $query->row_array();
  }//end of display_records function


function submit_image_details($img_data){
    $result = $this->db->insert('images', $img_data);

    if ($result) {
      return true;
    }else{
      return false;
    }
}//end of submit_image_details function 



  function get_details($del_image_id){
    $this->db->select('*');
    $this->db->where('image_id', $del_image_id);    
    $q = $this->db->get('images');
    if ($q->num_rows()>0) {
        return $q->row_array();
    }else{
      return false;
    }
  }//end of get_details function 

  function delete_image($del_image_id){
    $this->db->where('image_id', $del_image_id);
   
    $q = $this->db->delete('images');

    if ($q) {
      return true;
    }else{
      return false;
    }
  }//end of delete_image function 
  
    function like_post($input_data, $user_id, $post_id){
     $result = $this->db->insert('like_post', $input_data);

    if ($result) {
      return true;
    }else{
      return false;
    }
    
    }//end of like_post function

 function submit_profile_details($img_data){
    $result = $this->db->insert('userss', $img_data);

    if ($result) {
      return true;
    }else{
      return false;
    }
}//end of submit_image_details function 

}

    
