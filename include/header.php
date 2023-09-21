<?php
if (file_exists('../../model/query.php')) {
    include '../../model/query.php';
} elseif (file_exists('../model/query.php')) {
    include '../model/query.php';
} elseif (file_exists('../../../model/query.php')) {
    include '../../../model/query.php';
} else {
    include './model/query.php';
}
;
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="CRSM establishes, manages, supports and controls all RCCG Nursery, Primary and Secondary schools.">
  <meta name="keywords" content="CRSM, CRSM Schools, RCCG Schools, RCCG, Schools in Nigeria, Schools in Lagos">
  <meta name="author" content="CRSM || Christ Redeemer's School Management Board">
	<title>CRSM || Christ Redeemer's School Management Board</title>
<!-- google font -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&display=swap" rel="stylesheet">
	<!-- plugins css -->
	<link rel="stylesheet" type="text/css" href="assets/vendor/bootstrap/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="assets/vendor/reey-font/stylesheet.css">
	<link rel="stylesheet" type="text/css" href="assets/vendor/font-awesome/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="assets/vendor/animate/animate.min.css">
	<link rel="stylesheet" type="text/css" href="assets/vendor/flaticon/css/flaticon_towngov.css">
	<link rel="stylesheet" type="text/css" href="assets/vendor/owl-carousel/owl.carousel.min.css">
	<link rel="stylesheet" type="text/css" href="assets/vendor/swiper/swiper-bundle.min.css">
	<link rel="stylesheet" href="assets/vendor/youtube-popup/youtube-popup.css">
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<!-- favicons Icons -->
	<link rel="apple-touch-icon" sizes="180x180" href="https://press.crsm.ng/wp-content/uploads/2023/09/crsmlogo-e1695291878191.png">
	<link rel="icon" type="image/png" sizes="32x32" href="https://press.crsm.ng/wp-content/uploads/2023/09/crsmlogo-e1695291878191.png">
	<link rel="icon" type="image/png" sizes="16x16" href="https://press.crsm.ng/wp-content/uploads/2023/09/crsmlogo-e1695291878191.png">
	<link rel="manifest" href="https://press.crsm.ng/wp-content/uploads/2023/09/crsmlogo-e1695291878191.png">
</head>
<body>
<div id="pre-loader">
    <div id="loader-logo"></div><!-- loader-logo -->
    <div id="loader-circle"></div><!-- loader-circle -->
    <div class="loader-section section-left"></div><!-- loader-section -->
    <div class="loader-section section-right"></div><!-- loader-section -->
</div><!-- pre-loader -->
<header class="header">
	<div class="topbar">
		<div class="topbar-inner">
			<div class="topbar-left">
				<div class="topbar-socials">
					<a href="#"><i class="fa-brands fa-twitter"></i></a>
					<a href="#"><i class="fa-brands fa-facebook"></i></a>
					<a href="#"><i class="fa-brands fa-pinterest-p"></i></a>
					<a href="#"><i class="fa-brands fa-instagram"></i></a>
				</div><!--topbar-socials-->
				<div class="topbar-info">
					<ul>
						<li>
							<div class="topbar-icon">
								<i class="fa-solid fa-envelope"></i>
							</div><!-- topbar-icon -->
							<div class="topbar-text">
								<a href="mailto:contactdesk@crsm.ng">contactdesk@crsm.ng</a>
							</div><!-- topbar-text -->
						</li><!-- li -->
						<li>
							<div class="topbar-icon">
								<i class="fa-solid fa-clock"></i>
							</div><!-- topbar-icon -->
							<div class="topbar-text">
								<span>Open Hours: Mon - Fri 8.00 am - 4.00 pm</span>
							</div><!-- topbar-text -->
						</li><!-- li -->
					</ul><!-- ul -->
				</div><!--topbar-info-->
			</div><!-- topbar-left -->
			<div class="topbar-right">
				<ul>
					<li><a href="https://app.crsm.ng">Portal</a></li>
					<li><a href="https://mailapp.crsm.ng">Staff Mail</a></li>
					<li><a href="https://portal.crsm.ng/manager">Admin</a></li>
				</ul><!-- ul -->
			</div><!--topbar-right-->
		</div><!-- topbar-inner -->
	</div><!--topbar-->
	<div class="main-menu sticky-header">
		<div class="main-menu-inner">
			<div class="main-menu-left">
				<div class="main-menu-logo">
					<a href="index.php"><img src="./assets/image/logo/crsmlogo.png" style="width: 200px; height:auto;" alt="img-145" width="140"></a>
				</div><!--main-menu-logo-->
				<div class="navigation">
					<ul class="main-menu-list list-unstyled">
						<li>
							<a href="index.php">Home</a>
						</li>
						<li class="has-dropdown">
							<a href="#">About CRSM</a>
							<ul class="list-unstyled">
								<li><a href="history.php">Brief History</a></li>
								<li><a href="corporate.php">Corporate Profile</a></li>
								<li><a href="chairperson.php">Founder & Proprietor</a></li>
								<li><a href="boardmember.php">Management Board</a></li>
								<li><a href="secretariat.php">CRSM Secretariat</a></li>
							</ul><!-- list-unstyled -->
						</li><!--has-dropdown-->
						<li class="has-dropdown">
							<a href="#">CRSM Schools</a>
							<ul class="list-unstyled">
								<li><a href="curriculum.php">Curriculum</a></li>
								<li><a href="directory.php">Schools Directory</a></li>
							</ul><!-- list-unstyled -->
						</li><!--has-dropdown-->
						<li class="has-dropdown">
							<a href="#">Committees</a>
							<ul class="list-unstyled">
								<li><a href="finance.php">Finance Committee</a></li>
								<li><a href="training.php">Training Committee</a></li>
								<li><a href="evaluation.php">Evaluation Committee</a></li>
							</ul><!-- list-unstyled -->
						</li><!--has-dropdown-->
						<li class="has-dropdown">
							<a href="https://press.crsm.ng/">Media</a>
							<ul class="list-unstyled">
								<li><a href="https://press.crsm.ng/category/crsm-insights">CRSM Blog</a></li>
								<li><a href="https://press.crsm.ng/category/crsm-events">News & Events</a></li>
							</ul><!-- list-unstyled -->
						</li><!--has-dropdown-->
						<li><a href="contact.php">Contact</a>
						</li><!-- li -->
					</ul><!-- main-menu-list -->
				</div><!--navigation-->
			</div><!--main-menu-left-->
			<div class="main-menu-right">
				<div class="mobile-menu-button mobile-nav-toggler">
					<span></span>
					<span></span>
					<span></span>
				</div><!-- mobile-menu-button -->
				
				<div class="main-menu-right-button">
					<a href="contact.html" class="btn btn-primary">Report Issue</a>
				</div><!-- main-menu-right-button -->
			</div><!--main-menu-right-->
		</div><!--main-menu-inner-->
	</div><!--main-menu-->
</header><!--header-->