<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
include 'config/connection.php';

$srid = isset($_GET['srid']) ? intval($_GET['srid']) : 0;  // Get SRid from URL and ensure it's an integer


?>


<?php
include 'include/header-links.php';
if ($srid > 0) {
    $query = "SELECT RespondantName, Email, CreatedDate FROM tbl_surveyresponses WHERE SR_Id = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("i", $srid);  // Bind SRid as integer
    $stmt->execute();
    $stmt->bind_result($name, $email, $createdDate);
    $stmt->fetch();
    $stmt->close();
} else {
    $name = "No Name Found";
    $email = "No Email Found";
    $createdDate = "No Date Found";
}

?>

<body>
    <div class="container-fluid" id="grad1">
        <div class="row justify-content-center align-items-center h-inherit mt-0">
            <div class="col-11 col-sm-9 col-md-7 col-lg-6 text-center p-0 mt-3 mb-2">
                <div class="card p-2 mt-3 mb-3">
                    <div class="bg-white pt-2 br8">
                        <h2 class="fs-title text-center">Invoice</h2>
                    </div>
                    <div class="p-3">
                        <table class="mb-4">
                            <tr>
                                <th>From</th>
                                <td>Survey Fox Inc.<br>Cloud Armi<br>London</td>
                                <th>Invoice #</th>
                                <td>US-001</td>
                            </tr>
                            <tr>
                                <th>Bill To</th>
                                <td><?= htmlspecialchars($name) ?><br><?= htmlspecialchars($email) ?></td>
                                <th>Date</th>
                                <td><?= htmlspecialchars($createdDate) ?></td>
                            </tr>
                        </table>

                        <h2 class="fs-title text-center pb-3">Details</h2>
                        <table class="mb-2">
                            <tr>
                                <th>QTY</th>
                                <th>Description</th>
                                <th>Unit Price</th>
                                <th>Amount</th>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>Front and rear brake cables</td>
                                <td>£100.00</td>
                                <td>£100.00</td>
                            </tr>
                            <tr class="total">
                                <td colspan="3">Total</td>
                                <td>£154.06</td>
                            </tr>
                        </table>
                    </div>

                </div>
            </div>
        </div>
        <footer class="text-center mt-5">
            <p class="mb-0 pb-2 text-white">Powered by Survey Fox</p>
        </footer>
    </div>
    <?php include 'include/footer-scripts.php'; ?>
</body>