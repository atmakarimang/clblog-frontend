<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Postingan extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    protected $with = ['kategori', 'user'];

    // relasi
    public function Kategori()
    {
        //one to one
        return $this->belongsTo(Kategori::class);
    }

    public function User()
    {
        return $this->belongsTo(User::class);
    }
}
