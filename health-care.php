<?php
include ('header.php');
?>
<style>
	p{
		text-align: justify;
	}
</style>
<!--quick links-->
<div class="quickLinks-wrap js-quickLinks-wrap-d d-none d-lg-flex">
	<div class="quickLinks js-quickLinks">
		<div class="container">
			<div class="row no-gutters">
				<div class="col">
					<a href="#" class="link">
						<i class="icon-placeholder"></i><span>Location</span></a>
					<div class="link-drop p-0">
						<div class="google-map"><iframe
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
						<p class="text-right"><a href="schedule.html" class="btn btn-sm btn-hover-fill">Details</a></p>
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
						<div class="text-right btn-wrap mt-2"><a href="index.html#bmiCalculator"
								class="btn btn-sm btn-fill"><i class="icon-right-arrow"></i><span>Calculator</span><i
									class="icon-right-arrow"></i></a> <a href="prices.html"
								class="btn btn-sm btn-fill"><i class="icon-right-arrow"></i><span>Details</span><i
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
						<p class="text-right mt-2"><a href="contact.html" class="btn btn-sm btn-hover-fill">Our
								Contacts</a></p>
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
					<a href="index.html">Home</a>
					<a href="services.html">Services</a>
					<span>Health Care</span>
				</div>
			</div>
		</div>
	</div>
	<!--//section-->
	<!--section-->
	<div class="section page-content-first">
		<div class="container mt-6">
			<div class="row">

				<div class="col-md-8 col-lg-12 mt-4 mt-md-0 mb-5">
					<div class="title-wrap">
						<h1>Health Care</h1>
					</div>
					<div class="service-img">
						<img src="images/new6.png" class="img-fluid" alt="">
					</div>
					<div class="pt-2 pt-md-4">
						<p>Our services cover a wide spectrum of medical specialties, including primary care,
							pediatrics, internal medicine, women's health, geriatrics, and more. Whether you're due for
							a routine check-up, need help managing a chronic condition, or are seeking guidance on
							preventive health measures, our team is here to provide expert care and guidance. We believe
							in the power of collaboration and patient-centered care. Our healthcare providers work
							closely with each patient to develop a customized care plan that takes into account their
							medical history, lifestyle, and personal preferences. We listen attentively to your
							concerns, answer your questions, and involve you in every decision regarding your health. In
							addition to our clinical services, we also prioritize health education and preventive care.
							Through informative resources, wellness programs, and preventive screenings, we empower our
							patients to take control of their health and make informed decisions about their well-being.
						</p>

						<div class="mt-3 mt-lg-6"></div>
						<h3>Comprehensive Healthcare Services</h3>
						<div class="mt-0 mt-lg-4"></div>
						<p>At our practice, we offer comprehensive healthcare services designed to meet your medical
							needs at every stage of life. From preventive care and health screenings to diagnosis and
							treatment of acute and chronic conditions, our experienced team is committed to providing
							personalized and compassionate care. We prioritize your well-being, focusing on preventive
							measures to promote long-term health and wellness. Whether you need a routine check-up,
							vaccinations, or specialized treatment, we’re here to support you on your health journey.
						</p>
						<div class="mt-3 mt-lg-6"></div>
						<h3>Our Mission: Empowering Healthier Lives</h3>
						<div class="mt-0 mt-lg-4"></div>
						<p>our mission is simple: to empower healthier lives. We believe that everyone deserves access
							to quality healthcare services that promote wellness, prevent illness, and enhance overall
							well-being. Through a combination of expert medical care, health education, and personalized
							treatment plans, we strive to help our patients achieve their health goals and live their
							best lives. Our commitment to excellence, compassion, and integrity guides everything we do,
							ensuring that you receive the highest standard of care at every visit.

							.</p>
						<div class="mt-3"></div>
						<!-- <ul class="numbered-list-lg">
							<li>The patient is anesthetized using local anesthesia such as Carbocaine for short
								procedures, Lidocaine for medium length sessions, and Marcaine for multiple fillings.
								Patients with feelings of anxiety may be offered Nitrous Oxide (laughing gas) for the
								duration of the treatment. Only in extreme cases, the patient is given IV sedation or
								general anesthesia and may be referred to a more suitable dental setting such as a
								hospital.</li>

							<li>The area to be treated is secured by latex sheet that protects the tooth and keeps it
								dry during the procedure. It also prevents the debris from entering the oral region
								keeping the patient comfortable. For multiple fillings, when the treatment may require
								extended period of time, a bite block is used to help the patient keep their mouth open
								in a relaxed position without any strain on the jaw muscles.</li>

							<li>In case of composite fillings, the shade is chosen to closely mimic the appearance of
								the surrounding dentition.</li>

							<li>The decay is removed using a high-speed handpiece, slow-speed handpiece, laser or the
								combination of all three devices. The prepared surface may be etched with an appropriate
								solution to remove any remaining bacteria and create a porous layer for adhesive
								purposes. Amalgam or resin material is placed in small increments using hand
								instruments. The biting surface is then checked and adjusted as necessary.</li>
						</ul> -->
						<div class="mt-3"></div>
						<p>Filling placement is necessary to treat cavities and prolong the longevity of the natural
							teeth. With today’s technology continuously improving, new methods are developed to benefit
							the patients and ensure their positive oral health for a lifetime.</p>

					</div>
					<div class="row">
						<div class="col-md-6">
							<div class="service-img mt-5 mb-5">
								<img src="images/homecare1.png" class="img-fluid" alt="">
							</div>
						</div>
						<div class="col-md-6">
							<div class="service-img mt-5 mb-5">
								<img src="images/homecare2.png" class="img-fluid" alt="">
							</div>
						</div>
					</div>
					<p>Our services cover a wide spectrum of medical specialties, including primary care,
						pediatrics, internal medicine, women's health, geriatrics, and more. Whether you're due for
						a routine check-up, need help managing a chronic condition, or are seeking guidance on
						preventive health measures, our team is here to provide expert care and guidance. We believe
						in the power of collaboration and patient-centered care. Our healthcare providers work
						closely with each patient to develop a customized care plan that takes into account their
						medical history, lifestyle, and personal preferences. We listen attentively to your
						concerns, answer your questions, and involve you in every decision regarding your health. In
						addition to our clinical services, we also prioritize health education and preventive care.
						Through informative resources, wellness programs, and preventive screenings, we empower our
						patients to take control of their health and make informed decisions about their well-being.
					</p>

					<div class="mt-3 mt-lg-6"></div>
					<h3>Comprehensive Healthcare Services</h3>
					<div class="mt-0 mt-lg-4"></div>
					<p>At our practice, we offer comprehensive healthcare services designed to meet your medical
						needs at every stage of life. From preventive care and health screenings to diagnosis and
						treatment of acute and chronic conditions, our experienced team is committed to providing
						personalized and compassionate care. We prioritize your well-being, focusing on preventive
						measures to promote long-term health and wellness. Whether you need a routine check-up,
						vaccinations, or specialized treatment, we’re here to support you on your health journey.
					</p>

					<div class="row">
						<div class="col-md-6">
							<div class="service-img mt-5 mb-5">
								<img src="images/homecare6.png" class="img-fluid" alt="">
							</div>
						</div>
						<div class="col-md-6">
							<div class="service-img mt-5 mb-5">
								<img src="images/homecare5.png" class="img-fluid" alt="">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--//section-->


	<!--section-->
	<div class="section mb-3 mt-4">
		<div class="container">
			<div class="title-wrap text-center">
				<h2 class="h1">Specialist Health Care Practice</h2>
				<div class="h-decor"></div>
			</div>
			<div class="text-center">
				<p class="max-900 text-center">Our dentists are committed to improving your general health and restoring your smile.
					We are a specialist dental practice also offering the best and most affordable dental implants for
					your oral health and rehabilitation. Make a FREE dental implants consultation and assessment for a
					personal treatment plan and meet our friendly and professional staff.</p>
				<!-- <a href="#" class="btn mt-3" data-toggle="modal" data-target="#modalBookingForm"><i class="icon-right-arrow"></i><span>Booking a visit</span><i class="icon-right-arrow"></i></a> -->
			</div>
		</div>
	</div>
	<!--//section-->



	<div class="section mt-5 mb-3">
		<div class="container">
			<div class="banner-call">
				<div class="row no-gutters">
					<div class="col-md-7 d-flex align-items-center">
						<div class="text-center w-100">
							<h2>Want the Same <span class="theme-color">Wonderful Smile?</span></h2>
							<div class="h-decor"></div>
							<p class="mt-sm-1 mt-lg-4 text-left text-sm-center">We provide advanced, trusted dental care
								delivered by a dedicated team in our modern practice.</p>
							<div class="mt-2 mt-lg-4 text-center">
								<a href="#" class="banner-call-phone"><i class="icon-telephone"></i>01-413-740-687</a>
							</div>
						</div>
					</div>
					<div class="col-md-5 col-lg-5 mt-3 mt-md-0 text-center text-lg-left">
						<img src="images/content/banner-callus-2.jpg" alt="" class="shift-right">
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php
include ('footer.php');
?>