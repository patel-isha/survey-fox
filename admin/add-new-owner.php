<!doctype html>


<html lang="en">
<?php include 'includes/header.php'; ?>

<?php
include "../config/connection.php";

// Check if the form is submitted and the 'id' parameter is set
if ($_SERVER["REQUEST_METHOD"] == "POST" ) {

    $name = $_POST['txtName'];
    $Username = $_POST['txtUsername'];
    $password = $_POST['txtPassword'];
    $email = $_POST['txtEmail'];
    $add1 = $_POST['txtStreetAdd'];
    $add2 = $_POST['txtStreetAdd2'];
    $Zip = $_POST['txtPostCode'];
    $city = $_POST['txtCity'];
    $Phone = $_POST['txtPhone'];

    // sql query to insert data into the database
    $sql = "INSERT INTO tbl_owners (Fullname ,  Address1 ,  Address2 ,  City ,  ZipCode ,  Email ,  Username ,  Password ,  PhoneNo ,  isNew ,  isApproved ,  CreatedDate ) 
     VALUES ('$name', '$add1', '$add2', '$city', '$Zip', '$email', '$Username', '$password', '$Phone', b'1', b'0', current_timestamp());";

    //execute the query
    if ($conn->query($sql) === TRUE) {
        echo "<script>";
        echo "alert('Owner Added Successfully');";
        echo "window.location='owner-view-all.php'";
        echo "</script>";

    } else {
        ////// Error is not working
        echo "<script>";
        echo "alert('Duplicate username found!')";
        echo "</script>";
        //echo "Error" . $sql . "<br>" . $conn->error;
    }
    // header("Location: owner-view-all.php");

} else {
    echo "Invalid request. Please submit the form.";
}

?>

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
                                <h5 class="card-header"> Owner Details</h5>
                                <div class="card-body">

                                    <form action="" method="POST" id="basicform" data-parsley-validate="">
                                        <div class="form-row">
                                            <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mb-2">
                                                <label for="txtName">Full Name</label>
                                                <input type="text" class="form-control" id="txtName" name="txtName"
                                                    data-parsley-trigger="change" placeholder="Enter Full name"
                                                    required>

                                            </div>
                                            <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mb-2">
                                                <label for="txtSeats">Email</label>
                                                <input type="email" class="form-control" id="txtEmail" name="txtEmail"
                                                    placeholder="Enter email" required>
                                            </div>
                                            <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mb-2">
                                                <label for="txtUsername">User Name</label>
                                                <input type="text" class="form-control" id="txtUsername"
                                                    name="txtUsername" data-parsley-trigger="change"
                                                    placeholder="Enter User Name" required>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            
                                            <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mb-2">
                                                <label for="txtPassword">Password</label>
                                                <input type="text" class="form-control" id="txtPassword"
                                                    name="txtPassword" data-parsley-trigger="change"
                                                    placeholder="Enter Password" required>
                                            </div>
                                            <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mb-2">
                                                <label for="txtPhone">Phone No</label>
                                                <input type="text" class="form-control" id="txtPhone" name="txtPhone"
                                                    placeholder="Enter Phone" maxlength="12" required>

                                            </div>
                                        </div>
                                        <hr />
                                        <div class="form-row mb">
                                            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 mb-2">
                                                <label for="txtStreetAdd">Address Line 1</label>
                                                <input type="text" class="form-control" id="txtStreetAdd"
                                                    name="txtStreetAdd" placeholder="Enter address line 1" required>
                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 mb-2">
                                                <label for="txtStreetAdd2">Address Line 2</label>
                                                <input type="text" class="form-control" id="txtStreetAdd2"
                                                    name="txtStreetAdd2" placeholder="Enter address line 2" required>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-6 mb-2">
                                                <label for="txtPostCode">Post code</label>
                                                <input type="text" class="form-control" id="txtPostCode"
                                                    name="txtPostCode" placeholder="Enter post code" maxlength="7"
                                                    required>

                                            </div>
                                            
                                            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-6 mb-2">
                                                <label for="txtCity">City</label>
                                                <input type="text" class="form-control" id="txtCity" name="txtCity"
                                                    placeholder="Enter city" required>
                                            </div>
                                        </div>


                                        <div class="form-row">
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-2">
                                                <p class="text-center">
                                                    <button type="submit" class="btn btn-space btn-primary">Add
                                                        owner</button>
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

</body>



</html>