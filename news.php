<?php

require_once 'controllers/authController.php';

?>


<!DOCTYPE html>
<html lang="en">

<head>
	<title>News</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="Health medical template project">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
	<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
	<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
	<link rel="stylesheet" type="text/css" href="styles/news.css">
	<link rel="stylesheet" type="text/css" href="styles/news_responsive.css">
</head>

<body>

	<div class="super_container">

		<!-- Menu -->

		<div class="menu trans_500">
			<div class="menu_content d-flex flex-column align-items-center justify-content-center text-center">
				<div class="menu_close_container">
					<div class="menu_close"></div>
				</div>
				<form action="#" class="menu_search_form">
					<input type="text" class="menu_search_input" placeholder="Search" required="required">
					<button class="menu_search_button"><i class="fa fa-search" aria-hidden="true"></i></button>
				</form>
				<ul>
					<li class="menu_item"><a href="index.php">Home</a></li>
					<li class="menu_item"><a href="#">About us</a></li>
					<li class="menu_item"><a href="#">Services</a></li>
					<li class="menu_item"><a href="news.php">News</a></li>
					<li class="menu_item"><a href="contact.php">Contact</a></li>
				</ul>
			</div>
			<div class="menu_social">
				<ul>
					<li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
					<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
					<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
					<li><a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
					<li><a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a></li>
					<li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
				</ul>
			</div>
		</div>

		<!-- Home -->

		<div class="home">
			<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="images/news.jpg" data-speed="0.8"></div>

			<!-- Header -->

			<header class="header" id="header">
				<div>
					<div class="header_top">
						<div class="container">
							<div class="row">
								<div class="col">
									<div class="header_top_content d-flex flex-row align-items-center justify-content-start">
										<div class="logo">
											<a href="#"><img src="images/eClinic.png" alt="eClinic Portal" style="width:55px;height:45px;"></img></a>
											<h3>Welcome, <em><?php echo $_SESSION['username']; ?></em></h3>
										</div>
										<div class="header_top_extra d-flex flex-row align-items-center justify-content-start ml-auto">
											<div class="header_top_nav">
												<ul class="d-flex flex-row align-items-center justify-content-start">
													<li><a href="#">Help Desk</a></li>
													<li><a href="#">Emergency Services</a></li>
													<li><a href="#appointment">Book Appointment</a></li>
													<li><a href="index.php?logout=1" class="logout"><span class="fa fa-sign-out"></span> Logout</a></li>
												</ul>
											</div>
											<div class="header_top_phone">
												<i class="fa fa-phone" aria-hidden="true"></i>
												<span>+ 9801083309</span>
											</div>
										</div>
										<div class="hamburger ml-auto"><i class="fa fa-bars" aria-hidden="true"></i></div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="header_nav" id="header_nav_pin">
						<div class="header_nav_inner">
							<div class="header_nav_container">
								<div class="container">
									<div class="row">
										<div class="col">
											<div class="header_nav_content d-flex flex-row align-items-center justify-content-start">
												<nav class="main_nav">
													<ul class="d-flex flex-row align-items-center justify-content-start">
														<li><a href="index.php">Home</a></li>
														<li><a href="about.php">About Us</a></li>
														<li><a href="services.php">Services</a></li>
														<li class="active"><a href="news.php">News</a></li>
														<li><a href="contact.php">Contact</a></li>
													</ul>
												</nav>
												<div class="search_content d-flex flex-row align-items-center justify-content-end ml-auto">
													<form action="#" id="search_container_form" class="search_container_form">
														<input type="text" class="search_container_input" placeholder="Search" required="required">
														<button class="search_container_button"><i class="fa fa-search" aria-hidden="true"></i></button>
													</form>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</header>

			<div class="home_container">
				<div class="container">
					<div class="row">
						<div class="col">
							<div class="home_content">
								<div class="home_title">News</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- News -->

		<div class="news">
			<div class="container">
				<div class="row">

					<!-- News Posts -->
					<div class="col-lg-8">
						<div class="news_posts">

							<!-- News Post -->
							<div class="news_post">
								<div class="news_post_image"><img src="images/news_1.jpg" alt=""></div>
								<div class="news_post_content">
									<div class="news_post_date"><a href="#">

											<script language="javascript">
												var today = new Date();
												document.write(today);
											</script>

										</a></div>
									<div class="news_post_title"><a href="#">10 Tips on how to live a healthy life</a></div>
									<div class="news_post_info">
										<ul class="d-flex flex-row align-items-center justify-content-start">
											<li><a href="#">by Rohit Raj &nbsp&nbsp</a></li>
											<li><a href="#">
													<script language="javascript">
														var today = new Date();
														document.write(today);
													</script>
												</a></li>
										</ul>
									</div>
									<div class="news_post_text">
										<p>"Healthy living" to most people means both physical and mental health are in balance or functioning well together in a person. In many instances, physical and mental health are closely linked, so that a change (good or bad) in
											one directly affects the other. Consequently, some of the tips will include suggestions for emotional and mental "healthy living."</p>
									</div>
									<div class="button news_post_button"><a href="#"><span>read more</span><span>read more</span></a></div>
								</div>
							</div>

							<!-- News Post -->
							<div class="news_post">
								<div class="news_post_image"><img src="images/news_2.jpg" alt=""></div>
								<div class="news_post_content">
									<div class="news_post_date"><a href="#">
											<script language="javascript">
												var today = new Date();
												document.write(today);
											</script>
										</a></div>
									<div class="news_post_title"><a href="#">New lab tests that could save your life</a></div>
									<div class="news_post_info">
										<ul class="d-flex flex-row align-items-center justify-content-start">
											<li><a href="#">by Aayush Satwat &nbsp&nbsp</a></li>
											<li><a href="#">
													<script language="javascript">
														var today = new Date();
														document.write(today);
													</script>
												</a></li>
										</ul>
									</div>
									<div class="news_post_text">
										<p>Laboratory tests check a sample of your blood, urine, or body tissues. A technician or your doctor analyzes the test samples to see if your results fall within the normal range. The tests use a range because what is normal
											differs from person to person.</p>
									</div>
									<div class="button news_post_button"><a href="#"><span>read more</span><span>read more</span></a></div>
								</div>
							</div>

							<!-- News Post -->
							<div class="news_post">
								<div class="news_post_image"><img src="images/news_3.jpg" alt=""></div>
								<div class="news_post_content">
									<div class="news_post_date"><a href="#">
											<script language="javascript">
												var today = new Date();
												document.write(today);
											</script>
										</a></div>
									<div class="news_post_title"><a href="#">Maternity can be a wonderful thing</a></div>
									<div class="news_post_info">
										<ul class="d-flex flex-row align-items-center justify-content-start">
											<li><a href="#">Ananya Patro &nbsp&nbsp</a></li>
											<li><a href="#">
													<script language="javascript">
														var today = new Date();
														document.write(today);
													</script>
												</a></li>
										</ul>
									</div>
									<div class="news_post_text">
										<p>Being on maternity leave is a wonderful thing. You have the opportunity to bond with your baby in a way you never could if you were working.</p>
									</div>
									<div class="button news_post_button"><a href="#"><span>read more</span><span>read more</span></a></div>
								</div>
							</div>

							<div class="pagination">
								<ul class="d-flex flex-row align-items-center justify-content-start">
									<li class="active"><a href="#">01.</a></li>
									<li><a href="#">02.</a></li>
									<li><a href="#">03.</a></li>
								</ul>
							</div>
						</div>
					</div>

					<!-- Sidebar -->
					<div class="col-lg-4">
						<div class="news_sidebar">

							<!-- Search -->
							<div class="sidebar_search">
								<form action="#" id="sidebar_search" class="sidebar_search">
									<input type="text" class="sidebar_search_input" placeholder="Search" required="required">
									<button class="sidebar_search_button"><i class="fa fa-search" aria-hidden="true"></i></button>
								</form>
							</div>

							<!-- Latest News -->
							<div class="sidebar_latest">
								<div class="sidebar_title">Latest News / Events</div>
								<div class="sidebar_latest_container">

									<!-- Latest News Post -->
									<div class="latest d-flex flex-row align-items-start justify-content-start">
										<div>
											<div class="latest_image"><img src="images/latest_1.jpg" alt=""></div>
										</div>
										<div class="latest_content">
											<div class="latest_title"><a href="news.html">List of Holidays during 202</a></div>
											<div class="latest_info">
												<ul class="d-flex flex-row align-items-start justify-content-start">
													<li><a href="#">posted by Aayush Satwat</a></li>
													<li><a href="#">
															<script>
																document.write(new Date().toLocaleDateString());
															</script>
														</a></li>
												</ul>
											</div>
											<div class="latest_comments"><a href="#">2 Comments</a></div>
										</div>
									</div>

									<!-- Latest News Post -->
									<div class="latest d-flex flex-row align-items-start justify-content-start">
										<div>
											<div class="latest_image"><img src="images/latest_2.jpg" alt=""></div>
										</div>
										<div class="latest_content">
											<div class="latest_title"><a href="news.html">A new way to see things</a></div>
											<div class="latest_info">
												<ul class="d-flex flex-row align-items-start justify-content-start">
													<li><a href="#">by Rohit Raj</a></li>
													<li><a href="#">
															<script>
																document.write(new Date().toLocaleDateString());
															</script>
														</a></li>
												</ul>
											</div>
											<div class="latest_comments"><a href="#">5 Comments</a></div>
										</div>
									</div>

									<!-- Latest News Post -->
									<div class="latest d-flex flex-row align-items-start justify-content-start">
										<div>
											<div class="latest_image"><img src="images/latest_3.jpg" alt=""></div>
										</div>
										<div class="latest_content">
											<div class="latest_title"><a href="news.html">Why is Pharma industry so big?</a></div>
											<div class="latest_info">
												<ul class="d-flex flex-row align-items-start justify-content-start">
													<li><a href="#">by Abhishek Menon</a></li>
													<li><a href="#">
															<script>
																document.write(new Date().toLocaleDateString());
															</script>
														</a></li>
												</ul>
											</div>
											<div class="latest_comments"><a href="#">3 Comments</a></div>
										</div>
									</div>

								</div>
							</div>

							<!-- Categories -->
							<div class="sidebar_categories">
								<div class="sidebar_title">Categories</div>
								<div class="categories">
									<ul>
										<li><a href="#">
												<div class="d-flex flex-row align-items-center justify-content-start">
													<div>Medicine</div>
													<div class="ml-auto">(11)</div>
												</div>
											</a></li>
										<li><a href="#">
												<div class="d-flex flex-row align-items-center justify-content-start">
													<div>Pharmacy</div>
													<div class="ml-auto">(23)</div>
												</div>
											</a></li>
										<li><a href="#">
												<div class="d-flex flex-row align-items-center justify-content-start">
													<div>Uncategorized</div>
													<div class="ml-auto">(6)</div>
												</div>
											</a></li>
										<li><a href="#">
												<div class="d-flex flex-row align-items-center justify-content-start">
													<div>Doctors</div>
													<div class="ml-auto">(9)</div>
												</div>
											</a></li>
										<li><a href="#">
												<div class="d-flex flex-row align-items-center justify-content-start">
													<div>Innovations</div>
													<div class="ml-auto">(15)</div>
												</div>
											</a></li>
									</ul>
								</div>
							</div>

							<!-- Appointment -->
							<div id="appointment">
								<div class="info_form_container">
									<div class="info_form_title">Make an Appointment</div>
									<form action="appointment.php" class="info_form" id="info_form" method="POST">
										<select name="department" id="department" class="info_form_dep info_input info_select">
											<option>Choose Department</option>
											<option>Cardiology</option>
											<option>Gastroenterology</option>
											<option>Dental Care</option>
											<option>Surgery</option>
											<option>Neurology</option>
											<option>Physician</option>
										</select>
										<select name="doctor_name" id="doctor_name" class="info_form_doc info_input info_select">
											<option>Choose Doctor</option>
											<option>Dr. Aayush Satwat</option>
											<option>Dr. Rohit Raj</option>
											<option>Dr. Abhishek Menon</option>
											<option>Dr. Ananya Patro</option>
											<option>Dr. Abhinay Tiwari</option>
										</select>
										<input type="text" class="info_input" placeholder="Name" required="required" name="patient_name">
										<input type="text" class="info_input" placeholder="Phone No" name="number">
										<input type="date" class="info_input" placeholder="Date" required="required" name="date">
										<button class="info_form_button">make an appointment</button>
									</form>
								</div>
							</div>


						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Footer -->

		<footer class="footer">
			<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="images/footer.jpg" data-speed="0.8"></div>
			<div class="footer_content">
				<div class="container">
					<div class="row">

						<!-- Footer About -->
						<div class="col-lg-3 footer_col">
							<div class="footer_about">
								<div class="logo">
									<a href="#"><img src="images/eClinic.png" alt="eClinic Portal" style="width:55px;height:45px;"></img></a>
								</div>
								<div class="footer_about_text">Your Care is Our Concern.</div>
								<div class="footer_social">
									<ul class="d-flex flex-row align-items-center justify-content-start">
										<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
										<li><a href="#"><i class="fa fa-whatsapp" aria-hidden="true"></i></a></li>
										<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
										<li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
									</ul>
								</div>
								<div class="copyright">
									Copyright &copy; <script>
										document.write(new Date().getFullYear());
									</script> All rights reserved !

								</div>
							</div>
						</div>

						<!-- Footer Contact -->
						<div class="col-lg-5 footer_col">
							<div class="footer_contact">
								<div class="footer_contact_title">Quick Contact</div>
								<div class="footer_contact_form_container">
									<form action="#" class="footer_contact_form" id="footer_contact_form">
										<div class="d-flex flex-xl-row flex-column align-items-center justify-content-between">
											<input type="text" class="footer_contact_input" placeholder="Name" required="required">
											<input type="email" class="footer_contact_input" placeholder="E-mail" required="required">
										</div>
										<textarea class="footer_contact_input footer_contact_textarea" placeholder="Message" required="required"></textarea>
										<button class="footer_contact_button">send message</button>
									</form>
								</div>
							</div>
						</div>

						<!-- Footer Hours -->
						<div class="col-lg-4 footer_col">
							<div class="footer_hours">
								<div class="footer_hours_title">Opening Hours</div>
								<ul class="hours_list">
									<li class="d-flex flex-row align-items-center justify-content-start">
										<div>Monday – Thursday</div>
										<div class="ml-auto">8.00 – 19.00</div>
									</li>
									<li class="d-flex flex-row align-items-center justify-content-start">
										<div>Friday</div>
										<div class="ml-auto">8.00 - 18.30</div>
									</li>
									<li class="d-flex flex-row align-items-center justify-content-start">
										<div>Saturday</div>
										<div class="ml-auto">9.30 – 17.00</div>
									</li>
									<li class="d-flex flex-row align-items-center justify-content-start">
										<div>Sunday</div>
										<div class="ml-auto">9.30 – 15.00</div>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="footer_bar">
				<div class="container">
					<div class="row">
						<div class="col">
							<div class="footer_bar_content d-flex flex-sm-row flex-column align-items-lg-center align-items-start justify-content-start">
								<nav class="footer_nav">
									<ul class="d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-start">
										<li class="active"><a href="index.html">Home</a></li>
										<li><a href="about.html">About Us</a></li>
										<li><a href="services.html">Services</a></li>
										<li><a href="news.html">News</a></li>
										<li><a href="contact.html">Contact</a></li>
									</ul>
								</nav>
								<div class="footer_links">
									<ul class="d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-start">
										<li><a href="#">Help Desk</a></li>
										<li><a href="#">Emergency Services</a></li>
										<li><a href="#">Appointment</a></li>
									</ul>
								</div>
								<div class="footer_phone ml-lg-auto">
									<i class="fa fa-phone" aria-hidden="true"></i>
									<span>+ 9801083309</span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</footer>
	</div>

	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	<script src="plugins/greensock/TweenMax.min.js"></script>
	<script src="plugins/greensock/TimelineMax.min.js"></script>
	<script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
	<script src="plugins/greensock/animation.gsap.min.js"></script>
	<script src="plugins/greensock/ScrollToPlugin.min.js"></script>
	<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
	<script src="plugins/easing/easing.js"></script>
	<script src="plugins/parallax-js-master/parallax.min.js"></script>
	<script src="js/news.js"></script>
</body>

</html>