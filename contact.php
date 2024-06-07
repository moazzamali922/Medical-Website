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
		<div class="contact-map">
			<iframe
				src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5581.156297089485!2d-4.250142512666157!3d55.86091667384822!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4888443a0cdd9635%3A0x3ba71b97b8a1de7d!2sGlasgow%2C%20UK!5e0!3m2!1sen!2sua!4v1579853082410!5m2!1sen!2sua"
				allowfullscreen=""></iframe>
		</div>
	</div>
	<!--//section-->
	<!--section-->
	<div class="section mt-0 bg-grey">
		<div class="container">
			<div class="row">
				<div class="col-md">
					<div class="title-wrap">
						<h5>Location</h5>
						<div class="h-decor"></div>
					</div>
					<ul class="icn-list-lg">
						<li><i class="icon-placeholder2"></i> Careround 24
							<br>Glasgow, United Kingdom
						</li>
					</ul>
				</div>
				<div class="col-md mt-3 mt-md-0">
					<div class="title-wrap">
						<h5>Contact Info</h5>
						<div class="h-decor"></div>
					</div>
					<ul class="icn-list-lg">
						<li><i class="icon-telephone"></i>Phone: <span class="theme-color"><span
									class="text-nowrap">01-413-740-687</span>
							</span>

						</li>
						<li><i class="icon-black-envelope"></i><a
								href="mailto:info@careround24.com">info@careround24.com</a></li>
					</ul>
				</div>
				<div class="col-md mt-3 mt-md-0">
					<div class="title-wrap">
						<h5>Working Time</h5>
						<div class="h-decor"></div>
					</div>
					<ul class="icn-list-lg">
						<li><i class="icon-clock"></i>
							<div>
								<div class="d-flex"><span>Mon-Thu</span><span class="theme-color">08:00 - 20:00</span>
								</div>
								<div class="d-flex"><span>Friday</span><span class="theme-color">07:00 - 22:00</span>
								</div>
								<div class="d-flex"><span>Saturday</span><span class="theme-color">08:00 - 18:00</span>
								</div>
							</div>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<!--//section-->
	<!--section-->
	<div class="section mb-5">
		<div class="container">
			<div class="row">
				<div class="col-md col-lg-5">
					<div class="pr-0 pr-lg-8">
						<div class="title-wrap">
							<h2>We Are Here to Help</h2>
							<div class="h-decor"></div>
						</div>
						<div class="mt-2 mt-lg-4">
							<p>Reach out to Careround 24 for any questions or support. Whether you need personalised
								care or have queries, our team is ready to assist you. Connect with us today, and let’s
								discuss how we can support your needs. </p>
							<p class="p-sm">Fields marked with a * are required.</p>
						</div>
						<div class="mt-2 mt-md-5"></div>
						<h5>Stay Connected</h5>
						<div class="content-social mt-15">
							<a href="https://www.facebook.com/" target="blank" class="hovicon"><i
									class="icon-facebook-logo"></i></a>
							<a href="https://www.twitter.com/" target="blank" class="hovicon"><i
									class="icon-twitter-logo"></i></a>
							<a href="https://plus.google.com/" target="blank" class="hovicon"><i
									class="icon-google-logo"></i></a>
							<a href="https://www.instagram.com/" target="blank" class="hovicon"><i
									class="icon-instagram"></i></a>
						</div>
					</div>
				</div>
				<div class="col-md col-lg-6 mt-4 mt-md-0">
					<form action="backend/contact-form.php" class="contact-form" method="post">
						<div>
							<input type="text" class="form-control" name="name" placeholder="Your name*">
						</div>
						<div class="mt-15">
							<input type="text" class="form-control" name="email" placeholder="Email*">
						</div>
						<div class="mt-15">
							<input type="text" class="form-control" name="phone" placeholder="Your Phone">
						</div>
						<div class="mt-15">
							<textarea class="form-control" name="message" placeholder="Message"></textarea>
						</div>
						<div class="mt-3">
							<button type="submit" class="btn btn-hover-fill"><i class="icon-right-arrow"></i><span>Send
									message</span><i class="icon-right-arrow"></i></button>
						</div>
					</form>

				</div>
			</div>
		</div>
	</div>
	<!--//section-->
</div>
<?php
include ('footer.php');
?>