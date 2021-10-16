@extends('layout.main')

@section('halaman')

    <div class="container">
        <div class="row justify-content-center mb-5">
            @foreach ($postinganblog['data'] as $post)  
            <div class="col-md-8">
                <h2 class="mb-3">{{ $post["title"] }}</h2> 
                <p>By. Atma</p>
                <!--p>{{ $post["slug"] }}</p-->
                <img src="https://source.unsplash.com/1200x400/?{{ "Computer" }}" alt="{{ "Computer" }}" class="img-fluid">
                
                <article class="my-3 fs-7">
                    {!! $post["content"] !!}
                </article>
                
                <a href="/blog" class="text-decoration-none d-block mt-3">Kembali Ke Blog</a>
            </div>
            @endforeach
        </div>
    </div>

@endsection