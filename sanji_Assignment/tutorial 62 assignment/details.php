<DOCTYPE html>
    <html>

    <head>
        <title>Details.html</title>

        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

        <link rel="stylesheet" href="style.css" />
    </head>

    <body>
        <div class="topnav">
            <a class="" href="index.php">Home</a>
            <a type="button" data-toggle="modal" data-target="#myModal" href="#registration">Registration</a
        >
        
        <a class="active" href="details.php">Details</a>
        <a class="" href="wine.php">Wine</a>
            <a href="#about">About</a>
        </div>

        <div class="details-image-container">
            <img src="https://www.pknt.com/wp-content/uploads/revslider/h5-slider-8.jpg" alt="vineyard in italy" style="width: 100%; height: 50%" />

            <div class="details-text">Wine Regions of Australia (in 2019)</div>
        </div>
        <div class="items-to-center">
            <div style="width: 75%">
                <h3>Total Producing Area: 146,128 h.a</h3>
                <table class="table table-striped">

                    <tbody>
                        <tr>
                            <th scope="row" colspan="">No. of Wine Region </th>
                            <td scope="row" colspan="2"> 65</td>

                        </tr>
                        <tr>
                            <th scope="row" colspan="">No. of Wine Region </th>
                            <td scope="row" colspan="2"> 65</td>

                        </tr>
                        <tr>
                            <th scope="row" colspan="">No. of Wine Region </th>
                            <td scope="row" colspan="2"> 65</td>

                        </tr>
                        <tr>
                            <th scope="row" colspan="">No. of Wine Region </th>
                            <td scope="row" colspan="2"> 65</td>

                        </tr>
                        <tr>
                            <th scope="row" colspan="">No. of Wine Region </th>
                            <td scope="row" colspan="2"> 65</td>

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
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>Otto</td>

                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Jacob</td>
                                <td>Thornton</td>

                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>Larry</td>
                                <td>the Bird</td>

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
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>

                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>Thornton</td>

                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>Larry</td>
                            <td>the Bird</td>

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
                        <button type="button" class="close" data-dismiss="modal">
                &times;
              </button>
                        <h4 class="modal-title">Registration Form</h4>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="form-group">
                                <label for="exampleInputEmail1">First Nmae</label>
                                <input type="text" class="form-control" />
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Last Name</label>
                                <input type="text" class="form-control" />
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email</label>
                                <input type="email" class="form-control" />
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Password</label>
                                <input type="password" class="form-control" />
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Confirm Password</label>
                                <input type="password" class="form-control" />
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Gender</label><br />
                                <input type="radio" name="gender" value="male" /> Male<br />
                                <input type="radio" name="gender" value="female" /> Female
                                <br />
                                <input type="radio" name="gender" value="other" /> Other<br />
                                <input type="checkbox" name="gender" value="I am over 18+" />I am over 18+<br />
                                <button class="btn btn-danger">Close</button>
                                <button class="btn btn-info">Submit</button>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">
                Close
              </button>
                    </div>
                </div>
            </div>
        </div>
    </body>

    </html>
</DOCTYPE>