@extends('layout.default')

@section('page_title', 'Dettagli Comics')



@section('content')

    <h1>Dettagli</h1>
    <ul>
        <li>{{ $sceltaComics["series"] }}</li>
        <li>prezzo: {{ $sceltaComics["price"] }}</li>
        <li>genere: {{$sceltaComics["type"] }}</li>
        <li>{{!! $sceltaComics["description"] !!}}</li>
    
    </ul>

@endsection