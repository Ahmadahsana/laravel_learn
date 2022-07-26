@extends('layout.main')

@section('container')
  <h1 class="text-white max-w-7xl mx-auto">{{ $post->title }}</h1>
  <h1 class="text-white max-w-7xl mx-auto">postingan ini merupakan <a href="/categories/{{ $post->category->slug }}"> {{ $post->category->name }}</a></h1>
  <article class="mb-3 text-white max-w-7xl mx-auto px-4">
    {{ $post->body }}
  </article>
  
@endsection