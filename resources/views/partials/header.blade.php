<header>
    <div class="container">
        <nav class="navbar">
            <div class="navbar-brand">
                <img src="{{ Vite::asset('../resources/images/dc-logo.png') }}" alt="">
            </div>
            <a class="nav-link" href="#">CHARACTERS</a>
            <a class="nav-link" href="#">COMICS</a>
            <a class="nav-link" href="#">MOVIES</a>
            <a class="nav-link" href="#">TV</a>
            <a class="nav-link" href="#">GAMES</a>
            <a class="nav-link" href="#">COLLECTIBLES</a>
            <a class="nav-link" href="#">VIDEOS</a>
            <a class="nav-link" href="#">FANS</a>
            <a class="nav-link" href="#">NEWS</a>
            <a class="nav-link dropdown-toggle" href="#">SHOP</a>
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </nav>
    </div>
    <div class="jumbo">
        {{-- <img src="{{ Vite::asset('../resources/images/jumbotron.jpg') }}" alt=""> --}}
    </div>
</header>