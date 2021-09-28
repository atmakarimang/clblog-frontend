@extends('layout.main')

@section('halaman') 
  <h1>Kategori : {{ $kategori }}</h1>
    @foreach ($posts as $post)
      <article class="mb-5">   
        <h2>
            <a href="/blog/{{ $post["slug"] }}">{{ $post["judul"] }}</a>
        </h2>     
        <h5>By : {{ $post["author"] }}</h5>
        <p>{{ $post["isi"] }}</p> 
      </article> 
    @endforeach

@endsection