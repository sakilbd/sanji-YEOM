@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <aside class="col-lg-7">
                <div class="card">
                    <div class="table-responsive">
                        <table class="table table-borderless table-shopping-cart">
                            <thead class="text-muted">
                                <tr class="small text-uppercase">
                                    <th scope="col">Product</th>
                                    <th scope="col" width="120">Quantity</th>
                                    <th scope="col" width="120">Price</th>
                                    <th scope="col" class="text-right d-none d-md-block" width="200"></th>
                                </tr>
                            </thead>
                            @php
                                $orders = $order->where('client_id', Auth::user()->id);
                            @endphp

                            {{-- {{ dd($order[0]->itemInfo) }} --}}
                            <tbody>
                                @foreach ($orders as $order)
                                    <tr>
                                        <td>
                                            <figure class="itemside align-items-center">
                                                <div class="aside"><img src={{ asset($order->itemInfo['item_image_url']) }}
                                                        class="img-sm" style="width:50%;height:40px"></div>
                                                <figcaption class="info"> <a href="#" class="title text-dark"
                                                        data-abc="true"><b>{{ $order->itemInfo['name'] }}</b></a>
                                                    {{-- <p class="text-muted small">SIZE: L <br> Brand: MAXTRA</p> --}}
                                                </figcaption>
                                            </figure>
                                        </td>
                                        <td>
                                            {{ $order->quantity }}
                                            {{-- <select class="form-control">
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                    </select> --}}
                                        </td>
                                        @php
                                            $itemPrice = $order->quantity * $order->itemInfo['price'];
                                        @endphp
                                        <td>
                                            <div class="price-wrap"> <var class="price">$<span
                                                        id={{ $order->id . 'price' }}>{{ $itemPrice }}</span></var>&nbsp<small
                                                    class='text-muted'>${{ $order->itemInfo['price'] }} &nbsp each</small>
                                            </div>
                                        </td>
                                        <td class="text-right d-none d-md-block"> <a href="" class="btn btn-light"
                                                data-abc="true">Remove</a> </td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </aside>

            <aside class="col-lg-5">

                <div class="card">
                    <div class="card-body">
                        <dl class="dlist-align">
                            <dt>Add ons </dt>
                            {{-- <dd >69.97</dd> --}}
                        </dl>
                        <table class="table table-borderless table-shopping-cart">
                            <thead>
                                <tr>
                                    <th>Item</th>
                                    <th>Price</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($addons as $item)
                                    <tr>

                                        <td>{{ $item->name }}</td>
                                        <td>$<span id="addOn_price">{{ $item->price }}</span></td>
                                        <td>
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
                                        </td>

                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                    </div>
                </div>
                <br>
                <div class="card">
                    <div class="card-body">
                        <dl class="dlist-align">
                            <dt>Total price: $ <span id="total-price" class="text-right"></span></dt>
                            {{-- <dd >69.97</dd> --}}
                        </dl>
                        {{-- <dl class="dlist-align">
                        <dt>Discount:</dt>
                        <dd class="text-right text-danger ml-3">- $10.00</dd>
                    </dl>
                    <dl class="dlist-align">
                        <dt>Total:</dt>
                        <dd class="text-right text-dark b ml-3"><strong>$59.97</strong></dd>
                    </dl> --}}
                        <hr> <a href="#" class="btn btn-out btn-primary btn-square btn-main" data-abc="true"> Make
                            Purchase </a> <a href="#" class="btn btn-out btn-success btn-square btn-main mt-2"
                            data-abc="true" id="OrderSubmitButton">Confirm Order</a>
                    </div>
                </div>
            </aside>
        </div>
    </div>
    @php
        $timestamp = Carbon\Carbon::now()->toDateTimeString();
    @endphp
@endsection

@section('scripts')
    <script>
        var order_items = {!! json_encode($orders, JSON_HEX_TAG) !!};
        var totalPrice = 0;
        var totalPriceDiv = document.getElementById('total-price');
        // alert(order_items.id);
        order_items.forEach((item) => {
            let id = item.id + "price";
            const priceId = document.getElementById(id);
            totalPrice += parseInt(priceId.innerHTML);

        });

        totalPriceDiv.innerHTML = totalPrice;
    </script>


    <script>
        const c = console.log.bind(console);

        let addon = {!! json_encode($addons, JSON_HEX_TAG) !!};
        var user = {!! Auth()->user()->toJson() !!};
        let btnId = 'OrderSubmitButton';

        var timeStamp = {!! json_encode($timestamp, JSON_HEX_TAG) !!};
        const navBalance = document.getElementById("nav-balance");

        const submitBtn = document.getElementById(btnId);


        var moneyLeft = parseInt(navBalance.innerHTML) - parseInt(totalPrice);



        // navBalance.innerHTML = moneyLeft;
        navBalance.innerHTML = moneyLeft;




        addon.forEach(item => {

            c(item.id)

            let minusButtonId = item.id + 'minusButton';
            let plusButtonId = item.id + 'plusButton';
            let digitId = item.id + 'digit';

            const minusBtn = document.getElementById(minusButtonId);

            const plusBtn = document.getElementById(plusButtonId);

            const digit = document.getElementById(digitId);

            // c(digit.innerHTML);


            minusBtn.addEventListener("click", function() {
                c('minusClicked');
                let number = parseInt(digit.innerHTML) - 1;

                if (number < 0) {
                    number = 0;
                } else {
                    moneyLeft += parseInt(item.price);
                    totalPrice -= parseInt(item.price);
                }
                navBalance.innerHTML = moneyLeft;
                digit.innerHTML = number;
                totalPriceDiv.innerHTML = totalPrice;
                // alert(moneyLeft);


            });
            plusBtn.addEventListener("click", function() {
                c('plusClicked');
                let number = parseInt(digit.innerHTML) + 1;



                moneyLeft -= parseInt(item.price);
                if (moneyLeft > 0) {

                    navBalance.innerHTML = moneyLeft;

                    digit.innerHTML = number;
                    totalPrice += parseInt(item.price);
                } else {
                    moneyLeft += parseInt(item
                        .price); //as clicking after minimum balance does its moneyleft calcuations 


                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'balance limit exceeded',
                        // footer: '<a href="">Why do I have this issue?</a>'
                    })
                }
                totalPriceDiv.innerHTML = totalPrice;


            });
        });


        submitBtn.addEventListener("click", function() {
            let addOnsPriceObj = {} ;
            addon.forEach(item => {
                let digitId = item.id + 'digit';
                const digit = document.getElementById(digitId);
                if (digit.innerHTML > 0) {
                    addOnsPriceObj[item.id] = digit.innerHTML*item.price;
                    // alert(digit.innerHTML)
                };

                
            })
            alert(timeStamp)
            alert(user.id)
            alert(JSON.stringify(addOnsPriceObj))
            let totalPrice = totalPriceDiv.innerHTML;
            alert(totalPrice);
            // var timestamp = new Date().getTime();
            // itemSubmit(user.id, addOnsPriceObj , totalPrice, timeStamp, timeStamp)
        });


        // let itemSubmit = ( client_id, addOnsInfo, total_price, create_time, update_time) => {

        //     $.ajax({
        //         type: 'POST',
        //         url: '/api/confirm_order', //api post call
        //         data: {
        //             _token: "{{ csrf_token() }}",
                   
        //             client_id: client_id,
        //             addOns: addOnsInfo,
        //             total_price: total_price,
        //             created_at: create_time,
        //             updated_at: update_time,



        //         },

        //         error(err) {
        //             console.log(err.responseJSON.message);
        //             // Swal.fire(
        //             //     'errors!',
        //             //     err.responseJSON.message,
        //             //     'error'
        //             // )
        //         },

        //         success(response) {
        //             console.log(response.message);
        //             Swal.fire(
        //                 'Success!',
        //                 response.message,
        //                 'success'
        //             )
        //         },
        //     });

        // }
    </script>
@endsection
