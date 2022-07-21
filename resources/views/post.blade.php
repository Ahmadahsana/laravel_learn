@extends('layout.main')

@section('container')
  <h1>Halaman Posts</h1>
  <article class="mb-3">
    @foreach ($posts as $post)
        {{ $post }}
    @endforeach
  </article>
@endsection