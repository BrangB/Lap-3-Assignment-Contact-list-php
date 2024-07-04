<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Contact</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1 class="text-center mt-5">Edit Contact</h1>
        <div class="row justify-content-center mt-5">
            <div class="col-12 col-md-8 col-lg-6">
                <?php
                // Include the database connection file
                include 'db.php';

                // Fetch contact data to populate the form
                if (isset($_GET['id'])) {
                    $id = $_GET['id'];

                    // Prepare and execute the query
                    $stmt = $conn->prepare("SELECT name, phone, email, address FROM contacts WHERE id = ?");
                    $stmt->bind_param("i", $id);
                    $stmt->execute();
                    $stmt->bind_result($name, $phone, $email, $address);
                    $stmt->fetch();

                    // Close the statement
                    $stmt->close();
                } else {
                    echo "<div class='alert alert-danger'>Invalid request.</div>";
                    exit();
                }

                // Close the connection
                $conn->close();
                ?>
                <?php if (isset($name)): ?>
                <form action="actions/edit_contact.php" method="POST">
                    <input type="hidden" name="id" value="<?php echo $id; ?>">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" name="name" value="<?php echo $name; ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone Number</label>
                        <input type="text" class="form-control" id="phone" name="phone" value="<?php echo $phone; ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email" value="<?php echo $email; ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="address">Address</label>
                        <textarea class="form-control" id="address" name="address" rows="3" required><?php echo $address; ?></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Update Contact</button>
                </form>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>
