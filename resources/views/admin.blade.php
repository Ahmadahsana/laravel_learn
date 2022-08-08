@extends('layout.main')


@section('nocontainer')


    <div class="flex">
        @include('partial.sidebar')
        
        <div class="w-3/5 mx-auto">
        <div class=" mx-auto mt-24 p-8 rounded-md shadow-md text-center bg-slate-50 dark:bg-slate-600 dark:text-white hover:bg-violet-100">
            <h1 class="text-2xl">Selamat datang di halaman admin Dashboard IT Service</h1>
        </div>
    </div>
    </div>
@endsection