@extends('layout.default')

@section('page_title')

@section('content')

<div class="hero"></div>

<div class="total-container">
    <div class="current">
        CURRENT SERIES
    </div>


    <div class="card-container">

    @foreach($comicsList as $comics)

    <div class="card">
        <a href="">
            <img src="{{ $comics['thumb'] }}" alt="">
            <h4>{{ $comics['title'] }}</h4>
        </a>
    </div>

    {{-- @include("partials.card", $product) --}}

    @endforeach
    </div>

    @endsection


</div>