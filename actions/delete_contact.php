<?php

include '../db.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "DELETE FROM contacts WHERE id = $id";

    if ($conn->query($sql) === TRUE) {
        echo "<div class='alert alert-success'>Contact deleted successfully</div>";
    } else {
        echo "<div class='alert alert-danger'>Error: " . $conn->error . "</div>";
    }

    $conn->close();

    header("Location: ../index.php");
    exit();
} else {
    echo "<div class='alert alert-danger'>Invalid request.</div>";
}
?>
