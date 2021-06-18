<div class="hero"></div>

<div class="total-container">
    <div class="current">
        CURRENT SERIES
    </div>

    @section('content')



    <div class="card-container">

    {{-- @dump($productsList) --}}
    @foreach($seriesList as $serie)

    <div class="card">
        <img src="{{ $serie['thumb'] }}" alt="">
        <h4>{{ $serie['title'] }}</h4>
    </div>

    {{-- @include("partials.card", $product) --}}

    @endforeach
    </div>

    @endsection


</div>