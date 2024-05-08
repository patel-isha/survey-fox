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
        <div class="row justify-content-center align-items-center h-inherit mt-0">
            <div class="col-11 col-sm-9 col-md-7 col-lg-6 text-center p-0 mt-3 mb-2">
                <div class="card px-0 pb-0 mt-3 mb-3">
                    <div class="bg-white pt-2 br8">
                        <img src="assets/img/logo/logo.png" class="m-auto w-25">
                    </div>
                    <div class="row">
                        <div class="col-md-12 mx-0">
                            <form id="msform">
                                <!-- progressbar -->
                                <ul id="progressbar">
                                    <li class="active" id="step1"></li>
                                    <li id="step2"></li>
                                    <li id="step3"></li>
                                    <li id="step4"></li>
                                </ul>
                                <h3 class="navy-blue"><strong>Travel <span class="light-blue">Survey</span></strong></h3>
                                <!-- fieldsets -->
                                <fieldset>
                                    <div class="form-card">
                                        <div class="mb-30">
                                            <h6 class="navy-blue">1) What type of traveler are you?</h6>
                                            <div class="checkbox">
                                                <label><input type="checkbox" value="">Option 1</label>
                                            </div>
                                            <div class="checkbox">
                                                <label><input type="checkbox" value="">Option 2</label>
                                            </div>
                                            <div class="checkbox">
                                                <label><input type="checkbox" value="">Option 3</label>
                                            </div>
                                        </div>
                                        <div class="mb-30">
                                            <h6 class="navy-blue">2) How often do you travel in a year?</h6>
                                            <div class="radio">
                                                <label><input type="radio" name="optradio" checked>Option 1</label>
                                            </div>
                                            <div class="radio">
                                                <label><input type="radio" name="optradio">Option 2</label>
                                            </div>
                                            <div class="radio">
                                                <label><input type="radio" name="optradio">Option 3</label>
                                            </div>
                                        </div>
                                    </div>
                                    <input type="button" name="next" class="next action-button" value="Next" />
                                </fieldset>
                                <fieldset>
                                    <div class="form-card">
                                        <div class="mb-30">
                                            <h6 class="navy-blue mb-3">3) Which mode of transportation do you prefer for long-distance travel?</h6>
                                            <input type="text" class="form-control">
                                        </div>
                                        <div class="mb-30">
                                            <h6 class="navy-blue mb-3">4) What influences your destination choice the most?</h6>
                                            <textarea class="form-control" rows="5"></textarea>
                                        </div>
                                    </div>
                                    <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                                    <input type="button" name="next" class="next action-button" value="Next" />
                                </fieldset>
                                <fieldset>
                                    <div class="form-card">
                                        <div class="mb-30">
                                            <h6 class="navy-blue mb-3">5) What type of accommodation do you prefer?</h6>
                                            <div class="radio-group">
                                                <input type="radio" id="image1" name="image" value="image1" class="none">
                                                <label class='radio-inline radio-label' for="image1">
                                                    <img src="assets/img/icons/hotel.png" height="80px" class="radio-button-img">
                                                    <figcaption class="text-center">Hotel</figcaption>
                                                </label>

                                                <input type="radio" id="image2" name="image" value="image2" class="none">
                                                <label class='radio-inline radio-label' for="image2">
                                                    <img src="assets/img/icons/hostel.png" height="80px" class="radio-button-img">
                                                    <figcaption class="text-center">Hostel</figcaption>
                                                </label>

                                                <input type="radio" id="image3" name="image" value="image3" class="none">
                                                <label class='radio-inline radio-label' for="image3">
                                                    <img src="assets/img/icons/camping.png" height="80px" class="radio-button-img">
                                                    <figcaption class="text-center">Camping</figcaption>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="mb-30">
                                            <h6 class="navy-blue">6) How do you plan your travel itinerary?</h6>
                                            <div class="radio">
                                                <label><input type="radio" name="optradio" checked>Option 1</label>
                                            </div>
                                            <div class="radio">
                                                <label><input type="radio" name="optradio">Option 2</label>
                                            </div>
                                            <div class="radio">
                                                <label><input type="radio" name="optradio">Option 3</label>
                                            </div>
                                            <div class="radio">
                                                <label><input type="radio" name="optradio">Other (please specify):</label>
                                                <input type="text" class="form-control mt-2 ml-20">
                                            </div>

                                        </div>
                                    </div>
                                    <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                                    <input type="button" name="make_payment" class="next action-button" value="Finish" />
                                </fieldset>
                                <fieldset>
                                    <div class="form-card">
                                        <h2 class="fs-title text-center">Success !</h2>
                                        <br>
                                        <div class="row justify-content-center">
                                            <div class="col-3">
                                                <img src="https://img.icons8.com/color/96/000000/ok--v2.png" class="fit-image">
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
        <footer class="text-center mt-5">
            <p class="mb-0 pb-2 text-white">Powered by Survey Fox</p>
        </footer>
    </div>

    <?php
    include 'include/footer-scripts.php';
    ?>
</body>

</html>