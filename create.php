<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Contact</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="d-flex justify-content-center align-items-center vh-100 bg-image">
        <div class="w-75">
            <h1 class="text-center mt-5 text-white">Create New Contact</h1>
            <div class="row justify-content-center mt-5">
            <div class="col-12 col-md-8 col-lg-6">
                <form action="actions/create_contact.php" method="POST">
                <div class="form-group">
                    <label for="name" class="text-white">Name</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>
                <div class="form-group">
                    <label for="phone" class="text-white">Phone Number</label>
                    <input type="text" class="form-control" id="phone" name="phone" required>
                </div>
                <div class="form-group">
                    <label for="email" class="text-white">Email</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="address" class="text-white">Address</label>
                    <textarea class="form-control" id="address" name="address" rows="3" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary btn-block mt-3">Add Contact</button>
                </form>
            </div>
            </div>
        </div>
    </div>

    <script src="js/bootstrap.min.js"></script>
</body>
</html>
