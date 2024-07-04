<?php
include '../db.php';


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $address = $_POST['address'];

    $sql = "INSERT INTO contacts (name, phone, email, address) VALUES ('$name', '$phone', '$email', '$address')";

    if ($conn->query($sql) === TRUE) {
        echo "<div class='alert alert-success'>New contact created successfully</div>";
    } else {
        echo "<div class='alert alert-danger'>Error: " . $conn->error . "</div>";
    }

    $conn->close();

    header("Location: ../index.php");
    exit();
} else {
    echo "Invalid request method.";
}
?>
