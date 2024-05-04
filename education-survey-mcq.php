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
                <?php
                if (isset($_GET['sid'])) {

                    $nid = $_GET['sid'];

                    // Fetch customer details based on the provided ID
                    $surv_sql = "SELECT s.*, c.CompanyName, c.Logo FROM tbl_surveys  s
                                    inner join tbl_customer c on c.CustomerId = s.CustomerId
                                    WHERE s.Surveyid = $nid";

                    $result = $conn->query($surv_sql);

                    if ($result->num_rows > 0) {
                        $sur_row = $result->fetch_assoc();
                ?>
                        <div class="card px-0 pb-0 mt-3 mb-3">
                            <div class="bg-theme pt-2 pb-2 br8">
                                <?php
                                if (strlen($sur_row['Logo']) > 0) {

                                    echo "<img src='siteimages/company/" . $sur_row['Logo'] . "' class='m-auto w-30' alt='" . $sur_row['CompanyName'] . "'>";
                                } else {
                                    echo "<h2 class='navy-blue text-white'><strong>" . $sur_row['CompanyName'] . "</strong></h2>";
                                }
                                ?>

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

                                        <h3 class="navy-blue"><strong><?php echo $sur_row['Name']; ?> <span class="light-blue">Survey</span></strong></h3>
                                        <!-- fieldsets -->
                                        <fieldset name="step0">
                                            <div class="typewriter mb-3">
                                                <div class="typewrite display-4" style="font-size: 2.5rem!important; height: 20%!important" data-period="2000" data-type='[ "Embark on a Journey with our Survey Experience", "Your feedback matters!"]'>
                                                    <span class="wrap"></span>

                                                </div>
                                            </div>
                                            <div class="form-card pb-0">
                                                <p>
                                                    <?php echo $sur_row['Description']; ?>
                                                    <img src="assets/img/logo/landing.png" alt="Description of the image" style="width: 100%; height: auto;">
                                                </p>

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
                                            <input type="button" class="action-button next" value="Start" onClick="EnrollSurvey();" />
                                            <!--  -->
                                        </fieldset>
                                        <fieldset name="step2">
                                            <div class="form-card">
                                                <!-- checkbox -->
                                                <div class="mb-30">
                                                    <h6 class="navy-blue">1) What is your age group?</h6>
                                                    <div class="radio">
                                                        <label><input type="radio" name="optAge" checked value="Under 18" qid="24">Under 18</label>
                                                    </div>
                                                    <div class="radio">
                                                        <label><input type="radio" name="optAge" value="18 to 24" qid="24">18 to
                                                            24</label>
                                                    </div>
                                                    <div class="radio">
                                                        <label><input type="radio" name="optAge" value="25 to 45" qid="24">25 to
                                                            45</label>
                                                    </div>
                                                    <div class="radio">
                                                        <label><input type="radio" name="optAge" value="46 to 60" qid="24">46 to
                                                            60</label>
                                                    </div>
                                                    <div class="radio">
                                                        <label><input type="radio" name="optAge" value="Above 60" qid="24">Above
                                                            60</label>
                                                    </div>

                                                </div>
                                                <!-- radio button -->
                                                <div class="mb-30">
                                                    <h6 class="navy-blue">2) What is your highest level of education?</h6>
                                                    <div class="radio">
                                                        <label><input type="radio" name="optHighEdu" checked value="High School" qid="25">High School</label>
                                                    </div>
                                                    <div class="radio">
                                                        <label><input type="radio" name="optHighEdu" value="Bachelor Degree" qid="25">Bachelor Degree</label>
                                                    </div>
                                                    <div class="radio">
                                                        <label><input type="radio" name="optHighEdu" value="Master Degree" qid="25">Master Degree</label>
                                                    </div>
                                                    <div class="radio">
                                                        <label><input type="radio" name="optHighEdu" value="PHD" qid="25">PHD</label>
                                                    </div>
                                                    <div class="radio">
                                                        <label><input type="radio" name="optHighEdu" value="Other" qid="25">Other</label>
                                                        <input type="text" class="form-control mt-2 ml-20" qid="25" name="qid25other">
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
                                                    <h6 class="navy-blue mb-3">3) What is your primary field of interest?</h6>
                                                    <div class="radio">
                                                        <label><input type="radio" name="optPrimaryInterest" checked value="Education" qid="26">Education</label>
                                                    </div>
                                                    <div class="radio">
                                                        <label><input type="radio" name="optPrimaryInterest" value="Cultural" qid="26">Cultural</label>
                                                    </div>
                                                    <div class="radio">
                                                        <label><input type="radio" name="optPrimaryInterest" value="Both" qid="26">Both</label>
                                                    </div>
                                                </div>
                                                <!-- radio button -->
                                                <div class="mb-30">
                                                    <h6 class="navy-blue mb-3">4) Have you attended any programs or courses
                                                        offered by our institute?</h6>
                                                    <div class="radio">
                                                        <label><input type="radio" name="optPastProg" checked value="Yes" qid="27">Yes</label>
                                                    </div>
                                                    <div class="radio">
                                                        <label><input type="radio" name="optPastProg" value="No" qid="27">No</label>
                                                    </div>
                                                </div>
                                                <!-- radio button -->
                                                <div class="mb-30">
                                                    <h6 class="navy-blue mb-3">5) If yes, please rate the overall quality of
                                                        the programs/courses.</h6>
                                                    <div class="radio">
                                                        <label><input type="radio" name="optQArating" checked value="Excellent" qid="28">Excellent</label>
                                                    </div>
                                                    <div class="radio">
                                                        <label><input type="radio" name="optQArating" value="Good" qid="28">Good</label>
                                                    </div>
                                                    <div class="radio">
                                                        <label><input type="radio" name="optQArating" value="Fair" qid="28">Fair</label>
                                                    </div>
                                                    <div class="radio">
                                                        <label><input type="radio" name="optQArating" value="Poor" qid="28">Poor</label>
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
                                                    <h6 class="navy-blue mb-3">6) Which aspect of the programs/courses did you
                                                        find most valuable? (Select all that apply)</h6>
                                                    <div class="checkbox">
                                                        <label><input type="checkbox" value="Content relevance" qid="29" name="chkProgs">Content relevance</label>
                                                    </div>
                                                    <div class="checkbox">
                                                        <label><input type="checkbox" value="Teaching methodology" qid="29" name="chkProgs">Teaching methodology</label>
                                                    </div>
                                                    <div class="checkbox">
                                                        <label><input type="checkbox" value="Instructor expertise" qid="29" name="chkProgs">Instructor expertise</label>
                                                    </div>
                                                    <div class="checkbox">
                                                        <label><input type="checkbox" value="Networking opportunities" qid="29" name="chkProgs">Networking opportunities</label>
                                                    </div>
                                                    <div class="checkbox">
                                                        <label><input type="checkbox" value="Any other education courses" qid="29" name="chkProgs">Any other education courses</label>
                                                        <input type="text" class="form-control mt-2 ml-20" qid="29" name="qid29other">
                                                    </div>
                                                </div>
                                                <!-- radio button -->
                                                <div class="mb-30">
                                                    <h6 class="navy-blue">7) How would you rate the facilities and resources
                                                        provided by our institute? (e.g., libraries, labs, cultural centers)
                                                    </h6>
                                                    <div class="radio">
                                                        <label><input type="radio" name="optRatings" checked value="Excellent" qid="30">Excellent</label>
                                                    </div>
                                                    <div class="radio">
                                                        <label><input type="radio" name="optRatings" value="Good" qid="30">Good</label>
                                                    </div>
                                                    <div class="radio">
                                                        <label><input type="radio" name="optRatings" value="Fair" qid="30">Fair</label>
                                                    </div>
                                                    <div class="radio">
                                                        <label><input type="radio" name="optRatings" value="Poor" qid="30">Poor</label>
                                                    </div>
                                                </div>
                                                <div class="mb-30">
                                                    <h6 class="navy-blue">8) How do you typically stay informed about
                                                        institute events and updates?</h6>
                                                    <div class="radio">
                                                        <label><input type="radio" name="optInfo" checked value="Email newsletters" qid="31">Email newsletters</label>
                                                    </div>
                                                    <div class="radio">
                                                        <label><input type="radio" name="optInfo" checked value="Social media" qid="31">Social media</label>
                                                    </div>
                                                    <div class="radio">
                                                        <label><input type="radio" name="optInfo" checked value="Website" qid="31">Website</label>
                                                    </div>

                                                    <div class="radio">
                                                        <label><input type="radio" name="optInfo" checked value="Posters/flyers" qid="31">Posters/flyers</label>
                                                    </div>
                                                    <div class="radio">
                                                        <label><input type="radio" name="optInfo" checked value="Other" qid="31">Other (please specify)</label>
                                                        <input type="text" class="form-control mt-2 ml-20" qid="31" name="qid31other">
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
                                                    <h6 class="navy-blue mb-3">9) How satisfied are you with the frequency and
                                                        clarity of communication from our institute?</h6>
                                                    <div class="radio">
                                                        <label><input type="radio" name="optSatisfaction" checked value="Very satisfied" qid="32">Very satisfied</label>
                                                    </div>
                                                    <div class="radio">
                                                        <label><input type="radio" name="optSatisfaction" value="Satisfied" qid="32">Satisfied</label>
                                                    </div>
                                                    <div class="radio">
                                                        <label><input type="radio" name="optSatisfaction" value="Dissatisfied" qid="32">Dissatisfied</label>
                                                    </div>
                                                    <div class="radio">
                                                        <label><input type="radio" name="optSatisfaction" value="Very dissatisfied" qid="32">Very dissatisfied</label>
                                                    </div>
                                                </div>
                                                <!-- radio button -->
                                                <div class="mb-30">
                                                    <h6 class="navy-blue mb-3">10) Do you feel our institute promotes
                                                        diversity and inclusion effectively?</h6>
                                                    <div class="radio">
                                                        <label><input type="radio" name="optFeelProm" checked value="Yes" qid="33">Yes</label>
                                                    </div>
                                                    <div class="radio">
                                                        <label><input type="radio" name="optFeelProm" value="No" qid="33">No</label>
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
                                                    <h6 class="navy-blue mb-3">11) How likely are you to recommend our
                                                        institute or website to others?</h6>
                                                    <div class="radio">
                                                        <label><input type="radio" name="optRecommend" checked value="Very likely" qid="34">Very likely</label>
                                                    </div>
                                                    <div class="radio">
                                                        <label><input type="radio" name="optRecommend" value="Likely" qid="34">Likely</label>
                                                    </div>
                                                    <div class="radio">
                                                        <label><input type="radio" name="optRecommend" value="Neutral" qid="34">Neutral</label>
                                                    </div>
                                                    <div class="radio">
                                                        <label><input type="radio" name="optRecommend" value="Unlikely" qid="34">Unlikely</label>
                                                    </div>
                                                    <div class="radio">
                                                        <label><input type="radio" name="optRecommend" value="Very unlikely" qid="34">Very unlikely</label>
                                                    </div>
                                                </div>
                                                <!-- questions dynamic -->
                                                <?php

                                                $sid = $_GET['sid'];

                                                $sql = "select * from question_master where 
                                        isPredefined='0' and Surveyid=$sid";

                                                // select * from question_master where 
                                                // isPredefined='0' and
                                                // CategoryId in (
                                                // SELECT CategoryId FROM `tbl_surveys` where Surveyid=$sid )
                                                // and
                                                // CustomerId in (
                                                // SELECT CustomerId FROM `tbl_surveys` where Surveyid=$sid )
                                                $result = $conn->query($sql);

                                                if ($result->num_rows > 0) {

                                                    $Index = 12;
                                                    while ($row = $result->fetch_assoc()) {
                                                ?>

                                                        <div class="mb-30">
                                                            <h6 class="navy-blue mb-3"><?php echo $Index ?>)
                                                                <?php echo $row['Question'] ?>
                                                            </h6>

                                                            <!-- Type - Textbox, Radio, Checkbox -->
                                                            <?php
                                                            $Qid = $row['Qid'];
                                                            $AnsType = $row['Type'];
                                                            $OptionText = $row['OptionText'];
                                                            if ($AnsType == "Textbox") {
                                                                echo "<input type='text' class='form-control mt-2 ml-20' qid='$Qid'
                                                        name='txt$Qid'>";
                                                            } else if ($AnsType == "Radio") {
                                                                $valueArray = explode(", ", $OptionText);

                                                                // Loop through the array
                                                                foreach ($valueArray as $value) {
                                                                    echo "<div class='radio'>
                                                            <label><input type='radio' name='rdn$Qid' checked value='$value'
                                                                    qid='$Qid'>$value</label>
                                                        </div>";
                                                                }
                                                            } else if ($AnsType == "Checkbox") {
                                                                $valueArray = explode(", ", $OptionText);

                                                                // Loop through the array
                                                                foreach ($valueArray as $value) {
                                                                    echo "<div class='checkbox'>
                                                            <label><input type='checkbox' value='$value'
                                                                    qid='$Qid' name='chkDyno$Qid'>$value</label>
                                                            </div>";
                                                                }
                                                            } else {
                                                                echo "<input type='text' class='form-control mt-2 ml-20' qid='$Qid'
                                                        name='txt$Qid'>";
                                                            }
                                                            ?>



                                                        </div>


                                                <?php
                                                        $Index = $Index + 1;
                                                    }

                                                    echo "";
                                                } else {
                                                    echo "";
                                                }
                                                ?>

                                                <div class="mb-30">
                                                    <h6 class="navy-blue mb-3">Give us feedback or suggestion (if any)</h6>
                                                    <textarea class="form-control" rows="3" id="txtSuggestion" name="txtSuggestion"></textarea>

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
                                        <div class="row justify-content-center mt-3">
        <div class="col-6 text-center">
        
        <a href="#" id="viewInvoiceLink" class="btn btn-primary action-button">Open to View Winnings</a>



        
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
                        <!-- Main survey end statement -->
                <?php
                    } else {
                        echo "Survey not found.";
                    }
                } else {
                    echo "Invalid request. Please provide a Survey id.";
                }
                ?>
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
        }
    </script>
</body>

</html>