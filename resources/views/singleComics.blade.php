@extends('layout.default')

@section('page_title', 'Dettagli Comics')

@section('pre-content')

@endsection


@section('content')

    <h1>Dettagli</h1>
    <ul>
        <li>{{ $comics["series"] }}</li>
        <li>prezzo: {{ $comics["price"] }}</li>
        <li>{{genere: $comics["type"] }}</li>
        <li>{{!! $comics["description"] !!}}</li>
    
    </ul>

@endsection