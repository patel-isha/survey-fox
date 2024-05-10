<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Customer Registration</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../siteimages/dash/assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="../siteimages/dash/assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="../siteimages/dash/assets/libs/css/style.css">
    <link rel="stylesheet" href="../siteimages/dash/assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <link rel="icon" type="image/x-icon" href="../assets/img/logo/favicon.png">
    <style>
        html,
        body {
            height: 100%;
        }

        body {
            display: -ms-flexbox;
            display: flex;
            -ms-flex-align: center;
            align-items: center;
            padding-top: 40px;
            padding-bottom: 40px;
        }

        .splash-container {
            max-width: 800px !important;
        }
    </style>
</head>

<body>
    <!-- ============================================================== -->
    <!-- login page  -->
    <!-- ============================================================== -->
    <div class="splash-container" width="100%">
        <div class="card ">
            <div class="card-header text-center"><a href="../index.php"><img class="logo-img"
                        src="../assets/img/logo/logo-blue.png" alt="logo" width="150px"></a><span
                    class="splash-description">Customer Registration</span></div>
            <div class="card-body">
                <form method="post">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input class="form-control form-control-lg" id="txtName" name="txtName" type="text"
                                    placeholder="Full name" autocomplete="off" required>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input class="form-control form-control-lg" id="txtEmail" name="txtEmail" type="email"
                                    placeholder="Email" autocomplete="off" required>
                            </div>
                        </div>
                    </div>

                    <div class="row">

                        <div class="col-sm-6">
                            <div class="form-group">
                                <input class="form-control form-control-lg" id="txtUsername" name="txtUsername" required
                                onkeypress="return IsNoSpace(event);" type="text" placeholder="Username" autocomplete="off">
                                <span id="spn_user_status" class="text-danger"></span>
                            </div>

                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input class="form-control form-control-lg" id="txtPassword" name="txtPassword"
                                    type="password" placeholder="Password" required>
                            </div>
                        </div>
                        <div class="col-sm-4" style="display: none;">

                            <a id="btnVerify" name="btnVerify"  class="btn btn-success btn-sm btn-sm text-white" 
                            >Verify username</a>
                        </div>
                    </div>

                    <div class="row" style="display:none;">
                        
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input class="form-control form-control-lg" id="txtConfpassword" type="password"
                                    placeholder="Confirm Password" >
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input class="form-control form-control-lg" id="txtCompanyNm" name="txtCompanyNm"
                                    type="text" placeholder="Company Name" autocomplete="off" required>
                            </div>
                        </div>
                        
                    </div>


                    <div class="row ">
                    <div class="col-sm-4">&nbsp;</div>
                        <div class="col-sm-4">
                            <button type="submit" class="btn btn-primary btn-sm btn-lg btn-block">Register</button>
                        </div>
                        <div class="col-sm-4">&nbsp;</div>
                    </div>

                </form>
            </div>
            <div class="card-footer bg-white p-0  ">

                <div class="card-footer-item card-footer-item-bordered">
                    <a href="login.php" class="footer-link">Have an account? Sign In</a>
                </div>
            </div>
        </div>
    </div>

    

    <!-- ============================================================== -->
    <!-- end login page  -->
    <!-- ============================================================== -->
    <!-- Optional JavaScript -->
    <script src="../siteimages/dash/assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <script src="../siteimages/dash/assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
</body>



<?php
include '../config/connection.php';



if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (isset($_POST["btnVerify"]))
    {
        $sql = "SELECT * FROM tbl_customer WHERE Username = '$_POST[txtUsername]'";
        $result = $conn->query($sql);
    
        echo $sql;
        if ($result->num_rows > 0)
        {
            echo "username available";
        }
        else
        {
            echo "username not available";
        }
    }

    $firstname = $_POST["txtName"];
    $CompanyNm = $_POST["txtCompanyNm"];
    $email = $_POST["txtEmail"];
    $userlogin = $_POST["txtUsername"];
    $password = sha1($_POST["txtPassword"]); /// sha1 for encrypted so no need for now
    
    // sql query to insert data into the database
    $sql = "INSERT INTO tbl_customer (Fullname, CompanyName, Logo, Email, Username, Password, CreatedDate ) 
    VALUES ('$firstname', '$CompanyNm', '', '$email', '$userlogin', '$password', current_timestamp());";

    //execute the query
    if ($conn->query($sql) === TRUE) {
        
        $query = "SELECT * FROM tbl_customer WHERE Username = '" . $email . "' and Password = '" . $password . "'";
    
        $result = mysqli_query($conn, $query);
        if ($row = mysqli_fetch_array($result)) {
            $_SESSION['customer_uid'] = $row['CustomerId'];
            $_SESSION['customer_name'] = $row['Fullname'];
            $_SESSION['customer_email'] = $row['Email'];
            header("Location: index.php");
        }
       
        echo "<script>";
        echo "alert('Registered Successfully');";
        
        echo "window.location='index.php'";
        echo "</script>";
        
    } else {
        ////// Error is not working
        echo "<script>";
        echo "alert('Duplicate username found!')";

        echo "</script>";
        //echo "Error" . $sql . "<br>" . $conn->error;
    }

}

?>



<script>
    function Verify_UN() {
        var username = document.getElementById('txtUsername').value;
        var cntTotal = 0;

        if (username.length <= 0) {
            document.getElementById('spn_user_status').innerHTML = "Enter username";
        }
        else {

            alert(username);

            
        //    <?php 
        //     include '../config/connection.php';
        //     $sql = "SELECT LoginId, Fullname, Username FROM tbl_owners WHERE Username='$_POST[txtUsername]'";
        //     $result = $conn->query($sql);
        //     $val = $result->num_rows;
        //     echo $val;
        //     ?>
            // need to search about this
            if ($tot == 0) {
                document.getElementById('spn_user_status').innerHTML = "Username is available.";
            }
            else {
                document.getElementById('spn_user_status').innerHTML = "Username is not available, try again!";
            }

        }

    }
</script>

<script type="text/javascript">
    function IsNoSpace(e, spanid) {
        if (e.which == 32) {
            return false;
        }
    }
</script>
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

</html>