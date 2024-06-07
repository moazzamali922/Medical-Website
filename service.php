<?php
include('header.php');

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
						<div class="google-map"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d40119.804311386426!2d-97.32055794896301!3d37.64364017354126!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x87bae4ec254beb5f%3A0x410df48edd2f5ede!2sGraceMed%20Jardine%20Family%20Clinic!5e0!3m2!1sen!2sua!4v1579853082410!5m2!1sen!2sua"></iframe></div>
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
						<div class="text-right btn-wrap mt-2"><a href="#" class="btn btn-sm btn-fill"><i class="icon-right-arrow"></i><span>Calculator</span><i class="icon-right-arrow"></i></a> <a href="#" class="btn btn-sm btn-fill"><i class="icon-right-arrow"></i><span>Details</span><i class="icon-right-arrow"></i></a></div>
					</div>
				</div>
				<div class="col">
					<a href="#" class="link">
						<i class="icon-emergency-call"></i><span>Emergency Case</span></a>
					<div class="link-drop">
						<h5 class="link-drop-title"><i class="icon-emergency-call"></i>Emergency Case</h5>
						<p>Emergency dental care may be needed if you have had a blow to the face, lost a filling, or cracked a tooth. </p>
						<ul class="icn-list">
							<li><i class="icon-telephone"></i><span class="phone">1-800-267-0000<br>1-800-267-0001</span>
							</li>
							<li><i class="icon-black-envelope"></i><a href="mailto:info@besthotel-email.com">info@besthotel-email.com</a></li>
						</ul>
						<p class="text-right mt-2"><a href="#" class="btn btn-sm btn-hover-fill">Our Contacts</a></p>
					</div>
				</div>
				<div class="col col-close"><a href="#" class="js-quickLinks-close"><i class="icon-top" data-toggle="tooltip" data-placement="top" title="Close panel"></i></a></div>
			</div>
		</div>
		<div class="quickLinks-open js-quickLinks-open"><span data-toggle="tooltip" data-placement="left" title="Open panel">+</span></div>
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
					<a href="services">Services</a>
					<span>White Fillings</span>
				</div>
			</div>
		</div>
	</div>
	<!--//section-->
	<!--section-->
	<div class="section page-content-first">
		<div class="container mt-6">
			<div class="row">
				<div class="col-md">
					<ul class="services-nav flex-column flex-nowrap">
						<li class="nav-item">
							<a class="nav-link" href="#submenu1" data-toggle="collapse" data-target="#submenu1">Cosmetic Dentistry</a>
							<div class="collapse show" id="submenu1">
								<ul class="flex-column nav">
									<li class="nav-item"><a class="nav-link" href="#">Orthodontics</a></li>
									<li class="nav-item"><a class="nav-link active" href="#">White Fillings</a></li>
									<li class="nav-item"><a class="nav-link" href="#">Porcelain Veneers</a></li>
									<li class="nav-item"><a class="nav-link" href="#">Teeth Whitening</a></li>
									<li class="nav-item"><a class="nav-link" href="#">Inlays & Onlays</a></li>
								</ul>
							</div>
						</li>
						<li class="nav-item"><a class="nav-link" href="#">General Dentistry</a></li>
						<li class="nav-item"><a class="nav-link" href="#">Children`s Dentistry</a></li>
						<li class="nav-item"><a class="nav-link" href="#">Dental Implants</a></li>
						<li class="nav-item"><a class="nav-link" href="#">Orthodontics</a></li>
						<li class="nav-item"><a class="nav-link" href="#">Dental Emergency</a></li>
						<li class="nav-item"><a class="nav-link" href="#">Periodontics</a></li>
						<li class="nav-item"><a class="nav-link" href="#">Dental Surgery</a></li>
						<li class="nav-item"><a class="nav-link" href="#">Dental Crowns & Bridges</a></li>
					</ul>
					<div class="row d-flex flex-column flex-sm-row flex-md-column mt-3">
						<div class="col-auto col-sm col-md-auto">
							<div class="contact-box contact-box-1">
								<h5 class="contact-box-title">Working Time</h5>
								<ul class="icn-list">
									<li><i class="icon-clock"></i>Mon-Thu 08:00 - 20:00
										<br>Friday 07:00 - 22:00
										<br>Saturday 08:00 - 18:00
									</li>
								</ul>
							</div>
						</div>
						<div class="col-auto col-sm col-md-auto">
							<div class="contact-box contact-box-2">
								<h5 class="contact-box-title">Contact Info</h5>
								<ul class="icn-list">
									<li><i class="icon-telephone"></i>
										<div class="d-flex flex-wrap">
											<span>Phone:&nbsp;&nbsp;</span>
											<span>1-800-267-0000<br>
												1-800-267-0001</span></div>
									</li>
									<li><i class="icon-black-envelope"></i><a href="mailto:info@dentco.net">info@dentco.net</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="question-box mt-3">
						<h5 class="question-box-title">Ask the Experts</h5>
						<form id="questionForm" method="post" novalidate>
							<div class="successform">
								<p>Your message was sent successfully!</p>
							</div>
							<div class="errorform">
								<p>Something went wrong, try refreshing and submitting the form again.</p>
							</div>
							<input type="text" class="form-control" name="name" placeholder="Your name*">
							<input type="text" class="form-control" name="email" placeholder="E-mail*">
							<input type="text" class="form-control" name="phone" placeholder="Phone">
							<textarea class="form-control" name="message" placeholder="Question*"></textarea>
							<button type="submit" class="btn btn-sm btn-hover-fill mt-15"><i class="icon-right-arrow"></i><span>Ask Now</span><i class="icon-right-arrow"></i></button>
						</form>
					</div>
				</div>
				<div class="col-md-8 col-lg-9 mt-4 mt-md-0">
					<div class="title-wrap">
						<h1>White Fillings</h1></div>
					<div class="service-img">
						<img src="images/content/service-big-01.jpg" class="img-fluid" alt="">
					</div>
					<div class="pt-2 pt-md-4">
						<p>One option to improve the cosmetic look of your smile is to have your metal-coloured fillings replaced with tooth-coloured or 'white' fillings. This is a safe procedure that entails one of our dentists removing any decay from your tooth, taking out the metal or amalgam filling and placing a tooth coloured filling instead. The new filling is made from a very hard substance and will withstand the forces in your mouth when you bite and chew over a long period of time. This will allow you to smile without a metallic glint in sight, giving your teeth a more natural appearance overall.</p>
						<p>As dentists we believe prevention is always better than cure and will always encourage and help you to look after your teeth so you don't develop tooth decay in the first place. If you do have decay and need a filling then we recommend white fillings as a good solution that is both aesthetic and functional.</p>
						<div class="mt-3 mt-lg-6"></div>
						<h3>Why Dental Fillings Are Important</h3>
						<div class="mt-0 mt-lg-4"></div>
						<p>Patients often experience tooth decay because of inappropriate nutritional habits, poor oral care at home or genetics leading to many cavities. Before creating a treatment plan, the dental professional will extensively review the patient’s medical history and their daily routine in efforts to detect any underlying issues such as medical ailments that may be the reason for exaggerated decay formation. According to collected information, a proper course of treatment is chosen including suitable dental materials most beneficial to the individual needs of each patient.</p>
						<div class="mt-3 mt-lg-6"></div>
						<h3>The Procedure of Tooth Filling</h3>
						<div class="mt-0 mt-lg-4"></div>
						<p>Although each procedure varies subtly, there are some basic guidelines to treat cavities, and they are followed by all dental professionals.</p>
						<div class="mt-3"></div>
						<ul class="numbered-list-lg">
							<li>The patient is anesthetized using local anesthesia such as Carbocaine for short procedures, Lidocaine for medium length sessions, and Marcaine for multiple fillings. Patients with feelings of anxiety may be offered Nitrous Oxide (laughing gas) for the duration of the treatment. Only in extreme cases, the patient is given IV sedation or general anesthesia and may be referred to a more suitable dental setting such as a hospital.</li>
							
							<li>The area to be treated is secured by latex sheet that protects the tooth and keeps it dry during the procedure. It also prevents the debris from entering the oral region keeping the patient comfortable. For multiple fillings, when the treatment may require extended period of time, a bite block is used to help the patient keep their mouth open in a relaxed position without any strain on the jaw muscles.</li>
							
							<li>In case of composite fillings, the shade is chosen to closely mimic the appearance of the surrounding dentition.</li>
							
							<li>The decay is removed using a high-speed handpiece, slow-speed handpiece, laser or the combination of all three devices. The prepared surface may be etched with an appropriate solution to remove any remaining bacteria and create a porous layer for adhesive purposes. Amalgam or resin material is placed in small increments using hand instruments. The biting surface is then checked and adjusted as necessary.</li>
						</ul>
						<div class="mt-3"></div>
						<p>Filling placement is necessary to treat cavities and prolong the longevity of the natural teeth. With today’s technology continuously improving, new methods are developed to benefit the patients and ensure their positive oral health for a lifetime.</p>
						<div class="mt-3 mt-md-5 px-1 pt-1 pb-15 pt-md-2 px-md-4 bg-grey">
							<div id="faqAccordion1" class="faq-accordion" data-children=".faq-item">
								<div class="faq-item">
									<a data-toggle="collapse" data-parent="#faqAccordion1" href="#faqItem1" aria-expanded="true"><span>1.</span>Why do I need a Filling?</a>
									<div id="faqItem1" class="collapse show faq-item-content" role="tabpanel">
										<div>
											<p>If the cavity isn’t repaired, this cavity will continue to expand—eventually entering into your nerve canal. This can be excruciatingly painful. However, it can also lead to dire problems such as abscess or infection. Replacing old fillings or fixing chipped teeth can also be required. The most important reason to fix your cavity early on is to avoid a painful and costly root canal.</p>
										</div>
									</div>
								</div>
								<div class="faq-item">
									<a data-toggle="collapse" data-parent="#faqAccordion1" href="#faqItem2" aria-expanded="false" class="collapsed"><span>2.</span>Composite Filling</a>
									<div id="faqItem2" class="collapse faq-item-content" role="tabpanel">
										<div>
											<p>Doloremque nihil sed ratione ipsa molestiae maxime necessitatibus dolorem in, quasi delectus minima tempora! Tempora quo beatae, id temporibus est sint veritatis suscipit ullam ipsa facilis, sunt dignissimos, perferendis placeat, reiciendis quos ad officia mollitia velit explicabo? Illum nobis minus, doloremque tempore animi tenetur, harum sint quas voluptatum neque tempora dolorum laborum nisi suscipit vel nesciunt, fuga eos iusto maiores corrupti quaerat, deserunt modi culpa totam? Iure voluptates esse, laborum quos similique accusamus neque corporis reiciendis saepe.</p>
										</div>
									</div>
								</div>
								<div class="faq-item">
									<a data-toggle="collapse" data-parent="#faqAccordion1" href="#faqItem3" aria-expanded="false" class="collapsed"><span>3.</span>How do I know if my teeth are healthy?</a>
									<div id="faqItem3" class="collapse faq-item-content" role="tabpanel">
										<div>
											<p>Nulla, ab quis perferendis tempore natus soluta, saepe, ullam ducimus at dignissimos nihil maiores! Perspiciatis pariatur itaque id sunt perferendis veritatis, adipisci quam voluptatum facilis. Similique saepe aspernatur cumque esse.</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--//section-->
</div>
<?php
include('footer.php');

?>