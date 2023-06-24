<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    @vite('resources/js/app.js')
</head>

<body>
    @include('partials.header')
    <main class="bg-dark py-5">
        <div class="container">
        <div class="series d-flex flex-wrap gap-3">
                {{-- {{ var_dump($comics[0]["title"]) }} --}}
                @forelse ($comics as $item)
                    <div class="card border-0 bg-dark">
                        <img src="{{$item["thumb"]}}" alt="" class="class="card-img-top"">
                        <div class="card-body">
                            <h5 class="card-title text-light">{{ $item["series"] }}</h5>    
                        </div>
                    </div>
                @empty
                    <h1>Non ci sono cards</h1>
                @endforelse
        </div>
        <button class="btn btn-primary d-block m-auto" type="submit">Load More</button>
    </div>
    </main>
    <div class="bg-primary py-3">
        <div class="container text-light d-flex align-items-center justify-content-between">
            <div class="item">
                <img src="{{ Vite::asset('../resources/images/buy-comics-digital-comics.png') }}" alt="">
                Digital comics
            </div>
            <div class="item">
                <img src="{{ Vite::asset('../resources/images/buy-comics-merchandise.png') }}" alt="">
                Digital comics
            </div>
            <div class="item">
                <img src="{{ Vite::asset('../resources/images/buy-comics-subscriptions.png') }}" alt="">
                Digital comics
            </div>
            <div class="item">
                <img src="{{ Vite::asset('../resources/images/buy-comics-shop-locator.png') }}" alt="">
                Digital comics
            </div>
            <div class="item">
                <img src="{{ Vite::asset('../resources/images/buy-dc-power-visa.svg') }}" alt="">
                Digital comics
            </div>
        </div>
    </div>
    @include('partials.footer')
</body>

</html>