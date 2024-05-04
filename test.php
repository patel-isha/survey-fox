<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
include 'config/connection.php';

?>

<html>

<?php
include 'include/header-links.php';
?>

<head>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body>
    <!-- MultiStep Form -->
    <div class="container-fluid" id="grad1">
        <div class="row justify-content-center mt-0">
            <div class="col-11 col-sm-9 col-md-7 col-lg-6 text-center p-0 mt-3 mb-2">
                <div class="card px-0 pb-0 mt-3 mb-3">
                    <div class="bg-theme pt-2 pb-2 br8">
                        <img src="assets/img/logo/logo.png" class="m-auto w-30">
                    </div>
                    <div class="row">
                        <div class="col-md-12 mx-0">
                            <form id="msform">
                                <!-- progressbar -->
                                <ul id="progressbar" style="display: flex;">
                                    <li class="active" id="step1"></li>
                                    <li id="step2"></li>
                                    <li id="step3"></li>
                                    <li id="step4"></li>
                                    <li id="step5"></li>
                                    <li id="step6"></li>

                                </ul>
                                <h3 class="navy-blue"><strong>E-Commerce & Business <span
                                            class="light-blue">Survey</span></strong></h3>
                                <!-- fieldsets -->
                                <fieldset name="step1">
                                    <div class="form-card">
                                        <div class="mb-30">
                                            <p>Welcome to our e-commerce survey! We're eager to hear your thoughts. As a
                                                token of appreciation for your time, participants who complete at least
                                                40% of the survey will receive compensation. For those who complete the
                                                entire survey, there's an additional £10 reward waiting for you. Your
                                                feedback is instrumental in shaping our online shopping experience, and
                                                we're grateful for your contribution.</p>
                                            <p>Your honest opinions help us identify areas for improvement and ensure
                                                we're meeting your needs effectively. By completing this survey, you're
                                                directly influencing the future of our services. Thank you for taking
                                                the time to share your thoughts with us and for helping us create a
                                                better online shopping experience for everyone.</p>
                                        </div>
                                    </div>
                                    <input type="button" name="next" class="next action-button" value="Begin Survey"
                                        style="background: #5b8930; width: auto;" />
                                </fieldset>
                                <fieldset name="step2">
                                    <div class="form-card">
                                        <div class="mb-30">
                                            <h6 class="navy-blue mb-3">Full name</h6>
                                            <input type="text" class="form-control" name="txtFullname" id="txtFullname"  required>
                                        </div>
                                        <div class="mb-30">
                                            <h6 class="navy-blue mb-3">Email</h6>
                                            <input type="text" class="form-control" name="txtEmail" id="txtEmail" required>
                                        </div>
                                        <input type="hidden" id="hdnMainEnrollId" name="generatedId" value="">


                                    </div>
                                    <!-- <input type="button" name="previous" class="previous action-button-previous"
                                        value="Previous" /> -->
                                    <input type="button" class="action-button" value="Enroll"
                                        onClick="EnrollSurvey();" />
                                </fieldset>
                                <fieldset name="step3">
                                    <div class="form-card">

                                        <div class="mb-30">
                                            <h6 class="navy-blue">1) Consumer Profile: Which of the following best
                                                describes your role in e-commerce?</h6>
                                            <div class="radio">
                                                <label><input type="radio" value="Online shopper" name="eCommerceRole"
                                                        qid="35" checked>Online shopper</label>
                                            </div>
                                            <div class="radio">
                                                <label><input type="radio" value="Small business owner" qid="35"
                                                        name="eCommerceRole">Small business owner</label>
                                            </div>
                                            <div class="radio">
                                                <label><input type="radio" value="Entrepreneur" qid="35"
                                                        name="eCommerceRole">Entrepreneur</label>
                                            </div>
                                            <div class="radio">
                                                <label><input type="radio" value="E-commerce platform manager" qid="35"
                                                        name="eCommerceRole">E-commerce platform manager</label>
                                            </div>
                                        </div>
                                        <div class="mb-30">
                                            <h6 class="navy-blue">2) Frequency of Online Transactions: How often do
                                                you engage in online transactions?</h6>
                                            <div class="radio">
                                                <label><input type="radio" name="onlineTransactionFrequency" qid="36"
                                                        value="Daily" checked>Daily</label>
                                            </div>
                                            <div class="radio">
                                                <label><input type="radio" name="onlineTransactionFrequency" qid="36"
                                                        value="Weekly">Weekly</label>
                                            </div>
                                            <div class="radio">
                                                <label><input type="radio" name="onlineTransactionFrequency" qid="36"
                                                        value="Monthly">Monthly</label>
                                            </div>
                                            <div class="radio">
                                                <label><input type="radio" name="onlineTransactionFrequency" qid="36"
                                                        value="Rarely">Rarely</label>
                                            </div>
                                        </div>
                                        <div class="mb-30">
                                            <h6 class="navy-blue mb-3">3) Preferred E-commerce Platforms: Which
                                                platform do you most frequently use for online purchases?</h6>
                                            <div class="radio">
                                                <label><input type="radio" name="preferredEcommerce" value="Amazon"
                                                        qid="37" checked>Amazon</label>
                                            </div>
                                            <div class="radio">
                                                <label><input type="radio" name="preferredEcommerce" qid="37"
                                                        value="eBay">eBay</label>
                                            </div>
                                            <div class="radio">
                                                <label><input type="radio" name="preferredEcommerce" qid="37"
                                                        value="Etsy">Etsy</label>
                                            </div>
                                            <div class="radio">
                                                <label><input type="radio" name="preferredEcommerce" qid="37"
                                                        value="Shopify">Shopify</label>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- <input type="button" name="previous" class="previous action-button-previous"
                                        value="Previous" /> -->
                                    <input type="button" name="next" class="next action-button" value="Next"
                                        onClick="SaveData('step2');" />
                                </fieldset>
                                <fieldset name="step4">
                                    <div class="form-card">
                                        <div class="mb-30">
                                            <h6 class="navy-blue mb-3">4) Factors Influencing Online Purchases: What
                                                most influences your decision to purchase items online?</h6>
                                            <div class="radio">
                                                <label><input type="radio" name="onlinePurchase" value="Price" qid="38"
                                                        checked>Price</label>
                                            </div>
                                            <div class="radio">
                                                <label><input type="radio" name="onlinePurchase" qid="38"
                                                        value="Product reviews/ratings">Product reviews/ratings</label>
                                            </div>
                                            <div class="radio">
                                                <label><input type="radio" name="onlinePurchase" qid="38"
                                                        value="Brand reputation">Brand reputation</label>
                                            </div>
                                            <div class="radio">
                                                <label><input type="radio" name="onlinePurchase" qid="38"
                                                        value="Shipping options">Shipping options</label>
                                            </div>
                                        </div>
                                        <div class="mb-30">
                                            <h6 class="navy-blue mb-3">5) Preferred Payment Methods: How do you prefer
                                                to pay for online purchases?</h6>
                                            <div class="radio">
                                                <label><input type="radio" name="paymentMethod" qid="39"
                                                        value="Credit/debit card" checked>Credit/debit card</label>
                                            </div>
                                            <div class="radio">
                                                <label><input type="radio" name="paymentMethod" qid="39"
                                                        value="Paypal">Paypal</label>
                                            </div>
                                            <div class="radio">
                                                <label><input type="radio" name="paymentMethod" qid="39"
                                                        value="Mobile payment apps">Mobile payment apps</label>
                                            </div>
                                            <div class="radio">
                                                <label><input type="radio" name="paymentMethod" qid="39"
                                                        value="Bank transfer">Bank transfer</label>
                                            </div>
                                        </div>
                                        <div class="mb-30">
                                            <h6 class="navy-blue mb-3">6) Market Analysis: What methods do you use to
                                                conduct market research for your business?</h6>
                                            <div class="radio">
                                                <label><input type="radio" name="marketAnalysis" qid="40"
                                                        value="Surveys and interviews" checked>Surveys and
                                                    interviews</label>
                                            </div>
                                            <div class="radio">
                                                <label><input type="radio" name="marketAnalysis" qid="40"
                                                        value="Competitive analysis">Competitive analysis</label>
                                            </div>
                                            <div class="radio">
                                                <label><input type="radio" name="marketAnalysis" qid="40"
                                                        value="Industry reports and studies">Industry reports and
                                                    studies</label>
                                            </div>
                                            <div class="radio">
                                                <label><input type="radio" name="marketAnalysis" qid="40"
                                                        value="Online analytics tools">Online analytics tools</label>
                                            </div>
                                        </div>
                                    </div>
                                    <input type="button" name="previous" class="previous action-button-previous"
                                        value="Previous" />
                                    <input type="button" name="finish" class="action-button-danger"
                                        value="Finish & Exit" />
                                    <input type="button" name="next" class="next action-button" value="Next" />
                                </fieldset>
                                <fieldset name="step5">
                                    <div class="form-card">
                                        <div class="mb-30">
                                            <h6 class="navy-blue mb-3">7) Business Performance: How would you rate
                                                your business's performance in the past year?</h6>
                                            <div class="radio">
                                                <label><input type="radio" name="businessPerformance" value="Excellent"
                                                        qid="41" checked>Excellent</label>
                                            </div>
                                            <div class="radio">
                                                <label><input type="radio" name="businessPerformance" qid="41"
                                                        value="Good">Good</label>
                                            </div>
                                            <div class="radio">
                                                <label><input type="radio" name="businessPerformance" qid="41"
                                                        value="Average">Average</label>
                                            </div>
                                            <div class="radio">
                                                <label><input type="radio" name="businessPerformance" qid="41"
                                                        value="Below average">Below average</label>
                                            </div>
                                        </div>
                                        <div class="mb-30">
                                            <h6 class="navy-blue mb-3">8) Marketing Strategies: Which marketing
                                                channels do you primarily use to promote your business?</h6>
                                            <div class="radio">
                                                <label><input type="radio" name="marketingStrategies" qid="42"
                                                        value="Surveys and interviews" checked>Surveys and
                                                    interviews</label>
                                            </div>
                                            <div class="radio">
                                                <label><input type="radio" name="marketingStrategies" qid="42"
                                                        value="Competitive analysis">Competitive analysis</label>
                                            </div>
                                            <div class="radio">
                                                <label><input type="radio" name="marketingStrategies" qid="42"
                                                        value="Industry reports and studies">Industry reports and
                                                    studies</label>
                                            </div>
                                            <div class="radio">
                                                <label><input type="radio" name="marketingStrategies" qid="42"
                                                        value="Online analytics tools">Online analytics tools</label>
                                            </div>
                                        </div>
                                        <div class="mb-30">
                                            <h6 class="navy-blue mb-3">9) Customer Relations: How do you gather
                                                feedback from your customers?</h6>
                                            <div class="radio">
                                                <label><input type="radio" name="businessPerformance" value="Excellent"
                                                        qid="43" checked>Excellent</label>
                                            </div>
                                            <div class="radio">
                                                <label><input type="radio" name="businessPerformance" qid="43"
                                                        value="Good">Good</label>
                                            </div>
                                            <div class="radio">
                                                <label><input type="radio" name="businessPerformance" qid="43"
                                                        value="Average">Average</label>
                                            </div>
                                            <div class="radio">
                                                <label><input type="radio" name="businessPerformance" qid="43"
                                                        value="Below average">Below average</label>
                                            </div>
                                        </div>
                                        <div class="mb-30">
                                            <h6 class="navy-blue mb-3">10) Future Planning: What are your primary
                                                goals for business growth in the next year?</h6>

                                            <div class="radio">
                                                <label><input type="radio" name="futurePlan" qid="44"
                                                        value="Increase revenue" checked>Increase revenue</label>
                                            </div>
                                            <div class="radio">
                                                <label><input type="radio" name="futurePlan" qid="44"
                                                        value="Expand market reach">Expand market reach</label>
                                            </div>
                                            <div class="radio">
                                                <label><input type="radio" name="futurePlan" qid="44"
                                                        value="Launch new products/services">Launch new
                                                    products/services</label>
                                            </div>
                                            <div class="radio">
                                                <label><input type="radio" name="futurePlan" qid="44"
                                                        value="Improve customer retention">Improve customer
                                                    retention</label>
                                            </div>
                                            <div class="radio">
                                                <label><input type="radio" name="futurePlan" qid="44"
                                                        value="Enhance operational efficiency">Enhance operational
                                                    efficiency</label>
                                            </div>
                                        </div>
                                    </div>
                                    <input type="button" name="previous" class="previous action-button-previous"
                                        value="Previous" />
                                    <input type="button" name="next" class="next action-button" value="Next" />
                                </fieldset>
                                <fieldset name="step6">
                                    <div class="form-card">
                                        <div class="mb-30">
                                            <h6 class="navy-blue mb-3">Tell us more about any suggestions?</h6>
                                            <textarea class="form-control" rows="5" name="txtSuggestions"
                                                qid=""></textarea>
                                        </div>
                                    </div>
                                    <input type="button" name="previous" class="previous action-button-previous"
                                        value="Previous" />
                                    <input type="button" name="finish" class="action-button-danger"
                                        value="Finish & Exit" />
                                    <input type="button" name="next" class="next action-button" value="Next" />
                                </fieldset>

                                <fieldset name="step7">
                                    <div class="form-card">
                                        <h2 class="fs-title text-center">Success !</h2>
                                        <br><br>
                                        <div class="row justify-content-center">
                                            <div class="col-3">
                                                <img src="https://img.icons8.com/color/96/000000/ok--v2.png"
                                                    class="fit-image">
                                            </div>
                                        </div>
                                        <br><br>
                                        <div class="row justify-content-center">
                                            <div class="col-7 text-center">
                                                <h5>You Have Successfully Completed The Survey</h5>
                                            </div>
                                        </div>
                                    </div>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php
    include 'include/footer-scripts.php';
    ?>
    <!-- Include jQuery library -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Include Bootstrap JavaScript after jQuery -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


    <script type="text/javascript">
        function getSidFromQueryString() {
            var urlParams = new URLSearchParams(window.location.search);
            return urlParams.get('sid');
        }

        function EnrollSurvey() {
            var fullName = document.getElementById("txtFullname").value;
            var email = document.getElementById("txtEmail").value;
            var sid = getSidFromQueryString();

            // Perform validation
            if (fullName.trim() === '') {
                alert('Please enter your full name.');
                return; // Stop execution if full name is blank
            }

            // Regular expression for email validation
            var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

            if (email.trim() === '') {
                alert('Please enter your email.');
                return; // Stop execution if email is blank
            } else if (!emailPattern.test(email)) {
                alert('Please enter a valid email address.');
                return; // Stop execution if email format is invalid
            }


            // Data to be sent via AJAX
            var data = {
                fullName: fullName,
                email: email,
                sid: sid
            };

            // Send data to PHP script using AJAX
            $.ajax({
                url: 'enrollsurvey.php?sid=' + sid,
                type: 'POST',
                data: data,
                success: function (response) {
                    // Handle success response
                    var responseData = JSON.parse(response);
                    if (responseData.success) {
                        // Access the inserted ID and store it in a hidden field
                        var insertedId = responseData.inserted_id;
                        $("#hdnMainEnrollId").val(insertedId);

                        console.log("Inserted ID: " + insertedId);
                        // Move to the next step
                        showNextStep();
                    } else {
                        // Handle failure
                        console.error(responseData.message);
                    }
                },
                error: function (xhr, status, error) {
                    // Handle error
                    console.error(xhr.responseText);
                }
            });

        }

        function showNextStep(stepname) {
            // Hide the current step
            var currentStep = document.querySelector('fieldset[name="step2"]');
            currentStep.style.display = 'none';

            // Show the next step
            var nextStep = document.querySelector('fieldset[name="step3"]');
            nextStep.style.display = 'block';
        }
    </script>
    <script type="text/javascript">
        // Function to save data
        function saveData() {
            var SurveyId = getSidFromQueryString();
            var QuestionArray = [];

            // Iterate through each input element with the 'qid' attribute
            $("input[qid]:visible").each(function () {
                var queid = $(this).attr('qid');
                var answer = $(this).val();

                // Push queid and answer into QuestionArray
                QuestionArray.push({
                    qid: queid,
                    answer: answer
                });
            });

            // Send AJAX request to PHP script
            $.ajax({
                url: 'save_data.php?sid=' + SurveyId,
                type: 'POST',
                data: {
                    SurveyId: ptId,
                    questionArray: QuestionArray
                },
                success: function (response) {
                    // Handle success response
                    console.log(response);
                },
                error: function (xhr, status, error) {
                    // Handle error
                    console.error(xhr.responseText);
                }
            });
        }
    </script>
</body>


</html>