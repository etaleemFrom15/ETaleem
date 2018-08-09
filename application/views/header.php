<!DOCTYPE html>
<html lang="zxx" class="no-js">
 <?php

 $error_msg=$this->session->flashdata('error_msg');

 $user_id=$this->session->userdata('user_id');
 $user_name=$this->session->userdata('user_fname');

$user_lname=$this->session->userdata('user_lname');
 $user_email=$this->session->userdata('user_email');
 $user_type=$this->session->userdata('user_type');
 

 $course_id=$this->uri->segment('3');
?>


<head>


	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Favicon-->
	<link rel="shortcut icon" href="img/fav.png">
	<!-- Author Meta -->
	<meta name="author" content="colorlib">
	<!-- Meta Description -->
	<meta name="description" content="">
	<!-- Meta Keyword -->
	<meta name="keywords" content="">
	<!-- meta character set -->
	<meta charset="UTF-8">
	<!-- Site Title -->
	<title>eTaleem</title>
	<script src="http://code.jquery.com/jquery-2.2.4.min.js"></script>

	<script src="<?php echo base_url();?>js/login-register.js" type="text/javascript"></script>
	<script src="<?php echo base_url();?>js/vendor/jquery-2.2.4.min.js"></script>

		  

	
	<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
	
	<!--CSS============================================= -->
	
	<link rel="stylesheet" href="<?php echo base_url();?>css/linearicons.css">
	<link rel="stylesheet" href="<?php echo base_url();?>css/font-awesome.min.css">
	<link rel="stylesheet" href="<?php echo base_url();?>css/bootstrap.css">
	<link rel="stylesheet" href="<?php echo base_url();?>css/magnific-popup.css">
	<link rel="stylesheet" href="<?php echo base_url();?>css/nice-select.css">
	<link rel="stylesheet" href="<?php echo base_url();?>css/animate.min.css">
	<link rel="stylesheet" href="<?php echo base_url();?>css/owl.carousel.css">
    <link rel="stylesheet" href="<?php echo base_url();?>css/jquery-ui.css">
	<link rel="stylesheet" href="<?php echo base_url()?>css/main.css">
	<link rel="stylesheet" href="<?php echo base_url();?>css/home.css">
	<link rel="stylesheet" href="<?php echo base_url();?>css/self.css">
	<link rel="stylesheet" href="<?php echo base_url();?>css/subject.css">
	<link rel="stylesheet" href="<?php echo base_url();?>css/search.css">
	<link rel="stylesheet" href="<?php echo base_url();?>css/intlTelInput.css">



</head>

<body>
	<header id="header" id="home">
		<div class="header-top">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 col-sm-6 col-8 header-top-left no-padding">
						
					</div>
					
					<h5 style="color:white;"><?php echo $error_msg;?> </h5>
					
					<div class="col-lg-6 col-sm-6 col-4 header-top-right no-padding">
						

					
               
						    <?php 
							
							if (isset($user_name)){
							
							echo "<span style='color:white;'>Welcome: .$user_name 
						</span>

	                     <a href=".site_url('main/user_profile/'.$user_type.'').">
							<span class='lnr'></span>
							<span class='text'>Go to Profile</span>
						</a>";
							}
						?>
					</div>
				</div>
			</div>
		</div>
		<div class="container main-menu">
			<div class="row align-items-center justify-content-between d-flex">
				<div id="logo">
					<a href="<?php echo site_url('main')?>">
						<img src="<?php echo base_url();?>img/logo.png" alt="" title="" />
					</a>
				</div>
				<nav id="nav-menu-container">
					<ul class="nav-menu">
						   <?php 
					echo	   
						"<li>
							<a href='".site_url('subjects')."'>SUBJECTS</a>
						</li>
				     	
						<li>
					  <a href=".site_url('courses/courses')." >Courses</a>
						</li>
                     
					
						
						<li>
						<a href=".site_url('Payments')." >Payments</a>
						</li>";
					
					
					
					if(isset($user_name)){
						echo "<li><a id='logout-btn' href=".site_url('main/user_logout')." >LogOut</a></li>";
					}
					
					else{
						echo "<li>

							<a data-toggle='modal' href='javascript:void(0)' onclick='openLoginModal();'>Login</a>
						</li>
							<li>

							<a data-toggle='modal' href='javascript:void(0)' onclick='openRegisterModal();'>SignUp</a>
						</li>";
					}
					
					echo "<a href='#'' class='transparent_btn' data-toggle='modal' data-target='#myModalNorm'>Request a Tutor</a>";
					?>
					</ul>
				</nav>
				<!-- #nav-menu-container -->
			</div>
		</div>
	</header>
	<!-- #header -->
