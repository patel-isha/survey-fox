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
                                <h2 class="title-color"><strong>Travel <span class="orange">Survey</span></strong></h2>
                                <!-- fieldsets -->
                                <fieldset>
                                    <div class="form-card text-center pb-0">
                                        <div class="typewriter">
                                            <h2 class="tagline mb-2 line1">Explore Your Travel Preferences:</h2>
                                            <h2 class="tagline orange line2 mb-2 hidden">Start Your Journey Now!</h2>
                                        </div>
                                        <img src="assets/img/begin-survey.jpg" class="w-50">
                                    </div>
                                    <input type="button" name="next" class="next action-button w-25" value="Begin Survey" />
                                </fieldset>
                                <fieldset name="step1">
                                    <div class="form-card">
                                        <div class="mb-30">
                                            <label for="txtFullname">Full name:</label>
                                            <input type="text" class="form-control" id="txtFullname" name="txtFullname" placeholder="Please enter your full name" required>
                                        </div>
                                        <div class="mb-30">
                                            <label for="txtEmail">Email Id:</label>
                                            <input type="email" class="form-control" id="txtEmail" name="txtEmail" placeholder="Please enter your email id" required>
                                        </div>
                                        <input type="hidden" id="hdnMainEnrollId" name="generatedId" value="">
                                    </div>
                                    <input type="button" class="action-button" value="Start" onClick="EnrollSurvey();" />
                                </fieldset>
                                <fieldset name="step2">
                                    <div class="form-card">
                                        <!-- checkbox -->
                                        <div class="mb-30">
                                            <h6 class="title-color">1) What type of traveler are you?</h6>
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
                                            <h6 class="title-color">2) How often do you travel in a year?</h6>
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
                                            <h6 class="title-color mb-3">3) Which mode of transportation do you prefer for long-distance travel?</h6>
                                            <div class="checkbox">
                                                <label><input type="checkbox" value="">Airplane</label>
                                            </div>
                                            <div class="checkbox">
                                                <label><input type="checkbox" value="">Train</label>
                                            </div>
                                            <div class="checkbox">
                                                <label><input type="checkbox" value="">Bus</label>
                                            </div>
                                            <div class="checkbox">
                                                <label><input type="checkbox" value="">Car</label>
                                            </div>
                                            <div class="checkbox">
                                                <label><input type="checkbox" value="">Cruise</label>
                                            </div>
                                        </div>
                                        <!-- radio button -->
                                        <div class="mb-30">
                                            <h6 class="title-color mb-3">4) What influences your destination choice the most?</h6>
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
                                            <h6 class="title-color mb-3">5) What type of accommodation do you prefer?</h6>
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
                                            <h6 class="title-color">6) How do you plan your travel itinerary?</h6>
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
                                            <h6 class="title-color mb-3">7) What activities do you enjoy most while traveling? (Select all that apply)</h6>
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
                                            <h6 class="title-color mb-3">8) How do you prefer to book your travel arrangements?</h6>
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
                                            <h6 class="title-color mb-3">9) How important is sustainable/eco-friendly travel to you?</h6>
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
                                            <h6 class="title-color mb-3">10) How do you typically document your travel experiences?</h6>
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
                success: function(response) {
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
                error: function(xhr, status, error) {
                    // Handle error
                    console.error(xhr.responseText);
                }
            });
        }

        function showNextStep(stepname) {
            // Hide the current step
            var currentStep = document.querySelector('fieldset[name="step1"]');
            currentStep.style.display = 'none';

            // Show the next step
            var nextStep = document.querySelector('fieldset[name="step2"]');
            nextStep.style.display = 'block';

            // Add 'active' class to the corresponding progress bar item
            var currentProgressBarItem = document.querySelector('#step1');
            var nextProgressBarItem = document.querySelector('#step2');

            // Add 'active' class to next progress bar item
            nextProgressBarItem.classList.add('active');
        }

        document.addEventListener('DOMContentLoaded', function() {
            var line1 = document.querySelector('.line1');
            var line2 = document.querySelector('.line2');
            var text1 = line1.textContent.trim();
            var text2 = line2.textContent.trim();

            function typeLine1() {
                line1.textContent = '';
                var index = 0;
                var typingInterval = setInterval(function() {
                    line1.textContent += text1[index++];
                    if (index === text1.length) {
                        clearInterval(typingInterval);
                        line2.classList.remove('hidden');
                        typeLine2();
                    }
                }, 100);
            }

            function typeLine2() {
                line2.textContent = '';
                var index = 0;
                var typingInterval = setInterval(function() {
                    line2.textContent += text2[index++];
                    if (index === text2.length) {
                        clearInterval(typingInterval);
                        setTimeout(function() {
                            line1.textContent = '';
                            line2.textContent = '';
                            line2.classList.add('hidden');
                            typeLine1();
                        }, 1000); // Delay before restarting typing
                    }
                }, 100);
            }

            typeLine1();
        });
    </script>
</body>

</html>