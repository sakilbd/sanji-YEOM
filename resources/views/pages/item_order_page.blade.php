@extends('layouts.app')
@section('content')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
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


        <h1><b>Foods </b></h1>
        <div class="nonveg row">
            @foreach ($food as $item)
                <div class="bev-section col-md-4">
                    <img src="{{ asset($item->item_image_url) }}" />
                    <div class="pricing-part">
                        <div>
                            <p>{{ $item->name }} -- {{ $item->price }} au$</p>
                        </div>
                        <div>
                            <div class="digit-right-portion">
                                <div class="symbols">
                                    <i id={{ $item->id . 'minusButton' }} class="fa-solid fa-minus"></i>

                                </div>
                                <div class="digit">
                                    <div id={{ $item->id . 'digit' }} class="digit-number">0</div>
                                </div>

                                <div class="symbols">
                                    <i id={{ $item->id . 'plusButton' }} class="fa-solid fa-plus"></i>
                                </div>
                            </div>
                        </div>

                    </div>

                    <button type="button" class="btn btn-success col-md-12">Add To Cart</button>


                </div>
            @endforeach


        </div>

        <h1><b>Beverages</b></h1>
        <div class="nonveg row">
            @foreach ($beverage as $item)
                <div class="bev-section col-md-4">
                    <img src="{{ asset($item->item_image_url) }}" />
                    <div class="pricing-part">
                        <div>
                            <p>{{ $item->name }} -- {{ $item->price }} au$</p>
                        </div>
                        <div>
                            <div class="digit-right-portion">
                                <div class="symbols">
                                    <i id={{ $item->id . 'minusButton' }} class="fa-solid fa-minus"></i>

                                </div>
                                <div class="digit">
                                    <div id={{ $item->id . 'digit' }} class="digit-number">0</div>
                                </div>

                                <div class="symbols">
                                    <i id={{ $item->id . 'plusButton' }} class="fa-solid fa-plus"></i>
                                </div>
                            </div>
                        </div>

                    </div>
                    <button type="button" class="btn btn-success col-md-12">Add To Cart</button>
                </div>
            @endforeach


        </div>
        {{-- <div class="bev-section col-md-12">
            <h2>
                we have got every kind of coffee you heard. Eat In /Or take Aaway
            </h2>
            <div>
                <img src="s4.jpg" />
            </div>
        </div> --}}

        <div class="about">
            <h1><b>About The Trade Table Cafe</b></h1>
            <br />
            <h2>
                Located on the lower ground floor of the Centenary Building, the Trade Table offers sushi, salads, soup,
                sandwiches, cakes and slices, confectionery and a range of hot and cold drinks.
            </h2>
        </div>


    </div>
    </div>
    </div>
@endsection

@section('scripts')
    <script>
        const c = console.log.bind(console);
        var foods = {!! json_encode($food, JSON_HEX_TAG) !!};
        var beverage = {!! json_encode($beverage, JSON_HEX_TAG) !!};
        let balance = {!! json_encode($user_balance, JSON_HEX_TAG) !!};
        var moneyLeft = parseInt(balance.card_balance);
        const navBalance = document.getElementById("nav-balance");
        navBalance.innerHTML = moneyLeft;




        foods.forEach(item => {
            c(item.id);
            let minusButtonId = item.id + 'minusButton';
            let plusButtonId = item.id + 'plusButton';
            let digitId = item.id + 'digit';
            const minusBtn = document.getElementById(minusButtonId);

            const plusBtn = document.getElementById(plusButtonId);
            const digit = document.getElementById(digitId);

            c(digit.innerHTML)


            minusBtn.addEventListener("click", function() {
                c('minusClicked');
                let number = parseInt(digit.innerHTML) - 1;

                if (number < 0) {
                    number = 0;
                } else {
                    moneyLeft += parseInt(item.price);
                }
                navBalance.innerHTML = moneyLeft;
                digit.innerHTML = number;
                // alert(moneyLeft);


            });
            plusBtn.addEventListener("click", function() {
                c('plusClicked');
                let number = parseInt(digit.innerHTML) + 1;



                moneyLeft -= parseInt(item.price);
                if (moneyLeft > 0) {

                    navBalance.innerHTML = moneyLeft;

                    digit.innerHTML = number;
                } else {
                    moneyLeft += parseInt(item.price); //as clicking after minimum balance does its moneyleft calcuations 
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'balance limit exceeded',
                        // footer: '<a href="">Why do I have this issue?</a>'
                    })
                }


            });
        })
        beverage.forEach(item => {
            c(item.id);
            let minusButtonId = item.id + 'minusButton';
            let plusButtonId = item.id + 'plusButton';
            let digitId = item.id + 'digit';
            const minusBtn = document.getElementById(minusButtonId);
            const plusBtn = document.getElementById(plusButtonId);
            const digit = document.getElementById(digitId);
            c(digit.innerHTML)


            minusBtn.addEventListener("click", function() {
                c('minusClicked');
                let number = parseInt(digit.innerHTML) - 1;

                if (number < 0) {
                    number = 0;
                } else {
                    moneyLeft += parseInt(item.price);
                }

                // alert(moneyLeft);
                navBalance.innerHTML = moneyLeft;
                digit.innerHTML = number;

            });
            plusBtn.addEventListener("click", function() {
                c('plusClicked');
                let number = parseInt(digit.innerHTML) + 1;



                if (moneyLeft > 0) {
                    moneyLeft -= parseInt(item.price);
                    navBalance.innerHTML = moneyLeft;

                    digit.innerHTML = number;
                } else {
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'balance limit exceeded',
                        // footer: '<a href="">Why do I have this issue?</a>'
                    })
                }

            });
        })
    </script>>
@endsection
