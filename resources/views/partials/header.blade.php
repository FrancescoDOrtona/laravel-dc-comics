<header>
    <div class="bg-primary p-2">
        <div class="container">
            <div class="header__add">
                <div>dc power visa</div>
                <div>additional dc sites</div>
            </div>
        </div>
    </div>
    <div class="container">
        <nav class="navbar row">
            <div class="col-2 navbar_logo">
                <a href="{{  route('home')}}">
                    <img src="{{ Vite::asset('resources/images/dc-logo.png') }}" alt="Logo">
                </a>
            </div>
            <div class="col-8">
                <ul class="text-uppercase navbar_items">
                    <li><a href="#">characters</a></li>
                    <li><a href="{{ route('comics-page')}}">comics</a></li>
                    <li><a href="#">movies</a></li>
                    <li><a href="#">tv</a></li>
                    <li><a href="#">games</a></li>
                    <li><a href="#">collectibles</a></li>
                    <li><a href="#">videos</a></li>
                    <li><a href="#">fans</a></li>
                    <li><a href="#">news</a></li>
                    <li><a href="#">shop</a></li>
                </ul>
            </div>
            <div class="col-2">
                <input type="search" name="searchbar" id="searchbar" placeholder="Search">
            </div>
        </nav>
    </div>
    <div class="jumbo" style="background-image:url({{ Vite::asset('resources/images/jumbotron.jpg') }}) "></div>
</header>
