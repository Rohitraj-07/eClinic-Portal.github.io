<?php

require_once 'controllers/authController.php';

// verify the user using token
if (isset($_GET['token'])) {
	$token = $_GET['token'];
	verifyUser($token);
}

// verify the user using token
if (isset($_GET['password-token'])) {
	$passwordToken = $_GET['password-token'];
	resetPassword($passwordToken);
}

if (!isset($_SESSION['id'])) {
	header('location: login.php');
	exit();
}
?>




<!DOCTYPE html>
<html lang="en">

<head>
	<title>e-Clinic Portal</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="e-Clinic project">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
	<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
	<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
	<link rel="stylesheet" type="text/css" href="styles/main_styles.css">
	<link rel="stylesheet" type="text/css" href="styles/responsive.css">
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
			<div class="background_image" style="background-image:url(images/index_hero.jpg)"></div>

			<!-- Header -->

			<header class="header" id="header" style='position:fixed'>
				<div>
					<div class="header_top">
						<div class="container">
							<div class="row">
								<div class="col">
									<div class="header_top_content d-flex flex-row align-items-center justify-content-start">
										<div class="logo">
											<a href="#"><img src="images/eClinic.png" alt="" style="width:55px;height:45px;"></img><span><sup>portal</sup></span></a>
											<b>
												<h3>Welcome, <em><?php echo $_SESSION['username']; ?></em></h3>
											</b>
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
												<span>+91 9801083309</span>
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
														<li class="active"><a href="index.php">Home</a></li>
														<li><a href="about.php">About Us</a></li>
														<li><a href="services.php">Services</a></li>
														<li><a href="news.php">News</a></li>
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
						<div class="col-md-4 offset-md-0 form-div login">

							<?php if (isset($_SESSION['message'])) : ?>
								<div class="alert <?php echo $_SESSION['alert-class']; ?>">
									<?php
									echo $_SESSION['message'];
									unset($_SESSION['message']);
									unset($_SESSION['alert-class']);
									?>
								</div>
							<?php endif; ?>

							<?php if (!$_SESSION['verified']) : ?>
								<div class="alert alert-warning">
									You need to verify your account. Sign in to your email account and click on the verification link we just mailed you at
									<strong><?php echo $_SESSION['email']; ?></strong>
								</div>
							<?php endif; ?>

						</div>
					</div>
				</div>
				<div class="container">
					<div class="row">
						<div class="col">
							<div class="home_content">
								<div class="home_title">We Care for Your Health Every Moment</div>
								<div class="home_text">Your Care is Our Concern !</div>
								<div class="button home_button"><a href="#"><span>read more</span><span>read more</span></a></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Info Boxes -->
		<div id="appointment">
			<div class="info">
				<div class="container">
					<div class="row row-eq-height">

						<!-- Info Box -->
						<div class="col-lg-4 info_box_col">
							<div class="info_box">
								<div class="info_image"><img src="images/info_1.jpg" alt=""></div>
								<div class="info_content">
									<div class="info_title">Free Consultations</div>
									<div class="info_text">Get free phone consultation with one of the nations leading healthcare marketing consultants from Healthcare Success.</div>
									<div class="button info_button"><a href="#"><span>read more</span><span>read more</span></a></div>
								</div>
							</div>
						</div>

						<!-- Info Box -->
						<div class="col-lg-4 info_box_col">
							<div class="info_box">
								<div class="info_image"><img src="images/info_2.jpg" alt=""></div>
								<div class="info_content">
									<div class="info_title">Emergency Care</div>
									<div class="info_text">e-Clinic Portal is a pioneer of modern day emergency medicine and trauma care in India.<br><br></div>
									<div class="button info_button"><a href="#"><span>read more</span><span>read more</span></a></div>
								</div>
							</div>
						</div>

						<!-- Info Form -->

						<div class="col-lg-4 info_box_col">
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

		<!-- CTA -->

		<div class="cta">
			<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="images/cta_1.jpg" data-speed="0.8"></div>
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="cta_container d-flex flex-xl-row flex-column align-items-xl-start align-items-center justify-content-xl-start justify-content-center">
							<div class="cta_content text-xl-left text-center">
								<div class="cta_title">Make an appointment with one of our professional Doctors.</div>
								<div class="cta_subtitle">Let the e-Clinic Portal know of any preferences you have – such as if you would like to see a female doctor</div>
							</div>
							<div class="button cta_button ml-xl-auto"><a href="#"><span>call now</span><span>+9801083309</span></a></div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Services -->

		<div class="services">
			<div class="container">
				<div class="row">
					<div class="col text-center">
						<div class="section_title">Our Services</div>
						<div class="section_subtitle">to choose from</div>
					</div>
				</div>
				<div class="row icon_boxes_row">

					<!-- Icon Box -->
					<div class="col-xl-4 col-lg-6">
						<div class="icon_box">
							<div class="icon_box_title_container d-flex flex-row align-items-center justify-content-start">
								<div class="icon_box_icon"><img src="images/icon_1.svg" alt=""></div>
								<div class="icon_box_title">Cardiology</div>
							</div>
							<div class="icon_box_text">Cardiology is the study and treatment of disorders of the heart and the blood vessels.</div>
						</div>
					</div>

					<!-- Icon Box -->
					<div class="col-xl-4 col-lg-6">
						<div class="icon_box">
							<div class="icon_box_title_container d-flex flex-row align-items-center justify-content-start">
								<div class="icon_box_icon"><img src="images/icon_2.svg" alt=""></div>
								<div class="icon_box_title">Gastroenterology</div>
							</div>
							<div class="icon_box_text">Gastroenterology is the study of the normal function and diseases of the esophagus, stomach, small intestine, colon and rectum, pancreas, gallbladder, bile ducts and liver.</div>
						</div>
					</div>

					<!-- Icon Box -->
					<div class="col-xl-4 col-lg-6">
						<div class="icon_box">
							<div class="icon_box_title_container d-flex flex-row align-items-center justify-content-start">
								<div class="icon_box_icon"><img src="images/icon_3.svg" alt=""></div>
								<div class="icon_box_title">Medical Lab</div>
							</div>
							<div class="icon_box_text">Laboratory science is a critical healthcare field that impacts the health of every individual.</div>
						</div>
					</div>

					<!-- Icon Box -->
					<div class="col-xl-4 col-lg-6">
						<div class="icon_box">
							<div class="icon_box_title_container d-flex flex-row align-items-center justify-content-start">
								<div class="icon_box_icon"><img src="images/icon_4.svg" alt=""></div>
								<div class="icon_box_title">Dental Care</div>
							</div>
							<div class="icon_box_text">Dental care is the maintenance of healthy teeth and may refer to: Oral hygiene, the practice of keeping the mouth and teeth clean in order to prevent dental disorders.</div>
						</div>
					</div>

					<!-- Icon Box -->
					<div class="col-xl-4 col-lg-6">
						<div class="icon_box">
							<div class="icon_box_title_container d-flex flex-row align-items-center justify-content-start">
								<div class="icon_box_icon"><img src="images/icon_5.svg" alt=""></div>
								<div class="icon_box_title">Surgery</div>
							</div>
							<div class="icon_box_text">Surgery is a medical specialty that uses operative manual and instrumental techniques on a person to investigate or treat a pathological condition such as a disease or injury.</div>
						</div>
					</div>

					<!-- Icon Box -->
					<div class="col-xl-4 col-lg-6">
						<div class="icon_box">
							<div class="icon_box_title_container d-flex flex-row align-items-center justify-content-start">
								<div class="icon_box_icon"><img src="images/icon_6.svg" alt=""></div>
								<div class="icon_box_title">Neurology</div>
							</div>
							<div class="icon_box_text">Neurology is the branch of medicine that deals with disorders of the nervous system, which include the brain, blood vessels, muscles and nerves.</div>
						</div>
					</div>

				</div>
				<div class="row">
					<div class="col">
						<div class="button services_button ml-auto mr-auto"><a href="#"><span>read more</span><span>read more</span></a></div>
					</div>
				</div>
			</div>
		</div>

		<!-- Departments -->

		<div class="departments">
			<div class="container">
				<div class="row">
					<div class="col text-center">
						<div class="section_title">Our Departments</div>
						<div class="section_subtitle">to choose from</div>
					</div>
				</div>
				<div class="row dept_row">
					<div class="col">
						<div class="dept_slider_container_outer">
							<div class="dept_slider_container">

								<!-- Slider -->
								<div class="owl-carousel owl-theme dept_slider">

									<!-- Slide -->
									<div class="owl-item dept_item">
										<div class="dept_image"><img src="images/dept_1.jpg" alt=""></div>
										<div class="dept_content">
											<div class="dept_title">Neonatology</div>
											<div class="dept_link"><a href="#">Read More</a></div>
										</div>
									</div>

									<!-- Slide -->
									<div class="owl-item dept_item">
										<div class="dept_image"><img src="images/dept_2.jpg" alt=""></div>
										<div class="dept_content">
											<div class="dept_title">Dentistry</div>
											<div class="dept_link"><a href="#">Read More</a></div>
										</div>
									</div>

									<!-- Slide -->
									<div class="owl-item dept_item">
										<div class="dept_image"><img src="images/dept_3.jpg" alt=""></div>
										<div class="dept_content">
											<div class="dept_title">Orthopedics</div>
											<div class="dept_link"><a href="#">Read More</a></div>
										</div>
									</div>

									<!-- Slide -->
									<div class="owl-item dept_item">
										<div class="dept_image"><img src="images/dept_4.jpg" alt=""></div>
										<div class="dept_content">
											<div class="dept_title">Laboratory</div>
											<div class="dept_link"><a href="#">Read More</a></div>
										</div>
									</div>

								</div>

							</div>

							<!-- Dept Slider Nav -->
							<div class="dept_slider_nav"><i class="fa fa-chevron-right" aria-hidden="true"></i></div>

						</div>

					</div>
				</div>
			</div>
		</div>

		<!-- FAQ & News -->

		<div class="stuff">
			<div class="container">
				<div class="row">

					<!-- FAQ -->
					<div class="col-lg-7">
						<div class="faq">
							<div class="faq_title">Faq & Stuff</div>
							<div class="faq_subtitle">read all about it</div>
							<div class="elements_accordions">
								<div class="accordions">

									<div class="accordion_container">
										<div class="accordion d-flex flex-row align-items-center active">
											<div>Why e-Clinic Portal?</div>
										</div>
										<div class="accordion_panel">
											<div>
												<p>
													<li>Economic for one and all</li>
													<li>Well connected to major places of Bhubaneswar & Mumbai</li>
													<li>Lesser than five minutes of drive from the international airport</li>
													<li>Availability of Continental food and Indian food with & without spices</li>
													<li>Well-versed with foreign culture</li>
													<li>Prayer rooms</li>
													<li>Patient-friendly staff</li>
													<li>International standards and quality healthcare</li>
												</p>
											</div>
										</div>
									</div>

									<div class="accordion_container">
										<div class="accordion d-flex flex-row align-items-center">
											<div>How To Get In Touch With the e-Clinic Portal?</div>
										</div>
										<div class="accordion_panel">
											<div>
												<p>
													<li>Website: www.sevenhillshospital.com</li>
													<li>Email: response@eClinicPortal.com</li>
													<li>24 hours online chat</li>
													<li>Telephone: +91-9801083309 (Bhubaneswar) and +91-8709894898 (Haryana)</li>
													<li>Direct walk-in</li>
													<li>Coordinator details</li>
													<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>&nbsp&nbsp&nbsp&nbsp<a href="#"><i class="fa fa-whatsapp" aria-hidden="true"></i></a>&nbsp&nbsp&nbsp&nbsp <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>&nbsp&nbsp&nbsp&nbsp <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>


												</p>
											</div>
										</div>
									</div>

									<div class="accordion_container">
										<div class="accordion d-flex flex-row align-items-center">
											<div>I Lost My Medical Records. From Where Can I Get Them Back?</div>
										</div>
										<div class="accordion_panel">
											<div>
												<p>Your medical records are always preserved with e-Clinic Portal record system. We will email the soft copies to you as and when you require them.</p>
											</div>
										</div>
									</div>

								</div>
							</div>
						</div>
					</div>

					<!-- Latest News -->
					<div class="col-lg-5">
						<div class="news">
							<div class="news_title">Latest News</div>
							<div class="news_subtitle">read all about it</div>
							<div class="news_container">

								<!-- Latest News Post -->
								<div class="latest d-flex flex-row align-items-start justify-content-start">
									<div>
										<div class="latest_image"><img src="images/latest_1.jpg" alt=""></div>
									</div>
									<div class="latest_content">
										<div class="latest_title"><a href="news.html">List of Holidays during 2020</a></div>
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
	<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
	<script src="plugins/easing/easing.js"></script>
	<script src="plugins/parallax-js-master/parallax.min.js"></script>
	<script src="https://www.gstatic.com/dialogflow-console/fast/messenger/bootstrap.js?v=1"></script>
	<df-messenger intent="WELCOME" chat-title="e-Clinic" agent-id="b8953f0f-8c30-4ea7-82d3-1adf750076fd" language-code="en"></df-messenger>
</body>

</html>