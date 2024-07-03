<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="d-flex justify-content-center align-items-center vh-100">
        <div class="col-12 col-md-10 col-lg-8">
            <h1 class="text-center mb-4">Contact List</h1>
            <table class="table table-bordered table-striped">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Phone Number</th>
                        <th scope="col">Email</th>
                        <th scope="col">Address</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>John Doe</td>
                        <td>(123) 456-7890</td>
                        <td>john.doe@example.com</td>
                        <td>1234 Main St, Anytown, USA</td>
                        <td>
                        <button type="button" class="btn btn-warning btn-sm">
                                <a href="edit.php" class='text-decoration-none text-light'>Edit</a>
                            </button>
                            <button type="button" class="btn btn-danger btn-sm">Delete</button>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Jane Smith</td>
                        <td>(987) 654-3210</td>
                        <td>jane.smith@example.com</td>
                        <td>5678 Elm St, Othertown, USA</td>
                        <td>
                            <button type="button" class="btn btn-warning btn-sm">
                                <a href="edit.php" class='text-decoration-none text-light'>Edit</a>
                            </button>
                            <button type="button" class="btn btn-danger btn-sm">Delete</button>
                        </td>
                    </tr>
                    <!-- Add more rows as needed -->
                </tbody>
            </table>
        </div>
    </div>

    <script src="js/bootstrap.min.js"></script>
</body>
</html>