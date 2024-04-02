<!doctype html>
<html lang="en">
<?php include 'includes/header.php'; ?>



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
                                <h5 class="card-header"> Dashboard</h5>
                                <div class="card-body">

                                    <p>
                                        Welcome to Customer Portal!
                                    </p>

                                    <p>Here, you can create surveys and easily navigate through a simple website interface. Whether you need to gather feedback or simply explore our offerings, this portal is designed to make your experience straightforward and efficient. From creating surveys to viewing results, everything you need is right at your fingertips. We're here to assist you every step of the way. Thank you for choosing our services, and we look forward to making your experience smooth and hassle-free.
</p>
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

    <script>
        $(document).ready(function () {
            $("#btnShow").click(function () {
                $("#divFacts").show();
                $("#divFacts").append("<b>Welcome to admin portal, you can manage cars, owners and owned cars from here dynamically. For further queries can contact by emailing on test@contact.com</b>").show('slowly');
                $("#divFacts").animate(1000)
            });
            
        })
    </script>

</body>

</html>