@extends('layout.main')

@section('container')
  <h1>Halaman Posts</h1>
  <article class="mb-3">
    @foreach ($posts as $post)
        <a href="/posts/{{ $post['slug'] }}"><h5>{{ $post['title'] }}</h5></a>
        <p>{{ $post['body'] }}</p>
    @endforeach
  </article>
@endsection