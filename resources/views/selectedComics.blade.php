@extends('layout.default')

@section('page_title', 'Dettagli Comics')



@section('content')

    <div class="hero">
    </div>
    <div class="division"> 
        <img class="copertina" src="{{ $sceltaComics['thumb'] }}" alt="">
    </div>


<main class="main-comics">
    <h1>Dettagli</h1>
    <ul>
        <li>{{ $sceltaComics["series"] }}</li>
        <li>prezzo: {{ $sceltaComics["price"] }}</li>
        <li>genere: {{$sceltaComics["type"] }}</li>
        <li>{{!! $sceltaComics["description"] !!}}</li>
    
    </ul>
</main>

@endsection