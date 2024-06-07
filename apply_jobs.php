<?php
include ('header.php');
$currentPage = 'apply_jobs';
?>
<!--//header-->
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
                        <p class="text-right mt-2"><a href="#" class="btn btn-sm btn-hover-fill">Our Contacts</a></p>
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
                    <a href="#">Home</a>
                    <span>Career Form </span>
                </div>
            </div>
        </div>
    </div>
    <!--//section-->

    <div class="mt-3 btn-group_custom" role="group" aria-label="Basic outlined example">
  <a href="apply_jobs" class="btn-career <?php echo $currentPage == 'apply_jobs' ? 'active-button' : ''; ?>">Career Form</a>
  <a href="client.php" class="btn-client <?php echo $currentPage == 'client' ? 'active-button' : ''; ?>">Client Form</a>
</div>



   <!--section-->
<div class="section page-content-first">
    <div class="container">
        <div class="title-wrap text-center position-relative">
            <div class="h-sub theme-color">Fill Your Career Form</div>
            <h1>Career Form</h1>
            <div class="h-decor"></div>
            <div class="title-button-right"><a href="#" class="btn"><i class="icon-right-arrow"></i><span><img
                            src="images/paypal-logo.png" alt="">&nbsp;Career Form</span><i
                        class="icon-right-arrow"></i></a></div>
        </div>
        <div class="text-center max-730 mx-auto">
            <p>Explore your passions, chart your course, and set sail towards a fulfilling career journey. Dare to
                dream, and let your aspirations guide your path to success.</p>
        </div>
        <div class="form-container">
            <form action="backend/function.php" method="POST" enctype="multipart/form-data">


                <!-- Personal Information -->
                <div class="form-row">
                    <div class="col">
                        <h6>Personal Information</h6>
                        <input type="text" class="form-control mb-3" name="full-name" placeholder="Full Name" required>
                        <input type="email" class="form-control mb-3" name="email" placeholder="Email" required>
                        <input type="tel" class="form-control mb-3" name="phone" placeholder="Phone" required>
                        <input type="text" class="form-control mb-3" name="address" placeholder="Address" required>
                    </div>
                </div>

                <!-- Educational Background -->
                <div class="form-row">
                    <div class="col">
                        <h6>Educational Background</h6>
                        <input type="text" class="form-control mb-3" name="degree" placeholder="Degree" required>
                        <input type="text" class="form-control mb-3" name="institution" placeholder="Institution"
                            required>
                        <input type="text" class="form-control mb-3" name="certifications"
                            placeholder="Certifications">
                    </div>
                </div>

                <!-- Employment History -->
                <div class="form-row">
                    <div class="col">
                        <h6>Employment History</h6>
                        <input type="text" class="form-control mb-3" name="job-position" placeholder="Job Position"
                            required>
                        <input type="text" class="form-control mb-3" name="responsibilities"
                            placeholder="Responsibilities" required>
                        <input type="text" class="form-control mb-3" name="duration"
                            placeholder="Duration of Employment" required>
                    </div>
                </div>

                <!-- Skills and Abilities -->
                <div class="form-row">
                    <div class="col">
                        <h6>Skills and Abilities</h6>
                        <input type="text" class="form-control mb-3" name="technical-skills"
                            placeholder="Technical Skills">
                        <input type="text" class="form-control mb-3" name="soft-skills" placeholder="Soft Skills">
                        <input type="text" class="form-control mb-3" name="languages"
                            placeholder="Languages Spoken">
                    </div>
                </div>

                <!-- Career Objectives -->
                <div class="form-row">
                    <div class="col">
                        <h6>Career Objectives</h6>
                        <textarea class="form-control mb-3" name="career-objectives"
                            placeholder="Short-term and long-term career goals"></textarea>
                    </div>
                </div>

                <!-- References -->
                <div class="form-row">
                    <div class="col">
                        <h6>References</h6>
                        <input type="text" class="form-control mb-3" name="reference-name" placeholder="Full Name">
                        <input type="email" class="form-control mb-3" name="reference-email" placeholder="Email">
                        <input type="tel" class="form-control mb-3" name="reference-phone" placeholder="Phone">
                    </div>
                </div>

                <!-- Additional Information -->
                <div class="form-row">
                    <div class="col">
                        <h6>Additional Information</h6>
                        <textarea class="form-control mb-3" name="additional-info"
                            placeholder="Any other relevant details or achievements"></textarea>
                    </div>
                </div>

                <!-- Upload CV -->
                <div class="form-row">
                    <div class="col">
                        <h6>Upload CV</h6>
                        <input type="file" class="form-control-file mb-3" name="cv-file[]" accept=".pdf,.doc,.docx" required>
                           
                    </div>
                </div>

                <div class="text-sm-center mt-15">
                    <label class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input">
                        <span class="custom-control-indicator"></span>
                        <span class="custom-control-description">I agree to have my information stored for the
                            purposes of confirming my Career Form.</span>
                    </label>
                </div>
                <div class="text-center mt-3 mb-3 mt-lg-4">
                    <button type="submit" class="btn"><i class="icon-right-arrow"></i><span>Submit</span><i
                            class="icon-right-arrow"></i></button>
                </div>
            </form>
        </div>
    </div>
</div>
<!--//section -->

</div>
<!--footer-->


<?php
include ('footer.php');
?>