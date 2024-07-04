<?php
// Include the database connection file
include '../db.php';

// Check if the id is set in the URL
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Prepare and bind
    $stmt = $conn->prepare("DELETE FROM contacts WHERE id = ?");
    $stmt->bind_param("i", $id);

    // Execute the statement
    if ($stmt->execute()) {
        echo "<div class='alert alert-success'>Contact deleted successfully</div>";
    } else {
        echo "<div class='alert alert-danger'>Error: " . $stmt->error . "</div>";
    }

    // Close the statement and connection
    $stmt->close();
    $conn->close();

    // Redirect back to the contact list
    header("Location: ../index.php");
    exit();
} else {
    echo "<div class='alert alert-danger'>Invalid request.</div>";
}
?>
