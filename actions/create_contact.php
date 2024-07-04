<?php
include '../db.php';

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $address = $_POST['address'];

    // Prepare and bind
    $stmt = $conn->prepare("INSERT INTO contacts (name, phone, email, address) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $name, $phone, $email, $address);

    // Execute the statement
    if ($stmt->execute()) {
        echo "New contact created successfully";
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close the statement and connection
    $stmt->close();
    $conn->close();

    // Redirect back to the contact list or another page
    header("Location: ../index.php");
    exit();
} else {
    echo "Invalid request method.";
}
?>
