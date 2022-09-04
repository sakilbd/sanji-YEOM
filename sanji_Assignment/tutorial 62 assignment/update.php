<?php
$message = ""; // initial message 

// Includs database connection
include "db_connect.php";

// Updating the table row with submited data according to rowid once form is submited 
if (isset($_POST['submit_data'])) {

    // Gets the data from post
    $id = $_POST['id'];
    $name = $_POST['name'];
    $type = $_POST['type'];
    $quantity = $_POST['quantity'];
    $price = $_POST['price'];
    $region = $_POST['region'];

    // Makes query with post data
    $query = "UPDATE students set name='$name', type='$type', quantity='$quantity', price='$price',region='$region' WHERE rowid=$id";

    // Executes the query
    // If data inserted then set success message otherwise set error message
    // Here $db comes from "db_connect.php"
    if ($db->exec($query)) {
        $message = "Data is updated successfully.";
    } else {
        $message = "Sorry, Data is not updated.";
    }
}

$id = $_GET['id']; // rowid from url
// Prepar the query to get the row data with rowid
$query = "SELECT rowid, * FROM students WHERE rowid=$id";
$result = $db->query($query);
$data = $result->fetchArray(); // set the row in $data
?>

<!DOCTYPE html>
<html>

<head>
    <title>Update Data</title>
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
    <div style="width: 500px; margin: 20px auto;">

        <!-- showing the message here-->
        <!-- <div><?php echo $message; ?></div>

        <table width="100%" cellpadding="5" cellspacing="1" border="1">
            <form action="" method="post">
                <input type="hidden" name="id" value="<?php echo $id; ?>">
                <tr>
                    <td>Name:</td>
                    <td><input name="name" type="text" value="<?php echo $data['name']; ?>"></td>
                </tr>
                <tr>
                    <td>Type:</td>
                    <td><input name="type" type="text" value="<?php echo $data['type']; ?>"></td>
                </tr>
                <tr>
                    <td>Quantity:</td>
                    <td><input name="quantity" type="text" value="<?php echo $data['quantity']; ?>"></td>
                </tr>
                <tr>
                    <td>Price:</td>
                    <td><input name="price" type="text" value="<?php echo $data['price']; ?>"></td>
                </tr>
                <tr>
                    <td>Region:</td>
                    <td><input name="region" type="text" value="<?php echo $data['region']; ?>"></td>
                </tr>
                <tr>
                    <td><a href="list.php">Back</a></td>
                    <td><input name="submit_data" type="submit" value="Update Data"></td>
                </tr>
            </form>
        </table> -->
        <form action="" method="post">
            <div class="badge badge-success" id="message" ><?php echo $message; ?></div>
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <div class="form-group">
                <label for="exampleInputEmail1">Name:</label>
                <input id="2first_name" name="name" type="text" value="<?php echo $data['name']; ?>" class="form-control">

            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Type</label>
                <input id="2last_name" name="type" type="text" class="form-control" value="<?php echo $data['type']; ?>">

            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Quantity</label>
                <input id="2email" name="quantity" type="text" class="form-control" value="<?php echo $data['quantity']; ?>">

            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Price</label>
                <input id="2pass" name="price" type="text" class="form-control" value="<?php echo $data['price']; ?>">

            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Region</label>
                <input id="2ConfirmPass" name="region" type="text" class="form-control" value="<?php echo $data['region']; ?>">

            </div>
            <div class="form-group">
                <a class="btn btn-primary" href="list.php">See Data</a>
                <input class="btn btn-success" name="submit_data" type="submit" value="Update Data">
            </div>

        </form>
    </div>
    <?php include 'reg_model.php';?>
</body>
<script type="text/javascript" src="script.js">
    </script>
</html>