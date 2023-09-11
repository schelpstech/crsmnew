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

						</div><!-- section-tagline -->
						<h1 class="section-title">School Directory</h1>
						<p> It serves as a valuable resource for users, allowing them to easily access school
							contact details, other relevant information. </p>
					</div><!-- contact-box -->
				</div><!-- col-lg-4 -->
				<div class="col-lg-8">
					<form action="assets/inc/sendemail.php" class="contact-form  contact-form-validated" method="post">
						<div class="row row-gutter-10">
							<div class="col-12 col-lg-6">
								<label>Select Country</label>
								<select type="text" class="input-text" id="country_type"
									onchange="select_region_type();">
									<option value="">select</option>
									<?php
									$option = $model->select_all('country_tbl');
									foreach ($option as $data) {
										echo '<option value="' . $data['country_id'] . '">' . $data['country'] . '</option>';
									}
									?>
								</select>
							</div> <!--col-12 col-lg-6 -->
							<div class="col-12 col-lg-6">
								<label>Select Region</label>
								<select type="text" class="input-text" id="region_type" onchange="select_state_type();">
									<option value="">select</option>
								</select>
							</div> <!--col-12 col-lg-6 -->
							<div class="col-12 col-lg-6">
								<label>Select State</label>
								<select type="text" class="input-text" placeholder="State" id="state_type" onchange="select_lga_type();"
									aria-required="true">
								</select>
							</div> <!--col-12 col-lg-6 -->
							<div class="col-12 col-lg-6">
								<label>Select LGA</label>
								<select type="text" class="input-text" placeholder="State"  name="lga_type" id="lga_type"
									aria-required="true">
								</select>
							</div> <!--col-12 col-lg-6 -->
							<div class="col-12 col-lg-6">
								<label>Select School type</label>
								<select type="text" class="input-text" placeholder="State"  name="school_type" id="school_type"
									aria-required="true">
								</select>
							</div> <!--col-12 col-lg-6 -->
							<div class="col-12 col-lg-12 offset-4">
								<button class="btn btn-primary">Search School</button>
							</div><!-- col-12 col-lg-12 -->
						</div><!-- row -->
					</form><!-- contact-form -->
				</div><!-- col-lg-8 -->
			</div><!-- row -->
		</div><!-- container -->
	</section><!-- contact-section -->
</div><!--page-wrapper-->

<?php
include "./include/footer.php"
	?>