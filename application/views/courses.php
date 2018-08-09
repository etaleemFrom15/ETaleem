<!--Header-->
	<?php include("header.php"); ?>
		
			  
			<!-- start banner Area -->
			<section class="banner-area relative about-banner" id="home">	
				<div class="overlay overlay-bg"></div>
				<div class="container">				
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h1 class="text-white">
								Popular Courses		
							</h1>	
							<p class="text-white link-nav"><a href="../main">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="courses"> Popular Courses</a></p>
						</div>	
					</div>
				</div>
			</section>
			<!-- End banner Area -->	

			<!-- Start popular-courses Area --> 
			<section class="popular-courses-area section-gap courses-page">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-70 col-lg-8">
							<div class="text-center">
								<h1 class="mb-10">Popular Courses we offer</h1>
								<p>There is a moment in the life of any aspiring.</p>
							</div>
						</div>
					</div>	
                    <div class="row">
                   <!-- Writing PHP to query courses and Show in Row --->
                   <?php
                     $sql="SELECT cdr.id,cdr.course_thumb,cdr.dir_name,cdr.price
                          from course_dir cdr"; 
                          $query = $this->db->query($sql); 
                     
                  foreach($query->result() as $row){  
					
				echo "
						<div class='single-popular-carusel col-lg-3 col-md-6'>
							<div class='thumb-wrap relative'>
								<div class='thumb relative'>
									<div class='overlay overlay-bg'></div>	
									<img class='img-fluid' src=".$row->course_thumb." alt=''>
								</div>
								<div class='meta d-flex justify-content-between'>
									<p><span class='lnr lnr-users'></span> 355 
									<span class='lnr lnr-bubble'></span>35</p>
									<h4>".$row->price."PKR</h4>
								</div>									
							</div>
							<div class='details'>
								<a href='details/".$row->id."'>
									<h4>
										".$row->dir_name."
									</h4>
								</a>
								
							</div>
						</div>";
					}
                       ?>						
						
					
														
						<a href="#" class="primary-btn text-uppercase mx-auto">Load More Courses</a>													
					</div>
				</div>	
			</section>
			<!-- End popular-courses Area -->			

			<!-- Start search-course Area -->
			<section class="search-course-area relative">
				<div class="overlay overlay-bg"></div>
				<div class="container">
					<div class="row justify-content-between align-items-center">
						<div class="col-lg-6 col-md-6 search-course-left">
							<h1 class="text-white">
								Get reasonable prices <br>
								for the courses!
							</h1>
							<p>
								inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct standards especially in the workplace. That’s why it’s crucial that, as women, our behavior on the job is beyond reproach.
							</p>
							<div class="row details-content">
								<div class="col single-detials">
									<span class="lnr lnr-graduation-hat"></span>
									<a href="#"><h4>Expert Instructors</h4></a>		
									<p>
										Usage of the Internet is becoming more common due to rapid advancement of technology and power.
									</p>						
								</div>
								<div class="col single-detials">
									<span class="lnr lnr-license"></span>
									<a href="#"><h4>Certification</h4></a>		
									<p>
										Usage of the Internet is becoming more common due to rapid advancement of technology and power.
									</p>						
								</div>								
							</div>
						</div>
					
					</div>
				</div>	
			</section>
			<!-- End search-course Area -->			

			
							    			

	<!--Footer Here-->
	<?php include("footer.php"); ?>