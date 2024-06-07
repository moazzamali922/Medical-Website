<?php
include('header.php');
?>
<div class="page-content">
	<!--section slider-->
	<div class="section mt-0">
		<div class="quickLinks-wrap js-quickLinks-wrap-d d-none d-lg-flex">
			<div class="quickLinks js-quickLinks closed">
				<div class="container">
					<div class="row no-gutters">
						<div class="col">
							<a href="#" class="link">
								<i class="icon-placeholder"></i><span>Location</span></a>
							<div class="link-drop p-0">
								<div class="google-map">
									<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d40119.804311386426!2d-97.32055794896301!3d37.64364017354126!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x87bae4ec254beb5f%3A0x410df48edd2f5ede!2sGraceMed%20Jardine%20Family%20Clinic!5e0!3m2!1sen!2sua!4v1579853082410!5m2!1sen!2sua"></iframe>
								</div>
							</div>
						</div>
						<div class="col">
							<a href="#" class="link">
								<i class="icon-clock"></i><span>Working Time</span>
							</a>
							<div class="link-drop">
								<h5 class="link-drop-title"><i class="icon-clock"></i>Working Time</h5>
								<table class="row-table">
									<tr>
										<td><i>Mon-Thu</i></td>
										<td>08:00 - 20:00</td>
									</tr>
									<tr>
										<td><i>Friday</i></td>
										<td> 07:00 - 22:00</td>
									</tr>
									<tr>
										<td><i>Saturday</i></td>
										<td>08:00 - 18:00</td>
									</tr>
									<tr>
										<td><i>Sunday</i></td>
										<td>Closed</td>
									</tr>
								</table>
							</div>
						</div>
						<div class="col">
							<a href="#" class="link">
								<i class="icon-pencil-writing"></i><span>Request Form</span>
							</a>
							<div class="link-drop">
								<h5 class="link-drop-title"><i class="icon-pencil-writing"></i>Request Form</h5>
								<form action="backend/request-form.php" method="post" novalidate>
							<div class="successform">
								<p>Your message was sent successfully!</p>
							</div>
							<div class="errorform">
								<p>Something went wrong, try refreshing and submitting the form again.</p>
							</div>
							<div class="input-group">
								<span>
									<i class="icon-user"></i>
								</span>
								<input name="requestname" type="text" class="form-control" placeholder="Your Name"
									required />
							</div>
							<div class="row row-sm-space mt-1">
								<div class="col">
									<div class="input-group">
										<span>
											<i class="icon-email2"></i>
										</span>
										<input name="requestemail" type="email" class="form-control"
											placeholder="Your Email" required />
									</div>
								</div>
								<div class="col">
									<div class="input-group">
										<span>
											<i class="icon-smartphone"></i>
										</span>
										<input name="requestphone" type="tel" class="form-control"
											placeholder="Your Phone" required />
									</div>
								</div>
							</div>
							<div class="selectWrapper input-group mt-1">
								<span>
									<i class="icon-micro"></i>
								</span>
								<select name="requestservice" class="form-control" required>
									<option value="" selected="selected" disabled="disabled">Select Service</option>
									<option value="Molecular Testing & Oncology">Molecular Testing & Oncology</option>
									<option value="Histology">Histology</option>
									<option value="General Diagnostic Tests">General Diagnostic Tests</option>
									<option value="Naturopathic">Naturopathic</option>
									<option value="Genetics Tests">Genetics Tests</option>
									<option value="Cytology">Cytology</option>
								</select>
							</div>
							<div class="row row-sm-space mt-1">
								<div class="col-sm-6">
									<div class="input-group flex-nowrap">
										<span>
											<i class="icon-calendar2"></i>
										</span>
										<div class="datepicker-wrap">
											<input name="requestdate" type="text" class="form-control datetimepicker"
												placeholder="Date" readonly required>
										</div>
									</div>
								</div>
								<div class="col-sm-6 mt-1 mt-sm-0">
									<div class="input-group flex-nowrap">
										<span>
											<i class="icon-clock"></i>
										</span>
										<div class="datepicker-wrap">
											<input name="requesttime" type="text" class="form-control timepicker"
												placeholder="Time" readonly required>
										</div>
									</div>
								</div>
							</div>
							<div class="text-right mt-2">
								<button type="submit" class="btn btn-sm btn-hover-fill">Request</button>
							</div>
						</form>
							</div>
						</div>
						<div class="col">
							<a href="#" class="link">
								<i class="icon-calendar"></i><span>Doctors Timetable</span>
							</a>
							<div class="link-drop">
								<h5 class="link-drop-title"><i class="icon-calendar"></i>Doctors Timetable</h5>
								<p>This simply works as a guide and helps you to connect with dentists of your choice. Please confirm the doctor’s availability before leaving your premises.</p>
								<p class="text-right"><a href="#specialistsSection" class="btn btn-sm btn-hover-fill link-inside">Details</a></p>
							</div>
						</div>
						<!-- <div class="col"> -->
							<!-- <a href="#" class="link"> -->
								<!-- <i class="icon-price-tag"></i><span>Calculator</span> -->
							<!-- </a> -->
							<!-- <div class="link-drop"> -->
								<!-- <h5 class="link-drop-title"><i class="icon-price-tag"></i>Quick Pricing</h5> -->
								<!-- <table class="row-table"> -->
									<!-- <tr> -->
										<!-- <td>Initial Consultation</td> -->
										<!-- <td>$10</td> -->
									<!-- </tr> -->
									<!-- <tr> -->
										<!-- <td>Dental check-up</td> -->
										<!-- <td>$15</td> -->
									<!-- </tr> -->
									<!-- <tr> -->
										<!-- <td>Routine Exam (no xrays)</td> -->
										<!-- <td>$50</td> -->
									<!-- </tr> -->
									<!-- <tr> -->
										<!-- <td>Simple Removal of a tooth</td> -->
										<!-- <td>$122</td> -->
									<!-- </tr> -->
									<!-- <tr> -->
										<!-- <td>Teeth cleaning</td> -->
										<!-- <td>$50 - $75</td> -->
									<!-- </tr> -->
									<!-- <tr> -->
										<!-- <td>X-ray image</td> -->
										<!-- <td>$10</td> -->
									<!-- </tr> -->
								<!-- </table> -->
								<!-- <div class="text-right btn-wrap mt-2"> -->
									<!-- <a href="#bmiCalculator" class="btn btn-sm btn-fill"><i class="icon-right-arrow"></i><span>Calculator</span><i class="icon-right-arrow"></i></a> -->
									<!-- <a href="prices.html" class="btn btn-sm btn-fill"><i class="icon-right-arrow"></i><span>Details</span><i class="icon-right-arrow"></i></a> -->
								<!-- </div> -->
							<!-- </div> -->
						<!-- </div> -->
						<div class="col">
							<a href="#" class="link">
								<i class="icon-emergency-call"></i><span>Contact Us</span></a>
							<div class="link-drop">
								<h5 class="link-drop-title"><i class="icon-emergency-call"></i>Contact Us</h5>
								<p>If you would like to find out more about our home care & support services, please contact on our telephone number. </p>
								<ul class="icn-list">
									<li><i class="icon-telephone"></i><span class="phone">01-413-740-687</span>
									</li>
									<li><i class="icon-black-envelope"></i><a href="mailto:info@careround24.com">info@careround24.com</a></li>
								</ul>
								<p class="text-right mt-2"><a href="#contactForm" class="btn btn-sm btn-hover-fill link-inside">Our Contacts</a></p>
							</div>
						</div>
						<div class="col col-close"><a href="#" class="js-quickLinks-close"><i class="icon-top" data-toggle="tooltip" data-placement="top" title="Close panel"></i></a></div>
					</div>
				</div>
				<div class="quickLinks-open js-quickLinks-open"><span data-toggle="tooltip" data-placement="left" title="Open panel">+</span></div>
			</div>
		</div>
		<div id="mainSliderWrapper">
			<div class="loading-content">
				<div class="inner-circles-loader"></div>
			</div>
			<div class="main-slider mb-0 arrows-white arrows-bottom" id="mainSlider" data-slick='{"arrows": false, "dots": true}'>
				<div class="slide">
					<div class="img--holder" data-bg="images/content/slider/slide-01.jpg"></div>
					<div class="slide-content center">
						<div class="vert-wrap container">
							<div class="vert">
								<div class="container">
									<div class="slide-txt1 text-no-uppercase" data-animation="fadeInDown" data-animation-delay="1s"><b>Comprehensive Care, Always at Your Service</b></div>
									<div class="slide-txt2 text-no-uppercase" data-animation="fadeInUp" data-animation-delay="1.5s">Giving You the Freedom to Live Life on Your Terms With Holistic Support Solutions</div>
									<div class="slide-btn"><a href="#" class="btn btn-hover-fill" data-animation="fadeInUp" data-animation-delay="2s"><i class="icon-right-arrow"></i><span>Explore our services</span><i class="icon-right-arrow"></i></a></div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="slide">
					<div class="img--holder" data-bg="images/content/slider/slide-02.jpg"></div>
					<div class="slide-content center">
						<div class="vert-wrap container">
							<div class="vert">
								<div class="container">
									<div class="slide-txt1 text-no-uppercase" data-animation="fadeInDown" data-animation-delay="1s"><b>Offering Support Around the Clock</b></div>
									<div class="slide-txt2 text-no-uppercase" data-animation="fadeInUp" data-animation-delay="1.5s">Bringing Comfort and Support, Wherever You Are</div>
									<div class="slide-btn"><a href="#" class="btn btn-hover-fill" data-animation="fadeInUp" data-animation-delay="2s"><i class="icon-right-arrow"></i><span>Explore our services</span><i class="icon-right-arrow"></i></a></div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="slide">
					<div class="img--holder" data-bg="images/content/slider/slide-03.jpg"></div>
					<div class="slide-content center">
						<div class="vert-wrap container">
							<div class="vert">
								<div class="container">
									<div class="slide-txt1 text-no-uppercase" data-animation="fadeInDown" data-animation-delay="1s"><b>Guiding Light in Your Life</b></div>
									<div class="slide-txt2 text-no-uppercase" data-animation="fadeInUp" data-animation-delay="1.5s">Ensuring Your Peace and Happiness, Through Every Moment</div>
									<div class="slide-btn"><a href="#" class="btn btn-hover-fill" data-animation="fadeInUp" data-animation-delay="2s"><i class="icon-right-arrow"></i><span>Explore our services</span><i class="icon-right-arrow"></i></a></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--//section slider-->
	<!--section welcome -->
	<div class="section bg-norepeat bg-md-none section-top-padding">
		<div class="container">
			<div class="row">
				<div class="col-md-6 pl-lg-3 pt-lg-5">
					<div class="title-wrap-alt">
						<div class="h-sub-lined theme-color">About us</div>
						<h2 class="h1">We're dedicated to supporting independence with personalised care that empowers you to live life to the fullest!</span></h2>
					</div>
					<!-- <p class="p-bold">Dr. Barbara Glover, N.D. is a Body Contouring Expert with a clinical focus in weight loss and weight management care</p> -->
					<p>Careround 24 is your dedicated platform. With a vast network of verified carers offering various services like respite, dementia, and palliative care, we empower both carers and clients to find the perfect match for their needs. Whether you need emergency support, live-in care, or hourly assistance, we guarantee dependable connections that provide everyone with peace of mind and high-quality care.  </p>
					<!-- <div class="signature mt-3">
						<div class="signature-img">
							<img src="images/content/signature.png" alt="Signature">
						</div>
						<div class="signature-text"><h5>Dr. Barbara Glover</h5>
							Naturopathic Doctor, Certified Personal Trainer,
							Ideal Protein Coach
						</div>
					</div> -->
					<div class="mt-2"></div>
					<a href="#" class="btn-link btn-link--sm" data-toggle="modal" data-target="#modalBookingForm">schedule a visit<i class="icon-right-arrow"></i></a>
				</div>
				<div class="col-md-6 mb-lg-5 position-relative mt-3 mt-md-0">
					<div class="img-with-bg">
						<img src="images/content/senior-img.jpg" alt="">
						<img src="images/content/img-bg.png" class="img-bg" alt="">
					</div>
					<a href="#" class="video-btn-circle-left js-video-btn" data-toggle="modal"
					   data-src="https://www.youtube.com/embed/uyWt48mWmz0" data-target="#videoModal">
						<span><i class="icon-play"></i></span>
					</a>
					<!-- Video Modal -->
					<div class="modal video-modal fade" id="videoModal">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-body">
									<div class="embed-responsive embed-responsive-16by9">
										<iframe data-src="https://www.youtube.com/embed/mDHGaU_jGrQ?start=10" src="https://www.youtube.com/embed/mDHGaU_jGrQ?start=10" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- //Video Modal -->
					<div class="over-image-card pos-center">
						<div class="over-image-card-icon"><i class="icon-info"></i></div>
						<div class="over-image-card-text">
							<h4>Patient Information</h4>
							<p>The following information will be of interest to specialist care services provided to our patients.</p>
							<a href="#" class="btn btn-white btn-white--all"><i class="icon-right-arrow"></i><span>download forms</span><i class="icon-right-arrow"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--//section welcome -->
	<!--section-->
	<div class="section bg-dotted">
		<div class="container-fluid">
			<div class="title-wrap text-center">
				<h2 class="h1 double-title double-title--white double-title--center double-title--vcenter" data-title="Our Services"><span>Care Services</span></h2>
				<div class="h-decor"></div>
			</div>
			<div class="row service-card-style4-carousel js-service-card-style4-carousel">
				<div class="col-md-6 col-lg-3">
					<a href="#" class="service-card-style4">
						<div class="service-card-img">
							<img src="images/content/care-service-1.jpg" alt="">
						</div>
						<h5 class="service-card-name">Domiciliary Care</h5>
						<div class="service-card-bg">
							<i class="icon-salat"></i>
							<h5 class="service-card-name">Domiciliary Care</h5>
							<p>Home care and support allows you flexibility to live safely in your own home.</p>
							<span class="btn-plus">+</span>
							<div class="service-card-img-num">1</div>
						</div>
					</a>
				</div>
				<div class="col-md-6 col-lg-3">
					<a href="#" class="service-card-style4">
						<div class="service-card-img">
							<img src="images/content/care-service-2.jpg" alt="">
						</div>
						<h5 class="service-card-name">Live-in Care</h5>
						<div class="service-card-bg">
							<i class="icon-run"></i>
							<h5 class="service-card-name">Live-in Care</h5>
							<p>Round-the-clock care, help, and companionship right in your own home.</p>
							<span class="btn-plus">+</span>
							<div class="service-card-img-num">2</div>
						</div>
					</a>
				</div>
				<div class="col-md-6 col-lg-3">
					<a href="#" class="service-card-style4">
						<div class="service-card-img">
							<img src="images/content/care-service-3.jpg" alt="">
						</div>
						<h5 class="service-card-name">Respite care</h5>
						<div class="service-card-bg">
							<i class="icon-pills"></i>
							<h5 class="service-card-name">Respite care</h5>
							<p>When you need a break from caring, or are looking for short-term care.</p>
							<span class="btn-plus">+</span>
							<div class="service-card-img-num">3</div>
						</div>
					</a>
				</div>
				<div class="col-md-6 col-lg-3">
					<a href="#" class="service-card-style4">
						<div class="service-card-img">
							<img src="images/content/care-service-4.jpg" alt="">
						</div>
						<h5 class="service-card-name">Night care</h5>
						<div class="service-card-bg">
							<i class="icon-behavior"></i>
							<h5 class="service-card-name">Night care</h5>
							<p>Overnight care to help you or a loved one sleep soundly through the night.</p>
							<span class="btn-plus">+</span>
							<div class="service-card-img-num">4</div>
						</div>
					</a>
				</div>
				<div class="col-md-6 col-lg-3">
					<a href="#" class="service-card-style4">
						<div class="service-card-img">
							<img src="images/content/care-service-5.jpg" alt="">
						</div>
						<h5 class="service-card-name">Companionship</h5>
						<div class="service-card-bg">
							<i class="icon-happy"></i>
							<h5 class="service-card-name">Companionship</h5>
							<p>Whatever it is that you enjoy doing, we’ll find the right Care Professional to support you and to become your companion.</p>
							<span class="btn-plus">+</span>
							<div class="service-card-img-num">5</div>
						</div>
					</a>
				</div>
				<!-- <div class="col-md-6 col-lg-3">
					<a href="service-page.html" class="service-card-style4">
						<div class="service-card-img">
							<img src="images/content/services-06-index.jpg" alt="">
						</div>
						<h5 class="service-card-name">Hormone Therapy</h5>
						<div class="service-card-bg">
							<i class="icon-molecula"></i>
							<h5 class="service-card-name">Hormone Therapy</h5>
							<p>With aging and weight gain, both men and women can develop an imbalance in hormone production.</p>
							<span class="btn-plus">+</span>
							<div class="service-card-img-num">6</div>
						</div>
					</a>
				</div>
				<div class="col-md-6 col-lg-3">
					<a href="service-page.html" class="service-card-style4">
						<div class="service-card-img">
							<img src="images/content/services-07-index.jpg" alt="">
						</div>
						<h5 class="service-card-name">Wellness Coach</h5>
						<div class="service-card-bg">
							<i class="icon-coach"></i>
							<h5 class="service-card-name">Wellness Coach</h5>
							<p>People really need a personalized blend of communication, guidance and accountability to reach their health.</p>
							<span class="btn-plus">+</span>
							<div class="service-card-img-num">7</div>
						</div>
					</a>
				</div>
				<div class="col-md-6 col-lg-3">
					<a href="service-page.html" class="service-card-style4">
						<div class="service-card-img">
							<img src="images/content/services-08-index.jpg" alt="">
						</div>
						<h5 class="service-card-name">Bariatric Services</h5>
						<div class="service-card-bg">
							<i class="icon-instruments"></i>
							<h5 class="service-card-name">Bariatric Services</h5>
							<p>We provide independent, unbiased information on surgical options to assist with weight loss.</p>
							<span class="btn-plus">+</span>
							<div class="service-card-img-num">8</div>
						</div>
					</a>
				</div> -->
			</div>
		</div>
	</div>
	<!--//section-->
	<!--section-->
	<!-- <div class="section bg-grey mt-0 pt-2 pb-0">
		<div class="container-fluid container-fluid-visible-sm px-0">
			<div class="row no-gutters bmi-form-wrap">
				<div class="col-md-6">
					<div class="bmi-form-image">
						<img src="images/content/banner-left.jpg" alt="">
						<div class="image-corner">
							<i class="icon-calc"></i>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div id="bmiForm" class="bmi-form-col">
						<div class="bmi-form-col-inside">
							<div class="title-wrap" id="bmiCalculator">
								<div class="h-sub-lined theme-color">Get your BMI</div>
								<h2 class="h1">BMI Calculator</h2>
							</div>
							<p class="mt-2">Your treatment options depend on how much you weigh. You can calculate your BMI using this simple tool:</p>
							<div class="bmi-form">
								<div id="unit-selector" class="unit-selector row">
									<div class="col-auto"><input id="unitsMetric" type="radio" name="units" value="metric" checked/><label for="unitsMetric">Metric</label></div>
									<div class="col-auto"><input id="unitsUS" type="radio" name="units" value="us-imperial"/><label for="unitsUS">US</label></div>
								</div>
								<div id="inputs">
									<div class="form-group">
										<div class="row">
											<div class="col"><input type="text" id="bmiHeight" class="form-control required" placeholder="Height"/><span class="input-unit"></span></div>
											<div class="col"><input type="text" id="bmiWeight" class="form-control required" placeholder="Weight" pattern="[0-9.]+"/><span class="input-unit"></span></div>
										</div>
									</div>
									<div id="bmiError" class="form-group bmi-error"></div>
									<div class="form-group mb-0">
										<div class="row align-items-center">
											<div class="col"><a href="#" id="bmiCalculate" class="btn btn-hover-fill"><i class="icon-right-arrow"></i><span>Calculate</span><i class="icon-right-arrow"></i></a></div>
											<div class="col-auto pl-0">
												<div class="bmi-result">Your BMI is: <span id="bmi">__</span></div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="bmi-form-table">
								<div class="bmi-class-1">
									<span>BMI > 18.5</span>
									<span class="bmi-form-table-info">UNDERWEIGHT</span>
								</div>
								<div class="bmi-class-2">
									<span>18.5 - 24.9</span>
									<span class="bmi-form-table-info">HEALTHY</span>
								</div>
								<div class="bmi-class-3">
									<span>25 - 29.9</span>
									<span class="bmi-form-table-info">OVERWEIGHT</span>
								</div>
								<div class="bmi-class-4">
									<span>30 < BMI</span>
									<span class="bmi-form-table-info">OBESE</span>
								</div>
							</div>
							<p>We recommend you speak to your doctor if your BMI is above 25.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div> -->
	<!--//section-->
	<!--section testimonials-->
	<!-- <div class="section">
		<div class="container-fluid px-0">
			<div class="title-wrap text-center">
				<h2 class="h1">Clients Success <br class="d-sm-none">Stories</h2>
				<div class="h-decor"></div>
			</div>
			<p class="text-center max-500">Check out these unexpected weight-loss lessons from people who have been battling their weight for decades.</p>
			<div class="reviews-style5">
				<div class="reviews-wrap js-reviews-carousel5">
					<div class="review">
						<div class="review-left">
							<img src="images/content/tesimonials-left-01.png" alt="">
						</div>
						<div class="review-center">
							<div class="review-title-1">Transform</div>
							<div class="review-title-2">Life & Health</div>
							<div class="review-box">
								<div class="review-author">Diana Wolkers</div>
								<p class="review-text">Let’s just say I know where to go when I’m taking my health and weight seriously. I’ve had wonderful result. You must be serious with yourself about your weight loss.</p>
							</div>
						</div>
						<div class="review-right">
							<img src="images/content/tesimonials-right-01.png" alt="">
						</div>
					</div>
					<div class="review">
						<div class="review-left">
							<img src="images/content/tesimonials-left-02.png" alt="">
						</div>
						<div class="review-center">
							<div class="review-title-1">Transform</div>
							<div class="review-title-2">Life & Health</div>
							<div class="review-box">
								<div class="review-author">Mark Brewer</div>
								<p class="review-text">Mark enjoyed comfort food during family celebrations. Soon, he was eating comfort and fast foods all the time, especially when he was stressed. At 5 feet...</p>
							</div>
						</div>
						<div class="review-right">
							<img src="images/content/tesimonials-right-02.png" alt="">
						</div>
					</div>
					<div class="review">
						<div class="review-left">
							<img src="images/content/tesimonials-left-03.png" alt="">
						</div>
						<div class="review-center">
							<div class="review-title-1">Transform</div>
							<div class="review-title-2">Life & Health</div>
							<div class="review-box">
								<div class="review-author">Greta Roberts</div>
								<p class="review-text">It doesn’t sound like much, but it is a big deal to me! I’m on my way and feeling healthier, more energetic and happier than I’ve been in a long time.</p>
							</div>
						</div>
						<div class="review-right">
							<img src="images/content/tesimonials-right-03.png" alt="">
						</div>
					</div>
					<div class="review">
						<div class="review-left">
							<img src="images/content/tesimonials-left-04.png" alt="">
						</div>
						<div class="review-center">
							<div class="review-title-1">Transform</div>
							<div class="review-title-2">Life & Health</div>
							<div class="review-box">
								<div class="review-author">Natalie Wood</div>
								<p class="review-text"> Losing weight, working out, and eating healthy has been a complete life style change for me. I haven’t met all of my goals just yet, but I’m on my way for sure.</p>
							</div>
						</div>
						<div class="review-right">
							<img src="images/content/tesimonials-right-04.png" alt="">
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="text-center"><a href="before-after.html" class="btn btn-hover-fill"><i class="icon-right-arrow"></i><span>more success stories</span><i class="icon-right-arrow"></i></a></div>
	</div> -->
	<!--//section testimonials-->
	<!--section blog posts -->
	<div class="section bg-grey">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-lg-4">
					<div class="title-wrap text-center text-md-left">
						<h2 class="h1">From the Blog</h2>
						<div class="h-decor"></div>
					</div>
					<div class="blog-post-sm-vertical d-block">
						<div class="blog-post-sm">
							<div class="blog-post-sm-photo"><img src="images/content/care-pro.jpg" alt="" class="img-fluid"></div>
							<div class="blog-post-sm-text">
								<div class="blog-post-sm-date">Apr 2, 2020</div>
								<div class="blog-post-sm-title"><a href="#">A story of a Care Assistant</a></div>
							</div>
						</div>
						<div class="blog-post-sm">
							<div class="blog-post-sm-photo"><img src="images/content/care-service-2.jpg" alt="" class="img-fluid"></div>
							<div class="blog-post-sm-text">
								<div class="blog-post-sm-date">Mar 20, 2021</div>
								<div class="blog-post-sm-title"><a href="#">International Day of Happiness – 20th March 2021</a></div>
							</div>
						</div>
					</div>
					<div class="mt-3 mt-lg-6">
						<a href="#" class="btn-link btn-link--sm">view all posts<i class="icon-right-arrow"></i></a>
					</div>
				</div>
				<div class="col-md-6 col-lg-8 mt-3 mt-md-0">
					<div class="row blog-grid blog-grid-carousel js-blog-grid-carousel m-0">
						<div class="col-6 col-sm col-lg-6">
							<div class="blog-post blog-post-style4">
								<div class="post-image">
									<a href="#"><img src="images/content/care-service-3.jpg" alt=""></a>
								</div>
								<div class="blog-post-info">
									<h2 class="post-title"><a href="#">Empathy at the Heart of Customer Service</a></h2>
									<div class="post-teaser">It’s very important for us to treat our customers with respect and dignity.</div>
									<div class="post-date-simple">April 4, 2022</div>
								</div>
							</div>
						</div>
						<div class="col-6 col-sm col-lg-6">
							<div class="blog-post blog-post-style4">
								<div class="post-image">
									<a href="#"><img src="images/content/care-service-1.jpg" alt=""></a>
								</div>
								<div class="blog-post-info">
									<h2 class="post-title"><a href="#">Compassionate Care: Alzheimer's</a></h2>
									<div class="post-teaser">Committed to providing support for individuals and families facing the challenges of Alzheimer's.</div>
									<div class="post-date-simple">April 5, 2020</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--//section blog posts -->
	<!--section -->
	<div class="section bg-grey mt-0 py-0">
		<div class="container-fluid px-0 over-visible">
			<div class="row white-col-wrap">
				<div class="col-md-6 white-col">
					<div class="white-col-inside">
						<div class="title-wrap-alt">
							<div class="h-sub-lined theme-color">Why Choose us?</div>
							<!-- <h2 class="h1">Weight Loss is Not<br class="d-sm-none">Just about the <br class="d-sm-none"><span class="theme-color">Calories and Exercise</span></h2> -->
						</div>
						<p>At Careround 24, we understand that every individual has unique needs, which is why our experienced team is committed to crafting tailored care plans to suit each person's requirements. With a wealth of industry experience, our founding principle remains the same: to provide the highest standards of care, ensuring individuals can maintain independent lives within the familiar comforts of their own homes.</p>
						<ul class="marker-list-md">
							<li>Dedicated team of qualified caregivers</li>
							<li>Seamless online platform for convenient scheduling and management.</li>
						</ul>
						<div class="mt-3 mt-lg-5">
							<div class="counter-box-grid">
								<div class="counter-box-sm">
									<div class="counter-box-sm-number"><span class="count" data-to="920" data-speed="1500">0</span><span class="sup">+</span></div>
									<div class="counter-box-sm-text">Availability</div>
								</div>
								<div class="counter-box-sm">
									<div class="counter-box-sm-number"><span class="count" data-to="20" data-speed="1500">0</span><span class="sup">+</span></div>
									<div class="counter-box-sm-text">Professional Staff</div>
								</div>
								<div class="counter-box-sm">
									<div class="counter-box-sm-number"><span class="count" data-to="25" data-speed="1500">0</span><span class="sup">+</span></div>
									<div class="counter-box-sm-text">Years of Experience</div>
								</div>
								<div class="counter-box-sm">
									<div class="counter-box-sm-number"><span class="count" data-to="3" data-speed="1500">0</span><span class="sup">K+</span></div>
									<div class="counter-box-sm-text">Happy Clients</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6 mb-0 mb-lg-7 image-right-fullheight-col">
					<div class="image-right-fullheight">
						<img src="images/content/banner-right.jpg" alt="">
						<div class="image-corner image-corner--left">
							<i class="icon-achivement"></i>
						</div>
					</div>
					<div class="over-image-card over-image-card--sm pos-center-1">
						<div class="over-image-card-icon"><i class="icon-phone-time"></i></div>
						<div class="over-image-card-text">
							<h4>Free 15 Min Consultation</h4>
							<p>Use the form to book your FREE 15 min telephone consultation.</p>
							<a href="#" class="btn btn-white btn-white--all" data-toggle="modal" data-target="#modalBookingForm"><i class="icon-right-arrow"></i><span>book consultation</span><i class="icon-right-arrow"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--//section -->
	<!--section prices-->
	<!-- <div class="section">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-md-6 col-lg-8 pr-lg-6 order-2 order-md-1">
					<img src="images/content/img-bg-top-left.png" class="img-bg-top-left" alt="">
					<div class="row no-gutters align-items-center prices-carousel-column js-prices-carousel">
						<div class="col-sm-6">
							<div class="prices-box prices-box--style3 prices-box--special">
								<div class="prices-box-title-wrap">
									<h4 class="prices-box-title">Weekly Program</h4>
									<div class="prices-box-price">
										<sub>$</sub>28<sub>.95</sub>
									</div>
									<div class="prices-box-text">Per Week</div>
								</div>
								<div class="prices-box-row">Personalized Weekly Check-ins</div>
								<div class="prices-box-row">Medication Management</div>
								<div class="prices-box-row">MetaBlast Supplement</div>
								<div class="prices-box-row">Assistance with Daily Activities</div>
								<div class="prices-box-row">Physician Consultation</div>
								<div class="prices-box-link">
									<a href="#" class="btn-link btn-link--sm"><span>booking now</span><i class="icon-right-arrow"></i></a>
								</div>
							</div>
						</div>
						<div class="col-sm-6">
							<div class="prices-box prices-box--style3">
								<div class="prices-box-title-wrap">
									<h4 class="prices-box-title">Individual Program</h4>
									<div class="prices-box-price">
										<sub>$</sub>120<sub>.00</sub>
									</div>
									<div class="prices-box-text">Per Month</div>
								</div>
								<div class="prices-box-row">Flexible Scheduling</div>
								<div class="prices-box-row">Intensive Support</div>
								<div class="prices-box-row">Advanced Monitoring</div>
								<div class="prices-box-row">Rehabilitation Support</div>
								<div class="prices-box-link">
									<a href="#" class="btn-link btn-link--sm"><span>booking now</span><i class="icon-right-arrow"></i></a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-4 order-1 order-md-2">
					<div class="title-wrap-alt">
						<div class="h-sub-lined theme-color">Our prices</div>
						<h2 class="h1">Affordable Pricing <span class="theme-color">Packages</span></h2>
					</div>
					<p>We offer personalized programs to patients who would like to try a diet, weight loss program, or hormone replacement plan that is customized to their specific lifestyles.</p>
					<div class="mt-3"></div>
					<a href="#" class="btn btn-hover-fill d-none d-md-inline"><i class="icon-right-arrow"></i><span>view all prices</span><i class="icon-right-arrow"></i></a>
				</div>
			</div>
		</div>
	</div> -->
	<!--//section prices-->
	<!--section call us-->
	<div class="section mt-5">
		<div class="container">
			<div class="banner-call">
				<div class="row no-gutters">
					<div class="col-sm-6 col-lg-7 d-flex align-items-center justify-content-center px-15">
						<div class="text-center">
							<h2>What are You <br class="d-sm-none"><span class="theme-color">Waiting</span> for?<br>Let's Get Started</span></h2>
							<div class="h-decor"></div>
							<p class="mt-sm-1 mt-lg-4 text-center">We're here to nurture your independence and enhance your quality of life. Our comprehensive care offerings include palliative care and respite care, ensuring every aspect of your well-being is catered to. Don't hesitate to take the first step towards a happier and more independent future. </p>
							<div class="mt-2 mt-lg-4">
								<h6 class="banner-call-text">Call Now:</h6>
								<a href="#" class="banner-call-phone"><i class="icon-telephone"></i>01-413-740-687</a>
							</div>
						</div>
					</div>
					<div class="col-sm-5 col-lg-5 col-xl-4 mt-3 mt-md-0">
						<img src="images/content/care-pro.jpg" class="shift-right-2" alt="">
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--//section call us-->
</div>



<?php
include('footer.php');
?>