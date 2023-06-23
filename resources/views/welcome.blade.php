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
    <main class="bg-dark">
        <div class="container">
        <div class="series d-flex flex-wrap gap-3 py-5">
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
    </main>
    </div>
    @include('partials.footer')
</body>

</html>