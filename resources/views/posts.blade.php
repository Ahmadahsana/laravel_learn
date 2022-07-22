@extends('layout.main')

@section('container')
  <h1 class="text-white max-w-7xl mx-auto">Halaman Posts</h1>
  <article class="mb-3 text-white max-w-7xl mx-auto px-4">
    @foreach ($posts as $post)
        <a href="/posts/{{ $post['slug'] }}"><h5 class="text-2xl">{{ $post['title'] }}</h5></a>
        <p>{{ $post['body'] }}</p>
    @endforeach
  </article>
@endsection