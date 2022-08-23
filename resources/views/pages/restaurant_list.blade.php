@extends('layouts.app')
@section('content')
{{ Auth::user()->name }}
    <div clas="">
        <div class="cafes">
            <h1 class="text-dark">University of Tasmania's Cafe</h1>
            <div class="cafe-names">
                @foreach($restaurant_list as $restaurants)
                <div class="cafe-section">
                    <a href="">
                        <h2>{{ $restaurants->name }}</h2>

                        <img src={{ $restaurants->image }} />
                    </a>
                </div>
                @endforeach

                
            </div>
        </div>
    </div>
@endsection
