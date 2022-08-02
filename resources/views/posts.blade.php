@extends('layout.main')

@section('container')
  <h1 class="text-white max-w-7xl mx-auto">Halaman Posts</h1>
  <article class="mb-3 text-white max-w-7xl mx-auto px-4">
    @foreach ($posts as $post)
        <a href="/posts/{{ $post->slug }}"><h5 class="text-2xl">{{ $post->title }}</h5></a>
        <h1 class="text-white max-w-7xl mx-auto">postingan ini merupakan <a href="/categories/{{ $post->category->slug }}"> {{ $post->category->name }}</a> yang di tulis oleh <a href="">{{ $post->user->name }}</a></h1>
        <p>{{ $post->excerpt }}</p>
        
    @endforeach
    
  </article>
@endsection