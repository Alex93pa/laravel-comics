<div class="hero"></div>

<div class="total-container">
    <div class="current">
        CURRENT SERIES
    </div>

    @section('content')



    <div class="card-container">

    @foreach($comicsList as $comics)

    <div class="card">
        <img src="{{ $comics['thumb'] }}" alt="">
        <h4>{{ $comics['title'] }}</h4>
    </div>

    {{-- @include("partials.card", $product) --}}

    @endforeach
    </div>

    @endsection


</div>