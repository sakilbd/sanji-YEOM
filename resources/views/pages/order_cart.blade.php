@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <aside class="col-lg-8">
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

            <aside class="col-lg-4">

                <div class="card">
                    <div class="card-body">
                        <dl class="dlist-align">
                            <dt>Add ons <span id="total-price" class="text-right">0</span></dt>
                            {{-- <dd >69.97</dd> --}}
                        </dl>
                        <table class="table table-borderless table-shopping-cart">
                            <thead>
                                <tr>
                                    <th>Item</th>
                                    <th>Price</th>
                                    <th>Price</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>b</td>
                                    <td>c</td>
                                </tr>
                            </tbody>
                        </table>

                    </div>
                </div>
                <br>
                <div class="card">
                    <div class="card-body">
                        <dl class="dlist-align">
                            <dt>Total price: $ <span id="total-price" class="text-right">0</span></dt>
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
                            data-abc="true">Continue Shopping</a>
                    </div>
                </div>
            </aside>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        var order_items = {!! json_encode($orders, JSON_HEX_TAG) !!};
        var totalPrice = 0;
        const totalPriceDiv = document.getElementById('total-price');
        // alert(order_items.id);
        order_items.forEach((item) => {
            let id = item.id + "price";
            const priceId = document.getElementById(id);
            totalPrice += parseInt(priceId.innerHTML);

        });
        totalPriceDiv.innerHTML = totalPrice;
    </script>
@endsection
