<?php
include('header.php');
$currentPage = 'faq_client';
?>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

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
    font-weight: bold;
  }
  .card-body {
    color: #333333;
  }
</style>

<body>


<div class="mt-3 btn-group_custom" role="group" aria-label="Basic outlined example">
  <a href="faq" class="btn-career <?php echo $currentPage == 'faq' ? 'active-button' : ''; ?>">Career </a>
  <a href="faq_client" class="btn-client <?php echo $currentPage == 'faq_client' ? 'active-button' : ''; ?>">Client </a>
</div>







<div class="container">
  <h2 class="mt-5 mb-3">Frequently Asked Questions</h2>
  
  <div id="accordion">
    
   <!-- Question 1 -->
<div class="card">
  <div class="card-header" id="headingOne" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
    <h5 class="mb-0">
      <button class="btn btn-link">
        How can I contact customer support?
      </button>
    </h5>
  </div>
  <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
    <div class="card-body">
      You can contact customer support by calling our hotline at 1-800-123-4567 or by emailing support@example.com.
    </div>
  </div>
</div>

<!-- Question 2 -->
<div class="card">
  <div class="card-header" id="headingTwo" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
    <h5 class="mb-0">
      <button class="btn btn-link collapsed">
        Where can I find your products?
      </button>
    </h5>
  </div>
  <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
    <div class="card-body">
      Our products are available online on our website, as well as in major retail stores. Visit our store locator page for more information.
    </div>
  </div>
</div>

<!-- Question 3 -->
<div class="card">
  <div class="card-header" id="headingThree" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
    <h5 class="mb-0">
      <button class="btn btn-link collapsed">
        What is your return policy?
      </button>
    </h5>
  </div>
  <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
    <div class="card-body">
      We offer a 30-day return policy on all our products. For more details, please visit our return policy page or contact our support team.
    </div>
  </div>
</div>

    
    <!-- Question 4 -->
<div class="card">
  <div class="card-header" id="headingFour" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
    <h5 class="mb-0">
      <button class="btn btn-link collapsed">
        How do I track my order?
      </button>
    </h5>
  </div>
  <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
    <div class="card-body">
      You can track your order using the tracking number provided in your confirmation email. Visit our website and enter the tracking number in the order tracking section.
    </div>
  </div>
</div>

<!-- Question 5 -->
<div class="card">
  <div class="card-header" id="headingFive" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
    <h5 class="mb-0">
      <button class="btn btn-link collapsed">
        How can I update my account information?
      </button>
    </h5>
  </div>
  <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordion">
    <div class="card-body">
      You can update your account information by logging into your account on our website and navigating to the account settings section.
    </div>
  </div>
</div>

<!-- Question 6 -->
<div class="card">
  <div class="card-header" id="headingSix" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
    <h5 class="mb-0">
      <button class="btn btn-link collapsed">
        What payment methods do you accept?
      </button>
    </h5>
  </div>
  <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordion">
    <div class="card-body">
      We accept a variety of payment methods including credit/debit cards, PayPal, and bank transfers. Please see our payment options page for more details.
    </div>
  </div>
</div>

    
   <!-- Question 7 -->
<div class="card">
  <div class="card-header" id="headingSeven" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
    <h5 class="mb-0">
      <button class="btn btn-link collapsed">
        How do I reset my password?
      </button>
    </h5>
  </div>
  <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#accordion">
    <div class="card-body">
      To reset your password, click on the "Forgot Password" link on the login page and follow the instructions. You will receive an email with a link to reset your password.
    </div>
  </div>
</div>

<!-- Question 8 -->
<div class="card">
  <div class="card-header" id="headingEight" data-toggle="collapse" data-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
    <h5 class="mb-0">
      <button class="btn btn-link collapsed">
        Can I track my shipment?
      </button>
    </h5>
  </div>
  <div id="collapseEight" class="collapse" aria-labelledby="headingEight" data-parent="#accordion">
    <div class="card-body">
      Yes, once your order is shipped, you will receive a confirmation email with a tracking number. You can use this number to track your shipment on our website or the carrier's site.
    </div>
  </div>
</div>

<!-- Question 9 -->
<div class="card">
  <div class="card-header" id="headingNine" data-toggle="collapse" data-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
    <h5 class="mb-0">
      <button class="btn btn-link collapsed">
        How do I return a product?
      </button>
    </h5>
  </div>
  <div id="collapseNine" class="collapse" aria-labelledby="headingNine" data-parent="#accordion">
    <div class="card-body">
      To return a product, please visit our returns page and follow the instructions. You will need your order number and the email address used for the purchase.
    </div>
  </div>
</div>

<!-- Question 10 -->
<div class="card">
  <div class="card-header" id="headingTen" data-toggle="collapse" data-target="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
    <h5 class="mb-0">
      <button class="btn btn-link collapsed">
        How do I leave a review?
      </button>
    </h5>
  </div>
  <div id="collapseTen" class="collapse" aria-labelledby="headingTen" data-parent="#accordion">
    <div class="card-body">
      To leave a review, go to the product page of the item you purchased and click on the "Write a Review" button. You can also leave reviews through your account's order history.
    </div>
  </div>
</div>


  </div>
</div>


<?php
include('footer.php');
?>



<script>
  // $(document).ready(function() {
  //   $('.card-header').click(function() {
  //     $(this).find('button').click();
  //   });
  // });
</script>

