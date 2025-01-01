@extends('layout.index')
@section('content')
    <div class="lg:mt-10 mt-1">
        <h1 class="lg:text-3xl  text-2xl font-bold lg:mb-6 mb-2 p-3">Movie Terbaru</h1>
        <div class="grid lg:grid-cols-5 grid-cols-2 gap-10 p-3 lg:p-0">
            @for ($i = 0; $i < 6; $i++)
                <div class="relative group">
                    <!-- Gambar -->
                    <img src="{{ asset('image/film1.jpg') }}" alt="Movie Thumbnail"
                        class="h-86 w-full rounded-xl object-cover transition duration-300 group-hover:brightness-75">

                    <!-- Card Hover -->
                    <div
                        class="absolute  top-0 left-0 w-full bg-white shadow-lg rounded-xl opacity-0 group-hover:opacity-100 group-hover:translate-y-[-10px] group-hover:scale-105 z-10 transition duration-300 ease-in-out flex flex-col justify-between">

                        <img src="{{ asset('image/film1.jpg') }}" alt="Movie Thumbnail"
                            class="lg:h-48 h-24 w-full object-cover transition duration-300 group-hover:brightness-75 rounded-se-xl rounded-tl-xl">
                        <div class="px-4 mt-2 mb-2">
                            <h2 class="lg:text-xl text-sm fonta-bold text-slate-900">Falling Before Fireworks</h2>
                            <p class="text-sm mt-1 flex items-center">
                                <span class="text-green-500 font-bold">9.6</span>
                                <span class="ml-2 text-slate-700">| 13+ | 2023</span>
                            </p>
                        </div>
                        <div class="flex gap-2 px-4">
                            <button
                                class="lg:w-10 lg:h-10 w-10 h-6 lg:0 p-1 flex justify-center mt-1 items-center bg-green-600 rounded-full hover:bg-green-700">
                                <i class="fa-solid fa-play text-white text-xs"></i>
                            </button>
                            <span
                                class="w-full text-center lg:h-10 lg:pt-1 pt-0 h-6 mt-1 bg-green-600 rounded-full lg:text-lg text-sm font-semibold text-white">Horor</span>
                        </div>
                        <div class="mb-4 px-4 mt-2">
                            <p class="lg:text-lg text-xs mb-3 text-slate-700 text-ellipsis">Si Qing, "manajer pinjaman"
                                bank, adalah
                                seseorang dengan kecantikan sosial yang lengkap...</p>
                            <a href="#" class="text-green-500 text-sm font-semibold hover:underline">Lebih banyak</a>
                        </div>
                    </div>

                </div>
            @endfor
        </div>
    </div>



    <style>
        .carousel-item {
            display: none;
        }

        .owl-carousel .owl-item {
            box-shadow: none;
            /* Menghapus shadow */
        }

        .carousel-item-visible {
            display: block;
        }
    </style>
    <script>
        const carousel = document.getElementById('carousel');
        const items = carousel.querySelectorAll('.carousel-item');
        let currentIndex = 0;

        function showNextSlide() {
            items[currentIndex].classList.remove('carousel-item-visible');
            currentIndex = (currentIndex + 1) % items.length;
            items[currentIndex].classList.add('carousel-item-visible');
        }

        items[currentIndex].classList.add('carousel-item-visible');
        setInterval(showNextSlide, 3000);
    </script>
@endsection
