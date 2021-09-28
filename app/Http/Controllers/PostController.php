<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Postingan;

class PostController extends Controller
{
    public function index()
    {
        return view('blog', [
            "title" => "Semua Postingan",
            "active" => "Blog",
            //"postinganblog" => Postingan::all()
            //"postinganblog" => Postingan::latest()->get() 
            //"postinganblog" => Postingan::with(['user', 'kategori'])->latest()->get()
            "postinganblog" => Postingan::latest()->get()
        ]);
    }

    public function show(Postingan $post)
    {
        return view('post', [
            "title" => "Single Post",
            "active" => "Blog",
            "post"  => $post
        ]);
    }
}
