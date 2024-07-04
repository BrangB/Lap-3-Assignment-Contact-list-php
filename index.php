<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact List</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="d-flex justify-content-center align-items-center vh-100">
    <div class="col-12 col-md-10 col-lg-8">
        <h1 class="text-center mb-4">Contact List</h1>
        <div class="text-center mb-4">
            <a href="create.php" class="btn btn-success">Add New Contact</a>
        </div>
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
                <?php

                include 'db.php';


                $sql = "SELECT id, name, phone, email, address FROM contacts";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {

                    while($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<th scope='row'>" . $row["id"] . "</th>";
                        echo "<td>" . $row["name"] . "</td>";
                        echo "<td>" . $row["phone"] . "</td>";
                        echo "<td>" . $row["email"] . "</td>";
                        echo "<td>" . $row["address"] . "</td>";
                        echo "<td>
                                <button type='button' class='btn btn-warning btn-sm'>
                                    <a href='edit.php?id=" . $row["id"] . "' class='text-decoration-none text-light'>Edit</a>
                                </button>
                                <button type='button' class='btn btn-danger btn-sm'>Delete</button>
                              </td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='6' class='text-center'>No contacts found</td></tr>";
                }


                $conn->close();
                ?>
            </tbody>
        </table>
    </div>
</div>

<script src="js/bootstrap.min.js"></script>
</body>
</html>
