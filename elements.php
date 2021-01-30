<?php

require_once 'controllers/authController.php';

?>


<!DOCTYPE html>
<html lang="en">
<head>
<title>Elements</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Health medical template project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="styles/elements.css">
<link rel="stylesheet" type="text/css" href="styles/elements_responsive.css">
</head>
<body>

<div class="super_container">

	<!-- Menu -->

	<div class="menu trans_500">
		<div class="menu_content d-flex flex-column align-items-center justify-content-center text-center">
			<div class="menu_close_container"><div class="menu_close"></div></div>
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
				<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-whatsapp" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
			</ul>
		</div>
	</div>

	<!-- Home -->

	<div class="home">
		<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="images/elements.jpg" data-speed="0.8"></div>

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
												<li><a href="#">Book Appointment</a></li>
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
							<div class="home_title">Elements</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Elements -->

	<div class="elements">
		<div class="container">
			<div class="row">
				<div class="col">

					<!-- Buttons -->
					<div class="buttons">
						<div class="elements_title">Button</div>
						<div class="buttons_content">
							<div class="button button_1 elements_button"><a href="#"><span>send message</span><span>send message</span></a></div>
							<div class="button button_2 elements_button"><a href="#"><span>send message</span><span>send message</span></a></div>
							<div class="button button_3 elements_button"><a href="#"><span>send message</span><span>send message</span></a></div>
						</div>
					</div>

					<!-- Accordions -->
					<div class="accordions">
						<div class="elements_title">Awards and Accreditations</div>
						<div class="accordions_container">

							<div class="accordion_container">
								<div class="accordion d-flex flex-row align-items-center active"><div>IHF Excellence Award for Corporate Social Responsibility.</div></div>
								<div class="accordion_panel">
									<div>
										<p>e-Clinic Portal was selected as the Silver Winner of the IHF/Bionexo Award 2018 for Corporate Social Responsibility.</p>
									</div>
								</div>
							</div>

							<div class="accordion_container">
								<div class="accordion d-flex flex-row align-items-center"><div>e-Clinic Portal Wins Express Healthcare Excellence Award 2018</div></div>
								<div class="accordion_panel">
									<div>
										<p>Recipient of the Express Healthcare Excellence Award 2018 in the Best CSR Initiative category.</p>
									</div>
								</div>
							</div>

							<div class="accordion_container">
								<div class="accordion d-flex flex-row align-items-center"><div>CSR Impact Award 2018</div></div>
								<div class="accordion_panel">
									<div>
										<p>Recipient of the CSR health impact award 2018 in “Swasth Bharath Initiative category”</p>
									</div>
								</div>
							</div>

						</div>
					</div>

					<!-- Tabs -->

					<div class="elements_tabs">
						<div class="elements_title">Tabs</div>
						<div class="tabs_content">
							<div class="row">
								<div class="col-lg-5">

									<!-- Tabs -->
									<div class="tabs d-flex flex-row align-items-center justify-content-start flex-wrap">
										<div class="tab active">
											<div class="tab_title">Discuss</div>
											<div class="tab_text">A Clinic is a health care center where you receive routine preventative care when you are healthy or visit your Doctor/Primary Care Provider when you are sick.</div>
										</div>
										<div class="tab">
											<div class="tab_title">Create</div>
											<div class="tab_text">Awareness and give a goal to live.</div>
										</div>
										<div class="tab">
											<div class="tab_title">Brainstorm</div>
											<div class="tab_text">BrainStorm Cell Therapeutics, a leading developer of adult stem cell technologies for neurodegenerative diseases.</div>
										</div>
										<div class="tab">
											<div class="tab_title">The Project</div>
											<div class="tab_text">A Study on the operational pathway and utilization of Hospital Information System (HIS) in e-Clinic super speciality portal in Bhubaneswar using the Six Sigma Methodology.</div>
										</div>
									</div>
								</div>
								<div class="col-lg-7">

									<!-- Panels -->
									<div class="tab_panels">

										<!-- Panel -->
										<div class="tab_panel active">
											<div class="tab_panel_content">
												<div class="tab_list">
													<ul>
														<li>
															<div class="tab_list_title">Cardiology</div>
															<div class="tab_list_text"><p>Cardiology is the study and treatment of disorders of the heart and the blood vessels.</p></div>
														</li>
														<li>
															<div class="tab_list_title">Gastroenterology</div>
															<div class="tab_list_text"><p>Gastroenterology is the study of the normal function and diseases of the esophagus, stomach, etc.</p></div>
														</li>
														<li>
															<div class="tab_list_title">Medical Lab</div>
															<div class="tab_list_text"><p>Laboratory science is a critical healthcare field that impacts the health of every individual.</p></div>
														</li>
													</ul>
												</div>
											</div>
										</div>

										<!-- Panel -->
										<div class="tab_panel">
											<div class="tab_panel_content">
												<div class="tab_list">
													<ul>
														<li>
															<div class="tab_list_title">Approach to Health Care</div>
															<div class="tab_list_text"><p>We care for the whole person, see the complexity of each person’s life, and believe that addressing a broad range of human needs is the best way to improve a person’s health.</p></div>
														</li>
														<li>
															<div class="tab_list_title">Our Relationship with the Community</div>
															<div class="tab_list_text"><p>We have a commitment to serving the community and providing open access to Grace Health for all community members.</p></div>
														</li>
														<li>
															<div class="tab_list_title">Our Work Environment</div>
															<div class="tab_list_text"><p>We each are dedicated to Grace Health, to our patients, and to the community.</p></div>
														</li>
													</ul>
												</div>
											</div>
										</div>

										<!-- Panel -->
										<div class="tab_panel">
											<div class="tab_panel_content">
												<div class="tab_list">
													<ul>
														<li>
															<div class="tab_list_title">Cardiology</div>
															<div class="tab_list_text"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec lorem maximus malesuad.</p></div>
														</li>
														<li>
															<div class="tab_list_title">Gastroenterology</div>
															<div class="tab_list_text"><p>Donec malesuada lorem maximus mauris scele risque, at rutrum nulla dictum.</p></div>
														</li>
														<li>
															<div class="tab_list_title">Medical Lab</div>
															<div class="tab_list_text"><p>Lorem maximus mauris scelerisque, at rutrum nulla dictum. Ut ac ligula sapien. Suspendisse cursus.</p></div>
														</li>
													</ul>
												</div>
											</div>
										</div>

										<!-- Panel -->
										<div class="tab_panel">
											<div class="tab_panel_content">
												<div class="tab_list">
													<ul>
														<li>
															<div class="tab_list_title">Cardiology</div>
															<div class="tab_list_text"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec lorem maximus malesuad.</p></div>
														</li>
														<li>
															<div class="tab_list_title">Gastroenterology</div>
															<div class="tab_list_text"><p>Donec malesuada lorem maximus mauris scele risque, at rutrum nulla dictum.</p></div>
														</li>
														<li>
															<div class="tab_list_title">Medical Lab</div>
															<div class="tab_list_text"><p>Lorem maximus mauris scelerisque, at rutrum nulla dictum. Ut ac ligula sapien. Suspendisse cursus.</p></div>
														</li>
													</ul>
												</div>
											</div>
										</div>

									</div>
								</div>
							</div>
						</div>

					</div>

					<!-- Loaders -->
					<div class="loaders">
						<div class="elements_title">Loaders</div>

						<!-- Loaders -->
						<div class="row loaders_container">
							<div class="col-xl-2 col-lg-4 col-md-6 loader_col">
								<!-- Loader -->
								<div class="loader" data-perc="0.85">
									<div class="loader_content">
										<div class="loader_title">Professionals</div>
									</div>
								</div>
							</div>
							<div class="col-xl-2 col-lg-4 col-md-6 loader_col">
								<!-- Loader -->
								<div class="loader" data-perc="0.90">
									<div class="loader_content">
										<div class="loader_title">Success</div>
									</div>
								</div>
							</div>
							<div class="col-xl-2 col-lg-4 col-md-6 loader_col">
								<!-- Loader -->
								<div class="loader" data-perc="0.55">
									<div class="loader_content">
										<div class="loader_title">Doctors</div>
									</div>
								</div>
							</div>
							<div class="col-xl-2 col-lg-4 col-md-6 loader_col">
								<!-- Loader -->
								<div class="loader" data-perc="0.63">
									<div class="loader_content">
										<div class="loader_title">Patients</div>
									</div>
								</div>
							</div>
							<div class="col-xl-2 col-lg-4 col-md-6 loader_col">
								<!-- Loader -->
								<div class="loader" data-perc="0.85">
									<div class="loader_content">
										<div class="loader_title">Love</div>
									</div>
								</div>
							</div>
							<div class="col-xl-2 col-lg-4 col-md-6 loader_col">
								<!-- Loader -->
								<div class="loader" data-perc="0.90">
									<div class="loader_content">
										<div class="loader_title">Success</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<!-- Milestones -->
					<div class="milestones">
						<div class="elements_title">Milestones</div>
						<div class="milestones_content">
							<div class="row">

								<!-- Milestone -->
								<div class="col-lg-3 milestone_col">
									<div class="milestone d-flex flex-row align-items-center justify-content-start">
										<div class="milestone_icon d-flex flex-column align-items-center justify-content-center"><img src="images/icon_7.svg" alt=""></div>
										<div class="milestone_content">
											<div class="milestone_counter" data-end-value="365">0</div>
											<div class="milestone_text">Days a year</div>
										</div>
									</div>
								</div>

								<!-- Milestone -->
								<div class="col-lg-3 milestone_col">
									<div class="milestone d-flex flex-row align-items-center justify-content-start">
										<div class="milestone_icon d-flex flex-column align-items-center justify-content-center"><img src="images/icon_6.svg" alt=""></div>
										<div class="milestone_content">
											<div class="milestone_counter" data-end-value="25" data-sign-after="k">0</div>
											<div class="milestone_text">Patients a year</div>
										</div>
									</div>
								</div>

								<!-- Milestone -->
								<div class="col-lg-3 milestone_col">
									<div class="milestone d-flex flex-row align-items-center justify-content-start">
										<div class="milestone_icon d-flex flex-column align-items-center justify-content-center"><img src="images/icon_8.svg" alt=""></div>
										<div class="milestone_content">
											<div class="milestone_counter" data-end-value="125">0</div>
											<div class="milestone_text">Amazing Doctors</div>
										</div>

									</div>
								</div>

								<!-- Milestone -->
								<div class="col-lg-3 milestone_col">
									<div class="milestone d-flex flex-row align-items-center justify-content-start">
										<div class="milestone_icon d-flex flex-column align-items-center justify-content-center"><img src="images/icon_9.svg" alt=""></div>
										<div class="milestone_content">
											<div class="milestone_counter" data-end-value="12" data-sign-after="k">0</div>
											<div class="milestone_text">Lab Results</div>
										</div>
									</div>
								</div>

							</div>
						</div>
					</div>

					<!-- Icon Boxes -->

					<div class="icon_boxes">
						<div class="elements_title">Our Services</div>
						<div class="row icon_boxes_row">

							<!-- Icon Box -->
							<div class="col-lg-4 icon_box_col">
								<div class="icon_box">
									<div class="icon_box_title_container d-flex flex-row align-items-center justify-content-start">
										<div class="icon_box_icon"><img src="images/icon_1.svg" alt=""></div>
										<div class="icon_box_title">Cardiology</div>
									</div>
									<div class="icon_box_text">Cardiology is the study and treatment of disorders of the heart and the blood vessels.</div>
								</div>
							</div>

							<!-- Icon Box -->
							<div class="col-lg-4 icon_box_col">
								<div class="icon_box">
									<div class="icon_box_title_container d-flex flex-row align-items-center justify-content-start">
										<div class="icon_box_icon"><img src="images/icon_2.svg" alt=""></div>
										<div class="icon_box_title">Gastroenterology</div>
									</div>
									<div class="icon_box_text">Gastroenterology is the study of the normal function and diseases of the esophagus, stomach, small intestine, colon and rectum, pancreas, gallbladder, bile ducts and liver.</div>
								</div>
							</div>

							<!-- Icon Box -->
							<div class="col-lg-4 icon_box_col">
								<div class="icon_box">
									<div class="icon_box_title_container d-flex flex-row align-items-center justify-content-start">
										<div class="icon_box_icon"><img src="images/icon_3.svg" alt=""></div>
										<div class="icon_box_title">Medical Lab</div>
									</div>
									<div class="icon_box_text">Laboratory science is a critical healthcare field that impacts the health of every individual.</div>
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
<script src="plugins/greensock/TweenMax.min.js"></script>
<script src="plugins/greensock/TimelineMax.min.js"></script>
<script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="plugins/greensock/animation.gsap.min.js"></script>
<script src="plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/progressbar/progressbar.min.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="js/elements.js"></script>
</body>
</html>
