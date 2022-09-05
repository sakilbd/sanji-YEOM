<DOCTYPE html>
    <html>

    <head>
        <title>details.html</title>

        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>

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

        <div class="details-image-container">
            <img src="img/wine_storage.jpg" alt="wine storage" style="width: 100%; height: 50%" />

            <div class="details-text">Wine Regions of Australia (in 2019)</div>
        </div>
        <div class="items-to-center">
            <div style="width: 75%">
                <h2>Total Producing Area: 146,128 h.a</h2>
                <table class="table table-striped">

                    <tbody>
                        <tr>
                            <th scope="row" colspan="">No. of Wine Region </th>
                            <td scope="row" colspan="2"> 65</td>

                        </tr>
                        <tr>
                            <th scope="row" colspan="">No. of Wineries </th>
                            <td scope="row" colspan="2"> 2500</td>

                        </tr>
                        <tr>
                            <th scope="row" colspan="">No. of Grape Growers </th>
                            <td scope="row" colspan="2"> 6300</td>

                        </tr>
                        <tr>
                            <th scope="row" colspan="">Total Harvest Tonnes </th>
                            <td scope="row" colspan="2"> 1.73 million</td>

                        </tr>
                        <tr>
                            <th scope="row" colspan="">Red Grape Harvest </th>
                            <td scope="row" colspan="2"> 941,583</td>

                        </tr>
                        <tr>
                            <th scope="row" colspan="">White Grape Harvest </th>
                            <td scope="row" colspan="2"> 786,871</td>

                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="items-to-center">
            <div style="width: 35%">
                <<h3> White Varieties </h3>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Grape</th>
                                <th scope="col">Area Ha</th>
                                <th scope="col">Percentage</th>

                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">Chardonnay</th>
                                <td>21442</td>
                                <td>15%</td>

                            </tr>
                            <tr>
                                <th scope="row">Sauvignon Blanc</th>
                                <td>6100</td>
                                <td>4%</td>

                            </tr>
                            <tr>
                                <th scope="row">Semillon</th>
                                <td>4570</td>
                                <td>3%</td>

                            </tr>
                            <tr>
                                <th scope="row">Pinto Grigio Gris</th>
                                <td>3731</td>
                                <td>2.6%</td>

                            </tr>
                            <tr>
                                <th scope="row">Riesing</th>
                                <td>3157</td>
                                <td>2%</td>

                            </tr>
                        </tbody>
                    </table>
            </div>
            <div style="width: 35%">
                <h3>Red Varieties</h3>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Grape</th>
                            <th scope="col">Area Ha</th>
                            <th scope="col">Percentage</th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">Shiraz</th>
                            <td>39900</td>
                            <td>27%</td>

                        </tr>
                        <tr>
                            <th scope="row">Cabinet Sauvignon</th>
                            <td>24682</td>
                            <td>17%</td>

                        </tr>
                        <tr>
                            <th scope="row">Merlot</th>
                            <td>8477</td>
                            <td>6%</td>

                        </tr>
                        <tr>
                            <th scope="row">Pinot Noir</th>
                            <td>4948</td>
                            <td>3%</td>

                        </tr>
                        <tr>
                            <th scope="row">Grenache</th>
                            <td>1507</td>
                            <td>1%</td>

                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

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
                                <label for="exampleInputEmail1">First Name</label>
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
</DOCTYPE>