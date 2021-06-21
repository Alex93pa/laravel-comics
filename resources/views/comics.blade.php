@extends('layout.default')

@section('page_title', 'comics')

@section('content')



<div class="total-container">
    <div class="current">
        CURRENT SERIES
    </div>


    <div class="card-container">

    @foreach($comicsList as $key => $comics)

    <div class="card">
        <a href="{{ route('Prodotto-Selezionato', [ 'index' => $key ] )}}">
            <img src="{{ $comics['thumb'] }}" alt="">
            <h4>{{ $comics['title'] }}</h4>
        </a>
    </div>

    {{-- @include("partials.card", $product) --}}

    @endforeach
</div>

@endsection
