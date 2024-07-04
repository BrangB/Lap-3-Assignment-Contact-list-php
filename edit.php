<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Contact</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="d-flex justify-content-center align-items-center vh-100 bg-image">
        <div class='w-75'>
            <h1 class="text-center mt-5">Edit Contact</h1>
            <div class="row justify-content-center mt-5">
                <div class="col-12 col-md-8 col-lg-6">
                    <?php
                    include 'db.php';

                    if (isset($_GET['id'])) {
                        $id = $_GET['id'];

                        $result = $conn->query("SELECT name, phone, email, address FROM contacts WHERE id = $id");

                        if ($result && $result->num_rows > 0) {
                            $row = $result->fetch_assoc();
                            $name = $row['name'];
                            $phone = $row['phone'];
                            $email = $row['email'];
                            $address = $row['address'];
                        } else {
                            echo "<div class='alert alert-danger'>Contact not found.</div>";
                            exit();
                        }

                        $result->free();
                    } else {
                        echo "<div class='alert alert-danger'>Invalid request.</div>";
                        exit();
                    }

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
    </div>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>
