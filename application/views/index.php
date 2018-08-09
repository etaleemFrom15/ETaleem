
<?php include("header.php"); ?>

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

	<!-- Start Find Your Tutor Area -->
	<section>
		<div id="find" class="container-fluid">

			<div class="row">
				<div class="col-md-3"></div>
				<div class="col-md-6">

					<h1 id="heading">Find your tutor today...it's simple!</h1>
				</div>
				<div class="col-md-3"></div>
			</div>

			<div class="row">
				<div class="col-md-2"></div>
				<div id="picture1" class="col-md-3 ">
					<img src="img/peoples.jpg" />
				</div>
				<div id="parapgraph1" class="col-md-6 col-md-offset-1">
					<h3 id="inital">It all begin that inital
						<span style="color:silver">search.</span>
						<br>Browse thousands of student-rated tutors.
						<br>
					</h3>
					<br>
					<p id="subject">Enter your subject,to view profiles of suitable
						<br>tutors in your area.Compare tutors,read learner reviews and
						<br>message them for free,to make the right choice with confidence.</p>
				</div>
				<div class="col-md-1"></div>
			</div>

			<div class="row">
				<div class="col-md-3"></div>
				<div class="col-md-4">
					<img src="img/line.jpg" alt="">
				</div>
				<div class="col-md-5"></div>
			</div>


			<div class="row">
				<div class="col-md-1"></div>
				<div id="once" class="col-md-5">
					<h3>Once you've found your
						<span style="color:silver; ">
							<b>tutor</b>
						</span>,simple
						<Br> request a lesson.</h3>
					<br>
					<p id="subject" style="color:darkcyan">Once you have agreed a time and location with your tutor,they
						<br>will book in your lesson for you.you will be asked to confirm your
						<br>booking but won't pay a penny until each session</p>
				</div>
				<div class="col-md-4">
					<img src="img/tutors.JPG">
				</div>
				<div class="col-md-2"></div>
			</div>

			<div id="line2" class="row">
				<div class="col-md-3"></div>
				<div class="col-md-4">
					<img src="img/line2.jpg" alt="">
				</div>
				<div class="col-md-5"></div>
			</div>

			<div class="row">
				<div class="col-md-2"></div>
				<div class="col-md-4">
					<img src="img/interconnection.JPG" />
				</div>
				<div id="meet" class="col-md-5">
					<h3>
						<b>Meet your new tutor and start learning!</b>
					</h3>
					<Br>
					<p id="subject">Your tutor will provide all of the resouces needed and aim to
						<Br> deliver enjoyable,informative sessions.payment is cashless and
						<br> convienet,so you can focus on learning.</p>
				</div>
				<div class="col-md-1"></div>
			</div>

			<div id="line" class="row">
				<div class="col-md-3"></div>
				<div class="col-md-4">
					<img src="img/line.jpg" alt="">
				</div>
				<div class="col-md-5"></div>
			</div>

			<div class="row">
				<div class="col-md-1"></div>
				<div id="simply" class="col-md-5">
					<b>
						<h3>Simply
							<span style="color: silver"> Pay as you learn</span>,with no up-front
							<br> or hidden charges.</b>
					</h3>
					<Br>
					<p id="subject">
						Payment is cashless and convienet,so you can focus on
						<br> learning and if you are not completely happy with your first
						<Br> lessoon,we'll find you a new tutor for free, no question asked.
					</p>
				</div>
				<!-- <div class="col-md-1"></div> -->
				<div class="col-md-4">
					<img src="img/interfaces.JPG" alt="">
				</div>
				<div class="col-md-1"></div>
			</div>
		</div>
	</section>

	<!-- End Find Your Tutor Area -->

	<!-- Start Learn Online  Area -->
	<section>
		<div id="container2" class="container-fluid">
			<div id="learn" class="row">
				<div class="col-md-4 "></div>
				<div id="online" class="col-md-5">
					<h1 style="font-size: 40px;">
						<b>Learn online with tutorful!
							<b>
					</h1>
				</div>
				<div class="col-md-3"></div>
			</div>

			<div id="learn" class="row">
				<div class="col-md-1"></div>
				<div class="col-md-3">
					<img id="suitsPic" src="img/suit.jpg" alt="" />
					<h3 id="suits" style="color:rgb(87, 86, 86)">
						<b>1-to-1 learning</b>
					</h3>
					<Br>
					<p>See and speak to your tutor live
						<Br> through your webcam, whereever you
						<br> both are.</p>

					<br>
					<br>

					<img id="whiteboard" src="img/whiteboard.JPG" alt="" />
					<h3 id="whiteboard" style="color:rgb(87, 86, 86)" <b>whiteboard</b>
					</h3>
					<br>
					<p>
						Use the intuitive whiteboard to work
						<br> together by writting,typing or drawing
						<Br> diagrams
					</p>
				</div>
				<div class="col-md-5">
					<img src="img/laptop.JPG" alt="">
				</div>
				<div class="col-md-3">
					<img id="document" src="img/document.JPG" alt="" />
					<h3 id="document" style="color:rgb(87, 86, 86)">
						<b>Shared Documents</b>
					</h3>
					<Br>
					<p>Share past papers,essays or
						<Br> documents with your tutor.</p>

					<br>
					<br>
					<img id="screen" src="img/screen.JPG" alt="" />
					<h3 id="screen" style="color:rgb(87, 86, 86);">
						<b>Screen sharing</b>
					</h3>
					<Br>
					<p>Share your screen with tutor and
						<Br> show them your work in real-time.</p>
				</div>
				<!-- <div class="col-md-1"></div> -->
			</div>

			<div id="more" class="row">
				<div class="col-md-5"></div>
				<div class="col-md-2">

					<button class="btn btn-danger" style="width: 150px;">
						<b id="out">Find Out More</b>
					</button>
				</div>
				<div class="col-md-5"></div>
			</div>


			<div id="parents" class="row">
				<div class="col-md-4"></div>
				<div class="col-md-4">
					<h2 style="color: black">
						<B>Parents and tutors love us</B>
					</h2>
				</div>
				<div class="col-md-4"></div>
			</div>


			<div class="row">
				<div class="col-md-3"></div>
				<div class="col-md-6">
					<p>But dont't take our word for it,
						<a href="">see what students and tutors who use our site have said</a>
					</p>
				</div>
				<div class="col-md-3"></div>
			</div>

		</div>
	</section>
	<!-- End Learn Online Area -->



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



	<!--Footer Here-->
	<?php include("footer.php"); ?>

	
