<?php
// Include the database connection file
include '../db.php';

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $id = $_POST['id'];
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $address = $_POST['address'];

    // Prepare and bind
    $stmt = $conn->prepare("UPDATE contacts SET name = ?, phone = ?, email = ?, address = ? WHERE id = ?");
    $stmt->bind_param("ssssi", $name, $phone, $email, $address, $id);

    // Execute the statement
    if ($stmt->execute()) {
        echo "<div class='alert alert-success'>Contact updated successfully</div>";
    } else {
        echo "<div class='alert alert-danger'>Error: " . $stmt->error . "</div>";
    }

    // Close the statement and connection
    $stmt->close();
    $conn->close();

    // Redirect back to the contact list or another page
    header("Location: ../index.php");
    exit();
} else {
    echo "<div class='alert alert-danger'>Invalid request.</div>";
}
?>
