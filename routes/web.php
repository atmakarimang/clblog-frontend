<?php

use App\Http\Controllers\PostController;
use App\Models\Kategori;
use App\Models\Postingan;
use App\Models\User;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home', [
        "title" => "Home",
        "active" => "Home"
    ]);
});

Route::get('/about', function () {
    //return 'Halaman About';
    //return view('about'); 
    return view('about', [
        "title" => "About",
        "active" => "About",
        "name" => "Ahmad Reskey",
        "email" => "ahmadreskey@gmail.com",
        "img" => "cr7.jpg"
    ]);
});

Route::get('/blog', [PostController::class, 'index']);

// Halaman Single Post 
//Route::get('blog/{slug}', [PostController::class, 'show']); 
Route::get('blog/{post:slug}', [PostController::class, 'show']);

Route::get('/kategori', function () {
    return view('kategoriall', [
        'title' => 'Kategori',
        'active' => 'Kategori',
        'kategoriall' => Kategori::all()
    ]);
});

Route::get('/kategori/{kategori:slug}', function (Kategori $kategori) {
    return view('blog', [
        'title' => "Kategori Postingan : $kategori->nama",
        'active' => 'Kategori',
        //'posts' => $kategori->postingan
        'postinganblog' => $kategori->postingan
    ]);
});

Route::get('/authors/{author:username}', function (User $author) {
    return view('blog', [
        'title' => "Diposting Oleh : $author->name",
        'postinganblog' => $author->postingan->load('kategori', 'user')
    ]);
});
