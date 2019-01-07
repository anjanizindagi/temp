<!DOCTYPE html>
<html>
<head>
	<title>demo</title>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width,intial-scale=1">
  	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/bindass.css">
	<title>newsfeed</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	
	
</head>
<body>
	<!-- navigation bar starts -->
	<?php $this->load->view('nav-view'); ?>
	<!-- navigation bar stop -->

	<!-- ============================================= -->

	<!-- body division starts -->
	<?php echo modules::run($module_name); ?>
	<!-- body division stops -->

	<!-- ============================================= -->

	
</body>
</html>