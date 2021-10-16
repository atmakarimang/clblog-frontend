@extends('layout.main')

@section('halaman') 
  <h1 class="mb-4">{{ $title }}</h1>

  <div class="container">
    <div class="row">
      @foreach ($postinganblog['data'] as $post)  
      <div class="col-md-6 mb-3">
        <div class="card"> 
          <img src="https://source.unsplash.com/400x300/?{{ "computer" }}" class="card-img-top" alt="{{ "computer" }}">
          <div class="card-body">
            <h5 class="card-title">{{ $post['title'] }}</h5>
            <p> 
              <small class="text-muted">
                By. <a href="/authors/{{ "Atma" }}" class="text-decoration-none">{{ "Atma" }}</a>
              </small> 
            </p>
            <p class="card-text">{{ $post['content'] }}</p>  
            <a href="/blog/{{ $post['slug'] }}" class="btn btn-primary">Read more</a>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>

@endsection