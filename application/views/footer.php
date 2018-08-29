<!-- start footer Area -->
<footer class="footer-area section-gap">
		<div class="container">
			<div class="row">
				<div class="col-lg-2 col-md-6 col-sm-6">
					<div class="single-footer-widget">
						<h4>Top Courses</h4>
						<ul>
							<li>
								<a href="#">Php</a>
							</li>
							<li>
								<a href="#">Java</a>
							</li>
							<li>
								<a href="#">Csharp</a>
							</li>
							<li>
								<a href="#">Web Designing</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="col-lg-2 col-md-6 col-sm-6">
					<div class="single-footer-widget">
						<h4>Social links</h4>
						<ul>
							<li>
								<a href="#">Facebook</a>
							</li>
							<li>
								<a href="#">Google</a>
							</li>
							<li>
								<a href="#">Twitter</a>
							</li>
							<li>
								<a href="#">Instagram</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="col-lg-2 col-md-6 col-sm-6">
					<div class="single-footer-widget">
						<h4>Top Subjects</h4>
						<ul>
							<li>
								<a href="#">Programming</a>
							</li>
							<li>
								<a href="#">Maths</a>
							</li>
							<li>
								<a href="#">English</a>
							</li>
							
						</ul>
					</div>
				</div>
				<div class="col-lg-2 col-md-6 col-sm-6">
					<div class="single-footer-widget">
						
					</div>
				</div>
				<div class="col-lg-4  col-md-6 col-sm-6">
					<div class="single-footer-widget">
						<h4>Newsletter</h4>
						<p>Stay update with our latest</p>
						<div class="" id="mc_embed_signup">
							<form target="_blank" action=""
							 method="get">
								<div class="input-group">
									<input type="text" class="form-control" name="EMAIL" placeholder="Enter Email Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Email Address '"
									 required="" type="email">
									<div class="input-group-btn">
										<button class="btn btn-default" type="submit">
											<span class="lnr lnr-arrow-right"></span>
										</button>
									</div>
									<div class="info"></div>
								</div>
							</form>
						</div>
					</div>
				</div>
			
			</div>
			<div class="footer-bottom row align-items-center justify-content-between">
				<p style="color:white;" class="footer-text m-0 col-lg-6 col-md-12">
					Copyright &copy;
					<script>document.write(new Date().getFullYear());</script> All rights reserved &copy;
		
					<a href="<?php echo base_url().'main';?>" target="_blank">eTaleem</a>
				</p>
				<div class="col-lg-6 col-sm-12 footer-social">
					<a href="#">
						<i class="fa fa-facebook"></i>
					</a>
					<a href="#">
						<i class="fa fa-twitter"></i>
					</a>
					<a href="#">
						<i class="fa fa-dribbble"></i>
					</a>
					<a href="#">
						<i class="fa fa-behance"></i>
					</a>
				</div>
			</div>
		</div>
	</footer>
	<!-- End footer Area -->
<!-- Start of login and sign up modal -->
<div class="modal fade login" id="loginModal">
		<div class="modal-dialog login animated">
			<div class="modal-content">
				<div class="modal-header">
					<h4 style="float:left" class="modal-title">Login</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>

				</div>
				<div class="modal-body">
					<div class="box">
						<div class="content">
							<div class="error"></div>
							<div class="form loginBox">
								<form method="post" action="<?php echo site_url('main/login_user');?>" accept-charset="UTF-8">
									<input id="email" class="form-control" type="text" placeholder="Email" name="email">
									<input id="password" class="form-control" type="password" placeholder="Password" name="password">
									<div class="type">
										<span class="span-text">I am a</span>
										<input type="radio" name="profession" value="teacher" checked/>
										<span class="span-text">Teacher</span>
										<input type="radio" name="profession" value="student" />
										<span class="span-text">Student</span>
									</div>
									<input class="btn btn-default btn-login" type="submit" value="Login" name="login_btn">
								</form>
							</div>
						</div>
					</div>
					<div class="box">
						<div class="content registerBox" style="display:none;">
							<div class="form">
				 <form method="post" html="{:multipart=>true}" data-remote="true" action="<?php echo site_url('main/register_user');?>" accept-charset="UTF-8">
                  <input id="fname" class="form-control" type="text" placeholder="First Name" name="fname">
                  <input id="lname" class="form-control" type="text" placeholder="Last Name" name="lname">
									<div class="type">
										<span class="span-text">Gender</span>
										<input type="radio" name="gender" value="1" checked/>
										<span class="span-text">male</span>
										<input type="radio" name="gender" value="0" />
										<span class="span-text">female</span>
									</div>
									<input id="email" class="form-control" type="text" placeholder="Email" name="email">
              <input id="phone" type="tel" placeholder="Mobile Number" name="mobile_no" class="form-control">
                  
			<input id="password" class="form-control" type="password" placeholder="Password" name="password">
									
			<select placeholder="Select City" class="form-control" name="city" id="city">
            <option class="option" value="0">Select your City</option>
            <option class="option" value="Abbottabad">Abbottabad</option>
            <option class="option" value="Adezai">Adezai</option>
            <option class="option" value="Attock">Attock</option>
            <option class="option" value="Ayubia">Ayubia</option>
            <option class="option" value="Bahawalpur">Bahawalpur</option>
            <option class="option" value="Baden">Baden</option>
            <option class="option" value="Bagh">Bagh</option>
            <option class="option" value="Bahawalnagar">Bahawalnagar</option>
            <option class="option" value="Burewala">Burewala</option>
            <option class="option" value="Banda Daud Shah">Banda Daud Shah</option>
            <option class="option" value="Bannu district|Bannu">Bannu</option>
            <option class="option" value="Chiniot">Chiniot</option>
            <option class="option" value="Chakwal">Chakwal</option>
            <option class="option" value="Chaman">Chaman</option>
            <option class="option" value="Charsadda">Charsadda</option>
            <option class="option" value="Chhatr">Chhatr</option>
            <option class="option" value="Chichawatni">Chichawatni</option>
            <option class="option" value="Chitral">Chitral</option>
            <option class="option" value="Dadu">Dadu</option>
            <option class="option" value="Dera Ghazi Khan">Dera Ghazi Khan</option>
            <option class="option" value="Dera Ismail Khan">Dera Ismail Khan</option>
            <option class="option" value="Daska">Daska</option>
            <option class="option" value="Dera Bugti">Dera Bugti</option>
            <option class="option" value="Dhana Sar">Dhana Sar</option>
            <option class="option" value="Digri">Digri</option>
            <option class="option" value="Faisalabad">Faisalabad</option>
            <option class="option" value="Ghotki">Ghotki</option>
            <option class="option" value="Gujranwala">Gujranwala</option>
            <option class="option" value="Gujrat">Gujrat</option>
            <option class="option" value="Hyderabad">Hyderabad</option>
            <option class="option" value="Hala">Hala</option>
            <option class="option" value="Haripur">Haripur</option>
            <option class="option" value="Hab Chauki">Hab Chauki</option>
            <option class="option" value="Hafizabad">Hafizabad</option>
            <option class="option" value="Hameedabad">Hameedabad</option>
            <option class="option" value="Islamabad">Islamabad</option>
            <option class="option" value="Islamkot">Islamkot</option>
            <option class="option" value="Jacobabad">Jacobabad</option>
            <option class="option" value="Jamshoro">Jamshoro</option>
            <option class="option" value="Jhang">Jhang</option>
            <option class="option" value="Jhelum">Jhelum</option>
            <option class="option" value="Jamesabad">Jamesabad</option>
            <option class="option" value="Jampur">Jampur</option>
            <option class="option" value="Janghar">Janghar</option>
            <option class="option" value="Jati, Jati(Mughalbhin)">Jati</option>
            <option class="option" value="Jauharabad">Jauharabad</option>
            <option class="option" value="Karachi">Karachi</option>
            <option class="option" value="Kotri">Kotri</option>
            <option class="option" value="Kalam">Kalam</option>
            <option class="option" value="Kandiaro">Kandiaro</option>
            <option class="option" value="Kanpur">Kanpur</option>
            <option class="option" value="Karodi">Karodi</option>
            <option class="option" value="Kashmor">Kashmor</option>
            <option class="option" value="Kasur">Kasur</option>
            <option class="option" value="Katuri">Katuri</option>
            <option class="option" value="Keti Bandar">Keti Bandar</option>
            <option class="option" value="Khairpur">Khairpur</option>
            <option class="option" value="Khanaspur">Khanaspur</option>
            <option class="option" value="Khanewal">Khanewal</option>
            <option class="option" value="Kharan">Kharan</option>
            <option class="option" value="kharian">kharian</option>
            <option class="option" value="Khokhropur">Khokhropur</option>
            <option class="option" value="Khora">Khora</option>
            <option class="option" value="Khushab">Khushab</option>
            <option class="option" value="Khuzdar">Khuzdar</option>
            <option class="option" value="Kohat">Kohat</option>
            <option class="option" value="Lahore">Lahore</option>
            <option class="option" value="Larkana">Larkana</option>
            <option class="option" value="Lahri">Lahri</option>
            <option class="option" value="Lakki Marwat">Lakki Marwat</option>
            <option class="option" value="Lasbela">Lasbela</option>
            <option class="option" value="Liari">Liari</option>
            <option class="option" value="Lodhran">Lodhran</option>
            <option class="option" value="Multan">Multan</option>
            <option class="option" value="Mandi Bahauddin">Mandi Bahauddin</option>
            <option class="option" value="Mansehra">Mansehra</option>
            <option class="option" value="Mian Chanu">Mian Chanu</option>
            <option class="option" value="Mirpur">Mirpur</option>
            <option class="option" value="Moro, Pakistan|Moro">Moro</option>
            <option class="option" value="Mardan">Mardan</option>
            <option class="option" value="Malakand">Malakand</option>
            <option class="option" value="Matiari">Matiari</option>
            <option class="option" value="Mehar">Mehar</option>
            <option class="option" value="Mianwali">Mianwali</option>
            <option class="option" value="Mianez">Mianez</option>
            <option class="option" value="Mirpur Batoro">Mirpur Batoro</option>
            <option class="option" value="Mirpur Khas">Mirpur Khas</option>
            <option class="option" value="Mirpur Sakro">Mirpur Sakro</option>
            <option class="option" value="Mithi">Mithi</option>
            <option class="option" value="Muzaffar Garh">Muzaffar Garh</option>
            <option class="option" value="Muzaffarabad">Muzaffarabad</option>
            <option class="option" value="Nawabshah">Nawabshah</option>
            <option class="option" value="Nazimabad">Nazimabad</option>
            <option class="option" value="Nowshera">Nowshera</option>
            <option class="option" value="Nagar Parkar">Nagar Parkar</option>
            <option class="option" value="Nasirabad">Nasirabad</option>
            <option class="option" value="Okara">Okara</option>
            <option class="option" value="Ormara">Ormara</option>
            <option class="option" value="Peshawar">Peshawar</option>
            <option class="option" value="Panjgur">Panjgur</option>
            <option class="option" value="Pasni City">Pasni City</option>
            <option class="option" value="Paharpur">Paharpur</option>
            <option class="option" value="Palantuk">Palantuk</option>
            <option class="option" value="Quetta">Quetta</option>
            <option class="option" value="Qambar">Qambar</option>
            <option class="option" value="Qamruddin Karez">Qamruddin Karez</option>
            <option class="option" value="Qazi Ahmad">Qazi Ahmad</option>
            <option class="option" value="Qila Abdullah">Qila Abdullah</option>
            <option class="option" value="Qila Ladgasht">Qila Ladgasht</option>
            <option class="option" value="Qila Safed">Qila Safed</option>
            <option class="option" value="Qila Saifullah">Qila Saifullah</option>
            <option class="option" value="Rawalpindi">Rawalpindi</option>
            <option class="option" value="Rabwah">Rabwah</option>
            <option class="option" value="Rahim Yar Khan">Rahim Yar Khan</option>
            <option class="option" value="Rajan Pur">Rajan Pur</option>
            <option class="option" value="Rakhni">Rakhni</option>
            <option class="option" value="Ranipur">Ranipur</option>
            <option class="option" value="Ratodero">Ratodero</option>
            <option class="option" value="Rawalakot">Rawalakot</option>
            <option class="option" value="Renala Khurd">Renala Khurd</option>
            <option class="option" value="Robat Thana">Robat Thana</option>
            <option class="option" value="Rodkhan">Rodkhan</option>
            <option class="option" value="Rohri">Rohri</option>
            <option class="option" value="Sialkot">Sialkot</option>
            <option class="option" value="Sadiqabad">Sadiqabad</option>
            <option class="option" value="Safdar Abad- (Dhaban Singh)">Safdar Abad</option>
            <option class="option" value="Sahiwal">Sahiwal</option>
            <option class="option" value="Saidu Sharif">Saidu Sharif</option>
            <option class="option" value="Saindak">Saindak</option>
            <option class="option" value="Sakrand">Sakrand</option>
            <option class="option" value="Sargodha">Sargodha</option>
            <option class="option" value="Shadadkhot">Shadadkhot</option>
            <option class="option" value="Shakargarh">Shakargarh</option>
            <option class="option" value="Shangla">Shangla</option>
            <option class="option" value="Sharam Jogizai">Sharam Jogizai</option>
            <option class="option" value="Sheikhupura">Sheikhupura</option>
            <option class="option" value="Shikarpur">Shikarpur</option>
            <option class="option" value="Shingar">Shingar</option>
            <option class="option" value="Shorap">Shorap</option>
            <option class="option" value="Sibi">Sibi</option>
            <option class="option" value="Sui">Sui</option>
            <option class="option" value="Sujawal">Sujawal</option>
            <option class="option" value="Sukkur">Sukkur</option>
            <option class="option" value="Swabi">Swabi</option>
            <option class="option" value="Swat">Swat</option>
            <option class="option" value="Tando Adam">Tando Adam</option>
            <option class="option" value="Tando Bago">Tando Bago</option>
            <option class="option" value="Tando Alahyar">Tando Alahyar</option>
            <option class="option" value="Thatta">Thatta</option>
            <option class="option" value="Turbat">Turbat</option>
            <option class="option" value="Umarao">Umarao</option>
            <option class="option" value="Umarkot">Umarkot</option>
            <option class="option" value="Upper Dir">Upper Dir</option>
            <option class="option" value="Uthal">Uthal</option>
            <option class="option" value="Vehari">Vehari</option>
            <option class="option" value="Veirwaro">Veirwaro</option>
            <option class="option" value="Vitakri">Vitakri</option>
            <option class="option" value="Wadh">Wadh</option>
            <option class="option" value="Wah Cantt">Wah Cantt</option>
            <option class="option" value="Warah">Warah</option>
            <option class="option" value="Wasjuk">Wasjuk</option>
            <option class="option" value="Wazirabad">Wazirabad</option>
            <option class="option" value="Yakmach">Yakmach</option>
            <option class="option" value="Zhob">Zhob</option>
            <option class="option" value="Other">Other</option>                                       
            </select>		

            <textarea placeholder="Enter your address" name="address" class="form-control" col=6 row=10></textarea>		
									<div class="type">
										<span class="span-text">Sign Up as a</span>
										<input type="radio" name="profession" value="teacher" checked/>
										<span class="span-text">Teacher</span>
										<input type="radio" name="profession" value="student" />
										<span class="span-text">Student</span>
									</div>
        
         <!--For set location using ajax -->
									<input type="hidden" id="location" name="loc" value="">	
						
							<input class="btn btn-default btn-register" type="submit" value="Create account" name="reg_btn">
								</form>
								
							</div>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<div class="forgot login-footer">
						<span>Looking to
							<a href="javascript: showRegisterForm();">create an account</a>
							?</span>
					</div>
					<div class="forgot register-footer" style="display:none">
						<span>Already have an account?</span>
						<a href="javascript: showLoginForm();">Login</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End of login and singup modal -->
	<!--Start Request Modal-->
	<div class="modal fade" id="myModalNorm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<!-- Modal Header -->
				<div class="modal-header">
					<h4 class="modal-title" id="myModalLabel">
						Request a Tutor
					</h4>
					<button type="button" class="close" data-dismiss="modal">
						<span aria-hidden="true">&times;</span>
						<span class="sr-only">Close</span>
					</button>
					
				</div>

				<!-- Modal Body -->
				<div class="modal-body">
				<p>Short on time? Let us know what you are looking for and we will put you in touch with great tutors in your area.</p>	
					
					<form action="<?php echo site_url('Request_Controller/send_request');?>" method="POST">
						<div class="form-group">
							<input type="text" class="form-control" name="course_title" id="subject-name" placeholder="Enter Course Name" />
						</div>

						<div class="form-group">
							<select id="cat" class="form-control">
								<option value="none">Course Catogery</option>
								<?php foreach($cats as $cat){?>
									<option value="<?php echo $cat['id']; ?>"><?php echo $cat['cat']; ?></option>
								<?php } ?>
							</select>
						</div>

						<div class="form-group">
							<Label for="name">Where do you want lessons?:</Label>
							<br/>
							<label class="radio-inline"><input type="radio" id="value="home" name="optradio">Home</label>		
							<label class="radio-inline"><input type="radio" value="online" name="optradio">Online</label>
						</div>
						<div class="form-group">
							<textarea name="des" class="form-control" rows="5" id="comment"></textarea>
						</div>
						<input type="hidden" id="u_email" value="<?php echo $user_email; ?>" name="">

						<input type="hidden" id="base_url" value="<?php echo base_url(); ?>" name="">
                    
					</form>

					<button type="submit" onclick="insertRequestData()" class="btn btn-primary">Submit Request</button>

					<div style="display:none" id="requestalert" class="alert alert-success">
					  Request Send Succesfully
					</div>

				</div>

				<!-- Modal Footer -->
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">
						Cancel
					</button>

				</div>
			</div>
		</div>
	</div>
	<!--End Request Modal-->

	

		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
	 crossorigin="anonymous"></script>

	 <script src="<?php echo base_url();?>js/jquery.ajaxchimp.min.js"></script>

    <script src="<?php echo base_url();?>js/vendor/bootstrap.min.js"></script>
   
	<script src="<?php echo base_url();?>js/custom.js"></script>
	  

    <script src="<?php echo base_url();?>js/login-register.js" type="text/javascript"></script>


	<script src="<?php echo base_url();?>js/easing.min.js"></script>
	<script src="<?php echo base_url();?>js/hoverIntent.js"></script>
	<script src="<?php echo base_url();?>js/superfish.min.js"></script>
	<script src="<?php echo base_url();?>js/jquery.magnific-popup.min.js"></script>
	<script src="<?php echo base_url();?>js/jquery.tabs.min.js"></script>
	<script src="<?php echo base_url();?>js/jquery.nice-select.min.js"></script>
	<script src="<?php echo base_url();?>js/owl.carousel.min.js"></script>
	<script src="<?php echo base_url();?>js/mail-script.js"></script>
	<script src="<?php echo base_url();?>js/main.js"></script>
	<script src="<?php echo base_url();?>js/intlTelInput.js"></script>
	<script>
		$("#phone").intlTelInput({
			// allowDropdown: false,
			// autoHideDialCode: false,
			// autoPlaceholder: "off",
			// dropdownContainer: "body",
			// excludeCountries: ["us"],
			// formatOnDisplay: false,
			// geoIpLookup: function(callback) {
			//   $.get("http://ipinfo.io", function() {}, "jsonp").always(function(resp) {
			//     var countryCode = (resp && resp.country) ? resp.country : "";
			//     callback(countryCode);
			//   });
			// },
			// hiddenInput: "full_number",
			// initialCountry: "auto",
			// nationalMode: false,
			// onlyCountries: ['us', 'gb', 'ch', 'ca', 'do'],
			// placeholderNumberType: "MOBILE",
			// preferredCountries: ['cn', 'jp'],
			// separateDialCode: true,
			utilsScript: "<?php echo base_url();?>js/utils.js"
		});
	</script>
</body>

</html>