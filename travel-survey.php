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
                        <img src="assets/img/logo/logo-blue.png" class="m-auto w-25">
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
                                        <div class="typewriter mb-1">
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
                                        <div class="mb-30">
                                            <h6 class="navy-blue">1) What type of traveler are you?</h6>
                                            <textarea class="form-control" rows="3" qid="1"></textarea>
                                        </div>
                                        <div class="mb-30">
                                            <h6 class="navy-blue">2) How often do you travel in a year?</h6>
                                            <textarea class="form-control" rows="3" qid="2"></textarea>
                                        </div>
                                    </div>
                                    <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                                    <input type="button" name="next" class="next action-button" value="Next" onclick="saveDataAndSend('step2');" />
                                </fieldset>
                                <fieldset name="step3">
                                    <div class="form-card">
                                        <div class="mb-30">
                                            <h6 class="navy-blue mb-3">3) Which mode of transportation do you prefer for long-distance travel?</h6>
                                            <textarea class="form-control" rows="3" qid="3"></textarea>
                                        </div>
                                        <div class="mb-30">
                                            <h6 class="navy-blue mb-3">4) What influences your destination choice the most?</h6>
                                            <textarea class="form-control" rows="3" qid="4"></textarea>
                                        </div>
                                    </div>
                                    <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                                    <input type="button" name="next" class="next action-button" value="Next" onclick="saveDataAndSend('step3');" />
                                </fieldset>
                                <fieldset name="step4">
                                    <div class="form-card">
                                        <div class="mb-30">
                                            <h6 class="navy-blue mb-3">5) What type of accommodation do you prefer?</h6>
                                            <textarea class="form-control" rows="3" qid="5"></textarea>
                                        </div>
                                        <div class="mb-30">
                                            <h6 class="navy-blue">6) How do you plan your travel itinerary?</h6>
                                            <textarea class="form-control" rows="3" qid="6"></textarea>
                                        </div>
                                    </div>
                                    <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                                    <input type="button" name="make_payment" class="next action-button" value="Next" />
                                </fieldset>
                                <fieldset name="step5">
                                    <div class="form-card">
                                        <div class="mb-30">
                                            <h6 class="navy-blue mb-3">7) What activities do you enjoy most while traveling? (Select all that apply)</h6>
                                            <textarea class="form-control" rows="3" qid="7"></textarea>
                                        </div>
                                        <div class="mb-30">
                                            <h6 class="navy-blue mb-3">8) How do you prefer to book your travel arrangements?</h6>
                                            <textarea class="form-control" rows="3" qid="8"></textarea>
                                        </div>
                                    </div>
                                    <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                                    <input type="button" name="next" class="next action-button" value="Next" />
                                </fieldset>
                                <fieldset name="step6">
                                    <div class="form-card">
                                        <div class="mb-30">
                                            <h6 class="navy-blue mb-3">9) How important is sustainable/eco-friendly travel to you?</h6>
                                            <textarea class="form-control" rows="3" qid="9"></textarea>
                                        </div>
                                        <div class="mb-30">
                                            <h6 class="navy-blue mb-3">10) How do you typically document your travel experiences?</h6>
                                            <textarea class="form-control" rows="3" qid="10"></textarea>
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
        
        <footer class="text-center mt-5">
            <p class="mb-0 pb-2 text-white">Powered by Survey Fox</p>
        </footer>
    </div>

    <?php
    include 'include/footer-scripts.php';
    ?>

    <script type="text/javascript">
        function saveDataAndSend(fieldID) {
            var formDataArray = [];
            var fieldset = $('fieldset[name="' + fieldID + '"]');
            var ResponsID = $('#hdnMainEnrollId').val();

            // Loop through selected input elements within the fieldset
            fieldset.find('input:checked, input[type="text"], select, textarea').each(function() {
                var fieldName = $(this).attr('name');
                var qidValue = $(this).attr('qid'); // Retrieve the qid attribute value
                var value = $(this).val();

                if (fieldName !== "txtFullname") {
                    // Debug information
                    console.log("Fieldname- " + fieldName + " -- qid-" + qidValue + "--" + value);

                    // Store field name, qid, and value in a field data object
                    var fieldData = {
                        qid: qidValue,
                        answer: value,
                        SR_Id: ResponsID
                    };

                    // Push the field data object into the formDataArray
                    formDataArray.push(fieldData);
                }
            });

            console.log(formDataArray);

            // Send data to the server using AJAX
            $.ajax({
                url: 'save_answers.php',
                type: 'POST',
                data: {
                    formData: formDataArray
                },
                success: function(response) {
                    console.log('Data saved successfully:', response);
                },
                error: function(xhr, status, error) {
                    console.error('Error:', error);
                }
            });
        }
    </script>

</body>

</html>