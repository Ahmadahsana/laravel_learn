@extends('layout.main')

@section('container')
  {{-- <h1 class="text-white max-w-7xl mx-auto">{{ $category }}</h1> --}}
  <article class="mb-3 text-white max-w-7xl mx-auto px-4">
    @foreach ($categories as $category)
        <a href="/categories/{{ $category->slug }}"><h5 class="text-2xl">{{ $category->name }}</h5></a>
        
    @endforeach
    
    {{-- {{ dd($categories) }} --}}
  </article>
@endsection