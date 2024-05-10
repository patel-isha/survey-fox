<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
include 'config/connection.php';
include 'include/header-links.php';

// Initialize variables to hold respondent details
$respondentName = 'Not Available';
$email = 'Not Available';

// Query to fetch the last respondent's name and email
$sql = "SELECT RespondantName, Email FROM tbl_surveyresponses ORDER BY id DESC LIMIT 1";  // Adjust 'id' to your identifier column
$result = mysqli_query($conn, $sql);  // Make sure $conn is your database connection variable

if (mysqli_num_rows($result) > 0) {
  $row = mysqli_fetch_assoc($result);
  $respondentName = $row['RespondantName'];
  $email = $row['Email'];
} else {
  echo "No results found.";
}
?>

<body>
  <div class="container-fluid" id="grad1">
    <div class="row justify-content-center align-items-center h-inherit mt-0">
      <div class="col-11 col-sm-9 col-md-7 col-lg-6 text-center p-0 mt-3 mb-2">
        <div class="card px-0 pb-0 mt-3 mb-3">
          <div class="bg-white pt-2 br8">
            <h2 class="fs-title">Invoice</h2>
          </div>
          <table>
            <tr>
              <th>From</th>
              <td>Survey Fox Inc.<br>Cloud Armi<br>London</td>
              <th>Invoice #</th>
              <td>US-001</td>
            </tr>
            <tr>
              <th>Bill To</th>
              <td><?= $respondentName ?><br><?= $email ?></td>
              <th>Date</th>
              <td>11/02/2019</td>
            </tr>
          </table>

          <h3>Details</h3>
          <table>
            <tr>
              <th>QTY</th>
              <th>Description</th>
              <th>Unit Price</th>
              <th>Amount</th>
            </tr>
            <tr>
              <td>1</td>
              <td>Front and rear brake cables</td>
              <td>$100.00</td>
              <td>$100.00</td>
            </tr>
            <tr class="total">
              <td colspan="3">Total</td>
              <td>$154.06</td>
            </tr>
          </table>
        </div>
      </div>
    </div>
    <footer class="text-center mt-5">
      <p class="mb-0 pb-2 text-white">Powered by Survey Fox</p>
    </footer>
  </div>
  <?php include 'include/footer-scripts.php'; ?>
</body>