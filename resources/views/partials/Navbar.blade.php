<nav class="shadow-lg sticky top-4 z-50 bg-slate-300 rounded-full mb-10 mr-10 ml-10">
    <div class="container mx-auto px-2 flex justify-between items-center py-4">
        <!-- Logo dan Judul -->
        <div class="flex items-center text-sky-900">
            <!-- <img src="{{ asset('image/download (1).png') }}" alt="Logo" class="h-12 w-12 rounded-full"> -->
            <a href="{{ url('/') }}" class="text-2xl font-bold py-2">NdMovies</a>
            <div id="menu" class="hidden md:flex text-sky-950 text-xl font-bold">
                <a href="{{ url('/') }}" class="py-2 px-10 hover:border-b-2 hover:border-sky-500 hover:rounded-full font-medium">
                    All Genre
                </a>
                <a href="{{ url('tentang-kami') }}" class="hover:border-b-2 hover:border-sky-500 hover:rounded-full py-2 px-4 font-medium">
                    Home
                </a>
            </div>
        </div>
        <!-- Menu Navigasi -->
        <div class="space-x-3 hidden md:flex">
            <form>
                <div class="flex justify-center">
                    <div class="relative w-full" id="input">
                        <input placeholder="Search..." name="q"
                            class="block w-full text-sm h-11 px-4 text-slate-900 bg-white rounded-full border-2 border-slate-400 appearance-none focus:border-transparent focus:outline focus:outline-2 focus:outline-secondaryy focus:ring-0 hover:border-brand-500-secondary- peer invalid:border-error-500 invalid:focus:border-error-500 overflow-ellipsis overflow-hidden text-nowrap pr-[48px]"
                            id="floating_outlined" type="text" value="{{ $search ?? '' }}" />
                        <div class="absolute top-2 right-4">
                            <button type="submit">
                                <i class="fa-solid fa-magnifying-glass text-2xl"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </form>
            <a href="/auth/register" class="bg-sky-900 py-2 px-4 text-center text-md text-white shadow-xl rounded-full font-semibold">
                <i class="fa-solid fa-user"></i>
            </a>
        </div>
    </div>
</nav>
