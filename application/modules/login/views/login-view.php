<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width,intial-scale=1">
	<title>landing page</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/login.css">
	<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>js/login.js"></script>
</head>
<body background="<?php echo base_url(); ?>images/human.jpg">
	<div class="wrapper">
	<div id="box">
		<div id="main"></div>
		<div id="loginform">
			<h1>LOGIN</h1>
      <label class="flashdata"><?php echo $this->session->flashdata('msg'); ?></label>
      <form method="post" action="<?php echo base_url(); ?>login/verify">
      <div class="form-input">
			  <input type="email" name="email" required=""><br>
        <label id="z">Email</label>
      </div>
      <div class="form-input">
			  <input type="password" name="password" required=""><br>
        <label id="z">Password</label>
      </div>

      <button id="btn">LOGIN</button>
      </form>
      
      <a href="www.facebook.com"><button id="facebook">Login with Facebook</button></a><br>
      <a href="www.gmail.com"><button id="gmail">Login with Gmail</button></a><br>
		</div>
		<div id="signupform">
			<h1>SIGN UP</h1>
      <form method="post" action="<?php echo base_url(); ?>login/handle">
			<div class="form-input">
      			<input type="text" name="name" required=""><br>
      			<label id="z">Name</label>
    		</div>
    		<div class="form-input">
     			<input type="date" name="dob" required=""><br>
    		</div>
    		<div class="form-input">
      			<input type="radio" name="gender" value="m"><label>M</label>
      			<input type="radio" name="gender" value="f" id="a"><label>F</label>
    		</div>
    		<div class="form-input">
      			<input type="phone" name="phone" required=""><br>
      			<label id="z">Mobile no.</label>
    		</div>
    		<div class="form-input">
      			<input type="email" name="email" required=""><br>
      			<label id="z">Email Id</label>
    		</div>
    		<div class="form-input">
      			<input type="password" name="password" id="pwd" required="">
            <span id="message"></span><br>
      			<label id="z">Password</label>
    		</div>
    		<div class="form-input">
      			<input type="password" name="Repassword" id="pwd" required="">
            <span id="messages"></span><br>
      			<label id="z">Re-enter Password</label>
    		</div>
        
			<button>SIGN UP</button>
		</div>
    </form>

		<div id="login">Have an account?</div>
		<div id="signup">Don't have an account?</div>

		<button id="login_btn">LOGIN</button>
		<button id="signup_btn">SIGN UP</button>
	</div>
	</div>
</body>
</html>