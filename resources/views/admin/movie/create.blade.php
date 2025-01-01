@extends('layout.admin')
@section('content')
    <h1 class="text-3xl font-bold text-black mb-4"> Tambah Movie </h1>
    @include('components.alert')
    <div class="card rounded-3xl bg-slate-50 p-8 shadow-lg">
        <form action="{{ route('movie.store') }}" enctype="multipart/form-data" method="POST">
            @csrf
            @method('POST')
            <div class="mt-5 grid grid-cols-2 gap-4">
                <div>
                    <div class="grid grid-cols-2 gap-3">
                        <div>
                            <span class="text-black text-xl"> Title </span>
                            <input type="text" name="title" id="title" placeholder="Masukan Genre Movie ..."
                                class="input input-bordered w-full mt-3 bg-slate-50 rounded-full border-gray-300 border-2">
                        </div>
                        <div>
                            <span class="text-black text-xl"> Year </span>
                            <input type="text" name="year" id="year" placeholder="Masukan Genre Movie ..."
                                class="input input-bordered w-full mt-3 bg-slate-50 rounded-full border-gray-300 border-2">
                        </div>
                    </div>
                    <div class="grid grid-cols-2 gap-3 mt-4">
                        <div>
                            <span class="text-black text-xl"> Genre </span>
                            <select
                                class="select select-bordered text-lg font-semibold text-sky-950 w-full mt-3 rounded-full bg-white border-gray-300 border-2"
                                name="genre_id">
                                <option disabled selected>Pilih Genre?</option>
                                @forelse ($genre as $data)
                                    <option value={{ $data->id }} class="text-lg text-sky-950"> {{ $data->name }}
                                    </option>
                                @empty
                                    <option value=""> Tidak Ada Genre</option>
                                @endforelse
                            </select>
                        </div>
                        <div class=" flex space-x-2 mt-6">

                            <input type="checkbox" class="toggle toggle-info bg-white mt-9" checked="checked"
                                name="available" />
                            <span class="text-black mt-10 text-md"> *Available </span>
                        </div>
                    </div>

                    <div>
                        <span class="text-black text-xl"> Synopsis </span>
                        <textarea class="textarea textarea-bordered w-full mt-3 bg-slate-50 rounded-2xl border-gray-300 border-2"
                            name="synopsis" placeholder="Bio"></textarea>
                    </div>
                </div>
                <div class="flex items-center justify-center w-full h-full">
                    <label for="file"
                        class="cursor-pointer bg-slate-50 w-full h-full flex flex-col items-center justify-center p-8 rounded-3xl border-2 border-dashed border-gray-500 shadow-lg">
                        <div class="flex flex-col items-center justify-center gap-2">
                            <i class="fa-solid fa-image text-7xl"></i>
                            <p class="text-center">Click To Upload Image</p>
                            <p class="text-center">Jpeg, Png, Jpg</p>
                            <span class="bg-gray-600 px-4 py-2 rounded-lg text-white hover:bg-gray-800 transition-all">
                                Browse file
                            </span>
                        </div>
                        <input type="file" id="file" class="hidden" name="poster" />
                    </label>
                </div>
            </div>
            <div class="flex justify-end mt-6">
                <button type="submit" class="bg-gray-500 rounded-full px-5 py-5 text-white text-lg font-semibold"> Tambah
                    Movie</button>
            </div>
        </form>
    </div>
@endsection
