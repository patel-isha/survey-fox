<?php
include 'config/connection.php';  // Make sure your connection file is correctly set up

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $srId = $_POST['SR_Id'] ?? null;
    $quesIds = $_POST['QuesIds'] ?? [];
    $answers = $_POST['Answers'] ?? [];

    if (!$srId || count($quesIds) < 1 || count($answers) < 1) {
        die('Required fields are missing or incomplete.');
    }

    // Insert the data into the database
    $sql = "INSERT INTO tbl_surveyanswers (SR_Id, QuesId, Answer) VALUES ($srId, '{$quesIds[0]}', '{$answers[0]}')";
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $sql1 = "INSERT INTO tbl_surveyanswers (SR_Id, QuesId, Answer) VALUES ($srId, '{$quesIds[1]}', '{$answers[1]}')";
    if ($conn->query($sql1) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql1 . "<br>" . $conn->error;
    }
}
?>
