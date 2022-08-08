@extends('layout.main')


@section('nocontainer')


    <div class="flex">
        @include('partial.sidebar')
        
        <div class="container mx-6 py-4">
            <div class="flex justify-center mt-12">
                <div class="flex shadow-lg ring-slate-100 ring-1 dark:text-white dark:ring-black dark:ring-1">
                    <div class="bg-violet-600 w-80">
        
                        <div class="relative m-4">
                            <div class="relative z-20 bg-white dark:bg-slate-700 h-full rounded-md shadow-md">
                                <div class="w-full h-36 bg-slate-300 dark:bg-slate-700 rounded-t-md overflow-hidden"
                                    style="background-size: cover;">
                                    <img id="gambarEdit" src="{{ url('landing/public/img/'. $Edit->image) }}" alt="" class="w-full">
                                </div>
                                <div class="px-2">
                                    <h2 id="judul" class="pt-2 font-bold text-xl text-gray-800 dark:text-white">{{ $Edit->name }}</h2>
                                    <p id="deskripsi" class="pt-1">
                                        {{ $Edit->description }}
                                    </p>
                                </div>
                            </div>
                        </div>
        
                    </div>
                    <div class="w-full dark:bg-slate-700">
                        <div class="p-6">
                            <p class="pb-1">Nama :</p>
                            <input id="nama" type="text"
                                class="mb-4 w-full rounded-sm px-2 py-1 ring-1 ring-violet-600 focus:outline-none focus:ring-2 focus:ring-violet-600 dark:bg-slate-800" value="{{ $Edit->name }}">
                            <p class="pb-1">Alamat :</p>
                            <input id="nama" type="text"
                                class="mb-4 w-full rounded-sm px-2 py-1 ring-1 ring-violet-600 focus:outline-none focus:ring-2 focus:ring-violet-600 dark:bg-slate-800" value="{{ $Edit->address }}">
                            <p class="pb-1">Deskripsi :</p>
                            <textarea id="des" type="text"
                                class="mb-4 w-full rounded-sm px-2 py-1 ring-1 ring-violet-600 focus:outline-none focus:ring-2 focus:ring-violet-600 dark:bg-slate-800">{{ $Edit->description }}</textarea>
                            <p class="pb-1">Gambar :</p>
                            <input id="gambar" type="file"
                                class="mb-4 w-full rounded-sm px-2 py-1 ring-1 ring-violet-600 focus:outline-none focus:ring-2 focus:ring-violet-600 dark:bg-slate-800">
                            <p class="pb-1">Status :</p>
                            <select name="" id=""
                                class="mb-4 w-full rounded-sm px-2 py-1 ring-1 ring-violet-600 focus:outline-none focus:ring-2 focus:ring-violet-600 dark:bg-slate-800">
                                <option value="1" class="rounded-sm bg-gray-800">Aktif</option>
                                <option value="0" class="rounded-sm">NonAktif</option>
                            </select>
                            <div class="flex justify-end">
                                <a href="" class="px-3 py-1 bg-violet-600 rounded-md text-white ml-3">Cancel</a>
                                <a href="" class="px-3 py-1 bg-violet-600 rounded-md text-white ml-3">save</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        
    </div>
@endsection

{{-- {{ dd($Edit) }} --}}