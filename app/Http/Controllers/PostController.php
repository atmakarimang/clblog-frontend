<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Postingan;
use Illuminate\Support\Facades\Http;

class PostController extends Controller
{
    public function index()
    {
        $dPost = Http::get('http://localhost:3000/postdata')->json();
        return view('blog', [
            "title" => "Semua Postingan",
            "active" => "Blog",
            'postinganblog' => $dPost
        ]);
    }

    public function show($post)
    {
        $url = "http://localhost:3000/postdata/$post";
        $dPost = Http::get($url)->json();
        return view('post', [
            "title" => "Single Post",
            "active" => "Blog",
            "postinganblog"  => $dPost
        ]);
    }
}
