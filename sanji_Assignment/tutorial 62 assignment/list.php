<?php

// Includs database connection
include "db_connect.php";

// Makes query with rowid
$query = "SELECT rowid, * FROM students";

// Run the query and set query result in $result
// Here $db comes from "db_connect.php"
$result = $db->query($query);

?>
<!DOCTYPE html>
<html>

<head>
    <title>Data List</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="style.css" />
</head>

<body>
    <div class="topnav">
        <a class="" href="index.php">Home</a>
        <a type="button" data-toggle="modal" data-target="#myModal" href="#registration">Registration</a>

        <a class="active" href="details.php">Details</a>
        <a class="" href="wine.php">Wine</a>
        <a href="#about">About</a>
    </div>
    <div style="width: 80%; margin: 20px auto;">
        <a class="btn btn-primary" href="insert.php">Add New</a>
        <table class="table" width="100%" cellpadding="5" cellspacing="1" border="1">
            <thread>
                <tr>
                    <td>Name</td>
                    <td>Type</td>
                    <td>Quantity</td>
                    <td>Price</td>
                    <td>Region</td>
                    <td>Action</td>
                </tr>
            </thread>
            <tbody>
                <?php while ($row = $result->fetchArray()) { ?>
                    <tr>
                        <td><?php echo $row['name']; ?></td>
                        <td><?php echo $row['type']; ?></td>
                        <td><?php echo $row['quantity']; ?></td>
                        <td><?php echo $row['price']; ?></td>
                        <td><?php echo $row['region']; ?></td>


                        <td>
                            <a class="btn btn-success" href="update.php?id=<?php echo $row['rowid']; ?>">Edit</a> |
                            <a class="btn btn-danger" href="delete.php?id=<?php echo $row['rowid']; ?>" confirm('Are you sure?');">Delete</a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
    <?php include 'reg_model.php';?>
</body>
<script type="text/javascript" src="script.js">
    </script>
</html>