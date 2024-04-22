<?php include '../connection.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Users</title>
    <style>
        /* Your CSS styles here */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        .container {
            
            
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #f5f5f5;
        }

        .add-button {
            text-align: center;
            margin-top: 20px;
        }

        .add-button a {
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .add-button a:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>User Details</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>User Login</th>
                <th>Is Admin</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <!-- Assuming this is fetched from the database in PHP -->

            <?php
            
            $query="SELECT * FROM users";
            $query_run=mysqli_query($connect,$query);
            while($row=mysqli_fetch_array($query_run)){


           
            ?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['email']; ?></td>
                <td><?php echo $row['phone']; ?></td>
                <td><?php echo $row['user_login']; ?></td>
                <td><?php echo $row['is_admin']; ?></td>
               
                <td>
                    <a href="edit_user.php?id=<?php echo $row['id']; ?>">Edit</a> |
                    <a href="delete_user.php?id=<?php echo $row['id'] ?>">Delete</a>
                </td>
            </tr>

            <?php }?>
            <!-- Add more rows dynamically -->
        </tbody>
    </table>
    <div class="add-button">
        <a href="add_user.php">Add User</a>
    </div>
</div>

</body>
</html>
