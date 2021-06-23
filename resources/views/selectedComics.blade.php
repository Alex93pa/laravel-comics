@extends('layout.default')

@section('page_title', 'Dettagli Comics')



@section('content')

    <div class="hero">
    </div>
    <div class="division"> 
        <img class="copertina" src="{{ $sceltaComics['thumb'] }}" alt="">
    </div>


<main class="total-container">
    <div class="info-top">
        <h1>{{ $sceltaComics["series"] }}</h1>
        <div class="green-bar">
            <div class="price">
                <p>prezzo: {{ $sceltaComics["price"] }}</p>
            </div>
                <p class="available">AVAILABLE</p>
                <p class="check">Check availability</p>
        </div>
        <p class="comics-description">{{ $sceltaComics["description"] }}</p>

        <ul>
            <li></li>
            <li>genere: {{$sceltaComics["type"] }}</li>
        
        </ul>
    </div>

    <div class="adv">
        <img src="/images/adv.jpg" alt="">
    </div>
</main>

<section class="spc-info">

    <div class="total-container my-flex">
        <div class="talent">
            <h1>Talent</h1>
            <div class="m-info">
                <p>Art by : </p>
                
                <p>
                @foreach($sceltaComics["artists"] as $artists)
                  <span>{{$artists}}</span>
                @endforeach
                </p>
            </div>
            <div class="m-info">
                <p>
                Written by :
                </p>
                 @foreach($sceltaComics['writers'] as $writers)
                  <span>{{$writers}}</span>
                @endforeach 
                
            </div>
            
        </div>
    
        <div class="specs">
            <h1>Specs</h1>
                <div class="m-info">
                <p>
                    Series
                </p>

                <p>
                    {{$sceltaComics["type"] }}
                </p>
                </div>
                
                <div class="m-info">
                <p>
                    US Price
                </p>

                <p>
                    {{$sceltaComics["price"] }}
                </p>
                </div>
                
                <div class="m-info">
                <p>
                    On Sale Date
                </p>

                <p>
                    {{$sceltaComics["sale_date"] }}
                </p>
                </div>
                

        </div>
    </div>



</section>

@endsection