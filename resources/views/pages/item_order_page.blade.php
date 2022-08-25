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


        <h1><b>Foods </b></h1>
        <div class="nonveg row">
            @foreach ($food as $item)
                <div class="bev-section col-md-4">
                    <img src="{{ asset($item->item_image_url) }}" />
                    <p>{{ $item->name }} -- {{ $item->price }} au$</p>

                    <button type="button" class="btn btn-success col-md-12">Add To Cart</button>
                   

                </div>
            @endforeach


        </div>

        <h1><b>Beverages</b></h1>
        <div class="nonveg row">
            @foreach ($beverage as $item)
                <div class="bev-section col-md-4">
                    <img src="{{ asset($item->item_image_url) }}" />
                    <p>{{ $item->name }} -- {{ $item->price }} au$</p>
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
$('.btn-number').click(function(e){
    e.preventDefault();
    
    fieldName = $(this).attr('data-field');
    type      = $(this).attr('data-type');
    var input = $("input[name='"+fieldName+"']");
    var currentVal = parseInt(input.val());
    if (!isNaN(currentVal)) {
        if(type == 'minus') {
            
            if(currentVal > input.attr('min')) {
                input.val(currentVal - 1).change();
            } 
            if(parseInt(input.val()) == input.attr('min')) {
                $(this).attr('disabled', true);
            }

        } else if(type == 'plus') {

            if(currentVal < input.attr('max')) {
                input.val(currentVal + 1).change();
            }
            if(parseInt(input.val()) == input.attr('max')) {
                $(this).attr('disabled', true);
            }

        }
    } else {
        input.val(0);
    }
});
$('.input-number').focusin(function(){
   $(this).data('oldValue', $(this).val());
});
$('.input-number').change(function() {
    
    minValue =  parseInt($(this).attr('min'));
    maxValue =  parseInt($(this).attr('max'));
    valueCurrent = parseInt($(this).val());
    
    name = $(this).attr('name');
    if(valueCurrent >= minValue) {
        $(".btn-number[data-type='minus'][data-field='"+name+"']").removeAttr('disabled')
    } else {
        alert('Sorry, the minimum value was reached');
        $(this).val($(this).data('oldValue'));
    }
    if(valueCurrent <= maxValue) {
        $(".btn-number[data-type='plus'][data-field='"+name+"']").removeAttr('disabled')
    } else {
        alert('Sorry, the maximum value was reached');
        $(this).val($(this).data('oldValue'));
    }
    
    
});
$(".input-number").keydown(function (e) {
        // Allow: backspace, delete, tab, escape, enter and .
        if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 190]) !== -1 ||
             // Allow: Ctrl+A
            (e.keyCode == 65 && e.ctrlKey === true) || 
             // Allow: home, end, left, right
            (e.keyCode >= 35 && e.keyCode <= 39)) {
                 // let it happen, don't do anything
                 return;
        }
        // Ensure that it is a number and stop the keypress
        if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
            e.preventDefault();
        }
    });
</script>
@endsection

