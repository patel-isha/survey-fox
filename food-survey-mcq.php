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
                                </ul>
                                <h2 class="title-color"><strong>Food & Hospitality <span class="orange">Survey</span></strong></h2>
                                <!-- fieldsets -->
                                <fieldset>
                                <div class="typewriter">
                                    <div class="typewrite display-4" style="font-size: 2.5rem!important; height: 20%!important" data-period="2000" data-type='[ "Embark on a Journey with our Survey Experience", "Your feedback matters!"]'>
                                        <span class="wrap"></span>

                                    </div>
                                </div>
                                    <div class="form-card landing-img">

                                            <img src="assets/img/logo/landing.png"alt="Description of the image" style="width: 100%; height: auto;">

                                        </div>

                                        <input type="button" name="next" class="next action-button" value="Get Started" />
                                </fieldset>
                                <fieldset>
                                    <div class="form-card">
                                        <div class="mb-30">
                                            <h6 class="title-color">1) How frequently do you dine at restaurants or consume food outside of your home?</h6>
                                            <div class="radio">
                                                <label><input type="radio" value="">Multiple Times a week</label>
                                            </div>
                                            <div class="radio">
                                                <label><input type="radio" value="">Once a week</label>
                                            </div>
                                            <div class="radio">
                                                <label><input type="radio" value="">Few times a month</label>
                                            </div>
                                            <div class="radio">
                                                <label><input type="radio" value="">Rarely or Never</label>
                                            </div>
                                        </div>
                                        <div class="mb-30">
                                            <h6 class="title-color">2) What type of cuisine do you enjoy the most?</h6>
                                            <div class="radio">
                                                <label><input type="radio" name="optradio">Continental</label>
                                            </div>
                                            <div class="radio">
                                                <label><input type="radio" name="optradio">Asian</label>
                                            </div>
                                            <div class="radio">
                                                <label><input type="radio" name="optradio">American</label>
                                            </div>
                                            <div class="radio">
                                                <label><input type="radio" name="optradio">British</label>
                                            </div>
                                            <div class="radio">
                                                <label><input type="radio" name="optradio">Others</label>
                                            </div>
                                        </div>
                                    </div>
                                    <input type="button" name="next" class="next action-button" value="Next" />
                                </fieldset>
                                <fieldset>
                                    <div class="form-card">
                                        <div class="mb-30">
                                            <h6 class="title-color mb-3">3) How do you prefer to book your accommodations or dining reservations?</h6>
                                            <div class="radio">
                                                <label><input type="radio" value="">Online platforms</label>
                                            </div>
                                            <div class="radio">
                                                <label><input type="radio" value="">Directly through calls</label>
                                            </div>
                                            <div class="radio">
                                                <label><input type="radio" value="">Through third party booking websites</label>
                                            </div>
                                            <div class="radio">
                                                <label><input type="radio" value="">Through agents</label>
                                            </div>
                                        </div>
                                        <div class="mb-30">
                                            <h6 class="title-color mb-3">4) Do you have a dietary preferences?</h6>
                                            <div class="radio">
                                                <label><input type="radio" value="">Vegan</label>
                                            </div>
                                            <div class="radio">
                                                <label><input type="radio" value="">Vegetarian</label>
                                            </div>
                                            <div class="radio">
                                                <label><input type="radio" value="">Non-Vegetarian</label>
                                            </div>
                                        </div>
                                    </div>
                                    <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                                    <input type="button" name="next" class="next action-button" value="Next" />
                                </fieldset>
                                <fieldset>
                                    <div class="form-card">
                                        <div class="mb-30">
                                            <h6 class="title-color mb-3">5) How do you rate your overall dining experience of your most recent visit to a restaurant?</h6>
                                            <div class="radio">
                                                <label><input type="radio" value="">Excellent</label>
                                            </div>
                                            <div class="radio">
                                                <label><input type="radio" value="">Good</label>
                                            </div>
                                            <div class="radio">
                                                <label><input type="radio" value="">Average</label>
                                            </div>
                                            <div class="radio">
                                                <label><input type="radio" value="">Below Average</label>
                                            </div>
                                        </div>
                                        <div class="mb-30">
                                            <h6 class="title-color mb-3">6)	What are your expectations when dining out?</h6>
                                            <div class="radio">
                                                <label><input type="radio" value="">Cost-effectiveness</label>
                                            </div>
                                            <div class="radio">
                                                <label><input type="radio" value="">Taste and quality of food</label>
                                            </div>
                                            <div class="radio">
                                                <label><input type="radio" value="">Ambenience/atmosphere of the restaurant</label>
                                            </div>
                                            <div class="radio">
                                                <label><input type="radio" value="">Trying new or unique culinary experiences</label>
                                            </div>
                                        </div>
                                    </div>
                                    <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                                    <input type="button" name="next" class="next action-button" value="Next" />
                                </fieldset>
                                <fieldset>
                                    <div class="form-card">
                                        <div class="mb-30">
                                            <h6 class="title-color mb-3">7) How do you prefer to provide feedback to restaurants?</h6>
                                            <div class="radio">
                                                <label><input type="radio" value="">Word of Mouth</label>
                                            </div>
                                            <div class="radio">
                                                <label><input type="radio" value="">Social Media</label>
                                            </div>
                                            <div class="radio">
                                                <label><input type="radio" value="">Online review platforms</label>
                                            </div>
                                            <div class="radio">
                                                <label><input type="radio" value="">Food blogs</label>
                                            </div>
                                        </div>
                                        <div class="mb-30">
                                            <h6 class="title-color mb-3">8) Which type of hospitality establishments do you mostly prefer?</h6>
                                            <div class="radio">
                                                <label><input type="radio" value="">Cost-effectiveness</label>
                                            </div>
                                            <div class="radio">
                                                <label><input type="radio" value="">Taste and quality of food</label>
                                            </div>
                                            <div class="radio">
                                                <label><input type="radio" value="">Ambenience/atmosphere of the restaurant</label>
                                            </div>
                                            <div class="radio">
                                                <label><input type="radio" value="">Trying new or unique culinary experiences</label>
                                            </div>
                                        </div>
                                    </div>
                                    <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                                    <input type="button" name="next" class="next action-button" value="Next" />
                                </fieldset>
                                <fieldset>
                                    <div class="form-card">
                                        <div class="mb-30">
                                            <h6 class="title-color mb-3">9) What amenities or services do you value the most when staying over?</h6>
                                            <div class="radio">
                                                <label><input type="radio" value="">Free Wi-Fi</label>
                                            </div>
                                            <div class="radio">
                                                <label><input type="radio" value="">Complimentary breakfast</label>
                                            </div>
                                            <div class="radio">
                                                <label><input type="radio" value="">Fitness center</label>
                                            </div>
                                            <div class="radio">
                                                <label><input type="radio" value="">Concierge services</label>
                                            </div>
                                            <div class="radio">
                                                <label><input type="radio" value="">Other</label>
                                            </div>
                                        </div>
                                        <div class="mb-30">
                                            <h6 class="title-color">10) How important is exceptional customer service in the food industry?</h6>
                                            <div class="radio">
                                                <label><input type="radio" value="">Extremely important</label>
                                            </div>
                                            <div class="radio">
                                                <label><input type="radio" value="">Somewhat important</label>
                                            </div>
                                            <div class="radio">
                                                <label><input type="radio" value="">Neutral</label>
                                            </div>
                                            <div class="radio">
                                                <label><input type="radio" value="">Not very important</label>
                                            </div>
                                            <div class="radio">
                                                <label><input type="radio" value="">Not important at all</label>
                                            </div>

                                        </div>
                                    </div>
                                    <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                                    <input type="button" name="make_payment" class="next action-button" value="Finish" />
                                </fieldset>
                                <fieldset>
                                    <div class="form-card">
                                        <h2 class="fs-title text-center">Success !</h2>
                                        <br><br>
                                        <div class="row justify-content-center">
                                            <div class="col-3">
                                                <img src="https://img.icons8.com/color/96/000000/ok--v2.png" class="fit-image">
                                            </div>
                                        </div>
                                        <div class="row justify-content-center mt-3">
        <div class="col-6 text-center">
        
            <a href="invoice.php" class="next action-button">Open To see your Winnings</a>
            <!-- Inside the form -->
<input type="hidden" id="openModalBtn">

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