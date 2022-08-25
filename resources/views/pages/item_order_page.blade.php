@extends('layouts.app')
@section('content')
    <div class="utascafe">
        <div class="">
            <a>
                <h1 style="text-align:center;"><u>{{ $restaurant_info->name }} </u></h1>
                <br />

                <img src={{ asset($restaurant_info->cover_photo) }} style="width:100vw; height:500px" />
            </a><br />
            <br />
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h1><b>Trading Hours</b></h1>
                <ul>
                    <h2>We're Open At These Times</h2>
                    <p>MONDAY...................(8.30 AM-4.00PM)</p>
                    <p>TUESDAY..................(8.30 AM-4.00PM)</p>
                    <p>WEDNESSDAY...............(8.30 AM-4.00PM)</p>
                    <p>THURSDAY.................(8.30 AM-4.00PM)</p>
                    <p>FRIDAY...................(8.30 AM-4.00PM)</p>
                </ul>
            </div>
            <div class="col-md-6">
                <h1>Bevarges</h1>
                <ul>
                    <p>SoftDrinks------------ $4</p>
                    <p>cappuccino(reg)-------------$4.20</p>
                    <p>cappuccino(Lrg)-------------$4.50</p>
                    <p>Latte(reg)-------------$4.00</p>
                    <p>Latte(Lrg)-------------$4.20</p>
                    <p>mocha(reg)---------------$4.50</p>
                    <p>mocha(Lrg)---------------$4.80</p>
                    <p>Chai Latte----------------4.50</p>
                    <p>Hot Chocklet------------$4.50</p>
                </ul>
            </div>
        </div>
        <h1><b>FOOD MENU </b></h1>
        <div class="nonveg row">
            <div class="bev-section col-md-4">
                <img src="s2.jpg" />
                <p>Sandwitch -- 7.95 au$</p>
            </div>
            <div class="bev-section col-md-4">
                <img src="s3.jpg" />
                <p>ceaser Salad -- 20 au$</p>
            </div>
            <div class="bev-section col-md-4">
                <img src="burger.jpg" />
                <p>Aussie Beef Burger-- 8.65 $</p>
            </div>

            <div class="bev-section col-md-4">

                <img src="s1.jpg" />
                <p>SHUSI--Price 5.50(each)</p>
            </div>

        </div>
        <div class="bev-section col-md-12">
            <h2>
                we have got every kind of coffee you heard. Eat In /Or take Aaway
            </h2>
            <div>
                <img src="s4.jpg" />
            </div>
        </div>

        <div class="about">
            <h1><b>About The Trade Table Cafe</b></h1>
            <br />
            <h2>
                Located on the lower ground floor of the Centenary Building, the Trade Table offers sushi, salads, soup,
                sandwiches, cakes and slices, confectionery and a range of hot and cold drinks.
            </h2>
        </div>

        <script>
            $(function() {
                $("#includedContent").load("navbar.html");
            });
        </script>
    </div>
    </div>
    </div>
@endsection
