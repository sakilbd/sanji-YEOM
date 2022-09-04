<DOCTYPE html>
    <html>

    <head>

        <title>Index.html</title>

        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>

        <link rel="stylesheet" href="style.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">

    </head>

    <body>



        <div class="topnav">
            <a class="" href="index.php">Home</a>
            <a type="button" data-toggle="modal" data-target="#myModal" href="#registration">Registration</a>
            <a class="active" href="details.php">Details</a>
            <a class="" href="wine.php">Wine</a>
            <a href="#about">About</a>
        </div>











        <div class="image-container">

            <img src="https://thumbs.dreamstime.com/b/idyllic-green-fields-vibrant-blue-sky-panoramic-landscape-vast-hills-fluffy-white-clouds-76383482.jpg" alt="vineyard in italy" style="width:100%;">

            <div class="text-container">
                <div class="col-md-8">
                    <div class=""><b>Explore Australian Wine</b></div>
                    <div class="">The Australian wine industry is one of the worlds's largest exporters of wine, with approximately 800 million out of the 1.2 to 1.3 billion litres produced annually exported to overseas market The wine industry is a significant contributeor
                        to the Australian economy through production,employment,export and tourism
                    </div>
                </div>
            </div>
        </div><br>





        <!--    <h1>Explore Australian Wine</h1> -->

        <!--   <img src="img/italy_vineyard.jpg" alt="Vineyard in Italy"  width="100%" height="450"><br><br><br><br><br><br><br><br><br><br> -->

        <div class="container image-container">
            <div class="column">

                <img src="https://images.pexels.com/photos/3573711/pexels-photo-3573711.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt="People are cheering with wine glasses" width="300" height="250">
                <div class="large-text">Red Wine</div>
                <div class="small-text">Red Wine</div>
                <button class="btn btn-primary">View details>></button>

            </div>

            <div class="column">


                <img src="https://images.pexels.com/photos/3573711/pexels-photo-3573711.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt="People are cheering with wine glasses" width="300" height="250">
                <div class="large-text">Red Wine</div>
                <div class="small-text">Red Wine</div>
                <button class="btn btn-primary">View details>></button>


            </div>

            <div class="column">


                <img src="https://media.istockphoto.com/photos/wine-tasting-at-restaurant-picture-id476976729?k=20&m=476976729&s=612x612&w=0&h=5ioxIi1WAChfSxP_0S-WZjbgH6J3pUU2wBLjnca_i7o=" alt="People are cheering with wine glasses" width="300" height="250">
                <div class="large-text">Red Wine</div>
                <div class="small-text">Red Wine</div>
                <button class="btn btn-primary">View details>></button>

            </div>

        </div>





        <!-- <p> The Australian wine industry is one of the worlds's largest exporters of wine, with
      approximately 800 million out of the 1.2 to 1.3 billion litres produced annually exported to overseas market
      The wine industry is a significant contributeor to the Australian economy through production,employment,export and
      tourism </p>  -->

        <div class="footer-part">
            <div class="footer-part">
                <h3>Location of Vineyards</h3>

                <ul>
                    <li>South Australia</li>
                    <li>Victoria</li>
                    <li>New South Wales</li>
                    <li>Western Australia</li>
                    <li>Qeensland</li>
                    <li>Tasmania</li>
                </ul>
            </div>

            <div class="footer-part footer-part-colored">
                <hr>Do you want to register ? Follow this link :</hr> <a type="button" data-toggle="modal" data-target="#myModal" href="#registration"> Click Me </a>
                <p>For more information :</p> <a href="details.html">Click Me </a>
            </div>
        </div>
        <!-- <input id="" type="text" class="form-control"> -->
        <!-- 
        <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Modal</button> -->

        <!-- Modal -->
        <div id="myModal" class="modal fade" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Registration Form</h4>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div id="message" class="text-danger">**Please type first and last Name</div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">First Nmae</label>
                                <input id="first_name" type="text" class="form-control">

                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Last Name</label>
                                <input id="last_name" type="text" class="form-control">

                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email</label>
                                <input id="email" type="email" class="form-control">

                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Password</label>
                                <input id="pass" type="password" class="form-control">

                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Confirm Password</label>
                                <input id="ConfirmPass" type="password" class="form-control">

                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Gender</label><br>
                                <input type="radio" name="gender" value="male"> Male<br>
                                <input type="radio" name="gender" value="female"> Female<br>
                                <input type="radio" name="gender" value="other"> Other<br>
                                <input type="checkbox" name="gender" value="I am over 18+">I am over 18+<br>
                                <button class="btn btn-danger">Close</button>
                                <Button class="btn btn-info">Submit</Button>

                            </div>

                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>

            </div>
        </div>



    </body>
    <script type="text/javascript" src="script.js">
    </script>

    </html>