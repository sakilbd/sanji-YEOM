<?php
$message = "";
if (isset($_POST['submit_data'])) {
    // Includs database connection
    include "db_connect.php";

    // Gets the data from post
    $name = $_POST['name'];
    $type = $_POST['type'];
    $quantity = $_POST['quantity'];
    $price = $_POST['price'];
    $region = $_POST['region'];


    // Makes query with post data
    $query = "INSERT INTO students (name, type,quantity,price,region) VALUES ('$name', '$type','$quantity','$price','$region')";

    // Executes the query
    // If data inserted then set success message otherwise set error message
    if ($db->exec($query)) {
        $message = "Data inserted successfully.";
    } else {
        $message = "Sorry, Data is not inserted.";
    }
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Insert Data</title>
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
            <form action="insert.php" method="post">
                <tr>
                    <td>Name</td>
                    <td><input name="name" type="text"></td>
                </tr>
                <tr>
                    <td>Type</td>
                    <td><input name="type" type="text"></td>
                </tr>
                <tr>
                    <td>Quantity</td>
                    <td><input name="quantity" type="text"></td>
                </tr>
                <tr>
                    <td>Price</td>
                    <td><input name="price" type="text"></td>
                </tr>
                <tr>
                    <td>Region</td>
                    <td><input name="region" type="text"></td>
                </tr>
                <tr>
                    <td><a href="list.php">See Data</a></td>
                    <td><input name="submit_data" type="submit" value="Insert Data"></td>
                </tr>
            </form>
        </table> -->
        <form action="insert.php" method="post">
            <div class="badge badge-success" id="message" class=""><?php echo $message; ?></div>
            <div class="form-group">
                <label for="exampleInputEmail1">Name:</label>
                <input id="2first_name" name="name" type="text" class="form-control">

            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Type</label>
                <!-- <input id="2last_name" name="type" type="text" class="form-control"> -->
                <select name="type" class="form-control" id="exampleSelect">
                    <option>Select Item</option>
                    <option>type-1</option>
                    <option>type-2</option>
                    <option>type-3</option>
                    <option>type-4</option>
                    <option>type-5</option>
                </select>


            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Quantity</label>
                <input id="2email" name="quantity" type="text" class="form-control">

            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Price</label>
                <input id="2pass" name="price" type="text" class="form-control">

            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Region</label>
                <!-- <input id="2ConfirmPass" name="region" type="text" class="form-control"> -->
                <select name="region" class="form-control" id="exampleSelect">
                    <option>Select Item</option>
                    <option>region-1</option>
                    <option>region-2</option>
                    <option>region-3</option>
                    <option>region-4</option>
                    <option>region-5</option>
                </select>

            </div>
            <div class="form-group">
                <a class="btn btn-primary" href="list.php">See Data</a>
                <input class="btn btn-success" name="submit_data" type="submit" value="Insert Data">
            </div>

        </form>
    </div>
    <?php include 'reg_model.php'; ?>
</body>
<script type="text/javascript" src="script.js">
</script>

</html>