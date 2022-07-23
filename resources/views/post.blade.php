@extends('layout.main')

@section('container')
  <h1 class="text-white max-w-7xl mx-auto">Halaman Posts</h1>
  <article class="mb-3 text-white max-w-7xl mx-auto px-4">
    {{ $posts->body }}
  </article>
  
@endsection