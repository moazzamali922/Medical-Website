<?php
include 'header.php';
$currentPage = 'faq';
?>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> -->
<style>
  .card {
    background-color: #ffffff;
    border: 1px solid #d1dbe5;
    margin-bottom: 10px;
  }

  .card-header {
    background-color: #e3f2fd;
    cursor: pointer;
  }

  .card-header button {
    color: #333333;
    font-size: 15px;
    font-weight: bold;
  }

  @media (max-width:1000px) {
    .card-header button {
      font-size: 9px;
    }
  }

  .card-body {
    color: #333333;
  }
</style>

<body>
  <div class="mt-3 btn-group_custom" role="group" aria-label="Basic outlined example">
    <a href="faq" class="btn-career <?php echo $currentPage == 'faq' ? 'active-button' : ''; ?>">Career </a>
    <a href="faq_client" class="btn-client <?php echo $currentPage == 'faq_client' ? 'active-button' : ''; ?>">Client
    </a>
  </div>
  <div class="container mb-5">
    <h2 class="mt-5 mb-3">Frequently Asked Questions</h2>
    <div class="mt-3 mt-md-5 px-1 pt-1 pb-15 pt-md-2 px-md-4 bg-grey">
      <div id="faqAccordion1" class="faq-accordion" data-children=".faq-item">
        <div class="faq-item">
          <a  data-toggle="collapse" data-parent="#faqAccordion1" href="#faqItem1"
            aria-expanded="false"><span>1.</span> Is it my choice who I take care of?</a>
          <div id="faqItem1" class="collapse faq-item-content" role="tabpanel">
            <div>
              <p>Absolutely, you are in charge of your own ship! You get to pick the hours you wish to work.</p>
            </div>
          </div>
        </div>
        <div class="faq-item">
          <a data-toggle="collapse" data-parent="#faqAccordion1" href="#faqItem2" aria-expanded="false"
            class="collapsed"><span>2.</span> Do I require prior experience?</a>
          <div id="faqItem2" class="collapse faq-item-content" role="tabpanel">
            <div>
              <p>To become a Careround 24 carer, you must be over 21 and have worked as a carer in the UK for at least
                two years. </p>
            </div>
          </div>
        </div>
        <div class="faq-item">
          <a  data-toggle="collapse" data-parent="#faqAccordion1" href="#faqItem3"
            aria-expanded="false" class="collapsed"><span>3.</span> What happens if I am trying to find work as a
            personal assistant?</a>
          <div id="faqItem3" class="collapse faq-item-content" role="tabpanel">
            <div>
              <p>Careround 24 offers carer and personal assistant jobs; be sure to include this skill and any relevant
                experience in your profile. </p>
            </div>
          </div>
        </div>
        <div class="faq-item">
          <a data-toggle="collapse" data-parent="#faqAccordion1" href="#faqItem4" aria-expanded="false"
            class="collapsed"><span>4.</span> Is it possible for me to work for my employer in addition to my current
            employer?</a>
          <div id="faqItem4" class="collapse faq-item-content" role="tabpanel">
            <div>
              <p> It is possible for you to work on the Careround 24 platform and maintain your current employment. In
                order to work with Careround 24, you must continue to register as a self-employed individual.</p>
            </div>
          </div>
        </div>
        <div class="faq-item">
          <a  data-toggle="collapse" data-parent="#faqAccordion1" href="#faqItem5"
            aria-expanded="false" class="collapsed"><span>5.</span> Do I need a car or a driver's licence?</a>
          <div id="faqItem5" class="collapse faq-item-content" role="tabpanel">
            <div>
              <p>To work as a Careround 24 carer, you are not required to own a car or have a driver's licence. But if
                your jobs are in more rural areas, you might want to use a car to get there.</p>
            </div>
          </div>
        </div>
        <div class="faq-item">
          <a data-toggle="collapse" data-parent="#faqAccordion1" href="#faqItem6" aria-expanded="false"
            class="collapsed"><span>6.</span>How do carers feel about using Careround 24?</a>
          <div id="faqItem6" class="collapse faq-item-content" role="tabpanel">
            <div>
              <p> Our many positive Trustpilot reviews, left by carers who use our platform, really highlight the
                advantages of working with Careround 24, aside from the fact that carers earn 25% more on average when
                working with us (after tax and our fees). These benefits include the following:
                Feeling happy and proud
                Being self-employed
                Careround 24 carer support services
                The Careround24Carer app and website
                Easy admin and invoices</p>
            </div>
          </div>
        </div>
        <div class="faq-item">
          <a  data-toggle="collapse" data-parent="#faqAccordion1" href="#faqItem7"
            aria-expanded="false" class="collapsed"><span>7.</span> What makes Careround 24 the best option?</a>
          <div id="faqItem7" class="collapse faq-item-content" role="tabpanel">
            <div>
              <p> Choice:
                You get to decide who you look after, when you work, and where you work with Careround 24. We promote
                your profile so you can select from a variety of clients and positions. This decision helps you attain
                work-life balance and guarantees that you have complete control over your lifestyle and career.

                Better work-life balance:
                Working as a Careround 24 carer will allow you to schedule your work around your interests outside of
                work, your family, and your hobbies. This flexibility enables you to take the essential breaks to unwind
                or interact with others.

                Earn more:
                In comparison to traditional care agencies, carers who use Careround 24 typically earn 25% more. Our
                transparent fee of 12.5% + VAT is the lowest in the industry, and there are no sign-up costs.

                Service agreements and invoices:
                Our app simplifies administration. All you need to do is enter the client's information, along with the
                name, address, and services received. Before working with a client, a service agreement and invoice must
                be made.

                Our App:
                The Careround 24 Carer app not only makes admin easy, it also makes finding care work quicker and
                simpler. You can locate clients, connect with those who are interested in your profile, and schedule the
                time and location of care with just a few swipes and taps.

                Support:
                When using the Careround 24 platform, our carer support team is available to assist you if you need it.
                You can learn more about being a self-employed carer by reading our extensive library of helpful blogs.
              </p>
            </div>
          </div>
        </div>
        <div class="faq-item">
          <a data-toggle="collapse" data-parent="#faqAccordion1" href="#faqItem8" aria-expanded="false"
            class="collapsed"><span>8.</span> What sets Careround 24 apart from a traditional care provider?</a>
          <div id="faqItem8" class="collapse faq-item-content" role="tabpanel">
            <div>
              <p> Careround 24 is an online platform for self-employed carers. Our creative application of technology
                has given you the freedom to choose and manage who you provide care for and how many hours you work as a
                carer. Every day, various carers are usually sent in by care agencies. You have total control and the
                chance to attract recurring clients of your choosing when you use Careround 24.</p>
            </div>
          </div>
        </div>
        <div class="faq-item">
          <a  data-toggle="collapse" data-parent="#faqAccordion1" href="#faqItem9"
            aria-expanded="false" class="collapsed"><span>9.</span>How can I sign up for Careround 24?</a>
          <div id="faqItem9" class="collapse faq-item-content" role="tabpanel">
            <div>
              <p>Click here to sign up to be a Careround 24 carer. (Create a link)
                After completing these three easy steps, you can be approved as a Careround 24 carer:
                Step 1: Download the Careround 24 Carer app and create an account
                Step 2: Complete your profile.
                Step 3: Book your online approval meeting with one of our friendly recruitment teams!</p>
            </div>
          </div>
        </div>
        <div class="faq-item">
          <a data-toggle="collapse" data-parent="#faqAccordion1" href="#faqItem10" aria-expanded="false"
            class="collapsed"><span>10.</span>How do I get on the platform?</a>
          <div id="faqItem10" class="collapse faq-item-content" role="tabpanel">
            <div>
              <p> As a carer for Careround 24, you will require:
                o An improved DBS, PVG, or Access NI (updated via the Update Service or within the last three years)
                o Verification of your eligibility to work in the UK
                o Two references; they should both be based in the United Kingdom. We prefer these to be care-related
                where possible.</p>
            </div>
          </div>
        </div>
        <div class="faq-item">
          <a  data-toggle="collapse" data-parent="#faqAccordion1" href="#faqItem11"
            aria-expanded="false" class="collapsed"><span>11.</span> What occurs in the meeting I have for online
            approval?</a>
          <div id="faqItem11" class="collapse faq-item-content" role="tabpanel">
            <div>
              <p> Prior to joining Careround 24, each carer on the platform will participate in an online approval
                meeting with a member of our friendly recruitment team. They will verify your right to work in the UK,
                your DBS/PVG, and any qualifications you list on your profile (which must be supported by certificates
                you upload and we approve).</p>
            </div>
          </div>
        </div>
        <div class="faq-item">
          <a data-toggle="collapse" data-parent="#faqAccordion1" href="#faqItem12" aria-expanded="false"
            class="collapsed"><span>12.</span> What sort of picture is required for my profile?</a>
          <div id="faqItem12" class="collapse faq-item-content" role="tabpanel">
            <div>
              <p> You should upload a clear, well-lit headshot as your profile photo. If you look friendly and have a
                smile on your face, potential clients are more likely to click on your profile.
                Additionally, it must be a current, high-quality picture of you. For this reason, we advise you to
                change your photo at least once a year. For instance, you might want to update your photo to reflect
                your new hairstyle if you change your appearance. If you have a new photo on your profile, clients are
                more likely to read it.
                Your profile photo should:
                o Make you look friendly and smiley
                o Have good lighting
                o Be in focus
                o Have a clear, uncluttered background</p>
            </div>
          </div>
        </div>
        <div class="faq-item">
          <a  data-toggle="collapse" data-parent="#faqAccordion1" href="#faqItem13"
            aria-expanded="false" class="collapsed"><span>13.</span>If I am having problems uploading documents, what
            should I do? </a>
          <div id="faqItem13" class="collapse faq-item-content" role="tabpanel">
            <div>
              <p> If you experience any difficulties uploading documents, please contact our carer support team at
                _______________________.
              </p>
            </div>
          </div>
        </div>
        <div class="faq-item">
          <a data-toggle="collapse" data-parent="#faqAccordion1" href="#faqItem14" aria-expanded="false"
            class="collapsed"><span>14.</span> What should I do if my qualifications are not shown on my profile?</a>
          <div id="faqItem14" class="collapse faq-item-content" role="tabpanel">
            <div>
              <p> You must have uploaded a clear, readable photo of your qualification certificate to your profile in
                order for it to appear</p>
            </div>
          </div>
        </div>
        <div class="faq-item">
          <a  data-toggle="collapse" data-parent="#faqAccordion1" href="#faqItem15"
            aria-expanded="false" class="collapsed"><span>15.</span> How do I write carer bio?</a>
          <div id="faqItem15" class="collapse faq-item-content" role="tabpanel">
            <div>
              <p> You can get in touch with our helpful staff, and they will assist you in creating the greatest carer
                bio.</p>
            </div>
          </div>
        </div>
        <div class="faq-item">
          <a data-toggle="collapse" data-parent="#faqAccordion1" href="#faqItem16" aria-expanded="false"
            class="collapsed"><span>16.</span> How many referees are necessary?</a>
          <div id="faqItem16" class="collapse faq-item-content" role="tabpanel">
            <div>
              <p> Two references are required, and they both have to be based in the United Kingdom. The best candidates
                to serve as your referees are those for whom you have previously rendered care.
                Friends and family are not acceptable references.</p>
            </div>
          </div>
        </div>
        <div class="faq-item">
          <a  data-toggle="collapse" data-parent="#faqAccordion1" href="#faqItem17"
            aria-expanded="false" class="collapsed"><span>17.</span> Can I sign up with Careround 24 if I have a T4
            /student visa?</a>
          <div id="faqItem17" class="collapse faq-item-content" role="tabpanel">
            <div>
              <p> No, you are unable to register as a self-employed carer on the platform, which is a prerequisite, if
                you hold a T4 or a student visa.</p>
            </div>
          </div>
        </div>
        <div class="faq-item">
          <a data-toggle="collapse" data-parent="#faqAccordion1" href="#faqItem18" aria-expanded="false"
            class="collapsed"><span>18.</span>Which area of the UK do you cover?</a>
          <div id="faqItem18" class="collapse faq-item-content" role="tabpanel">
            <div>
              <p> We are active in every region of the United Kingdom.</p>
            </div>
          </div>
        </div>
        <div class="faq-item">
          <a  data-toggle="collapse" data-parent="#faqAccordion1" href="#faqItem19"
            aria-expanded="false" class="collapsed"><span>19.</span> What is the purpose of adding a video to my
            profile?</a>
          <div id="faqItem19" class="collapse faq-item-content" role="tabpanel">
            <div>
              <p> The Careround 24 Carer app now allows you to add a one-minute introduction video to your profile. If a
                carer uploads a video to their profile, they increase their chances of landing a job by three times</p>
            </div>
          </div>
        </div>
        <div class="faq-item">
          <a data-toggle="collapse" data-parent="#faqAccordion1" href="#faqItem20" aria-expanded="false"
            class="collapsed"><span>20.</span> How can I make a video for my profile? </a>
          <div id="faqItem20" class="collapse faq-item-content" role="tabpanel">
            <div>
              <p> Your script: Make sure you have prepared your speech in advance before you begin filming your video.
                Here are a few prompts to remember:
                1 How long have you been a carer?
                2 Are you an expert in a specific kind of care?
                3 Why do you enjoy being a carer?
                4 What are your hobbies?
                Kindly refrain from providing any sensitive personal data or information that is subject to change, such
                as precise availability details.
                Please be aware that videos containing personal information, such as your last name, cannot be approved.
                Your video must also not exceed one minute in length.</p>
            </div>
          </div>
        </div>
        <div class="faq-item">
          <a  data-toggle="collapse" data-parent="#faqAccordion1" href="#faqItem21"
            aria-expanded="false" class="collapsed"><span>21.</span> Should I download the Careround 24 app?</a>
          <div id="faqItem21" class="collapse faq-item-content" role="tabpanel">
            <div>
              <p>Yes, in order to be accepted as a self-employed carer on our platform, you must download the Careround
                24 Carer app.
                You will have full access to all of Careround 24's features as soon as you download the Careround 24
                Carer app and set up your profile on the platform.
                Clients can message you and you can apply for jobs through the jobs board.
                We are working on some amazing new features and will be adding them soon, so please make sure to update
                the app frequently.</p>
            </div>
          </div>
        </div>
        <div class="faq-item">
          <a data-toggle="collapse" data-parent="#faqAccordion1" href="#faqItem22" aria-expanded="false"
            class="collapsed"><span>22.</span> In what way can I add certificates and documents to my account?</a>
          <div id="faqItem22" class="collapse faq-item-content" role="tabpanel">
            <div>
              <p> You will be asked to select appropriate documents while finishing the carer registration process.
                Select the documents you wish to upload and adhere to the instructions.
                The easiest method to add your documents and certificates to your account is to snap a crisp, readable
                picture of them with your phone and upload it straight to your profile through the app.</p>
            </div>
          </div>
        </div>
        <div class="faq-item">
          <a  data-toggle="collapse" data-parent="#faqAccordion1" href="#faqItem23"
            aria-expanded="false" class="collapsed"><span>23.</span> Can I upload files at a later time?</a>
          <div id="faqItem23" class="collapse faq-item-content" role="tabpanel">
            <div>
              <p> Your application can be saved so you can return to it later.
                Once you have registered, you can edit your profile whenever you would like, but any modifications
                (aside from small ones, like adding details about your languages or hobbies) will need to be approved by
                the Careround 24 carer support team.
              </p>
            </div>
          </div>
        </div>
        <div class="faq-item">
          <a data-toggle="collapse" data-parent="#faqAccordion1" href="#faqItem24" aria-expanded="false"
            class="collapsed"><span>24.</span> How does the job board work?</a>
          <div id="faqItem24" class="collapse faq-item-content" role="tabpanel">
            <div>
              <p> To find work, simply log in to the app, navigate to the "find jobs" section, and choose the desired
                job type from the list at the top of the page. You can select "apply for a job" if a job posting matches
                your qualifications.</p>
            </div>
          </div>
        </div>
        <div class="faq-item">
          <a  data-toggle="collapse" data-parent="#faqAccordion1" href="#faqItem25"
            aria-expanded="false" class="collapsed"><span>25.</span> My area does not have any job openings?</a>
          <div id="faqItem25" class="collapse faq-item-content" role="tabpanel">
            <div>
              <p> You may still have clients looking at your profile even if you do not see any jobs nearby, as about
                80% of clients choose to search and message carers directly rather than posting on the jobs board.
                Ensure that your profile is optimised as much as possible. Here are a few strategies for enhancing your
                profile:
                o Replace the headshot on your profile picture with a clear, happy one.
                o Verify that you have uploaded pictures of each of your certifications.
                o Update the experience section of your bio with the abilities you have acquired from recent care jobs.
                o Take advantage of the chance to complete additional carer training! Often, clients search for
                qualified carers.</p>
            </div>
          </div>
        </div>
        <div class="faq-item">
          <a data-toggle="collapse" data-parent="#faqAccordion1" href="#faqItem26" aria-expanded="false"
            class="collapsed"><span>26.</span> Do I need to register as a limited company or as a sole trader?</a>
          <div id="faqItem26" class="collapse faq-item-content" role="tabpanel">
            <div>
              <p> The majority of Careround 24 carers opt to register as sole traders, which denotes that they are the
                only employees of their company.
                With a limited company, the company—even if it only employs one person—has a distinct legal identity
                from its owners.
                There are differences in the process of filing tax returns between these two self-employed statuses.
                You will be required to provide additional information when filing your tax returns if you register as a
                limited company.</p>
            </div>
          </div>
        </div>
        <div class="faq-item">
          <a  data-toggle="collapse" data-parent="#faqAccordion1" href="#faqItem27"
            aria-expanded="false" class="collapsed"><span>27.</span>Does working for Careround 24 require me to be
            self-employed?</a>
          <div id="faqItem27" class="collapse faq-item-content" role="tabpanel">
            <div>
              <p> Yes, you must register as a sole trader, limited company, or limited liability partnership (LLP) and
                be self-employed in order to use the Careround 24 platform.</p>
            </div>
          </div>
        </div>
        <div class="faq-item">
          <a data-toggle="collapse" data-parent="#faqAccordion1" href="#faqItem28" aria-expanded="false"
            class="collapsed"><span>28.</span> How can I file for self-employment?</a>
          <div id="faqItem28" class="collapse faq-item-content" role="tabpanel">
            <div>
              <p> Take a look at the government’s guide on registering as self-employed. Then, you can register as
                self-employed here.</p>
            </div>
          </div>
        </div>
        <div class="faq-item">
          <a  data-toggle="collapse" data-parent="#faqAccordion1" href="#faqItem29"
            aria-expanded="false" class="collapsed"><span>29.</span> How can I obtain my UTR number?</a>
          <div id="faqItem29" class="collapse faq-item-content" role="tabpanel">
            <div>
              <p> You will require a unique taxpayer reference number in order to complete your tax returns. You can get
                one by registering as self-employed online. After that, a UTR number ought to arrive in the mail within
                the next ten days (or twenty-one if you live overseas).</p>
            </div>
          </div>
        </div>
        <div class="faq-item">
          <a data-toggle="collapse" data-parent="#faqAccordion1" href="#faqItem30" aria-expanded="false"
            class="collapsed"><span>30.</span> Why do you need my UTR number?</a>
          <div id="faqItem30" class="collapse faq-item-content" role="tabpanel">
            <div>
              <p> To verify that you are a sole trader registered with HMRC, we require your unique taxpayer reference
                number.</p>
            </div>
          </div>
        </div>
        <div class="faq-item">
          <a  data-toggle="collapse" data-parent="#faqAccordion1" href="#faqItem31"
            aria-expanded="false" class="collapsed"><span>31.</span> What kinds of tasks can a carer for Careround 24
            expect to perform? </a>
          <div id="faqItem31" class="collapse faq-item-content" role="tabpanel">
            <div>
              <p>The tasks in each job can differ. Some of the tasks that you might be required to complete are listed
                below:
                Personal care, which includes taking a shower, putting on clothes, moving furniture, and handling food
                and drink.
                Prompting patients to take their prescribed medications
                Providing first aid
                General housekeeping responsibilities, such as grocery shopping, light maintenance, and gardening
                Travelling with clients for social, domestic, or leisure purposes when they are not at home</p>
            </div>
          </div>
        </div>
        <div class="faq-item">
          <a data-toggle="collapse" data-parent="#faqAccordion1" href="#faqItem32" aria-expanded="false"
            class="collapsed"><span>32.</span> Why should I retrain to be a carer?</a>
          <div id="faqItem32" class="collapse faq-item-content" role="tabpanel">
            <div>
              <p> You can truly impact people's lives and the home care industry, which is in dire need of more carers,
                by taking on the rewarding and challenging role of a carer.
                You get more money using Careround 24 as a self-employed carer than you would working for a traditional
                agency, and you have total flexibility in your work schedule. You get to pick when, where, and for whom
                you work, ensuring that your employment aligns with your other commitments and way of life.</p>
            </div>
          </div>
        </div>
        <div class="faq-item">
          <a  data-toggle="collapse" data-parent="#faqAccordion1" href="#faqItem33"
            aria-expanded="false" class="collapsed"><span>33.</span> Is there a minimum duration for shifts?</a>
          <div id="faqItem33" class="collapse faq-item-content" role="tabpanel">
            <div>
              <p> Indeed, an hour is the minimum shift duration. We think that brief 15- or 30-minute appointments leave
                you with insufficient time to provide a client with the care they need. Our minimum shift duration
                ensures a greater calibre of care and a deeper bond between the client and career.</p>
            </div>
          </div>
        </div>
        <div class="faq-item">
          <a data-toggle="collapse" data-parent="#faqAccordion1" href="#faqItem34" aria-expanded="false"
            class="collapsed"><span>34.</span>After our meeting on the Careround 24 platform, can a client hire me
            directly (offsite)?</a>
          <div id="faqItem34" class="collapse faq-item-content" role="tabpanel">
            <div>
              <p> Cash payments and off-platform payments are not accepted. Your client will be responsible for paying a
                £2,200 + VAT recruitment fee if they wish to work with you directly and conduct business offsite.
                Furthermore, the client and you will be removed from the Careround 24 platform after that.
                For further details, please refer to our terms and conditions. </p>
            </div>
          </div>
        </div>
        <div class="faq-item">
          <a  data-toggle="collapse" data-parent="#faqAccordion1" href="#faqItem35"
            aria-expanded="false" class="collapsed"><span>35.</span>When do I get paid?</a>
          <div id="faqItem35" class="collapse faq-item-content" role="tabpanel">
            <div>
              <p>If the client pays with a card, you should get paid three working days after your shift ends. If the
                customer uses a non-recurring direct debit to make their payment, it could take an extra five to seven
                days. Before agreeing to help, please make sure you have a conversation with the client about any
                potential arrears in Local Authority funding payments if they are receiving them.</p>
            </div>
          </div>
        </div>
        <div class="faq-item">
          <a data-toggle="collapse" data-parent="#faqAccordion1" href="#faqItem36" aria-expanded="false"
            class="collapsed"><span>36.</span> How do I arrange a refund?</a>
          <div id="faqItem36" class="collapse faq-item-content" role="tabpanel">
            <div>
              <p> Please get in touch with us right away if the client needs a refund because you were unable to work
                the shift or the client had to cancel. Please open the relevant invoice, select "contact support," and
                then send us your question.</p>
            </div>
          </div>
        </div>
        <div class="faq-item">
          <a  data-toggle="collapse" data-parent="#faqAccordion1" href="#faqItem37"
            aria-expanded="false" class="collapsed"><span>37.</span>How much will I get paid?</a>
          <div id="faqItem37" class="collapse faq-item-content" role="tabpanel">
            <div>
              <p> On the Careround 24 platform, you establish your own rates as a self-employed carer.
                But we demand that carers make at least £14.06 per hour; care workers must not make less than the London
                Living Wage, which is currently £11.95 per hour.
                To provide you with an approximate idea, the average rate that is charged on the platform is £120 for
                overnight shifts, £1127 for live-in weekly, and £18.83 for hourly visits.</p>
            </div>
          </div>
        </div>
        <div class="faq-item">
          <a data-toggle="collapse" data-parent="#faqAccordion1" href="#faqItem38" aria-expanded="false"
            class="collapsed"><span>38.</span> What are the Careround 24 fees?</a>
          <div id="faqItem38" class="collapse faq-item-content" role="tabpanel">
            <div>
              <p> All shift invoices generated on the platform are subject to a fee of 12.5% + VAT, charged by Careround
                24. Consequently, you will be paid £15.72 per hour if your rate is £18.50 per hour.
                This is among the industry's lowest fees. It includes profile promotion, marketing to thousands of
                customers in the UK, insurance for self-employed carers, a safe payment system, and assistance from our
                kind staff.</p>
            </div>
          </div>
        </div>
        <div class="faq-item">
          <a  data-toggle="collapse" data-parent="#faqAccordion1" href="#faqItem39"
            aria-expanded="false" class="collapsed"><span>39.</span> Why is Careround 24's cost less than that of a
            traditional care agency?</a>
          <div id="faqItem39" class="collapse faq-item-content" role="tabpanel">
            <div>
              <p>Traditional care agencies often take up to 50% of their carers’ wages in fees. Since we are a platform
                for self-employed carers, we have far fewer overheads and are able to pass that saving on to you as
                Carersync carers. As a Carersync carer, you will earn on average 25% more than with an agency.</p>
            </div>
          </div>
        </div>
        <div class="faq-item">
          <a data-toggle="collapse" data-parent="#faqAccordion1" href="#faqItem40" aria-expanded="false"
            class="collapsed"><span>40.</span>How can I create an account on Mango?</a>
          <div id="faqItem40" class="collapse faq-item-content" role="tabpanel">
            <div>
              <p> Mangopay is the method we use to handle carer payments. Here's how to create an account with Mangopay:

                1. Please select your profile picture by clicking the Menu button on the Careround 24 Carer App.
                2. Click "Add details for payments" after a little downward scroll.
                3. Verify the information on the Personal Information page is accurate, then click the next button.
                4. After that, you must upload a copy of your photo ID, such as your passport or driver's licence.
                Please take a picture or upload the file from your phone by clicking the grey upload document box.
                5. You will also need to upload proof of address in the UK if your passport was issued outside of the
                country. (Once uploaded, click next.)
                6. Please enter the information for your bank account (note that we cannot see these).
                7. To save, click "complete."
                8. To let you know if your account has been set up correctly, you will receive an email.
                Note: Your Careround 24 account name and the name on your picture ID must match. Additionally, make sure
                your photo is readable and clear. Mangopay will not accept a photo that is not flawless.
                Kindly get in touch with us at ________________________ if you have any problems.
              </p>
            </div>
          </div>
        </div>
        <div class="faq-item">
          <a  data-toggle="collapse" data-parent="#faqAccordion1" href="#faqItem41"
            aria-expanded="false" class="collapsed"><span>41.</span>Can I get paid in cash?</a>
          <div id="faqItem41" class="collapse faq-item-content" role="tabpanel">
            <div>
              <p> No, cash payments are not accepted. The client can pay you through the Careround 24 platform once you
                have created your service agreement and invoice.</p>
            </div>
          </div>
        </div>
        <div class="faq-item">
          <a data-toggle="collapse" data-parent="#faqAccordion1" href="#faqItem42" aria-expanded="false"
            class="collapsed"><span>42.</span>What is the purpose of the service agreement?</a>
          <div id="faqItem42" class="collapse faq-item-content" role="tabpanel">
            <div>
              <p>You will draft a service agreement as a Careround 24 carer outlining the care that you and your client
                have decided upon.
                Before you work with a client, you should draft a service agreement.
                You have to follow the terms stated in the service agreement.</p>
            </div>
          </div>
        </div>
        <div class="faq-item">
          <a  data-toggle="collapse" data-parent="#faqAccordion1" href="#faqItem43"
            aria-expanded="false" class="collapsed"><span>43.</span> How can I create a client's service agreement?</a>
          <div id="faqItem43" class="collapse faq-item-content" role="tabpanel">
            <div>
              <p>Using the Careround 24 app, you can draft a service agreement. The template is ready for use; all you
                have to do is fill it out and send it to a client, who will confirm that they agree to the terms.</p>
            </div>
          </div>
        </div>
        <div class="faq-item">
          <a data-toggle="collapse" data-parent="#faqAccordion1" href="#faqItem44" aria-expanded="false"
            class="collapsed"><span>44.</span> How do I invoice clients?</a>
          <div id="faqItem44" class="collapse faq-item-content" role="tabpanel">
            <div>
              <p> As soon as you have your service agreement created, you should create your first invoice. The
                Careround 24 app allows you to create invoices. All you need to do is enter your rates and details into
                the already-made template. After that, you can use the app to send this invoice to the client.
                Our recommendation is to generate invoices every week. If you don't, your insurance will lapse.</p>
            </div>
          </div>
        </div>
        <div class="faq-item">
          <a  data-toggle="collapse" data-parent="#faqAccordion1" href="#faqItem45"
            aria-expanded="false" class="collapsed"><span>45.</span>What does the carer’s insurance offer include?</a>
          <div id="faqItem45" class="collapse faq-item-content" role="tabpanel">
            <div>
              <p> Careround 24 carers are insured with ____________________.
                The cover includes (with no excess, nor hidden fees):
                Public Liability
                If you unintentionally cause harm to someone or their property, you could be covered for claims worth up
                to £1,000,000.
                Legal Expenses
                In the unlikely event that you need to go to court, _____________ is able to cover up to £100,000 of the
                expenses.
                Personal Accident
                They will pay up to £7,500 in expenses if you are involved in an accident at work.
                Personal Possessions
                They can offer £250 to cover the cost if a personal item is lost or damaged while they are at work.
                Client Possessions
                In the event that a client loses or damages personal property while working, __________ is able to
                reimburse the expense with £250.
                24/7 Legal & Tax Helpline
                Provided by _______________ - 0____________
                No Excess
                No contribution is necessary in order to submit a valid claim.
                Please contact one of our team at:____________________.com for more information or for the complete
                terms.</p>
            </div>
          </div>
        </div>
        <div class="faq-item">
          <a data-toggle="collapse" data-parent="#faqAccordion1" href="#faqItem46" aria-expanded="false"
            class="collapsed"><span>46.</span> How do I make a claim?</a>
          <div id="faqItem46" class="collapse faq-item-content" role="tabpanel">
            <div>
              <p> Your policy is insured by____________. If you need to register a claim, please:
                Call: ________________with reference to Careround 24.
                Or email: __________________</p>
            </div>
          </div>
        </div>
        <div class="faq-item">
          <a  data-toggle="collapse" data-parent="#faqAccordion1" href="#faqItem47"
            aria-expanded="false" class="collapsed"><span>47.</span>How much does Careround 24 carer insurance cost?</a>
          <div id="faqItem47" class="collapse faq-item-content" role="tabpanel">
            <div>
              <p> We offer self-employed insurance for carers as soon as you begin doing business with a client.
                Making the invoice you send them activates the insurance. The name of our insurance company is ________.
                Please be aware that in order for the insurance to be valid, you must have a current, relevant training
                certificate in order to perform any medical tasks.</p>
            </div>
          </div>
        </div>
        <div class="faq-item">
          <a data-toggle="collapse" data-parent="#faqAccordion1" href="#faqItem48" aria-expanded="false"
            class="collapsed"><span>48.</span>Does my client have to cover the cost of my travel?</a>
          <div id="faqItem48" class="collapse faq-item-content" role="tabpanel">
            <div>
              <p> Although you are not required to charge your clients for your travel expenses, you are free to ask
                them to cover the cost of your trip and have a direct discussion about this with them.
                Travel expenses are typically covered separately by the client.</p>
            </div>
          </div>
        </div>
        <div class="faq-item">
          <a  data-toggle="collapse" data-parent="#faqAccordion1" href="#faqItem49"
            aria-expanded="false" class="collapsed"><span>49.</span>Which business documents must I maintain?</a>
          <div id="faqItem49" class="collapse faq-item-content" role="tabpanel">
            <div>
              <p> You should maintain business records that detail your revenue and expenses in order to be ready for
                tax returns.
                Additionally, you ought to preserve documentation of all the costs you subtract from your taxable
                income, including invoices, bank statements, and receipts.
                You should maintain documentation for your self-employed work and any other jobs you may have, including
                those that pay you on a pay-as-you-earn basis, for your tax returns. </p>
            </div>
          </div>
        </div>
        <div class="faq-item">
          <a data-toggle="collapse" data-parent="#faqAccordion1" href="#faqItem50" aria-expanded="false"
            class="collapsed"><span>50.</span> Where can I find Careround 24’s fee invoices?</a>
          <div id="faqItem50" class="collapse faq-item-content" role="tabpanel">
            <div>
              <p> When we release your payment, we email you an invoice for our fee. This copy is merely for your
                documentation. Please get in touch with ______________________.com if you need these.
              </p>
            </div>
          </div>
        </div>
        <div class="faq-item">
          <a  data-toggle="collapse" data-parent="#faqAccordion1" href="#faqItem51"
            aria-expanded="false" class="collapsed"><span>51.</span> Which costs are deductable from my taxable
            income?</a>
          <div id="faqItem51" class="collapse faq-item-content" role="tabpanel">
            <div>
              <p> You can deduct the following permissible expenses from your taxable profit:
                Costs of apparel, such as uniforms and PPE
                Training courses that are relevant to the work you do
                Insurance, advertising, and subscriptions pertaining to the workplace, such as Careround 24's service
                fees (the amount subtracted from the care rate you charge to cover Careround 24's costs).
                Claim capital allowances, such as equipment you buy for your care work
                Costs associated with phones, stationary, a "work from home" office, and utilities
                Travel expenses, such as those incurred by driving or taking public transport, to and from work and
                throughout the workday
                It is crucial that HMRC approves of all of your expenditures. To find out if an expense can be deducted
                from your taxable profit, speak with an accountant or use the HMRC self-assessment helpline</p>
            </div>
          </div>
        </div>
        <div class="faq-item">
          <a data-toggle="collapse" data-parent="#faqAccordion1" href="#faqItem52" aria-expanded="false"
            class="collapsed"><span>52.</span>Can you give me an example of an allowable expense?</a>
          <div id="faqItem52" class="collapse faq-item-content" role="tabpanel">
            <div>
              <p> An example of a legitimate expense is as follows: When a client requests to go out for coffee while
                you are looking after them and does not want to pay for it, you can deduct the cost of the coffee from
                your taxable profit for that particular year.</p>
            </div>
          </div>
        </div>
        <div class="faq-item">
          <a  data-toggle="collapse" data-parent="#faqAccordion1" href="#faqItem53"
            aria-expanded="false" class="collapsed"><span>53.</span>If I am self-employed, do I have to do my tax
            returns?</a>
          <div id="faqItem53" class="collapse faq-item-content" role="tabpanel">
            <div>
              <p> Being self-employed requires filing tax returns, so it is critical that carers for Careround 24
                remember to finish the process.
                It is your responsibility to finish your tax returns; we are unable to assist you with this.
                There could be interest or a penalty if your tax returns are incomplete or filed after the deadline</p>
            </div>
          </div>
        </div>
        <div class="faq-item">
          <a data-toggle="collapse" data-parent="#faqAccordion1" href="#faqItem54" aria-expanded="false"
            class="collapsed"><span>54.</span>How do I do my tax returns?</a>
          <div id="faqItem54" class="collapse faq-item-content" role="tabpanel">
            <div>
              <p> You have two options for filing your taxes: online or on paper. In order for HMRC to compute your bill
                and get your payment in time, paper forms must be filled out before electronically filed tax returns.
                On the official website, you can find out when you have to finish filing your taxes. </p>
            </div>
          </div>
        </div>
        <div class="faq-item">
          <a  data-toggle="collapse" data-parent="#faqAccordion1" href="#faqItem55"
            aria-expanded="false" class="collapsed"><span>55.</span>Who is able to file my taxes for me?</a>
          <div id="faqItem55" class="collapse faq-item-content" role="tabpanel">
            <div>
              <p> You can hire an accountant, a reliable friend, or a relative to complete your tax returns if you do
                not want to do it yourself.</p>
            </div>
          </div>
        </div>
        <div class="faq-item">
          <a data-toggle="collapse" data-parent="#faqAccordion1" href="#faqItem56" aria-expanded="false"
            class="collapsed"><span>56.</span> What happens if I wish to take a vacation or become ill? </a>
          <div id="faqItem56" class="collapse faq-item-content" role="tabpanel">
            <div>
              <p> If your client requests it, Careround 24 encourages you to be a member of a micro-team that can fill
                in for you when you are ill or on vacation. Your micro-team needs to be made up of Careround 24 carers.
                Make sure to notify your client as soon as possible if you are sick and unable to cover a shift. You can
                also let them know about other members of your micro-team.
                If you are planning a holiday, you should try to notify your clients as far in advance as possible. You
                should also try to introduce your micro-team to your clients before your holidays.
                The client, however, is always in charge of selecting the carer for your shift; they are free to select
                a different carer than the one you recommend or include in your micro-team.</p>
            </div>
          </div>
        </div>
        <div class="faq-item">
          <a  data-toggle="collapse" data-parent="#faqAccordion1" href="#faqItem57"
            aria-expanded="false" class="collapsed"><span>57.</span>Where can I get support as a Careround 24 carer?</a>
          <div id="faqItem57" class="collapse faq-item-content" role="tabpanel">
            <div>
              <p> We are here to help!
                To address any questions you may have regarding the Careround 24 platform, please contact our carer
                support team by email at __________________.com.
                We work closely with NACAS (the National Association of Carers and Support Workers) which is capable of
                offering other helpful resources and assistance.</p>
            </div>
          </div>
        </div>
        <div class="faq-item">
          <a data-toggle="collapse" data-parent="#faqAccordion1" href="#faqItem58" aria-expanded="false"
            class="collapsed"><span>58.</span>What is a micro-team?</a>
          <div id="faqItem58" class="collapse faq-item-content" role="tabpanel">
            <div>
              <p> It is encouraged for all of the approved carers on our platform to form micro-teams with other carers.
                Someone on your micro-team might be able to help your client if you are not available or ill. The client
                is always free to select the carer of their choice.
                To select members of your micro team, open the Careround 24 Carer app, log in, choose "Micro Team" from
                the menu, hit "Search," and send messages to the carers you want on your team.</p>
            </div>
          </div>
        </div>
        <div class="faq-item">
          <a  data-toggle="collapse" data-parent="#faqAccordion1" href="#faqItem59"
            aria-expanded="false" class="collapsed"><span>59.</span>What is NACAS? How do I sign up?</a>
          <div id="faqItem59" class="collapse faq-item-content" role="tabpanel">
            <div>
              <p> We can give you access to more helpful data and assistance.
                In fact, we have been providing automatic membership to all approved Careround 24 carers in
                collaboration with NACAS. This membership offers a multitude of benefits:
                Access to more than 100 online courses on health and social care, including the Care Certificate,
                through the NHS Digital e-LfH platform
                Discounted CPD Training- Continued Personal Development Health & Social Care Awards Levels 3,4 & 5
                Free assistance for health and well-being
                Support for Mental Health
                Discounts at various retailers
                Free Confidential Reporting Support</p>
            </div>
          </div>
        </div>
        <div class="faq-item">
          <a data-toggle="collapse" data-parent="#faqAccordion1" href="#faqItem60" aria-expanded="false"
            class="collapsed"><span>60.</span>Complaints & suggestions</a>
          <div id="faqItem60" class="collapse faq-item-content" role="tabpanel">
            <div>
              <p> If you have complaints or suggestions, please send an email to ____________________. </p>
            </div>
          </div>
        </div>
        <div class="faq-item">
          <a  data-toggle="collapse" data-parent="#faqAccordion1" href="#faqItem61"
            aria-expanded="false" class="collapsed"><span>61.</span>How can I terminate my account on Careround 24?</a>
          <div id="faqItem61" class="collapse faq-item-content" role="tabpanel">
            <div>
              <p>Clients and carers can terminate their accounts through the app's settings menu or the website's "My
                Profile" section. </p>
            </div>
          </div>
        </div>
        <div class="faq-item">
          <a data-toggle="collapse" data-parent="#faqAccordion1" href="#faqItem62" aria-expanded="false"
            class="collapsed"><span>62.</span>Why is Careround 24 providing carers with free training?</a>
          <div id="faqItem62" class="collapse faq-item-content" role="tabpanel">
            <div>
              <p> We are aware of the significance of skill development and knowledge acquisition for professionals. For
                this reason, we provide free online training on a variety of pertinent topics to all approved Careround
                24 carers, enabling them to improve their knowledge and provide care with assurance.</p>
            </div>
          </div>
        </div>
        <div class="faq-item">
          <a  data-toggle="collapse" data-parent="#faqAccordion1" href="#faqItem63"
            aria-expanded="false" class="collapsed"><span>63.</span>What courses are available?</a>
          <div id="faqItem63" class="collapse faq-item-content" role="tabpanel">
            <div>
              <p> Through our training provider, Access, Careround 24 is currently providing a number of entirely free
                courses.
                Simply navigate to the full list of available courses by opening the Access Learning app.</p>
            </div>
          </div>
        </div>
        <div class="faq-item">
          <a data-toggle="collapse" data-parent="#faqAccordion1" href="#faqItem64" aria-expanded="false"
            class="collapsed"><span>64.</span>How do I access the courses?</a>
          <div id="faqItem64" class="collapse faq-item-content" role="tabpanel">
            <div>
              <p> All approved Careround 24 carers can currently access the online training courses.
                You must complete this registration process if you are not yet a Careround 24 carer in order to access
                the training programmes. Please download the Careround 24 Carer App to begin the process. You will
                receive an email inviting you to create a free training account and access the training once your
                profile has been approved by our carer team.

                Check your inbox and spam folders for an email invitation to create your free training account if you
                are already a certified Careround 24 carer. Please get in touch with us so we can send you another
                invite if you are unable to find the original one.

                All of the courses are available online and can be accessed via a computer, tablet, or smartphone.</p>
            </div>
          </div>
        </div>
        <div class="faq-item">
          <a  data-toggle="collapse" data-parent="#faqAccordion1" href="#faqItem65"
            aria-expanded="false" class="collapsed"><span>65.</span>Do I have to complete each course in one go?</a>
          <div id="faqItem65" class="collapse faq-item-content" role="tabpanel">
            <div>
              <p> No, you get to decide how quickly you finish each course. You can thus resume your training exactly
                where you left off if you decide to stop at any time.</p>
            </div>
          </div>
        </div>
        <div class="faq-item">
          <a data-toggle="collapse" data-parent="#faqAccordion1" href="#faqItem66" aria-expanded="false"
            class="collapsed"><span>66.</span>Do I receive a certificate upon completion of each course?</a>
          <div id="faqItem66" class="collapse faq-item-content" role="tabpanel">
            <div>
              <p> Sure. You will be able to download and print your certificate for each course that you have completed.
                All of your certificates are stored in your training account, which you can upload to your Careround 24
                profile.</p>
            </div>
          </div>
        </div>
        <div class="faq-item">
          <a  data-toggle="collapse" data-parent="#faqAccordion1" href="#faqItem67"
            aria-expanded="false" class="collapsed"><span>67.</span>Will my profile on Careround 24 display my training
            accomplishments?</a>
          <div id="faqItem67" class="collapse faq-item-content" role="tabpanel">
            <div>
              <p> Keep an eye out for updates to your Careround 24 Carer App and stay tuned as we work to incorporate
                your training accomplishments into your profile.
              </p>
            </div>
          </div>
        </div>
        <div class="faq-item">
          <a data-toggle="collapse" data-parent="#faqAccordion1" href="#faqItem68" aria-expanded="false"
            class="collapsed"><span>68.</span>What does CPD mean?</a>
          <div id="faqItem68" class="collapse faq-item-content" role="tabpanel">
            <div>
              <p> The term "continuing professional development," or CPD, refers to the training that professionals
                undergo in order to advance and develop their skills. Gaining CPD points allows you to provide proof of
                the time you have invested in learning new skills.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php
  include 'footer.php';
  ?>
  <script>
    $(document).ready(function () {
      $('.card-header').click(function () {
        $(this).find('button').click();
      });
    });
  </script>
</body>

</html>