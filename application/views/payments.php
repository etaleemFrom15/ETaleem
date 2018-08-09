<!DOCTYPE html>
<html lang="zxx" class="no-js">
 <?php

 echo $this->session->flashdata('error_msg');

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
	<link rel="stylesheet" href="<?php echo base_url()?>css/main.css?r=<?php echo time();?> ">
	<link rel="stylesheet" href="<?php echo base_url();?>css/home.css">
	<link rel="stylesheet" href="<?php echo base_url();?>css/self.css">
	<link rel="stylesheet" href="<?php echo base_url();?>css/intlTelInput.css">



</head>

<body>
	<header id="payment-header" id="home">
		<div class="header-top">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 col-sm-6 col-8 header-top-left no-padding">
						<ul>
							<li>
								<a href="#">
									<i class="fa fa-facebook"></i>
								</a>
							</li>
							<li>
								<a href="#">
									<i class="fa fa-twitter"></i>
								</a>
							</li>
							<li>
								<a href="#">
									<i class="fa fa-dribbble"></i>
								</a>
							</li>
							<li>
								<a href="#">
									<i class="fa fa-behance"></i>
								</a>
							</li>
						</ul>
					</div>
					<div class="col-lg-6 col-sm-6 col-4 header-top-right no-padding">
					


				
						
               
						    <?php 
							
							if (isset($user_name))
							
							echo "Welcome: .$user_name
						</span>

	                     <a href=".site_url('main/user_profile/'.$user_type.'').">
							<span class='lnr'></span>
							<span class='text'>Go to Profile</span>
						</a>";
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
                     
						<li class='menu-has-children'>
							<a href=''>RESOURCES</a>
							<ul>
								<li>
									<a href='blog-home.html'>Blog Home</a>
								</li>
								<li>
									<a href='blog-single.html'>Blog Single</a>
								</li>
							</ul>
						</li>
						
						<li>
						<a href=".site_url('Payments')." >Payments</a>
						</li>";
					
					
					
					if(isset($user_name)){
						echo "<a href=".site_url('main/user_logout')." >LogOut</a>";
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

    <br><br>
    <div class="container-fluid payment">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6"><h2>Payment Options & Account Activation</h2></div>
            <div class="col-md-3"></div>
        </div>
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-9"><p>Once you have submitted your order,please follow below 2 steps to get your account activated within 30 minutes</p></div>
            <div class="col-md-1"></div>

        </div>
        <div class="row">
            <!-- <div class="col-md-1"></div> -->
            <div class="col-md-12"><hr></div>
            <!-- <div class="col-md-1"></div> -->
        </div>
        <div class="row">
            <div class="col-md-6">
                <center>
                    <p>
                    <b>
                        Step#1:Submit Payment
                    </b>
                    <br>
                    
                            Submit your payment using any of the below mentioned payment methods. If you don't find a right payment option, please 
                            <a href="">Contact us</a>
                    
                </p>
                </center>
            <div class="easypaise">
                <div class="jazzcash"> 
                <center><h2>Easypaisa & Jazzcash</h2></center>
            </div>
            <div>
               <p class="lines">You can send payment to below mentioned mobile accounts</p>
                
                <ul>
                    <li>
                            Standard Chartered Bank (A/C: 01-1756031-01)
                    </li>
                <li>
                        UBL Bank Limited (A/C: 0932-0932-246760863)
                </li>
                                </ul>
                                
                                <p class="lines">Incase of cash deposit, please confirm charges with bank at the time of payment.</p>

                            </div>
            </div>
            </div>
            <div class="col-md-6">
                <center>
                    <p>
                        <b>
                                Step # 2: Send Payment Confirmation
                        </b>
                        <br>
                        Once your payment is complete, fill below form to send payment details for account activation.
                    </p>
                </center>
                <div class="ac_details">
                    <center>
                        <p class="send">
                            <b>Send Payment Details For Account Activation</b>
                        </p>
                        <br>
                        <form action="<?php site_url("Payments/index")?>" method="post">

                        <label for="">Invoice Number</label><br>
                        <input type="text" name="invoice_num"/><br>

                        <label for="">CNIC</label><br>
                        <input type="text" name="CNIC"/><br>
                        

                    <label for="">Payment Method:</label>
                    <br>
                    <select class="volvo" name="payment_method">
                            <option value="Select Option">--Select Option--</option>
                            <option value="Jazzcash">Jazzcash Mobile Account</option>
                            <option value="Easypaise">Easypaise Mobile Account</option>
                      </select>
                          <br>
                   <label for="">Transaction Number</label>
        <br>
        <input type="number" name="transaction_num">
        <br>

        <label for="">Amount Send</label>
        <br>
        <input type="number" name="amount">
        <br>
        <label for="">Date Of Payment</label>
<br>
        <input type="date" name="date">
<br><br>
<button class="confirm" name="submit">Confirm My Payment</button>       
<br>
</form>
<p><i>Note: please ensure correct details are filled in to avoid delays.</i></p>
<?php if(isset($mesg)){echo $mesg; } ?>

</center>

                </div>
            </div>
            
        </div>
    </div>
<?php include('footer.php');?>