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
            <div class="col-11 col-sm-9 col-md-7 col-lg-6 text-center p-0 mt-1 mb-1">
                <div class="card px-0 pb-0 mt-3 mb-3">
                    <div class="bg-white pt-2 pb-2 br8">
                        <img src="assets/img/logo/logo-blue.png" class="m-auto w-30">
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
                                <h3 class="navy-blue"><strong>Travel <span class="light-blue">Survey</span></strong></h3>
                                <!-- fieldsets -->
                                <fieldset name="step0">
                                    <div class="form-card text-center pb-0">
                                        <div class="typewriter mb-3">
                                            <h4 class="tagline mb-2 line1">Explore Your Travel Preferences:</h4>
                                            <h4 class="tagline light-blue line2 mb-2 hidden">Start Your Journey Now!</h4>
                                        </div>
                                        <img src="assets/img/begin-survey.jpg" class="w-40">
                                    </div>

                                    <input type="button" name="next" class="next action-button" value="Get Started" />
                                </fieldset>
                                <fieldset name="step1">
                                    <div class="form-card">
                                        <div class="mb-30">
                                            <h6 class="navy-blue mb-3">Full name</h6>
                                            <input type="text" class="form-control" name="txtFullname" id="txtFullname" required>
                                        </div>
                                        <div class="mb-30">
                                            <h6 class="navy-blue mb-3">Email</h6>
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
                                        <!-- checkbox -->
                                        <div class="mb-30">
                                            <h6 class="navy-blue">1) What type of traveler are you?</h6>
                                            <div class="checkbox">
                                                <label><input type="checkbox" value="">Adventure seeker</label>
                                            </div>
                                            <div class="checkbox">
                                                <label><input type="checkbox" value="">Relaxation enthusiast</label>
                                            </div>
                                            <div class="checkbox">
                                                <label><input type="checkbox" value="">Foodie traveler</label>
                                            </div>
                                            <div class="checkbox">
                                                <label><input type="checkbox" value="">Relaxation enthusiast</label>
                                            </div>
                                            <div class="checkbox">
                                                <label><input type="checkbox" value="">Business traveler</label>
                                            </div>
                                        </div>
                                        <!-- radio button -->
                                        <div class="mb-30">
                                            <h6 class="navy-blue">2) How often do you travel in a year?</h6>
                                            <div class="radio">
                                                <label><input type="radio" name="optradio" checked>Less than once</label>
                                            </div>
                                            <div class="radio">
                                                <label><input type="radio" name="optradio">1-2 times</label>
                                            </div>
                                            <div class="radio">
                                                <label><input type="radio" name="optradio">3-5 times</label>
                                            </div>
                                            <div class="radio">
                                                <label><input type="radio" name="optradio">More than 5 times</label>
                                            </div>
                                        </div>
                                    </div>
                                    <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                                    <input type="button" name="next" class="next action-button" value="Next" />
                                </fieldset>
                                <fieldset name="step3">
                                    <div class="form-card">
                                        <!-- checkbox -->
                                        <div class="mb-30">
                                            <h6 class="navy-blue mb-3">3) Which mode of transportation do you prefer for long-distance travel? (Can select more than one)</h6>
                                            <div class="radio-group">
                                                <input type="checkbox" id="image6" name="image6" value="image6" class="none">
                                                <label class='checkbox-inline radio-label' for="image6">
                                                    <img src="assets/img/icons/airplane.png" height="80px" class="radio-button-img">
                                                    <figcaption class="text-center caption-position">Airplane</figcaption>
                                                </label>
                                                <input type="checkbox" id="image7" name="image7" value="image7" class="none">
                                                <label class='checkbox-inline radio-label' for="image7">
                                                    <img src="assets/img/icons/train.png" height="80px" class="radio-button-img">
                                                    <figcaption class="text-center caption-position">Train</figcaption>
                                                </label>
                                                <input type="checkbox" id="image8" name="image8" value="image8" class="none">
                                                <label class='checkbox-inline radio-label' for="image8">
                                                    <img src="assets/img/icons/bus.png" height="80px" class="radio-button-img">
                                                    <figcaption class="text-center caption-position">Bus</figcaption>
                                                </label>
                                                <input type="checkbox" id="image9" name="image9" value="image9" class="none">
                                                <label class='checkbox-inline radio-label' for="image9">
                                                    <img src="assets/img/icons/car.png" height="80px" class="radio-button-img">
                                                    <figcaption class="text-center caption-position">Car</figcaption>
                                                </label>
                                                <input type="checkbox" id="image10" name="image10" value="image10" class="none">
                                                <label class='checkbox-inline radio-label' for="image10">
                                                    <img src="assets/img/icons/cruise.png" height="80px" class="radio-button-img">
                                                    <figcaption class="text-center caption-position">Cruise</figcaption>
                                                </label>
                                            </div>
                                        </div>
                                        <!-- radio button -->
                                        <div class="mb-30">
                                            <h6 class="navy-blue mb-3">4) What influences your destination choice the most?</h6>
                                            <div class="radio">
                                                <label><input type="radio" name="optradio" checked>Budget</label>
                                            </div>
                                            <div class="radio">
                                                <label><input type="radio" name="optradio">Cultural attractions</label>
                                            </div>
                                            <div class="radio">
                                                <label><input type="radio" name="optradio">Natural landscapes</label>
                                            </div>
                                            <div class="radio">
                                                <label><input type="radio" name="optradio">Cuisine</label>
                                            </div>
                                            <div class="radio">
                                                <label><input type="radio" name="optradio">Recommendations from friends/family</label>
                                            </div>
                                            <div class="radio">
                                                <label><input type="radio" name="optradio">Events/ festivals</label>
                                            </div>
                                        </div>
                                    </div>
                                    <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                                    <input type="button" name="next" class="next action-button" value="Next" />
                                </fieldset>
                                <fieldset name="step4">
                                    <div class="form-card">
                                        <!-- image radio button -->
                                        <div class="mb-30">
                                            <h6 class="navy-blue mb-3">5) What type of accommodation do you prefer?</h6>
                                            <div class="radio-group">
                                                <input type="radio" id="image1" name="image" value="image1" class="none">
                                                <label class='radio-inline radio-label' for="image1">
                                                    <img src="assets/img/icons/hotel.png" height="80px" class="radio-button-img">
                                                    <figcaption class="text-center caption-position">Hotel</figcaption>
                                                </label>

                                                <input type="radio" id="image2" name="image" value="image2" class="none">
                                                <label class='radio-inline radio-label' for="image2">
                                                    <img src="assets/img/icons/hostel.png" height="80px" class="radio-button-img">
                                                    <figcaption class="text-center caption-position">Hostel</figcaption>
                                                </label>

                                                <input type="radio" id="image3" name="image" value="image3" class="none">
                                                <label class='radio-inline radio-label' for="image3">
                                                    <img src="assets/img/icons/vacation.png" height="80px" class="radio-button-img">
                                                    <figcaption class="text-center caption-position">Vacation Rental</figcaption>
                                                </label>

                                                <input type="radio" id="image4" name="image" value="image4" class="none">
                                                <label class='radio-inline radio-label' for="image4">
                                                    <img src="assets/img/icons/bed-and-breakfast.png" height="80px" class="radio-button-img">
                                                    <figcaption class="text-center caption-position">Bed and Breakfast</figcaption>
                                                </label>

                                                <input type="radio" id="image5" name="image" value="image5" class="none">
                                                <label class='radio-inline radio-label' for="image5">
                                                    <img src="assets/img/icons/camping.png" height="80px" class="radio-button-img">
                                                    <figcaption class="text-center caption-position">Camping</figcaption>
                                                </label>
                                            </div>
                                        </div>
                                        <!-- radio button -->
                                        <div class="mb-30">
                                            <h6 class="navy-blue">6) How do you plan your travel itinerary?</h6>
                                            <div class="radio">
                                                <label><input type="radio" name="optradio">Plan everything meticulously in advance</label>
                                            </div>
                                            <div class="radio">
                                                <label><input type="radio" name="optradio">Have a general idea but leave room for spontaneity</label>
                                            </div>
                                            <div class="radio">
                                                <label><input type="radio" name="optradio">Completely spontaneous, decide on the go</label>
                                            </div>
                                            <div class="radio">
                                                <label><input type="radio" name="optradio">Other (please specify):</label>
                                                <input type="text" class="form-control mt-2 ml-20">
                                            </div>

                                        </div>
                                    </div>
                                    <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                                    <input type="button" name="make_payment" class="next action-button" value="Next" />
                                </fieldset>
                                <fieldset name="step5">
                                    <div class="form-card">
                                        <!-- checkbox -->
                                        <div class="mb-30">
                                            <h6 class="navy-blue mb-3">7) What activities do you enjoy most while traveling? (Select all that apply)</h6>
                                            <div class="checkbox">
                                                <label><input type="checkbox" value="">Sightseeing</label>
                                            </div>
                                            <div class="checkbox">
                                                <label><input type="checkbox" value="">Outdoor adventures (hiking, snorkeling, etc.)</label>
                                            </div>
                                            <div class="checkbox">
                                                <label><input type="checkbox" value="">Culinary experiences</label>
                                            </div>
                                            <div class="checkbox">
                                                <label><input type="checkbox" value="">Shopping</label>
                                            </div>
                                            <div class="checkbox">
                                                <label><input type="checkbox" value="">Cultural experiences (museums, historical sites, etc.)</label>
                                            </div>
                                            <div class="checkbox">
                                                <label><input type="checkbox" value="">Relaxing on the beach/poolside</label>
                                            </div>
                                            <div class="checkbox">
                                                <label><input type="checkbox" value="">Nightlife</label>
                                            </div>
                                        </div>
                                        <!-- radio button -->
                                        <div class="mb-30">
                                            <h6 class="navy-blue mb-3">8) How do you prefer to book your travel arrangements?</h6>
                                            <div class="radio">
                                                <label><input type="radio" name="optradio" checked>Online travel agencies (e.g., Expedia, Booking.com)</label>
                                            </div>
                                            <div class="radio">
                                                <label><input type="radio" name="optradio">Directly through the airline/hotel website</label>
                                            </div>
                                            <div class="radio">
                                                <label><input type="radio" name="optradio">Travel agent</label>
                                            </div>
                                            <div class="radio">
                                                <label><input type="radio" name="optradio">Other (please specify):</label>
                                                <input type="text" class="form-control mt-2 ml-20">
                                            </div>
                                        </div>
                                    </div>
                                    <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                                    <input type="button" name="next" class="next action-button" value="Next" />
                                </fieldset>
                                <fieldset name="step6">
                                    <div class="form-card">
                                        <!-- radio button -->
                                        <div class="mb-30">
                                            <h6 class="navy-blue mb-3">9) How important is sustainable/eco-friendly travel to you?</h6>
                                            <div class="radio">
                                                <label><input type="radio" name="optradio" checked>Very important</label>
                                            </div>
                                            <div class="radio">
                                                <label><input type="radio" name="optradio">Somewhat important</label>
                                            </div>
                                            <div class="radio">
                                                <label><input type="radio" name="optradio">Not important</label>
                                            </div>
                                        </div>
                                        <!-- checkbox -->
                                        <div class="mb-30">
                                            <h6 class="navy-blue mb-3">10) How do you typically document your travel experiences?</h6>
                                            <div class="checkbox">
                                                <label><input type="checkbox" value="">Photos</label>
                                            </div>
                                            <div class="checkbox">
                                                <label><input type="checkbox" value="">Videos</label>
                                            </div>
                                            <div class="checkbox">
                                                <label><input type="checkbox" value="">Journals/blogs</label>
                                            </div>
                                            <div class="checkbox">
                                                <label><input type="checkbox" value="">Social media posts</label>
                                            </div>
                                            <div class="checkbox">
                                                <label><input type="checkbox" value="">None</label>
                                            </div>
                                        </div>
                                    </div>
                                    <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                                    <input type="button" name="next" class="next action-button" value="Finish" />
                                </fieldset>
                                <fieldset name="step7">
                                    <div class="form-card">
                                        <h2 class="fs-title text-center">Success !</h2>
                                        <br>
                                        <div class="row justify-content-center">
                                            <div class="col-3">
                                                <img src="https://img.icons8.com/color/96/000000/ok--v2.png" class="fit-image">
                                            </div>
                                        </div>
                                        <div class="row justify-content-center mt-3">
                                            <div class="col-6 text-center">
                                                <a href="#" id="viewInvoiceLink" class="btn btn-primary action-button w-75">View Your Invoice</a>
                                            </div>
                                        </div>
                                        <br>
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