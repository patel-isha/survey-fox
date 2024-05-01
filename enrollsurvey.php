<?php

include "config/connection.php";

// Check if the request method is POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if all required fields are set
    if (isset($_POST['fullName'], $_POST['email'], $_POST['sid'])) {
       
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Escape user inputs for security
        $fullName = $conn->real_escape_string($_POST['fullName']);
        $email = $conn->real_escape_string($_POST['email']);
        $sid = $conn->real_escape_string($_POST['sid']);

        // Prepare SQL insert statement
        $sql = "INSERT INTO tbl_surveyresponses (RespondantName, Email, Surveyid) VALUES ('$fullName', '$email', '$sid')";

        // Execute SQL query
        if ($conn->query($sql) === TRUE) {
            // Get the ID of the inserted row
            $inserted_id = $conn->insert_id;

            // Close database connection
            $conn->close();

            // Return the ID in the response
            echo json_encode(array('success' => true, 'message' => 'Data saved successfully.', 'inserted_id' => $inserted_id));
        } else {
            echo json_encode(array('success' => false, 'message' => 'Error: ' . $sql . '<br>' . $conn->error));
        }
    } else {
        echo json_encode(array('success' => false, 'message' => 'Missing required fields.'));
    }
} else {
    echo json_encode(array('success' => false, 'message' => 'Invalid request method.'));
}
?>
