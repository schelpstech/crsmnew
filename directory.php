<?php
include "./include/header.php";
?>
<div class="page-wrapper">
				<?php
				$count = 1;
				if (!empty($related_schools)) {
					echo'	<section class="blog-section">
					<div class="container">
						<div class="blog-box">
							<div class="section-title-box text-center">
								<div class="section-tagline">CRSM SCHOOLS</div>
								<h2 class="section-title">Last School Search Results</h2>
							</div><!-- section-title-box -->
						</div><!--blog-box-->
						<div class="row row-gutter-y-155">';
					foreach ($related_schools as $data) {

				?>
						<div class="col-lg-4">
							<div class="blog-card">
								<div class="blog-card-image">
									<img src="http://portal.crsm.ng<?php echo substr($data["schLogo"],2) ?? ""; ?>" class="img-fluid" alt="<?php echo $data["sch_code"] ?? ""; ?>" 
									style="height: 50%; width:50%;  display: block; margin-left: auto;margin-right: auto; "  >
								
								</div><!-- blog-card-image -->
								<div class="blog-card-date">
									<a href="#"><?php echo $count++; ?></a>
								</div><!-- blog-card-date -->
								<div class="blog-card-content">
									<div class="blog-card-meta">
										<span class="author">
											<a href="#"><?php echo $data["classes"] ?? ""; ?></a>
										</span><!-- author -->
									</div><!-- blog-card-meta -->
									<h4><a href=""><?php echo $data["sch_name"] ?? ""; ?></a></h4>
									<hr>
                                    <div class="row">
                                        <div  class="col-12 col-lg-4">
                                            <p>Address: </p>
                                        </div>
                                        <div  class="col-12 col-lg-8">
                                            <small><?php echo ucfirst($data["address"]) ?? ""; ?></small>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div  class="col-12 col-lg-4">
                                            <p>Location: </p>
                                        </div>
                                        <div  class="col-12 col-lg-8">
                                            <small><?php echo ucfirst($data["lga"].", ".$data["state"].", ".$data["country"]) ?? ""; ?></small>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div  class="col-12 col-lg-4">
                                            <p>Phone: </p>
                                        </div>
                                        <div  class="col-12 col-lg-8">
                                            <p><?php echo ($data["phone_number"]) ?? ""; ?></p>
                                        </div>
                                    </div>
									
									<hr>
								</div><!-- blog-card-content -->
							</div><!-- blog-card -->
						</div><!-- col-lg-4 -->
				<?php
					}
				}else{
					echo'	<section class="blog-section">
					<div class="container">
						<div class="blog-box">
							<div class="section-title-box text-center">
								<h4 class="section-title">No School in Search Results</h4>
							</div><!-- section-title-box -->
						</div><!--blog-box-->
						<div class="row row-gutter-y-155">';
				}
				?>
			</div><!-- row -->
		</div><!-- container -->
	</section><!-- blog-section -->


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
					<form action="./app/directory.php" class="contact-form" method="post">
						<div class="row row-gutter-10">
							<div class="col-12 col-lg-6">
								<label>Select Country</label>
								<select type="text" class="input-text" id="country_type" required="yes" onchange="select_region_type();">
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
								<select type="text" class="input-text" id="region_type" onchange="select_state_type();" required="yes">
									<option value="">select</option>
								</select>
							</div> <!--col-12 col-lg-6 -->
							<div class="col-12 col-lg-6">
								<label>Select State</label>
								<select type="text" class="input-text" placeholder="State" id="state_type" required="yes" onchange="select_lga_type();" aria-required="true">
								</select>
							</div> <!--col-12 col-lg-6 -->
							<div class="col-12 col-lg-6">
								<label>Select LGA</label>
								<select type="text" class="input-text" placeholder="State" name="lga_type" required="yes" id="lga_type" aria-required="true">
								</select>
							</div> <!--col-12 col-lg-6 -->
							<div class="col-12 col-lg-6" hidden>
								<select type="text" class="input-text" name="searchToken" aria-required="true">
									<option selected value="<?php
															$searchToken = $utility->generateRandomDigits(14);
															$_SESSION['searchToken'] = $searchToken;
															echo base64_encode($searchToken);
															?>"> </option>
								</select>
							</div> <!--col-12 col-lg-6 -->

							<div class="col-12 col-lg-12 offset-4">
								<button type="submit" name="searchSchools" class="btn btn-primary">Search School</button>
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