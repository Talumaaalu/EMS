<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $event = $_POST['event'];
    $date = $_POST['date'];
    $message = $_POST['message'];

    // Connect to the database
    $con = new mysqli('localhost', 'root', '', 'register');

    if ($con->connect_error) {
        die("Connection failed: " . $con->connect_error);
    }

    // Prepare the SQL statement with placeholders
    $sql = "INSERT INTO reservation (name, email, phone, event, date, message) VALUES (?, ?, ?, ?, ?, ?)";
    $stmt = $con->prepare($sql);

    if ($stmt) {
        // Bind parameters to the prepared statement
        $stmt->bind_param("ssssss", $name, $email, $phone, $event, $date, $message);

        // Execute the statement
        if ($stmt->execute()) {
            echo "Reservation successfully submitted!";
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
