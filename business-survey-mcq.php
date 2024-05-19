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
        <div class="col-11 col-sm-9 col-md-7 col-lg-6 text-center p-0">
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
                    <div class="bg-white pt-2 br8">
                                <?php
                                if (strlen($sur_row['Logo']) > 0) {

                                    echo "<img src='siteimages/company/" . $sur_row['Logo'] . "' class='m-auto w-25' alt='" . $sur_row['CompanyName'] . "'>";
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
                                <h3 class="navy-blue"><strong>E-Commerce & Business <span class="light-blue">Survey</span></strong></h3>
                                <!-- fieldsets -->
                                <fieldset name="step0">
                                    <div class="form-card text-center pb-0">
                                        <div class="typewriter mb-1">
                                            <h4 class="tagline mb-2 line1">Driving Business Forward</h4>
                                            <h4 class="tagline light-blue line2 mb-2 hidden">Start Your Journey Now!</h4>
                                        </div>
                                        <img src="assets/img/begin-survey.jpg" class="w-40">
                                    </div>

                                    <input type="button" name="getStarted" class="next action-button" value="Get Started" />
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
                                            <h6 class="navy-blue">1) Consumer Profile: Which of the following best describes your role in e-commerce?</h6>
                                            <div class="radio">
                                                <label><input type="radio" value="Online shopper" name="eCommerceRole" qid="35">Online shopper</label>
                                            </div>
                                            <div class="radio">
                                                <label><input type="radio" value="Small business owner" name="eCommerceRole" qid="35">Small business owner</label>
                                            </div>
                                            <div class="radio">
                                                <label><input type="radio" value="Entrepreneur" name="eCommerceRole" qid="35">Entrepreneur</label>
                                            </div>
                                            <div class="radio">
                                                <label><input type="radio" value="E-commerce platform manager" name="eCommerceRole" qid="35">E-commerce platform manager</label>
                                            </div>
                                        </div>
                                        <div class="mb-30">
                                            <h6 class="navy-blue">2) Frequency of Online Transactions: How often do you engage in online transactions?</h6>
                                            <div class="radio">
                                                <label><input type="radio" name="onlineTransactionFrequency" value="Daily" qid="36">Daily</label>
                                            </div>
                                            <div class="radio">
                                                <label><input type="radio" name="onlineTransactionFrequency" value="Weekly" qid="36">Weekly</label>
                                            </div>
                                            <div class="radio">
                                                <label><input type="radio" name="onlineTransactionFrequency" value="Monthly" qid="36">Monthly</label>
                                            </div>
                                            <div class="radio">
                                                <label><input type="radio" name="onlineTransactionFrequency" value="Rarely" qid="36">Rarely</label>
                                            </div>
                                        </div>
                                    </div>
                                    <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                                            <input type="button" name="next" onclick="saveDataAndSend('step2');" class="next action-button" value="Next" />                                </fieldset>
                                <fieldset name="step3">
                                    <div class="form-card">
                                        <div class="mb-30">
                                            <h6 class="navy-blue mb-3">3) Preferred E-commerce Platforms: Which platform do you most frequently use for online purchases?</h6>
                                            <div class="radio">
                                                <label><input type="radio" name="preferredEcommerce" value="Amazon" qid="37">Amazon</label>
                                            </div>
                                            <div class="radio">
                                                <label><input type="radio" name="preferredEcommerce" value="eBay" qid="37">eBay</label>
                                            </div>
                                            <div class="radio">
                                                <label><input type="radio" name="preferredEcommerce" value="Etsy" qid="37">Etsy</label>
                                            </div>
                                            <div class="radio">
                                                <label><input type="radio" name="preferredEcommerce" value="Shopify" qid="37">Shopify</label>
                                            </div>
                                        </div>
                                        <div class="mb-30">
                                            <h6 class="navy-blue mb-3">4) Factors Influencing Online Purchases: What most influences your decision to purchase items online?</h6>
                                            <div class="radio">
                                                <label><input type="radio" name="onlinePurchase" value="Price" qid="38">Price</label>
                                            </div>
                                            <div class="radio">
                                                <label><input type="radio" name="onlinePurchase" value="Product reviews/ratings" qid="38">Product reviews/ratings</label>
                                            </div>
                                            <div class="radio">
                                                <label><input type="radio" name="onlinePurchase" value="Brand reputation" qid="38">Brand reputation</label>
                                            </div>
                                            <div class="radio">
                                                <label><input type="radio" name="onlinePurchase" value="Shipping options" qid="38">Shipping options</label>
                                            </div>
                                        </div>
                                    </div>
                                    <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                                            <input type="button" name="next" onclick="saveDataAndSend('step4');" class="next action-button" value="Next" />
                                </fieldset>
                                <fieldset name="step4">
                                    <div class="form-card">
                                        <div class="mb-30">
                                            <h6 class="navy-blue mb-3">5) Preferred Payment Methods: How do you prefer to pay for online purchases?</h6>
                                            <div class="radio">
                                                <label><input type="radio" name="paymentMethod" value="Credit/debit card" qid="39">Credit/debit card</label>
                                            </div>
                                            <div class="radio">
                                                <label><input type="radio" name="paymentMethod" value="Paypal" qid="39">Paypal</label>
                                            </div>
                                            <div class="radio">
                                                <label><input type="radio" name="paymentMethod" value="Mobile payment apps" qid="39">Mobile payment apps</label>
                                            </div>
                                            <div class="radio">
                                                <label><input type="radio" name="paymentMethod" value="Bank transfer" qid="39">Bank transfer</label>
                                            </div>
                                        </div>
                                        <div class="mb-30">
                                            <h6 class="navy-blue mb-3">6) Market Analysis: What methods do you use to conduct market research for your business?</h6>
                                            <div class="radio">
                                                <label><input type="radio" name="marketAnalysis" value="Surveys and interviews" qid="40">Surveys and interviews</label>
                                            </div>
                                            <div class="radio">
                                                <label><input type="radio" name="marketAnalysis" value="Competitive analysis" qid="40">Competitive analysis</label>
                                            </div>
                                            <div class="radio">
                                                <label><input type="radio" name="marketAnalysis" value="Industry reports and studies" qid="40">Industry reports and studies</label>
                                            </div>
                                            <div class="radio">
                                                <label><input type="radio" name="marketAnalysis" value="Online analytics tools" qid="40">Online analytics tools</label>
                                            </div>
                                        </div>
                                    </div>
                                    <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                                            <input type="button" name="next" onclick="saveDataAndSend('step4');" class="next action-button" value="Next" />
                                </fieldset>
                                <fieldset name="step5">
                                    <div class="form-card">
                                        <div class="mb-30">
                                            <h6 class="navy-blue mb-3">7) Business Performance: How would you rate your business's performance in the past year?</h6>
                                            <div class="radio">
                                                <label><input type="radio" name="businessPerformance" value="Excellent" qid="41">Excellent</label>
                                            </div>
                                            <div class="radio">
                                                <label><input type="radio" name="businessPerformance" value="Good" qid="41">Good</label>
                                            </div>
                                            <div class="radio">
                                                <label><input type="radio" name="businessPerformance" value="Average" qid="41">Average</label>
                                            </div>
                                            <div class="radio">
                                                <label><input type="radio" name="businessPerformance" value="Below average" qid="41">Below average</label>
                                            </div>
                                        </div>
                                        <div class="mb-30">
                                            <h6 class="navy-blue mb-3">8) Marketing Strategies: Which marketing channels do you primarily use to promote your business?</h6>
                                            <div class="radio">
                                                <label><input type="radio" name="marketingStrategies" value="Surveys and interviews" qid="42">Surveys and interviews</label>
                                            </div>
                                            <div class="radio">
                                                <label><input type="radio" name="marketingStrategies" value="Competitive analysis" qid="42">Competitive analysis</label>
                                            </div>
                                            <div class="radio">
                                                <label><input type="radio" name="marketingStrategies" value="Industry reports and studies" qid="42">Industry reports and studies</label>
                                            </div>
                                            <div class="radio">
                                                <label><input type="radio" name="marketingStrategies" value="Online analytics tools" qid="42">Online analytics tools</label>
                                            </div>
                                        </div>
                                    </div>
                                    <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                                            <input type="button" name="next" onclick="saveDataAndSend('step5');" class="next action-button" value="Next" />
                                </fieldset>
                                <fieldset name="step6">
                                            <div class="form-card">
                                                <!-- radio button -->
                                                <div class="mb-30">
                                                    <h6 class="navy-blue mb-3">9) How important is sustainable/eco-friendly travel to you?</h6>
                                                    <div class="radio">
                                                        <label><input type="radio" name="sustainable" value="Very important" qid="9">Very important</label>
                                                    </div>
                                                    <div class="radio">
                                                        <label><input type="radio" name="sustainable" value="Somewhat important" qid="9">Somewhat important</label>
                                                    </div>
                                                    <div class="radio">
                                                        <label><input type="radio" name="sustainable" value="Not important" qid="9">Not important</label>
                                                    </div>
                                                </div>
                                                <!-- checkbox -->
                                                <div class="mb-30">
                                                    <h6 class="navy-blue mb-3">10) How do you typically document your travel experiences?</h6>
                                                    <div class="checkbox">
                                                        <label><input type="checkbox" name="document" value="Photos" qid="10">Photos</label>
                                                    </div>
                                                    <div class="checkbox">
                                                        <label><input type="checkbox" name="document" value="Videos" qid="10">Videos</label>
                                                    </div>
                                                    <div class="checkbox">
                                                        <label><input type="checkbox" name="document" value="Journals/blogs" qid="10">Journals/blogs</label>
                                                    </div>
                                                    <div class="checkbox">
                                                        <label><input type="checkbox" name="document" value="Social media posts" qid="10">Social media posts</label>
                                                    </div>
                                                    <div class="checkbox">
                                                        <label><input type="checkbox" name="document" value="None" qid="10">None</label>
                                                    </div>
                                                </div>
                                                <!-- questions dynamic -->
                                                <?php
                                                $sid = $_GET['sid'];
                                                $sql = "select * from question_master where isPredefined='0' and Surveyid=$sid";
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
                                                                echo "<input type='text' class='form-control mt-2 ml-20' qid='$Qid' name='txt$Qid'>";
                                                            } else if ($AnsType == "Radio") {
                                                                $valueArray = explode(", ", $OptionText);
                                                                // Loop through the array
                                                                foreach ($valueArray as $value) {
                                                                    echo
                                                                    "<div class='radio'>
                                                            <label><input type='radio' name='rdn$Qid' value='$value' qid='$Qid'>$value</label>
                                                            </div>";
                                                                }
                                                            } else if ($AnsType == "Checkbox") {
                                                                $valueArray = explode(", ", $OptionText);
                                                                // Loop through the array
                                                                foreach ($valueArray as $value) {
                                                                    echo
                                                                    "<div class='checkbox'>
                                                            <label><input type='checkbox' value='$value' qid='$Qid' name='chkDyno$Qid'>$value</label>
                                                            </div>";
                                                                }
                                                            } else {
                                                                echo "<input type='text' class='form-control mt-2 ml-20' qid='$Qid' name='txt$Qid'>";
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
                                                    <textarea class="form-control" rows="3" id="txtSuggestion" qid="57" name="txtSuggestion"></textarea>
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
        <footer class="text-center mt-5">
            <p class="mb-0 pb-2 text-white">Powered by Survey Fox</p>
        </footer>
    </div>

    <?php
    include 'include/footer-scripts.php';
    ?>
</body>

</html>