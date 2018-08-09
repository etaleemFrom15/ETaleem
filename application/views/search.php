<?php include('header.php');?>

	<!-- start banner Area -->
	<section class="banner-area relative" id="home">
		<div class="overlay overlay-bg"></div>
		<div class="container">
			<div class="row fullscreen d-flex align-items-center justify-content-between">
				<div class="banner-content col-lg-9 col-md-12">
					<h1 class="text-uppercase">
						We Ensure better education for a better world
					</h1>
					<p class="pt-10 pb-10">
						In the history of modern astronomy, there is probably no one greater leap forward than the building and launch of the space
						telescope known as the Hubble.
					</p>
					<a href="#" class="primary-btn text-uppercase">Get Started</a>
				</div>
			</div>
		</div>
	</section>
	<!-- End banner Area -->

	<!-- Start feature Area -->
	<section class="feature-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-4">
					<div class="single-feature">
						<div class="search-tabs__head__btn active" tab-for="learn-person">

						</div>
						<div class="search-tabs__head__btn" tab-for="learn-online">
						</div>
						<div class="title">
						<form method="post" action="<?php echo site_url('teachersearch/getTeachers')?>">
				<input type="text" id="search" name="subj_search" placeholder="Subject (try 'Maths' or 'Science')" />
				
        
				        
						<button type=submit class="primary-btn text-uppercase">Find A Tutor</button>;
						<div class="type col-lg-9 col-md-12">
										<span class="span-text search-radio">Search By:</span>
									<input type="radio" class="tutorsearch-radio" name="searchby" value="curr_loc">
										<span class="span-text search-radio">Current Location</span>
									<input type="radio" class="tutorsearch-radio" name="searchby" value="rating" >
										<span class="span-text search-radio">Top Rating</span>
									</div>

						<input type="hidden" name="current-location" id="current-location" value="">			
						</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End feature Area -->

	<!-- Start Search Results Area -->
	
	<!-- End Search Result Area -->

<section>

<?php
if($teacher!=false){
foreach($teacher as $teachers){?>
		<div class="container-fluid SprofileCart">
           <div  class="row SprofilePicture">
				<div class="col-md-3 ">
					<div class="Sbadge">
						
						<span class="Stwo">
							<p>2</p>
						</span>
											  <span class="Sthree">
								<p><b>Repeat</b>
									<br>
									<b>
											Students
									<b>
								</p>
							</span>
					</div>
					<div>
						<img class="Simage" src="<?php echo base_url()?>img/blank-profile.png" alt="Avatar">
				 
					</div>
				</div>
				<div class="col-md-9 SsecondDiv">
					<span class="Sname">
						<h3><?php echo $teachers->first_name." ".$teachers->last_name; ?></h3>
					</span>
				
						
				<?php	
				
				if($teachers->teacher_vote!=null && $teachers->teacher_vote!=""){
				$ratedstars='';
				 $stars='';
						       for ($i = 1; $i <= 5; $i++) {
						      for($j=$i; $i<=$teachers->teacher_vote;$i++){
						      	$ratedstars .= '<span class="fa fa-star checked" id="' . $j .'"></span>';
						      } 	

                                   $stars .= '<span class="fa fa-star" id="' . $i .'"></span>';
                    }
                             echo"
									<div class='star SratingStars'>
						             ".$ratedstars."
								    
																
										</div>";
						            

				}
				
				else{
					
					echo"
					    <span class='SratingStars'>
						<span class='fa fa-star'></span>
						<span class='fa fa-star'></span>
						<span class='fa fa-star'></span>
						<span class='fa fa-star'></span>
						<span class='fa fa-star'></span>
					</span>";
				
				}
						                    	?>
					
					<div class="Sprofession">
						<h4><?php echo $teachers->subject_name;?></h4>
					</div>
					<br>
					<div class="Sreview">
						<h4>(1 review)</h4>
					</div>
										<!-- </div> -->
				<div class="subject">
					<span class="Ssubject">
						<b><?php echo $teachers->cat;?></b>
					</span>
				
				<span class="Sclass"></span>
			</div>
				<div class="Sinfo">
					<article>I have recently completed my MSC Science communication degree at the mehran from jamshoro i currently
						running a block which has shown me how much i enjoy,i like the work mostly i am not saying i am good tutor but my studets are always satisfy with me i noticed it ....
						<a>Read MORE</a>
					</article>
				</div>

				<div  class="row Smessages">
					<div class="Sreplies">
						<span><img src="<?php echo base_url()?>img/message.JPG"/></span>
							<span>Replies in 17 hours </span>
						
					</div>
					<div class="Stime"><span class="StimePic"><img src="<?php echo base_url()?>img/time.JPG"/></span><span>40+Hours Taught</span></div>
				</div>
			</div>
			<div class="thirdDiv">
				<center>
					<div style="overflow:auto; width:225px;">
						<p class="Sten"> Address </p>
                         <p style="font-size:10px"><?php echo $teachers->address;?></p>
					</div> 
					<br>
					<div>
						<h2 class="Sfourty">100 RS</h2>
					</div>
					<br><br>
					<div class="SviewProfile">
						<a class="btn btn-danger" href="<?php echo site_url('TeacherSearch/viewProfile/'.$teachers->tid.'');?>">View Profile</a>
					</div>
				</center>
				</div>
				
				</div>
				
			</div>
		</div>
		<?php }
	}
	else{
		echo "<h2 class='text-center'>No teacher Available for this Subject or Location</h2>";
	}
	?>
	</section>
			


	<!-- Start review Area -->
	<section class="review-area section-gap relative">
		<div class="overlay overlay-bg"></div>
		<div class="container">
			<div class="row">
				<div class="active-review-carusel">
					<div class="single-review item">
						<div class="title justify-content-start d-flex">
							<a href="#">
								<h4>Fannie Rowe</h4>
							</a>
							<div class="star">
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star"></span>
								<span class="fa fa-star"></span>
							</div>
						</div>
						<p>
							Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker. Here you can
							find the best computer accessory for your laptop, monitor, printer, scanner, speaker.
						</p>
					</div>
					<div class="single-review item">
						<div class="title justify-content-start d-flex">
							<a href="#">
								<h4>Hulda Sutton</h4>
							</a>
							<div class="star">
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star"></span>
								<span class="fa fa-star"></span>
							</div>
						</div>
						<p>
							Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker. Here you can
							find the best computer accessory for your laptop, monitor, printer, scanner, speaker.
						</p>
					</div>
					<div class="single-review item">
						<div class="title justify-content-start d-flex">
							<a href="#">
								<h4>Fannie Rowe</h4>
							</a>
							<div class="star">
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star"></span>
								<span class="fa fa-star"></span>
							</div>
						</div>
						<p>
							Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker. Here you can
							find the best computer accessory for your laptop, monitor, printer, scanner, speaker.
						</p>
					</div>
					<div class="single-review item">
						<div class="title justify-content-start d-flex">
							<a href="#">
								<h4>Hulda Sutton</h4>
							</a>
							<div class="star">
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star"></span>
								<span class="fa fa-star"></span>
							</div>
						</div>
						<p>
							Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker. Here you can
							find the best computer accessory for your laptop, monitor, printer, scanner, speaker.
						</p>
					</div>
					<div class="single-review item">
						<div class="title justify-content-start d-flex">
							<a href="#">
								<h4>Fannie Rowe</h4>
							</a>
							<div class="star">
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star"></span>
								<span class="fa fa-star"></span>
							</div>
						</div>
						<p>
							Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker. Here you can
							find the best computer accessory for your laptop, monitor, printer, scanner, speaker.
						</p>
					</div>
					<div class="single-review item">
						<div class="title justify-content-start d-flex">
							<a href="#">
								<h4>Hulda Sutton</h4>
							</a>
							<div class="star">
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star"></span>
								<span class="fa fa-star"></span>
							</div>
						</div>
						<p>
							Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker. Here you can
							find the best computer accessory for your laptop, monitor, printer, scanner, speaker.
						</p>
					</div>
					<div class="single-review item">
						<img src="img/r1.png" alt="">
						<div class="title justify-content-start d-flex">
							<a href="#">
								<h4>Fannie Rowe</h4>
							</a>
							<div class="star">
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star"></span>
								<span class="fa fa-star"></span>
							</div>
						</div>
						<p>
							Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker. Here you can
							find the best computer accessory for your laptop, monitor, printer, scanner, speaker.
						</p>
					</div>
					<div class="single-review item">
						<div class="title justify-content-start d-flex">
							<a href="#">
								<h4>Hulda Sutton</h4>
							</a>
							<div class="star">
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star"></span>
								<span class="fa fa-star"></span>
							</div>
						</div>
						<p>
							Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker. Here you can
							find the best computer accessory for your laptop, monitor, printer, scanner, speaker.
						</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End review Area -->

	<!-- Start cta-one Area -->
	<section class="cta-one-area relative section-gap">
		<div class="container">
			<div class="overlay overlay-bg"></div>
			<div class="row justify-content-center">
				<div class="wrap">
					<h1 class="text-white">Become a tutor</h1>
					<p>
						There is a moment in the life of any aspiring astronomer that it is time to buy that first telescope. It’s exciting to think
						about setting up your own viewing station whether that is on the deck.
					</p>
					<a class="primary-btn wh" data-toggle="modal" href="javascript:void(0)" onclick="openRegisterModal();">Apply for the post</a>
				</div>
			</div>
		</div>
	</section>
	<!-- End cta-one Area -->



	<!-- Start cta-two Area -->
	<section class="cta-two-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 cta-left">
					<h1>Not Yet Satisfied with our Trend?</h1>
				</div>
				<div class="col-lg-4 cta-right">
					<a class="primary-btn wh" href="#">view our blog</a>
				</div>
			</div>
		</div>
	</section>
	<!-- End cta-two Area -->

	<!-- start footer Area -->
	<footer class="footer-area section-gap">
		<div class="container">
			<div class="row">
				<div class="col-lg-2 col-md-6 col-sm-6">
					<div class="single-footer-widget">
						<h4>Top Products</h4>
						<ul>
							<li>
								<a href="#">Managed Website</a>
							</li>
							<li>
								<a href="#">Manage Reputation</a>
							</li>
							<li>
								<a href="#">Power Tools</a>
							</li>
							<li>
								<a href="#">Marketing Service</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="col-lg-2 col-md-6 col-sm-6">
					<div class="single-footer-widget">
						<h4>Quick links</h4>
						<ul>
							<li>
								<a href="#">Jobs</a>
							</li>
							<li>
								<a href="#">Brand Assets</a>
							</li>
							<li>
								<a href="#">Investor Relations</a>
							</li>
							<li>
								<a href="#">Terms of Service</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="col-lg-2 col-md-6 col-sm-6">
					<div class="single-footer-widget">
						<h4>Features</h4>
						<ul>
							<li>
								<a href="#">Jobs</a>
							</li>
							<li>
								<a href="#">Brand Assets</a>
							</li>
							<li>
								<a href="#">Investor Relations</a>
							</li>
							<li>
								<a href="#">Terms of Service</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="col-lg-2 col-md-6 col-sm-6">
					<div class="single-footer-widget">
						<h4>Resources</h4>
						<ul>
							<li>
								<a href="#">Guides</a>
							</li>
							<li>
								<a href="#">Research</a>
							</li>
							<li>
								<a href="#">Experts</a>
							</li>
							<li>
								<a href="#">Agencies</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="col-lg-4  col-md-6 col-sm-6">
					<div class="single-footer-widget">
						<h4>Newsletter</h4>
						<p>Stay update with our latest</p>
						<div class="" id="mc_embed_signup">
							<form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
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
				<p class="footer-text m-0 col-lg-6 col-md-12">
					<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
					Copyright &copy;
					<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with
					<i class="fa fa-heart-o" aria-hidden="true"></i> by
					<a href="https://colorlib.com" target="_blank">Colorlib</a>
					<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
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


<?php include('footer.php');?>