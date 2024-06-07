<?php
include ('header.php');
?>

<!--quick links-->
<div class="quickLinks-wrap js-quickLinks-wrap-d d-none d-lg-flex">
	<div class="quickLinks js-quickLinks">
		<div class="container">
			<div class="row no-gutters">
				<div class="col">
					<a href="#" class="link">
						<i class="icon-placeholder"></i><span>Location</span></a>
					<div class="link-drop p-0">
						<div class="google-map">
							<iframe
								src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d40119.804311386426!2d-97.32055794896301!3d37.64364017354126!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x87bae4ec254beb5f%3A0x410df48edd2f5ede!2sGraceMed%20Jardine%20Family%20Clinic!5e0!3m2!1sen!2sua!4v1579853082410!5m2!1sen!2sua"></iframe>
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
						<p>This simply works as a guide and helps you to connect with dentists of your choice. Please
							confirm the doctor’s availability before leaving your premises.</p>
						<p class="text-right"><a href="#" class="btn btn-sm btn-hover-fill">Details</a></p>
					</div>
				</div>
				<div class="col">
					<a href="#" class="link">
						<i class="icon-price-tag"></i><span>Calculator</span>
					</a>
					<div class="link-drop">
						<h5 class="link-drop-title"><i class="icon-price-tag"></i>Quick Pricing</h5>
						<table class="row-table">
							<tr>
								<td>Initial Consultation</td>
								<td>$10</td>
							</tr>
							<tr>
								<td>Dental check-up</td>
								<td>$15</td>
							</tr>
							<tr>
								<td>Routine Exam (no xrays)</td>
								<td>$50</td>
							</tr>
							<tr>
								<td>Simple Removal of a tooth</td>
								<td>$122</td>
							</tr>
							<tr>
								<td>Teeth cleaning</td>
								<td>$50 - $75</td>
							</tr>
							<tr>
								<td>X-ray image</td>
								<td>$10</td>
							</tr>
						</table>
						<div class="text-right btn-wrap mt-2"><a href="#" class="btn btn-sm btn-fill"><i
									class="icon-right-arrow"></i><span>Calculator</span><i
									class="icon-right-arrow"></i></a> <a href="#" class="btn btn-sm btn-fill"><i
									class="icon-right-arrow"></i><span>Details</span><i
									class="icon-right-arrow"></i></a></div>
					</div>
				</div>
				<div class="col">
					<a href="#" class="link">
						<i class="icon-emergency-call"></i><span>Emergency Case</span></a>
					<div class="link-drop">
						<h5 class="link-drop-title"><i class="icon-emergency-call"></i>Emergency Case</h5>
						<p>Emergency dental care may be needed if you have had a blow to the face, lost a filling, or
							cracked a tooth. </p>
						<ul class="icn-list">
							<li><i class="icon-telephone"></i><span
									class="phone">1-800-267-0000<br>1-800-267-0001</span>
							</li>
							<li><i class="icon-black-envelope"></i><a
									href="mailto:info@besthotel-email.com">info@besthotel-email.com</a></li>
						</ul>
						<p class="text-right mt-2"><a href="contact" class="btn btn-sm btn-hover-fill">Our Contacts</a>
						</p>
					</div>
				</div>
				<div class="col col-close"><a href="#" class="js-quickLinks-close"><i class="icon-top"
							data-toggle="tooltip" data-placement="top" title="Close panel"></i></a></div>
			</div>
		</div>
		<div class="quickLinks-open js-quickLinks-open"><span data-toggle="tooltip" data-placement="left"
				title="Open panel">+</span></div>
	</div>
</div>
<!--//quick links-->
<div class="page-content">
	<!--section-->
	<div class="section mt-0">
		<div class="breadcrumbs-wrap">
			<div class="container">
				<div class="breadcrumbs">
					<a href="index">Home</a>
					<span>About Us</span>
				</div>
			</div>
		</div>
	</div>
	<!--//section-->
	<!--section-->
	<div class="section page-content-first">
		<div class="container">
			<div class="text-center mb-2  mb-md-3 mb-lg-4">
				<div class="h-sub theme-color">Supporting Independent Lives with Care</div>
				<h1>Know Our Story</h1>
				<div class="h-decor"></div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-lg-6 text-center text-lg-left pr-md-4">
					<img src="images/content/about-01.jpg" class="w-100" alt="">
					<div class="row mt-3">
						<div class="col-6">
							<img src="images/content/about-03.jpg" class="w-100" alt="">
						</div>
						<div class="col-6">
							<img src="images/content/about-04.jpg" class="w-100" alt="">
						</div>
					</div>
				</div>
				<div class="col-lg-6 mt-3 mt-lg-0">
					<p>Careround 24 was established to provide personalised and compassionate care for individuals
						seeking support to live independently. Our journey began with a small team of dedicated carers
						who shared a vision of delivering top-notch care that respects and values each client's wishes.
						Over the years, we have expanded our services to include domiciliary care, palliative care, and
						respite care, always keeping our clients' needs at the forefront. </p>
					<p>Our growth has never compromised our founding principle: to ensure comfort, dignity, and quality
						care for all.</p>
					<ul class="marker-list-md">
						<li>Tailored care plans are designed to meet each individual's unique needs.</li>
						<li>We offer round-the-clock care services, ensuring support is always available</li>
						<li>Quick and efficient action in emergencies to provide prompt support</li>
						<li>Hire skilled carers with expertise to provide the best possible care</li>
					</ul>
					<div class="mt-3 mt-md-7"></div>
					<h3>Our<span class="theme-color"> Commitment </span></h3>
					<div class="mt-0 mt-md-4"></div>
					<p>At Careround 24, we focus on empowering both carers and clients to find the perfect match for
						their needs. Our goal is to create a supportive environment where clients receive personalised
						care that caters to their unique situations. </p>
					<p>Our platform seamlessly connects clients with compassionate, skilled carers dedicated to
						improving their quality of life. We emphasise trust, respect, and understanding in every
						interaction. By prioritising the well-being and satisfaction of both clients and carers, we aim
						to make a meaningful impact on their lives every day.</p>
				</div>
			</div>
		</div>
	</div>
	<!--//section-->
	<!--section-->
	<div class="section">
		<div class="container-fluid px-0">
			<div class="row no-gutters">
				<div class="col-xl-6 bg-grey">
					<div class="max-670 mx-lg-auto px-15">
						<div class="title-wrap">
							<h2 class="h1">Our <span class="theme-color">Advantages</span></h2>
						</div>
						<div class="mt-lg-5"></div>
						<div class="row">
							<div class="col-sm-7">
								<ul class="marker-list-md">
									<li>Experienced Professionals Working as One Team</li>
									<li>Comprehensive Home Care Evaluation</li>
									<li>A Full Range of Home Care Services</li>
									<li>Ensuring Safety through Credentials</li>
									<li>Expertise in Home Care Solutions</li>
									<li>Commitment to Customer Satisfaction</li>
									<li>Night Care Service Availabe</li>
								</ul>
							</div>
							<div class="col-sm-5 mt-1 mt-sm-0">
								<ul class="marker-list-md">
									<li>Free Consultation Sessions</li>
									<li>Immediate Home Care Solutions</li>
									<li>Swift Implementation of Home Care Plans</li>
									<li>Innovative Approaches</li>
									<li>Complimentary Consultations</li>
									<li>Insurance and Financing</li>
									<li>Services Cost</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-6 banner-left bg-full"
					style="background-image: url(images/content/banner-right-1.jpg)"></div>
			</div>
		</div>
	</div>
	<!--//section-->
	<!--section-->
	<div class="section">
		<div class="container">
			<div class="title-wrap text-center">
				<div class="h-sub theme-color">Your Care Journey Starts Here!</div>
				<h2 class="h1">How does our process work?</h2>
				<div class="h-decor"></div>
			</div>
			<div class="row js-icn-carousel icn-carousel flex-column flex-sm-row text-center text-sm-left"
				data-slick='{"slidesToShow": 3, "responsive":[{"breakpoint": 1024,"settings":{"slidesToShow": 2}}]}'>
				<div class="col-md">
					<div class="icn-text">
						<div class="icn-text-simple"><i class="icon-innovation"></i></div>
						<div>
							<h5 class="icn-text-title">Find</h5>
							<p>Personalise your search to find experienced carers. You can also post your Careround 24
								Plan to quickly connect with carers who meet your immediate needs.</p>
						</div>
					</div>
				</div>
				<div class="col-md">
					<div class="icn-text">
						<div class="icn-text-simple"><i class="icon-compassion"></i></div>
						<div>
							<h5 class="icn-text-title"> Meet</h5>
							<p>Use our app to chat or video call with your chosen carer. This helps you make sure they
								are the right fit for your specific needs.</p>
						</div>
					</div>
				</div>
				<div class="col-md">
					<div class="icn-text">
						<div class="icn-text-simple"><i class="icon-integrity"></i></div>
						<div>
							<h5 class="icn-text-title">Hire</h5>
							<p>Once you find the perfect match, hire them with confidence. All carers on Careround 24
								are insured and vetted, giving you peace of mind as you start receiving professional
								care.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--//section-->
	<!--section-->
	<div class="section">
		<div class="container-fluid px-0">
			<div class="banner-center bg-cover" style="background-image: url(images/content/banner-center.jpg)">
				<div class="banner-center-caption text-center">
					<div class="banner-center-text1">Get the Care You've Always Wanted!</div>
					<div class="banner-center-text2">We strive to deliver top-notch home care services at affordable
						rates, ensuring the utmost quality in every aspect of our care.</div>
					<a href="#" class="btn btn-white mt-5" data-toggle="modal" data-target="#modalBookingForm"><i
							class="icon-right-arrow"></i><span>Request an Appointment</span><i
							class="icon-right-arrow"></i></a>
				</div>
			</div>
		</div>
	</div>
	<!--section-->
	<!--section-->
	<!-- <div class="section">
		<div class="container">
			<div class="row">
				<div class="col-lg-4">
					<div class="title-wrap">
						<h2 class="h1">Our Office </h2>
						<div class="h-decor"></div>
					</div>
					<p>Our dental office in is a state of the art dental facility equipped with the newest technology, capable of handling all of your dental needs. All of our operatories are equipped with intraoral cameras that are able to show us, and you, the precise treatment you might attain on a television screen.</p>
					<div class="mt-4"></div>
					<h3>Amenities</h3>
					<div class="mt-lg-4"></div>
					<ul class="marker-list-md">
						<li>TV’s in each treatment room</li>
						<li>Complimentary coffee, Juice</li>
						<li>Wireless Internet</li>
						<li>Warm lavender towels</li>
					</ul>
				</div>
				<div class="col-lg-8 mt-4 mt-lg-0">
					<div class="slider-gallery">
						<ul class="slider-gallery-main list-unstyled js-slider-gallery-main">
							<li><img src="images/content/slider-gallery-00.html" alt=""></li>
							<li><img src="images/content/slider-gallery-01.html" alt=""></li>
							<li><img src="images/content/slider-gallery-02.html" alt=""></li>
							<li><img src="images/content/slider-gallery-03.html" alt=""></li>
							<li><img src="images/content/slider-gallery-04.html" alt=""></li>
							<li><img src="images/content/slider-gallery-05.jpg" alt=""></li>
						</ul>
						<ul class="slider-gallery-thumbs list-unstyled js-slider-gallery-thumbs">
							<li><img src="images/content/slider-gallery-00-sm.html" alt=""></li>
							<li><img src="images/content/slider-gallery-01-sm.html" alt=""></li>
							<li><img src="images/content/slider-gallery-02-sm.html" alt=""></li>
							<li><img src="images/content/slider-gallery-03-sm.html" alt=""></li>
							<li><img src="images/content/slider-gallery-04-sm.html" alt=""></li>
							<li><img src="images/content/slider-gallery-05-sm.html" alt=""></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div> -->
	<!--//section-->
</div>

<?php
include ('footer.php');
?>