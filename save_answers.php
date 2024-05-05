<?php

include "config/connection.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['formData'])) {
        // Retrieve the formData sent from the client-side
        $formDataArray = $_POST['formData'];

        // Process the formDataArray
        foreach ($formDataArray as $fieldData) {
            // Access the properties of each fieldData object
            $qid = $conn->real_escape_string($fieldData['qid']);
            $answer = $conn->real_escape_string($fieldData['answer']);
            $SR_Id = $conn->real_escape_string($fieldData['SR_Id']); // Assuming SR_Id is included in the fieldData object

            // Construct SQL insert statement
            $sql = "INSERT INTO tbl_surveyanswers (QuesId, Answer, SR_Id) VALUES ('$qid', '$answer', '$SR_Id')";

            // Execute SQL statement
            if ($conn->query($sql) === TRUE) {
                // Optionally, you can log the success of the data insertion
                // Example: error_log("Data inserted successfully for qid: $qid");
            } else {
                // Handle database errors
                // You can log the error message for debugging
                // Example: error_log("Error inserting data: " . $conn->error);
            }
        }

        $conn->close();

        // Send a response back to the client-side
        $response = array('status' => 'success', 'message' => 'Data saved successfully.');
        echo json_encode($response);
    } else {
        // If formData is not set in the POST request, return an error response
        $response = array('status' => 'error', 'message' => 'formData is not set in the POST request.');
        echo json_encode($response);
    }
} else {
    $response = array('status' => 'error', 'message' => 'Invalid request method.');
    echo json_encode($response);
}

?>

// // Check if the request method is POST
// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     if (isset($_POST['formData'])) {
//         // Retrieve the formData sent from the client-side
//         $formData = $_POST['formData'];

//         // Process the formData array
//         // Loop through each element in the formData array
//         foreach ($formData as $fieldsetData) {
//             // Loop through each fieldsetData object
//             foreach ($fieldsetData as $fieldName => $fieldData) {
//                 // Access the properties of the fieldData object
//                 $qid = $conn->real_escape_string($fieldData['qid']);
//                 $answer = $conn->real_escape_string($fieldData['answer']);
//                 $SR_Id = $conn->real_escape_string($fieldData['SR_Id']); // Assuming SR_Id is included in the fieldData object

//                 $data = $qid . " --ans-" . $answer . "--" . $SR_Id;  
//                 // Construct SQL insert statement
//                 $sql = "INSERT INTO tbl_surveyanswers (QuesId, Answer, SR_Id) VALUES ('$qid', '$answer', '$SR_Id')";


//                 // Execute SQL statement
//                 if ($conn->query($sql) === TRUE) {
//                     // Optionally, you can log the success of the data insertion
//                     // Example: error_log("Data inserted successfully for qid: $qid");
//                 } else {
//                     // Handle database errors
//                     // You can log the error message for debugging
//                     // Example: error_log("Error inserting data: " . $conn->error);
//                 }
//             }
//         }

//         $conn->close();

//         // Send a response back to the client-side
//         $response = array('status' => 'success', 'message' => 'Data saved successfully.', 'sql' => $sql);

//         echo json_encode($response);
//     } else {
//         // If formData is not set in the POST request, return an error response
//         $response = array('status' => 'error', 'message' => 'formData is not set in the POST request.');
//         echo json_encode($response);
//     }
// } else {
//     $response = array('status' => 'error', 'message' => 'Invalid request method.');
//     echo json_encode($response);
// }

