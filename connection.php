<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Retrieve form data
    $title = $_POST['title'];
    $message = $_POST['message'];

    // Connect to the database
    $con = new mysqli('localhost', 'root', '', 'register');

    // Check for connection errors
    if ($con->connect_error) {
        die("Connection failed: " . $con->connect_error);
    }

    // Prepare the SQL statement with placeholders
    $sql = "INSERT INTO contact (title, message) VALUES (?, ?)";
    $stmt = $con->prepare($sql);

    if ($stmt) {
        // Bind parameters to the prepared statement
        $stmt->bind_param("ss", $title, $message);  // "ss" means both are strings

        // Execute the statement
        if ($stmt->execute()) {
            echo "Your message has been sent!";
        } else {
            echo "Error: " . $stmt->error;
        }

        // Close the statement
        $stmt->close();
    } else {
        echo "Error preparing statement: " . $con->error;
    }

    // Close the database connection
    $con->close();
} else {
    echo "Invalid request method.";
}
?>
