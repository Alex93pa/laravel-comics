<header>

    <div class="bg-nav">
        <div class="total-container">
            <div class="nav-up">
                <div>
                    <h5>DC POWER VISA</h5>
                </div>
                <div>
                    <h5> ADDITIONAL DC SITES</h5>
                </div>
            </div>
        </div>
    </div>

    @php
    
        function setLinkClass($pageName) {
            $routeName = Request::route()->getName();
            return $routeName == $pageName ? 'active' : '';
        }

    @endphp

    <div class="total-container">
        <nav>
            <div class="logo">
                <img src="/images/dc-logo.png" alt="">
            </div>
            <div class="nav-list">
                <ul>
                    <li><a href="">CHARACTERS</a></li>
                    <li><a class="nav-link {{ setLinkClass('pagina-comics') }}" href="{{ route('comics') }}">COMICS</a></li>
                    <li><a href="">MOVIES</a></li>
                    <li><a href="">TV</a></li>
                    <li><a href="">GAMES</a></li>
                    <li><a href="">COLLECTIBLES</a></li>
                    <li><a href="">VIDEOS</a></li>
                    <li><a href="">FANS</a></li>
                    <li><a href="">NEWS</a></li>
                    <li><a href="">SHOP</a></li>
                </ul>
            </div>

            <input type="text" name="" id="" placeholder="search">
        </nav>


    </div>
</header>