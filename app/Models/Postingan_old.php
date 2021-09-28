<?php

namespace App\Models; 

class Postingan
{
    private static $postinganblog = [
        [
            "judul" => "Manchester United Menang",
            "slug" => "judul-post-pertama",
            "author" => "Ahmad Reskey",
            "isi" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa omnis deserunt repellendus maxime reprehenderit reiciendis ut tempore quo, alias deleniti inventore quis, pariatur molestias vero cum voluptatibus architecto totam quod quos recusandae necessitatibus dignissimos culpa error id! Libero facere officia amet distinctio eveniet, placeat eligendi illo debitis! Totam, atque minus?"
        ],
        [
            "judul" => "Manchester United Heroes",
            "slug" => "judul-post-kedua",   
            "author" => "Deva Mahendra", 
            "isi" => "Ipsa omnis deserunt repellendus maxime reprehenderit reiciendis ut tempore quo, alias deleniti inventore quis, pariatur molestias vero cum voluptatibus architecto totam quod quos recusandae necessitatibus dignissimos culpa error id! Libero facere officia amet distinctio eveniet, placeat eligendi illo debitis! Totam, atque minus?"
        ],
    ];  

    public static function all(){
        return collect(self::$postinganblog);
    }

    public static function cari($slug){ 
        $posts = static::all(); 
        //where slug nya sesuai
        return $posts->firstWhere('slug',$slug); 
    }
}
