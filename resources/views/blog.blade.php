@extends('layout.main')

@section('halaman') 
  <h1 class="mb-4">{{ $title }}</h1> 

  @if($postinganblog->count())
  <div class="card mb-3">
    <img src="https://source.unsplash.com/1200x400/?{{ $postinganblog[0]->kategori->nama }}" class="card-img-top" alt="...">
    <div class="card-body text-center">
      <h3 class="card-title"><a href="/blog/{{ $postinganblog[0]->slug }}" class="text-decoration-none text-dark">{{ $postinganblog[0]->judul }}</a></h3>
      <p>
        <small class="text-muted">
          By. <a href="/authors/{{ $postinganblog[0]->user->username }}" class="text-decoration-none">{{ $postinganblog[0]->user->name }}</a> in <a href="/kategori/{{ $postinganblog[0]->kategori->slug }}" class="text-decoration-none">{{ $postinganblog[0]->kategori->nama }}</a> {{ $postinganblog[0]->created_at->diffForHumans() }}
        </small>
      </p>
      <p class="card-text">{{ $postinganblog[0]->isi }}</p> 
      <a href="/blog/{{ $postinganblog[0]->slug }}" class="text-decoration-none btn btn-primary">Read more</a>
    </div>
  </div>

  <div class="container">
    <div class="row">
      @foreach ($postinganblog->skip(1) as $post)  
      <div class="col-md-6 mb-3">
        <div class="card"> 
          <div class="position-absolute px-3 py-2" style="background-color: rgba(0, 0, 0, 0.7)">
            <a href="/kategori/{{ $post->kategori->slug }}" class="text-white text-decoration-none">
              {{ $post->kategori->nama }} 
            </a>
          </div>
          <img src="https://source.unsplash.com/400x300/?{{ $post->kategori->nama }}" class="card-img-top" alt="{{ $post->kategori->nama }}">
          <div class="card-body">
            <h5 class="card-title">{{ $post->judul }}</h5>
            <p> 
              <small class="text-muted">
                By. <a href="/authors/{{ $post->user->username }}" class="text-decoration-none">{{ $post->user->name }}</a> {{ $post->created_at->diffForHumans() }}
              </small> 
            </p>
            <p class="card-text">{{ $post->isi }}</p>  
            <a href="/blog/{{ $post->slug }}" class="btn btn-primary">Read more</a>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div> 

  @else 
    <p class="text-center fs-4">Tidak Ada Postingan</p>
  @endif

@endsection