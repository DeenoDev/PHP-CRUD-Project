<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Shop</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container my-5">
        <h2>List Of Clients</h2>
        <a class="btn btn-primary" role="button" href="/PHP-CRUD-PROJECT/create.php">New Client</a>
        <br>
        <table class="table">
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

                //Read all rows from database table
                $sql = "SELECT * FROM clients";
                $result = $connection->query($sql);

                if(!$result){
                    die("Invalid query: ". $connection->error);
                }

                //read data of each row
                while($row = $result->fetch_assoc()){
                    echo "
                    <tr>
                        <td>$row[id]</td>
                        <td>$row[name]</td>
                        <td>$row[email]</td>
                        <td>$row[phone]</td>
                        <td>$row[address]</td>
                        <td>$row[created_at]</td>
                        <td>
                            <a class='btn btn-primary btn-sm' href='/PHP-CRUD-Project/edit.php?id=$row[id]'>Edit</a>
                            <a class='btn btn-danger btn-sm' href='/PHP-CRUD-Project/delete.php?id=$row[id]'>Delete</a>
                        </td>
                    </tr>
                    
                    ";
                }
                ?>
                
            </tbody>
        </table>

        
    </div>
    <p class="text-center">Project created by Deyano Klaasen.</p>
    
</body>
</html>