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
                                    <li class="active" id="step1"></li>
                                    <li id="step2"></li>
                                    <li id="step3"></li>
                                    <li id="step4"></li>
                                    <li id="step5"></li>
                                    <li id="step6"></li>
                                </ul>
                                <h2 class="title-color"><strong>Travel <span class="orange">Survey</span></strong></h2>
                                <!-- fieldsets -->
                                <fieldset>
                                    <div class="form-card">
                                        <div class="mb-30">
                                            <h6 class="title-color">1) What type of traveler are you?</h6>
                                            <textarea class="form-control" rows="3"></textarea>
                                        </div>
                                        <div class="mb-30">
                                            <h6 class="title-color">2) How often do you travel in a year?</h6>
                                            <textarea class="form-control" rows="3"></textarea>
                                        </div>
                                    </div>
                                    <input type="button" name="next" class="next action-button" value="Next" />
                                </fieldset>
                                <fieldset>
                                    <div class="form-card">
                                        <div class="mb-30">
                                            <h6 class="title-color mb-3">3) Which mode of transportation do you prefer for long-distance travel?</h6>
                                            <textarea class="form-control" rows="3"></textarea>
                                        </div>
                                        <div class="mb-30">
                                            <h6 class="title-color mb-3">4) What influences your destination choice the most?</h6>
                                            <textarea class="form-control" rows="3"></textarea>
                                        </div>
                                    </div>
                                    <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                                    <input type="button" name="next" class="next action-button" value="Next" />
                                </fieldset>
                                <fieldset>
                                    <div class="form-card">
                                        <div class="mb-30">
                                            <h6 class="title-color mb-3">5) What type of accommodation do you prefer?</h6>
                                            <textarea class="form-control" rows="3"></textarea>
                                        </div>
                                        <div class="mb-30">
                                            <h6 class="title-color">6) How do you plan your travel itinerary?</h6>
                                            <textarea class="form-control" rows="3"></textarea>
                                        </div>
                                    </div>
                                    <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                                    <input type="button" name="make_payment" class="next action-button" value="Next" />
                                </fieldset>
                                <fieldset>
                                    <div class="form-card">
                                        <div class="mb-30">
                                            <h6 class="title-color mb-3">7) What activities do you enjoy most while traveling? (Select all that apply)</h6>
                                            <textarea class="form-control" rows="3"></textarea>
                                        </div>
                                        <div class="mb-30">
                                            <h6 class="title-color mb-3">8) How do you prefer to book your travel arrangements?</h6>
                                            <textarea class="form-control" rows="3"></textarea>
                                        </div>
                                    </div>
                                    <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                                    <input type="button" name="next" class="next action-button" value="Next" />
                                </fieldset>
                                <fieldset>
                                    <div class="form-card">
                                        <div class="mb-30">
                                            <h6 class="title-color mb-3">9) How important is sustainable/eco-friendly travel to you?</h6>
                                            <textarea class="form-control" rows="3"></textarea>
                                        </div>
                                        <div class="mb-30">
                                            <h6 class="title-color mb-3">10) How do you typically document your travel experiences?</h6>
                                            <textarea class="form-control" rows="3"></textarea>
                                        </div>
                                    </div>
                                    <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                                    <input type="button" name="next" class="next action-button" value="Finish" />
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