<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Shop</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container my-5">
        <h2>List Of Clients</h2>
        <a class="btn btn-primary" role="button" href="/PHP-CRUD-PROJECT/create.php">New Client</a>
        <br>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Address</th>
                    <th>Created</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $servername = "localhost";
                $username = "root";
                $password = "";
                $database = "myshop";

                //Create connection to database
                $connection = new mysqli($servername, $username, $password, $database);

                //Check connection
                if ($connection->connect_error) {
                    die("Connection Failed: " . $connection->connect_error);
                }

                //Read all row from database table
                $sql = "SELECT * FROM clients";
                $result = $connection->query($sql);

                if(!$result){
                    die("Invalid query: ". $connection->error);
                }
                ?>
                <tr>
                    <td>10</td>
                    <td>Bill Gates</td>
                    <td>bill.gates@microsoft.com</td>
                    <td>+111222333</td>
                    <td>New York, USA</td>
                    <td>18/05/2022</td>
                    <td>
                        <a class="btn btn-primary btn-sm" href="/PHP-CRUD-PROJECT/edit.php">Edit</a>
                        <a class="btn btn-danger btn-sm" href="/PHP-CRUD-PROJECT/delete.php">Delete</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    
</body>
</html>