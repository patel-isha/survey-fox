 <!-- Required meta tags -->

 <head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="../siteimages/dash/assets/vendor/bootstrap/css/bootstrap.min.css">
     <link href="../siteimages/dash/assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
     <link rel="stylesheet" href="../siteimages/dash/assets/libs/css/style.css">
     <link rel="stylesheet" href="../siteimages/dash/assets/vendor/fonts/fontawesome/css/fontawesome-all.css">

     <link rel="stylesheet"
         href="../siteimages/dash/assets/vendor/fonts/material-design-iconic-font/css/materialdesignicons.min.css">
     <link rel="stylesheet" href="../siteimages/dash/assets/vendor/fonts/flag-icon-css/flag-icon.min.css">
     <link rel="icon" type="image/x-icon" href="../assets/img/logo/favicon.png">
     <title>Customer Dashboard</title>
     <?php
      session_start();

      if (isset($_SESSION['customer_uid']) == "") {
         header("Location: login.php");
      }

   ?>
 </head>