<!doctype html>
<html lang="en" data-theme="light">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide/dist/css/splide.min.css">
    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide/dist/js/splide.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
</head>

<body>
    {{-- <div class="p-4"> --}}
        @include('partials.navbar')
    <div class="carousel w-full lg:h-f" id="carousel">
        <div class="carousel-item w-full  transition-opacity duration-500">
            <img src="{{ asset('image/1.png') }}" alt="Burger" class="lg:h-full h-52" />
        </div>
        <div class="carousel-item w-full  transition-opacity duration-500">
            <img src="{{ asset('image/2.png') }}" alt="Burger" class="lg:h-full h-52" />
        </div>
        <div class="carousel-item w-full  transition-opacity duration-500">
            <img src="{{ asset('image/3.png') }}" alt="Burger" class="lg:h-full h-52" />
        </div>
        <div class="carousel-item w-full  transition-opacity duration-500">
            <img src="{{ asset('image/4.png') }}" alt="Burger" class="lg:h-full h-52" />
        </div>
    </div>
    <main class="container mx-auto p-0 mb-36 w-screen">
        @yield('content')
    </main>
    @stack('js')
</body>

</html>
