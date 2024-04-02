<!doctype html>


<html lang="en">
<?php include 'includes/header.php'; ?>

<?php
include "../config/connection.php";

$LoginID = $_SESSION['customer_uid'];
$NewSurveyId = 0;

// Check if the form is submitted and the 'id' parameter is set
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $SurveyTitle = $_POST['txtName'];
    $Desc = $_POST['txtDesc'];
    $CustomerId = $LoginID;

    $CategoryId = $_POST['ddlCategory'];
    $selectedOption = "";
    if (isset($_POST['rdQuestions'])) {
        $selectedOption = $_POST['rdQuestions'];
    }

    if (isset($_POST["btnAddSurvey"])) {
        // Code to add survey data
        // sql query to insert data into the database
        $sql = "INSERT INTO tbl_surveys (Name, Description, CategoryId,  CustomerId, CreatedDate, QuestionType) 
                                VALUES ('$SurveyTitle', '$Desc', b'0', b'$CustomerId', current_timestamp(), '$selectedOption');";

        //execute the query
        if ($conn->query($sql) === TRUE) {

            // Get the ID of the inserted row
            $insertedId = $conn->insert_id;
            $NewSurveyId = $insertedId;

            //echo "Value" . $insertedId;

            echo "<script>";
            echo "alert('Survey added, Continue to manage your questions!');";
            echo "window.location='edit-survey.php?id=$insertedId'";
            echo "</script>";
        }
    }

    // header("Location: owner-view-all.php");

} else {
    echo "Invalid request. Please submit the form.";
}

?>

<head>
<style>
#questionContainer {
    font-family: Arial, sans-serif;
    background-color: #f9f9f9;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    margin: 20px;
}

.question {
    margin-bottom: 10px;
}
</style>
</head>

<body>
    <!-- ============================================================== -->
    <!-- main wrapper -->
    <!-- ============================================================== -->
    <div class="dashboard-main-wrapper">
        <!-- ============================================================== -->
        <!-- navbar -->
        <!-- ============================================================== -->

        <?php include 'includes/top-bar.php'; ?>
        <!-- ============================================================== -->
        <!-- end navbar -->
        <!-- ============================================================== -->
        <?php include 'includes/sidebar.php'; ?>



        <!-- ============================================================== -->
        <!-- wrapper  -->
        <!-- ============================================================== -->
        <div class="dashboard-wrapper">
            <div class="dashboard-ecommerce">
                <div class="container-fluid dashboard-content ">
                    <!-- ============================================================== -->
                    <!-- pageheader  -->
                    <!-- ============================================================== -->

                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

                            <div class="card">
                                <h5 class="card-header"> Survey Details</h5>
                                <div class="card-body">

                                    <form action="" method="POST" id="basicform" data-parsley-validate="">
                                        <div class="form-row">
                                            <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mb-2">
                                                <label for="txtName">Survey Title</label>
                                                <input type="text" class="form-control" id="txtName" name="txtName"
                                                    data-parsley-trigger="change" placeholder="Enter Survey Title"
                                                    required>

                                            </div>
                                            <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 col-12 mb-2">
                                                <label for="txtDesc">Description</label>
                                                <input type="text" class="form-control" id="txtDesc" name="txtDesc"
                                                    placeholder="Enter description">
                                            </div>
                                        </div>
                                        <div class="form-row mt-2">
                                            <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mb-2">
                                                <h5>Type of Questions</h5>
                                                <label class="custom-control custom-radio custom-control-inline">
                                                    <input type="radio" id="rdQuestions_String" value="String"
                                                        name="rdQuestions" checked="" class="custom-control-input"><span
                                                        class="custom-control-label">Textboxes</span>
                                                </label>
                                                <label class="custom-control custom-radio custom-control-inline">
                                                    <input type="radio" id="rdQuestions_Multiple" value="Multiple"
                                                        name="rdQuestions" class="custom-control-input"><span
                                                        class="custom-control-label">Multiple Choices & Radio
                                                        buttons</span>
                                                </label>

                                            </div>
                                            <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mb-2">
                                                <label for="ddlCategory">Choose Category</label>
                                                <select id="ddlCategory" name="ddlCategory" required
                                                    class="form-control" onchange="getQuestions();">
                                                    <option value="">--Select--</option>
                                                    <?php
                                                            $sql = "select * from category_master";
                                                            $result = $conn->query($sql);
                                                            if ($result->num_rows > 0) {
                                                                while ($row = $result->fetch_assoc()) {
                                                                    echo "<option value = '" . $row['MasId'] . "'>" . $row['Title'] . "</option>";
                                                                }
                                                            }

                                                            ?>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-row mt-2">
                                            <div id="questionContainer">
                                            </div>
                                        </div>

                                        <div class="form-row" name="Div_NewButton" style="display: block;">
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-2">
                                                <p class="text-center">
                                                    <button type="submit" name="btnAddSurvey"
                                                        class="btn btn-space btn-primary">Add & Manage
                                                        Survey
                                                    </button>
                                                </p>
                                            </div>
                                        </div>


                                    </form>

                                </div>
                            </div>



                        </div>
                    </div>


                </div>
            </div>
        </div>
        <!-- footer -->
        <?php include 'includes/footer.php'; ?>
    </div>
    <!-- ============================================================== -->
    <!-- end wrapper  -->
    <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- end main wrapper  -->
    <!-- ============================================================== -->
    <!-- Optional JavaScript -->
    <?php include 'includes/footer-js.php'; ?>

    <script type="text/javascript">
    var specialKeys = new Array();
    specialKeys.push(8); //Backspace

    function IsNumericPhone(e, spanid) {
        var keyCode = e.which ? e.which : e.keyCode
        var ret = ((keyCode >= 48 && keyCode <= 57) || specialKeys.indexOf(keyCode) != -1);
        //document.getElementById(spanid).style.display = ret ? "none" : "inline";
        return ret;
    }
    </script>

<script>
    document.getElementById('ddlCategory').addEventListener('change', function() {
        var selectedValue = this.value;
        
        // Send selected value to server for fetching data
        fetchQuestionData(selectedValue);
    });

    function fetchQuestionData(CategoryID) {
        // AJAX request to fetch data from PHP script
        var xhr = new XMLHttpRequest();
        xhr.open("GET", "get_questions.php?id=" + CategoryID, true);
        xhr.onreadystatechange = function() {
            if (xhr.readyState == 4 && xhr.status == 200) {
                // Update the content of the div with fetched data
                document.getElementById("questionContainer").innerHTML = "<h4>Predefined set of questions for survey</h4><hr/>" + xhr.responseText;
            }
        };
        xhr.send();
    }
    </script>

</body>



</html>