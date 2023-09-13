<?php
	include "./include/header.php"
?>
<div class="page-wrapper">
	<section class="contact-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-4">
					<div class="contact-box">
						<div class="section-tagline">
							WRITE A MESSAGE
						</div><!-- section-tagline -->
						<h1 class="section-title">Always Here to Help you</h1>
							<p>There are certain attributes of a profession and one has to catch hold of them in order to efficiently and grow in that business. I share my experience as an interior designer. </p>
					</div><!-- contact-box -->
				</div><!-- col-lg-4 -->
				<div class="col-lg-8">
					<form  action="assets/inc/sendemail.php" class="contact-form  contact-form-validated" method="post" >
						<div class="row row-gutter-10">
							<div class="col-12 col-lg-6">
								<input type="text" id="name"  class="input-text" placeholder="Your name" name="name" aria-required="true">
							</div><!-- col-12 col-lg-6 -->
							<div class="col-12 col-lg-6">
								<input type="email" id="email" class="input-text" placeholder="Email address" name="email" aria-required="true">
							</div><!-- col-12 col-lg-6 -->
							<div class="col-12 col-lg-6">
								<input type="text" id="phone" class="input-text" placeholder="Phone number" name="phone" aria-required="true">
							</div><!-- col-12 col-lg-6 -->
							<div class="col-12 col-lg-6">
								<input type="text" id="subject" class="input-text" placeholder="Subject" name="subject" aria-required="true">
							</div><!-- col-12 col-lg-6 -->
							<div class="col-12 col-lg-12">
								<textarea name="message" placeholder="Write a message" class="input-text" aria-required="true"></textarea>
							</div><!-- col-12 col-lg-12 -->
							<div class="col-12 col-lg-12">
								<button class="btn btn-primary">Send a Message</button>
							</div><!-- col-12 col-lg-12 -->
						</div><!-- row -->
					</form><!-- contact-form -->
				</div><!-- col-lg-8 -->
			</div><!-- row -->
		</div><!-- container -->
	</section><!-- contact-section -->
	<div class="contact-gmap-section">
		<div class="container">
			<div class="responsive-map">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3961.747137106793!2d3.4422028749367612!3d6.800586819881501!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x103bc10c3010d313%3A0x467a04236aefa005!2sCRSM%20SECRETARIAT!5e0!3m2!1sen!2sng!4v1683662188379!5m2!1sen!2sng" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
					<iframe  width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
				</div><!-- responsive-map -->
		</div><!-- container -->
	</div><!-- contact-gmap-section -->
	<div class="cta-four-section">
		<div class="container">
			<div class="cta-four-inner">
				<div class="row row-gutter-y-20 ">
					<div class="col-12 col-lg-6 col-xl-3">
						<div class="cta-four-content">
							<i class="flaticon-help"></i>
							<div class="cta-four-content-box">
								<span>Have Question?</span>
								<p>Free +234 (8800) 6802</p>
							</div><!-- cta-four-content-box -->
						</div><!-- cta-four-content -->
					</div><!-- col-12 col-lg-6 col-xl-3 -->
					<div class="col-12 col-md-6 col-lg-6 col-xl-3">
						<div class="cta-four-content">
							<i class="flaticon-envelope-3"></i>
							<div class="cta-four-content-box">
								<span>Write Email</span>
								<p>contactdesk@crsm.ng</p>
							</div><!-- cta-four-content-box -->
						</div><!-- cta-four-content -->
					</div><!-- col-12 col-md-6 col-lg-6 col-xl-3 -->
					<div class="col-12 col-lg-6 col-xl-4">
						<div class="cta-four-content">
							<i class="flaticon-location-pin"></i>
							<div class="cta-four-content-box">
								<span>Visit Office</span>
								<p>The CRSM Secretariat,<br>
Km 46, The Redemption Camp,<br>
Lagos - Ibadan Express Road.<br>
Ogun state. Nigeria.</p>
							</div><!-- cta-four-content-box -->
						</div><!-- cta-four-content -->
					</div><!-- col-12 col-lg-6 col-xl-4 -->
					<div class="col-12 col-lg-6 col-xl-2">
						<div class="cta-four-content">
							<div class="cta-four-widget-socials">
								<a href="#"><i class="fa-brands fa-twitter"></i></a>
								<a href="#"><i class="fa-brands fa-facebook"></i></a>
								<a href="#"><i class="fa-brands fa-pinterest-p"></i></a>
								<a href="#"><i class="fa-brands fa-instagram"></i></a>
							</div><!-- cta-four-widget-socials -->
						</div><!-- cta-four-content -->
					</div><!-- col-12 col-lg-6 col-xl-2 -->
				</div><!-- row -->
			</div><!-- cta-four-inner -->
		</div><!-- container -->
	</div><!-- cta-four-section -->
</div><!--page-wrapper-->		

<?php
	include "./include/footer.php"
?>