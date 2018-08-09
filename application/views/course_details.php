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
							<p class="text-white link-nav"><a href="index">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="courses"> Popular Courses</a></p>
						</div>	
					</div>
				</div>
			</section>
			<!-- End banner Area -->	

			<!-- Start course-details Area -->
			<!-- Loading this view with Pass data from details method of Courses Controller -->
			<section class="course-details-area pt-120">
				<div class="container">
					<div class="row">
						<div class="col-lg-8 left-contents">
							<?php 
							  
							echo "<div class='main-image'>

								<img class='img-fluid' src='".$course_thumb."' alt=''>
							</div>";
							?>
							<div class="jq-tab-wrapper" id="horizontalTab">
	                            <div class="jq-tab-menu">
	                                <div class="jq-tab-title active" data-tab="1">Description</div>
	                                <div class="jq-tab-title" data-tab="2">Course Outline</div>
	                                <div class="jq-tab-title" data-tab="3">Comments</div>
	                                <div class="jq-tab-title" data-tab="4">Reviews</div>
	                            </div>
	                            <div class="jq-tab-content-wrapper">
	                                <div class="jq-tab-content active" data-tab="1">
	                                  <?php
                                       echo "<p>".$course_desc."</p>";
	                                  ?>
	                                </div>
	                                
	                                <div class="jq-tab-content" data-tab="2">
										<ul class="course-list">
									<?php 
									
									foreach($course_content as $content){		
										echo "<li class='justify-content-between d-flex'>
												<p>".$content->description."</p>
												";
											}
                                      ?>
										</ul>
	                                </div>

	                                <div class="jq-tab-content comment-wrap" data-tab="3">
						                <div class="comments-area">
						                    <?php 
						                    	if($course_comments['res']==false){
						                    		echo "<span id='no-comment'>No Comments</span>";
						                    	}

					                    		else{
					                    			echo "<h4>".$course_comments['count']." Comments</h4>";
					                    			foreach($course_comments['res'] as $comment){
				                    		?>

						                    <div class="comment-list">
						                        <div class="single-comment justify-content-between d-flex">
						                            <div class="user justify-content-between d-flex">
						                                <div class="thumb">
						                                    <img src="img/blog/c1.jpg" alt="">
						                                </div>
						                                <div class="desc">
						                                    <h5><a href="#">
						                                    	<?php 
						                                    		if($comment['type']==0){
						                                    			echo $comment['sfname']." ".$comment['slname'];
						                                    		}
						                                    		else{
						                                    			echo $comment['tfname']." ".$comment['tlname'];	
						                                    		}
				                                    			?>
						                                    		
					                                    	</a></h5>
						                                    <p class="date"><?php echo $comment['date']; ?></p>
						                                    <p class="comment">
						                                        <?php echo $comment['comment']; ?>
						                                    </p>
						                                </div>
						                            </div>
						                           
						                        </div>
						                    </div>

						                   <?php }} ?>
						                                                                        
						                </div>

						                
						                <div class="comment-form">
						                    <h4>Leave a Comment</h4>

						                    <!--Success Mesge-->
							                <div id="success" class="alert alert-success" style="display: none;">
											  Comment Posted Succesfully.
											</div>

											<!--Failure Mesg-->
											<div id="failure" class="alert alert-danger" style="display: none;">
											  Something Went Wrong !
											</div>

						                    <form>
						                        
						                        <div class="form-group">
						                            <textarea class="form-control mb-10" rows="5" id="des" placeholder="Messege" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Messege'" required=""></textarea>
						                        </div>

				 <input type="hidden" id="u_id" value="<?php echo $user_id ?>">

				 <input type="hidden" id="course_id"   value="<?php echo $course_id; ?>">


		        <input type="hidden" id="u_fname"  value="<?php echo $user_name; ?>">


				   <input type="hidden" id="u_lname" value="<?php echo $user_lname; ?>">


				    <input type="hidden" id="date"  value="<?php echo Date('y-m-d'); ?>">


		            <input type="hidden" id="base_url" value="<?php echo base_url(); ?>">


						    <input type="hidden" id="type"  value="<?php echo $user_type; ?>">

						                        <button type="button" onclick="insertComment()" class="mt-40 text-uppercase genric-btn primary text-center">Post Comment</button> 
						                    </form>
						                        
						                </div>     						                
	                                </div>
	                               <!--Rating Section -->    
	                                <div class="jq-tab-content" data-tab="4">	
	                                	<div class="review-top row pt-40">
	                                		<div class="col-lg-3">
	                                		<?php
	                                		echo "
	                                			<div class='avg-review'>
	                                				Overall <br>
	                                				<span>".$course_vote_overall_dec_rate."</span> <br>
	                                				(".$course_vote_overall_rows.")
	                                			</div>
	                                		</div>
	                                		<div class='col-lg-9'>
	                                			<h4 class='mb-20'>Provide Your Rating</h4>
	                                			<div class='d-flex flex-row reviews'>
	                                				<span>Overall</span>
	                                			";	
	                   				
	                                          echo "<input type='hidden' name='course_id' id='course_id' value=".$course_id.">
	                                          <input type='hidden' name='user_email' id='user_email' value=".$user_email.">";
													?>
													<div class="star mstars">
														<i class="fa fa-star mstar" id="1"></i>
														<i class="fa fa-star mstar" id="2"></i>
														<i class="fa fa-star mstar" id="3"></i>
														<i class="fa fa-star mstar" id="4"></i>
														<i class="fa fa-star mstar" id="5"></i>
													</div>
	                                				<span></span>
	                                			</div>
	                                			
	                                		</div>
	                                	</div>
	                                	<div class="feedeback">
	                                		<h4 class="pb-20">Your Feedback</h4>

	                                		<textarea name="feedback" id="feedback" class="form-control" cols="10" rows="10"></textarea>
	                                        <input type="button" value="Submit" id="feedbackbtn" name="feedbackbtn" class="mt-20 primary-btn text-right text-uppercase"/>
	                                	</div>
						                <div class="comments-area mb-30">
						                    <div class="comment-list">
						                      <?php
						                    	
                                                if($course_feedback['res']==false){
						                    	echo "<h2>No Feedbacks</h2>";}
						                    	else{
						                    		foreach($course_feedback['res'] as $feedback){
						                    		echo"
						                    		<div class='single-comment single-reviews justify-content-between d-flex'>
						                            <div class='user justify-content-between d-flex'>
						                                <div class='thumb'>
						                                    <img src='img/blog/c1.jpg' alt=''>
						                                </div>
						                                <div class='desc'><h5><a href='#'>";
						                                if($feedback['sfname']==null){
						                               echo
						                               $feedback['tfname']." ".$feedback['tlname'];
						                                }
						                                else{
						                               echo
						                               $feedback['sfname']." ".$feedback['slname'];
						                                }
						          $ratedstars='';
						          $stars='';
						       for ($i = 1; $i <= 5; $i++) {
						      for($j=$i; $i<=$feedback['course_vote'];$i++){
						      	$ratedstars .= '<span class="fa fa-star checked" id="' . $j .'"></span>';
						      } 	

                                   $stars .= '<span class="fa fa-star" id="' . $i .'"></span>';
                    }
                                                      echo"
															<div class='star'>
															".$ratedstars."
																".$stars."
																
															</div>";
						                                    
						                                    echo "</a></h5>
						                                    <p class='comment'>
						                                    	".$feedback['feedback']."
						                                    </p>
						                                </div>
						                            </div>

						                        </div>";

						                    	}}
						                    	?>
						                        
						                    </div>  
						                    						                                                                      
						                </div>	                                	
	                                </div>                                
	                            </div>
	                        </div>
						</div>
						<div class="col-lg-4 right-contents">
							<ul>
								<li>
									<a class="justify-content-between d-flex" href="#">
										<p>Teacher’s Name</p> 
										<?php 
										echo "<span class='or'>".$first_name." ".$last_name."</span>"
									?>
									</a>
								</li>
								<li>
									<a class="justify-content-between d-flex" href="#">
										<p>Course Fee </p>
											<?php 
										echo "<span>".$price."PKR</span>"
									?>
									</a>
								</li>
								<li>
									<a class="justify-content-between d-flex" href="#">
										<p>Student Enrolled </p>
										<span>15</span>
									</a>
								</li>
								<li>
									<a class="justify-content-between d-flex" href="#">
										<p>Last Updated </p>
										<span>12/6/2016</span>
									</a>
								</li>
							</ul>

							<?php echo form_open("Payment_Controller/create_invoice/".$course_id); ?>
								<button type="submit" class="primary-btn text-uppercase">Enroll the course</button>
							</form>

						</div>
					</div>
				</div>	
			</section>
			<!-- End course-details Area -->
			

			<!-- Start popular-courses Area 
			<section class="popular-courses-area section-gap courses-page">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-70 col-lg-8">
							<div class="title text-center">
								<h1 class="mb-10">Popular Courses we offer</h1>
								<p>There is a moment in the life of any aspiring.</p>
							</div>
						</div>
					</div>						
					<div class="row">
						<div class="single-popular-carusel col-lg-3 col-md-6">
							<div class="thumb-wrap relative">
								<div class="thumb relative">
									<div class="overlay overlay-bg"></div>	
									<img class="img-fluid" src="img/p1.jpg" alt="">
								</div>
								<div class="meta d-flex justify-content-between">
									<p><span class="lnr lnr-users"></span> 355 <span class="lnr lnr-bubble"></span>35</p>
									<h4>$150</h4>
								</div>									
							</div>
							<div class="details">
								<a href="#">
									<h4>
										Learn Designing
									</h4>
								</a>
								<p>
									When television was young, there was a hugely popular show based on the still popular fictional characte										
								</p>
							</div>
						</div>	
						<div class="single-popular-carusel col-lg-3 col-md-6">
							<div class="thumb-wrap relative">
								<div class="thumb relative">
									<div class="overlay overlay-bg"></div>	
									<img class="img-fluid" src="img/p2.jpg" alt="">
								</div>
								<div class="meta d-flex justify-content-between">
									<p><span class="lnr lnr-users"></span> 355 <span class="lnr lnr-bubble"></span>35</p>
									<h4>$150</h4>
								</div>									
							</div>
							<div class="details">
								<a href="#">
									<h4>
										Learn React js beginners
									</h4>
								</a>
								<p>
									When television was young, there was a hugely popular show based on the still popular fictional characte										
								</p>
							</div>
						</div>	
						<div class="single-popular-carusel col-lg-3 col-md-6">
							<div class="thumb-wrap relative">
								<div class="thumb relative">
									<div class="overlay overlay-bg"></div>	
									<img class="img-fluid" src="img/p3.jpg" alt="">
								</div>
								<div class="meta d-flex justify-content-between">
									<p><span class="lnr lnr-users"></span> 355 <span class="lnr lnr-bubble"></span>35</p>
									<h4>$150</h4>
								</div>									
							</div>
							<div class="details">
								<a href="#">
									<h4>
										Learn Photography
									</h4>
								</a>
								<p>
									When television was young, there was a hugely popular show based on the still popular fictional characte										
								</p>
							</div>
						</div>	
						<div class="single-popular-carusel col-lg-3 col-md-6">
							<div class="thumb-wrap relative">
								<div class="thumb relative">
									<div class="overlay overlay-bg"></div>	
									<img class="img-fluid" src="img/p4.jpg" alt="">
								</div>
								<div class="meta d-flex justify-content-between">
									<p><span class="lnr lnr-users"></span> 355 <span class="lnr lnr-bubble"></span>35</p>
									<h4>$150</h4>
								</div>									
							</div>
							<div class="details">
								<a href="#">
									<h4>
										Learn Surveying
									</h4>
								</a>
								<p>
									When television was young, there was a hugely popular show based on the still popular fictional characte										
								</p>
							</div>
						</div>							
						<a href="#" class="primary-btn text-uppercase mx-auto">Load More Courses</a>													
					</div>
				</div>	
			</section>
			<!-- End popular-courses Area -->					

							    			

		<?php include("footer.php"); ?>
