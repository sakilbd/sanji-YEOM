@extends('layouts.app')
@section('content')
    
    <div class="container">
        <div class="cafes">
            <h1 class="text-dark">University of Tasmania's Cafe</h1>
            <div class="cafe-names col-md-12">
                {{-- @foreach ($restaurant_list->chunk(3) as $restaurant_list) --}}
                <div class="row">
                    @foreach ($restaurant_list as $restaurants)
                    <div class="col-md-4">
                       
                            <div class="cafe-section">
                                <a href="{{ route('item_order_page',['restaurant_id' =>$restaurants->id]) }}">
                                    <h2>{{ $restaurants->name }}</h2>

                                    <img src={{ $restaurants->image }} />
                                </a>
                            </div>
                       
                    </div>
                    @endforeach
                </div>
                {{-- @endforeach --}}

            </div>
        </div>
    </div>
@endsection
