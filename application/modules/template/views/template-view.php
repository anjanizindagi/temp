<!DOCTYPE html>
<html>
<head>
	<title>demo</title>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width,intial-scale=1">
  	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/bindass.css">
  	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/bootstrap.min.css">
  	<script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.min.js"></script>
  	<script type="text/javascript" src="<?php echo base_url(); ?>js/bootstrap.min.js"></script>
  	<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
  	<script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.vide.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	
	
</head>
<body>
	<!-- navigation bar starts -->
	<?php 
	$user_id = $this->session->userdata("session_data");
	$user_id = $this->session->userdata['sessiondata']['user_id'];
	$this->load->model('Template_model');
	$result['ddata']=$this->Template_model->display_records($user_id);
	$this->load->view('nav-view',$result); 
	?>
	<!-- navigation bar stop -->

	<!-- ============================================= -->

	<!-- body division starts -->
	<?php echo modules::run($module_name); ?>
	<!-- body division stops -->

	<!-- ============================================= -->
