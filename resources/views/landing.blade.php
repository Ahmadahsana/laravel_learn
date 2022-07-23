@extends('layout.main')

@section('container')



    {{-- <div class="min-h-0 flex flex-col justify-center">
        <div class="relative p-12 w-full sm:max-w-2xl sm:mx-auto">
            <div class="overflow-hidden z-0 rounded-full relative p-3">
                <form role="form" class="relative flex z-50 bg-white rounded-full">
                    <input type="text" placeholder="enter your search here"
                        class="rounded-full flex-1 px-6 py-4 text-gray-700 focus:outline-none">
                    <button
                        class="bg-indigo-500 text-white rounded-full font-semibold px-8 py-4 hover:bg-indigo-400 focus:bg-indigo-600 focus:outline-none">Search</button>
                </form>
                <div class="glow glow-1 z-10 bg-pink-400 absolute"></div>
                <div class="glow glow-2 z-20 bg-purple-400 absolute"></div>
                <div class="glow glow-3 z-30 bg-teal-400 absolute"></div>
                <div class="glow glow-4 z-40 bg-blue-400 absolute"></div>
            </div>
        </div>
    </div> --}}

    <section id="service" class="pt-8 pb-28 px-8">
        <div class="max-w-7xl mx-auto">
            {{-- <div class="text-center">
                <h1 class="text-4xl text-white">Service</h1>
                <!-- <p class="pt-2">INI DAFTAR APLIKASI PURA IT</p> -->
            </div> --}}
            <div class="mt-8 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gab-20">
                <a href="@php
                    echo ("http://192.168.16.8/pura_keluhan");
                @endphp">
                <div class="relative mx-12 my-8">
                    <div
                        class="absolute z-10 inset-0 bg-gradient-to-r from-violet-500 to-teal-500 shadow-lg transform -skew-y-6 sm:skew-y-0 sm:-rotate-6 sm:rounded-lg">
                    </div>
                    <div class="relative z-20 bg-white h-full rounded-md shadow-md ">
                        <div class="w-full h-44 bg-slate-300 rounded-t-md"
                            style="background-image: url('public/img/pura_keluhan.png'); background-size: cover;">
                        </div>
                        <div class="px-4 pb-4">
                            <h2 class="pt-3 font-bold text-2xl text-gray-800">Pura Keluhan</h2>
                            <p class="pt-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque totam magnam
                                debitis nisi
                                </p>
                        </div>
                    </div>
                </div>
                </a>
                <a href="@php
                echo ("http://192.168.16.8/pura_webreport");
                @endphp">
                <div class="relative mx-12 my-8">
                    <div
                        class="absolute z-10 inset-0 bg-gradient-to-r from-violet-500 to-teal-500 shadow-lg transform -skew-y-6 sm:skew-y-0 sm:-rotate-6 sm:rounded-lg">
                    </div>
                    <div class="relative z-20 bg-white h-full rounded-md shadow-md ">
                        {{-- <img src="public/img/webreport.png" class="rounded-t-md" alt=""> --}}
                        <div class="w-full h-44 bg-white rounded-t-md"
                            style="background-image: url('public/img/webreport.png'); background-size: cover;">
                        </div>
                        <div class="px-4 pb-4">
                            <h2 class="pt-3 font-bold text-2xl text-gray-800">Pura Web report</h2>
                            <p class="pt-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque totam magnam
                                debitis nisi
                                </p>
                        </div>
                    </div>
                </div>
                </a>

                <a href="http://192.168.16.9/pura_gudang/">
                <div class="relative mx-12 my-8">
                    <div
                        class="absolute z-10 inset-0 bg-gradient-to-r from-violet-500 to-teal-500 shadow-lg transform -skew-y-6 sm:skew-y-0 sm:-rotate-6 sm:rounded-lg">
                    </div>
                    <div class="relative z-20 bg-white h-full rounded-md shadow-md ">
                        {{-- <img src="public/img/3.jpg" class="rounded-t-md" alt=""> --}}
                        <div class="w-full h-44 bg-white rounded-t-md"
                            style="background-image: url('public/img/3.jpg'); background-size: cover;">
                        </div>
                        <div class="px-4 pb-4">
                            <h2 class="pt-3 font-bold text-2xl text-gray-800">Pura Gudang</h2>
                            <p class="pt-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque totam magnam
                                debitis nisi
                                </p>
                        </div>
                    </div>
                </div>
                </a>
                <a href="http://192.168.16.9/pura_gudang/">
                <div class="relative mx-12 my-8">
                    <div
                        class="absolute z-10 inset-0 bg-gradient-to-r from-violet-500 to-teal-500 shadow-lg transform -skew-y-6 sm:skew-y-0 sm:-rotate-6 sm:rounded-lg">
                    </div>
                    <div class="relative z-20 bg-white h-full rounded-md shadow-md ">
                        {{-- <img src="public/img/3.jpg" class="rounded-t-md" alt=""> --}}
                        <div class="w-full h-44 bg-white rounded-t-md"
                            style="background-image: url('public/img/3.jpg'); background-size: cover;">
                        </div>
                        <div class="px-4 pb-4">
                            <h2 class="pt-3 font-bold text-2xl text-gray-800">Pura Gudang</h2>
                            <p class="pt-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque totam magnam
                                debitis nisi
                                </p>
                        </div>
                    </div>
                </div>
                </a>
                <a href="http://192.168.16.9/pura_gudang/">
                <div class="relative mx-12 my-8">
                    <div
                        class="absolute z-10 inset-0 bg-gradient-to-r from-violet-500 to-teal-500 shadow-lg transform -skew-y-6 sm:skew-y-0 sm:-rotate-6 sm:rounded-lg">
                    </div>
                    <div class="relative z-20 bg-white h-full rounded-md shadow-md ">
                        {{-- <img src="public/img/3.jpg" class="rounded-t-md" alt=""> --}}
                        <div class="w-full h-44 bg-white rounded-t-md"
                            style="background-image: url('public/img/3.jpg'); background-size: cover;">
                        </div>
                        <div class="px-4 pb-4">
                            <h2 class="pt-3 font-bold text-2xl text-gray-800">Pura Gudang</h2>
                            <p class="pt-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque totam magnam
                                debitis nisi
                                </p>
                        </div>
                    </div>
                </div>
                </a>
                <a href="http://192.168.16.9/pura_gudang/">
                <div class="relative mx-12 my-8">
                    <div
                        class="absolute z-10 inset-0 bg-gradient-to-r from-violet-500 to-teal-500 shadow-lg transform -skew-y-6 sm:skew-y-0 sm:-rotate-6 sm:rounded-lg">
                    </div>
                    <div class="relative z-20 bg-white h-full rounded-md shadow-md ">
                        {{-- <img src="public/img/3.jpg" class="rounded-t-md" alt=""> --}}
                        <div class="w-full h-44 bg-white rounded-t-md"
                            style="background-image: url('public/img/3.jpg'); background-size: cover;">
                        </div>
                        <div class="px-4 pb-4">
                            <h2 class="pt-3 font-bold text-2xl text-gray-800">Pura Gudang</h2>
                            <p class="pt-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque totam magnam
                                debitis nisi
                                </p>
                        </div>
                    </div>
                </div>
                </a>
                <a href="http://192.168.16.9/pura_gudang/">
                <div class="relative mx-12 my-8">
                    <div
                        class="absolute z-10 inset-0 bg-gradient-to-r from-violet-500 to-teal-500 shadow-lg transform -skew-y-6 sm:skew-y-0 sm:-rotate-6 sm:rounded-lg">
                    </div>
                    <div class="relative z-20 bg-white h-full rounded-md shadow-md ">
                        {{-- <img src="public/img/3.jpg" class="rounded-t-md" alt=""> --}}
                        <div class="w-full h-44 bg-white rounded-t-md"
                            style="background-image: url('public/img/3.jpg'); background-size: cover;">
                        </div>
                        <div class="px-4 pb-4">
                            <h2 class="pt-3 font-bold text-2xl text-gray-800">Pura Gudang</h2>
                            <p class="pt-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque totam magnam
                                debitis nisi
                                </p>
                        </div>
                    </div>
                </div>
                </a>
                
                
                
            </div>
        </div>
    </section>

    

    <div class="mt-96 mb-96"></div>
    <!-- <h1 class="text-7xl font-extrabold text-amber-300 drop-shadow-lg ">Hello World</h1> -->

    @endsection