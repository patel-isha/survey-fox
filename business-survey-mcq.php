<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
include 'config/connection.php';

?>

<html>

<?php
include 'include/header-links.php';
?>

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
                                <ul id="progressbar">
                                    <li class="active" id="step0"></li>
                                    <li id="step1"></li>
                                    <li id="step2"></li>
                                    <li id="step3"></li>
                                    <li id="step4"></li>
                                    <li id="step5"></li>
                                    <li id="step6"></li>
                                    <li id="step7"></li>
                                </ul>
                                <h2 class="title-color"><strong>E-Commerce & Business <span class="orange">Survey</span></strong></h2>
                                <!-- fieldsets -->
                                <fieldset name="step0">
                                    <div class="form-card text-center pb-0">
                                        <div class="typewriter">
                                            <h2 class="tagline mb-2 line1">Driving Business Forward</h2>
                                            <h2 class="tagline orange line2 mb-2 hidden">Start Your Journey Now!</h2>
                                        </div>
                                        <img src="assets/img/begin-survey.jpg" class="w-50">
                                    </div>

                                    <input type="button" name="next" class="next action-button" value="Get Started" />
                                </fieldset>
                                <fieldset name="step1">
                                    <div class="form-card">
                                        <div class="mb-30">
                                            <h6 class="title-color mb-3">Full name</h6>
                                            <input type="text" class="form-control" name="txtFullname" id="txtFullname" required>
                                        </div>
                                        <div class="mb-30">
                                            <h6 class="title-color mb-3">Email</h6>
                                            <input type="text" class="form-control" name="txtEmail" id="txtEmail" required>
                                        </div>
                                        <input type="hidden" id="hdnMainEnrollId" name="generatedId" value="">


                                    </div>
                                    <!-- <input type="button" name="previous" class="previous action-button-previous"
                                        value="Previous" /> -->
                                    <input type="button" class="action-button" value="Enroll" onClick="EnrollSurvey();" />
                                </fieldset>
                                <fieldset name="step2">
                                    <div class="form-card">
                                        <div class="mb-30">
                                            <h6 class="title-color">1) Consumer Profile: Which of the following best describes your role in e-commerce?</h6>
                                            <div class="radio">
                                                <label><input type="radio" value="Online shopper" name="eCommerceRole" checked>Online shopper</label>
                                            </div>
                                            <div class="radio">
                                                <label><input type="radio" value="Small business owner" name="eCommerceRole">Small business owner</label>
                                            </div>
                                            <div class="radio">
                                                <label><input type="radio" value="Entrepreneur" name="eCommerceRole">Entrepreneur</label>
                                            </div>
                                            <div class="radio">
                                                <label><input type="radio" value="E-commerce platform manager" name="eCommerceRole">E-commerce platform manager</label>
                                            </div>
                                        </div>
                                        <div class="mb-30">
                                            <h6 class="title-color">2) Frequency of Online Transactions: How often do you engage in online transactions?</h6>
                                            <div class="radio">
                                                <label><input type="radio" name="onlineTransactionFrequency" value="Daily" checked>Daily</label>
                                            </div>
                                            <div class="radio">
                                                <label><input type="radio" name="onlineTransactionFrequency" value="Weekly">Weekly</label>
                                            </div>
                                            <div class="radio">
                                                <label><input type="radio" name="onlineTransactionFrequency" value="Monthly">Monthly</label>
                                            </div>
                                            <div class="radio">
                                                <label><input type="radio" name="onlineTransactionFrequency" value="Rarely">Rarely</label>
                                            </div>
                                        </div>
                                    </div>
                                    <input type="button" name="next" class="next action-button" value="Next" />
                                </fieldset>
                                <fieldset name="step3">
                                    <div class="form-card">
                                        <div class="mb-30">
                                            <h6 class="title-color mb-3">3) Preferred E-commerce Platforms: Which platform do you most frequently use for online purchases?</h6>
                                            <div class="radio">
                                                <label><input type="radio" name="preferredEcommerce" value="Amazon" checked>Amazon</label>
                                            </div>
                                            <div class="radio">
                                                <label><input type="radio" name="preferredEcommerce" value="eBay">eBay</label>
                                            </div>
                                            <div class="radio">
                                                <label><input type="radio" name="preferredEcommerce" value="Etsy">Etsy</label>
                                            </div>
                                            <div class="radio">
                                                <label><input type="radio" name="preferredEcommerce" value="Shopify">Shopify</label>
                                            </div>
                                        </div>
                                        <div class="mb-30">
                                            <h6 class="title-color mb-3">4) Factors Influencing Online Purchases: What most influences your decision to purchase items online?</h6>
                                            <div class="radio">
                                                <label><input type="radio" name="onlinePurchase" value="Price" checked>Price</label>
                                            </div>
                                            <div class="radio">
                                                <label><input type="radio" name="onlinePurchase" value="Product reviews/ratings">Product reviews/ratings</label>
                                            </div>
                                            <div class="radio">
                                                <label><input type="radio" name="onlinePurchase" value="Brand reputation">Brand reputation</label>
                                            </div>
                                            <div class="radio">
                                                <label><input type="radio" name="onlinePurchase" value="Shipping options">Shipping options</label>
                                            </div>
                                        </div>
                                    </div>
                                    <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                                    <input type="button" name="next" class="next action-button" value="Next" />
                                </fieldset>
                                <fieldset name="step4">
                                    <div class="form-card">
                                        <div class="mb-30">
                                            <h6 class="title-color mb-3">5) Preferred Payment Methods: How do you prefer to pay for online purchases?</h6>
                                            <div class="radio">
                                                <label><input type="radio" name="paymentMethod" value="Credit/debit card" checked>Credit/debit card</label>
                                            </div>
                                            <div class="radio">
                                                <label><input type="radio" name="paymentMethod" value="Paypal">Paypal</label>
                                            </div>
                                            <div class="radio">
                                                <label><input type="radio" name="paymentMethod" value="Mobile payment apps">Mobile payment apps</label>
                                            </div>
                                            <div class="radio">
                                                <label><input type="radio" name="paymentMethod" value="Bank transfer">Bank transfer</label>
                                            </div>
                                        </div>
                                        <div class="mb-30">
                                            <h6 class="title-color mb-3">6) Market Analysis: What methods do you use to conduct market research for your business?</h6>
                                            <div class="radio">
                                                <label><input type="radio" name="marketAnalysis" value="Surveys and interviews" checked>Surveys and interviews</label>
                                            </div>
                                            <div class="radio">
                                                <label><input type="radio" name="marketAnalysis" value="Competitive analysis">Competitive analysis</label>
                                            </div>
                                            <div class="radio">
                                                <label><input type="radio" name="marketAnalysis" value="Industry reports and studies">Industry reports and studies</label>
                                            </div>
                                            <div class="radio">
                                                <label><input type="radio" name="marketAnalysis" value="Online analytics tools">Online analytics tools</label>
                                            </div>
                                        </div>
                                    </div>
                                    <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                                    <input type="button" name="next" class="next action-button" value="Next" />
                                </fieldset>
                                <fieldset name="step5">
                                    <div class="form-card">
                                        <div class="mb-30">
                                            <h6 class="title-color mb-3">7) Business Performance: How would you rate your business's performance in the past year?</h6>
                                            <div class="radio">
                                                <label><input type="radio" name="businessPerformance" value="Excellent" checked>Excellent</label>
                                            </div>
                                            <div class="radio">
                                                <label><input type="radio" name="businessPerformance" value="Good">Good</label>
                                            </div>
                                            <div class="radio">
                                                <label><input type="radio" name="businessPerformance" value="Average">Average</label>
                                            </div>
                                            <div class="radio">
                                                <label><input type="radio" name="businessPerformance" value="Below average">Below average</label>
                                            </div>
                                        </div>
                                        <div class="mb-30">
                                            <h6 class="title-color mb-3">8) Marketing Strategies: Which marketing channels do you primarily use to promote your business?</h6>
                                            <div class="radio">
                                                <label><input type="radio" name="marketingStrategies" value="Surveys and interviews" checked>Surveys and interviews</label>
                                            </div>
                                            <div class="radio">
                                                <label><input type="radio" name="marketingStrategies" value="Competitive analysis">Competitive analysis</label>
                                            </div>
                                            <div class="radio">
                                                <label><input type="radio" name="marketingStrategies" value="Industry reports and studies">Industry reports and studies</label>
                                            </div>
                                            <div class="radio">
                                                <label><input type="radio" name="marketingStrategies" value="Online analytics tools">Online analytics tools</label>
                                            </div>
                                        </div>
                                    </div>
                                    <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                                    <input type="button" name="next" class="next action-button" value="Next" />
                                </fieldset>
                                <fieldset name="step6">
                                    <div class="form-card">
                                        <div class="mb-30">
                                            <h6 class="title-color mb-3">9) Customer Relations: How do you gather feedback from your customers?</h6>
                                            <div class="radio">
                                                <label><input type="radio" name="customerRelations" value="Online surveys" checked>Online surveys</label>
                                            </div>
                                            <div class="radio">
                                                <label><input type="radio" name="customerRelations" value="Feedback forms on website">Feedback forms on website</label>
                                            </div>
                                            <div class="radio">
                                                <label><input type="radio" name="customerRelations" value="Social media comments/messages">Social media comments/messages</label>
                                            </div>
                                            <div class="radio">
                                                <label><input type="radio" name="customerRelations" value="Direct customer interactions (phone calls, emails)">Direct customer interactions (phone calls, emails)</label>
                                            </div>
                                        </div>
                                        <div class="mb-30">
                                            <h6 class="title-color mb-3">10) Future Planning: What are your primary goals for business growth in the next year?</h6>
                                            <div class="radio">
                                                <label><input type="radio" name="marketingStrategies" value="Increase revenue" checked>Increase revenue</label>
                                            </div>
                                            <div class="radio">
                                                <label><input type="radio" name="marketingStrategies" value="Expand market reach">Expand market reach</label>
                                            </div>
                                            <div class="radio">
                                                <label><input type="radio" name="marketingStrategies" value="Launch new products/services">Launch new products/services</label>
                                            </div>
                                            <div class="radio">
                                                <label><input type="radio" name="marketingStrategies" value="Improve customer retention">Improve customer retention</label>
                                            </div>
                                        </div>
                                    </div>
                                    <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                                    <input type="button" name="next" class="next action-button" value="Next" />
                                </fieldset>
                                <fieldset name="step7">
                                    <div class="form-card">
                                        <h2 class="fs-title text-center">Success !</h2>
                                        <br><br>
                                        <div class="row justify-content-center">
                                            <div class="col-3">
                                                <img src="https://img.icons8.com/color/96/000000/ok--v2.png" class="fit-image">
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
</body>

</html>