@extends('layout.default')

@section('page_title', 'comics')

@section('content')


<main class="main-home">

        
    <div class="hero">
        <div class="current">
        CURRENT SERIES
        </div>
    </div>
    
    <div class="total-container">

        <div class="card-container">
    

            @foreach($comicsList as $key => $comics)

                <div class="card">
                    <a href="{{ route('selectedComics', [ 'index' => $key ] ) }}">
                        <img src="{{ $comics['thumb'] }}" alt="">
                        <h4>{{ $comics['title'] }}</h4>
                    </a>
                </div>

        {{-- @include("partials.card", $product) --}}

            @endforeach

        </div>
    </div>

    <div class="main-footer">
        <div class="total-container my-flex">
            <div class="info my-flex">
                <img src="\images\buy-comics-digital-comics.png" alt="">
                <h5>DIGITAL COMICS</h5>
            </div>
            <div class="info my-flex">
                <img src="images\buy-comics-merchandise.png" alt="">
                <h5>DC MERCHANDISE</h5>
            </div>
            <div class="info my-flex">
                <img src="\images\buy-comics-subscriptions.png" alt="">
                <h5>SUBSCRIPTION</h5>
            </div>
            <div class="info my-flex">
                <img src="\images\buy-comics-shop-locator.png" alt="">
                <h5>COMIC SHOP LOCATOR</h5>
            </div>
            <div class="info my-flex">
                <img src="\images\buy-dc-power-visa.svg" alt="">
                <h5>DC POWER VISA</h5>
            </div>
        </div>
    
    </div>
</main>

@endsection
